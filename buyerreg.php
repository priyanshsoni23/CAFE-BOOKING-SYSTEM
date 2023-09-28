<?php
include 'header.php';

?>
<div class="banner1">
		<div class="container">
			<div class="w3ls_logo w3ls_logo_about">
				<h1><a href="index.php">Cafeterian</a></h1>
			</div>
		</div>
	</div>
<!-- //banner -->	
<!-- breadcrumbs -->
	<div class="agileits_breadcrumbs">
		<div class="container">
			<div class="agileits_breadcrumbs_left">
				<ul>
					<li><a href="index.php">Home</a><i>|</i></li>
					<li>User Registration</li>
				</ul>
			</div>
			<div class="agileits_breadcrumbs_right">
				<h2>User Registration</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<br/>
<br/>
<br/>
<br/>

<div class="container">
			
<form class="well form-horizontal" action="addbuyer.php" method="post" id="contact_form" enctype="multipart/form-data">
<fieldset>


<legend><center><h3 class="agileits_head">User Registration</h3></center></legend>



<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control"  type="text" pattern="[A-Za-z]{1,15}" title="Enter Your First Name" required>
  </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control"  type="text" pattern="[A-Za-z]{1,15}" title="Enter Your Last Name Properly ex:'patel' " required>
    </div>
  </div>
</div>


       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter Your Email Id Properly ex:'abc@mail.com' " required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="uname" placeholder="User name" class="form-control" type="text" pattern="[A-Za-z]{1,15}" title="Enter Your User_Name Properly ex:'abc5,5abc' " required >
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Enter Your Password Properly" required>
    </div>
  </div>
</div>

       
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phoneno" placeholder="(+91)123-1224-132" class="form-control" type="text"  pattern="[0-9]{5}[0-9]{5}" title="'Phone Number (Format: +99(99)9999-9999)'" required>
    </div>
  </div>
</div>

      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        
  <input name="address" placeholder="Address" class="form-control" type="text" required>
    </div>
  </div>
</div>
   
<div class="form-group"> 
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="city" class="form-control selectpicker" title = "Select one" required >
      <option value=" " >Please Select City</option>
										<?php	
                    $con = mysqli_connect("localhost","root","","cafeterian");
											$a = "Select Your City";
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
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" title = "Select one"  required>
      <option value=" " >Please select State</option>
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
  <label class="col-md-4 control-label">Pin Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="pincode" placeholder="Pin Code" class="form-control" pattern=".{6,}" type="text" title = "Enter proper pincode ex:'395009'" required>
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
<br/>
<?php

include 'footer.php';

?>