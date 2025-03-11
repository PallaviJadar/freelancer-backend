<?php
$host = "localhost";
$db_name = "freelancer_db";
$username = "root";  // Default XAMPP username
$password = "";      // Default XAMPP password is empty

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
