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
<?php
if(isset($_GET['cafeid']))
{
	$con = mysqli_connect ("localhost","root","","cafeterian");
	$str = "select * from cafemaster where cafeid=".$_GET['cafeid'];
	$result = mysqli_query($con, $str);
	$r = mysqli_fetch_array($result);
	$a = $r['cafename'];
  $b = $r['address'];
  $c = $r['price'];
  $d = $r['date'];
  $e = $r['time'];
  $f = $r['capacity'];
  $t = $r['comment'];
}
?>	

<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php
 if(isset($_GET['cafeid']))
 {
	 echo "editcafe.php?cafeid=".$_GET['cafeid'];
 }
 else
 {
	 echo "addcafe.php";
 }
 ?>">
<div class="container">
<fieldset>
<legend><center><h3 class="agileits_head">Cafe Master</h3></center></legend>


<div class="form-group">
  <label class="col-md-4 control-label">Cafe Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="cafename" placeholder="Cafe Name" class="form-control" value="<?php echo $a; ?>"  type="text" required>
  </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" value="<?php echo $t; ?>" type="text" required>
    </div>
  </div>
</div>


<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please Select Your State</option>
										<?php	
                      $con = mysqli_connect("localhost","root","","cafeterian");
											$str = "select * from statemaster";
											$result = mysqli_query($con,$str);
											while($row = mysqli_fetch_array($result))
											{
												echo "<option value='".$row['stateid']."'>" .$row['statename'].	"</option>";
											}
											echo "</select>";
											?>
    </select>
  </div>
</div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="city" class="form-control selectpicker" >
      <option value=" " >Please select your City</option>
										<?php
                      $con = mysqli_connect("localhost","root","","cafeterian");
											$str = "select * from citymaster";
											$result = mysqli_query($con,$str);
											while($row = mysqli_fetch_array($result))
											{
												echo "<option value='".$row['cityid']."'>" .$row['cityname'].	"</option>";
											}
											echo "</select>";
											?>
										
    </select>
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Price </label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="price" placeholder="Price" class="form-control" value="<?php echo $b; ?>" type="text" required>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Date</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="date1" placeholder="Date" class="form-control" value="<?php echo $d; ?>" type="date" required>
    </div>
  </div>
</div> 
       
    
<div class="form-group">
  <label class="col-md-4 control-label">Time</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <select name="time1" class="form-control selectpicker" >
            <option value=" " >-- Time --</option>
			<option value="Morning(9 to 12)" >9AM to 12PM</option>
			<option value="Afternoon(12 to 3)" >12PM to 3PM</option>
			<option value="Evening(3 to 6)" >3PM to 6PM</option>
            <option value="Night(6 to 9)" >6PM to 9PM</option>
      
										
										
    </select>
    </div>
  </div>
</div>
   
<div class="form-group">
  <label class="col-md-4 control-label">Guest Capacity</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="capacity" placeholder="Guest Capacity" class="form-control" value="<?php echo $e; ?>"  type="text" required>
    </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Comment</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="comment" placeholder="Comment" class="form-control" value="<?php echo $f; ?>"  type="text">
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Image</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="image" placeholder="Image" class="form-control"  type="file">
    </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
						<input type="submit"  name="submit" value="Submit" class="btn btn-success">
						<input type="reset" name="reset" id="res-1" value="Reset" class="btn btn-danger">
					</center>
  </div>
</div>

</fieldset>
</form>
</div>
<br/>
<br/>
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
                            <th> Cafe ID </th>
                            <th> Cafe Name </th>
                            <th> Address </th>
                            <th> State </th>
                            <th> City </th>
                            <th> Price </th>
                            <th> Date </th>
                            <th> Time </th>
                            <th> Capacity </th>
                            <th> Image </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                        </thead>
                        <tbody>  
                        <?php
							$con = mysqli_connect ("localhost","root","","cafeterian");
							$str = "select * from cafemaster where sellerid=".$_SESSION['sellerid'];
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
                $str1 = "select * from statemaster where stateid=".$row['stateid'];
                $result1 = mysqli_query($con,$str1);
                $row1 = mysqli_fetch_array($result1);
  
                $str2 = "select * from citymaster where cityid=".$row['cityid'];
                $result2 = mysqli_query($con,$str2);
                $row2 = mysqli_fetch_array($result2);

                echo "<tr>";              
								echo "<td>" .$row['cafeid']. "</td>";
                                echo "<td>" .$row['cafename']. "</td>";
                echo "<td>" .$row['address']. "</td>";
								echo "<td>" .$row1['statename']. "</td>";
								echo "<td>" .$row2['cityname']. "</td>";
								
                echo "<td>" .$row['price']. "</td>";
                echo "<td>" .$row['date']. "</td>";
                echo "<td>" .$row['time']. "</td>";
                echo "<td>" .$row['capacity']. "</td>";                  
								//echo "<td><img src='ebookimages/1.png' border=3 height=100 width=100></img></td>";
								echo "<td><img src='http://localhost/cafeterian/seller/cafe/$row[photo]' border=3 height=100 width=100></img></td>";
								echo "<td> <a href = 'cafemaster.php?cafeid=".$row['cafeid']."'>Edit </a> </td>";
								echo "<td> <a href = 'deletecafe.php?cafeid=".$row['cafeid']."'>Delete </a> </td>";
								echo "</tr>";
                            }
                echo"</tbody>";
							?>
</table>
<br/>
<br/>

<?php
		include 'userfooter.php';
	?>
