<?php
if(session_status() == PHP_SESSION_NONE) {
   session_start();
}


require_once '../config/database.php';

function fetchUserDataByEmail($email) {
   global $connection;
   $stmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
   $stmt->bind_param("s", $email);
   $stmt->execute();

   $result = $stmt->get_result();
   $user = $result->fetch_assoc();

   $stmt->close();

   // $_SESSION['user_data'] = $user; // Store the user data in the session

   return $user;
}
