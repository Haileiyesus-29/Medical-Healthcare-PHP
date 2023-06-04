<?php

function loadChatHistory($otherPersonId) {
    try {
        $path = dirname(__DIR__);
        include $path."/config/database.php";
        
        $userId = $_SESSION['user_info']['id'];        
        $stmt = $connection->prepare("SELECT * FROM messages WHERE (sender = ? AND receiver = ?) OR (sender = ? AND receiver = ?) ORDER BY timestamp ASC");
        $stmt->bind_param("ssss", $userId, $otherPersonId, $otherPersonId, $userId);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $messages = $result->fetch_all(MYSQLI_ASSOC);
        
        $stmt->close();
        $connection->close();
        
        return $messages;
    } catch (Exception $e) {
        // Handle any exceptions that occur
        echo $e;
        return false;
    }
}
