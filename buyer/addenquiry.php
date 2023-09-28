<?php

error_reporting(0);
session_start();
$con = mysqli_connect("localhost","root","","cafeterian");

$a = $_POST["fname"];
$b = $_POST["lname"];
$c = $_POST["email"];
$d = $_POST["phoneno"];
$e = $_POST["message"];
$f = $_POST['id']; 
$g = $_SESSION['buyerid'];
$str = "insert into enquiry(fname, lname, email, phoneno, message, buyerid, cattleid) values ('$a','$b','$c','$d','$e',$g,$f)";

$result = mysqli_query($con,$str);

echo $str;

if($result)
{

     	$message = "Your enquiry Saved Succ. Seller would contact as soon as possible.";
		echo "<script type='text/javascript'>alert('$message');location='inquiryform.php';</script>";
}


?>
