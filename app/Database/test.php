<?php
/**
 * Created by PhpStorm.
 * User: M_hacker
 * Date: 09.05.2017
 * Time: 11:35
 */
include('connection.php');
$arr = array();
foreach ($dbcon->query('SELECT * from users') as $row) {
    $arr[] = $row;
}
echo json_encode($arr);
