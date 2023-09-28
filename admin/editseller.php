<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/cafeterian/admin/index.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/cafeterian/admin/index.php");
    die();
}

$a="accepted";
$b="rejected";
$c = $_POST['hiddenname'];

$conn = mysqli_connect("localhost","root","","cafeterian");
$selected_radio = $_POST['radiob'];

        $result = mysqli_query($conn, "SELECT *from sellerregistration WHERE sellerid='" . $c . "'");
        $row = mysqli_fetch_array($result);
        if ($_POST["radiob"] == "accepted") {
            mysqli_query($conn, "UPDATE sellerregistration set status='" . $_POST["radiob"] . "' WHERE sellerid='" . $c . "'");
            header("location:pendingseller.php");

        } elseif($_POST["radiob"] == "rejected")
        {
            mysqli_query($conn, "UPDATE sellerregistration set status='" . $_POST["radiob"] . "' WHERE sellerid='" . $c. "'");
            header("location:pendingseller.php");
        }
        else
        {
            echo "<script type='text/javascript'>alert('Wrong Output')</script>";   
        }
header("location:pendingseller.php");
?>


