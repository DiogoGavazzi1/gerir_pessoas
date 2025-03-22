<?php
session_start();
?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

<main class="container">
    <div class="card shadow-lg p-5 mx-auto text-center bg-light" style="max-width: 400px; border-radius: 10px;">
        <img src="assets/img/delivery.png" width="100px" height="auto" class="mb-3 mx-auto d-block rounded" alt="Logo">
        <h5 class="fw-bold">Ficha 5</h5>
        <p class="text-muted"><strong>Edmundo & Bela- Distribuidores de Gás</strong></p>

        <?php
        if (isset($_GET["erro"]) && $_GET["erro"] == 1) {
            echo '<div class="alert alert-danger" role="alert">❌ Credenciais incorretas. Tente novamente.</div>';
        }
        ?>

        <form action="../modelos/auth.php" method="POST">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Nome de utilizador" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Senha" required>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
        </form>

        <div class="text-start mt-3">
            <a href="#" class="text-decoration-none">Recuperar senha</a>
        </div>

        <hr>
        <div class="d-flex justify-content-between">
            <a href="#" class="text-decoration-none text-muted">@ Portugal(PT-PT) 2025- <?php echo date("Y") ?></a>
        </div>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
s
