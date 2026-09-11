<?php

session_start();

require_once '../crud.php';

if (!isset($_SESSION['id_user'])) {
    header('Location: ../login.php');
    exit;
}

$base = '/TCC-Quimex/';

$id_user = $_SESSION['id_user'];

$pedidos = readAll(
    $pdo,
    'solicitacoes',
    "id_user = $id_user"
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Meus Pedidos | Quimex</title>

    <link rel="stylesheet" href="/TCC-Quimex/css/pedidos.css">

</head>

<body>

<?php require_once  '../partial/header.php'; ?>


<main class="pagina-pedidos">

    <section class="pedidos-container">

        <div class="titulo-pedidos">

            <span>QUIMEX</span>

            <h1>Meus pedidos</h1>

            <p>
                Acompanhe suas solicitações de transporte.
            </p>

        </div>


        <div class="acoes-pedidos">

            <a
                href="<?php echo $base; ?>user/perfil.php"
                class="btn-voltar"
            >
                Meu perfil
            </a>

            <a
                href="<?php echo $base; ?>servico.php"
                class="btn-novo-pedido"
            >
                + Novo pedido
            </a>

        </div>


        <?php if ($pedidos): ?>

            <div class="tabela-container">

                <table>

                    <thead>

                        <tr>

                            <th>Serviço</th>
                            <th>Produto</th>
                            <th>Local de entrega</th>
                            <th>Data</th>
                            <th>Quantidade</th>
                            <th>Status</th>
                            <th>Ação</th>

                        </tr>

                    </thead>


                    <tbody>

                        <?php foreach ($pedidos as $pedido): ?>

                            <tr>

                                <td>
                                    <?php echo $pedido['servico']; ?>
                                </td>

                                <td>
                                    <?php echo $pedido['produto']; ?>
                                </td>

                                <td>
                                    <?php echo $pedido['local_entrega']; ?>
                                </td>

                                <td>
                                    <?php
                                    echo date(
                                        'd/m/Y',
                                        strtotime($pedido['data_transporte'])
                                    );
                                    ?>
                                </td>

                                <td>
                                    <?php echo $pedido['quantidade']; ?>
                                </td>

                                <td>

                                    <span class="status">

                                        <?php echo $pedido['status']; ?>

                                    </span>

                                </td>

                                <td>

                                    <?php if ($pedido['status'] == 'Aguardando pagamento'): ?>

                                        <a
                                            href="<?php echo $base; ?>user/pagamento.php?id=<?php echo $pedido['id_solicitacao']; ?>"
                                            class="btn-pagar"
                                        >
                                            Pagar serviço
                                        </a>

                                    <?php elseif ($pedido['status'] == 'Separando pedido'): ?>

                                        <span class="pagamento-ok">
                                            Pagamento realizado
                                        </span>

                                    <?php else: ?>

                                        <span class="sem-acao">
                                            -
                                        </span>

                                    <?php endif; ?>

                                </td>
                        </td>


                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>


        <?php else: ?>


            <div class="sem-pedidos">

                <div class="icone-pedidos">
                    📋
                </div>

                <h2>
                    Você ainda não possui pedidos
                </h2>

                <p>
                    Quando você solicitar um serviço,
                    ele aparecerá aqui.
                </p>

                <a
                    href="<?php echo $base; ?>servico.php"
                >
                    Solicitar serviço
                </a>

            </div>


        <?php endif; ?>


    </section>

</main>

</body>

</html>