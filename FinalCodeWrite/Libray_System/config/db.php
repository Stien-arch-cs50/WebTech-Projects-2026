<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "uni_library";

// Connect to MySQL
$conn = mysqli_connect($host, $user, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conn->query($sql) !== TRUE) {
    die("Error creating database: " . $conn->error);
}




if ($conn->query($tableSql) !== TRUE) {
    die("Error creating table: " . $conn->error);
}
?>
