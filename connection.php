<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "incubyte";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE customer (
Customer Name VARCHAR(255) PRIMARY KEY,
Customer id VARCHAR(18) NOT NULL,
Customer Open Date DATE(8),
Last Consulted Date DATE(8),
Vaccination Type CHAR(5),
Doctor Consulted CHAR(255),
State CHAR(5),
Country CHAR(5),
post Code INT(5),
Date of Birth DATE(8),
Active Customer CHAR(1))";

if ($conn->query($sql) === TRUE) {
  echo "Table customer created successfully";
} else {
  echo "Error in creating table: " . $conn->error;
}

$conn->close();
?>