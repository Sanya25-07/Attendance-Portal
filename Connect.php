<?php
// Create connection
$conn = new mysqli("localhost","root","sanya","attendance_portal");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}