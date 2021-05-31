<?php
include 'Common.php';
include 'loginconnect.php';
$email=$_POST['username'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli("localhost","root","sanya","attendance_portal");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Select email from admin where email='$email' and password='$password'";

$result = $conn->query($sql);

if($result->num_rows>0){
  redirect("myprofile.php");;
}else{
  alert("Invalid Username/Password");
  redirect("Login.php");
}
?>
                 
  
