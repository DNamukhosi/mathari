<?php
$servername = "localhost";
$dbaname = "mathari_hospital";
$username = "mathari";
$password = "12345";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbaname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
