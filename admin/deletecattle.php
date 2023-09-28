<?php

	$con = mysqli_connect("localhost","root","","cattle");
	$str = "delete from cattlemaster where cattleid = ".$_GET['cattleid'];
	mysqli_query($con,$str);
	header("location:cattlemaster.php");
?>