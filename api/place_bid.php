<?php
include '../config/db.php';  // Connect to database

$data = json_decode(file_get_contents("php://input"));

$job_id = $data->job_id;
$freelancer_id = $data->freelancer_id;
$bid_amount = $data->bid_amount;

$conn->query("INSERT INTO bids (job_id, freelancer_id, bid_amount) VALUES ('$job_id', '$freelancer_id', '$bid_amount')");
echo json_encode(["message" => "Bid placed successfully"]);
?>
