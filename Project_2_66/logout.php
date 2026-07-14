<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php 

   session_unset();
    header('location: index.php');

