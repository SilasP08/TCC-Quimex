<?php

session_start();

require_once '../crud.php';

if (!isset($_SESSION['id_user'])) {
    header('Location: ./login.php');
    exit;
}

if ($_SESSION['categoria'] != 'admin') {
    header('Location: ./index.php');
    exit;
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <link
        rel="stylesheet"
        href="./css/admin.css"
    >

    <title>Painel Administrativo</title>

</head>

<body>

    <?php require_once './partial/header.php'; ?>


    <main class="admin-conteudo">

        <!-- conteúdo do painel aqui -->

    </main>


</body>

</html>