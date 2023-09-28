<?php

include 'header.php';

?>
<div class="banner1">
		<div class="container">
			<div class="w3ls_logo w3ls_logo_about">
				<h1><a href="home.php">..Cafeterian..</a></h1>
			</div>
		</div>
	</div>
<!-- //banner -->	
<!-- breadcrumbs -->
	<div class="agileits_breadcrumbs">
		<div class="container">
			<div class="agileits_breadcrumbs_left">
				<ul>
					<li><a href="home.php">Home</a><i>|</i></li>
					<li>Login</li>
				</ul>
			</div>
			<div class="agileits_breadcrumbs_right">
				<h2>Login</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<br/>
<br/>
<br/>
<div class="typo">
<div class="container">
			
    <form class="well form-horizontal" action="addlogin.php" method="post" >
<fieldset>
<!-- Form Name -->
<legend><center><h3 class="agileits_head">Login Page</h3></center></legend>
<div class="form-group"> 
  <label class="col-md-4 control-label">Role</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="role" class="form-control selectpicker" title = "Select one"  required>
      <option value="#">--Select Role--</option>
      <option value="buyer">User</option>
      <option value="seller">Cafeterian</option>
									
										
    </select>
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="uname" placeholder="User name" class="form-control" type="text" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
						<input type="submit"  name="sub-1" value="Submit" class="btn btn-success">
						<input type="reset" name="res-1" id="res-1" value="Reset" class="btn btn-danger">
					</center>
  </div>
</div>

</fieldset>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
					<center>
						<p>Have you forgotten your<a href="forgottpassword.php" class="link user-actions"><strong>password</strong></a>?</p>
						
					</center>
	</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
					<center>
						<p>Do you wish to register for <a href="registration.php" class="link user-actions"><strong>a new account</strong></a>?</p>
						
					</center>
	</div>
</div>
</div>

</form>
</div>
    </div><!-- /.container -->

<br/>
<br/>
<br/>


<?php

include 'footer.php';

?>