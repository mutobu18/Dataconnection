<?php
// Include the database connection file
include 'db_connection.php';

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database.";
}

// Close the connection
$conn->close();