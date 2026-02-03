<?php
include "dp.php";

$data = json_decode(file_get_contents("php://input"), true);

$sql = "INSERT INTO issues (department_name, category, description)
        VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sss",
    $data["department"],
    $data["category"],
    $data["description"]
);

$stmt->execute();
echo json_encode(["success" => true]);
