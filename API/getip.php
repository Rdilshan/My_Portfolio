<?php

    function getRealClientIP() {
        $ip = $_SERVER['REMOTE_ADDR'];
        
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        
        return $ip;
    }

    $clientIP = getRealClientIP();
    $sql = "SELECT IpAddress FROM Views WHERE IpAddress = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $clientIP);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
    } else {
        $sql_insert = "INSERT INTO Views (IpAddress) VALUES (?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("s", $clientIP);

        if ($stmt_insert->execute()) {
        } else {
        }

        $stmt_insert->close();
    }

?>