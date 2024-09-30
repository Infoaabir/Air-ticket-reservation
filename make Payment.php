<?php
  include 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style\make Payment.css" >
<link rel="stylesheet" href="style\make Payment2.css">
   
    <title>Payment</title>
    <style>
	
		
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            color: #333;
        }
        
        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 50px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
  <header>
    <div class="header-logo">
        <img src='Desktop/IWT project/line.png' alt="Cylone Airline logo" height='77' width='77'>
        <div class="logo-name">Ceylon Airlines</div>
    </div>
    <div class="menu">
      <button>Login or Signup</button>
      <button>Menu</button>
    </div>
  </header>
  


  
    
  <div class="container">
   
         <div class="payment">
    
            <h2>payment</h2>
    
            <form  action="make Payment.php"  method="post">
                
                    <label for="ccardnumber">Credit card number*</label>
                    <input type="text"  name="ccardnumber" required>
              
                    <label for="cvv">CVV*</label>
                    <input type="text" name="cvv" required>
                
                    <label for="nameoncard">Name on card*</label>
                    <input type="text"  name="nameoncard" required>
               
                    <label for="expiry">Expiry*</label>
                    <input type="date"  name="expiry" required placeholder="00 / 00" >
              
                    <label for="email">Card holder e-mail*</label>
                    <input type="text" name="email" required placeholder="example@gmail.com" >
                
                    <label for="mobile">Card holder phone*</label>
                    <input type="text"  name="mobile" required  >
                
             
        
            
                
         </div>
       
    </div>
    

    


<div class="container">
  
  <div class="details">

     <h2>Credit card billing address (for verification purposes)</h2>

         <div>
             <label for="address1">Street address details*</label>
             <input type="text" id="address1" name="address1" required>
         </div>
         <div>
             <label for="address2">Apartment, suite, unit, building, floor, etc*</label>
             <input type="text" id="address2" name="address2" required>
         </div>
         <div class="info">
             <div>
                 <label for="pscode">postal code*</label>
                 <input type="text" id="pscode" name="pscode" required>
             </div>
             <br>
             <br>
             <div>
                 <label for="city">City*</label>
                 <input type="text" id="city" name="city" required>
             </div>
         </div>

         <div>
             <label for="country">Country*</label>
             <input type="text" id="country" name="country" required>
         </div>

     <div>
         <input type="submit" name="submit" value="submit">
         </div>

     </form>
         
  </div>

</div>

<?php


 if(isset($_POST["submit"]))
 {
 
     $address1=$_POST["address1"];
     $address2=$_POST["address2"];
     $pscode=$_POST["pscode"];
     $city=$_POST["city"];
     $country=$_POST["country"];
     $ccardnumber=$_POST['ccardnumber'];
     $cvv=$_POST['cvv'];
     $nameoncard=$_POST['nameoncard'];
     $expiry=$_POST['expiry'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
    


     $sql1="INSERT INTO paydetails  VALUES ('$ccardnumber' , '$cvv' , '$nameoncard' , '$expiry' ,'$email' , '$mobile ')";



     $sql2="INSERT INTO billdetails  VALUES ( '$address1' , '$address2' , '$pscode' , '$city' ,'$country')";

     if($con->query($sql1))
     {
        header("Location: paymentsuess.php?data='.$id.'");
        exit();
     }

     if($con->query($sql2))
     {
         echo "Inserted unsuccessfuly";
     }
    
 }
?>
</body>

  <footer>
<link rel="stylesheet" href="#">
<title>Ceylon Airline | Travel around the world</title>
  <meta name="description" content="Discover seamless travel experiences and enjoy great deals on flights and holiday packages with Ceylon Airline. Explore our comprehensive guides, book your flights, manage your reservations, and check-in conveniently, all in one place.">
  <meta name="robots" content="index, follow">
  <meta charset="UTF-8">
  <link rel="preconnect" href=https://fonts.googleapis.com>
    <div class="footer-links">
      <a href="#">About us</a> |
      <a href="#">Help</a> |
      <a href="#">Book</a> |
      <a href="#">Manage</a> |
      <a href="#">Before you fly</a> |
      <a href="#">Where we fly</a> |
      <a href="#">Experience</a> |
      <a href="#">Frequent flyer</a>
    </div>
    
    <div class="footer-middle">
      <div class="footer-links">
        <a href="#">Contact us</a> |
        <a href="#">Privacy policy</a> |
        <a href="#">Terms and conditions</a> |
        <a href="#">Cybersecurity</a>
      </div>
      <div class="connect-text">Connect with us</div>

	  
      <div class="connect">
       
        <img src='D:\download.png' alt="facebook" width="42px" height="42px">
        <img src="E:\SLIIT\instagram.jpg" alt="instagram" width="42px" height="42px">
        <img src="E:\SLIIT\twitter.png" alt="twitter" width="42px" height="42px">
        <img src="E:\SLIIT\linkedin.png" alt="linkedin" width="42px" height="42px">
      </div>
	  
    
    
    <div class="footer-bottom">
      © All rights reserved – Ceylon Airlines
    </div>

    <div class="footer-logo">
        <img src='E:\SLIIT\line.png' alt="Ceylon Airline logo" width="88" height="88">
    </div>
  </footer>
	
</body>
</html>

