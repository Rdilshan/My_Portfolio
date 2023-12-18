<?php
// your_php_file.php
require_once '../../../connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["Name"];
    $country = $_POST["Country"];
    $role = $_POST["Role"];
    $aboutme = $_POST["aboutme"];
    $descskill = $_POST["descskill"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $telephone = $_POST["telephone"];
    $profileimage1 = $_FILES["profileimage"]["name"]; // Assuming it's a file upload
    $background1image2 = $_FILES["background1image"]["name"]; // Assuming it's a file upload
    $background2image3 = $_FILES["background2image"]["name"]; // Assuming it's a file upload
    $pdfUpload1 = $_FILES["pdfUpload"]["name"]; // Assuming it's a file upload

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


        // Temporary file paths
    $profileimageTmp = $_FILES["profileimage"]["tmp_name"];
    $background1imageTmp = $_FILES["background1image"]["tmp_name"];
    $background2imageTmp = $_FILES["background2image"]["tmp_name"];
    $pdfUploadTmp = $_FILES["pdfUpload"]["tmp_name"];


    // Upload directory
    $uploadDirectory = "../../../Assets/profile/";
    $uploadDirectory2 = "../../../Assets/profile/cv/";


    // Move uploaded files to the "upload" folder with unique names
    $profileimageNewName = generateUniqueFileName("profileimage");
    $background1imageNewName = generateUniqueFileName("background1image");
    $background2imageNewName = generateUniqueFileName("background2image");
    $pdfUploadNewName = generateUniqueFileName("pdfUpload");


    // Array to store error messages
    $errors = [];

    // Move files and handle errors
    if (move_uploaded_file($profileimageTmp, $uploadDirectory . $profileimageNewName)) {
        // echo '<p>Profile image upload was successful!</p>';
    } else {
        // $errors[] = 'Profile image upload failed: ' . $_FILES["profileimage"]["error"];
    }

    if (move_uploaded_file($background1imageTmp, $uploadDirectory . $background1imageNewName)) {
        // echo '<p>Background 1 image upload was successful!</p>';
    } else {
        // $errors[] = 'Background 1 image upload failed: ' . $_FILES["background1image"]["error"];
    }

    if (move_uploaded_file($background2imageTmp, $uploadDirectory . $background2imageNewName)) {
        // echo '<p>Background 2 image upload was successful!</p>';
    } else {
        // $errors[] = 'Background 2 image upload failed: ' . $_FILES["background2image"]["error"];
    }

    if (move_uploaded_file($pdfUploadTmp, $uploadDirectory2 . $pdfUpload1)) {
        // echo '<p>cv  upload was successful!</p>';
    } else {
        // $errors[] = 'Background 2 image upload failed: ' . $_FILES["pdfUpload"]["error"];
    }


    // Display error messages, if any
    if (!empty($errors)) {
        // echo '<p>File upload(s) failed. Please try again.</p>';
        foreach ($errors as $error) {
            // echo '<p>' . $error . '</p>';
        }
    }


    $sql = "UPDATE `Detila`
    SET
        `Name` = '$name',
        `Role` = '$role',
        `AboutMe` = '$aboutme',
        `Country` = '$country',
        ";

    if ($profileimageNewName != "") {
        $sql .= "`Profile_Pic` = '$profileimageNewName', ";
    }

    if ($background1imageNewName != "") {
        $sql .= "`Bg_picture1` = '$background1imageNewName', ";
    }

    if ($background2imageNewName != "") {
        $sql .= "`Bg_picture2` = '$background2imageNewName', ";
    }

    $sql .= "
            `Skill_desc` = '$descskill',
            `email` = '$email',
            `address` = '$address',
            `telephone` = '$telephone'";

    if ($pdfUploadNewName != "") {
        $sql .= ", `Cv` = '$pdfUploadNewName'";
    }

    $sql .= " WHERE `Id` = '1';";


    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }


}
?>
