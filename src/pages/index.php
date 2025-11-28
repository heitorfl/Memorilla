
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
                <li><a href="">Produtos</a></li>
                <li><a href="../pages/Ingresso.php">Ingresso</a></li>
                <li><a href="">Carrinho</a></li>
                <li><a href="">Personagem</a></li>
                <li><a href="">Mapa</a></li>
                <li><i class="fa-solid fa-door-open text-2xl"></i></li>
            </nav>
        </ul>
    </header>
    <main>
        <div id="Inicial" class="bg-[url(/Memorilla/src/assets/img/mansão.png)] h-lvh bg-no-repeat bg-cover flex text-center justify-center items-center">
            <div class="mainTitle text-(--light) bg-radial from-(--teste) from-60% to-transparent to-70% p-15">
                <h1 class="text-7xl jacquard">Memorilla: O legado está vivo</h1>
                <h3 class="jim text-4xl">O apocalipse não foi um evento, foi uma família</h3>
            </div>
        </div>
        <div id="Carrossel" class="flex justify-center items-center p-10 h-svh">
            <button id="back"></button>
            <div class="carousel flex justify-center items-center w-[100vw]">
                    <div class="slides flex items-center justify-center w-[500vw] overflow-x-hidden">
                        <div class="slide active m-50">
                            <img src="\Memorilla\src\assets\img\carrossel1.png" alt="">
                        </div>
                        <div class="slide m-50">
                            <img src="\Memorilla\src\assets\img\carrossel1.png" alt="">
                        </div>
                        <div class="slide m-50">
                            <img src="\Memorilla\src\assets\img\carrossel1.png" alt="">
                        </div>

                    </div>
                    <div class="caption" id="c1">

                    </div>
                
                    <div class="caption" id="c2">

                    </div>
                    
                    <div class="caption" id="c3">

                    </div>
            </div>
            <button id="next">

            </button>
        </div>
        <div id="About">
            <div id="quemSomos">

            </div>
            <div id="oqueFazemos">

            </div>
            <a href="ingresso.php">Conhecer história</a>
        </div>
    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/footer.php"?> 
</body>
</html>
