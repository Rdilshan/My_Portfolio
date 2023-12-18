<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["Title"];
    $Description = $_POST["Description"];
    $Duration = $_POST["Duration"];
    $id =$_POST['Id'];
    
    $sql = "UPDATE WorkExperience SET Title = ?, Duration = ?, descriptions = ? WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $Description, $Duration, $id);

    if ($stmt->execute()) {
        // Update successful
        header("Location: ../../workexperience.php");
        exit();
    } else {
        header("Location: ../../workexperience.php");
        exit();
    }

}
?>

