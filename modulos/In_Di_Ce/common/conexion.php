<?php

$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "bd_test";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Error de conexion: " . mysqli_connect_error());
}
?>