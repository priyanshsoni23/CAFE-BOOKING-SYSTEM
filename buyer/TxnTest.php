<?php
session_start();
include 'userheader.php';
$con = mysqli_connect("localhost","root","","cafeterian");
	 $a = $_GET['cafeid'];
	 $b = $_GET['amt'];
	 //$g = $_POST['ORDER_ID'];
	 //$h = $_POST['INDUSTRY_TYPE_ID'];
	 //$i = $_POST['CHANNEL_ID'];
	 $c = $_GET['sellerid'];
	 $d = $_SESSION['buyerid'];
	 $e = date("m.d.y");
	 $f = date("g:i:s");
	 

	 $sql1 = "select cattleid from bookmaster where  cattleid=".$a;
	 $res = mysqli_query($con,$sql1);

	 if(mysqli_num_rows($res) > 0)
	 {
		$message = "Cafe already booked please select another cafe.";
		echo "<script type='text/javascript'>alert('$message');location='viewcafe.php';</script>";
	 }
	 else
	 {


	 $sql = "INSERT INTO bookmaster (cattleid, sellerid, buyerid, qty, amount, date1, time1) VALUES ($a,$c,$d,1,'$b','$e','$f')";
	 mysqli_query($con, $sql);

	 }
	 //header("location:pgRedirect.php");
  //echo $sql;    
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
</style>
</head>
<body>
<center><h2>Buyer Checkout</h2></center>
</br>

	<form method="post" action="ordersucc.php">
	<?php 
$con = mysqli_connect ("localhost","root","","cafeterian");
$str = "select * from cafemaster where cafeid=".$_GET['cafeid'];
$result = mysqli_query($con,$str);
$row = mysqli_fetch_array($result);

$a = $row['cafeid'];
$b = $row['price'];
?>

		<table border="1" id="customers" align="center">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>Cafe ID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $a; ?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel :*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Amount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php  echo $b; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit" name="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
</body>
</html>

<?php
include 'userfooter.php';
?>
