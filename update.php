<?php
//include_once Connect.php;
$name=$_POST['name'];
$class=$_POST['class'];

// Create connection
$conn = new mysqli("localhost","root","sanya","attendance_portal");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Update students set name='$name', class ='$class'";
if($conn->query($sql)==true) {
  echo "Student added successfully!";  
} else {
  echo $conn->error ;
}

$conn->close();
?>