<?php

session_start();
unset($_SESSION['aname']);

header('Location:adminlogin.php');
?>
