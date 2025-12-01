<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/components/auth.php"; 
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
                <img src="\Memorilla\src\assets\img\logo.png" alt="" class="w-20" draggable="false"
                    <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/produtos.php">Produtos</a></li>
                <li><a href="../pages/carrinho.php">Carrinho</a></li>
                <li><a href="../pages/personagens.php">Personagem</a></li>
                <li><a href="../pages/mapa.php">Mapa</a></li>
                <li><i class="fa-solid fa-door-open text-2xl"></i></li>
            </nav>
        </ul>
    </header>
    <main class="bg-(--primary-blue) flex flex-col items-center flex-grow">
        <section class="text-(--light) text-center p-25 w-7xl border-solid border-(--secondary-blue) border-b">
            <h1 class="jim text-6xl pb-20">O que são os ingressos?</h1>
            <p class="text-justify gfs text-xl">Aqui você pode comprar os ingressos para visitar o museu físico e, uma novidade que ninguém nunca antes viu, comprar o ingresso para conhecer essa história sem sair de casa! Comprando o ingresso virtual, você tem acesso à parte de Personagens do site e pode desfrutar de todos os nossos dados!</p>
        </section>

        <section class="text-(--light) flex text-center">
            <div class="p-25 flex flex-col">
                <h2 class="jim text-5xl m-1">Presencial</h2>
                <div class="flex flex-col">
                    <i class="fa-solid fa-ticket text-(--secondary-blue) text-[9.5rem] m-5"></i>
                    <form action="carrinho.php" method="post">
                            <input type="hidden" name="produto_id" value="10">
                            <input type="hidden" name="quantidade" value="1">
                            <button type="submit" class="text-(--secondary-blue) jim text-4xl border-solid border-(--secondary-blue) border rounded-xl w-xs cursor-pointer">Comprar</button>
                        </button>
                    </form>
                </div>
            </div>

            <div class="p-25 flex flex-col text-center">
                <h2 class="jim text-5xl m-1">Virtual</h2>
                <div class="flex flex-col">
                    <i class="fa-solid fa-ticket text-(--secondary-blue) text-[9.5rem] m-5"></i>
                    <a href="/Memorilla/src/models/liberarAcesso.php"><button class="text-(--secondary-blue) jim text-4xl border-solid border-(--secondary-blue) border rounded-xl w-xs cursor-pointer">Comprar</button></a>  
                </div>
            </div>
        </section>

    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/footer.php" ?>
</body>

</html>