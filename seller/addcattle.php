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
         move_uploaded_file($file_tmp,"cattle/".$file_name);
         
         echo "Success";
      }else{
         print_r($errors);
      }
   }
$a = $_POST["category"];
$b = $_POST["subcategory"];
$c = $_POST["title"];
$d = $_POST["price"];
$e = $_POST["state"];
$f = $_POST["city"];
$h = $_POST["breed"];
$i = $_POST["age"];
$j = $_POST["milkproduction"];
$g = $_POST["weight"];
$m = $_POST['description'];
$l = $_FILES['image']['name'];
$k = $_SESSION["sellerid"];
//$t = $_POST['description'];
$str = "insert into cattlemaster(categoryid, subcatid, title, price, stateid, cityid, age, breed, milkproduction, weight, image, sellerid, description) 
values ($a, $b,'$c','$d', $e, $f,'$i','$h','$j','$g','$l', $k, '$m')";
mysqli_query($con,$str);

echo $str;

header("location:cattlemaster.php");
?>