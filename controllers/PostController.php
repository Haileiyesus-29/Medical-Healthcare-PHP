<?php
session_start();
require_once('../config/database.php');

// Retrieve form data
$author = $_SESSION['user_info']['id'];
$content = $_POST['content'];

// Handle image upload
$image = $_FILES['image'];
$imageName = $image['name'];
$imageTmpName = $image['tmp_name'];

// Specify the directory to save the uploaded image
$uploadDirectory = '../public/images/post/';

// Generate a unique filename for the uploaded image
$uniqueFileName = uniqid() . '_' . $imageName;

// Move the uploaded image to the specified directory
$uploadPath = $uploadDirectory . $uniqueFileName;
move_uploaded_file($imageTmpName, $uploadPath);

try {
    $stmt = $connection->prepare("INSERT INTO posts (author, content, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $author, $content, $uniqueFileName);
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
?>
