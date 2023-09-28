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

    <form class="well form-horizontal" action="addfeedback.php" method="post" id="contact_form" enctype="multipart/form-data">
<fieldset>

<legend><center><h3 class="agileits_head">Feedback</h3></center></legend>

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Name" class="form-control"  type="text">
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Email</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="email" placeholder="Email Address" class="form-control"  type="email">
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Mobile No</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="mobile" placeholder="Mobile No" class="form-control"  type="text">
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Type</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="type" placeholder="Error, Suggestion etc." class="form-control"  type="text">
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Feedback</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-option-horizontal"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Feedback"></textarea>
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

<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include 'userfooter.php';
?>
