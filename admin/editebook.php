<?php


session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost:8080/web/admin/index.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost:8080/web/admin/index.php");
    die();
}

	$con = mysqli_connect("localhost","root","","privatetutor");

	$a = $_POST['booktitle'];
	$b = $_POST['bookauthor'];
	$c = $_POST['bookpublication'];




	$str = "UPDATE ebookmaster SET title='$a' , author='$b', publication='$c' WHERE bookid = ".$_GET['bookid'];
	mysqli_query($con,$str);


	header("location:ebooks.php");

?>