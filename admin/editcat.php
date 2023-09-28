<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/cattle/admin/index.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/cattle/admin/index.php");
    die();
}
	$con = mysqli_connect("localhost","root","","cattle");
	$a = $_POST['categoryname'];
	$str = "UPDATE categorymaster SET name='$a' WHERE categoryid = ".$_GET['categoryid'];
	mysqli_query($con,$str);
	header("location:category.php");

?>