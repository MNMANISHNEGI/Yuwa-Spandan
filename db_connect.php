<?php
// Database connection details
$host = 'localhost';
$dbname = 'project3';
$username = 'root';
$password = '';

// Create connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
