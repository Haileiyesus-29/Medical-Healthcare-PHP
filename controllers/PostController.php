<?php
session_start();
require_once('../config/database.php');


// Retrieve form data
$author = $_SESSION['user_info']['id'];
$content = $_POST['content'];
$image = $_POST['image'];

try {
    $stmt = $connection->prepare("INSERT INTO posts (author, content, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $author, $content, $image);
    $stmt->execute();

    $stmt->close();
    $connection->close();

    // Redirect the user to another page or perform other actions
    header("Location: /");
    exit();

} catch (Exception $e) {
    // Handle any exceptions that occur
    include('../pages/error.php');
}
