<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "panel";
 
// Create connection and Check connection
$conn = mysqli_connect($server, $username, $password) or die("Error in connection!");
mysqli_select_db($conn, $database ) or die("Could not select database");
?>