<?php 
    $confirm = $_GET["confirm"];

    if($confirm == 1){
        session_unset();
        session_destroy();
        header("Location: /Memorilla/src/pages/login.php");
        exit();
    }
?>