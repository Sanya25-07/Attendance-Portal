<?php
$name=$_POST['name'];
$class=$_POST['class'];

// Create connection
$conn = new mysqli("localhost","root","sanya","attendance_portal");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*
$sql = "Insert into students(name,class) values('$name',$class)";

if($conn->query($sql)==true) {
  echo "Student added successfully!";  
} else {
  echo $conn->error ;
}

*/

//Prepare Statement Method
$stmt = $conn->prepare("Insert into students(name,class) values(?,?)");
$stmt->bind_param("ss",$name,$class);

$stmt->execute();

$stmt->close();
$conn->close();

echo "Aal is well!";
?>

