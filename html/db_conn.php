<?php
$servername = "mysqlserverhost";
$username = "tooling_user";
$password = "pass12345";
$dbname = "toolingdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>
