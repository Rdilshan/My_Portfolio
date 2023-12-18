<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $title = $_POST["title"];
    $htmlContent = $_POST["htmlContent"];
    $currentDate = date("Y-m-d H:i:s");


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

    $uploadDirectory = "../../../../Assets/blog/";
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
    


    $sql = "INSERT INTO MyBlog (Title, Description, picture, date)
    VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $title, $htmlContent, $profileimageNewName, $currentDate);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
        } else {
        echo "Error inserting record: " . $stmt->error;
    }

}
?>