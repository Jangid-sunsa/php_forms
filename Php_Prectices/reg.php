<?php
$username = $_POST['username'];
$email = $_POST['email'];
// $password = $_POST['password'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


// Database connection
$conn = new mysqli('localhost', 'root', '', 'user_DB');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: register.php?success=1");
    exit();
}
?>
