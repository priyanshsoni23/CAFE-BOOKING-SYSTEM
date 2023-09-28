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
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
<?php
include 'menu.php';
$con=mysqli_connect("localhost","root","","privatetutor");
?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>NewsLetter</li>
            </ol>
 <div class="page-container">
 <div class="grid-form1">
  	       <h3>News Letter</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" action="backendnews.php">

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Role</label>
									<div class="col-sm-8"><select name="role" id="selector1" class="form-control1">
										<option disabled selected>--Select a Role--</option>
										<option value="tutor">Tutor</option>
										<option value="parent">Parent</option>
										<option value="both">Both</option>
									</select></div>
								</div>

								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Subject</label>
									<div class="col-sm-8">
										<input type="text" name="subject" class="form-control1 input-lg" id="largeinput" placeholder="Enter a Subject..." required="">
									</div>
                                </div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Body</label>
									<div class="col-sm-8"><textarea name="body"  placeholder="Enter the body text here..." id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
								</div>


                                <div class="form-group">
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
	 </div>
    </form>
  </div>

<?php

include 'footer.php';

?>

