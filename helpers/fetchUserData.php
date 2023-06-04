<?php
if(session_status() == PHP_SESSION_NONE) {
   session_start();
}




function fetchUserDataById($id) {
   $path = dirname(__DIR__);
   include $path.'/config/database.php';
   
   $connection;
   $stmt = $connection->prepare("SELECT * FROM users WHERE id = ?");
   $stmt->bind_param("i", $id);
   $stmt->execute();

   $result = $stmt->get_result();
   $user = $result->fetch_assoc();

   $stmt->close();

   // $_SESSION['user_data'] = $user; // Store the user data in the session

   return $user;
}
