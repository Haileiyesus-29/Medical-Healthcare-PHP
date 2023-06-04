<?php

function fetchAllPosts()
{
  try {
    //  include 'E:/MedicalHealthcare/MedicalHealthcarePHP/config/database.php';
    $path = dirname(__DIR__);
    include $path."/config/database.php";
      // global $connection;
        $stmt = $connection->prepare("SELECT p.*, u.id AS author_id, u.first_name, u.last_name, u.image 
                                     FROM posts p 
                                     JOIN users u ON p.author = u.id 
                                   ");
        $stmt->execute();
        $result = $stmt->get_result();
        $posts = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        $connection->close();
        
        return $posts;
    } catch (Exception $e) {
        // Handle any exceptions that occur
        echo $e;
        return false;
    }
}


