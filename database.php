<?php
    $host = 'localhost';
    $username = 'btech';
    $password = 'amilas/308';
    $database  = 'rest';
    $conn = new mysqli($host, $username, $password, $database);
    if($conn->connect_error){
        echo "Connection error: " . $conn->connection_error;
    }
    return $conn;


?>