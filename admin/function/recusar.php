<?php

session_start();

require_once '../../crud.php';

$base = '/TCC-Quimex/';


if (!isset($_SESSION['id_user'])) {
    header('Location: ' . $base . 'login.php');
    exit;
}


if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] !== 'admin') {
    header('Location: ' . $base . 'index.php');
    exit;
}


if (!isset($_GET['id'])) {
    header('Location: contratos.php');
    exit;
}


$id = $_GET['id'];


update(
    $pdo,
    'solicitacoes',
    [
        'status' => 'Recusado'
    ],
    "id_solicitacao = $id"
);


header('Location: ../contratos.php');
exit;