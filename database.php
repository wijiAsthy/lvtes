<?php
$hostname     = "localhost";
$username     = "wiji";
$password     = "";
$databasename = "pesan";
// Create connection
$connection = mysqli_connect($hostname, $username, $password,$databasename);
// Check connection
if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>