<?php
session_start();
if (!isset($_SESSION['fname']))
{
    header("Location: http://localhost/cafeterian/login.php");
    die();
}
elseif($_SESSION["idtype"] != 'buyer')
{
	header("Location: http://localhost/cafeterian/login.php");
    die();
}

include 'userheader.php';
error_reporting(0);
$con = mysqli_connect("localhost","root","","cafeterian");

?>

<html>
<body>

<h1>

Order Placed Successfully.
</h1>



</body>
</html>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include 'userfooter.php';
?>
