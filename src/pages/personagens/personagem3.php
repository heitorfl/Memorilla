<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                <img class="size-80 rounded-2xl" src="/Memorilla/src/assets/img/Allison.png"
                    alt="Foto-do-personagem">
                <div class="m-15">
                    <h1 class="text-(--light) text-5xl mb-10 jim">
                        Allison Hargreeves</h1>
                    <p class="max-w-3xl text-xl text-justify">Allison, a "Número Três", tinha o poder de manipular a
                        realidade através dos rumores. A frase "Ouvi um boato de que..." era sua arma mais poderosa,
                        capaz
                        de forçar qualquer pessoa a fazer sua vontade. Ela usou esse poder para se tornar uma estrela de
                        cinema famosa, mas carregava o peso das consequências de suas manipulações, especialmente em
                        relação
                        à sua filha, da qual foi afastada.
                    </p>
                </div>
            </section>
            <section class="p-13 max-w-7xl flex flex-col items-center mt-5 mb-15">
               <img class="w-200 rounded-2xl" src="../../assets/img/Allison_cenario.png">
                <p class="text-justify text-xl max-w-7x1 m-15">Consumida pela raiva e pelo desespero após perder sua
                    filha
                    em uma linha do tempo, Allison usou seu poder de forma desmedida e fatal. Em um confronto com um
                    inimigo
                    praticamente invencível, ela sussurrou o rumor mais perigoso de todos: "Ouvi um boato de que... você
                    parou de viver". O esforço e o feedback do poder ao forçar a morte de outro ser foram tão grandes
                    que
                    seu próprio corpo não suportou, causando uma falha sistêmica que a matou instantaneamente.
                </p>
            </section>
        </div>
    </main>
</body>

</html>