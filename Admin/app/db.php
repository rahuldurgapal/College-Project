<?php
    $host="85.10.205.173";

    $username="rahul_0008";
    
    $pass="Explorer@321";
    
    $db="explorer_404";
    
    $connection = mysqli_connect($host, $username, $pass, $db);
    if (!$connection) {
        echo "Failed to connect to database";
        exit;
    }

    else{
        echo "connected";
    }

?>
