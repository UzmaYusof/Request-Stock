<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the item name and quantity from the form
$itemName = $_POST["itemName"];
$itemQuantity = $_POST["itemQuantity"];

// Insert the new item into the database
$sql = "INSERT INTO items (name, quantity) VALUES ('$itemName', '$itemQuantity')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
