<?php
session_start();
if (!isset($_SESSION['fname']))
{
    header("Location: http://localhost/cafeterian/login.php");
    die();
}
elseif($_SESSION["idtype"] != 'seller')
{
	header("Location: http://localhost/cafeterian/login.php");
    die();
}
include 'userheader.php';
error_reporting(0);
$con = mysqli_connect("localhost","root","","cafeterian");
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
</style>
</head>
<body>
<center><h2> Book Order Details</h2></center>
</br>
<table id="customers" align="center">
  <tr>
    <th>ID</th>
    <th>Cafe</th>
    <th>Image</th>
    <th>User Full Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Quantity</th>
    <th>Amount</th>
    <th>Date</th>
    <th>Time</th> 
    
  </tr>

<?php 
$con = mysqli_connect ("localhost","root","","cafeterian");
$str = "select * from bookmaster where sellerid=".$_SESSION['sellerid'] ;
$result = mysqli_query($con,$str);
while($row = mysqli_fetch_array($result))
{
  $str1 = "select * from cafemaster where cafeid=".$row['cattleid'];
  $result1 = mysqli_query($con,$str1);
  $row1 = mysqli_fetch_array($result1);

  $str2 = "select * from buyerregistration where buyerid=".$row['buyerid'];
  $result2 = mysqli_query($con,$str2);
  $row2 = mysqli_fetch_array($result2);

 echo "<tr>";
 echo "<td>".$row['bookid']."</td>";
 echo "<td>".$row1['cafename']."</td>";
 echo "<td><img src='http://localhost/cafeterian/seller/cafe/$row1[photo]' border=3 height=100 width=100></img></td>";
						
 echo "<td>".$row2['fname']." ".$row2['lname']."</td>";
 echo "<td>".$row2['email']."</td>";
 echo "<td>".$row2['mobile']."</td>";
 
 echo "<td>".$row['qty']."</td>";
 echo "<td>".$row['amount']."</td>";
 echo "<td>".$row['date1']."</td>";
 echo "<td>".$row['time1']."</td>";								   
  echo "</tr>";
} ?>
</table>
</body>
</html>
<br/>
<br/>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
		include 'userfooter.php';
	?>
