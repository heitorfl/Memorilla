<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/components/auth.php";    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="shortcut icon" href="/Memorilla/src/assets/img/logo.ico" type="image/x-icon">
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT']. "/Memorilla/src/components/tailwind.php";
        include_once $_SERVER['DOCUMENT_ROOT']. "/Memorilla/src/components/fonts.php";
    ?>
</head>
<body class="overflow-x-hidden w-screen">
    <header class="p-1 bg-(--primary-blue) text-(--light) text-lg gfs">
        <ul>
            <nav class="flex justify-around items-center">
               <img src="/Memorilla/src/assets/img/logo.png" alt="" class="w-20" draggable="false">
                <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="ingresso.php">Ingresso</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="personagens.php">Personagens</a></li>
                <li><a href="/Memorilla/src/components/logout.php?confirm=1"><i class="fa-solid fa-door-open text-2xl"></i></a></li>
            </nav>
        </ul>
    </header>
    <main class="bg-(--primary-blue) flex justify-center items-center">
        <section id="mapaContainer" class="m-5">
            <div class="mainTitle m-5 border-b-1 border-(--light) flex justify-center items-center">
                <h1 class="text-4xl text-(--light) jim p-5">Mapa</h1>
            </div>
            <div class="mapa flex justify-center items-center flex-col bg-(--secondary-blue) rounded-xl relative">
                <img src="/Memorilla/src/assets/img/mapa.png" alt="" class="" usemap="#mapaDeCliques">
                <map name="mapaDeCliques">
                    <area shape="circle" coords="200,150,100" alt="Região Circular" title="Memorial1" class="areaMapa cursor-pointer" onclick="showArea(0)">
                    <area shape="circle" coords="730,150,120" alt="Região Circular" title="Memorial2" class="areaMapa cursor-pointer" onclick="showArea(1)">
                    <area shape="circle" coords="400,360,110" alt="Região Circular" title="Loja" class="areaMapa cursor-pointer" onclick="showArea(2)">
                    <area shape="circle" coords="680,360,110" alt="Região Circular" title="Sala" class="areaMapa cursor-pointer" onclick="showArea(3)">
                </map>
            </div>
            <div class="legenda flex justify-center items-center flex-col m-10">
                <p id="caption" class="text-3xl text-(--light) jim m-5"></p>
                <img src="/Memorilla/src/assets/img/area0.png" alt="" id="imgArea" class="w-100 rounded-xl">
            </div>
        </section>
    </main>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT']. "/Memorilla/src/components/footer.php";
    ?>
    <script src="/Memorilla/src/assets/js/mapa.js"></script>
</body>
</html>