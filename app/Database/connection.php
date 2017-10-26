<?php
/**
 * Created by PhpStorm.
 * User: M_hacker
 * Date: 09.05.2017
 * Time: 9:13
 */

$user = 'root';
$password = '';
$connection = new PDO('mysql:host=localhost;dbname=book_store', $user, $password);
$dbcon = new PDO('mysql:host=localhost;dbname=users', $user, $password);
