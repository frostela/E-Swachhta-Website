<?php
    // Database credentials
    $servername = "sql100.infinityfree.com";
    $username = "if0_37269996"; 
    $password = "Nk1FujxALUi4Yj"; 
    $dbname = "if0_37269996_e_swachhta_db"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        // Log error instead of displaying to users for security reasons
        error_log("Connection failed: " . $conn->connect_error);
        die("Connection to database failed, please try again later.");
    } else {
        error_log("Connected successfully");
    }
?>


