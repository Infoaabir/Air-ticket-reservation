
<!DOCTYPE html>
<html>
  <head style="background-color:#0067A5">
  <title>ceylone Airline</title>
  <style>
  </style>
<link rel="icon" type="image/x-icon" href="images/line.png">
</head>
<link rel="stylesheet" href="css\login.css">
<body>
  <header>
    <div class="header-logo">
      <img
        src="images/line.png"
        alt="Ceylon Airline logo"
        height="77px"
        width="77px"
      />Ceylon Airlines
    </div>
  </header>
  
  <div class="container">  
    <div class="left-side">
      <div class="login-box">
     
      <h2 class="header">Alredy a member? </h2>
     
      <form action="login_pro.php" method="post"> 
        
        <h5 class="sign">sign in with your email account </h6>
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
      <a href="register_acc.php"><h5>New? sign up here |</a>
      <a href="#">Forgot Password? |</a> 
      <a href="adminlogin.php">Admin</a><br></br>
       
      <div class="checkbox-container">
          <input type="checkbox" id="remember" name="remember" />
          <label for="remember">Remember Me</label>
        </div>  
      <button class="submit" name="login" onclick="showlogin()">Sign In</button>
    </div>
    <script>
            function showlogin() {
                alert("Are you sure want to login?");
            }

        </script>
    </form>
    </div>
    <div class="right-side">
      <div class="options">
        <div class="login-box">
        <h2 class="header">Sign in</h2>
        <h5 class="sign">sign in with your social<br>account </h6>
        <button class="button">
          <img class="icon" src="images/facebook_icon.png" alt="Facebook" />
           Facebook
        </button>
        <button class="button">
          <img class="icon" src="images/google.png" alt="Google" />
          Google
        </button>
        <button class="button">
          <img class="icon" src="images/apple.png" alt="Apple" />
           Apple
        </button>
        <button class="buttonsu" button onclick="window.location.href = 'register.html';">Sign Up</button></div>
      </div>
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

