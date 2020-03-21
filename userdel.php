<?php

include_once 'database.php';

$id=$_GET['v'];
$r=mysqli_query($c,"delete from applyjob where userid=$id");
$s=mysqli_query($c,"delete from user where userid=$id");
header('Location:admindashboard.php?page=user');
?>
