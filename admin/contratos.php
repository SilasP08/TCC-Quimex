<?php

session_start();

require_once '../crud.php';

$base = '/TCC-Quimex/';


/* =========================
   VERIFICAR LOGIN
========================= */

if (!isset($_SESSION['id_user'])) {

    header('Location: ' . $base . 'login.php');
    exit;

}


/* =========================
   VERIFICAR ADMIN
========================= */

if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] !== 'admin') {

    header('Location: ' . $base . 'index.php');
    exit;

}


/* =========================
   BUSCAR CONTRATOS
========================= */

$contratos = readAll(
    $pdo,
    'solicitacoes'
);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo $base; ?>/admin/css/contratos.css">

    <title>Contratos - Quimex</title>

</head>

<body>

    <?php require_once '../partial/header.php'; ?>


    <main class="admin-conteudo">

        <div class="admin-titulo">

            <h1>Contratos</h1>

            <p>
                Visualize os contratos e solicitações dos clientes.
            </p>

        </div>


        <div class="tabela-container">

            <table class="tabela-admin">

                <thead>

                    <tr>

                        <th>ID</th>
                        <th>Cliente</th>
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

                    <?php if (empty($contratos)): ?>

                        <tr>

                            <td colspan="9" class="sem-registros">

                                Nenhum contrato encontrado.

                            </td>

                        </tr>

                    <?php else: ?>

                        <?php foreach ($contratos as $contrato): ?>

                            <?php

                            $cliente = read(
                                $pdo,
                                'users',
                                "id_user = " . $contrato['id_user']
                            );

                            ?>

                            <tr>

                                <td>

                                    <?php
                                    echo $contrato['id_solicitacao'];
                                    ?>

                                </td>


                                <td>

                                    <?php

                                    echo $cliente
                                        ? htmlspecialchars($cliente['nome'])
                                        : 'Cliente não encontrado';

                                    ?>

                                </td>


                                <td>

                                    <?php
                                    echo htmlspecialchars(
                                        $contrato['servico']
                                    );
                                    ?>

                                </td>


                                <td>

                                    <?php
                                    echo htmlspecialchars(
                                        $contrato['produto']
                                    );
                                    ?>

                                </td>


                                <td>

                                    <?php
                                    echo htmlspecialchars(
                                        $contrato['local_entrega']
                                    );
                                    ?>

                                </td>


                                <td>

                                    <?php

                                    echo date(
                                        'd/m/Y',
                                        strtotime(
                                            $contrato['data_transporte']
                                        )
                                    );

                                    ?>

                                </td>


                                <td>

                                    <?php
                                    echo $contrato['quantidade'];
                                    ?>

                                </td>


                                <td>

                                    <span class="status">

                                        <?php
                                        echo htmlspecialchars(
                                            $contrato['status']
                                        );
                                        ?>

                                    </span>

                                </td>


                                <td>

                                    <?php if ($contrato['status'] == 'Em análise'): ?>

                                        <a href="./function/aprovar.php?id=<?php echo $contrato['id_solicitacao']; ?>" class="btn-aprovar">
                                            Aprovar
                                        </a>

                                        <a href="./function/recusar.php?id=<?php echo $contrato['id_solicitacao']; ?>" class="btn-recusar">
                                            Recusar
                                        </a>


                                    <?php elseif ($contrato['status'] == 'Aguardando pagamento'): ?>

                                        <span class="status-aprovado">
                                            Aguardando pagamento
                                        </span>


                                    <?php elseif ($contrato['status'] == 'Separando pedido'): ?>

                                        <span class="status-pago">
                                            Pagamento realizado
                                        </span>


                                    <?php elseif ($contrato['status'] == 'Recusado'): ?>

                                        <span class="status-recusado">
                                            Recusado
                                        </span>

                                    <?php endif; ?>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </main>

</body>

</html>