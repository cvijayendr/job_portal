<?php

include_once 'database.php';

$id=$_GET['v'];
$r=mysqli_query($c,"delete from applyjob where jobpostid=$id");
$s=mysqli_query($c,"delete from jobpost where jobpostid=$id");
header('Location:admindashboard.php?page=post');
?>
