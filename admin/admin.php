<?php

session_start();

$base = '/TCC-Quimex/';

if (!isset($_SESSION['id_user'])) {
    header('Location: ' . $base . 'login.php');
    exit;
}

if (($_SESSION['nivel'] ?? '') !== 'admin') {
    header('Location: ' . $base . 'index.php');
    exit;
}

require_once __DIR__ . '/../crud.php';

$statusCounts = [
    'Em análise' => 0,
    'Aguardando pagamento' => 0,
    'Separando pedido' => 0,
    'Recusado' => 0,
];

$stmt = $pdo->query(
    'SELECT status, COUNT(*) AS total FROM solicitacoes GROUP BY status'
);

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    $statusCounts[$row['status']] = (int) $row['total'];
}

$totalSolicitacoes = array_sum($statusCounts);

$stmt = $pdo->query(
    'SELECT s.id_solicitacao, s.servico, s.produto, s.status, s.data_solicitacao, u.nome AS cliente
     FROM solicitacoes s
     LEFT JOIN users u ON u.id_user = s.id_user
     ORDER BY s.data_solicitacao DESC
     LIMIT 5'
);

$solicitacoesRecentes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Painel administrativo | Quimex</title>
</head>

<body>
    <?php
    $paginaAdmin = 'dashboard';
    require __DIR__ . '/partial/sidebar.php';
    ?>

    <main class="conteudo">
        <section class="topo">
            <div>
                <span class="titulo-pequeno">QUIMEX · ADMINISTRAÇÃO</span>
                <h1>Painel administrativo</h1>
                <p>Acompanhe solicitações e contratos dos clientes.</p>
            </div>

            <div class="perfil-topo">
                <div>
                    <strong><?php echo htmlspecialchars($_SESSION['nome'] ?? 'Administrador'); ?></strong>
                    <span>Administrador</span>
                </div>
            </div>
        </section>

        <section class="cards" aria-label="Resumo das solicitações">
            <article class="card">
                <div class="icone"><i class="bi bi-inboxes" aria-hidden="true"></i></div>
                <div><span>Total de solicitações</span><strong><?php echo $totalSolicitacoes; ?></strong></div>
            </article>
            <article class="card">
                <div class="icone"><i class="bi bi-hourglass-split" aria-hidden="true"></i></div>
                <div><span>Em análise</span><strong><?php echo $statusCounts['Em análise']; ?></strong></div>
            </article>
            <article class="card">
                <div class="icone"><i class="bi bi-credit-card" aria-hidden="true"></i></div>
                <div><span>Aguardando pagamento</span><strong><?php echo $statusCounts['Aguardando pagamento']; ?></strong></div>
            </article>
            <article class="card">
                <div class="icone"><i class="bi bi-truck" aria-hidden="true"></i></div>
                <div><span>Separando pedido</span><strong><?php echo $statusCounts['Separando pedido']; ?></strong></div>
            </article>
            <article class="card">
                <div class="icone"><i class="bi bi-x-circle" aria-hidden="true"></i></div>
                <div><span>Recusados</span><strong><?php echo $statusCounts['Recusado']; ?></strong></div>
            </article>
        </section>

        <section class="contratos">
            <div class="secao-topo">
                <div>
                    <h2>Solicitações recentes</h2>
                    <p>Últimos pedidos enviados pelos clientes.</p>
                </div>
                <a href="./contratos.php">Ver todas</a>
            </div>

            <div class="tabela-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Serviço</th>
                            <th>Produto</th>
                            <th>Data</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($solicitacoesRecentes)): ?>
                            <tr><td colspan="6">Nenhuma solicitação encontrada.</td></tr>
                        <?php else: ?>
                            <?php foreach ($solicitacoesRecentes as $solicitacao): ?>
                                <tr>
                                    <td><?php echo (int) $solicitacao['id_solicitacao']; ?></td>
                                    <td><?php echo htmlspecialchars($solicitacao['cliente'] ?? 'Cliente não encontrado'); ?></td>
                                    <td><?php echo htmlspecialchars($solicitacao['servico']); ?></td>
                                    <td><?php echo htmlspecialchars($solicitacao['produto']); ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($solicitacao['data_solicitacao'])); ?></td>
                                    <td><?php echo htmlspecialchars($solicitacao['status']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>
