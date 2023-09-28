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
?>
<?php

include 'header.php';

?>
<?php

include 'menu.php';

?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Reports<i class="fa fa-angle-right"></i>Book Order</li>
            </ol>
<div class="page-container">
 	    <div class="grid-form1">
			 <h3>Book Order</h3>
			 <div class="page-container">
 	    <div class="grid-form1">
			 <?php $con = mysqli_connect ("localhost","root","","cafeterian");
							$str = "select * from bookmaster ";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
                            echo"<h4 style='text-align:right'>Number of Order found: $number</h4>";  ?>
<hr>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						<table id="customers" align="center">
  <tr>
    <th>ID</th>
    <th>Cafe Name</th>
    <th>Image</th>
    <th>Cafeterian Full Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Quantity</th>
    <th>Amount</th>
    <th>Date</th>
    <th>Time</th> 
    
  </tr>

  <?php 
$con = mysqli_connect ("localhost","root","","cafeterian");
$str = "select * from bookmaster" ;
$result = mysqli_query($con,$str);
while($row = mysqli_fetch_array($result))
{
  $str1 = "select * from cafemaster where cafeid=".$row['cattleid'];
  $result1 = mysqli_query($con,$str1);
  $row1 = mysqli_fetch_array($result1);

  $str2 = "select * from sellerregistration where sellerid=".$row['sellerid'];
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

	

			 </div>
		 </div>
	 </div>
 </div>









<?php

include 'footer.php';

?>