<?php

session_start();

require_once '../crud.php';


if (!isset($_SESSION['id_user'])) {

    header('Location: ../login.php');
    exit;

}


$id_user = $_SESSION['id_user'];

$id_solicitacao = $_POST['id_solicitacao'];


// Procura o pedido do usuário
$pedido = read(
    $pdo,
    'solicitacoes',
    "id_solicitacao = $id_solicitacao AND id_user = $id_user"
);


// Verifica se o pedido existe
if (!$pedido) {

    header('Location: ../user/pedidos.php');
    exit;

}


// Verifica se o pedido está aguardando pagamento
if ($pedido['status'] != 'Aguardando pagamento') {

    header('Location: ../user/pedidos.php');
    exit;

}


// Altera o status do pedido
$dados = [
    'status' => 'Separando pedido'
];


update(
    $pdo,
    'solicitacoes',
    $dados,
    "id_solicitacao = $id_solicitacao AND id_user = $id_user"
);


// Volta para os pedidos
header('Location: ../user/pedidos.php');
exit;