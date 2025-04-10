<?php
$conn = new mysqli("localhost", "root", "", "cybersecurity_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$unique_code = $_POST['unique_code'];
$score = $_POST['score'];

$stmt = $conn->prepare("SELECT id FROM employees WHERE unique_code = ?");
$stmt->bind_param("s", $unique_code);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $employee_id = $row['id'];

    $stmt = $conn->prepare("INSERT INTO test_results (employee_id, score) VALUES (?, ?)");
    $stmt->bind_param("ii", $employee_id, $score);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }

    $stmt->close();
} else {
    echo "invalid_code";
}

$conn->close();
?>
