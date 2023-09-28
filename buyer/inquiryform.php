<?php

include 'userheader.php';
error_reporting(0);
session_start();
?>

<html>
<body>
<div class="container">
<form class="well form-horizontal" action="addenquiry.php" method="post" id="contact_form">
<fieldset>
<?php
$a = $_GET['cattleid'];
echo "<input  name='id' type='hidden' value='$a'>";
?>
<legend><center><h3 class="agileits_head">Enquiry Form</h3></center></legend>
<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control"  type="text" required>
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>
 <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="email" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Mobile </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phoneno" placeholder="1234567890"  class="form-control" type="text" pattern="[0-9]{10}" required >
    </div>
  </div>
</div>

      
<div class="form-group">
  <label class="col-md-4 control-label">Message :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <textarea rows="8" cols="50" name="message" placeholder="Messages" ></textarea>
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
    </div>
</body>
</html>
<?php
include 'userfooter.php';
?>

