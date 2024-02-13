<?php
session_start();

// Include config file
include "config/config.php";

// Include routes
$routes = require "routes.php";

// Include method Middleware
include "app/Http/Middleware/MethodMiddleware.php";

// Get the request URI
$request_uri = $_SERVER['REQUEST_URI'];
$url_paths = explode("?", $request_uri);
$path = rtrim($url_paths[0], "/");
$found = false;

// Create an instance of MethodMiddleware
$methodMiddleware = new MethodMiddleware();

// Loop through routes
foreach ($routes as $pattern => $route) {
    $pattern = rtrim($pattern, "/");
    if ($path === $pattern) {
        $found = true;
        $controller_path = "app/Http/Controllers/" . $route['controller'] . ".php";

        // Check if controller file exists
        if (file_exists($controller_path)) {
            include $controller_path;
            $controller_name = $route['controller'];
            $method = $route['method'];

            // Check if controller class exists
            if (class_exists($controller_name)) {
                $controller = new $controller_name();

                // Check if method exists in controller
                if (method_exists($controller, $method)) {
                    $methodMiddleware->handle();
                    $controller->$method();
                } else {
                    // Method not found
                    http_response_code(500);
                    echo "500 Internal Server Error: Method not found";
                }
            } else {
                // Controller class not found
                http_response_code(500);
                echo "500 Internal Server Error: Controller class not found";
            }
        } else {
            // Controller file not found
            http_response_code(500);
            echo "500 Internal Server Error: Controller file not found";
        }

        break;
    }
}

// If route not found
if (!$found) {
    http_response_code(404);
    echo "404 File Not Found";
}
