<?php

$serverName = "gvazdikelis2.localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "LoginSystem";


$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);



// if smth happens, we tell the browser to kill the the process 
// and tell us about the error
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}