<?php
$localhost = "localhost";
$username = "root"; // determine name for DB
$password = ""; //determine password
$dbname = "project";
// Create connection
$conn = mysqli_connect($localhost, $username, $password,$dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error()); }
echo "Connected successfully";
?>
