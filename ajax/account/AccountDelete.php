<?php
require_once "Database.php";
header("Content-Type: application/json");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM members WHERE id='$id'";
    $db = new Database();
    $result = $db->query($sql);
    if ($result) {
        $res = array('message' => 'Delete complete.');
        echo json_encode($res);
    } else {
        $res = array('message' => 'Not delete');
        echo json_encode($res);
    }
} else {
    $res = array('message'=> 'Sai phương thức.');
    echo json_encode($res);
}