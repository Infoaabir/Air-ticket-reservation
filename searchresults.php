<!DOCTYPE html>
<html>
<head>
<?php
include 'config.php';
?>

<title> Flight Status </title>
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
     <a href="#" class="logo-name"><p>Ceylon Airlines</p></a>
       
    <div class="menu">
      <button>Login or Signup</button>
      <button>Menu</button>
    </div>
  </header>
</head>


<body>
<div>
<h6 class="home-to-search"><a target="_blank" href="url">Home </a>  >  <a href="searchresults.php"> Search Results</a><h6>
</div>

<div>
    <?php
    $data=$_GET['data'];
    $sql="Select * from `flightdata` where fnumber='$data'";
    $result=mysqli_query($con,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        echo '
        <h2 class="resultname"> Schedule for Flight '.$row['fnumber'].' on '.$row['date'].'<h2>
        <div class="results">
            <div class="flnum">
            <h2>'.$row['fnumber'].'</h2>
        </div>
        <div class="depdata">
            <h2>'.$row['dairport'].'<h2>
            <h6>'.$row['dlocation'].'<h6>
            <h6>Departing at '.$row['dtime'].'<h6>
        </div>
        <div class="planeimg">
            <img src="images/plane.png" width="30px" height="30px";>
        </div>
        <div class="arrdata">
            <h2>'.$row['aairport'].'<h2>            
            <h6>'.$row['alocation'].'<h6>
            <h6>Est. Arrival at '.$row['atime'].'<h6>
        </div>
        <div class="fduration">
            <h6>Duration '.$row['duration'].'<h6>
        </div>
        <div class="fares">
            <a href="seatbooking.php"><h3>Economy Class<h3><a>            
            <h6>'.$row['economyclass_fare'].'<h6>
            <a href="seatbooking.php"><h2>Businness Class<h2><a>            
            <h6>'.$row['businessclass_fare'].'<h6>
            <a href="seatbooking.php"><h2>First Class<h2><a>            
            <h6>'.$row['firstclass_fare'].'<h6>
        </div>
        </div><br>
        <a href="home.php"><button class="btn">Search Another Flight</button></a>
        </div>';
    }
    ?>
</div>

</body>

   <footer>

          <div class="connect">
                 <p class="connect-text">Connect with us</p>
                 <a target="_blank "href="https://www.facebook.com/"><img src="./src/fb.png" alt="Facebook Logo" width="35px" height="35px" class="fb"></a>
                 <a target="_blank "href="https://www.instagram.com/"><img src="./src/in.png" alt="Instagram Logo" width="35px" height="35px" class="in"></a>
                 <a target="_blank "href="https://www.twitter.com/"><img src="./src/tw.png" alt="Twitter Logo" width="35px" height="35px" class="tw"></a>
                 <a target="_blank "href="https://www.youtube.com/"><img src="./src/yt.png" alt="YouTube Logo" width="35px" height="35px" class="yt"></a>
             </div>
             
             <div class="footer-bottom">
               � All rights reserved - Ceylon Airlines
             </div>
         
             <div class="footer-logo">
                 <img src="images/logo.png" alt="Ceylon Airline logo" width="44px" height="44px">
             </div>
           
           <div class="footer-buttons">
               <a href="#"><button>Frequent flyer</button></a> 
             <a href="#"><button>Check flight status</button></a> 
               <a href="#"><button>Flight schedule</button></a> 
             </div>
         
             <div class="footer-links">
               <a href="#">About us</a> |
               <a href="#">Help</a> |
               <a href="#">Book</a> |
               <a href="#">Manage</a> |
               <a href="#">Before you fly</a> |
               <a href="#">Where we fly</a> |
               <a href="#">Experience</a> |
               <a href="#">Frequent flyer</a> |
             <a href="#">Contact us</a> |
               <a href="#">Privacy policy</a>
             </div>
         </footer>
  </html>