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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT']. "Memorilla/src/components/tailwind.php";
        include_once $_SERVER['DOCUMENT_ROOT']. "Memorilla/src/components/fonts.php";
    ?>
</head>
<body>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT']. "Memorilla/src/components/footer.php";
    ?>
</body>
</html>