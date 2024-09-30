<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style/styles-ash.css" >
  <title>Seat Booking</title>
  <style>
    /* Add some basic styles for the seat layout */
    .seat-map {
      display: flex;
      flex-wrap: wrap;
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .seat {
      width: 40px;
      height: 40px;
      margin: 5px;
      border: 1px solid #ccc;
      text-align: center;
      line-height: 40px;
      font-weight: bold;
      cursor: pointer;
    }
    
    .seat.available {
      background-color: #a3cfdb;
    }
    
    .seat.selected {
      background-color: #7da7b9;
      color: #fff;
    }
	 input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
			margin: 0 auto;
			 display: flex;
      flex-wrap: wrap;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
  </style>
</head>
<body>
 <header>
    <div class="header-logo">
        <img src='images/line.png' alt="Cylone Airline logo" height='77' width='77'>
        <div class="logo-name">Ceylon Airlines</div>
    </div>
    <div class="menu">
      <button>Login or Signup</button>
      <button>Menu</button>
    </div>
  </header>
  <h1>Seat Booking</h1>
  
  <div class="seat-map">
    <div class="seat available">1</div>
    <div class="seat available">8</div>
    <div class="seat">15</div>
    <div class="seat available">22</div>
    <div class="seat">29</div>
    <div class="seat available">36</div>
    <div class="seat available">43</div>
    <div class="seat">50</div>
    <div class="seat available">57</div>
    <div class="seat">64</div>
	<div class="seat available">71</div>
	<div class="seat available">78</div>
	<div class="seat available">85</div>
	<div class="seat available">92</div>
	<div class="seat available">99</div>
	<div class="seat available">2</div>
	<div class="seat available">9</div>
	<div class="seat available">16</div>
	<div class="seat available">23</div>
	<div class="seat available">30</div>
	<div class="seat available">37</div>
	<div class="seat available">44</div>
	<div class="seat available">51</div>
	<div class="seat available">58</div>
	<div class="seat available">65</div>
	<div class="seat available">72</div>
	<div class="seat available">79</div>
	<div class="seat available">86</div>
	<div class="seat available">93</div>
	<div class="seat available">100</div>
	
  </div>
  
  
  <div class="seat-map">
  <div class="seat available">3</div>
  <div class="seat available">10</div>
  <div class="seat available">17</div>
  <div class="seat available">24</div>
  <div class="seat available">31</div>
  <div class="seat available">38</div>
  <div class="seat available">45</div>
  <div class="seat available">52</div>
  <div class="seat available">59</div>
  <div class="seat available">66</div>
  <div class="seat available">73</div>
  <div class="seat available">80</div>
  <div class="seat available">87</div>
  <div class="seat available">94</div>
  <div class="seat available">101</div>
  <div class="seat available">4</div>
  <div class="seat available">11</div>
  <div class="seat available">18</div>
  <div class="seat available">25</div>
  <div class="seat available">32</div>
  <div class="seat available">39</div>
  <div class="seat available">46</div>
  <div class="seat available">53</div>
  <div class="seat available">60</div>
  <div class="seat available">67</div>
  <div class="seat available">74</div>
  <div class="seat available">81</div>
  <div class="seat available">88</div>
  <div class="seat available">95</div>
  <div class="seat available">102</div>
  <div class="seat available">5</div>
  <div class="seat available">12</div>
  <div class="seat available">19</div>
  <div class="seat available">26</div>
  <div class="seat available">33</div>
  <div class="seat available">40</div>
  <div class="seat available">47</div>
  <div class="seat available">54</div>
  <div class="seat available">61</div>
  <div class="seat available">68</div>
  <div class="seat available">75</div>
  <div class="seat available">82</div>
  <div class="seat available">89</div>
  <div class="seat available">96</div>
  <div class="seat available">103</div>
	</div>
	
	 <div class="seat-map">
    <div class="seat available">6</div>
    <div class="seat available">13</div>
    <div class="seat">20</div>
    <div class="seat available">27</div>
    <div class="seat">34</div>
    <div class="seat available">41</div>
    <div class="seat available">48</div>
    <div class="seat">55</div>
    <div class="seat available">62</div>
    <div class="seat">69</div>
	<div class="seat available">76</div>
	<div class="seat available">83</div>
	<div class="seat available">90</div>
	<div class="seat available">97</div>
	<div class="seat available">104</div>
	<div class="seat available">7</div>
	<div class="seat available">14</div>
	<div class="seat available">21</div>
	<div class="seat available">28</div>
	<div class="seat available">35</div>
	<div class="seat available">42</div>
	<div class="seat available">49</div>
	<div class="seat available">56</div>
	<div class="seat available">63</div>
	<div class="seat available">70</div>
	<div class="seat available">77</div>
	<div class="seat available">84</div>
	<div class="seat available">91</div>
	<div class="seat available">98</div>
	<div class="seat available">105</div>
	
  </div>
  <a href="make Payment.php" style="text-decoration:none; color: white; margin-right:10%;"><input type="submit" value="Submit"></a>
  
  <script>
    // JavaScript code to handle seat selection
    var seats = document.querySelectorAll('.seat');
    
    function selectSeat() {
      if (this.classList.contains('available')) {
        this.classList.toggle('selected');
      }
    }
    
    for (var i = 0; i < seats.length; i++) {
      seats[i].addEventListener('click', selectSeat);
    }
  </script>
  
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