<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="./style/style1.css" />
      <link rel="icon" href="./src/line.png">
      <title>Ceylon Airline | "Your journey. Our passion" </title>
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
            <a class="navi" href="frequentflyer.php">Frequent Flyer</a>
            <a class="navi" href="login-aabir.php">Login or Sign up</a>
            <a class="navi" href="#">Menu</a>
        </nav>

          <script src="script.js"></script>
      </header>
  
     <div class="main">
        <img class="content" src="./src/image2.jpg" alt="background image"/>  
        <div class="info">
          <div class="search-text">Where to next?</div>

      <form method="POST">    
          <div class="radio-buttons">
            <label><input type="radio" name="flight-type" value="one-way" /> Oneway</label>
            <label><input type="radio" name="flight-type" value="returning" />Returning</label>
          </div>
  
          <div class="input-row">
            <div class="From-to">
              <div class="departure-select">
                <input list="locations" id="From" name="From" placeholder="From" required>
                <datalist id="locations">
                  <option value="Abu Dhabi, UAE">
                  <option value="Colombo, Sri Lanka">
                  <option value="Jakarta, Indonesia">
                  <option value="Jeddah, Saudi Arabia">
                  <option value="London, UK">
                  <option value="Milan, Italy">
                  <option value="Tokyo, JPN">
                 <option value="Colombo, Sri Lanka">
                <option value="Delhi, India">
                <option value="Beijing, China">
                <option value="Madrid, Spain">
                <option value="Miami, USA">
                <option value="Mumbai, India">
                <option value="Washington DC, USA">
                <option value="Paris, France">
  
                </datalist>
              </div>
  
              <div class="arrival-select">
                <input list="locations" id="To" name="To" placeholder="To" required>
	            <datalist id="locations1">
                 <option value="Abu Dhabi, UAE">
                  <option value="Colombo, Sri Lanka">
                  <option value="Jakarta, Indonesia">
                  <option value="Jeddah, Saudi Arabia">
                  <option value="London, UK">
                  <option value="Milan, Italy">
                  <option value="Tokyo, JPN">
                <option value="Colombo, Sri Lanka">
                <option value="Delhi, India">
                <option value="Beijing, China">
                <option value="Madrid, Spain">
                <option value="Miami, USA">
                <option value="Mumbai, India">
                <option value="Washington DC, USA">
                <option value="Paris, France">

              </datalist>
            </div>

            </div>
  
            <div class="date-select">
              <div class="outbound-date">
                <label for="outbound-date">Outbound</label>
                <br>
                <input type="date" id="outbound-date" name="obdate" required>
              </div>
  
              <div class="return-date">
                <label for="return-date" name="redate" required>Return</label>
                <br>
                <input type="date" id="outbound-date" />
              </div>
            </div>
            
              <div class="numberInputs">
                <label for="number1">Adults</label>
                <br>
                <input type="number" id="number1" required><br>
              
                <label for="number2">Childs</label>
                <br>
                <input type="number" id="number2" required>
              </div>

              <div class="travel-class">
                <select name="Class" required>
                  <option hidden>Class</option>
                  <option>First class</option>
                  <option>Business class</option>
                  <option>Economy class</option>
                </select>
              </div>
                
              <input type="submit" value="Search" name="submit" class="btn">
            </div>
        </form>
      </div>

       <table>

      <?php

      include 'config.php';

        if(isset($_POST['submit'])){
   
            $searchf = $_POST['From'];
            $searcht = $_POST['To'];
            $searchod = $_POST['obdate'];

            $sql="select * from `flightdata` where dlocation='$searchf' and alocation='$searcht' and date='$searchod'";
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
				<th>Date</th>

				</tr>
				</thead>';

				echo '<tbody>
				<tr>
                <td><a href="searchresults.php?data='.$row['fnumber'].'">'.$row['fnumber'].'</a></td>			
                <td>'.$row['dlocation']. '</td>
				<td>'.$row['alocation']. '</td>
				<td>'.$row['date']. '</td>

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
       <table>
  
        <div class="button-row">
          <button class="row-buttons"><a href="./cancel.php">Manage booking</a></button>
          <button class="row-buttons"><a href="Chec-in.php">Check in</a></button>
          <button class="row-buttons"><a href="frequentflyer.php">Frequent flyer</a></button>
          <button class="row-buttons"><a href="contactus.php">Contact us</a></button>
          <button class="row-buttons"><a href="fstatus.php">Check flight status</a></button>
        </div>
  
        
        <h3>Offers and promotions</h3>
      <br>
      <div class="location">
        <img src="./src/Paris.jpg" alt="Paris" class="location-image">
        <div>
          <h4 class="location-name">Paris</h4>
          <p class="location-intro">Welcome to the enchanting city of Paris, where timeless elegance meets vibrant culture! Step into a world of unparalleled beauty and immerse yourself in the allure of the "City of Love." Picture strolling along the charming streets of Paris, lined with iconic landmarks that have inspired countless artists and poets. Feel the romantic ambiance as you admire the grandeur of the Eiffel Tower, its shimmering lights casting a magical glow over the city. Indulge in the exquisite flavors of French cuisine, savoring delicate pastries and decadent cheeses that will transport your taste buds to culinary heaven. Experience the allure of Paris with us, and let your dreams take flight in the City of Love. Bon voyage!</p>
          <br>
          <p class="flight-type">Roundtrip</p>
          <p class="price">From $8600</p>
          <p class="class-type" id="First">First class</p>
          <br>
          <p class="price-text">(Including tax & levis)</p>
          <p class="terms">*Terms and conditions apply</p>
          <br>
          <button class="View">View offer</button>
        </div>
      </div>
      <br>
      <div class="location">
        <img src="./src/Guangzhou.jpg" alt="Guangzhou" class="location-image">
        <div>
          <h4 class="location-name">China - Guangzhou</h4>
          <p class="location-intro">Welcome to the vibrant city of Guangzhou, where ancient traditions intertwine with modern marvels, creating an electrifying tapestry of culture and innovation. Immerse yourself in a sensory symphony as you traverse bustling markets adorned with vibrant colors and intoxicating aromas. Indulge in the tantalizing flavors of Cantonese cuisine, where each bite is a culinary revelation. Explore the architectural wonders that dot the skyline, from the iconic Canton Tower to the historical splendor of Chen Clan Ancestral Hall. Let our airline transport you to this captivating destination, where an unforgettable adventure awaits, blending tradition, gastronomy, and boundless excitement.</p>
          <br>
          <p class="flight-type">Roundtrip</p>
          <p class="price">From $5825</p>
          <p class="class-type" id="First">First class</p>
          <br>
          <p class="price-text">(Including tax & levis)</p>
          <p class="terms">*Terms and conditions apply</p>
          <br>
          <button class="View">View offer</button>
        </div>
      </div>

      <br>
      <div class="location">
        <img src="./src/Tokyo.jpg" alt="Tokyo" class="location-image">
        <div>
          <h4 class="location-name">Tokyo</h4>
          <p class="location-intro">Experience the awe-inspiring allure of Tokyo, a captivating fusion of ancient tradition and futuristic marvels. Discover a metropolis where vibrant city streets pulse with energy, adorned with neon lights and endless shopping delights. Immerse yourself in the serenity of ancient temples, or indulge in culinary masterpieces at world-renowned sushi bars. Lose yourself in the fashionable districts of Ginza and Harajuku, where cutting-edge trends come to life. Marvel at the iconic Tokyo Tower or immerse yourself in the tranquility of the Imperial Palace Gardens. Let our airline be your gateway to this mesmerizing destination, where extraordinary experiences await at every turn.</p>
          <br>
          <p class="flight-type">Roundtrip</p>
          <p class="price">From $5600</p>
          <p class="class-type" id="First">First class</p>
          <br>
          <p class="price-text">(Including tax & levis)</p>
          <p class="terms">*Terms and conditions apply</p>
          <br>
          <button class="View">View offer</button>
        </div>
      </div>

      <br>
      <div class="location">
        <img src="./src/Bangkok.jpg" alt="Bangkok" class="location-image">
        <div>
          <h4 class="location-name">Bangkok</h4>
          <p class="location-intro">Welcome to the mesmerizing city of Bangkok, a dazzling gem of Southeast Asia that will captivate your senses and leave you breathless with its vibrant energy. Step into a world where ancient temples stand in harmony with towering skyscrapers, and bustling street markets overflow with tantalizing flavors and vibrant colors. Indulge in the exquisite delights of Thai cuisine, a symphony of flavors that will transport your taste buds to new heights. Immerse yourself in the rich cultural tapestry of Bangkok, exploring majestic temples, floating markets, and luxurious shopping districts. Let our airline be your gateway to this enchanting city, where adventure, beauty, and unforgettable experiences await at every corner.</p>
          <br>
          <p class="flight-type">Roundtrip</p>
          <p class="price">From $890</p>
          <p class="class-type" id="Business">Business class</p>
          <br>
          <p class="price-text">(Including tax & levis)</p>
          <p class="terms">*Terms and conditions apply</p>
          <br>
          <button class="View">View offer</button>
        </div>
      </div>

      <br>
      <div class="location">
        <img src="./src/Singappore1.jpg" alt="Singapore" class="location-image" id="Singappore">
        <div>
          <h4 class="location-name">Singapore</h4>
          <p class="location-intro">Welcome to the captivating city-state of Singapore, a stunning blend of modern marvels and rich heritage that will leave you awe-inspired. Immerse yourself in a sensory symphony as you wander through vibrant neighborhoods, where historic shophouses stand alongside futuristic skyscrapers. Indulge in a culinary adventure, savoring the eclectic flavors of hawker centers and Michelin-starred restaurants alike. Discover the lush oasis of Gardens by the Bay, where towering Supertrees create a mesmerizing canopy. Shop till you drop in Orchard Road, a paradise for fashion enthusiasts and luxury seekers. Let our airline be your gateway to this extraordinary destination, where cultural diversity, culinary delights, and unforgettable experiences await your arrival.</p>
          <br>
          <p class="flight-type">Roundtrip</p>
          <p class="price">From $950</p>
          <p class="class-type" id="Business">Business class</p>
          <br>
          <p class="price-text">(Including tax & levis)</p>
          <p class="terms">*Terms and conditions apply</p>
          <br>
          <button class="View">View offer</button>
        </div>
      </div>

      <br>
      <div class="location">
        <img src="./src/Delhi.jpg" alt="Delhi" class="location-image" id="Delhi">
        <div>
          <h4 class="location-name">India - Delhi</h4>
          <p class="location-intro">Welcome to the vibrant city of Delhi, where ancient heritage meets modern dynamism, creating an intoxicating blend of tradition and innovation. Step into a world where historical landmarks like the majestic Red Fort and the iconic Qutub Minar stand as testaments to the city's rich past. Immerse yourself in a kaleidoscope of colors and flavors as you explore bustling markets and savor the tantalizing street food. Unleash your inner shopaholic in bustling bazaars and high-end malls, offering a treasure trove of textiles, jewelry, and handicrafts. Let our airline be your gateway to this extraordinary destination, where history, culture, and unparalleled experiences await your arrival.</p>
          <br>
          <p class="flight-type">Roundtrip</p>
          <p class="price">From $325</p>
          <p class="class-type" id="Economy">Economy class</p>
          <br>
          <p class="price-text">(Including tax & levis)</p>
          <p class="terms">*Terms and conditions apply</p>
          <br>
          <button class="View">View offer</button>
        </div>
      </div>
      <br>

        <h3>About Ceylon Airline</h3>
      <br>
      <p class="About">Ceylon Airline is a prestigious and forward-thinking airline that prides itself on providing exceptional service, comfort, and convenience to its passengers. As the national carrier of the beautiful island nation of Sri Lanka, Ceylon Airline showcases the rich heritage, warm hospitality, and vibrant culture of the country in every aspect of its operations.

        At the heart of Ceylon Airline's philosophy is a commitment to excellence, ensuring that each passenger's journey is nothing short of extraordinary. From the moment travelers step onboard, they are greeted with a warm smile and impeccable service from the highly trained and friendly cabin crew. The airline's fleet comprises state-of-the-art aircraft, equipped with the latest technology and amenities to guarantee a safe and enjoyable flight experience.
        
        Ceylon Airline offers an extensive network of domestic and international destinations, connecting travelers to key cities around the world. Whether passengers are embarking on a business trip or seeking a leisurely vacation, Ceylon Airline provides a range of convenient flight options to suit every traveler's needs. With a focus on punctuality, efficiency, and reliability, the airline ensures that passengers arrive at their destinations on time, feeling refreshed and ready to explore.
        
        Onboard, Ceylon Airline offers a variety of services and amenities to enhance the passenger experience. Spacious and comfortable seating, coupled with generous legroom, ensures that travelers can relax and enjoy their journey. The airline's in-flight entertainment system provides a wide selection of movies, TV shows, music, and games, catering to diverse tastes and preferences. Passengers can also indulge in a delectable selection of gourmet meals, expertly crafted to delight the senses and reflect the diverse flavors of Sri Lanka.
        
        Ceylon Airline is committed to sustainability and environmental stewardship. The airline actively invests in fuel-efficient aircraft and adopts eco-friendly practices to minimize its carbon footprint. Ceylon Airline also collaborates with local communities and charitable organizations to support social initiatives, promoting education, healthcare, and environmental conservation.
        
        As a symbol of national pride, Ceylon Airline's distinctive logo, inspired by the island's rich cultural heritage, adorns each aircraft, reflecting the airline's commitment to representing Sri Lanka on the global stage. With its exceptional service, cutting-edge technology, and dedication to customer satisfaction, Ceylon Airline is poised to be the preferred choice for travelers seeking an unforgettable journey with a touch of Sri Lankan charm.</p>

  
        <br>

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
  </html>