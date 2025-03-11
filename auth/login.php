<?php
include '../config/db.php';  // Connect to database

$data = json_decode(file_get_contents("php://input"));  // Get data from request

$email = $data->email;
$password = $data->password;

$result = $conn->query("SELECT * FROM users WHERE email='$email'");
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    echo json_encode(["message" => "Login successful", "user_id" => $user['id'], "role" => $user['role']]);
} else {
    echo json_encode(["message" => "Invalid credentials"]);
}
?>
