<?php
$servername = "localhost";
$username = "dbusr21360859130";
$password = "iBYpXYUIt2cx";
$dbname = "dbstorage21360859130";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>