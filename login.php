<!DOCTYPE html>
<html>
  <head style="background-color:#0067A5">
  <title>ceylone Airline</title>
  <style>
  </style>
<link rel="icon" type="image/x-icon" href="images/line.png">
</head>
    <link rel="stylesheet" href="style/style.css">
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
      <button onclick="location.href='/Labsheet 5/register.html'">
        Login or Signup
      </button>
      <button>Menu</button>
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
      <a href="register.html"><h5>user's login page</a>
     <div class="checkbox-container">
          <input type="checkbox" id="remember" name="remember" />
          <label for="remember">Remember Me</label>
        </div>  
      <button class="submit" name="login">Sign In</button>
    </div>
    </form>
      </div>
    </div>
      
</body>
</html>