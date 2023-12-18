<?php
// Require the connection.php file to establish the database connection
require_once '../../../../connection.php';

// Check if the script is receiving data through an HTTP POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values sent via POST and store them in variables
    $Name = $_POST["Name"];


 $sql = "INSERT INTO CreateProduct (Name) VALUES (?)";
 $stmt = $conn->prepare($sql);

 // Bind the variable to the placeholder in the prepared statement
 $stmt->bind_param("s", $Name);

 // Execute the prepared statement
 if ($stmt->execute()) {
     // If the insertion is successful, redirect to countshow.php
     header("Location: ../../cando.php");
     exit();
 } else {
     // If there is an error during insertion, display the error message and redirect to cando.php
     echo "Error inserting data: " . $stmt->error;
     header("Location: ../../cando.php");
     exit();
 }


}
?>

