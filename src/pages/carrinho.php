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
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/tailwind.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/fonts.php"; ?>
</head>

<body class="overflow-x-hidden w-screen">
    <header class="p-1 bg-(--primary-blue) text-(--light) text-lg gfs">
        <ul>
            <nav class="flex justify-around items-center">
                <img src="\Memorilla\src\assets\img\logo.png" alt="" class="w-20" draggable="false"
                    <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/ingresso.php">Ingressos</a></li>
                <li><a href="">Carrinho</a></li>
                <li><a href="">Personagem</a></li>
                <li><a href="">Mapa</a></li>
                <li><i class="fa-solid fa-door-open text-2xl"></i></li>
            </nav>
        </ul>
    </header>
    <main class="bg-(--primary-blue) flex flex-col items-center justify-center">

    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/footer.php" ?>
</body>

</html>