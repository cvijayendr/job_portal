<?php

include_once 'database.php';
$rtype=$_REQUEST['v'];
$r=  mysqli_query($c,"update company set status=1 where cid=$rtype ");
header('Location:admindashboard.php?page=dash');
?>
