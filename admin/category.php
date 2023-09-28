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
?>
 
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
<?php
include 'menu.php';
?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Masters<i class="fa fa-angle-right"></i>Category</li>
            </ol>
 <div class="page-container">
 	    <div class="grid-form1">
  	       <h3>Category</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

		<?php
		$a = "";
		if(isset($_GET['categoryid']))
		{
			$con = mysqli_connect ("localhost","root","","cattle");
			$str = "select * from categorymaster where categoryid=".$_GET['categoryid'];
			$result = mysqli_query($con, $str);
			$r = mysqli_fetch_array($result);
			$a = $r['name'];

		}
	?>

						<form class="form-horizontal" method="post" action="
 <?php
 if(isset($_GET['categoryid']))
 {
	 echo "editcat.php?categoryid=".$_GET['categoryid'];
 }
 else
 {
	 echo "addcategory.php";
 }
 ?>">
                <div class="form-group">
				<label for="inputcategory" class="col-sm-2 control-label hor-form">Category</label>
   		    	<div class="col-sm-8">
    	     	<input type="text" class="form-control" id="inputcategory" name="categoryname" value = "<?php echo $a; ?>" placeholder="Enter a category" required>
					    </div>
				</div>
				<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
				<br/> <br/>
				<button class="btn-primary btn">Submit</button>
                 <input type="reset" class="btn-inverse btn" value="Cancel" > 
			
			</div>
								</div>
							</form>
						</div>
</div>
	   <br/>
 <div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
	 <table id="table">
		 <thead>
	 <tr>
	 <th> Category ID </th>
	 <th> Name </th>
	 <th> Edit  </th>
	 <th> Delete </th>
	 </tr>
		 </thead>
		 <tbody>
					 <?php
							$con = mysqli_connect ("localhost","root","","cattle");
							$str = "select * from categorymaster";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['categoryid']. "</td>";
								echo "<td>" .$row['name']. "</td>";
								echo "<td> <a href = 'category.php?categoryid=".$row['categoryid']."'>Edit </a> </td>";
								echo "<td> <a href = 'deletecat.php?categoryid=".$row['categoryid']."'>Delete </a> </td>";
								echo "</tr>";

							}
							?>

		 </tbody>
				 </table>
			 </div>
		 </div>
	 </div>
 </div>
 	    </div></div>
<?php

include 'footer.php';

?>

