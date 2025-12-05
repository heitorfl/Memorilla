<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="/Memorilla/src/assets/img/logo.ico" type="image/x-icon">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/tailwind.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/fonts.php"; ?>
</head>
<script src="https://kit.fontawesome.com/803e48205f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<body class="overflow-x-hidden w-screen min-h-screen flex flex-col bg-(--dark) ">
    <header class="m-10">
        <a class="jim text-4xl cursor-pointer text-(--secondary-blue)" href="../personagens.php"><i
                class="fa-solid fa-reply"></i>Voltar</a>
    </header>
    <main class="flex-grow text-(--terciary-blue)">
        <div class="flex flex-col items-center">
        <section class="p-13 border-solid border-(--secondary-blue) border-b flex items-center">
            <img class="size-80 rounded-2xl" src="../../assets/img/Diego.png"
                alt="Foto-do-personagem">
            <div class="m-15">
                <h1 class="text-(--light) text-5xl mb-10 jim">Diego Hargreeves</h1>
                <p class="max-w-3xl text-xl text-justify">Diego, o "Número Dois" que rejeitava o título, era conhecido
                    como "O Kraken". Sua habilidade era curvar a trajetória de qualquer objeto que arremessasse,
                    principalmente suas facas. Com um profundo complexo de irmão mais velho em relação a Luther, ele
                    sempre buscou provar seu valor. De personalidade impulsiva e justiceira, ele deixou a Academia para
                    se tornar um vigilante, lutando contra o crime nas ruas de forma independente.

                </p>
            </div>
        </section>
        <section class="p-13 max-w-7xl flex flex-col items-center mt-5 mb-15">
            <img class="w-200 rounded-2xl" src="../../assets/img/Diego_cenario.png">
            <p class="text-justify text-xl max-w-7x1 m-15">A morte de Diego foi um ato de sacrifício definitivo. Durante
                um ataque em grande escala à Academia, ele e sua irmã Lila ficaram encurralados. Para salvá-la e dar à
                família uma chance de escapar, Diego detonou explosivos que ele mesmo plantou, criando uma distração
                massiva. A explosão foi catastrófica, garantindo a fuga dos outros, mas custando sua própria vida.

            </p>
        </section>
        </div>
    </main>
</body>

</html>