<?php
session_start();

if (!$_SESSION['admin_name']) {
    header("Location: Admin_login.php");//redirect to login page to secure the welcome page without login access.
}
?>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <link type="text/css" rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../../assets/bootstrap/css/regular.css">
    <!--css file link in bootstrap folder-->
    <!--    <base href="/">-->
    <title>admin</title>


    <script type="text/javascript"
            src="../../assets/scripts/angular/http_ajax.googleapis.com_ajax_libs_angularjs_1.2.15_angular.js"></script>
    <script type="text/javascript"
            src="../../assets/scripts/angular/http_ajax.googleapis.com_ajax_libs_angularjs_1.3.14_angular.js"></script>
    <script type="text/javascript"
            src="../../assets/scripts/angular/http_ajax.googleapis.com_ajax_libs_angularjs_1.2.25_angular-route.js"></script>


    <script src="../app-scripts/admin_model.js" type="text/javascript"></script>
    <base href="http://localhost/internetprogramming/finalproject/app/admin/">

</head>

<body>
<div ng-app="admin">
    <nav class="navbar" style="background-color: #66afe9">
        <div class="container">
            <span class="admin_page_header"><?= "welcome ".$_SESSION['admin_name']?><span>     |     </span><a href="../authorization/Logout.php" style="color: white; text-decoration: none" class="glyphicon glyphicon-off"></a></span>
            <div class="navbar-header">
                <ul class="nav navbar-nav" >
                    <li>
                        <a href="#users">view users</a>
                    </li>
                    <li>
                        <a href="#books">view books</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" ng-view>

    </div>


    <div ng-controller="admin_user_controller">
    </div>
    <div ng-controller="admin_book_controller">
    </div>
</div>


<script type="text/javascript" src="../../assets/scripts/angular/angular.min.js" rel="script"></script>
<script type="text/javascript" src="../../assets/scripts/angular/angular1.6.4.min.js" rel="script"></script>
<script type="text/javascript" src="../../assets/scripts/angular/angular2.min.js" rel="script"></script>
<script type="text/javascript" src="../../assets/scripts/jQuery3.2.0.min.js" rel="script"></script>
<script type="text/javascript" src="../../assets/scripts/angular/angular.min_2.js" rel="script"></script>

<script type="text/javascript" src="../../assets/scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>