<?php
if (ob_get_level() === 0) {
    ob_start();
}
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<?php
if (session_status() === PHP_SESSION_NONE) {
}
?>
<?php 

   session_unset();
    header('location: index.php');

