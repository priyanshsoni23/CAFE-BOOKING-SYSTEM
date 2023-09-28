<?php
error_reporting(0);
session_start();
$con = mysqli_connect("localhost","root","","cafeterian");
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $expensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose a JPEG or PNG file.";
         echo "<script type='text/javascript'>alert('$errors');location='userupdate.php';</script>";

      }
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"buyerpic/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
$a = $_POST["fname"];
$b = $_POST["lname"];
$c = $_POST["email"];
$d = $_POST["uname"];
$f = $_POST["address"];
$g = $_POST["state"];
$h = $_POST["city"];
$i = $_POST["phoneno"];
$j = $_POST["pincode"];
$l = $_FILES['image']['name'];

if(isset($_FILES['image'])){


$str = "update sellerregistration set fname='$a',lname='$b',email='$c',uname='$d',address='$f',cityid=$h,stateid=$g,mobile='$i',pincode='$j',file='$l' where sellerid=".$_SESSION['sellerid'];
$result=mysqli_query($con,$str);
header("location:userupdate.php");

}
else
{

$str = "update sellerregistration set fname='$a',lname='$b',email='$c',uname='$d',address='$f', cityid=$h, stateid=$g, mobile='$i', pincode='$j' where sellerid=".$_SESSION['sellerid'];
$result=mysqli_query($con,$str);
$message = "Profile Updated Sucessfully.";
echo "<script type='text/javascript'>alert('$message');location='userupdate.php';</script>";

}
if($result)
{

     	$message = "Profile Updated Sucessfully.";
		echo "<script type='text/javascript'>alert('$message');location='userupdate.php';</script>";
}

?>



