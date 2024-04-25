
<?php
// Establish connection to MySQL database
$conn = mysqli_connect("localhost", "root", "", "requeststock");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data sent from JavaScript
$itemName = $_POST['Item Name'];
$quantity = $_POST['Quantity'];
$status = 'Status'; // Set the default status

// Insert data into the database
$sql = "INSERT INTO request_status (Item Name, Quantity, Status) VALUES ('$Item Name', $Quantity, '$Status')";
if (mysqli_query($conn, $sql)) {
    echo "Data saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

////
////
///
// Retrieve data sent from the client-side JavaScript
$data = json_decode(file_get_contents("php://input"), true);

// Connect to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "requeststock";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL statement to insert data into the database
$itemName = $data['Item_Name'];
$quantity = $data['Quantity'];

$sql = "INSERT INTO requests (Item_Name, Quantity) VALUES ('$Item_Name', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

?>
