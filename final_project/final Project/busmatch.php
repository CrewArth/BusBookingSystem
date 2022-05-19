<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register_pure_coding";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT busnumber, busfrom, busto, atime, dtime FROM busdetails WHERE busfrom='vadodara'and busto='ahmedabad'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1 cellspacing=0 cellpading=0>";
  echo "<tr><th>BUS NUMBER</th><th>BUS From</th><th>BUS TO</th><th>Arrival Time</th><th>Departure Time</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["busnumber"]."</td><td>".$row["busfrom"]."</td><td>".$row["busto"]."</td><td>".$row["atime"]."</td><td>".$row["dtime"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
