<?php
// Start the session
session_start();

// Retrieve data from the session
if (isset($_SESSION['username']) AND isset($_SESSION['user_id'])) {
    
    $username = $_SESSION['username'];
    $user_id = $_SESSION['user_id'];

    // Prepare the SQL query with placeholders
    $sql = "SELECT * FROM Admin_login WHERE Email = ? AND Password = ?";
    $stmt = $conn->prepare($sql);

    // Bind the parameters to the placeholders
    $stmt->bind_param("ss", $username, $user_id);

    // Execute the prepared statement
    $stmt->execute();

    
    // Check if the query was successful and fetch the result
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // User with the provided email and password exists in the database

    } else {
        // User not found, redirect to the index.php (login) page
        header("Location: ../index.html");
        exit();
    }

} else {
    header("Location: ../index.html");
    exit(); 
}
?>
