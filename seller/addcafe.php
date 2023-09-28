<?php
session_start();
error_reporting(0);
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
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"cafe/".$file_name);
         
         echo "Success";
      }else{
         print_r($errors);
      }
   }

$c = $_POST["cafename"];
$d = $_POST["address"];
$e = $_POST["state"];
$f = $_POST["city"];
$h = $_POST["price"];
$i = $_POST["date1"];
$j = $_POST["time1"];
$g = $_POST["capacity"];
$m = $_POST['comment'];
$l = $_FILES['image']['name'];
$k = $_SESSION["sellerid"];
//$t = $_POST['description'];
$str = "insert into cafemaster(cafename, address, stateid, cityid, price, date, time, capacity, comment, photo, sellerid) 
values ('$c','$d', $e, $f,'$h','$i','$j','$g','$m', '$l', $k)";
mysqli_query($con,$str);

echo $str;

header("location:cafemaster.php");
?>