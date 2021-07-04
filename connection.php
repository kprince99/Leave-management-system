<?php
// $servername = "192.168.43.96";
$servername = "localhost";
$username = "root";
$password = "";
$database = "lms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>