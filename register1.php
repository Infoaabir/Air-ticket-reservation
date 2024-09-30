<?php

include("config.php");

if (isset($_POST['submit']))
{
$Title = $_POST["Title"];
$firstName = $_POST["firstName"];
$middleName = $_POST["middleName"];
$lastName = $_POST["lastName"];
$passportNumber = $_POST["passportNumber"];
$nationalty = $_POST["nationalty"];
$email = $_POST["email"];
$pword = $_POST["password"];
$dateOfBirth = $_POST["dateOfBirth"];
$country = $_POST["country"];
$countryCode = $_POST["countryCode"];
$mobileNumber = $_POST["mobileNumber"];

$sql = "INSERT INTO frequent VALUES ('$Title', '$firstName', '$middleName', '$lastName',
     '$passportNumber', '$nationalty', '$email', '$pword', '$dateOfBirth', '$country', '$countryCode', '$mobileNumber')";

if ($con -> query($sql))
    {
        echo "Account created";
        
    }
    else{
        echo "Someone already register using this email";
    }
}
$con->close();
?>