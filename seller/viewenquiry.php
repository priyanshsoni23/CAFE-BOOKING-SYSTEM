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
<div class="container">
<fieldset>
<legend><center><h3 class="agileits_head">View Enquiry</h3></center></legend>
</div>

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

<table id="customers" align="center">
                        <thead>
                        <tr>
                            <th> Enquiry ID </th>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Email </th>
                            <th> Phone No </th>
                            <th> Message </th>
                            
                        </tr>
                        </thead>
                        <tbody>  
                        <?php
							$con = mysqli_connect ("localhost","root","","cafeterian");
							$str = "select * from enquiry";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['enquiryid']. "</td>";
								echo "<td>" .$row['fname']. "</td>";
								echo "<td>" .$row['lname']. "</td>";
								echo "<td>" .$row['email']. "</td>";
                echo "<td>" .$row['phoneno']. "</td>";
                echo "<td>" .$row['message']. "</td>";
                              
                                
								//echo "<td><img src='ebookimages/1.png' border=3 height=100 width=100></img></td>";
							echo "</tr>";
                            }
                            echo"</tbody>";
							?>
</table>
<br/>
<br/>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
		include 'userfooter.php';
	?>
