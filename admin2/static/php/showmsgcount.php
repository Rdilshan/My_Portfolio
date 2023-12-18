<?php
    require_once '../../connection.php';
    $sql = "SELECT * FROM `Admin_chat` WHERE Looking = 0";
    $result = $conn->query($sql);
    $rowCount = $result->num_rows;
    echo  $rowCount;
?>