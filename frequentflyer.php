<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="./style/style1.css" />
      <link rel="icon" href="./src/line.png">
      <title>Ceylon Airline | Travel around the world</title>
      <meta
        name="description"
        content="Discover seamless travel experiences and enjoy great deals on flights and holiday packages with Ceylon Airline. Explore our comprehensive guides, book your flights, manage your reservations, and check-in conveniently, all in one place."
      />
      <meta name="robots" content="index, follow" />
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="preconnect" href="https://fonts.googleapis.com" />
    </head>
    <body>
      <header>
        <div class="header-logo">
          <img
            src="./src/line.png"
            alt="Ceylon Airline logo"
            height="77px"
            width="77px"
          />Ceylon Airlines
        </div>
        <nav>
            <a class="navi" href="#">Frequent Flyer</a>
            <a class="navi" href="#">Login or Sign up</a>
        </nav>
          <script src="script.js"></script>
      </header>
      
    <div class="Frequent-flyer-page">
      <h2 class="Title-FF">Frequent flyer</h2>
      <br>
      <h4>Experience the power of exclusivity!</h4>
      <br>
      <p>"Elevate your journey with our exclusive offers.Join Frequent flyer today and unlock a world of exclusive benefits, rewards and personalised experiences."</p> 
      <br>
      <div class="form">
      <form name="Form2" action="register1.php" method="POST">

        <select id="Title-select" name="Title">
          <option hidden>Title</option>
          <option value="Miss">Miss</option>
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
          <option value="Ms">Ms</option>
          <option value="Rev">Rev</option>
        </select>

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br>

        <label for="middleName">Middle Name:</label>
        <input type="text" id="middleName" name="middleName"><br>

        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" required><br>

        <label for="passportNumber">Passport Number</label>
        <input type="text" id="passportNumber" name="passportNumber" required><br>

        <label for="nationality">Nationality</label>
        <input type="text" id="nationality" name="nationality" required><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br>

        <label for="dateOfBirth">Date of Birth</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" required><br>

        <label for="country">Country</label>
        <input type="text" id="country" name="country" required><br>

        <label for="countryCode">Country Code</label>
        <input type="text" id="countryCode" name="countryCode" required><br>

        <label for="mobileNumber">Mobile Number</label>
        <input type="text" id="mobileNumber" name="mobileNumber" required><br>

        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">Agree to Terms and Conditions</label><br>

        <button name="submit">Create an account </button>
    </form>
    </div>
      <br>
      
      </div>
      <br>
    </div>

      <footer>
        <div class="footer-links">
          <a href="#">About us</a> | <a href="#">Help</a> | <a href="#">Book</a> |
          <a href="#">Manage</a> | <a href="#">Before you fly</a> |
          <a href="#">Where we fly</a> | <a href="#">Experience</a> |
          <a href="#">Frequent flyer</a>
        </div>
  
        <div class="footer-middle">
          <div class="footer-links">
            <a href="#">Contact us</a> | <a href="#">Privacy policy</a> |
            <a href="#">Terms and conditions</a> |
            <a href="#">Cybersecurity</a>
          </div>
  
          <div class="connect">
            <div class="connect-text">Connect with us</div>
            <img src="" alt="fb" width="42px" height="42px" />
            <img src="" alt="insta" width="42px" height="42px" />
            <img src="" alt="twiter" width="42px" height="42px" />
            <img src="" alt="img4" width="42px" height="42px" />
          </div>
        </div>
  
        <div class="footer-bottom">© All rights reserved - Ceylon Airlines</div>
  
        <div class="footer-logo">
          <img
            src="./src/line.png"
            alt="Ceylon Airline logo"
            width="88px"
            height="88px"
          />
        </div>
      </footer>
    </body>
  </html>