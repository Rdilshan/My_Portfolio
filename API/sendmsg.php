<?php

require_once '../connection.php';
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['msg'];

// Process the data or perform any necessary actions
// ...
$sql = "INSERT INTO Admin_chat (`Name`, `email`, `Subject`, `Message`, `Date`, `Looking`)
        VALUES ('$name', '$email', '$subject', '$message', NOW(), '0')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    // Insertion successful
    echo "1";
} else {
    // Insertion failed
    echo "0";
}

?>
