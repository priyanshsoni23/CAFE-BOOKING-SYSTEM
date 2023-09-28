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
<head>
<style>
.abc
{
	background-color : gray;
}
</style>
</head>
<body> 
<div class="container">			
    <form class="well form-horizontal" action="addchangepass.php" onSubmit="return validate()" method="post" id="contact_form">
<fieldset>

<legend><center><h3 class="agileits_head">Change Password</h3></center></legend>

<div class="form-group">
  <label class="col-md-4 control-label">Current Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input  name="curpassword"  placeholder="Current Password" class="form-control"  type="password" required>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">New Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input  name="password" placeholder="New Password" class="form-control"  type="password" required>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Confirm Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input  name="confpassword" placeholder="Confirm Password" class="form-control"  type="password" required>
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
</body>
</html>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
include 'userfooter.php';
?>
