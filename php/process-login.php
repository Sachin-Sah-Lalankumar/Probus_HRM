<?php
session_start();

$mysqli = require __DIR__ . "/dbcon.php";

$email = $_POST['email'];
$password = $_POST['password'];

// Check if the user exists in the database
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $mysqli->query($sql);

if ($result->num_rows == 1) {
    // Store user data in session variables
	$row = $result->fetch_assoc();
	$_SESSION['email'] = $row['email'];
	$_SESSION['username'] = $row['username'];
	$_SESSION['role'] = $row['role'];
    // Redirect to the home page after successful login
    header("Location: ../home.php");
    exit;
} else {
    //echo "Invalid email or password.";
    header("Location: ../loginSingup_faield/login-failed.html");
}

$mysqli->close();
?>