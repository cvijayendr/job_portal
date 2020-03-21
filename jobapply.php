<?php

include_once 'database.php';

$id=$_GET['id'];
$p=$_GET['p'];
$t=  mysqli_query($c,"select cid from jobpost where jobpostid=$id ");
$t1=  mysqli_fetch_array($t);
$f=  mysqli_query($c,"select userid from user where email='$p'");
$f1=  mysqli_fetch_array($f);
$p=  mysqli_query($c,"insert into applyjob values('',$id,$t1[0],$f1[0])");
header('Location:dashboard.php');
?>
