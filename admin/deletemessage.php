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


	$str = "delete from contactus where contactid = ".$_GET['contactid'];
	mysqli_query($con,$str);
	header("location:contactmessages.php");

?>