<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
if (!$conn) {
    echo "Connected successfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>
