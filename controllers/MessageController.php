<?php
session_start();
require_once('../config/database.php');

// Retrieve form data
$sender = $_SESSION['user_info']['id'];
$receiver = $_POST['receiver'];
$content = $_POST['content'];
$timestamp = date('Y-m-d H:i:s'); // Current date and time in "YYYY-MM-DD HH:MM:SS" format

try {
    $stmt = $connection->prepare("INSERT INTO messages (sender, receiver, content, timestamp) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $sender, $receiver, $content, $timestamp);
    $stmt->execute();

    $stmt->close();
    $connection->close();

    // Redirect the user to another page or perform other actions
    header("Location: /messages/".$receiver);
    exit();

} catch (Exception $e) {
    // Handle any exceptions that occur
    include('../pages/error.php');
}

