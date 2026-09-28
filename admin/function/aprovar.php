<?php

session_start();

require_once '../../crud.php';

$base = '/TCC-Quimex/';


/* Verifica se está logado */

if (!isset($_SESSION['id_user'])) {
    header('Location: ' . $base . 'login.php');
    exit;
}


/* Verifica se é admin */

if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] !== 'admin') {
    header('Location: ' . $base . 'index.php');
    exit;
}


/* Verifica o ID */

if (!isset($_GET['id'])) {
    header('Location: contratos.php');
    exit;
}

$id = $_GET['id'];


/* Atualiza o status */

update(
    $pdo,
    'solicitacoes',
    [
        'status' => 'Aguardando pagamento'
    ],
    "id_solicitacao = $id"
);


/* Volta para contratos */

header('Location: ../contratos.php');
exit;