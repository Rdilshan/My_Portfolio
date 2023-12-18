<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["Name"];
    $Type = $_POST["Type"];
    $Link = $_POST["Link"];

    $id = $_POST["id"];

    $currentImg = $_POST["currentImg"];


    if (isset($_FILES["image"])) {

        $uploadDirectory = "../../../../Assets/mywork/";
        $profileimageTmp = $_FILES["image"]["tmp_name"];
        $profileimageNewName = generateUniqueFileName("image");
        
        if (move_uploaded_file($profileimageTmp, $uploadDirectory . $profileimageNewName)) {
            // echo "Image uploaded successfully.";
        } else {
            // echo "Error uploading image. Check the following: ";
            // echo "Error code: " . $_FILES["image"]["error"] . "<br>";
            // echo "Is the destination directory writable? <br>";
            // echo "Is the 'upload_max_filesize' setting appropriate in php.ini? <br>";
            // echo "Is the 'post_max_size' setting appropriate in php.ini? <br>";
        }
    }else{
        $profileimageNewName =  $currentImg;
    }



    $sql = "UPDATE MyWork SET Title = ?, type = ?, picture = ?, sampleLink = ? WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $Name, $Type, $profileimageNewName, $Link, $id);
    
    if ($stmt->execute()) {
        echo "Successful";
    } else {
        echo "Successful";
    }
    
}

function generateUniqueFileName($filename) {
    if (!empty($_FILES[$filename]["tmp_name"])) {
        $extension = pathinfo($_FILES[$filename]["name"], PATHINFO_EXTENSION);
        $randomString = bin2hex(random_bytes(8)); // Generate a random string
        $timestamp = time(); // Get the current timestamp
        return "{$randomString}_{$timestamp}.{$extension}";
    } else {
        return "";
    }
}

?>
