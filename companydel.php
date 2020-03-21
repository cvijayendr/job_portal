<?php

include_once 'database.php';

$id=$_GET['v'];
$r=mysqli_query($c,"delete from jobpost where cid=$id");
$s=mysqli_query($c,"delete from company where cid=$id");
header('Location:admindashboard.php?page=company');
?>
