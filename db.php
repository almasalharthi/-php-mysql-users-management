<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "sql200.infinityfree.com";
$username = "if0_42596040";
$password = "sB2e5KOZPNDBdRJ";
$database = "if0_42596040_mydataset";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>
