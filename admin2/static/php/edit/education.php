<?php

require_once '../../../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_value = $_POST["input_value"];
    $quill_content = $_POST["quill_content"];
    $id = $_POST["eduid"];
echo $input_value."  =";
echo $quill_content;




$sql = "UPDATE Education SET Title = ?, descriptions = ? WHERE Id = ?";
$stmt = $conn->prepare($sql);

// Bind the variables to the placeholders in the SQL query
// Assuming $input_value is a string, $quill_content is a string, and $id is an integer
$stmt->bind_param("ssi", $input_value, $quill_content, $id);

// Execute the prepared statement and check for errors
if ($stmt->execute()) {
    // Update successful
    echo "Success";
} else {
    // Update failed
    echo "Failure: " . $stmt->error; // This will show the error message if execution fails
}

}
?>

