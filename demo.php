<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "style_wrap";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection filed: " . $conn->connect_error);
}
echo "Connected successfully";
?>