<?php
include '../config/db.php';  // Connect to database

$data = json_decode(file_get_contents("php://input"));

$bid_id = $data->bid_id;

$conn->query("UPDATE bids SET status='accepted' WHERE id='$bid_id'");
echo json_encode(["message" => "Bid accepted"]);
?>
