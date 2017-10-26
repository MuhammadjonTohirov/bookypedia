<?php
/**
 * Created by PhpStorm.
 * User: M_hacker
 * Date: 10.05.2017
 * Time: 3:38
 */
session_start();
session_destroy();
header("Location: ../admin/Admin_login.php");//redirect to login page to secure the welcome page without login access.
