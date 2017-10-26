<?php
session_start();//session starts here

?>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <title>Admin Login</title>
    </head>
    <style>
        .login-panel {
            margin-top: 150px;

    </style>

    <body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">login as an administrator</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="Admin_login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="admin_name" type="text"
                                           autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="admin_pass" type="password"
                                           value="">
                                </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login"
                                       name="admin_login">


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </body>

    </html>

<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/24/2014
 * Time: 3:26 AM
 */
include("../Database/connection.php");

if (isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.
{
    $user_name = $_POST['admin_name'];
    $user_pass = $_POST['admin_pass'];

    $check_user = "select * from admin WHERE admin_name='$user_name' AND admin_pass='$user_pass'";

    $run = $dbcon->prepare($check_user);
    $run->execute();
    $arr = $run->fetchAll();
//    foreach ($arr as $r){
//        echo $r[1];
//    }
    if (count($arr) > 0) {
        if ($arr[0][1] == $user_name && $arr[0][2] == $user_pass) {
            echo "<script>window.open('Index.php','_self')</script>";
            $_SESSION['admin_name'] = $user_name;//here session is used and value of $user_email store in $_SESSION.

        }
    } else {
        echo "<script>alert('admin name or password is incorrect!')</script>";
    }

}

?>