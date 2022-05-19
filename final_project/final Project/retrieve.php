<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM busdetails");

?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<link rel="stylesheet" type="text/css" href="retstyle.css">
<style>
    h1{
        text-align:center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
    -webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
        
    }
body{
    
}
th{
    font-weight:bold;
}
    </style>
</head>
<body>
    <H1 ALIGN="CENTER"> BUS DETAILS </H1>
    
<table>
<tr>    
<td>Bus Number</td>
<td>Bus Arrival</td>
<td>Bus Departure</td>
<td>Arrival Time</td>
<td>Departure Time</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["busnumber"]; ?></td>
<td><?php echo $row["busfrom"]; ?></td>
<td><?php echo $row["busto"]; ?></td>
<td><?php echo $row["atime"]; ?></td>
<td><?php echo $row["dtime"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<br>
<style>
footer{
    font-weight:bold;
    font-size:20px;
}
.btn{
    font-size:30px;
    
}
a{
    color:black;
    text-decoration:none;
}
    </style>
    <button class="btn"><center>
        <a href="admin_homepage.php">Back to Search</a>
</button></center>

</body>
</html> 