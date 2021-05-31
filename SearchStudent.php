<?php
$name=null;
$class=null;
if(isset($_GET['Search'])) {
include_once 'Connect.php';
$admno = $_GET["admno"];
$sql = "Select * from students where admno=$admno";
$result = $conn->query($sql);

if($result->num_rows>0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $class = $row['class'];
} else{
    echo "<script>alert('No student found');</script>";
}
}