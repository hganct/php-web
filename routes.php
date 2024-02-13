<?php
return [
    "/myweb" => [
        "controller" => "HomeController",
        "method" => "showIndex"
    ],
    "/myweb/about" => [
        "controller" => "AboutController",
        "method" => "showIndex"
    ],
    "/myweb/dashboard" => [
        "controller" => "AdminController",
        "method" => "showIndex"
    ],
    "/myweb/account-manager" => [
        "controller" => "AdminController",
        "method" => "accountManagement"
    ],
    "/myweb/register" => [
        "controller" => "HomeController",
        "method" => "registerAccount"
    ],
    // Thêm các định tuyến khác ở đây
];

// Có thể sử dụng các hằng số để định nghĩa tên controller và phương thức
// define("HOME_CONTROLLER", "HomeController");
// define("ABOUT_CONTROLLER", "AboutController");
// define("INDEX_METHOD", "showIndex");
// define("ABOUT_METHOD", "showAbout");
?>