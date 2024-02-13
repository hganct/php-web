<?php
require_once "Database.php";
header("Content-Type: application/json");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $email = $_POST["email"];

    $db = new Database();
    $sql = "INSERT INTO members (username, password, email) VALUES('$usernme', '$password', '$email')";
    $result = $db->query($sql);
    $res = array('message' => 'Đăng ký tài khoản thành công');
    echo json_encode($res);
} else {
    $res = array('message' => 'Đăng ký tài khoản không thành công');
    echo json_encode($res);
}