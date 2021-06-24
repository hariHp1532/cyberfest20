<?php

$servername = "localhost";
$username = "cyberfes";
$password = "citcyberfest_2020_MCA";
$dbname = "cyberfes_cf1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>