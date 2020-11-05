<?php

require "config/constants.php";



// Create connection
$con = mysqli_connect('localhost','root','Aqwsderf@123','khanstore',3307);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>