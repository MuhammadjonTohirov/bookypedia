<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <title>Login</title>
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
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="Login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="User Name" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                            <!-- Change this to a button or input when using this as a form -->
                            <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
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

include("../Database/connection.php");

if(isset($_POST['login']))
{
    $user_name=$_POST['username'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_name='$user_name' AND user_pass='$user_pass'";

    $run = $dbcon->prepare($check_user);
    $run->execute();
    $arr = $run->fetchAll();
    if($arr[0][1]==$user_name && $arr[0][2]==$user_pass)
    {
        echo "<script>window.open('../welcome.php','_self')</script>";
        $_SESSION['email']=$user_name;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('UserName or password is incorrect!')</script>";
    }
}
?>