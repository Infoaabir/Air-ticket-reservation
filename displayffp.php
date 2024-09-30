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
<h6 class="home-to-search"><a href="admin.php">Adminstration Panel</a>  >  <a href="#"> View Frequent Flyer Data</a><h6>
<h2 id="CFS" > View Frequent Flyer Data </h2>

<table class="table1">
    <thead>
            <tr>
            <th>id</th>  
            <th>Title</th>
            <th>First name</th>
            <th>Middle name</th>
            <th>Last name</th>
            <th>Passport number</th>
            <th>Nationality</th>
            <th>Email</th>
            <th>password</th>
            <th>Date of Birth</th>
            <th>Country</th>
            <th>Country code</th>
            <th>Mobile number</th>
            </tr>
    </thead>
<?php

$sql="Select*from `frequent`";
$result=mysqli_query($con, $sql);
while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
  /*$dlocation=$row['dlocation'];
  $dtime=$row['dtime'];*/


    echo '<tbody>
            <tr>
            <td>' .$row['id']. '</td>
            <td>' .$row['Title']. '</td>
            <td>' .$row['firstName']. '</td>
            <td>' .$row['middleName']. '</td>
            <td>' .$row['lastName']. '</td>
            <td>' .$row['passportNumber']. '</td>
            <td>' .$row['nationalty']. '</td>
            <td>' .$row['email']. '</td>
            <td>' .$row['password']. '</td>
            <td>' .$row['dateOfBirth']. '</td>
            <td>' .$row['country']. '</td>
            <td>' .$row['countryCode']. '</td>
            <td>' .$row['mobileNumber']. '</td>
            <td> <a href="updateffp.php?updatedata='.$id.'" ><button class="updatebtn">Update</button></a>
            <td> <a href="deleteffp.php?deletedata='.$id.'" ><button class="deletebtn" >Delete</a></button></td>
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
