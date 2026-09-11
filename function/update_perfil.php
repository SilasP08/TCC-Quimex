<?php

session_start();

require_once '../crud.php';

if (!isset($_SESSION['id_user'])) {
    header('Location: ../login.php');
    exit;
}

$id_user = $_SESSION['id_user'];

$dados = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'telefone' => $_POST['telefone'],
    'cpf_cnpj' => $_POST['cpf_cnpj']
];

update(
    $pdo,
    'users',
    $dados,
    "id_user = $id_user"
);

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['email'] = $_POST['email'];

header('Location: ../user/perfil.php');
exit;