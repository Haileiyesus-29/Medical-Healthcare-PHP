<?php
require_once('../config/database.php');

if(isset($_POST['is_employee'])) $_POST['is_employee'] = true;
else $_POST['is_employee'] = false;

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$is_employee = $_POST['is_employee'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

try {
    $stmt = $connection->prepare("INSERT INTO users (first_name, last_name, email, gender, is_employee, password, phone_number, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisss", $first_name, $last_name, $email, $gender, $is_employee, $password, $phone_number, $address);
    $stmt->execute();

    $stmt->close(); 
    $connection->close(); 

    // Set the cookie with the user data
    $cookieName = "loggedin_user";
    $cookieValue = json_encode(array("email" => $email, "firstName" => $first_name));

    // Set the cookie to expire in 1 week (adjust the expiration time as needed)
    $expirationTime = time() + (7 * 24 * 60 * 60); // 7 days
    setcookie($cookieName, $cookieValue, $expirationTime, '/');

    // Redirect the user to another page or perform other actions
    header("Location: /");
    exit();

} catch (Exception $e) {
    // $e->getMessage();
    $GLOBALS['loggedIn'] = false;
    include('../pages/signup.php');
}

?>
