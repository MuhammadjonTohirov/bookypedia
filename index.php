<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Home</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <!-- Custom styles-->
    <!--
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito">
    -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">


    <link rel="stylesheet" href="assets/styles/main.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/navbar.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/banner.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/footer.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/top.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/home.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/books.css" type="text/css">

    <link rel="stylesheet" href="assets/styles/style.css" type="text/css">


    <!-- Third party -->
    <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    -->


</head>
<body ng-app="body">
<?php
include_once 'top.php';
//include_once 'home.php';
#include_once 'books-grid.php'; // body of index page
#include_once 'books-list.php';
#include_once 'book-single.php';
// general footer
?>
<a href="#/home">home</a>
<div ng-view>

</div>
<div ng-controller="body_controller">
</div>
<div ng-controller="bookphp_controller">
    <div ng-controller="single_book_controller">

    </div>
</div>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- SCRIPTS -->
<?php
include_once 'footer.php';
?>
<script type="text/javascript" src="assets/scripts/angular/angular.min.js" rel="script"></script>
<script type="text/javascript" src="assets/scripts/angular/angular1.6.4.min.js" rel="script"></script>
<script type="text/javascript" src="assets/scripts/angular/angular2.min.js" rel="script"></script>
<script type="text/javascript"
        src="assets/scripts/angular/http_ajax.googleapis.com_ajax_libs_angularjs_1.4.8_angular.js"
        rel="script"></script>
<script type="text/javascript"
        src="assets/scripts/angular/http_ajax.googleapis.com_ajax_libs_angularjs_1.4.8_angular-route.js"
        rel="script"></script>
<script type="text/javascript" src="assets/scripts/jQuery3.2.0.min.js" rel="script"></script>
<script type="text/javascript" src="app/app-scripts/body_model.js" rel="script"></script>


<script type="text/javascript" src="assets/scripts/jquery-3.2.1.min.js" rel="script"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js" rel="script"></script>

</body>
</html>


