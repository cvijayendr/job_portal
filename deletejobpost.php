<?php

$id=$_GET['id'];
include_once 'database.php';
$r=  mysqli_query($c,"delete from jobpost where jobpostid=$id");
header('Location:viewjobpost.php');
?>
