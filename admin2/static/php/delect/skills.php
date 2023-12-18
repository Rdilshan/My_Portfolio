<?php
require_once '../../../../connection.php';


   $delete_id = $_GET["delete_id"];

    // Prepare and execute the SQL DELETE statement using a prepared statement
    $sql = "DELETE FROM Skill WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
      
        header("Location: ../../skills.php"); 
        
    } else {
        header("Location: ../../skills.php"); 
    }
    
    $stmt->close();
    exit();



?>