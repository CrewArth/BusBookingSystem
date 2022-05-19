
<!DOCTYPE html>
<html>
<head>
<title>Bus Details</title>
<meta content="noindex, nofollow" name="robots">
<!-- Include CSS File Here -->
<link href="busdetail.css" rel="stylesheet">

<style>
a{
    text-decoration:none;
    color:black;
    font-size: 20px;    
}
.dtime{
width:350px;
height:auto;
margin:50px auto 0;
padding:50px;
background-color:#EEE;
color:#333;
border:2px solid #C2D6FF;
border-radius:40px 0 40px 0
}
    </style>
</head>
<body>
<div id="first">
<form action="dbbus.php" method="post">
<label>Bus Number  :</label>
<input id="fname" placeholder="Bus Number" type="text" name="busnumber" required>
<label>Bus From :</label>
<input id="email" placeholder="Bus From" type="text" name="busfrom" required>
<label>Bus To :</label>
<input id="contact" placeholder="Bus To" type="text" name="busto" required>
<label>Departure Time :</label>
<input id="departure" placeholder="Departure Time" type="time" name="atime" required><br>
<label>Arrival Time :</label>
<input id="address" placeholder="Arrival Time" type="time" name="dtime" required>
<label>Price  :</label>
<input id="price" placeholder="Price" type="text" name="price" required>
<br><br>
<input id="submit" type="submit" value="Submit">

</form>
</div>
<br><br>
<center>
<button class=""> 
		<a href="admin_homepage.php"> Back to Homepage</a>
</button>
</center>	

</body>
<a href="form1.php">
</html>