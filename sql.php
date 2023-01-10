<?php
    $server = "localhost";
    $user = "root";
    $dbname = "adherent";
// Create connection
    $conn = new mysqli($server, $user,$dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
?>