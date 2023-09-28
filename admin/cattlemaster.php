<?php
session_start();
?>
<?php
include 'header.php';
?>
<?php
include 'menu.php';
?>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>CattleMaster</li>
            </ol>
<div class="grid-form1">
    <h3 id="form-horizontal">Cattle Master</h3>


    <?php
$a = "";
if(isset($_GET['cattleid']))
{
	$con = mysqli_connect ("localhost","root","","cattle");
	$str = "select * from cattlemaster where cattleid=".$_GET['cattleid'];
	$result = mysqli_query($con, $str);
	$r = mysqli_fetch_array($result);
	$a = $r['title'];
  $b = $r['price'];
  $c = $r['breed'];
  $d = $r['age'];
  $e = $r['milkproduction'];
  $f = $r['weight'];
  $g = $r['description'];
}
?>	

    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php
 if(isset($_GET['cattleid']))
 {
	 echo "editcattle.php?cattleid=".$_GET['cattleid'];
 }
 else
 {
	 echo "addcattle.php";
 }
 ?>">
        <div class="form-group">
                    <label for="Categoryid" class="col-sm-2 control-label">Category </label>
                    <div class="col-sm-8">
                        <select name="category" class="form-control1" id="Categoryid" required="">
                            <option disabled selected hidden>--Select Category--</option>
                            <?php
                    $con=mysqli_connect("localhost","root","","cattle");
                    $str="select*from categorymaster";
                    $result= mysqli_query($con,$str);
                    while($row=mysqli_fetch_array($result))
                    {
                      echo "<option  value=".$row['categoryid'].">".$row['name']."</option>";
                    }
                    echo "</select>";
                  ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Categoryid" class="col-sm-2 control-label">Sub-Category </label>
                    <div class="col-sm-8">
                        <select name="subcategory" class="form-control1" id="Categoryid" required="">
                            <option disabled selected hidden>--Select Category--</option>
                            <?php
                    $con=mysqli_connect("localhost","root","","cattle");
                    $str="select*from subcategorymaster";
                    $result= mysqli_query($con,$str);
                    while($row=mysqli_fetch_array($result))
                    {
                      echo "<option  value=".$row['subcatid'].">".$row['name']."</option>";
                    }

                    echo "</select>";
                  ?>
                    </div>
                </div>
        <div class="form-group">
            <label for="inputname4reg" class="col-sm-2 control-label hor-form">Title </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputname4reg" name="title"
                    placeholder="Enter Title" value="<?php echo $a; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputname4reg" class="col-sm-2 control-label hor-form">Price </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputname4reg" name="price"
                    placeholder="Enter Price" required>
            </div>
        </div>
        <div class="form-group">
                    <label for="Categoryid" class="col-sm-2 control-label">State </label>
                    <div class="col-sm-8">
                        <select name="state" class="form-control1" id="Categoryid" required="">
                            <option disabled selected hidden>--Select State--</option>
                            <?php

                    $con=mysqli_connect("localhost","root","","cattle");

                    $str="select*from statemaster";
                    $result= mysqli_query($con,$str);
                    while($row=mysqli_fetch_array($result))
                    {
                      echo "<option  value=".$row['stateid'].">".$row['statename']."</option>";

                    }

                    echo "</select>";
                  ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Categoryid" class="col-sm-2 control-label">City </label>
                    <div class="col-sm-8">
                        <select name="city" class="form-control1" id="Categoryid" required="">
                            <option disabled selected hidden>--Select City--</option>
                            <?php

                    $con=mysqli_connect("localhost","root","","cattle");

                    $str="select*from citymaster";
                    $result= mysqli_query($con,$str);
                    while($row=mysqli_fetch_array($result))
                    {
                      echo "<option  value=".$row['cityid'].">".$row['cityname']."</option>";

                    }
                    echo "</select>";
                  ?>
                    </div>
                </div>
        
        <div class="form-group">
            <label for="inputname4reg" class="col-sm-2 control-label hor-form">Age </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputname4reg" name="age"
                    placeholder="Enter Age" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputname4reg" class="col-sm-2 control-label hor-form">Breed </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputname4reg" name="breed"
                    placeholder="Enter Breed" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputname4reg" class="col-sm-2 control-label hor-form">Milk Production </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputname4reg" name="milkproduction"
                    placeholder="Enter Milk Production" required >
            </div>
        </div>
        <div class="form-group">
            <label for="inputname4reg" class="col-sm-2 control-label hor-form">Weight</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputname4reg" name="weight"
                    placeholder="Enter Weight" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputname4reg" class="col-sm-2 control-label hor-form">Description</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputname4reg" name="description"
                    placeholder="Description" required>
            </div>
        </div>

        <!---------File input code YEET-------->

        <div class="form-group">
            <label for="inputname4reg" class="col-sm-2 control-label hor-form">Select Photo</label>
            <div class="col-sm-8">
                <input type="file" id="imagefileinput" name="image">
                <p class="help-block">Select a file to upload</p>
            </div>
        </div>        
        <div class="col-sm-8 col-sm-offset-2">
            <br />
            <button class="btn-primary btn">Submit</button>
             <input type="reset" class="btn-primary btn" value="Reset" >
            <br />
        </div>
    </form>
    <br />
    <br /><br /><br />
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table id="table">
                        <thead>
                        <tr>
                            <th> Cattle ID </th>
                            <th> Category </th>
                            <th> SubCategory </th>
                            <th> Title </th>
                            <th> Price </th>
                            <th> Breed </th>
                            <th> Age </th>
                            <th> Milk Production </th>
                            <th> Weight </th>
                            <th> Image </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                        </thead>
                        <tbody>  
                        <?php
							$con = mysqli_connect ("localhost","root","","cattle");
							$str = "select * from cattlemaster where sellerid='0'";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
                $str1 = "select * from categorymaster where categoryid=".$row['categoryid'];
                $result1 = mysqli_query($con,$str1);
                $row1 = mysqli_fetch_array($result1);
  
                $str2 = "select * from subcategorymaster where subcatid=".$row['subcatid'];
                $result2 = mysqli_query($con,$str2);
                $row2 = mysqli_fetch_array($result2);

                echo "<tr>";              
								echo "<td>" .$row['cattleid']. "</td>";
								echo "<td>" .$row1['name']. "</td>";
								echo "<td>" .$row2['name']. "</td>";
								echo "<td>" .$row['title']. "</td>";
                echo "<td>" .$row['price']. "</td>";
                echo "<td>" .$row['breed']. "</td>";
                echo "<td>" .$row['age']. " Years</td>";
                echo "<td>" .$row['milkproduction']. "Ltr per day</td>";
                echo "<td>" .$row['weight']. " Kgs.</td>";
                                
                                
								//echo "<td><img src='ebookimages/1.png' border=3 height=100 width=100></img></td>";
								echo "<td><img src='http://localhost/cattle/seller/cattle/$row[image]' border=3 height=100 width=100></img></td>";
								echo "<td> <a href = 'cattlemaster.php?cattleid=".$row['cattleid']."'>Edit </a> </td>";
								echo "<td> <a href = 'deletecattle.php?cattleid=".$row['cattleid']."'>Delete </a> </td>";
								echo "</tr>";
                            }
                            echo"</tbody>";
							?>
                    </table>
                </div>
            </div>
        </div>
    </div>   
<?php
include 'footer.php';
?>
