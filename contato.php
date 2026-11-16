<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contato.css">
    <title>Contato | Quimex</title>
</head>

<body>
    <?php require_once __DIR__ . '/partial/header.php'; ?>

    <main class="contato-page">
        <section class="contato-banner">
            <span>QUIMEX</span>
            <h1>Fale com a nossa equipe</h1>
            <p>Use nossos canais para dúvidas, informações comerciais e acompanhamento de solicitações.</p>
        </section>

        <section class="contato-section" aria-label="Canais de contato">
            <div class="contato-grid">
                <article class="contato-card">
                    <span class="contato-label">E-mail</span>
                    <a href="mailto:contato@quimex.com.br">contato@quimex.com.br</a>
                    <p>Envie sua dúvida ou solicitação comercial.</p>
                </article>

                <article class="contato-card">
                    <span class="contato-label">Telefone</span>
                    <a href="tel:+5511999999999">(11) 99999-9999</a>
                    <p>Fale diretamente com a equipe Quimex.</p>
                </article>

                <article class="contato-card">
                    <span class="contato-label">Prazo estimado de retorno</span>
                    <strong>Até 1 dia útil</strong>
                    <p>Estimativa para respostas a contatos e pedidos de orçamento.</p>
                </article>
            </div>

            <div class="contato-cta">
                <div>
                    <h2>Precisa contratar um transporte?</h2>
                    <p>Informe produto, quantidade, destino e data para solicitar uma análise.</p>
                </div>
                <a href="./servico.php#form-servico">Solicitar serviço</a>
            </div>
        </section>
    </main>

    <?php require_once __DIR__ . '/partial/footer.php'; ?>
</body>

</html>
