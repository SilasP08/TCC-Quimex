<?php

session_start();

require_once './crud.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $user = read(
        $pdo,
        'users',
        "email = '$email'"
    );

    if ($user && password_verify($senha, $user['senha'])) {

        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['tipo'] = $user['tipo'];

        header('Location: inicio.php');
        exit;

    } else {

        $erro = 'E-mail ou senha incorretos.';

    }
}

print_r($_SESSION)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
    <?php
    require_once "./partial/header.php";
    ?>
    <section class="login">

        <div class="overlay"></div>

        <div class="login-box">

            <img src="./img/logo_quimex.png" class="logo">

            <h1>Bem-vindo!</h1>

            <p>
                Faça login para acessar o painel da QUIMEX.
            </p>

            <form method="POST">

                <div class="input-box">

                    <i class="fa-solid fa-envelope"></i>

                    <input type="email" name="email" placeholder="Digite seu e-mail" required>

                </div>


                <div class="input-box">

                    <i class="fa-solid fa-lock"></i>

                    <input type="password" name="senha" placeholder="Digite sua senha" required>

                </div>


                <button type="submit">
                    Entrar
                </button>

            </form>

            <div class="links">

                <a href="#">Esqueceu sua senha?</a>

                <a href="cadastro.php">

                    Criar uma conta

                </a>

            </div>

        </div>

    </section>


</body>

</html>