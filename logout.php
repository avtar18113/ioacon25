<?php
session_start();
include_once './config.php';
// Logout logic

    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header('Location: ./login'); // Redirect to login page
    exit();

?>