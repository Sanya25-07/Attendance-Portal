<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli("localhost","root","sanya","attendance_portal");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Insert into admin(fname,lname,gender,email,password) values('$fname','$lname','$gender','$email','$password')";

if($conn->query($sql)==true) {
  echo "Done!";  
} else {
  echo $conn->error ;
}
$conn->close();
?>

