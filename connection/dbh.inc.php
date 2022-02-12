
<?php

$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = 'track';

$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
