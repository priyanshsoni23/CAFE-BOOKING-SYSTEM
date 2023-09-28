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
<html>
<body>
<?php  
                             	session_start();
								$str = "select * from sellerregistration where sellerid=".$_SESSION['sellerid'];
								$result = mysqli_query($con,$str);
								$r = mysqli_fetch_array($result);
								$a = $r['sellerid'];
								$b = $r['fname'];
								$c = $r['lname'];
								$d = $r['address'];
								$e = $r['mobile'];
							    $f = $r['email'];
								$g = $r['uname'];
                                $h = $r['pincode'];
								$i = $r['file'];
		
							?>	 
<div class="container">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

          <div class="panel panel-info">
            <div class="panel-heading">
              <h1 class="panel-title" align="center">Your Profile</h1>
            </div>
            <div class="panel-body">
              <div class="row">
                 <center><img  src="../sellerpic/<?php echo $r['file'];?>" height='100px'></center>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
							<th>Id </th>
							<td><?php  echo $a;  ?></td>
						 </tr>
						 
						 
                      <tr>
							<th>First Name </th>
							<td><?php  echo $b;  ?></td>
						 </tr>
                
                      <tr>
							<th>Last Name </th>
							<td><?php  echo $c;  ?></td>
						 </tr>   
                         
						 
                      <tr>
							<th>Address </th>
							<td><?php  echo $d;  ?></td>
						 </tr>   
                         
						 
                      <tr>
							<th>Mobile No </th>
							<td><?php  echo $e;  ?></td>
						 </tr>   
                      
						
                      <tr>
							<th>Email </th>
							<td><?php  echo $f;  ?></td>
						 </tr> 

							
                      <tr>
							<th>User Name </th>
							<td><?php  echo $g;  ?></td>
						 </tr>  
						 
						 
                      <tr>
							<th>Pincode </th>
							<td><?php  echo $h;  ?></td>
						 </tr>  
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
                 
          </div>
        </div>
      </div>
    </div>
</body>
</html>


<br><br><br><br><br><br><br><br>
<?php
include 'userfooter.php';
?>
