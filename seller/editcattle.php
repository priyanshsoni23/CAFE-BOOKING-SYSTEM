<?php
	$con = mysqli_connect("localhost","root","","cafeterian");

	$a = $_POST['title'];
    $b = $_POST['price'];
    $c = $_POST['age'];
    $d = $_POST['breed'];
    $e = $_POST['milkproduction'];
    $f = $_POST['weight'];
   
	$str = "UPDATE cattlemaster SET title='$a', price='$b', age='$c', breed='$d', milkproduction='$e', weight='$f' WHERE cattleid = ".$_GET['cattleid'];
	mysqli_query($con,$str);
	header("location:cattlemaster.php");

?>