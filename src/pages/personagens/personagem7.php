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
                        <h1 class="text-(--secondary-blue) text-4xl mb-10">Victor Hargreeves</h1>
                        <p class="max-w-3xl text-xl text-justify">Nascido como Vanya, Victor era o "Número Sete", inicialmente considerado o membro comum e sem poderes da família. Na verdade, ele possuía um poder imensurável de manipulação de ondas sonoras e energia, que foi suprimido por seu pai durante a infância. Sua jornada foi de autodescoberta e aceitação, tanto de sua identidade de gênero quanto de seu poder avassalador, que era a chave para o apocalipse em sua primeira manifestação.
</p>
                    </div>
                </section>
                <section class="p-13 max-w-7xl flex flex-col items-center mt-5 mb-15">
                    <img class="w-full h-[20rem] rounded-2xl" src="../../assets/img/foto-teste-banner-personagens.png" alt="Foto">
                    <p class="text-justify text-xl max-w-7x1 m-15">Victor morreu em um ato de supremo autocontrole e sacrifício. Percebendo que seu poder, se liberado por completo em um acesso de emoção, destruiria o mundo, ele enfrentou a si mesmo. Em vez de explodir, ele canalizou toda a sua energia sonora para dentro de si mesmo, contendo a explosão cataclísmica. O processo foi como colapsar uma estrela, e seu corpo não pôde conter tanta energia, dissipando-se em uma luz brilhante e silenciosa, salvando a todos ao custo de sua existência.</p>
                </section>
            </div>
    </main>
</body>
</html>