<?php 

$conn = new mysqli("localhost", "root", "", "schoolsite123");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>