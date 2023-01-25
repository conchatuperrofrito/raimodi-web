<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "student";
// Create connection
$db_con = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$db_con) {
    die("Connection failed: " . mysqli_connect_error());
}
