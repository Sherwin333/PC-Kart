<?php
require_once '../config/connection.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['name']) || empty(trim($data['name']))) {
    echo json_encode([
        "status" => 0,
        "message" => "Category name is required."
    ]);
    exit;
}

$name = $conn->real_escape_string(trim($data['name']));
$sql = "INSERT INTO categories (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    echo json_encode([
        "status" => 1,
        "message" => "Category added successfully."
    ]);
} else {
    echo json_encode([
        "status" => 0,
        "message" => "Error: " . $conn->error
    ]);
}

$conn->close();
?>
