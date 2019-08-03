<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "members";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo '<script>console.log("Connected successfully")</script>';
}
?>