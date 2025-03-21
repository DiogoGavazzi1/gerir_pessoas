<?php
session_start();

// Se o usuário não estiver logado, redireciona para o login
if (!isset($_SESSION["username"])) {
    header("Location: ../vista/login_page.php?erro=2");
    exit();
}
?>
