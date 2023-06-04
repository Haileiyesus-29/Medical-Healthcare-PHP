<?php
function fetchAllPosts()
{
  try {
    $path = dirname(__DIR__);
    include $path."/config/database.php";
    $stmt = $connection->prepare("SELECT p.*, u.id AS author_id, u.first_name, u.last_name, 
                                 p.image, u.image AS author_image
                                 FROM posts p 
                                 JOIN users u ON p.author = u.id 
                                 ORDER BY p.id DESC");
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


