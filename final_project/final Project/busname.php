<!DOCTYPE html>
<head>
    <title>Add Bus Details</title>
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <style>
        body{
            text-align:center;
        }
h1{
    font-family:Aclonica;
}
.busname{
    font-family:Tahoma;
}

.busno{
    font-family:Tahoma;
}
.date{
    font-family:Tahoma;
}
.ap{
    font-family:Tahoma;
}
.at{
    font-family:Tahoma;
}
.dp{
    font-family:Tahoma;
}
.dt{
    font-family:Tahoma;
}
body{
    background-image: url('admin_bg.jpg');
    width:100%;
    height:100%;
}
.submit{
    font-size:24px;
}
        </style>
</head>

<body>
    <h1> Add Bus Details </h1>

<hr>
<br>
<center>
<div class="busname">
Add Bus Name <input type="text" placeholder="Bus Name" class="bname">
</div>
</center>
<br>
<br>
<div class="busno">
Bus Number <input type="text" placeholder="Bus No." class="busno">
</div>
<br>
<br>
<div class="date">
Date <input type="date" class="date">
</div>
<br>
<br>
<div class="ap">
Arrival <input type="text" placeholder="Arrival Place" class="ap">
</div>
<br>
<br>
<div class="at">
Arrival Time <input type="time" placeholder="" class="at">
</div>
<br>
<br>
<div class="dp">
Departure <input type="text" placeholder="Departure Place" class="dp">
</div>
<br>
<br>
<div class="dt">
Departure Time <input type="time" placeholder="" class="dt">
</div>
<br>
<br>
<a href="bus_add.php">
<input type="submit" class="submit">
</a>
</body>
</html>