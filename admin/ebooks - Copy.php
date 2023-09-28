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
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Gallery :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css">
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />




<div class="grid-form1">
<h3 id="form-horizontal">Ebooks</h3>
<form class="form-horizontal" method="post" action="addebook.php">





<div class="form-group">
									<label for="selectstate4reg" class="col-sm-2 control-label">Select Category</label>
									<div class="col-sm-8"><select name="selecstate4reg" id="selecstate4reg" class="form-control1">
										<option>Caterogy1</option>
										<option>Cat2</option>
										<option>Cat3</option>
										<option>Cat4</option>
									</select></div>
								</div>






<div class="form-group">
    <label for="inputname4reg" class="col-sm-2 control-label hor-form">Title </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputname4reg" name="booktitle" placeholder="Enter title for the book">
    </div>
</div>

<div class="form-group">
    <label for="inputname4reg" class="col-sm-2 control-label hor-form">Author </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputname4reg" name="bookauthor" placeholder="Enter author's name">
    </div>
</div>

<div class="form-group">
    <label for="inputname4reg" class="col-sm-2 control-label hor-form">Publication </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputname4reg" name="bookpublication" placeholder="Enter publication detail's">
    </div>
</div>


<!---------File input code YEET-------->
<span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
<div class="form-group">
    <label for="inputname4reg" class="col-sm-2 control-label hor-form">Select Ebook file </label>
    <div class="col-sm-10">
      <input type="file" id="imagefileinput">
      <p class="help-block">Select a file to upload</p>
    </div>
</div>



<div align="center" class="form">
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

