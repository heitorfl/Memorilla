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
                <li><a href="../pages/produto.php">Produtos</a></li>
                <li><a href="../pages/ingresso.php">Ingressos</a></li>
                <li><a href="../pages/personagens.php">Personagens</a></li>
                <li><a href="../pages/mapa.php">Mapa</a></li>
                <li><i class="fa-solid fa-door-open text-2xl"></i></li>
            </nav>
        </ul>
    </header>
    <main class="bg-(--primary-blue) flex flex-col items-center flex-grow">
        <h1 class="jim text-(--light) text-center p-15 text-6xl w-7xl border-solid border-(--secondary-blue) border-b">Carrinho</h1>
        <div>
            <section class="m-25 flex text-(--light) border-solid border-(--secondary-blue) border-[2px] rounded-3xl">
                <figure>
                    <img src="../assets/img/foto-teste-produtos.jpg" alt="Imagem do produto" class="min-h-[100%] rounded-3xl">
                </figure>
                <div class="m-8">
                    <h2 class="jim text-4xl">Nome produto</h2>
                    <p class="gfs text-xl w-6xl text-justify m-7">Organizamos informações em um memorial único, garantindo clareza e profundidade. Vamos além dos fatos, explorando as causas, consequências e as pessoas por trás dos eventos. Garantimos que este acervo permaneça acessível para as gerações futuras, imune à erosão do tempo.</p>
                    <!--APENAS ESSES TRECHO DE CÓDIGO QUE ESTÀ COM O JAVA SCRIPT PARA QUE FUNCIONE OS BOTÕES DE SELECIONAR A QUANTIDADE-->
                    <div class="flex flex justify-between items-center">
                        <div class="botoes flex">
                            <button type="button"><i class="rmv fa-solid fa-minus text-(--gray) text-[2rem]"></i></button>
                            <input type="number" name="quantidade" value="0" min="0" max="99" class="quantidade gfs w-18 text-center text-3xl" readonly>
                            <button type="button"><i class="add fa-solid fa-plus text-(--gray) text-[2rem]"></i></button>
                        </div>
                        <p class="text-4xl jim">R$999,99</p>
                    </div>
                    <!--AQUI TERMINA ESSA PARTE DO CÓDIGO-->
                </div>
            </section>
            <section class="m-25 flex text-(--light) border-solid border-(--secondary-blue) border-[2px] rounded-3xl">
                <figure>
                    <img src="../assets/img/foto-teste-produtos.jpg" alt="Imagem do produto" class="min-h-[100%] rounded-3xl">
                </figure>
                <div class="m-8">
                    <h2 class="jim text-4xl">Nome produto</h2>
                    <p class="gfs text-xl w-6xl text-justify m-7">Organizamos informações em um memorial único, garantindo clareza e profundidade. Vamos além dos fatos, explorando as causas, consequências e as pessoas por trás dos eventos. Garantimos que este acervo permaneça acessível para as gerações futuras, imune à erosão do tempo.</p>
                    <!--APENAS ESSES TRECHO DE CÓDIGO QUE ESTÀ COM O JAVA SCRIPT PARA QUE FUNCIONE OS BOTÕES DE SELECIONAR A QUANTIDADE-->
                    <div class="flex flex justify-between items-center">
                        <div class="botoes flex">
                            <button type="button"><i class="rmv fa-solid fa-minus text-(--gray) text-[2rem]"></i></button>
                            <input type="number" name="quantidade" value="0" min="0" max="99" class="quantidade gfs w-18 text-center text-3xl" readonly>
                            <button type="button"><i class="add fa-solid fa-plus text-(--gray) text-[2rem]"></i></button>
                        </div>
                        <p class="text-4xl jim">R$999,99</p>
                    </div>
                    <!--AQUI TERMINA ESSA PARTE DO CÓDIGO-->
                </div>
            </section>
            <div class="text-right w-full m-5">
                <button class="rounded-3xl jim bg-(--secondary-blue) text-(--primary-blue) w-[14rem] h-[5rem] text-4xl"><i class="fa-solid fa-hand-holding-dollar text-(--primary-blue)"></i> Pagar</button>
            </div>
        </div>

    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/footer.php" ?>
</body>

<script src="../assets/js/carrinho.js"></script>

</html>