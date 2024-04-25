<?php
// Start session
session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Here, you can perform validation and authentication
    // For demonstration, let's assume username is "admin" and password is "password"
    if ($username === "admin" && $password === "password") {
        // If authentication is successful, redirect to homepage
        header("Location: homepage.php");
        exit(); // Stop further execution
    } else {
        // If authentication fails, redirect back to login page with an error message
        $_SESSION['error'] = "Invalid username or password";
        header("Location: login.html");
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: login.html");
    exit();
}
?>
