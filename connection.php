<?php

    $sname= "localhost";
    $uname= "teztnet";
    $password = "R!tR7fT1I[c99m";
    $db_name = "teztnet_blogcraftedDB";
    
    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    
    if (!$conn) {
    	echo "Connection failed!";
    }

?>