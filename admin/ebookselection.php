<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost:8080/web/admin/index.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost:8080/web/admin/index.php");
    die();
}
?>

<?php

include 'header.php';

?>
<?php

include 'menu.php';


?>

 <div class="page-container">
 	    <div class="grid-form1">
  	       <h3>Selection</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">

								<div class="form-group">
									<label for="selectordep1" class="col-sm-2 control-label">Select your Department :</label>
									<div class="col-sm-8"><select name="selector1" id="selectordep1" class="form-control1">
										<option> IT</option>
										<option> Mechanical</option>
										<option> Electrical</option>
									</select></div>
								</div>


								<div class="form-group">
								<label for="selectsem" class="col-sm-2 control-label">Select your semester :</label>
									<div class="col-sm-8"><select name="selector2" id="selectsem" class="form-control1">
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select></div>
								</div>


								<div class="form-group">
									<label  align="center"   class="col-sm-2 control-label">Dynamic allocation below</label></div>


<!--/New Dynamic list with the help of js(BETA LOL)-->


									<div class="form-group">
									<script src="cities.js"></script>
									<label for="selector3" class="col-sm-2 control-label">Select your State :</label>
									<div class="col-sm-8">  <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>


									</div>
								</div>

 								<div class="form-group">

									<label for="selector4" class="col-sm-2 control-label">Select your City :</label>

									<div class="col-sm-8"> <select id ="state" class="form-control" required></select>
									<script language="javascript">print_state("sts");</script>
									</div>
								</div>






									<div class="col-sm-8 col-sm-offset-2">


				<br/> <br/>
				<button class="btn-primary btn">Submit</button>

				<button class="btn-inverse btn">Cancel</button>
			</div>
								</div>

							</form>
						</div>
					</div>

</div>
	   <br/>
<?php

include 'footer.php';

?>

