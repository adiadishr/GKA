<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gaunkoachar_db";


// Create connection
$conn = new mysqli($servername,$username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>