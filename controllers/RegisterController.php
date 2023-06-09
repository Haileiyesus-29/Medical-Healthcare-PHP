<?php
session_start();
require_once('../config/database.php');

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$account = $_POST['account'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

try {
    $stmt = $connection->prepare("INSERT INTO users (first_name, last_name, email, gender, account, password, phone_number, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $gender, $account, $password, $phone_number, $address);
    $stmt->execute();

    // Get the user ID after insertion
    $user_id = $stmt->insert_id;

    $stmt->close(); 
    $connection->close(); 

    // Store user data in the session
    $_SESSION['loggedin'] = true;
    $_SESSION['user_info'] = array(
        'id' => $user_id,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'gender' => $gender,
        'account' => $account,
        'phone_number' => $phone_number,
        'address' => $address
    );

    // Redirect the user to another page or perform other actions
    header("Location: /");
    exit();
} catch (Exception $e) {
    $GLOBALS['loggedIn'] = false;
    include('../pages/signup.php');
}
