<?php
//include auth_session.php file on all user panel pages
include("rauth_session.php");
?>
<!DOCTYPE html>
<head>
<title>Admin Homepage</title>
<style>

button{
    align-items:center;
    text-align:center;
    border-radius: 5px;
    height: 60px;
    width:200px;
    border: 0;
    padding: 0 10px;
    background-color: #D66853;
    color: #7D11151C4E57;
    text-decoration: none;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-top: 150px;
    font-size: 24px;
    }
a{
    text-decoration: none;
    font-weight: bold;
}
hr {
  height: 10px;
  border: 0;
  box-shadow: 0 10px 10px -10px #8c8c8c inset;
}
h1{
    font-family: Open Sans;
    margin-left: 10px;
}
body{
    background-image: url('admin_bg.jpg');
    width:100%;
    height:100%;
}
.bg{
    margin-top: 120px;
    width:400px;
    height:250px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

    </style>
</head>


<!--MAIN CONTENT START HERE-->

<body link="black" alink="black" vlink="black">
<h1><i>Welcome</i> <strong>ADMIN</strong></h1>
<hr>

<center>
    <button type="bname">
    <a href="form1.php">    Add Bus  </a>
    </button>
    <?php echo " | "; ?>
    <button type="ebus">
    <a href="retrieve.php">   Buses   </a>
    </button>
    <?php echo " | "; ?>
    <button type="logout">
    <a href="index.php">    Logout     </a>
    </button>
</center>

<div class="bg">
<img src="ggg.png" alt="Admin" class="bg">
</div>









</body>
</html>
<?php

?>