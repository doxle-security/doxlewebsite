<?php
$serverName = "localhost";
$userName = "doxlesecurity";
$password = "D0xlesecurity";
$dbName = "doxlewebsite";
// Create database connection
$conn = new mysqli($serverName, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>