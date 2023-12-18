<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];
    $color = $_POST["color"];
    $percentage = $_POST["pesentage"];
    
    $sql = "INSERT INTO Skill (name, color, percentage) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $color, $percentage);
    if ($stmt->execute()) {
        header("Location: ../../skills.php");
        exit(); 
    } else {
        echo "Error inserting data: " . $conn->error;
        header("Location: ../../skills.php");
        exit(); 
    }

}
?>
