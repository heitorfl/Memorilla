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
    <main class="flex-grow gfs text-(--terciary-blue)">
        <div class="flex flex-col items-center">
        <section class="p-13 border-solid border-(--secondary-blue) border-b flex items-center">
            <img class="size-80 rounded-2xl" src="../../assets/img/Klaus.png"
                alt="Foto-do-personagem">
            <div class="m-15">
                <h1 class="text-(--light) text-5xl mb-10 jim">Klaus Hargreeves</h1>
                <p class="max-w-3xl text-xl text-justify">Klaus, o "Número Quatro", possuía a capacidade de se comunicar
                    com os mortos, um poder que o aterrorizava desde a infância. Para bloquear as vozes e visões
                    constantes, ele afundou-se no vício em drogas e álcool. Ao longo da vida, ele descobriu outras
                    facetas de seu poder, como a materialização de espíritos e a própria imortalidade, morrendo e
                    voltando à vida repetidas vezes.
                </p>
            </div>
        </section>
        <section class="p-13 max-w-7xl flex flex-col items-center mt-5 mb-15">
            <img class="w-200 rounded-2xl" src="../../assets/img/Klaus_cenario.png">
            <p class="text-justify text-xl max-w-7x1 m-15">Ironia do destino, a única morte permanente de Klaus não veio
                de ferimentos ou overdose, mas de um ato puro de amor. Durante uma batalha espiritual por suas almas,
                Ben estava prestes a ser dissipado para sempre. Klaus, em um ato final de redenção e coragem, usou toda
                a sua energia vital para ancorar o espírito do irmão ao mundo dos vivos. O custo, no entanto, foi a sua
                própria vida, que se esvaiu enquanto ele salvava Ben.
            </p>
        </section>
        </div>
    </main>
</body>

</html>