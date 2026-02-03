<?php
$conn = new mysqli("localhost", "root", "", "NG__july25");

if ($conn->connect_error) {
    die("Database connection failed");
}
?>