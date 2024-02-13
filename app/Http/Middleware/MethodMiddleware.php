<?php
class MethodMiddleware
{
    public function handle()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET':
                $this->handleGetRequest();
                break;
            case 'POST':
                $this->handlePostRequest();
                break;
            case 'PUT':
                $this->handlePutRequest();
                break;
            case 'DELETE':
                $this->handleDeleteRequest();
                break;
            default:
                http_response_code(405);
                echo "405 Method Not Allowed.";
                exit();
        }
    }

    public function handleGetRequest()
    {
        if (isset($_SESSION['role'])) {
            $log = $_SESSION['role'];
            echo "<script>console.log('$log')</script>";
        }
    }

    public function handlePostRequest()
    {
        echo "Handling POST Request";
    }

    public function handlePutRequest()
    {
        echo "Handling PUT Request";
    }

    public function handleDeleteRequest()
    {
        echo "Handling Delete Request";
    }
}
