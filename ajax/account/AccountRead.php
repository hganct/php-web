<?php
include_once("Database.php");
class AccountRead
{
    function getAccount()
    {
        $db = new Database();
        $result = $db->query("SELECT * FROM members");
        if ($result) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            $data = array('message' => 'No records found');
            echo json_encode($data);
        }
    }

}
