<?php
include '../config/db.php';  // Connect to database

$data = json_decode(file_get_contents("php://input"));

$employer_id = $data->employer_id;
$title = $data->title;
$description = $data->description;
$budget = $data->budget;

$conn->query("INSERT INTO jobs (employer_id, title, description, budget) VALUES ('$employer_id', '$title', '$description', '$budget')");
echo json_encode(["message" => "Job posted successfully"]);
?>
