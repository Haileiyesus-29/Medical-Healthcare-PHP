<?php
function fetchAllDoctors()
{
    try {
      $path = dirname(__DIR__);
      include $path."/config/database.php";
        
        $stmt = $connection->prepare("SELECT * FROM users WHERE account = 'doctor'");
        $stmt->execute();
        
        $result = $stmt->get_result();
        $doctors = $result->fetch_all(MYSQLI_ASSOC);
        
        $stmt->close();
        $connection->close();
        
        return $doctors;
    } catch (Exception $e) {
        echo $e;
        return false;
    }
}
