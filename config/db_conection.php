<?php
$conn = mysqli_connect('localhost','root','','delock');
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>