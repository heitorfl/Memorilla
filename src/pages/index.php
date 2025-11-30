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
    <link rel="stylesheet" href="/Memorilla/src/assets/css/inicial.css">
</head>
<body class="overflow-x-hidden w-screen">
    <header class="p-1 bg-(--primary-blue) text-(--light) text-lg gfs">
        <ul>
            <nav class="flex justify-around items-center">
               <img src="/Memorilla/src/assets/img/logo.png" alt="" class="w-20" draggable="false">
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="ingresso.php">Ingresso</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="personagens.php">Personagens</a></li>
                <li><a href="mapa.php">Mapa</a></li>
                <li><a href="/Memorilla/src/components/logout.php?confirm=1"><i class="fa-solid fa-door-open text-2xl"></i></a></li>
            </nav>
        </ul>
    </header>
    <main class="flex justify-center items-center flex-col w-screen bg-(--primary-blue)">
        <section id="Inicial" class="bg-[url(/Memorilla/src/assets/img/mansão.png)] h-lvh bg-no-repeat bg-cover flex text-center justify-center items-center w-screen">
            <div class="mainTitle text-(--light) bg-radial from-(--teste) from-60% to-transparent to-70% p-15">
                <h1 class="text-7xl jacquard">Memorilla: O legado está vivo</h1>
                <h3 class="jim text-4xl">O apocalipse não foi um evento, foi uma família</h3>
            </div>
        </section>
        <section id="carrossel" class="m-2">
            <div class="slider-container flex w-[80vw] rounded-xl overflow-x-hidden m-10">
                <button class="slider-btn prev-btn m-5"><i class="fa-solid fa-chevron-left text-(--light) text-3xl bg-(--dark) p-5 rounded-xl cursor-pointer"></i></button>
                <div class="slider relative h-[60vh] w-full overflow-x-hidden rounded-xl">
                    <div class="carousel h-full w-full relative">
                        <div class="slide active absolute top-0 left-0 w-full h-full opacity-0">
                            <img src="/Memorilla/src/assets/img/carrossel1.png" alt="Imagem 1">
                        </div>
                        <div class="slide absolute top-0 left-0 w-full h-full opacity-0">
                            <img src="https://picsum.photos/800/400?random=2" alt="Imagem 2">
                        </div>
                        <div class="slide absolute top-0 left-0 w-full h-full opacity-0">
                            <img src="https://picsum.photos/800/400?random=3" alt="Imagem 3">
                        </div>
                    </div>
                </div>
                <button class="slider-btn next-btn m-5"><i class="fa-solid fa-chevron-right text-(--light) text-3xl bg-(--dark) p-5 rounded-xl cursor-pointer"></i></button>
            </div>
            <div class="caption m-10 flex justify-center items-center">
                    <p id="slide-caption" class="text-(--light) jim text-4xl">"Lápide dos escolhidos"</p>
                </div>
        </section>
        <section id="About" class="bg-linear-to-bl from-(--dark) from-0% to-(-primary-blue) to-100% flex justify-center items-center flex-col w-screen ">
            <div id="quemSomos" class="flex justify-around items-center flex-col m-5 ">
                <h2 class="mainTitle text-5xl text-(--light) jim m-10">Quem somos?</h2>
                <div class="body flex justify-center items-center w-300">
                    <div class="quemSomosImg">
                        <img src="/Memorilla/src/assets/img/quemSomos.png" alt="" class="p-5 border-2 border-(--light) rounded-xl">
                    </div>
                    <div class="quemSomosText m-20 p-5">
                        <p class="gfs text-(--light) text-xl w-150 text-justify">Somos o Instituto de Cronografia Aplicada, uma instituição independente dedicada à preservação meticulosa de histórias significativas. Nosso trabalho é garantir que narrativas cruciais não se percam no tempo. O Memorilla nasceu da crença de que toda história, por mais complexa que seja, merece um repositório de confiança. Fundado por um grupo de arquivistas, pesquisadores e storytellers, nosso projeto é um tributo ao poder da memória coletiva.</p>
                    </div>
                </div>
            </div>
            <div id="oqueFazemos" class="flex justify-around items-center flex-col m-5 ">
                <h2 class="mainTitle text-5xl text-(--light) jim m-10">O que fazemos?</h2>
                    <div class="oqueFazemosText m-20 p-5">
                        <p class="gfs text-(--light) text-xl w-150 text-justify">Organizamos informações em um memorial único, garantindo clareza e profundidade. Vamos além dos fatos, explorando as causas, consequências e as pessoas por trás dos eventos. Garantimos que este acervo permaneça acessível para as gerações futuras, imune à erosão do tempo.</p>

                </div>
            </div>            
            <div class="fundo bg-radial from-(--teste) from-60% to-transparent to-70% flex items-center m-10 mb-30 transition hover:scale-115">
                <a href="ingresso.php"><p class="jacquard text-6xl text-(--light) p-10">Conhecer história</p></a>
            </div>
        </section>
        
    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/footer.php"?> 
    <script src="/Memorilla/src/assets/js/incialSlider.js"></script>
</body>
</html>
