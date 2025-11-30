<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/controllers/produtoController.php";
if (!isset($_SESSION['carrinho'])) $_SESSION['carrinho'] = [];
if (isset($_POST['produto_id'])) {
    $id = $_POST['produto_id'];
    $qtd = isset($_POST['quantidade']) ? intval($_POST['quantidade']) : 1;
    $_SESSION['carrinho'][$id] = ($_SESSION['carrinho'][$id] ?? 0) + $qtd;
}
if (isset($_POST['remover_id'])) {
    unset($_SESSION['carrinho'][$_POST['remover_id']]);
}
$produtos = new ProdutoController();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/tailwind.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/fonts.php"; ?>
    <link rel="stylesheet" href="/Memorilla/src/assets/css/carrinho.css">
</head>

<body class="overflow-x-hidden w-screen min-h-screen flex flex-col">
    <header class="p-1 bg-(--primary-blue) text-(--light) text-lg gfs">
        <ul>
            <nav class="flex justify-around items-center">
                <img src="\Memorilla\src\assets\img\logo.png" alt="" class="w-20" draggable="false"
                    <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/produtos.php">Produtos</a></li>
                <li><a href="../pages/ingresso.php">Ingressos</a></li>
                <li><a href="../pages/personagens.php">Personagens</a></li>
                <li><a href="../pages/mapa.php">Mapa</a></li>
                <li><i class="fa-solid fa-door-open text-2xl"></i></li>
            </nav>
        </ul>
    </header>
    <main class="bg-(--primary-blue) min-h-screen w-full">
        <h1 class="text-center text-5xl font-extrabold text-(--light) py-10">Carrinho</h1>
        <div class="flex flex-col items-center w-full">
            <?php $total = 0;
            $temItens = false;
            foreach ($_SESSION['carrinho'] as $id => $qtd) {
                $produto = $produtos->findId($id);
                if ($produto) {
                    $temItens = true;
                    $preco = $produto->getPreco();
                    $subtotal = $preco * $qtd;
                    $total += $subtotal;
            ?>
                    <section class="m-6 flex text-(--light) border-solid border-(--secondary-blue) border-[2px] rounded-3xl w-[80vw] max-w-5xl bg-(--primary-blue)">
                        <figure>
                            <img src="../assets/img/foto-teste-produtos.jpg" alt="Imagem do produto" class="min-h-[100%] rounded-3xl w-32 h-32 object-cover">
                        </figure>
                        <div class="m-8 w-full">
                            <h2 class="jim text-3xl mb-2"><?php echo $produto->getNome(); ?></h2>
                            <p class="gfs text-lg w-full text-justify mb-2"><?php echo $produto->getDescricao(); ?></p>
                            <span class="block text-xl mb-2">Preço: R$<?php echo number_format($preco, 2, ',', '.'); ?></span>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-2">
                                    <button type="button" class="rmv bg-(--secondary-blue) text-(--primary-blue) px-3 py-1 rounded-xl" data-id="<?php echo $id; ?>">-</button>
                                    <input type="number" name="quantidade" value="<?php echo $qtd; ?>" min="1" max="99" class="quantidade gfs w-16 text-center text-xl" data-id="<?php echo $id; ?>" data-preco="<?php echo $preco; ?>" readonly>
                                    <button type="button" class="add bg-(--secondary-blue) text-(--primary-blue) px-3 py-1 rounded-xl" data-id="<?php echo $id; ?>">+</button>
                                </div>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="remover_id" value="<?php echo $id; ?>">
                                    <button type="submit" class="ml-5 text-red-500 text-xl rounded-xl px-3 py-1 bg-(--light)"><i class="fa-solid fa-trash"></i> Remover</button>
                                </form>
                            </div>
                            <span class="subtotal block mt-2 text-lg" data-id="<?php echo $id; ?>">Subtotal: R$<?php echo number_format($subtotal, 2, ',', '.'); ?></span>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
            <?php if (!$temItens): ?>
                <div class="carrinho-vazio text-center py-16 text-(--gray) text-2xl">
                    Seu carrinho está vazio.
                </div>
            <?php endif; ?>
            <div class="text-right w-full max-w-3xl px-6 mb-8">
                <strong class="text-2xl text-(--light)">Total: <span id="total-carrinho" class="text-(--light)">R$<?php echo number_format($total, 2, ',', '.'); ?></span></strong>
                <button class="rounded-3xl jim bg-(--secondary-blue) text-(--primary-blue) w-[14rem] h-[5rem] text-4xl mt-6"><i class="fa-solid fa-hand-holding-dollar text-(--primary-blue)"></i> Pagar</button>
            </div>
        </div>

    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/footer.php" ?>
</body>

<script>
    document.querySelectorAll('.add').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const input = document.querySelector('input.quantidade[data-id="' + id + '"]');
            let qtd = parseInt(input.value);
            if (qtd < 99) {
                qtd++;
                input.value = qtd;
                atualizarSubtotal(id, qtd, parseFloat(input.getAttribute('data-preco')));
            }
        });
    });
    document.querySelectorAll('.rmv').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const input = document.querySelector('input.quantidade[data-id="' + id + '"]');
            let qtd = parseInt(input.value);
            if (qtd > 1) {
                qtd--;
                input.value = qtd;
                atualizarSubtotal(id, qtd, parseFloat(input.getAttribute('data-preco')));
            }
        });
    });

    function atualizarSubtotal(id, qtd, preco) {
        const novoSubtotal = preco * qtd;
        document.querySelector('.subtotal[data-id="' + id + '"]').textContent = 'Subtotal: R$' + novoSubtotal.toFixed(2).replace('.', ',');
        atualizarTotal();
    }

    function atualizarTotal() {
        let total = 0;
        document.querySelectorAll('.subtotal').forEach(sub => {
            total += parseFloat(sub.textContent.replace('Subtotal: R$', '').replace('.', '').replace(',', '.'));
        });
        document.getElementById('total-carrinho').textContent = 'R$' + total.toFixed(2).replace('.', ',');
    }
</script>

</html>