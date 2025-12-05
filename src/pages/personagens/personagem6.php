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
            <img class="size-80 rounded-2xl" src="../../assets/img/Ben.png"
                alt="Foto-do-personagem">
            <div class="m-15">
                <h1 class="text-(--light) text-5xl mb-10 jim">Ben Hargreeves</h1>
                <p class="max-w-3xl text-xl text-justify">Ben, o "Número Seis", era capaz de convocar uma dimensão
                    lovecraftiana de monstros tentaculares através de um portal em seu torso. Era um jovem quieto,
                    sensível e gentil, que detestava a violência de seu próprio poder. Sua morte prematura, antes dos
                    eventos principais da série, o tornou um fantasma ligado a Klaus, sendo o único irmão que conseguia
                    vê-lo e interagir com ele por anos.
                </p>
            </div>
        </section>
        <section class="p-13 max-w-7xl flex flex-col items-center mt-5 mb-15">
            <img class="w-200 rounded-2xl" src="../../assets/img/Ben_cenario.png">
            <p class="text-justify text-xl max-w-7x1 m-15">A morte original de Ben ocorreu em uma missão de rotina da
                Umbrella Academy. Aos 17 anos, ele perdeu o controle de sua entidade monstruosa durante um combate. Os
                tentáculos se voltaram violentamente contra seu próprio corpo, dilacerando-o internamente. Ele morreu
                nos braços de seus irmãos, tornando-se um fantasma atormentado que observou o mundo por mais de uma
                década antes de conseguir seguir em paz.
            </p>
        </section>
        </div>
    </main>
</body>

</html>