
<?php
    include 'config.php';

    $id=$_GET['updatedata'];
    $sql="Select * from `frequent` where id='$id'";
    @$result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);

    $Title = $row['Title'];
    $firstName = $row['firstName'];
    $middleName = $row['middleName'];
    $lastName = $row['lastName'];
    $passportNumber = $row['passportNumber'];
    $nationalty = $row['nationalty'];
    $email = $row['email'];
    $pword = $row['password'];
    $dateOfBirth = $row['dateOfBirth'];
    $country = $row['country'];
    $countryCode = $row['countryCode'];
    $mobileNumber = $row['mobileNumber'];


    if(isset($_POST['update'])){

      $Title = $_POST['Title'];
      $firstName = $_POST['firstName'];
      $middleName = $_POST['middleName'];
      $lastName = $_POST['lastName'];
      $passportNumber = $_POST['passportNumber'];
      $nationalty = $_POST['nationalty'];
      $email = $_POST['email'];
      $pword = $_POST['password'];
      $dateOfBirth = $_POST['dateOfBirth'];
      $country = $_POST['country'];
      $countryCode = $_POST['countryCode'];
      $mobileNumber = $_POST['mobileNumber'];

    $sql="UPDATE `frequent` 
    SET Title ='$Title', 
        firstName='$firstName', 
        middleName='$middleName', 
        lastName='$lastName',
        passportNumber='$passportNumber',
        nationalty='$nationalty', 
        email='$email', 
        pword='$password', 
        dateOfBirth='$dateOfBirth', 
        country='$country',
        countryCode='$countryCode', 
        mobileNumber='$mobileNumber', 
    WHERE id='$id'";

    $result=mysqli_query($con, $sql);
    if($result){
        header('location:displayffp.php');
    
    }else{
        die(mysqli_error($con));
      }
    }

    ?>

<!doctype html>
<html lang="en">
  <head>
<title> Admin Dashboard </title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="styles.css">

  <meta name="description" content="Discover seamless travel experiences and enjoy great deals on flights and holiday packages with Ceylon Airline. Explore our comprehensive guides, book your flights, manage your reservations, and check-in conveniently, all in one place.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
      <link rel="preconnect" href="https://fonts.googleapis.com">

      <header>
      <div class="airlinename">
        <a href="#" class="header-logo"></a>
     </div>
      <p class="airname">Ceylon Airlines</p>
      <p class="adash">Admin Dashboard<p>
       
   
  </header>
</head>
  <body>
  <h6 class="home-to-search"><a target="_blank" href="url">Adminstration Panel </a>  >  <a href="fstatus.php"> Update Frequent flyer profiles</a><h6>
<h2 id="CFS" > Update Frequent flyer profiles </h2>

<div class="container">
        <form method="post">
            <div class="inputfield">
                <label class="form-label">Title :</label>
                 <input type="text" class="form-conrol" name="Title" autocomplete="off"  required>
             </div>

            <div class="inputfield"> 
              <label class="form-label">First name :</label>
              <input type="text" class="form-conrol"  name="firstName" autocomplete="off" required>
             </div>

             <div class="inputfield"> 
              <label class="form-label">Middle name :</label>
              <input type="text" class="form-conrol"  name="middleName" autocomplete="off" required>
             </div>

             <div class="inputfield">
                 <label class="form-label">Last name :</label>
                  <input type="text" class="form-conrol" name="lastName" autocomplete="off" required>
             </div>

             <div class="inputfield"> 
              <label class="form-label">Passport number :</label>
              <input type="text" class="form-conrol"  name="passportNumber" autocomplete="off" required>
             </div>

             <div class="inputfield">
                <label class="form-label">Nationality:</label>
                 <input type="text" class="form-conrol"  name='nationalty' autocomplete="off" required>
            </div>

             <div class="inputfield">
                 <label class="form-label">Email :</label>
                <input type="text" class="form-conrol"  name="email" autocomplete="off" required>
            </div>

            <div class="inputfield">
                 <label class="form-label">Password :</label>
                 <input type="text" class="form-conrol" name="pword" autocomplete="off" required>
            </div>

            <div class="inputfield">
                <label class="form-label">Date of birth :</label>
                 <input type="text" class="form-conrol" name="dateOfBirth" autocomplete="off" required>
             </div>

            <div class="inputfield"> 
              <label class="form-label">Country :</label>
              <input type="text" class="form-conrol"  name="country" autocomplete="off" required>
             </div>

             <div class="inputfield"> 
              <label class="form-label">Country code :</label>
              <input type="text" class="form-conrol"  name="countryCode" autocomplete="off" required>
             </div>

             <div class="inputfield">
                 <label class="form-label">Mobile number :</label>
                  <input type="text" class="form-conrol" name="mobileNumber" autocomplete="off" required>
             </div>

            <button class="btn" name="update">Update</button>
        
        </form>

  </body>
<footer>


    <div class="footer-bottom">
      � All rights reserved - Ceylon Airlines
    </div>

    <div class="footer-logo">
        <img src="images/logo.png" alt="Ceylon Airline logo" width="44px" height="44px">
    </div>
	


    <div class="footer-links">
      <a href="#">Edit user accounts</a> |
      <a href="#">Edit Frequent Flyer accounts</a> |
      <a href="#">Edit Flight Data</a> |
      <a href="#">Add Flight Schedules</a> |
      <a href="#">Edit content</a> 
   
    </div>
</footer>

</html>