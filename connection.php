<?php


$servername = "15.206.29.212";
$username = "cyberfes";
$password = "citcyberfest_2020_MCA";
$dbname = "cyberfes_cf1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>