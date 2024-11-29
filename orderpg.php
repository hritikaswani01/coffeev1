<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffeedb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = $_POST['name'];
    $coffee_type = $_POST['coffee_type'];
    $quantity = $_POST['quantity'];
    // $order_type = $_POST['order_type'];

    // Insert order into the database
    $sql = "INSERT INTO orders (customer_name, coffee_type, quantity)
            VALUES ('$customer_name', '$coffee_type', $quantity)";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
