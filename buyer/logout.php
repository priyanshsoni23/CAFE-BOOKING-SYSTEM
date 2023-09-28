<?php
session_start();
session_unset();
session_destroy();
$_SESSION = array();
//echo 'You have been logged out. <a href="http://localhost/cattle/login.php">Go back</a>';
header('location:../login.php')
?>