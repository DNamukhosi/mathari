<?php
$servername = "localhost";
$dbaname = "mathari_hospital";
$username = "dama";
$password = "root";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbaname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
