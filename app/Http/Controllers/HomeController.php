<?php
require_once "app/models/HomeModel.php";
class HomeController
{
    public function showIndex()
    {
        $model = new HomeModel();
        $isLogin = $model->checkUser();
        if ($isLogin) {
            $getUser = $model->getUser($_POST['username']);
            $_SESSION['username'] = $getUser['username'];
            $_SESSION['id'] = $getUser['id'];
            $_SESSION['role'] = $getUser['role'];
        }
        
        if (isset($_GET['action'])) {
            if ($_GET['action'] === "logout") {
                unset($_SESSION['username']);
                unset($_SESSION['id']);
                unset($_SESSION['role']);
                header("Location: .");
                exit();
            }
        }
        $model->registerAccount();
        $titlePage = "trungtienlearn.com";
        $contentPage = "app/Views/Home/Index.php";
        require "app/Views/Layout/Layout.php";
    }

    function registerAccount()
    {
        $titlePage = "Đăng ký tài khoản | trungtienlearn.com";
        $contentPage = "app/Views/Register/index.php";
        require_once "app/Views/Layout/Layout.php";
    }
}
