<?php
include '../config/db.php';  // Connect to database

$data = json_decode(file_get_contents("php://input"));  // Get data from request

$username = $data->username;
$email = $data->email;
$password = password_hash($data->password, PASSWORD_BCRYPT);  // Encrypt password
$role = $data->role;

$query = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
$conn->query($query);

echo json_encode(["message" => "User registered successfully"]);
?>
