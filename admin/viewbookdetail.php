<?php

include 'header.php';

?>
<?php

include 'menu.php';


?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Reports<i class="fa fa-angle-right"></i>ViewBookDetails</li>
            </ol>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript">
addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}
</script>
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
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />




<div class="grid-form1">
    <h3 id="form-horizontal">Ebooks Details</h3>




    <br />
    <?php $con = mysqli_connect ("localhost","root","","privatetutor");
							$str = "select * from ebookmaster";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
                            echo"<h4 style='text-align:right'>Number of Books found: $number</h4>";  ?>
<hr>
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table id="table">
                        <tr>
                            <th> Book ID </th>
                            <th> Category </th>
                            <th> Title </th>
                            <th> Author </th>
                            <th> Publication </th>
                            <th> Image </th>
                             </tr>

                        <?php
							$con = mysqli_connect ("localhost","root","","privatetutor");
							$str = "select * from ebookmaster";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['bookid']. "</td>";

								$row['categoryid'];

								$string="select * from categorymaster where categoryid ='$row[categoryid]' ";
								$resultsok= mysqli_query($con,$string);
								$roww= mysqli_fetch_assoc($resultsok);
								echo "<td>" .$roww['name']. "</td>";


								echo "<td>" .$row['title']. "</td>";
								echo "<td>" .$row['author']. "</td>";
								echo "<td>" .$row['publication']. "</td>";

								//echo "<td><img src='ebookimages/1.png' border=3 height=100 width=100></img></td>";
								echo "<td><img src='http://localhost:8080/web/admin/$row[imagepath]' border=3 height=100 width=100></img></td>";


								echo "</tr>";

							}
							?>


                    </table>
                </div>
            </div>
        </div>
    </div>


    <?php

include 'footer.php';

?>