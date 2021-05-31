<?php
$classid=$_POST['classid'];
$subjectid=$_POST['subjectid'];
$date=$_POST['date'];
$attendanceid=$_POST['attendanceid'];

// Create connection
$conn = new mysqli("localhost","root","sanya","attendance_portal");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Insert into attendance(classid,subjectid,date,attendanceid) values('$classid','$subjectid','$date','$attendanceid')";

if($conn->query($sql)==true) {
  echo "Done!";  
} else {
  echo $conn->error ;
}
$conn->close();
?>

