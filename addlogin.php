<?php
session_start();
$con=mysqli_connect("localhost","root","","cafeterian");
$seller="seller";
$buyer="buyer";
$a=$_POST["role"];
error_reporting(0);
                        if (isset($_POST['uname']) and isset($_POST['password']))
                        {
                        if ($a == $seller)
                        {
                        echo "You have selected seller!<p></p>";

                           // Assigning POST values to variables.
                           $username = $_POST['uname'];
                           $password = $_POST['password'];
                           //CHECK if the Fields are Empty
                           if($username == "" || $password == "")
                              {
                                 $message="Missing Credentials!";
                                 echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                                  echo "Empty Login Credentials<p></p>";
                                  Echo("Missing Username or Password!");
                              }

                           // CHECK FOR THE RECORD FROM TABLE
                           $query = "SELECT * FROM `sellerregistration` WHERE uname='$username' and password='$password' and status='accepted' ";
                           $result = mysqli_query($con, $query) or die(mysqli_error($con));
                           $count = mysqli_num_rows($result);
                           if ($count == 1){
                              $queryy = "SELECT * FROM `sellerregistration` WHERE uname='$username' AND password='$password'  " ;
                              $resultt = mysqli_query($con, $queryy) or die(mysqli_error($con));
                              $re=mysqli_fetch_array($resultt);
                              $_SESSION["fname"]=$re['fname'];
                              $_SESSION["cityid"]=$re['cityid'];
                              $_SESSION["idtype"]= "seller";
                              $_SESSION["stateid"]=$re['stateid'];
                              $_SESSION["status"]=$re['status'];
                              $_SESSION["uname"]=$re['username'];
                              $_SESSION["sellerid"]=$re['sellerid'];
                              $_SESSION["email"]=$re['email'];
                              $_SESSION["mobile"]=$re['mobile'];
                           //echo "Login Credentials verified";
                           echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
                           header("location:http://localhost/cafeterian/seller/userhome.php");
                           }else{
                           $message="you have not been Accepted yet by Admin Or UserName or Password are Not Correct!";
                           echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                           echo "Invalid Login Credentials<p></p>";

                           }
                           }

                        if ($a == $buyer)
                        {
                           echo "You have selected tutor!<p></p>";
                           // Assigning POST values to variables.
                           $username = $_POST['uname'];
                           $password = $_POST['password'];

                           //CHECK if the Fields are Empty
                           if($username == "" || $password == "")
                              {
                                 echo "Empty Login Credentials<p></p>";
                                 Echo("Missing Username or Password!");
                                 $message="Missing Credentials!";
                                 echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";

                              }
                           // CHECK FOR THE RECORD FROM TABLE
                           $query = "SELECT * FROM `buyerregistration` WHERE uname='$username' and password='$password'";

                           $result = mysqli_query($con, $query) or die(mysqli_error($con));

                           $count = mysqli_num_rows($result);

                           if ($count == 1){
                              $query = "SELECT * FROM `buyerregistration` WHERE uname='$username' and password='$password'";
                              $result = mysqli_query($con, $query) or die(mysqli_error($con));
                              $r=mysqli_fetch_array($result);
                              $_SESSION["fname"]=$r['fname'];
                              $_SESSION["lname"]=$r['lname'];
                              
                              $_SESSION["cityid"]=$r['cityid'];
                              $_SESSION["idtype"]="buyer";
                              $_SESSION["stateid"]=$r['stateid'];
                              $_SESSION["uname"]=$r['uname'];
                              $_SESSION["buyerid"]=$r['buyerid'];
                              $_SESSION["email"]=$r['email'];
                              $_SESSION["mobile"]=$r['mobile'];

                           //echo "Login Credentials verified";
                           echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
                           header("location:http://localhost/cafeterian/buyer/userhome.php");
                           }else{
                              $message="Username or Password does not match";
                           echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                           echo "Invalid Login Credentials<p></p>";

                              }

                           }
                           if($a != $buyer && $a != $seller)
                        {
                           $message="Please choose a role";
                           echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                           echo "Invalid Login Credentials<p></p>";
                        }

                     }
?>


