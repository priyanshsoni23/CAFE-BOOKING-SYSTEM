<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/cattle/admin/index.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/cattle/admin/index.php");
    die();
}
?>

<?php

include 'header.php';
include 'menu.php';

?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Feedback</li>
            </ol>
<div class="page-container">
 	    <div class="grid-form1">
			 <h3>Feedback</h3>
			 <?php $con = mysqli_connect ("localhost","root","","cafeterian");
							$str = "select * from feedbackmaster ";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
                            echo"<h4 style='text-align:right'>Number of Feedbacks found: $number</h4>";  ?>
<hr>
  	
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="post" >

<div class="form-group">
<div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
<b>
	 <table id="table">
	 <tr>
	 <th> Name </th>
	 <th> Number </th>
	 <th> Email </th>
	 <th> Type </th>
     <th> Feedback </th>

	 <th> Delete </th>
	 </tr>

					 <?php
							$con = mysqli_connect ("localhost","root","","cafeterian");
							$str = "select * from feedbackmaster";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
                                echo "<td>" .$row['name']. "</td>";
                                echo "<td>" .$row['contactno']. "</td>";
								echo "<td>" .$row['email']. "</td>";
								echo "<td>" .$row['type']. "</td>";
                                echo "<td>" .$row['content']. "</td>";


								echo "<td> <a href = 'deletefeedback.php?feedbackid=".$row['feedbackid']."'>Delete </a> </td>";
								echo "</tr>";

							}
							?>


				 </table>
                 </b>

			 </div>
		 </div>
	 </div>
 </div>
						</div>
						</div>
						</div>
</div>

<?php

include 'footer.php';

?>