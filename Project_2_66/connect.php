<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = getenv('DB_HOST');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASSWORD');
$dbname     = getenv('DB_NAME');
$port       = (int) (getenv('DB_PORT') ?: 3306);

if (!$servername || !$username || !$password || !$dbname) {
    http_response_code(500);
    exit('Database configuration error: please check DB_HOST, DB_USER, DB_PASSWORD and DB_NAME.');
}

try {
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    error_log('Database connection failed: ' . $e->getMessage());
    http_response_code(500);
    exit('ไม่สามารถเชื่อมต่อฐานข้อมูลได้ กรุณาตรวจสอบ Environment Variables บน Render');
}
