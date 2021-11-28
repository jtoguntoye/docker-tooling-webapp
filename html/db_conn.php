<?php
$servername = "mysqlserverhost";
$username = "admin";
$password = "pass1234";
$dbname = "toolingdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>
