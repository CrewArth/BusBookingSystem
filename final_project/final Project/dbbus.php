<?php

#just to show the inputted data
#echo "<pre>";
#print_r($_REQUEST);

	$con=mysqli_connect('localhost','root','','online_bus_booking');
	$db=mysqli_select_db($con,'online_bus_booking');
	$busnumber=$_REQUEST['busnumber'];
	$busfrom=$_REQUEST['busfrom'];
	$busto=$_REQUEST['busto'];
	$atime=$_REQUEST['atime'];
	$dtime=$_REQUEST['dtime'];
	$price=$_REQUEST['price'];

	$sql="INSERT INTO `busdetails` (`busnumber`, `busfrom`, `busto`, `atime` , `dtime`,`price`) VALUES ('$busnumber', '$busfrom', '$busto', '$atime', '$dtime','$price')";
	$res=mysqli_query($con,$sql); 

	echo "<pre>Bus Record Inserted Successfully</pre>"
	

?>

<!DOCTYPE html>
<html>
<head>
	<style>
a{
	cursor:pointer;
	text-align:center;
	text-decoration:none;
	color:black;
	font-size: 36px;
}
pre{
	font-size:28px;
	text-align:center;
}
body{
	background-image: url('ss.png');
}
		</style>
	<title> </title>

<body>
	<br><br>
	<center>
	<button class=""> 
		<a href="form1.php"> Back to Add Bus </a>
</button>
</center>
<BR><BR><BR>
<center>
<button class=""> 
		<a href="admin_homepage.php"> Back to Homepage</a>
</button>
</center>	
</body>
</head>
</htmL>