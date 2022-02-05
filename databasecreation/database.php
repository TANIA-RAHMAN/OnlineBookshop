<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password); //MySQLi connection object
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE bookshop"; //query string
if ($conn->query($sql) === TRUE) {//query execute
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
$conn->close();// close MySQLi connection object
?>