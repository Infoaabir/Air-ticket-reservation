<!DOCTYPE html>
<html>
  <head style="background-color:#0067A5">
  <title>ceylone Airline</title>
  <style>
  </style>
<link rel="icon" type="image/x-icon" href="images/line.png">
</head>
<link rel="stylesheet" href="style\admin.css">
<body>
  <header>
    <div class="header-logo">
      <img
        src="images/line.png"
        alt="Ceylon Airline logo"
        height="77px"
        width="77px"
      />
      Ceylon Airlines
    </div>
    <div class="menu">
      <button onclick="location.href='register1.php'">
        Login or Signup
      </button>
     
    </div>
  </header>
  <div class="container">  
  <img src="images/user.png" class="user">
      <div class="login-box">
     
      <h2 class="header"><br>login as a Admin User</h2>
     
      <form action="Admin_pro.php" method="post"> 
        
        <?php
        session_start();
        if (isset($_SESSION['error'])) { 
            $error = $_SESSION['error']; 
            echo '<p class="error-message">' . $error . '</p>';
            unset($_SESSION['error']);
        } 
        ?>    
       <label>Email</label>
      <input type="email" name="email" placeholder="Email" />
      <label>password</label>
      <input type="password" name="password" placeholder="Password" />
      <a href="login-aabir.php"><h5>user's login page</a>
     <div class="checkbox-container">
          <input type="checkbox" id="remember" name="remember" />
          <label for="remember">Remember Me</label>
        </div>  
      <button class="submit" name="login">Sign In</button>
    </div>
    </form>
      </div>
    </div>

    <footer>

      <div class="connect">
      <p class="connect-text">Connect with us</p>
             <img src="images/c_fb.png" alt="" width="35px" height="35px" class="fb">
             <img src="images/insta.jpg" alt="" width="35px" height="35px" class="in">
             <img src="images/twit.png" alt="" width="35px" height="35px" class="tw">
             <img src="images/yt.png" alt="" width="35px" height="35px" class="yt">
         </div>
         
         <div class="footer-bottom">
           © All rights reserved - Ceylon Airlines
         </div>
     
         <div class="footer-logo">
             <img src="images/line.png" alt="Ceylon Airline logo" width="44px" height="44px">
         </div>
       
       <div class="footer-buttons">
           <button>Frequent flyer</button>
         <button>Check flight status</button>
           <button>Flight schedule</button>
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
</body>
</html>