<?php

include 'userheader.php';
error_reporting(0);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <meta name="robots" content="noindex,follow" />
    <style>
    /* Basic Styling */
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}

/* Columns */
.left-column {
  width: 45%;
  position: relative;
}

.right-column {
  width: 35%;
  margin-top: 60px;
}


/* Left Column */
.left-column img {
  width: 50%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  
}


/* Right Column */

/* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

/* Product Configuration */
.product-color span,
.cable-config span {
  font-size: 14px;
  font-weight: 400;
  color: #86939E;
  margin-bottom: 20px;
  display: inline-block;
}

/* Product Color */
.product-color {
  margin-bottom: 30px;
}

.color-choose div {
  display: inline-block;
}

.color-choose input[type="radio"] {
  display: none;
}

.color-choose input[type="radio"] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
}

.color-choose input[type="radio"] + label span {
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}

.color-choose input[type="radio"]#red + label span {
  background-color: #C91524;
}
.color-choose input[type="radio"]#blue + label span {
  background-color: #314780;
}
.color-choose input[type="radio"]#black + label span {
  background-color: #323232;
}

.color-choose input[type="radio"]:checked + label span {
  background-image: url(images/check-icn.svg);
  background-repeat: no-repeat;
  background-position: center;
}

/* Cable Configuration */
.cable-choose {
  margin-bottom: 20px;
}

.cable-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}

.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
  border: 2px solid #86939E;
  outline: none;
}

.cable-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}

.cable-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config a:before {
  content: "?";
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
}

/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}

.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}

.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}

/* Responsive */
@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 60px;
  }

  .left-column,
  .right-column {
    width: 100%;
  }

  .left-column img {
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}

@media (max-width: 535px) {
  .left-column img {
    width: 220px;
    top: -85px;
  }
}
  
    </style>

  </head>

  <body>
    <main class="container">
  
    <?php 
$con = mysqli_connect ("localhost","root","","cattle");
$str = "select * from cattlemaster where cattleid =".$_GET['cattleid'];
$result = mysqli_query($con,$str);
$row = mysqli_fetch_array($result);
$a = $row['cattleid'];
 echo "<center>";   
 echo "<div class='right-column'>";
 echo "<div class='product-description'>";
 echo "<input type='hidden' name='id' value=".$a." >";
 echo "<img  src='http://localhost/cattle/admin/cattle/$row[image]' alt='' height='300px' width='300px'>";
 echo "<h1>".$row['title']."</h1>";
 echo "<p>".$row['description']."</p>";
 echo "</div>";
 echo "<div class='product-color'>";
 echo "<span>".$row['breed']."</span>";
 echo "</div>";
 echo "<span>".$row['milkproduction']."Ltr per Day.</span>";
 echo "<div class='cable-config'>";
 echo "<span>".$row['weight']."Kilogram</span>";
  echo "</div>";
  echo "<div class='product-price'>";
  echo "<span>".$row['price']."</span>";
  echo "<a href='inquiryform.php?cattleid=".$a."' class='cart-btn'>Send Inquiry</a>";
  
  echo "</div>";
  echo "</div>";
  echo "</main>";
  echo "</center>";
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
<?php
include 'userfooter.php';
?>