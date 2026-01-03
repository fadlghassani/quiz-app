<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");

require "db.php";

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

$questions = [];

while ($row = $result->fetch_assoc()) {
    $questions[] = [
        "id" => (string)$row["id"],
        "title" => $row["title"],
        "options" => json_decode($row["options"], true)
    ];
}

echo json_encode($questions);
