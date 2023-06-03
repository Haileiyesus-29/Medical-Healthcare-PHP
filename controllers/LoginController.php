<?php

session_start();
require_once('../config/database.php');

if (isset($_POST['is_employee'])) {
    $_POST['is_employee'] = true;
} else {
    $_POST['is_employee'] = false;
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

try {
    $stmt = $connection->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    $stmt->close();
    $connection->close();
    
    if ($user) {
        // Login successful, set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['user_info'] = $user;
        
        // Redirect the user to another page or perform other actions
        header("Location: /");
        exit();
    } else {
        // Invalid login credentials, redirect back to login page
        header("Location: /login");
        exit();
    }
} catch (Exception $e) {
    // Handle any exceptions that occur
    include('../pages/login.php');
}
