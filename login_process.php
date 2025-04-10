<?php
session_start();

$host = "localhost";
$db = "cybersecurity_db";
$user = "root";
$pass = "";


$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if ($password === $row['password']) {

        $_SESSION['username'] = $username;
        header("Location: home.php");
    } else {
        echo "❌ Incorrect password.";
    }
} else {
    echo "❌ User not found.";
}
?>
