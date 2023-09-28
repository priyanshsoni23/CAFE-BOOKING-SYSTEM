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
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Masters<i class="fa fa-angle-right"></i>City</li>
            </ol>

 <div class="page-container">
 	    <div class="grid-form1">
  	       <h3>City</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

		<?php
		$a = "";

		if(isset($_GET['cityid']))
		{
			$con = mysqli_connect ("localhost","root","","cafeterian");
			$str = "select * from citymaster where cityid=".$_GET['cityid'];
			$result = mysqli_query($con, $str);
			$r = mysqli_fetch_array($result);
			$a = $r['cityname'];

		}
	?>
							<form class="form-horizontal" method="post" action="<?php
 if(isset($_GET['cityid']))
 {
	 echo "editcity.php?cityid=".$_GET['cityid'];
 }
 else
 {
	 echo "addcity.php";
 }
 ?>">
								<div class="form-group">

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Select your state :</label>
									<div class="col-sm-8">
									<select name="state"  class="form-control1">
									<option>--Select State--</option>
									<?php
										$con=mysqli_connect("localhost","root","","cafeterian");
										$str="select*from statemaster";
										$result= mysqli_query($con,$str);
										while($row=mysqli_fetch_array($result))
										{
											echo "<option value=".$row['stateid'].">".$row['statename']."</option>";
										}
										echo "</select>";
									?>
								</div>
								</div>
								<div class="form-group">
    <label for="inputadd4reg" class="col-sm-2 control-label hor-form">City</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="city" id="inputadd4reg" placeholder="Enter your city" value="<?php echo $a; ?>" required>
    </div>
</div>
<div class="col-sm-8 col-sm-offset-2">
<br/> <br/>
<div>
<button class="btn-primary btn">Submit</button>
<input type="reset" class="btn-inverse btn" value="Cancel" > 
			
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
	<thead>
	 <tr>
	 <th> City Id </th>
	 <th> State Name </th>
	 <th> City Name </th>

	 <th> Edit  </th>
	 <th> Delete </th>
	 </tr>
		 </thead>

					 <?php
							$con = mysqli_connect ("localhost","root","","cafeterian");
							$str = "select * from citymaster";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['cityid']. "</td>";
								$okyar=$row['stateid'];
								$query = "SELECT statename FROM `statemaster` WHERE stateid='$okyar'";
								$results = mysqli_query($con,$query);
								$roww = mysqli_fetch_assoc($results);
								echo "<td>" .$roww['statename']. "</td>";
								echo "<td>" .$row['cityname']. "</td>";
								$row['stateid'];
								echo "<td> <a href = 'city.php?cityid=".$row['cityid']."'>Edit </a> </td>";
								echo "<td> <a href = 'deletecity.php?cityid=".$row['cityid']."'>Delete </a> </td>";
								echo "</tr>";
							}
							?>
				 </table>
			 </div>
		 </div>
	 </div>
 </div>
<?php
include 'footer.php';
?>

