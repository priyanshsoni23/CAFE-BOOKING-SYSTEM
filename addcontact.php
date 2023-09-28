<?php
$con=mysqli_connect("localhost","root","","cafeterian");
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["subject"];
$d=$_POST["number"];
$e=$_POST["message"];
$str="insert into contactus(name,email,subject,contactno,message)values('$a','$b','$c','$d','$e')";
$result = mysqli_query($con,$str);

if($result)
{

     	$message = "Your Contact Detailed Saved Succ. Admin contact as soon as possible.";
		echo "<script type='text/javascript'>alert('$message');location='contact.php';</script>";
}

?>