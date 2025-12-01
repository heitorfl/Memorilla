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
<body class="overflow-x-hidden w-screen min-h-screen flex flex-col">

    <main class="bg-(--primary-blue) flex-grow gfs text-(--terciary-blue)">
            <div class="flex flex-col items-center">
                <a class="jim p-10 text-4xl w-full text-left mt-15" href="../personagens.php"><button class="border-[5px] rounded-2xl border-solid divide-(--secondary-blue) p-5"><i class="fa-solid fa-reply"></i> Voltar</button></a>
                <section class="p-13 border-solid border-(--secondary-blue) border-b flex items-center">
                    <img class="w-[16rem] h-[20rem] rounded-2xl" src="../../assets/img/foto-teste-personagens.png" alt="Foto-do-personagem">
                    <div class="m-15">
                        <h1 class="text-(--secondary-blue) text-4xl mb-10">Five</h1>
                        <p class="max-w-3xl text-xl text-justify">Conhecido apenas como "Five" (Cinco), seu poder era o teletransporte no espaço-tempo. Arrogante e genial, ele viajou acidentalmente para um futuro pós-apocalíptico quando era adolescente, onde passou 45 anos sozinho antes de conseguir voltar. Ele se tornou um assassino letal e eficiente para sobreviver e foi o único que sempre compreendeu a verdadeira ameaça do iminente apocalipse, lutando incansavelmente para impedi-lo.
</p>
                    </div>
                </section>
                <section class="p-13 max-w-7xl flex flex-col items-center mt-5 mb-15">
                    <img class="w-full h-[20rem] rounded-2xl" src="../../assets/img/foto-teste-banner-personagens.png" alt="Foto">
                    <p class="text-justify text-xl max-w-7x1 m-15">Five morreu como viveu: tentando consertar a linha do tempo. Para salvar a família e restaurar a realidade, que estava se desfazendo, ele precisou viajar para o epicentro de uma ruptura temporal. Sabia que a viagem seria uma via de mão única. A energia temporal instável era demasiada para qualquer corpo suportar. Ele se desintegrou no continuum espaço-temporal, tornando-se uma parte eterna do tecido da realidade que tanto lutou para salvar.
</p>
                </section>
            </div>
    </main>
</body>
</html>