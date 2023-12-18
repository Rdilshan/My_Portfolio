<?php
require_once '../../../../connection.php';


   $delete_id = $_GET["delete_id"];

    // Prepare and execute the SQL DELETE statement using a prepared statement
    $sql = "DELETE FROM WorkExperience WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
      
        header("Location: ../../workexperience.php"); 
        
    } else {
        header("Location: ../../workexperience.php"); 
    }
    
    $stmt->close();
    exit();



?>