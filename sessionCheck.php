<?php
session_start();

function checkSession() {
    // Check if the user is logged in by checking if the session variable 'email' is set
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
        // Redirect to login page
        header("Location: ../login");
        exit();
    }
}
?>