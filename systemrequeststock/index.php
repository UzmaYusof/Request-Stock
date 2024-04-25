<?php
// Start session
session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Debugging output
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    
    // Here, you can perform validation and authentication
    // For now, just redirect to homepage
    header("Location: homepage.php");
    exit(); // Stop further execution
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: homepage.html");
    exit();
}
?>
