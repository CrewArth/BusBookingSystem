<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
<style>
p{
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  font-size:36px;
  text-decoration:none;
}
a{
  text-decoration:none;
}
body{
  background-image: url('bbb.jpg');
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
</head>
<body align="center">

  <?php
  $button = $_GET ['submit'];
  $search = $_GET ['search'];
  $search2 = $_GET ['search2'];
  $snno=1;

  // connect to database
  $con=mysqli_connect("localhost","root","","online_bus_booking");

    $sql ="SELECT * FROM `busdetails` WHERE busfrom LIKE '%" . $search . "%' and busto LIKE '%" . $search2 . "%'";

    $run = mysqli_query($con,$sql);
    $foundnum = mysqli_num_rows($run);


    if ($foundnum==0)
    {
      echo "We were unable to find Bus with a search term of '<b>$search and $search2</b>'.";
      echo "<br>";
      echo "<br>";
      echo "Check Your Spelling";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<div class='form'>
                  
                  <p class='link'>Click here to <a href='searchbus.html'>GO BACK TO  </a>SEARCH.</p>
                  </div>";
      
      
    }
    else{
      echo "<h1><strong> $foundnum Results Found for \"" .$search."\" To \"" .$search2."\" </strong></h1>";      

      // get num of results stored in database
      $sql ="SELECT * FROM `busdetails` WHERE busfrom LIKE '%" . $search . "%' and busto LIKE '%" . $search2 . "%'";
      $getquery = mysqli_query($con,$sql);

      while($runrows = mysqli_fetch_array($getquery))
      {
        //$buyLink = $runrows["URL"];
        //$imageLink = $runrows["IMAGE_URL"];
        

        echo"<tr>";
        
        echo"<td><h5 class='serial no'> Bus Number :". $runrows["busnumber"] ."</h5></td></tr>";
        echo"<td><h5 class='BUS FROM'> Bus From :". $runrows["busfrom"] ."</h5></td>";
        echo"<td><h5 class='BUS TO'> Bus To :". $runrows["busto"] ."</h5></td>";
        echo"<td><h5 class='ARRIVAL TIME'>Arrival Time :". $runrows["atime"] ."</h5></td>";
        echo"<td><h5 class='DEPARTUR TIME'> Departure Time :". $runrows["dtime"] ."</h5></td>";
        echo"<td><h5 class='DEPARTUR TIME'> Ticket Price :". $runrows["price"] ."</h5></td>";
        
        //echo "<input type='button' name='seat' id='seat' style='margin-top:5px;' class='selectseat' value='SELECT NO OF SEATS' align='center' />";
        echo "<div class='form'>
                  
                  <p class='link'>Click here to <a href='busseat.html'>Select </a>Seat.</p>
                  </div>";
                  echo "-------------------------------------------------------------------------------------------------------";
        
        
        
        }}

    mysqli_close($con);

?>
