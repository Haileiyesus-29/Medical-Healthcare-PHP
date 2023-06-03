<?php

$host = 'localhost'; 
$database = 'mhc';
$username = 'root';
$password = '';

// Establish a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>