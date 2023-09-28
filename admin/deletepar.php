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


	$str = "delete from parentmaster where parentid = ".$_GET['parentid'];
	mysqli_query($con,$str);
	header("location:registerstudent.php");

?>