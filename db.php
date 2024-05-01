<?php
$host = 'localhost';
$dbname = 'project3';
$username = 'root';
$password = '';

// Create connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Existing responses table creation
$sql_responses = "CREATE TABLE IF NOT EXISTS responses (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    email VARCHAR(120) NOT NULL,
    answers TEXT NOT NULL,
    depression_score INT,
    anxiety_score INT,
    stress_score INT,
    depression_severity VARCHAR(50),
    anxiety_severity VARCHAR(50),
    stress_severity VARCHAR(50)
)";

mysqli_query($con, $sql_responses);

// Create users table
$sql_users = "CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    email VARCHAR(120) UNIQUE NOT NULL,
    university VARCHAR(120),
    password VARCHAR(255) NOT NULL,
    verify_token VARCHAR(255),
    verify_status INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

mysqli_query($con, $sql_users);
?>
