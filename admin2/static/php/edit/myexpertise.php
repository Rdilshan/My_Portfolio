<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["Title"];
    $Description = $_POST["Description"];

    $id =$_POST['id'];


    $sql = "UPDATE Experience SET Title = ?, Short_desc = ? WHERE Id = ?";
    $stmt = $conn->prepare($sql);

    // Bind the variables to the placeholders in the prepared statement
    $stmt->bind_param("ssi", $Name, $Description, $id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // If the update is successful, redirect to countshow.php
        header("Location: ../../myexpertise.php");
        exit();
    } else {
        // If there is an error during the update, redirect to myexpertise.php
        header("Location: ../../myexpertise.php");
        exit();
    }

}

?>
