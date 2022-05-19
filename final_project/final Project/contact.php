<?php
	$Name = $_POST['name'];
	
	$email = $_POST['email'];
	
	$messege = $_POST['messege'];

	// Database connection
	$conn = new mysqli('localhost','root','','online_bus_booking');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact_us(Name, email, messege) values(?, ?, ?)");
		$stmt->bind_param("sss", $Name, $email, $messege);
		$execval = $stmt->execute();
		echo $execval;
		echo "We have Received your Request.";
		$stmt->close();
		$conn->close();
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
a{
    text-decoration:none;
    color:black;

}
button{
    border-radius: 4px;
}
            </style>
</head>
<body>
<br>
<br>
    <button>
<a href="index.php">Back to Homepage</a>
</button>

</body>
    </html>