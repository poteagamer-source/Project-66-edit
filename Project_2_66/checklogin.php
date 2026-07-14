<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once __DIR__ . '/connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email  = trim($_POST['email'] ?? '');
$idCard = trim($_POST['id_card'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^\d{13}$/', $idCard)) {
    header('Location: login.php?error=invalid_credentials');
    exit;
}

$stmt = $conn->prepare('SELECT ID_User, firstname, lastname, email, userrole FROM tb_register WHERE email = ? AND id_card = ? LIMIT 1');
$stmt->bind_param('ss', $email, $idCard);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$user) {
    header('Location: login.php?error=invalid_credentials');
    exit;
}

session_regenerate_id(true);
$_SESSION['userid']    = $user['ID_User'];
$_SESSION['username']  = $user['email'];
$_SESSION['firstname'] = $user['firstname'];
$_SESSION['lastname']  = $user['lastname'];
$_SESSION['userrole']  = $user['userrole'] ?: 'member';

header('Location: index.php');
exit;
