<?php
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
$e = $_POST["password"];
$f = $_POST["address"];
$g = $_POST["state"];
$h = $_POST["city"];
$i = $_POST["phoneno"];
$j = $_POST["pincode"];
$l = $_FILES['image']['name'];
$str = "insert into buyerregistration(fname,lname,email,uname,password,address,cityid,stateid,mobile,pincode,file) values ('$a','$b','$c','$d','$e','$f',$h,$g,'$i','$j','$l')";
$result=mysqli_query($con,$str);
echo $str;
if($result)
{
	header("location:login.php");
}
else
{
     	$message = "Your Are NOt Successfully Registraed";
		echo "<script type='text/javascript'>alert('$message');location='buyerreg.php';</script>";
}
if($email = $_POST["email"])
{
		echo "Mail is already entered";
}
?>