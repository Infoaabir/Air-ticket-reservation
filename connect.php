<?php
$con=mysqli_connect('localhost', 'root', '', 'flights');

if(!$con){

	die(mysqli_error("Error"+$con));
}
?>