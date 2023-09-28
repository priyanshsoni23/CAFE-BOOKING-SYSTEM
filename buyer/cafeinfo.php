<?php

include 'userheader.php';
$con = mysqli_connect("localhost","root","","cafeterian");
?>


<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

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
.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
</style>
</head>
<body>
<center><h2>Cafe Information</h2></center>
</br>

	<form method="post" action="pgRedirect.php">
	<?php 
$con = mysqli_connect ("localhost","root","","cafeterian");
$str = "select * from cafemaster where cafeid =".$_GET['cafeid'];
$result = mysqli_query($con,$str);
$row = mysqli_fetch_array($result);
$a = $row['cafeid'];
$str1 = "select * from statemaster where stateid=".$row['stateid'];
$result1 = mysqli_query($con,$str1);
$row1 = mysqli_fetch_array($result1);

$str2 = "select * from citymaster where cityid=".$row['cityid'];
$result2 = mysqli_query($con,$str2);
$row2 = mysqli_fetch_array($result2);

?>

		<table border="1" id="customers" align="center" width="50%">
			<tbody>
				<tr>
					<td colspan="2" align="center">
          <?php echo "<img  src='http://localhost/cafeterian/seller/cafe/$row[photo]' alt='' height='300px' width='300px'>"; ?>
          </td>
				</tr>
				<tr>
					<td><label>Cafe ID:</label></td>
					<td><?php   echo $row['cafeid']; ?>
					</td>
				</tr>
				<tr>
					<td><label>Title:</label></td>
					<td><?php   echo $row['cafename']; ?></td>
				</tr>
				<tr>
					<td><label>Address:</label></td>
					<td><?php   echo $row['address']; ?></td>
				</tr>
				<tr>
					<td><label>State Name :</label></td>
					<td><?php   echo $row1['statename']; ?></td>
				</tr>
        <tr>
					<td><label>City Name :</label></td>
					<td><?php   echo $row2['cityname']; ?></td>
				</tr>
        <tr>
					<td><label>Price :</label></td>
					<td><?php   echo $row['price']; ?></td>
				</tr>
        <tr>
					<td><label>Date :</label></td>
					<td><?php   echo $row['date']; ?></td>
				</tr>
        <tr>
					<td><label>Time :</label></td>
					<td> <?php   echo $row['time']; ?></td>
				</tr>
        <tr>
					<td><label>Capacity :</label></td>
					<td> <?php   echo $row['capacity']; ?> Person</td>
				</tr>
        <tr>
					<td><label>Comment</label></td>
					<td> <?php   echo $row['comment']; ?></td>
				</tr>
				<tr>
				
					<td colspan="2" align="center">     <?php echo "<a href='inquiryform.php?cattleid=".$a."' class='cart-btn'>Send Inquiry</a>"; ?>
  </td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>

<?php
include 'userfooter.php';
?>
