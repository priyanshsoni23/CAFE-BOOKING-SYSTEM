<html>
<head>
  <title>Cafeteria Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  header{
	  background-color : gray;
  }
  </style>
</head>
<body>
<header>
<div class="header">
<center><img src=""></center>
</div>
</header>

<nav class="navbar navbar-inverse">
  
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="userhome.php"><span class="glyphicon glyphicon-home"></span> Home </a></li>
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile </a></li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-ok"></span> Cafe Book <b class="caret"></b></a>
	    <ul class="dropdown-menu">
		  <li class="divider"></li>
		  <li><a href="cafemaster.php"><span class="glyphicon glyphicon-pencil"></span> Cafe Master </a></li>
          <li class="divider"></li>
		  <li><a href="viewenquiry.php"><span class="glyphicon glyphicon-pencil"></span> View Enquiry </a></li>
        </ul>
      </li>
      <li><a href="bookordered.php"><span class="glyphicon glyphicon-pencil"></span> Book Order </a></li>
      <li><a href="feedback.php"><span class="glyphicon glyphicon-pencil"></span> Feedback </a></li>
  
	  <ul class="nav navbar-nav navbar-right">

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list"></span> Setting <b class="caret"></b></a>
	    <ul class="dropdown-menu">
		  <li class="divider"></li>
		  <li><a href="userupdate.php"><span class="glyphicon glyphicon-pencil"></span> Update </a></li>
          <li class="divider"></li>
		  <li><a href="userchangepass.php"><span class="glyphicon glyphicon-search"></span> Change Password </a></li>
        </ul>
		</li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-pencil"></span> Sign Out</a></li>
    </ul>
	
  </div>
  <div>
<p align="right">
  <font color="white">Welcome,
  <?php  
	error_reporting(0);
	session_start();
	echo $_SESSION['fname'];
	echo "    ";
	echo $_SESSION['lname'];
	
  ?></font></p>	 
  </div>
</nav>
</body>
</html>
