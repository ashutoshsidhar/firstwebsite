<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SFHUB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];

$sql = "INSERT INTO items (name, price, description)
VALUES ('$name', '$price', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>