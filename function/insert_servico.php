<?php

session_start();

require_once '../crud.php';

if (!isset($_SESSION['id_user'])) {
    header('Location: ../login.php');
    exit;
}

$add = [
    'id_user' => $_SESSION['id_user'],
    'servico' => $_POST['servico'],
    'produto' => $_POST['produto'],
    'local_entrega' => $_POST['local_entrega'],
    'data_transporte' => $_POST['data_transporte'],
    'quantidade' => $_POST['quantidade'],
    'observacoes' => $_POST['observacoes'],
    'status' => 'Em análise'
];

create($pdo, 'solicitacoes', $add);

header('Location: ../user/pedidos.php');
exit;