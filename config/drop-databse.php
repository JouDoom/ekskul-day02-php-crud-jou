<?php

    // integrasi koneksi
    require_once('connection.php');

    // Create database
    $sql = "DROP DATABASE sagu_foundation";
    if ($conn->query($sql) === TRUE) {
        echo "Database dropped successfully";
    } else {
        echo "Error dropped database: " . $conn->error;
    }


    
