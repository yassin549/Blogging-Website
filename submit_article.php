<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "webpage"; // Database name
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get article title and content from form
    $articleTitle = $_POST['articleTitle'];
    $articleContent = $_POST['articleContent'];

    // Prepare and execute SQL statement to insert data into database
    $sql = "INSERT INTO Article (title, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $articleTitle, $articleContent);
    if ($stmt->execute()) {
        header("Location: create.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect if accessed directly
    header("Location: create.php");
    exit();
}
?>