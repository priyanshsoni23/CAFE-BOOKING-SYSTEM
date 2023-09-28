<?php

error_reporting(0);
$con = mysqli_connect("localhost","root","","cafeterian");

$a = $_POST["name"];
$b = $_POST["mobile"];
$c = $_POST["email"];
$e = $_POST["type"];
$d = $_POST["comment"];
$str = "insert into feedbackmaster(name,contactno,email,type,content) values ('$a','$b','$c','$e','$d')";

mysqli_query($con,$str);

echo $str;

header("location:feedback.php");

?>
