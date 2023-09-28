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
  	       <h3>College Master</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">College :</label>
									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
										<option> Bhagwan Mahavir Polytechnic </option>
									</select></div>
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

