<?php
$servername = "localhost";
$username = "root";
$password = "sanya";
$database="attendance_portal";

$conn = new mysqli($servername, $username, $password,$database );

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
               