<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secure";
$user=$_POST['username'];
$phone=$_POST['phone'];
if (empty($_POST['username'])){
    echo "username cannt be empty: " . $sql . "<br>" . $conn->error; 
}
if (empty($_POST['phone'])){
    echo "phone cannt be empty: " . $sql . "<br>" . $conn->error; 
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO alarm (username, phone)
VALUES ('$user', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>