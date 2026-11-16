<aside class="sidebar">
    <div class="logo">
        <a href="<?php echo $base; ?>index.php">
            <img src="../img/logo_quimex.png" alt="Quimex">
        </a>
    </div>

    <nav aria-label="Menu administrativo">
        <a href="./admin.php" class="<?php echo $paginaAdmin === 'dashboard' ? 'ativo' : ''; ?>">
            <i class="bi bi-speedometer2" aria-hidden="true"></i> Visão geral
        </a>
        <a href="./contratos.php" class="<?php echo $paginaAdmin === 'solicitacoes' ? 'ativo' : ''; ?>">
            <i class="bi bi-list-check" aria-hidden="true"></i> Solicitações
        </a>
        <a href="<?php echo $base; ?>index.php">
            <i class="bi bi-house-door" aria-hidden="true"></i> Voltar ao site
        </a>
        <a href="<?php echo $base; ?>logout.php" class="logout">
            <i class="bi bi-box-arrow-right" aria-hidden="true"></i> Sair
        </a>
    </nav>
</aside>
