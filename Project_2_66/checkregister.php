<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once __DIR__ . '/connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['reg'])) {
    header('Location: register.php');
    exit;
}

$firstname = trim($_POST['firstname'] ?? '');
$lastname  = trim($_POST['lastname'] ?? '');
$birthdate = trim($_POST['birthdate'] ?? '');
$idCard    = trim($_POST['id_card'] ?? '');
$email     = trim($_POST['email'] ?? '');

if ($firstname === '' || $lastname === '' || $birthdate === '' || $idCard === '' || $email === '') {
    header('Location: register.php?error=missing_fields');
    exit;
}
if (!preg_match('/^\d{13}$/', $idCard)) {
    header('Location: register.php?error=invalid_id_card');
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: register.php?error=invalid_email');
    exit;
}

try {
    $check = $conn->prepare('SELECT ID_User FROM tb_register WHERE email = ? OR id_card = ? LIMIT 1');
    $check->bind_param('ss', $email, $idCard);
    $check->execute();
    if ($check->get_result()->fetch_assoc()) {
        $check->close();
        header('Location: register.php?error=already_exists');
        exit;
    }
    $check->close();

    $role = 'member';
    $stmt = $conn->prepare('INSERT INTO tb_register (firstname, lastname, birthdate, id_card, email, userrole) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->bind_param('ssssss', $firstname, $lastname, $birthdate, $idCard, $email, $role);
    $stmt->execute();
    $stmt->close();

    header('Location: login.php?registered=1');
    exit;
} catch (mysqli_sql_exception $e) {
    error_log('Registration failed: ' . $e->getMessage());
    header('Location: register.php?error=database');
    exit;
}
