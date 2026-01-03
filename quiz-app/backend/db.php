<?php
header("Content-Type: application/json; charset=UTF-8");

$servername = getenv("DB_HOST");
$username   = getenv("DB_USER");
$password   = getenv("DB_PASS");
$database   = getenv("DB_NAME");

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}
