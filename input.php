<?php
include 'config.php';

if(isset($_POST['submit'])){

    $fnumber=$_POST['fnumber'];
    $dlocation=$_POST['dlocation'];
    $alocation=$_POST['alocation'];
    $duration=$_POST['duration'];
    $dtime=$_POST['dtime'];
    $atime=$_POST['atime'];
    $date=$_POST['date'];
    $dairport=$_POST['dairport'];
    $aairport=$_POST['aairport'];


    $sql="insert into `flightdata` (fnumber, dlocation, alocation, duration, dtime, atime, date, dairport, aairport)
    values ('$fnumber','$dlocation', '$alocation', '$duration', '$dtime', '$atime', '$date', '$dairport', '$aairport')";

    $result=mysqli_query($con,$sql);
    if($result){

    header('location:display.php');
    } else{
    
    	die(mysqli_error("Error"+$con));


    }

}

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
<h6 class="home-to-search"><a target="_blank" href="url">Administration Panel</a>  >  <a href="fstatus.php">Input Flight Details</a><h6>
<h2 id="CFS" > Input Flight Details </h2>

    <div class="container">
        <form method="post">
        <div class="inputfield">
            <label class="form-label">Flight Number</label>
            <input type="text" class="form-conrol" name="fnumber" autocomplete="off">
        </div>

         <div class="inputfield"> 
            <label class="form-label">Departing Location</label>
            <input type="text" class="form-conrol"  name="dlocation" autocomplete="off" >
        </div>

         <div class="inputfield"> 
            <label class="form-label">Departing Airport Code</label>
            <input type="text" class="form-conrol"  name="dairport" autocomplete="off" >
        </div>

         <div class="inputfield">
            <label class="form-label">Arriving Location</label>
            <input type="text" class="form-conrol" name="alocation" autocomplete="off">
        </div>

         <div class="inputfield"> 
            <label class="form-label">Arrival Airport Code</label>
            <input type="text" class="form-conrol"  name="aairport" autocomplete="off" >
        </div>

         <div class="inputfield">
            <label class="form-label">Duration</label>
            <input type="text" class="form-conrol"  name='duration' autocomplete="off">
        </div>

         <div class="inputfield">
            <label class="form-label">Departing Time</label>
            <input type="text" class="form-conrol"  name="dtime" autocomplete="off">
        </div>

         <div class="inputfield">
            <label class="form-label">Est. Arriving Time</label>
            <input type="text" class="form-conrol" name="atime" autocomplete="off">
        </div>

         <div class="inputfield">
            <label class="form-label">Dater</label>
            <input type="date" class="form-conrol" name="date" autocomplete="off">
        </div>

        <div class="submitbtn">
        <button class="btn" name="submit">Submit</button>
        </div>
        </form>
    <div>
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