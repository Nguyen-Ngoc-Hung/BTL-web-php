<?php 
$servername = "localhost";
$username = "root";
$pw = "";
$db_name = "btl_hung";
// Create connection
$conn = new mysqli($servername, $username, $pw, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
