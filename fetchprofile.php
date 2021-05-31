<?php
include 'Connect.php';
$sql = 'Select * from admin';
$result = $con->query($sql);
if($result->num_rows>0){
    $row = $result->fetch_assoc();
} else {
    echo $con->error;
}
