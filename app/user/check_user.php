<?php
session_start();
include "User.php";
$user1 = null;
if($_SESSION['email'])
{
    $name = $_SESSION['email'];
    include_once "../Database/connection.php";
    foreach ($connection->query("select * from customer_info where `user_name`='$name'") as $row){
        $user1 = new User($row[3], $row[0],$row[1], $row[4], $row[5]);
        $user1->set_description($row[3]);
        $user1->set_image($row[2]);
    }
}else{
    header('Location: ../authorization/Login.php');
}
