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


	$str = "delete from statemaster where stateid = ".$_GET['stateid'];
	mysqli_query($con,$str);
	header("location:state.php");

?>