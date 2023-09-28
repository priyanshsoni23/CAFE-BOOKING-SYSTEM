<?php
session_start();
if (!isset($_SESSION['fname']))
{
    header("Location: http://localhost/cafeterian/login.php");
    die();
}
elseif($_SESSION["idtype"] != 'buyer')
{
	header("Location: http://localhost/cafeterian/login.php");
    die();
}

include 'userheader.php';
$con = mysqli_connect("localhost","root","","cafeterian");
?>
<html>
<body>
<?php
										
										session_start();
										if(isset($_SESSION['buyerid']))
										{
										$str="select * from buyerregistration where buyerid=".$_SESSION['buyerid'];
										$result = mysqli_query($con,$str);
										$r = mysqli_fetch_array($result);
										$a = $r['fname'];
										$b = $r['lname'];
										$c = $r['address'];
										$d = $r['mobile'];
										$e = $r['email'];
										$f = $r['uname'];
										$i = $r['pincode'];
                    $g = $r['stateid'];
                    $h = $r['cityid'];

										}		
?>

<div class="container">
<form class="well form-horizontal" action="profileupdate.php" method="post" id="contact_form">
<fieldset>
<legend><center><h3 class="agileits_head">Profile Update!</h3></center></legend>
<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" value="<?php echo $a;  ?>" class="form-control"  type="text">
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control" value="<?php echo $b;  ?>"  type="text">
    </div>
  </div>
</div>
 <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control" value="<?php echo $e;  ?>"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="uname" placeholder="User name" class="form-control" type="text" value="<?php echo $f;  ?>">
    </div>
  </div>
</div> 
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phoneno" placeholder="(+91)123-1224-132" value="<?php echo $d;  ?>" class="form-control" type="text">
    </div>
  </div>
</div>

      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text" value="<?php echo $c;  ?>">
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
											$str = "select * from statemaster where stateid=".$g;
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
											$str = "select * from citymaster where cityid=".$h;
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
  <label class="col-md-4 control-label">Pin Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="pincode" value="<?php echo $i;  ?>" placeholder="Pin Code" class="form-control"  type="text">
    </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Photo Upload</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="image" placeholder="Photo" class="form-control"  type="file">
    </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
						<input type="submit"  name="submit" value="Update" class="btn btn-success">
					</center>
  </div>
</div>

</fieldset>
</form>

</div>
    </div>
</body>
</html>


<br>

<?php

include 'userfooter.php';

?>