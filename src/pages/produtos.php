<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/components/auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/controllers/produtoController.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/models/produtoModel.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/models/produto.php";

$produtos = new ProdutoController();
$dados = $produtos->read();
$personagens = [];
$acessorios = [];
$cosmeticos = [];
for ($i = 0; $i < 9; $i++) {
    $produto = $dados[$i];
    if ($i < 3) {
        array_push($personagens, $produto);
    } else if ($i >= 3 && $i < 6) {
        array_push($acessorios, $produto);
    } else {
        array_push($cosmeticos, $produto);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/tailwind.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/fonts.php"; ?>
    <link rel="stylesheet" href="/Memorilla/src/assets/css/produtos.css">
</head>

<body class="w-screen overflow-x-hidden">
    <header class="p-1 bg-(--primary-blue) text-(--light) text-lg gfs">
        <ul>
            <nav class="flex justify-around items-center">
                <img src="\Memorilla\src\assets\img\logo.png" alt="" class="w-20" draggable="false">
                <li><a href="produtos.php">Home</a></li>
                <li><a href="ingresso.php">Ingresso</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="personagens.php">Personagens</a></li>
                <li><a href="mapa.php">Mapa</a></li>
                <li><a href="/Memorilla/src/components/logout.php?confirm=1"><i class="fa-solid fa-door-open text-2xl"></i></a></li>
            </nav>
        </ul>
    </header>
    <main class="flex justify-center items-center flex-col bg-(--primary-blue)">
        <section id="carrossel" class="border-b-1 border-(--light) m-2">
            <div class="slider-container flex w-[80vw] rounded-xl overflow-x-hidden m-10">
                <button class="slider-btn prev-btn m-5"><i class="fa-solid fa-chevron-left text-(--light) text-3xl bg-(--dark) p-5 rounded-xl cursor-pointer"></i></button>
                <div class="slider relative h-[400px] w-full overflow-x-hidden rounded-xl">
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
                <p id="slide-caption" class="text-(--light) jim text-3xl">"Boneco Klaus"</p>
            </div>
        </section>
        <section id="personagens flex justify-center items-center p-10">
            <div class="mainTitle flex justify-center items-center p-5 m-3">
                <h3 class="text-5xl text-(--light) jim">Personagens</h3>
            </div>
            <section class="cards flex justify-center items-center m-10 border-b-1 border-(--light)">
                <?php foreach ($personagens as $item) { ?>
                    <div class="card w-100 p-2 m-10">
                        <div class="imgCard"><img src="/Memorilla/src/assets/img/carrossel1.png" alt=""></div>
                        <div class="cardBody ">
                            <div class="nomeCard">
                                <h3 class="text-(--light) text-4xl jim"><?php print $item->getNome(); ?></h3>
                            </div>
                            <div class="price">
                                <p class="text-(--light) text-3xl jim"><?php print $item->getPreco(); ?> R$</p>
                            </div>
                            <div class="textCard">
                                <p class="text-(--light) text-xl jim"><?php print $item->getDescricao(); ?></p>
                            </div>
                            <div class="btnsCart">
                                <form action="carrinho.php" method="post">
                                    <input type="hidden" name="produto_id" value="<?php print $item->getId() ?>">
                                    <input type="hidden" name="quantidade" value="1">
                                    <button type="submit" class="cart bg-(--light) p-4 mt-4 text-(--dark) rounded-2xl gfs cursor-pointer">
                                        Adicionar <i class="fa-solid fa-cart-shopping"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </section>
        <section id="acessorios flex justify-center items-center p-10">
            <div class="mainTitle flex justify-center items-center p-5 m-3">
                <h3 class="text-5xl text-(--light) jim">Acessórios</h3>
            </div>
            <section class="cards flex justify-center items-center m-10 border-b-1 border-(--light)">
                <?php foreach ($acessorios as $item) { ?>
                    <div class="card w-100 p-2 m-10">
                        <div class="imgCard"><img src="/Memorilla/src/assets/img/carrossel1.png" alt=""></div>
                        <div class="cardBody ">
                            <div class="nomeCard">
                                <h3 class="text-(--light) text-4xl jim"><?php print $item->getNome(); ?></h3>
                            </div>
                            <div class="price">
                                <p class="text-(--light) text-3xl jim"><?php print $item->getPreco(); ?> R$</p>
                            </div>
                            <div class="textCard">
                                <p class="text-(--light) text-xl jim"><?php print $item->getDescricao(); ?></p>
                            </div>
                            <div class="btnsCart">
                                <form action="carrinho.php" method="post">
                                    <input type="hidden" name="produto_id" value="<?php print $item->getId() ?>">
                                    <input type="hidden" name="quantidade" value="1">
                                    <button type="submit" class="cart bg-(--light) p-4 mt-4 text-(--dark) rounded-2xl gfs cursor-pointer">
                                        Adicionar <i class="fa-solid fa-cart-shopping"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </section>
        <section id="cosmeticos flex justify-center items-center p-10">
            <div class="mainTitle flex justify-center items-center p-5 m-3">
                <h3 class="text-5xl text-(--light) jim">Cosméticos</h3>
            </div>
            <section class="cards flex justify-center items-center m-10 p-5">
                <?php foreach ($cosmeticos as $item) { ?>
                    <div class="card w-100 p-2 m-10">
                        <div class="imgCard"><img src="/Memorilla/src/assets/img/carrossel1.png" alt=""></div>
                        <div class="cardBody ">
                            <div class="nomeCard">
                                <h3 class="text-(--light) text-4xl jim"><?php print $item->getNome(); ?></h3>
                            </div>
                            <div class="price">
                                <p class="text-(--light) text-3xl jim"><?php print $item->getPreco(); ?> R$</p>
                            </div>
                            <div class="textCard">
                                <p class="text-(--light) text-xl jim"><?php print $item->getDescricao(); ?></p>
                            </div>
                            <div class="btnsCart">
                                <form action="carrinho.php" method="post">
                                    <input type="hidden" name="produto_id" value="<?php print $item->getId() ?>">
                                    <input type="hidden" name="quantidade" value="1">
                                    <button type="submit" class="cart bg-(--light) p-4 mt-4 text-(--dark) rounded-2xl gfs cursor-pointer">
                                        Adicionar <i class="fa-solid fa-cart-shopping"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </section>
    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/footer.php" ?>
    <script src="/Memorilla/src/assets/js/produtoSlider.js"></script>
</body>

</html>