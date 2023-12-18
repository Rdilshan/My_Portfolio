<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $Name = $_POST["Name"];
    $Type = $_POST["Type"];
    $Link = $_POST["Link"];

    // $currentDate = date("Y-m-d H:i:s");


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
    


    $sql = "INSERT INTO MyWork (Title, type, picture, sampleLink)
    VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $Name, $Type, $profileimageNewName, $Link);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
        } else {
        echo "Error inserting record: " . $stmt->error;
    }

}


?>

