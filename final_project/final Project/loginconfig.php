<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "online_bus_booking";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>