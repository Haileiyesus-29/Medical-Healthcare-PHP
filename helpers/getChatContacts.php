<?php
function getChatContacts($personId) {
   $path = dirname(__DIR__);
   include $path.'/config/database.php';
    try {
        $stmt = $connection->prepare("SELECT DISTINCT CASE WHEN sender = ? THEN receiver ELSE sender END AS contact
                                     FROM messages
                                     WHERE sender = ? OR receiver = ?");
        $stmt->bind_param("iii", $personId, $personId, $personId);
        $stmt->execute();
        $result = $stmt->get_result();
        $contacts = [];
        
        while ($row = $result->fetch_assoc()) {
            $contacts[] = $row['contact'];
        }
        
        $stmt->close();
        $connection->close();
        
        return $contacts;
    } catch (Exception $e) {
        echo $e;
        return [];
    }
}

?>
