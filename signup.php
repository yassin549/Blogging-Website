<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "webpage";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Failed to connect DB: " . $conn->connect_error);
}

if (isset($_POST['signup'])) {
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (Name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);
    if ($stmt->execute()) {
        header("Location: index.php"); // Redirect to login page after successful signup
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>