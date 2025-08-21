<?php
$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode([
        "status" => 0,
        "message" => "Connection Failed: " . $conn->connect_error
    ]);
    exit;
}

// No output here — let the API script handle the response
?>
