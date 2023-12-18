<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["Name"];
    $id =$_POST['id'];


    $sql = "UPDATE CreateProduct SET Name = ? WHERE Id = ?";
    $stmt = $conn->prepare($sql);

    // Bind the variables to the placeholders in the prepared statement
    $stmt->bind_param("si", $Name, $id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // If the update is successful, redirect to countshow.php
        header("Location: ../../cando.php");
        exit();
    } else {
        // If there is an error during the update, redirect to cando.php
        header("Location: ../../cando.php");
        exit();
    }

}
?>
