<?php
include 'header.php';
?>
<?php
include 'menu.php';
?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Masters<i class="fa fa-angle-right"></i>Subcategory</li>
            </ol>
 <div class="page-container">
 	    <div class="grid-form1">
  	       <h3>Sub-Category</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						<?php
		$a = "";
		if(isset($_GET['subcatid']))
		{
			$con = mysqli_connect ("localhost","root","","cattle");
			$str = "select * from subcategorymaster where subcatid=".$_GET['subcatid'];
			$result = mysqli_query($con, $str);
			$r = mysqli_fetch_array($result);
			$a = $r['name'];

		}
	?>
<form class="form-horizontal" method="post" action="<?php
 if(isset($_GET['subcatid']))
 {
	 echo "editsubcat.php?subcatid=".$_GET['subcatid'];
 }
 else
 {
	 echo "addsubcat.php";
 }
 ?>">
					  <div class="form-group">
                      <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Category :</label>
									<div class="col-sm-8">
									<select name="categoryname"  class="form-control1">
									<option>--Select Category--</option>
									<?php

										$con=mysqli_connect("localhost","root","","cattle");

										$str="select*from categorymaster";
										$result= mysqli_query($con,$str);
										while($row=mysqli_fetch_array($result))
										{
											echo "<option value=".$row['categoryid'].">".$row['name']."</option>";
										}

										echo "</select>";
									?>
								</div>
								</div>
                                <div class="form-group">
							    <label for="inputsubcat" class="col-sm-2 control-label hor-form">Sub-Category</label>
   				 <div class="col-sm-8">
    	  	<input type="text" class="form-control" id="inputsubcat" name="subcategoryname" placeholder="Enter a sub-category" value="<?php echo $a; ?>">
					    </div>
					  </div>
				<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
				<br/> <br/>
				<button class="btn-primary btn">Submit</button>

				<button class="btn-inverse btn">Cancel</button>
			</div>
								</div>

							</form>
						</div>

  	         </div>
</div>
	   <br/>
	   <div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
	 <table id="table">
	 <tr>
	 <th> Sub-Category Id </th>
	 <th> Category Name </th>
	 <th> Sub-Category Name </th>
	 <th> Edit  </th>
	 <th> Delete </th>
	 </tr>

					 <?php
							$con = mysqli_connect ("localhost","root","","cattle");
							$str = "select * from subcategorymaster";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['subcatid']. "</td>";
								$row['categoryid'];
								$okyar=$row['categoryid'];
								$query = "SELECT name FROM `categorymaster` WHERE categoryid='$okyar'";
								$results = mysqli_query($con,$query);
								$roww = mysqli_fetch_assoc($results);
								echo "<td>" .$roww['name']. "</td>";
								echo "<td>" .$row['name']. "</td>";
								echo "<td> <a href = 'subcategory.php?subcatid=".$row['subcatid']."'>Edit </a> </td>";
								echo "<td> <a href = 'deletesubcat.php?subcatid=".$row['subcatid']."'>Delete </a> </td>";
								echo "</tr>";

							}
							?>
				 </table>
</div>
		 </div>
	 </div>
 </div></div>
<?php
include 'footer.php';
?>

