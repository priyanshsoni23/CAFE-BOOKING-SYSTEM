<?php
session_start();
if (!isset($_SESSION['fname']))
{
    header("Location: http://localhost/cafeterian/login.php");
    die();
}
if($_POST['password']==$_POST['confpassword'])
{

$_SESSION["sellerid"];
$conn = mysqli_connect("localhost","root","","cafeterian") or die("Connection Error: " . mysqli_error($conn));

if (isset($_POST['submit']) > 0)
 {
    $result = mysqli_query($conn, "SELECT *from sellerregistration WHERE sellerid='" . $_SESSION["sellerid"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["curpassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE sellerregistration set password='" . $_POST["password"] . "' WHERE sellerid='" . $_SESSION["sellerid"] . "'");
        $message = "Password Changed";
        echo "<script type='text/javascript'>alert('$message');location='userchangepass.php';</script>";

    } else
        $message = "Current Password is not correct";
        echo "<script type='text/javascript'>alert('$message');location='userchangepass.php';</script>";

}
}
else{
    $message = "Please check confirm password again";
    echo "<script type='text/javascript'>alert('$message');location='userchangepass.php';</script>";
}
?>