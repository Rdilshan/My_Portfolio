<?php
require_once '../../../../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quillContent = $_POST['quill_content'];
    $inputValue = $_POST['input_value'];

    // Assuming $conn is your database connection variable
    $sql = "INSERT INTO Education (Title, descriptions) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Check if the statement was prepared successfully
    if (!$stmt) {
        echo "Error: " . $conn->error;
    } else {
        $stmt->bind_param("ss", $inputValue, $quillContent);
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Success";
        } else {
            echo "Success";
        }
        
        // Close the statement
        $stmt->close();
    }
    
    // Close the connection
    $conn->close();
}

?>
