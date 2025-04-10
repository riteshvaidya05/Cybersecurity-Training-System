<?php
$conn = new mysqli("localhost", "root", "", "cybersecurity_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$attack_type = $_POST['attack_type'];
$unique_code = $_POST['unique_code'];
$score = intval($_POST['score']);

$stmt = $conn->prepare("INSERT INTO attack_assessments (attack_type, unique_code, score) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $attack_type, $unique_code, $score);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conn->close();
?>
