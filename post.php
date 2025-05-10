<?php
$saveu = '';
$savep = '';

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $saveu = $_POST['username'];
    $savep = $_POST['password'];
} else {
    die("Username or password is empty.");
}

$servername = "localhost";
$username = "root";
$password = "admin";


$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->query("CREATE DATABASE IF NOT EXISTS cred");

$conn->select_db("cred");

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
)";
$conn->query($sql);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $saveu, $savep);

if (!$stmt->execute()) {
    die("Insert failed: " . $stmt->error);
} else {
    echo "User saved successfully.";
}
?>
