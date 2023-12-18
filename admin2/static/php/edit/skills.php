<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];
    $color = $_POST["color"];
    $percentage = $_POST["pesentage"];
    $id =$_POST['id'];
    
    $sql = "UPDATE Skill SET name = ?, color = ?, percentage = ? WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $color, $percentage, $id);

    if ($stmt->execute()) {
        // Update successful
        header("Location: ../../skills.php");
        exit();
    } else {
        header("Location: ../../skills.php");
        exit();
    }

}
?>

