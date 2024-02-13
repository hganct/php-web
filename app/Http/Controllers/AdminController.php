<?php
class AdminController
{
    function showIndex()
    {
        $titlePage = "Dashboard | trunglienlearn.com";
        $contentNav = "app/Views/Admin/Nav/DashboardNav.php";
        $contentView = "app/Views/Admin/Pages/AccountManagement.php";
        include_once "app/Views/Admin/Layout/Layout.php";
    }

    function accountManagement()
    {
        $titlePage = "Account | trungtienlearn.com";
        $contentNav = "app/Views/Admin/Nav/DashboardNav.php";
        $contentView = "app/Views/Admin/Pages/AccountManagement.php";
        include_once "app/Views/Admin/Layout/Layout.php";
    }
}