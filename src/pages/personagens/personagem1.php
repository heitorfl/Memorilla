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
        <a class="jim text-4xl cursor-pointer text-(--secondary-blue)" href="../personagens.php"><i class="fa-solid fa-reply"></i>Voltar</a>
    </header>
    <main class="flex-grow gfs text-(--terciary-blue)">
        <div class="flex flex-col items-center">
            <section class="border-solid border-(--secondary-blue) border-b flex items-center">
                <img class="size-80 rounded-2xl" src="../../assets/img/Luther.png"
                    alt="Foto-do-personagem">
                <div class="m-15">
                    <h1 class="text-(--light) text-5xl mb-10 jim">Luther Hargreeves</h1>
                    <p class="max-w-3xl text-xl text-justify gfs">Luther, também conhec como "Número Um" ou "Spaceboy", foi 
                        o líder reconhecido da Umbrella Academy. Dotado de força sobre-humana, sua lealdade ao Sir
                        Reginald Hargreeves era absoluta. Após um desastre em uma missão, seu corpo foi gravemente
                        ferido, e seu pai o salvou transplantando sua consciência para o corpo de um astronauta símio.
                        Isso o deixou com um corpo descomunal e o enviou em uma missão solitária de quatro anos à Lua,
                        da qual voltou emocionalmente isolado e inseguro.
                    </p>
                </div>
            </section>
            <section class="p-13 max-w-7xl flex flex-col items-center mt-5 mb-15">
                <img class="w-200 rounded-2xl" src="../../assets/img/Luther_cenario.png"
                    alt="Foto">
                <p class="text-justify text-xl max-w-7x1 m-15">Luther encontrou seu fim durante a batalha contra as
                    Guardiãs do Hotel Obsidian. Enquanto protegia sua família com sua força característica, ele foi
                    gravemente ferido. Com suas últimas forças, ele carregou o irmão, Five, para um local seguro,
                    garantindo a sobrevivência deste para que pudesse concluir sua missão. Luther sucumbiu aos seus
                    ferimentos, morrendo como um herói e um protetor até o último instante.
                </p>
            </section>
        </div>
    </main>
</body>

</html>