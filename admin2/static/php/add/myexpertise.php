<?php
// Require the connection.php file to establish the database connection
require_once '../../../../connection.php';

// Check if the script is receiving data through an HTTP POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values sent via POST and store them in variables
    $Name = $_POST["Title"];
    $Description = $_POST["Description"];

    $sql = "INSERT INTO Experience (Title, Short_desc) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind the variables to the placeholders in the prepared statement
    $stmt->bind_param("ss", $Name, $Description);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // If the insertion is successful, redirect to countshow.php
        header("Location: ../../myexpertise.php");
        exit();
    } else {
        // If there is an error during insertion, display the error message and redirect to myexpertise.php
        echo "Error inserting data: " . $conn->error;
        header("Location: ../../myexpertise.php");
        exit();
    }

}
?>
