<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
Name<select name="s">
<?php 
	$con = mysqli_connect("localhost","root","","projectapprove");
	$str="Select * from xyz";
	$result = mysqli_query($con,$str);
	while($row = mysqli_fetch_array($result))
	{
		echo "<option value=".$row['id'].">"
	.$row['name']."</option>";
	}	
?>
</select>
Age<select name="s1">
<?php 
	$con = mysqli_connect("localhost","root","","projectapprove");
	$str="Select * from xyz";
	$result = mysqli_query($con,$str);
	while($row = mysqli_fetch_array($result))
	{
		echo "<option value=".$row['id'].">"
	.$row['age']."</option>";
	}	
?>
</select>
</form>
</body>
</html>