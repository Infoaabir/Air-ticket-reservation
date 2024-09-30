<?php
    include 'config.php';

    error_reporting (0);

    $id=$_GET['updatedata'];
    $sql="Select * from `flightdata` where id='$id'";
    @$result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);

    $fnumber=$row['fnumber'];
    $dlocation=$row['dlocation'];
    $dtime=$row['dtime'];  
    $atime=$row['atime'];
    $alocation=$row['alocation'];
    $duration=$row['duration'];
    $dairport=$_POST['dairport'];
    $aairport=$_POST['aairport'];
    $date=$row['date'];
 



    if(isset($_POST['update'])){

    $fnumber=$_POST['fnumber'];
    $dlocation=$_POST['dlocation'];
    $dtime=$_POST['dtime'];  
    $atime=$_POST['atime'];
    $alocation=$_POST['alocation'];
    $duration=$_POST['duration'];
    $dairport=$_POST['dairport'];
    $aairport=$_POST['aairport'];
    $date=$_POST['date'];
   

    $sql = "update `flightdata` set fnumber='$fnumber', dlocation='$dlocation',dtime='$dtime', atime='$atime',
    alocation='$alocation', duration='$duration', dairport='$dairport', aairport='$aairport', date='$date'  where id='$id'";

    $result=mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    
    }else{
        die(mysqli_error($con));
      }
    }

    ?>

<!doctype html>
<html lang="en">
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
  <h6 class="home-to-search"><a target="_blank" href="url">Adminstration Panel </a>  >  <a href="fstatus.php"> Update Flight Data</a><h6>
<h2 id="CFS" > Update Flight Data </h2>

<div class="container">
        <form method="post">
            <div class="inputfield">
                <label class="form-label">Flight Number</label>
                 <input type="text" class="form-conrol" name="fnumber" autocomplete="off" value=<?php echo $fnumber ?> required>
             </div>

            <div class="inputfield"> 
              <label class="form-label">Departing Location</label>
              <input type="text" class="form-conrol"  name="dlocation" autocomplete="off" value=<?php echo $dlocation ?> required>
             </div>

             <div class="inputfield"> 
              <label class="form-label">Departing Airport Code</label>
              <input type="text" class="form-conrol"  name="dairport" autocomplete="off" value=<?php echo $dairport ?> required>
             </div>

             <div class="inputfield">
                 <label class="form-label">Arriving Location</label>
                  <input type="text" class="form-conrol" name="alocation" autocomplete="off" value=<?php echo $alocation ?> required>
             </div>

             <div class="inputfield"> 
              <label class="form-label">Arrival Airport Code</label>
              <input type="text" class="form-conrol"  name="aairport" autocomplete="off" value=<?php echo $aairport ?> required>
             </div>

             <div class="inputfield">
                <label class="form-label">Duration</label>
                 <input type="text" class="form-conrol"  name='duration' autocomplete="off" value=<?php echo $duration ?> required>
            </div>

             <div class="inputfield">
                 <label class="form-label">Departing Time</label>
                <input type="text" class="form-conrol"  name="dtime" autocomplete="off" value=<?php echo $dtime ?> required>
            </div>

            <div class="inputfield">
                 <label class="form-label">Est. Arriving Time</label>
                 <input type="text" class="form-conrol" name="atime" autocomplete="off" value=<?php echo $atime ?> required>
            </div>

            <div class="inputfield">
                <label class="form-label">Economy Class Fare</label>
                 <input type="date" class="form-conrol" name="date" autocomplete="off" value=<?php echo $date?> required>
            </div>


            <button class="btn" name="update">Update</button>
        
        </form>

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