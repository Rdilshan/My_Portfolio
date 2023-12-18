<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["Name"];
    $count = $_POST["count"];

    $id =$_POST['id'];


    $sql = "UPDATE Project_count SET name = ?, count = ? WHERE Id = ?";
    $stmt = $conn->prepare($sql);

    // Bind the variables to the placeholders in the prepared statement
    $stmt->bind_param("ssi", $Name, $count, $id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // If the update is successful, redirect to countshow.php
        header("Location: ../../countshow.php");
        exit();
    } else {
        // If there is an error during the update, redirect to countshow.php
        header("Location: ../../countshow.php");
        exit();
    }

}

?>
