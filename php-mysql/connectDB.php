<?php

require_once "config.inc.php";

$servername = getenv('__DB_HOST__');
$username = getenv('__DB_USER__');
$password = getenv('__DB_PASSWORD__');
$database = getenv('__DB_NAME__');

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
