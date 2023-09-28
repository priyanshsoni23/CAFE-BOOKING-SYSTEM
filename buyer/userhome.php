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

$con = mysqli_connect("localhost","root","","cafeterian");

?>

<center>
<img  src="..\images\banner1.jpg"  width="100%" hight="50%"  >
</center>


<?php

include 'userfooter.php';

?>
