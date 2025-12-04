<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/components/auth.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/controllers/usuarioController.php";

    $id = $_SESSION['usuario_id'];
    $user = new UsuarioController();
    $resposta = $user->checkToken($id);
    if($resposta->getToken() !== "1"){
        header("location: ingresso.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/tailwind.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/fonts.php"; ?>
</head>

<body class="overflow-x-hidden w-screen min-h-screen flex flex-col">
    <header class="p-1 bg-(--primary-blue) text-(--light) text-lg gfs">
        <ul>
            <nav class="flex justify-around items-center">
                <img src="\Memorilla\src\assets\img\logo.png" alt="" class="w-20" draggable="false">
                <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/produtos.php">Produtos</a></li>
                <li><a href="../pages/ingresso.php">Ingressos</a></li>
                <li><a href="../pages/carrinho.php">Carrinho</a></li>
                <li><a href="../pages/mapa.php">Mapa</a></li>
                <li><a href="/Memorilla/src/components/logout.php?confirm=1"><i class="fa-solid fa-door-open text-2xl"></i></a></li>
            </nav>
        </ul>
    </header>
    <main class="bg-(--primary-blue) flex flex-col items-center flex-grow">
        <div>
            <h1 class="jim text-(--light) text-center p-15 text-5xl w-7xl border-solid border-(--secondary-blue) border-b">Personagens</h1>
            <section class="jim text-(--light)">
                <div class="flex justify-around mt-4">
                    <a href="../pages/personagens/personagem1.php">
                        <div class="flex flex-col items-center">
                            <img class="size-[12rem]" src="../assets/img/Halloween Coffin.png" alt="Imagem do personagem">
                            <h2 class="text-3xl mt-[2rem]">Luther Hargreeves</h2>
                        </div>
                    </a>
                    <a href="../pages/personagens/personagem2.php">
                        <div class="flex flex-col items-center">
                            <img class="size-[12rem]" src="../assets/img/Halloween Coffin.png" alt="Imagem do personagem">
                            <h2 class="text-3xl mt-[2rem]">Diego Hargreeves</h2>
                        </div>
                    </a>
                    </div>
                    <div class="flex justify-around mt-4">
                        <a href="../pages/personagens/personagem3.php">
                            <div class="flex flex-col items-center">
                                <img class="size-[12rem]" src="../assets/img/Halloween Coffin.png" alt="Imagem do personagem">
                                <h2 class="text-3xl mt-[2rem]">Allison Hargreeves</h2>
                            </div>
                        </a>
                        <a href="../pages/personagens/personagem4.php">
                            <div class="flex flex-col items-center">
                                <img class="size-[12rem]" src="../assets/img/Halloween Coffin.png" alt="Imagem do personagem">
                                <h2 class="text-3xl mt-[2rem]">Klaus Hargreeves</h2>
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-around mt-4">
                        <a href="../pages/personagens/personagem5.php">
                            <div class="flex flex-col items-center">
                                <img class="size-[12rem]" src="../assets/img/Halloween Coffin.png" alt="Imagem do personagem">
                                <h2 class="text-3xl mt-[2rem]">Five</h2>
                            </div>
                        </a>
                        <a href="../pages/personagens/personagem6.php">
                            <div class="flex flex-col items-center">
                                <img class="size-[12rem]" src="../assets/img/Halloween Coffin.png" alt="Imagem do personagem">
                                <h2 class="text-3xl mt-[2rem]">Ben Hargreeves</h2>
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-around mt-[4rem] mb-[6rem]">
                        <a href="../pages/personagens/personagem7.php">
                            <div class="flex flex-col items-center justify-center">
                                <img class="size-[12rem]" src="../assets/img/Halloween Coffin.png" alt="Imagem do personagem">
                                <h2 class="text-3xl mt-[2rem]">Victor Hargreeves</h2>
                            </div>
                        </a>
                    </div>
            </section>
        </div>
    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/footer.php" ?>
</body>
</html>