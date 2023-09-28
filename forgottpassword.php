<?php

include 'header.php';

?>
<div class="banner1">
		<div class="container">
			<div class="w3ls_logo w3ls_logo_about">
				<h1><a href="home.php">Cattle Farm</a></h1>
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
					<li>Forgott Password</li>
				</ul>
			</div>
			<div class="agileits_breadcrumbs_right">
				<h2>Forgott Password</h2>
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
<legend><center><h3 class="agileits_head">Forgott Password?</h3></center></legend>
<div class="form-group">
  <label class="col-md-4 control-label">Email ID : </label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="email" placeholder="Email Address" class="form-control" type="text" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
						<input type="submit"  name="sub-1" value="Send Email" class="btn btn-success">
					</center>
  </div>
</div>

</fieldset>

</form>
</div>
    </div><!-- /.container -->

<br/>
<br/>
<br/>


<?php

include 'footer.php';

?>