<?php

    // integrasi koneksi
    require_once('connection.php');

    // Create database
    $sql = "CREATE DATABASE sagu_foundation";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

