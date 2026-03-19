<?php
$servername = "localhost";
$username = "root";    
$password = "";          

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS healthworks";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->select_db("healthworks");

// Create users table
$sql = "CREATE TABLE  IF NOT EXISTS  users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "<br>Table created successfully.";
} else {
    echo "<br>Error creating table: " . $conn->error;
}

// Create inquiry table
$sql = "CREATE TABLE  IF NOT EXISTS  inquiries (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    iqEmail VARCHAR(100) NOT NULL,
    inquiry text NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "<br>Table created successfully.";
} else {
    echo "<br>Error creating table: " . $conn->error;
}

$conn->close();



?>

