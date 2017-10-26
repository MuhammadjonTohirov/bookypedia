<?php
include("check_user.php");
include("../Database/connection.php");
include "urls.php";
$name = $_SESSION['email'];

$check_user = "select * from user_full_info WHERE `user_name`='$name'";
$run = $dbcon->prepare($check_user);
$run->execute();
$arr = $run->fetchAll();
foreach ($arr as $row) {
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>private profile</title>
    <base href="../../">
</head>
<body>

<img src="<?= $user1->get_user_image(); ?>">
<br>
<?= $user1->username; ?>
<br>
<?= $user1->email; ?>
<br>
<?= $user1->first_name; ?>
<br>
<?= $user1->last_name; ?>
<br>
<a href="<?= urls::get_index() ?>">profile</a>
<a href="Index.php">home</a>
<?php

?>
<?php $array = json_decode($user1->get_orders());
foreach ($array as $ar){
    echo "<br>".$ar->genre;
    echo " | ".$ar->title;
    echo " | ".$ar->ordered_quantity;
    echo "<img src='$ar->image'>";
}
?>
</body>
</html>
