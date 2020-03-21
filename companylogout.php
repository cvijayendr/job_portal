<?php

session_start();
unset($_SESSION['cname']);

header('Location:companylogin.php');
?>