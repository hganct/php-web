<?php
header("Content-Type: application/json");
require_once "AccountRead.php";

$data = new AccountRead();
$data->getAccount();