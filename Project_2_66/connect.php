<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
//echo "Connected successfully";
//header("refresh:1 url=http://localhost/Project_2_66/login.php");
?>
