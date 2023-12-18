<?php
    require_once '../../connection.php';

    $sql = "SELECT hirebanner FROM `Detila`";
    $result = $conn->query($sql);
    $hirebannerValue;
    
    if ($result) {

        if ($result->num_rows > 0) {    
            $row = $result->fetch_assoc();
            $hirebannerValue = $row['hirebanner'];

        }
    } 
?>
