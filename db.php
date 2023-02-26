<?php
$servername = "localhost";
$username = "time_table";
$password = "time_table12345";
$dbname = "time_table";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
