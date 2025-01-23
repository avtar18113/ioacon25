<?php
session_start();
date_default_timezone_set("Asia/Calcutta");
$dt_tm = date("l jS \of F Y h:i:s A");

// Check if the website is running on localhost
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_ADDR'] == 'https://ioacon2025guwahati.com') {
    $host = "localhost";
    $db = "ioacon24";
    $username = "root";
    $password = "";
} else {
    // Assuming it's a live server
    $host = "localhost";
    $db = "ioacon25";
    $username = "ioacon25";
    $password = "PYUC75iVQZ@X";
}

// Establish a connection to the database
$conn = mysqli_connect($host, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sitepath='https://ioacon2025guwahati.com';
$regpath='https://concepttc.com/registration/ioacon25/ioacon25';
?>