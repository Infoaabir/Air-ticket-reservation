<?php

$con=new mysqli("localhost","root","","project");

// Check connection
if ($con->connect_error)
{
die("Connection failed: " .$con->connect_error);
}


?>
<?php

if (isset($_POST['submit']))
{
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact VALUES ('$name','$email','$message')";

if ($con -> query($sql))
    {
        echo "Submitted successfully";
        
    }
    else{
        echo "Someone already register using this email";
    }

}
$con->close();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style/styles-ash.css" >
    <title>Contact Us</title>
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
        <img src="images/line.png" alt="Cylone Airline logo" height='77' width='77'>
        <div class="logo-name">Ceylon Airlines</div>
    </div>
    <div class="menu">
      <button>Login or Signup</button>
      <button>Menu</button>
    </div>
  </header>
    <div class="container">
        <h1>Contact Us</h1>
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>
            
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
	 <div class="container">
        <h1>Contact Information</h1>
		
        <p><strong>Address:</strong> 123 Main Street, Colombo-13</p>
        <p><strong>Email:</strong> info@airlineticketing.com</p>
        <p><strong>Phone:</strong> +1 123-456-7890</p>
    </div>
	


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
       
        <img src='images/c_fb.png' alt="facebook" width="42px" height="42px">
        <img src="images/insta.jpg" alt="instagram" width="42px" height="42px">
        <img src="images/twit.png" alt="twitter" width="42px" height="42px">
        <img src="images/yt.png" alt="linkedin" width="42px" height="42px">
      </div>
	  
    
    
    <div class="footer-bottom">
      © All rights reserved – Ceylon Airlines
    </div>

    <div class="footer-logo">
        <img src='images/line.png' alt="Ceylon Airline logo" width="88" height="88">
    </div>
  </footer>
	
</body>
</html>