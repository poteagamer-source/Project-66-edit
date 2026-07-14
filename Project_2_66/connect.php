<?php
$servername = "tokaido.proxy.rlwy.net";
$username   = "root";
$password   = "INCvsHZROoexQuEMKmTnOwaxHlSDDLSe";
$dbname     = "railway";
$port       = 42708;

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname,
    $port
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>