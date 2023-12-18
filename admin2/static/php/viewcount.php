
<?php
    require_once '../../connection.php';

    $sql = "SELECT * FROM `Views`";
    $result = $conn->query($sql);

    $num_columns = $result->num_rows;
    echo $num_columns;
    
?>