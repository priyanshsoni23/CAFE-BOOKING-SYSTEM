<?php

	$con = mysqli_connect("localhost","root","","cafeterian");
	$str = "delete from cafemaster where cafeid = ".$_GET['cafeid'];
	mysqli_query($con,$str);
	header("location:cafemaster.php");
?>