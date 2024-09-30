
<?php
include 'config.php';

error_reporting (0);
?>


<!DOCTYPE html>
<html>
<head>
<title> Admin Dashboard </title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="styles.css">

  <meta name="description" content="Discover seamless travel experiences and enjoy great deals on flights and holiday packages with Ceylon Airline. Explore our comprehensive guides, book your flights, manage your reservations, and check-in conveniently, all in one place.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
      <link rel="preconnect" href="https://fonts.googleapis.com">

      <header>
      <div class="airlinename">
        <a href="#" class="header-logo"><img src="images/logo.png"  alt="Ceylon Airline logo" height="75px" width="75px"></a>
     </div>
      <p class="airname">Ceylon Airlines</p>
      <p class="adash">Admin Dashboard<p>
       
   
  </header>
</head>

<body>
<h6 class="home-to-search"><a href="admin.php">Adminstration Panel</a>  >  <a href="display.php"> View Data</a><h6>
<h2 id="CFS" > View Flight Data </h2>

<table class="table1">
    <thead>
            <tr>
            <th>Flight Number</th>
            <th>Departing Location</th>
            <th>Departing Airport Code</th>
            <th>Departing Time</th>
            <th>Arriving Location</th>
            <th>Arrival Airport Code</th>
            <th>Est. Arriving Time</th>
            <th>Flight Duration</th>
            <th>Date</th>
            <th>FC Fare</th>
            <th>BC Fare</th>
            <th>EC Fare</th>


            </tr>
    </thead>
<?php

$sql="Select*from `flightdata`";
$result=mysqli_query($con, $sql);
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $dlocation=$row['dlocation'];
    $dtime=$row['dtime'];

    echo '<tbody>
            <tr>
            <td>' .$row['fnumber']. '</td>
            <td>' .$row['dlocation']. '</td>
            <td>' .$row['dairport']. '</td>
            <td>' .$row['dtime']. '</td>
            <td>' .$row['alocation']. '</td>
            <td>' .$row['aairport']. '</td>
            <td>' .$row['atime']. '</td>
            <td>' .$row['duration']. '</td>
            <td>' .$row['date']. '</td>
            <td>' .$row['firstclass_fare']. '</td>
            <td>' .$row['businessclass_fare']. '</td>
            <td>' .$row['economyclass_fare']. '</td>
            <td> <a href="update.php?updatedata='.$id.'" ><button class="updatebtn">Update</button></a>
            <td> <a href="delete.php?deletedata='.$id.'" ><button class="deletebtn" >Delete</a></button></td>
            </tr>
            <tbody>';

}

?>
</table>


<div class="submitbtn">
<a href="input.php"><button class="btn">Input Data</button></a>
</div>

<script src="javascript/index.js"></script>

</body>

<footer>


    <div class="footer-bottom">
      � All rights reserved - Ceylon Airlines
    </div>

    <div class="footer-logo">
        <img src="images/logo.png" alt="Ceylon Airline logo" width="44px" height="44px">
    </div>
	


    <div class="footer-links">
      <a href="#">Edit user accounts</a> |
      <a href="#">Edit Frequent Flyer accounts</a> |
      <a href="#">Edit Flight Data</a> |
      <a href="#">Add Flight Schedules</a> |
      <a href="#">Edit content</a> 
   
    </div>
</footer>

</html>