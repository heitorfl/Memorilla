<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/controllers/usuarioController.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/models/usuario.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/controllers/loginController.php";


    if($_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $login = new Usuario($email, $senha);
        $user = new loginController();
        $resposta = $user->login($login);

        if($resposta){
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="/Memorilla/src/assets/img/logo.ico" type="image/x-icon">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/tailwind.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/components/fonts.php"; ?>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body class="bg-(--dark) flex items-center justify-center flex-col min-h-lvh">
    <main class="h-[80vh] flex justify-center items-center">
        <div id="login" class="mb-10">
            <div class="flex items-center justify-center m-5 p-5 text-3xl border-y-2 border-(--secondary-blue) w-2xl">
                <h1 class="mainTitle text-(--gray) jim">Login</h1>
            </div>
            <form action="login.php" method="post" class="flex flex-col justify-center items-center">
                <input class="bg-(--secondary-blue) p-3 w-md m-5 rounded-2xl jim text-2xl placeholder:text-(--dark) focus:outline-0" type="text" name="email" id="email" placeholder="E-Mail">
                <input class="bg-(--secondary-blue) p-3 w-md m-5 rounded-2xl jim text-2xl placeholder:text-(--dark) focus:outline-0" type="password" name="senha" id="senha" placeholder="Senha">
                <button class="p-2 w-xs m-2 border-2 border-(--secondary-blue) rounded-xl text-(--secondary-blue) text-2xl jim cursor-pointer hover:bg-(--secondary-blue) hover:text-(--dark) transition" type="submit">Logar</button>
                <p class="jim text-lg m-3 text-(--secondary-blue)">Não tem uma conta? <a href="cadastro.php" class="text-(--gray)">Cadastrar</a></p>
            </form>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/803e48205f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>