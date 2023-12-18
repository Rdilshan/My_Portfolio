<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Title = $_POST["Title"];
    $Description = $_POST["Description"];
    $Duration = $_POST["Duration"];
    
    $sql = "INSERT INTO WorkExperience (Title, Duration, descriptions) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $Title, $Duration, $Description);
    if ($stmt->execute()) {
        header("Location: ../../workexperience.php");
        exit(); 
    } else {
        echo "Error inserting data: " . $conn->error;
        header("Location: ../../workexperience.php");
        exit(); 
    }

}

?>
