<?php
include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare(
    "UPDATE issues SET status='Resolved', resolved_at=NOW() WHERE id=?"
);
$stmt->bind_param("s", $data["id"]);
$stmt->execute();

echo json_encode(["success" => true]);