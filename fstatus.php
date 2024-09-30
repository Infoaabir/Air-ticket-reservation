
<?php
include 'config.php';
?>



<!DOCTYPE html>
<html>
<head>
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
     <div class="dropmenu">
         <button onclick="myFunction()" class="dropbtn">Menu  ☰</button>
         <div id="myDropdown" class="dropdown-content">
                 <a href="#">Home</a>
                 <a href="#">Book</a>
                 <a href="#">Manage</a>
                 <a href="#">Where we fly</a>
                 <a href="#">Frequent Flyer</a>
                 <a href="#">Contat us</a>
         </div>
     </div>
    </div>
  </header>
</head>
<body>
<div class="bgimage">

<h6 class="home-to-search"><a target="_blank" href="url">Home </a>  >  <a href="fstatus.php"> Flight Status</a><h6>
<h2 id="CFS" > Check Flight Status </h2>

<div class="search">
	<button id="flightnum">Flight Number</button>
	<button id="flightrt">Flight Route</button>
</div>

<link rel="stylesheet" href="style/style.css">

<div class="cont">
		<div class="container1" id="container1">
			<form method="post" class="searchForm" id="searchForm">
				<label for="fnumber" class="fnumber">Flight Number</label>
				<input type="text" placeholder="EX: UL305" name="fnumber" id="fnumber" required><br>
				<label for="date" class="fdate">Date</label>
				<input type="date" name="date" id="date" required><br>
				<input type="submit" value="Search" name="submit" class="btn">
			</form>	
       </div>
       <div class="table">
	    <table>
    
            <?php

     if(isset($_POST['submit'])){
     $searchn=$_POST['fnumber'];
     $searchd=$_POST['date'];

        $sql="Select * from `flightdata` where fnumber='$searchn' and date='$searchd'";
        $result=mysqli_query($con,$sql);
        if($result){
            
			if(mysqli_num_rows($result)>0){

              echo 'Matching results: ';
              while($row=mysqli_fetch_assoc($result)){

				echo '<thead>
				<tr>
				<th>Flight Number</th>
				<th>Departing Location</th>
				<th>Arriving Location</th>
				</tr>
				</thead>';

				echo '<tbody>
				<tr>
                <td><a href="showstatus.php?data='.$row['fnumber'].'">'.$row['fnumber'].'</a></td>			
                <td>'.$row['dlocation']. '</td>
				<td>'.$row['alocation']. '</td>
				</tr>
				<tbody>';
              }
			}
			else{
				header('location:noresults.php');
            }    
        }

	 }
    ?>
         </table>
    </div>

	    <div class="container2" id="container2">
			<form method="post" id="searchForm2" class="searchForm2">
				<label for="from" class="from">From</label>
				<input type="text" id="from" name="dlocation" placeholder="Departing location" required>
				<label for="to" class="to">To</label>
				<input type="text" id="to" name="alocation" placeholder="Arriving location" required><br>
				<label for="date" class="fdate">Date</label>
				<input type="date" id="date" name="date" required><br>
				<input type="submit" value="Search" name="submit" class="btn">
			</form>
	    </div>

        <table class="table">
        
    </table>
	</div>
</div>


<script src="javascript/index.js"></script>
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
               © All rights reserved - Ceylon Airlines
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
  </html>ght Status </title>
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
     <div class="dropmenu">
         <button onclick="myFunction()" class="dropbtn">Menu  ☰</button>
         <div id="myDropdown" class="dropdown-content">
                 <a href="#">Home</a>
                 <a href="#">Book</a>
                 <a href="#">Manage</a>
                 <a href="#">Where we fly</a>
                 <a href="#">Frequent Flyer</a>
                 <a href="#">Contat us</a>
         </div>
     </div>
    </div>
  </header>
</head>
<body>
<div class="bgimage">

<h6 class="home-to-search"><a target="_blank" href="url">Home </a>  >  <a href="fstatus.php"> Flight Status</a><h6>
<h2 id="CFS" > Check Flight Status </h2>

<div class="search">
	<button id="flightnum">Flight Number</button>
	<button id="flightrt">Flight Route</button>
</div>

<link rel="stylesheet" href="style/style.css">

<div class="cont">
		<div class="container1" id="container1">
			<form method="post" class="searchForm" id="searchForm">
				<label for="fnumber" class="fnumber">Flight Number</label>
				<input type="text" placeholder="EX: UL305" name="fnumber" id="fnumber" required><br>
				<label for="date" class="fdate">Date</label>
				<input type="date" name="date" id="date" required><br>
				<input type="submit" value="Search" name="submit" class="btn">
			</form>	
       </div>
       <div class="table">
	    <table>
    
            <?php

     if(isset($_POST['submit'])){
     $searchn=$_POST['fnumber'];
     $searchd=$_POST['date'];

        $sql="Select * from `flightdata` where fnumber='$searchn' and date='$searchd'";
        $result=mysqli_query($con,$sql);
        if($result){
            
			if(mysqli_num_rows($result)>0){

              echo 'Matching results: ';
              while($row=mysqli_fetch_assoc($result)){

				echo '<thead>
				<tr>
				<th>Flight Number</th>
				<th>Departing Location</th>
				<th>Arriving Location</th>
				</tr>
				</thead>';

				echo '<tbody>
				<tr>
                <td><a href="showstatus.php?data='.$row['fnumber'].'">'.$row['fnumber'].'</a></td>			
                <td>'.$row['dlocation']. '</td>
				<td>'.$row['alocation']. '</td>
				</tr>
				<tbody>';
              }
			}
			else{
				header('location:noresults.php');
            }    
        }

	 }
    ?>
         </table>
    </div>

	    <div class="container2" id="container2">
			<form method="post" id="searchForm2" class="searchForm2">
				<label for="from" class="from">From</label>
				<input type="text" id="from" name="dlocation" placeholder="Departing location" required>
				<label for="to" class="to">To</label>
				<input type="text" id="to" name="alocation" placeholder="Arriving location" required><br>
				<label for="date" class="fdate">Date</label>
				<input type="date" id="date" name="date" required><br>
				<input type="submit" value="Search" name="submit" class="btn">
			</form>
	    </div>

        <table class="table">
        
    </table>
	</div>
</div>


<script src="javascript/index.js"></script>
</div>
</body>

<footer>

 <div class="connect">
        <p class="connect-text">Connect with us</p>
        <a target="_blank "href="https://www.facebook.com/"><img src="images/fb.png" alt="Facebook Logo" width="35px" height="35px" class="fb"></a>
        <a target="_blank "href="https://www.instagram.com/"><img src="images/in.png" alt="Instagram Logo" width="35px" height="35px" class="in"></a>
        <a target="_blank "href="https://www.twitter.com/"><img src="images/tw.png" alt="Twitter Logo" width="35px" height="35px" class="tw"></a>
        <a target="_blank "href="https://www.youtube.com/"><img src="images/yt.png" alt="YouTube Logo" width="35px" height="35px" class="yt"></a>
    </div>
    
    <div class="footer-bottom">
      © All rights reserved - Ceylon Airlines
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