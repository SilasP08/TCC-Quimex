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

$totalContratos = (int) $pdo->query(
    'SELECT COUNT(*) FROM solicitacoes'
)->fetchColumn();

$itensPorPagina = 10;
$totalPaginas = max(1, (int) ceil($totalContratos / $itensPorPagina));
$paginaSolicitada = filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT);
$pagina = $paginaSolicitada && $paginaSolicitada > 0
    ? min($paginaSolicitada, $totalPaginas)
    : 1;
$offset = ($pagina - 1) * $itensPorPagina;

$stmt = $pdo->prepare(
    'SELECT solicitacoes.*, users.nome AS cliente_nome, users.email AS cliente_email
     FROM solicitacoes
     LEFT JOIN users ON users.id_user = solicitacoes.id_user
     ORDER BY solicitacoes.data_solicitacao DESC, solicitacoes.id_solicitacao DESC
     LIMIT :limite OFFSET :offset'
);
$stmt->bindValue(':limite', $itensPorPagina, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$contratos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo $base; ?>admin/css/admin.css">
    <link rel="stylesheet" href="<?php echo $base; ?>admin/css/contratos.css">

    <title>Contratos - Quimex</title>

</head>

<body>

    <?php
    $paginaAdmin = 'solicitacoes';
    require __DIR__ . '/partial/sidebar.php';
    ?>


    <main class="conteudo admin-conteudo">

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
                            <tr>

                                <td>

                                    <?php
                                    echo $contrato['id_solicitacao'];
                                    ?>

                                </td>


                                <td>

                                    <?php

                                    echo $contrato['cliente_nome']
                                        ? htmlspecialchars($contrato['cliente_nome'])
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

                                    <?php if (!empty($contrato['cliente_email'])): ?>
                                        <a
                                            href="mailto:<?php echo htmlspecialchars($contrato['cliente_email'], ENT_QUOTES, 'UTF-8'); ?>"
                                            class="btn-contato"
                                            aria-label="Enviar e-mail para <?php echo htmlspecialchars($contrato['cliente_nome'], ENT_QUOTES, 'UTF-8'); ?>"
                                        >
                                            <i class="bi bi-envelope" aria-hidden="true"></i> Contato
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($contrato['status'] == 'Em análise'): ?>

                                        <a href="./function/aprovar.php?id=<?php echo $contrato['id_solicitacao']; ?>" class="btn-aprovar">
                                            <i class="bi bi-check-circle" aria-hidden="true"></i> Aprovar
                                        </a>

                                        <a href="./function/recusar.php?id=<?php echo $contrato['id_solicitacao']; ?>" class="btn-recusar">
                                            <i class="bi bi-x-circle" aria-hidden="true"></i> Recusar
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

        <div class="paginacao-container">
            <p class="paginacao-info">
                Página <?php echo $pagina; ?> de <?php echo $totalPaginas; ?> ·
                <?php echo count($contratos); ?> de <?php echo $totalContratos; ?> solicitações
            </p>

            <?php if ($totalPaginas > 1): ?>
                <nav class="paginacao" aria-label="Paginação de solicitações">
                    <a
                        href="?pagina=<?php echo max(1, $pagina - 1); ?>"
                        class="<?php echo $pagina === 1 ? 'desabilitado' : ''; ?>"
                        aria-label="Página anterior"
                        <?php echo $pagina === 1 ? 'aria-disabled="true" tabindex="-1"' : ''; ?>
                    >
                        <i class="bi bi-chevron-left" aria-hidden="true"></i>
                    </a>

                    <?php for ($numeroPagina = max(1, $pagina - 2); $numeroPagina <= min($totalPaginas, $pagina + 2); $numeroPagina++): ?>
                        <a
                            href="?pagina=<?php echo $numeroPagina; ?>"
                            class="<?php echo $numeroPagina === $pagina ? 'ativo' : ''; ?>"
                            <?php echo $numeroPagina === $pagina ? 'aria-current="page"' : ''; ?>
                        >
                            <?php echo $numeroPagina; ?>
                        </a>
                    <?php endfor; ?>

                    <a
                        href="?pagina=<?php echo min($totalPaginas, $pagina + 1); ?>"
                        class="<?php echo $pagina === $totalPaginas ? 'desabilitado' : ''; ?>"
                        aria-label="Próxima página"
                        <?php echo $pagina === $totalPaginas ? 'aria-disabled="true" tabindex="-1"' : ''; ?>
                    >
                        <i class="bi bi-chevron-right" aria-hidden="true"></i>
                    </a>
                </nav>
            <?php endif; ?>
        </div>

    </main>

</body>

</html>
