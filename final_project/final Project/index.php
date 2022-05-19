<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "online_bus_booking";

#Connecting the Database.

$conn = mysqli_connect($servername,$username,$password);
echo "";
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Bus Booking System </title
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="logo.png" type="image/icon type">
<style>

body{
    background-color: lightgrey;
    background-size: cover;
  }
  ul {
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  float: left;
  list-style:none;
}

li a {
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  background-color: #111;
}
a{
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  text-decoration:none;
}
h1{
  text-shadow: 0 0 3px #FF0000;
  background: -webkit-linear-gradient(#E21143, #FFB03A);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font: bold 50px Poppins, sans-serif;
  text-align:center;
  list-style: none;
}
  

button{
  width: 10%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #424145;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}
.gg{
  background-image: url("ggg.png");
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
p{
  color: #404040;
  font-family:verdana;
	text-align: center;
  font-size: 24px;
}
hr{
  border:1px solid #424145;
}
marquee{
  color: white;
  background-color: #333;
  width:100%;
  font-family:verdana;
  border: 2px solid black;
  overflow: hidden;
  position: relative;
}


#contact{
        background-color: black;
        color: white;
        padding: 3rem 0;
    }

    #contact-form{
        width: 60%;
        margin: 0 auto;
        text-align: center;
    }
    #contact-form h1{
        margin-top: 0;
        text-align: center;
    }

    #contact-form label{
        display: block;
        margin-bottom: 1rem;
        text-align: center;
    }

    #contact-form div{
        margin-top: 1rem;
        text-align: center;
    }


  </style>
</head>




<!--MAIN BODY CONTENT STARTS FROM HERE -->

<body>

<!--TOP HEADING-->
<font face="Franklin Gothic Heavy">
<h1 align="center">ONLINE BUS BOOKING SYSTEM</h1>
</font>



<br>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="contactus.html">Contact</a></li>
  <li><a href="aboutus.html">About</a></li>
</ul>


	
  <br><br>
  <br><br>
  <br>

  

  <a href="login.php"><button>LOGIN</button></a>
  <a href="register.php"><button>REGISTER</button></a>


  <!--ADMIN LOGIN-->
  

    <a href="rindex.php"><button>ADMIN LOGIN</button></a>
  

  <!-- ----------------- -->

<br>

  <!-- BUS IMAGE -->
<div class="gg">
</div>

  <br><br>
  <br><br>
<br>
<!--<hr>-->

<marquee behavior="alternate">Welcome to Online Bus Booking System. Book Ticket Now and get 10% Off on your First Ticket Booking.</marquee>
<!-- BODY CONTENT -->
  <br><br>
  <br><br>

<br>
<p> Welcome to Online Bus Booking System. We Provide one of the best Services to Provide your Bus Tickets within few Touches.
    <br>
    We Have Very Fast Website for you so that You can Book your Tickets very Quickly!!
    <br>
    Well... 
    Hope you Enjoy our Services.
    <br>
    <br>
  </p>

  <section id="contact">
            <div id="contact-form">
                <h1>Contact Us</h1>
                <form action="contact.php" method="post">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div>
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="messege">Messege</label>
                        <textarea name="messege" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                      <input type="submit" name="sbtn" href="sucess.php">
                    </div>
                </form>
            </div>
        </section>


        <footer>
        <p>
                        <i class="far fa-copyright"></i> Bus Ticket Booking System | Made with &#10084;&#65039; by CAA
                        </p>
        </footer>
    </div>

</body>
</html>
