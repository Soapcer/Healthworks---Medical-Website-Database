<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$currentEmail = $_SESSION['email'];
$name = $_POST['name'];
$newEmail = $_POST['email'];
$password = $_POST['password'];

if (!empty($password)) {
    // Password is being changed
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET name='$name', email='$newEmail', password='$hashedPassword' WHERE email='$currentEmail'";
} else {
    // Only name or email is changing
    $sql = "UPDATE users SET name='$name', email='$newEmail' WHERE email='$currentEmail'";
}

if ($conn->query($sql)) {
    $_SESSION['email'] = $newEmail; // Update session if email changed
    $_SESSION['name'] = $name;
    header("Location: profile.php");
}


?>