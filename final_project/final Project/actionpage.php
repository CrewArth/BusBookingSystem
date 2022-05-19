<?php

    $conn = mysqli_connect("localhost","root","","busbooking");
        if($conn != $conn)
        {
            echo "Registration Sucessfull";
        }
$uname = $_POST['username'];

$mail = $_POST['email'];

$phone = $_POST['phn'];

$password = $_POST['psw'];

echo $_POST['username'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['phn'];
echo "<br>";
echo $_POST['psw'];
?>