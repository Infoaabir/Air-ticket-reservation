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
        <a href="#" class="header-logo"></a>
     </div>
      <p class="airname">Ceylon Airlines</p>
      <p class="adash">Admin Dashboard<p>
       
   
  </header>
</head>

<body>
<h6 class="home-to-search"><a href="admin.php">Adminstration Panel</a>  >  <a href="#"> View Passenger Data</a><h6>
<h2 id="CFS" > View Passenger Data </h2>

<table class="table1">
    <thead>
            <tr>
              
            <th>Title</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>password</th>
            <th>date</th>
            <th>Country</th>
            <th>language</th>
            <th>phone number</th>
            </tr>
    </thead>
<?php

$sql="Select*from `register`";
$result=mysqli_query($con, $sql);
while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
  /*$dlocation=$row['dlocation'];
  $dtime=$row['dtime'];*/


    echo '<tbody>
            <tr>
            
            <td>' .$row['Title']. '</td>
            <td>' .$row['firstName']. '</td>
            <td>' .$row['lastName']. '</td>
            <td>' .$row['email']. '</td>
            <td>' .$row['password']. '</td>
            <td>' .$row['date']. '</td>
            <td>' .$row['Country']. '</td>
            <td>' .$row['language']. '</td>
            <td>' .$row['phoneNumber']. '</td>
            
            <td> <a href="updateffp.php?updatedata='.$id.'" ><button class="updatebtn">Update</button></a>
            <td> <a href="registerdel.php?deletedata='.$id.'" ><button class="deletebtn" >Delete</a></button></td>
            </tr>
            <tbody>';

}

?>
</table>


<script src="javascript/index.js"></script>

</body>

<footer>


    <div class="footer-bottom">
      © All rights reserved - Ceylon Airlines
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
