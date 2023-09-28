<?php

session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/cafeterian/admin/index.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/cafeterian/admin/index.php");
    die();
}
	$con = mysqli_connect("localhost","root","","cafeterian");
    $a = $_POST['city'];
	$str = "update citymaster set cityname='$a' where cityid = ".$_GET['cityid'];
	mysqli_query($con,$str);
	header("location:city.php");

?>