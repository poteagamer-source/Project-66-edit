<?php
$link = mysqli_connect("localhost", "root", "65309010016", "db_exam");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($link, "SELECT VERSION()");
$row = mysqli_fetch_array($result);

echo "MariaDB version: " . $row[0];

mysqli_close($link);
?>
