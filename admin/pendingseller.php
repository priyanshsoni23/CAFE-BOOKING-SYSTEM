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
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Pending Cafeterian</li>
            </ol>
<div class="grid-form1">
<h3 id="form-horizontal">Pending Cafeterian</h3>
<?php $con = mysqli_connect ("localhost","root","","cafeterian");
							$str = "select * from sellerregistration where status='pending' ";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
                            echo"<h4 style='text-align:right'>Number of Pending Requests found: $number</h4>";  ?>
<hr>
  	         <div class="tab-conten">
<form class="form-horizontal" method="post" action="addebook.php">

</form>



<div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
		 <b>
	 <table id="table">
	 <tr>
	 <th> Cafeterian ID </th>
	 <th > First Name</th>
	 <th > Last Name</th>
	 <th > Email</th>
	 <th> User Name</th>
	 <th> Mobile No</th>
	 <th> State </th>
	 <th> City </th>
	 <th> Status </th>
	 <th> Photo </th>
	 <th> Action </th>
  	 </tr>

					 <?php
							$con = mysqli_connect ("localhost","root","","cafeterian");
							$str = "select * from sellerregistration where status = 'pending' ";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['sellerid']. "</td>";
								echo "<td>" .$row['fname']. "</td>";
								echo "<td>" .$row['lname']. "</td>";
								echo "<td>" .$row['email']. "</td>";
                                echo "<td>" .$row['uname']. "</td>";
                                echo "<td>" .$row['mobile']. "</td>";

                                $string = "select * from statemaster where stateid=".$row['stateid']." ";
                                $results = mysqli_query($con,$string);
                                $roww= mysqli_fetch_assoc($results);
                                echo "<td>" .$roww['statename']. "</td>";


                                $stringg = "select * from citymaster where cityid=".$row['cityid']." ";
                                $resultss = mysqli_query($con,$stringg);
                                $rowww= mysqli_fetch_assoc($resultss);
                                echo "<td>" .$rowww['cityname']. "</td>";

                                echo "<td>" .$row['status']. "</td>";
								echo "<td><img src='http://localhost/cafeterian/sellerpic/$row[file]' border=3 height=100 width=100></img></td>";

								echo "<td> <a href = 'viewsellerinfo.php?sellerid=".$row['sellerid']."'>Edit </a> </td>";
								echo "</tr>";

							}
							?>
				 </table>
						</b>
			 </div>
		 </div>
	 </div>
 </div>
 
<?php
include 'footer.php';
?>