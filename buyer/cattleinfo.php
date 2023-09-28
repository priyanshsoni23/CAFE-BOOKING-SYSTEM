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
<center><h2>Cattle Information</h2></center>
</br>

	<form method="post" action="pgRedirect.php">
	<?php 
$con = mysqli_connect ("localhost","root","","cafeterian");
$str = "select * from cattlemaster where cattleid =".$_GET['cattleid'];
$result = mysqli_query($con,$str);
$row = mysqli_fetch_array($result);
$a = $row['cattleid'];
$str1 = "select * from categorymaster where categoryid=".$row['categoryid'];
$result1 = mysqli_query($con,$str1);
$row1 = mysqli_fetch_array($result1);

$str2 = "select * from subcategorymaster where subcatid=".$row['subcatid'];
$result2 = mysqli_query($con,$str2);
$row2 = mysqli_fetch_array($result2);

?>

		<table border="1" id="customers" align="center" width="50%">
			<tbody>
				<tr>
					<td colspan="2" align="center">
          <?php echo "<img  src='http://localhost/cafeterian/seller/cattle/$row[image]' alt='' height='300px' width='300px'>"; ?>
          </td>
				</tr>
				<tr>
					<td><label>Cattle ID:</label></td>
					<td><?php   echo $row['cattleid']; ?>
					</td>
				</tr>
				<tr>
					<td><label>Title:</label></td>
					<td><?php   echo $row['title']; ?></td>
				</tr>
				<tr>
					<td><label>Description:</label></td>
					<td><?php   echo $row['description']; ?></td>
				</tr>
				<tr>
					<td><label>Category :</label></td>
					<td><?php   echo $row1['name']; ?></td>
				</tr>
        <tr>
					<td><label>Sub Category :</label></td>
					<td><?php   echo $row2['name']; ?></td>
				</tr>
        <tr>
					<td><label>Price :</label></td>
					<td><?php   echo $row['price']; ?></td>
				</tr>
        <tr>
					<td><label>Age :</label></td>
					<td><?php   echo $row['age']; ?></td>
				</tr>
        <tr>
					<td><label>Breed :</label></td>
					<td> <?php   echo $row['breed']; ?></td>
				</tr>
        <tr>
					<td><label>Weight :</label></td>
					<td> <?php   echo $row['weight']; ?> Kgs.</td>
				</tr>
        <tr>
					<td><label>Milk Production :</label></td>
					<td> <?php   echo $row['milkproduction']; ?> Ltr per Day</td>
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
