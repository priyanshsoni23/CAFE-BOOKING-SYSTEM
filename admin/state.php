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
<?php
$a = "";
if(isset($_GET['stateid']))
{
	$con = mysqli_connect ("localhost","root","","cafeterian");
	$str = "select * from statemaster where stateid=".$_GET['stateid'];
	$result = mysqli_query($con, $str);
	$r = mysqli_fetch_array($result);
	$a = $r['statename'];
}
?>	
	<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Masters<i class="fa fa-angle-right"></i>State</li>
	</ol>
	<div class="page-container">
			<div class="grid-form1">
			<h3>State</h3>
				<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
		<form class="form-horizontal" method="post" action="
	<?php	if(isset($_GET['stateid']))
	{
		echo "editstate.php?stateid=".$_GET['stateid'];
	}
	else
	{
		echo "addstate.php";
	}
	?>">
			<div class="form-group">
			<div class="form-group">
		<label for="inputadd4reg" class="col-sm-2 control-label hor-form">State</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="inputadd4reg" name="statename" placeholder="Enter your state" value="<?php echo $a; ?>" required>

			</div>
	</div>
				<div class="col-sm-8 col-sm-offset-2">
					<br/> <br/>
					<div>
					<button class="btn-primary btn">Submit</button>
					<input type="reset" class="btn-inverse btn" value="Cancel" > 
			
					<br/>
				</div>
				</form>
				<br/><br/>
</div>

			<div class="container">
				<div class="row">
					<div class="col m-auto">
						<div class="card mt-5">
		<table id="table">
		<tr >
		<th> Stateid </th>
		<th> Name </th>
		<th> Edit </th>
		<th> Delete </th>
		</tr>
		<?php
			$con = mysqli_connect ("localhost","root","","cafeterian");
			$str = "select * from statemaster";
			$result = mysqli_query($con,$str);
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" .$row['stateid']. "</td>";
				echo "<td>" .$row['statename']. "</td>";

			echo "<td> <a href = 'state.php?stateid=".$row['stateid']."'>Edit </a> </td>";
			echo "<td> <a href = 'deletestate.php?stateid=".$row['stateid']."'>Delete </a> </td>";
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

