<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secure";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, phone FROM alarm";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"<div style='border:1px solid red;color:white;'>Name: " . $row["username"]. " <br> Phone " . $row["phone"]. "<br></div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>