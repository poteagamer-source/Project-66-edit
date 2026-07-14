<?php
if (ob_get_level() === 0) {
    ob_start();
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "65309010016";
$dbname = "db_exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//header("refresh:1 url=login.php");
?>
