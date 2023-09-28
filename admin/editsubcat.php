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
    $a = $_POST['subcategoryname'];
	$str = "update subcategorymaster set name='$a' where subcatid = ".$_GET['subcatid'];
	mysqli_query($con,$str);
	header("location:subcategory.php");

?>