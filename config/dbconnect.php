<?php
$servername = "localhost";       // or your server IP
$username = "root";     // your MariaDB username
$password = "41842773@Kip";     // your MariaDB password
$database = "tanuidb";     // the database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
echo "Connected successfully to the database.";
}
?>
