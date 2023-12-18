<?php
    $checkboxValue = $_POST['checkboxValue'];
    require_once '../../../connection.php';

    $sql = "UPDATE `Detila` SET `hirebanner` = $checkboxValue";
    $result = $conn->query($sql);

    if ($result) {
        // Update successful
        echo "1";
    } else {
        echo "0";
    }

?>