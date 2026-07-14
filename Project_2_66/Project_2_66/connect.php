<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = getenv('DB_HOST') ?: 'tokaido.proxy.rlwy.net';
$username   = getenv('DB_USER') ?: 'root';
$password   = getenv('DB_PASSWORD') ?: '';
$dbname     = getenv('DB_NAME') ?: 'railway';
$port       = (int) (getenv('DB_PORT') ?: 42708);

if ($password === '') {
    die('Database configuration error: DB_PASSWORD is not set in Render Environment Variables.');
}

try {
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    error_log('Database connection failed: ' . $e->getMessage());
    die('ไม่สามารถเชื่อมต่อฐานข้อมูลได้ กรุณาตรวจสอบ Environment Variables บน Render');
}
