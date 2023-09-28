<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/cafeterian/admin/index.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/cafeterian/admin/index.php");
    die();
}
?>
<?php

include 'header.php';

?>
<?php

include 'menu.php';

?>


<?php
$con = mysqli_connect("localhost","root","","cafeterian");

$str = "select*from sellerregistration where status='accepted' ";
$result = mysqli_query($con,$str);
$tutornumber = mysqli_num_rows($result);

$string = "select*from buyerregistration  ";
$results = mysqli_query($con,$string);
$parentnumber = mysqli_num_rows($results);

$string1 = "select*from cattlemaster  ";
$results1 = mysqli_query($con,$string1);
$ebooknumber = mysqli_num_rows($results1);

$string2 = "select*from enquiry  ";
$results2 = mysqli_query($con,$string2);
$bookingnumber = mysqli_num_rows($results2);

$strdestut ="select*from sellerregistration order by sellerid DESC LIMIT 4";
$restut =mysqli_query($con,$strdestut);

$strdespar ="select*from buyerregistration order by buyerid DESC LIMIT 4";
$respar =mysqli_query($con,$strdespar);

$strresbook ="select*from cafemaster order by cafeid DESC LIMIT 5";
$resbook =mysqli_query($con,$strresbook);

?>


<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<!--four-grids here-->

<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Cafeterian</h3>
								<?php echo"<h4>$tutornumber</h4>"; ?>

							</div>

						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>User</h3>
								<?php echo"<h4>$parentnumber</h4>"; ?>

							</div>

						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Cafe</h3>
								<?php echo"<h4>$ebooknumber</h4>"; ?>

							</div>

						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Inquiry</h3>
								<?php echo"<h4>$bookingnumber</h4>"; ?>

							</div>

						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
<div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New Cafe</h3>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">

									<?php
									while($tutrow=mysqli_fetch_array($resbook))
                                    {    echo "<a class='list-group-item media' href=''>
                                             <div class='pull-left'>
                                                <img class='lg-item-img' src='http://localhost/cafeterian/seller/cafe/$tutrow[photo]' alt=''>
                                            </div>
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$tutrow[cafename]</div>
                                                	<small class='lg-item-text'>$tutrow[address]</small>
                                                </div>
												<div>
												
												</div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$tutrow[price]</div>
													<div class='lg-item-heading'>$tutrow[capacity] Person</div>
                                                </div>
                                            </div>
										</a>";
									}
                           ?>


                                   	</div>
                                </div>
                            </div>
							</div>
						  </div>

                        <div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New Cafeterian</h3>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">

									<?php
									while($tutrow=mysqli_fetch_array($restut))
                                    {    echo "<a class='list-group-item media' href=''>
                                             <div class='pull-left'>
                                                <img class='lg-item-img' src='http://localhost/cafeterian/sellerpic/$tutrow[file]' alt=''>
                                            </div>
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$tutrow[fname]</div>
                                                	<small class='lg-item-text'>$tutrow[lname]</small>
                                                </div>
												<div>
												
												</div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$tutrow[mobile]</div>
                                                </div>
                                            </div>
										</a>";
									}
                           ?>


                                   	</div>
                                </div>
                            </div>
							</div>
						  </div>

						 <div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New User</h3>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">

									<?php
									while($parrow=mysqli_fetch_array($respar))
                                    {    echo "<a class='list-group-item media' href=''>
                                             <div class='pull-left'>
                                                <img class='lg-item-img' src='http://localhost/cafeterian/buyerpic/$parrow[file]' alt=''>
                                            </div>
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$parrow[fname]</div>
                                                	<small class='lg-item-text'>$parrow[lname]</small>
                                                </div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$parrow[mobile]</div>
                                                </div>
                                            </div>
										</a>";
									}
                           ?>


                                   	</div>
                                </div>
                            </div>
							</div>
						  </div>
						  <div class="clearfix"></div>


<?php

include 'footer.php';

?>

