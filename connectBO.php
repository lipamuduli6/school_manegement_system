<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crud";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

function handleDatabaseError($errorMsg) {
    echo "Database Error: " . $errorMsg;
    die();
}
?>


