<?php
// Start the session
session_start();

// Check if the 'cart' session variable is set and not empty
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Loop through each item in the 'cart' session variable
    foreach($_SESSION['cart'] as $item) {
        // Display the selected stock information
        echo "Product ID: " . $item['product_id'] . "<br>";
        echo "Product Name: " . $item['product_name'] . "<br>";
        echo "Quantity: " . $item['quantity'] . "<br>";
        echo "Price: $" . $item['price'] . "<br><br>";
    }
} else {
    // If the cart is empty, display a message
    echo "Your cart is empty.";
}
?>