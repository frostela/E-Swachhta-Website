<?php

    session_start();

    // Database credentials

    $servername = "sql100.infinityfree.com";

    $username = "if0_37269996"; 

    $password = "Nk1FujxALUi4Yj"; 

    $dbname = "if0_37269996_e_swachhta_db"; 



    $conn = new mysqli($servername, $username, $password, $dbname);



    if ($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);

    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['email'];

        $password = $_POST['password'];



        $result = mysqli_query($conn, "SELECT `userEmail`, `userPassword` FROM `users` WHERE `userEmail` = '$email' AND `userPassword` = '$password'");

        

        if ($result && $result->num_rows > 0) {

            $_SESSION['email'] = $email;

            header("Location: ../index.php");

            exit();

        } else {

            echo("Incorrect login credentials, kindly check!!");

        }

    } 



    $conn->close();

?>