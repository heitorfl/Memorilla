<?php


namespace Heitor\Memorilla\pages;

use Heitor\Memorilla\controllers\CartItemsController;
use Heitor\Memorilla\models\produto\Product;

include_once $_SERVER["DOCUMENT_ROOT"] . "/src/components/auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php";

$controller = new CartItemsController();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Adiciona o produto ao carrinho
    $controller->addToCart(
            new Product()->setId($_POST['produto_id']),
            $_POST['quantidade']
    );
    // Evita reenvio de formulário
    header("location: carrinho.php");
    exit();
}
$produtos = $controller->loadCart();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="shortcut icon" href="/src/assets/img/logo.ico" type="image/x-icon">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/src/components/tailwind.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/src/components/fonts.php"; ?>
    <link rel="stylesheet" href="/src/assets/css/carrinho.css">
</head>

<body class="overflow-x-hidden w-screen min-h-screen flex flex-col">
<header class="p-1 bg-(--primary-blue) text-(--light) text-lg gfs">
    <ul>
        <nav class="flex justify-around items-center">
            <img src="/src/assets/img/logo.png" alt="" class="w-20" draggable="false">
            <li><a href="../pages/index.php">Home</a></li>
            <li><a href="../pages/produtos.php">Produtos</a></li>
            <li><a href="../pages/ingresso.php">Ingressos</a></li>
            <li><a href="../pages/personagens.php">Personagens</a></li>
            <li><a href="../pages/mapa.php">Mapa</a></li>
            <li><a href="/src/components/logout.php?confirm=1"><i class="fa-solid fa-door-open text-2xl"></i></a></li>
        </nav>
    </ul>
</header>
<main class="bg-(--primary-blue) min-h-[75vh] h-auto w-full flex flex-col flex-1">
    <div class="mainTitle border-b-1 border-(--light) my-5 mx-20 flex justify-center ">
        <h1 class="text-center text-5xl text-(--light) jim p-10">Carrinho</h1>
    </div>
    <div class="flex flex-col items-center w-full min-h-[50vh] flex-1">
        <?php if (empty($produtos)) : ?>
            <div class="carrinho-vazio min-h-[50vh] text-(--gray) text-2xl flex items-center justify-center">
                <p>Seu carrinho está vazio.</p>
            </div>
        <?php
            endif;

            foreach ($produtos as $produto) :
            $temItens = true;
            // Transforma as chaves do array associativo em variáveis
            extract($produto);
            ?>
            <section
                    class="m-6 flex text-(--light) border-solid border-(--secondary-blue) border-[2px] rounded-3xl w-[80vw] max-w-5xl bg-(--primary-blue)">
                <figure>
                    <img src="<?= $imagem ?>" alt="Imagem do produto"
                         class="min-h-[100%] rounded-3xl w-120 h-32 object-cover">
                </figure>
                <div class="m-8 w-full">
                    <h2 class="jim text-3xl mb-2">
                        <?= $nome ?>
                    </h2>
                    <p class="gfs text-lg w-full text-justify mb-2">
                        <?= $descricao ?>
                    </p>
                    <span class="block text-xl mb-2 gfs">
                        Preço: R$<?= number_format($preco, 2, ',', '.'); ?>
                    </span>
                    <div class="flex justify-between items-center">
                        <form action="carrinho.php" method="post" class="flex items-center gap-2">
                            <input type="hidden" name="produto_id" value="<?= $id ?>">
                            <button type="button"
                                    class="rmv bg-(--secondary-blue) text-(--primary-blue) text-xl px-3 py-1 rounded-xl cursor-pointer gfs"
                                    data-id="<?= $id ?>">-
                            </button>
                            <input type="number" name="quantidade" value="<?= $quantidade ?>" min="1"
                                   max="99"
                                   class="quantidade gfs w-16 text-center text-xl" data-id="<?= $id ?>"
                                   data-preco="<?= $preco ?>" readonly>
                            <button type="button"
                                    class="add bg-(--secondary-blue) text-(--primary-blue) text-xl px-3 py-1 rounded-xl cursor-pointer gfs"
                                    data-id="<?= $id ?>">+
                            </button>
                            <button type="submit"
                                    class="bg-(--light) text-(--primary-blue) text-xl px-5 mx-2 py-1 rounded-xl cursor-pointer gfs hover:bg-(--terciary-blue) transition">
                                Salvar
                            </button>
                        </form>
                        <form action="<?= '../tools/deleteProduto.php' ?>" method="post">
                            <input type="hidden" name="remover_id" value="<?= $id ?>">
                            <button type="submit"
                                    class="ml-5 text-(--primary-blue) text-xl gfs rounded-sm px-3 p-3 bg-(--secondary-blue) cursor-pointer">
                                <i class="fa-solid fa-trash text-(--dark)"></i></button>
                        </form>
                    </div>
                </div>
            </section>
        <?php
        endforeach;
        ?>
        <div class="flex justify-between items-center w-screen p-5 mt-auto">
            <strong class="text-2xl text-(--light)">Total:
                <span id="total-carrinho" class="text-(--light)">
                    <?= $controller->cartTotalValue(); ?> R$
                </span>
            </strong>
            <button class="rounded-3xl jim bg-(--secondary-blue) text-(--primary-blue) w-[14rem] h-[5rem] text-4xl cursor-pointer">
                <i class="fa-solid fa-hand-holding-dollar text-(--primary-blue)"></i> Pagar
            </button>
        </div>
    </div>

</main>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/src/components/footer.php" ?>
</body>

<script>
    document.querySelectorAll('.add').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const input = document.querySelector('input.quantidade[data-id="' + id + '"]');
            let qtd = parseInt(input.value);
            if (qtd < 99) {
                qtd++;
                input.value = qtd;
            }
        });
    });
    document.querySelectorAll('.rmv').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const input = document.querySelector('input.quantidade[data-id="' + id + '"]');
            let qtd = parseInt(input.value);
            if (qtd > 1) {
                qtd--;
                input.value = qtd;
            }
        });
    });
</script>

</html>