<?php 
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit();
    }
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 900)) {
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }
    $_SESSION['last_activity'] = time();
?>