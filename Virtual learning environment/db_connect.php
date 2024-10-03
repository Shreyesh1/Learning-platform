<?php
$servername = "localhost";
$username = "root"; // Adjust this according to your database setup
$password = ""; // Adjust if needed
$dbname = "learning_platform_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
