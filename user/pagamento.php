<?php

session_start();

require_once '../crud.php';

if (!isset($_SESSION['id_user'])) {
    header('Location: ../login.php');
    exit;
}

$base = '/TCC-Quimex/';

$id_user = $_SESSION['id_user'];

$id_pedido = $_GET['id'];

$pedido = read(
    $pdo,
    'solicitacoes',
    "id_solicitacao = $id_pedido AND id_user = $id_user"
);

if (!$pedido) {
    header('Location: ./pedidos.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pagamento | Quimex</title>

    <link rel="stylesheet" href="/TCC-Quimex/css/pagamento.css">

</head>

<body>

    <?php require_once '../partial/header.php'; ?>


    <main class="pagina-pagamento">

        <section class="pagamento-container">


            <div class="titulo-pagamento">

                <span>QUIMEX</span>

                <h1>Pagamento do serviço</h1>

                <p>
                    Confira os dados do seu pedido antes de confirmar o pagamento.
                </p>

            </div>


            <div class="pagamento-card">


                <!-- RESUMO DO PEDIDO -->

                <div class="pedido-info">

                    <h2>Resumo do pedido</h2>


                    <div class="info">

                        <span>Serviço</span>

                        <p>
                            <?php echo $pedido['servico']; ?>
                        </p>

                    </div>


                    <div class="info">

                        <span>Produto</span>

                        <p>
                            <?php echo $pedido['produto']; ?>
                        </p>

                    </div>


                    <div class="info">

                        <span>Local de entrega</span>

                        <p>
                            <?php echo $pedido['local_entrega']; ?>
                        </p>

                    </div>


                    <div class="info">

                        <span>Data do transporte</span>

                        <p>
                            <?php
                            echo date(
                                'd/m/Y',
                                strtotime($pedido['data_transporte'])
                            );
                            ?>
                        </p>

                    </div>


                    <div class="info">

                        <span>Quantidade</span>

                        <p>
                            <?php echo $pedido['quantidade']; ?>
                        </p>

                    </div>


                    <div class="info">

                        <span>Status atual</span>

                        <p>
                            <?php echo $pedido['status']; ?>
                        </p>

                    </div>

                </div>


                <!-- PAGAMENTO -->

                <div class="pagamento-area">

                    <h2>Forma de pagamento</h2>


                    <div class="formas">

                        <label>

                            <input
                                type="radio"
                                name="pagamento"
                                value="PIX"
                                checked
                            >

                            PIX

                        </label>


                        <label>

                            <input
                                type="radio"
                                name="pagamento"
                                value="Cartão"
                            >

                            Cartão

                        </label>


                        <label>

                            <input
                                type="radio"
                                name="pagamento"
                                value="Boleto"
                            >

                            Boleto

                        </label>

                    </div>


                    <p class="aviso">

                        Este pagamento é uma simulação para fins
                        demonstrativos do sistema Quimex.

                    </p>


                    <form
                        action="<?php echo $base; ?>func/processar_pagamento.php"
                        method="POST"
                    >

                        <input
                            type="hidden"
                            name="id_solicitacao"
                            value="<?php echo $pedido['id_solicitacao']; ?>"
                        >


                        <button
                            type="submit"
                            class="btn-confirmar"
                        >

                            Confirmar pagamento

                        </button>

                    </form>


                    <a
                        href="<?php echo $base; ?>pedidos.php"
                        class="btn-voltar"
                    >

                        Voltar para pedidos

                    </a>

                </div>

            </div>

        </section>

    </main>

</body>

</html>