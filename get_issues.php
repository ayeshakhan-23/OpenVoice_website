<?php
include "db.php";

$result = $conn->query("SELECT * FROM issues ORDER BY created_at DESC");

$issues = [];
while ($row = $result->fetch_assoc()) {
    $issues[] = $row;
}

echo json_encode($issues);