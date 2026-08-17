<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sobre.css">
    <title>Sobre Nós</title>
</head>

<body>

     <?php
        require_once "./partial/header.php";
    ?>

    <main>

        <!-- BANNER -->

        <section class="about-banner">

            <div class="container">

                <h1>Sobre a QUIMEX</h1>

                <p>
                    Especialistas em transporte de produtos químicos,
                    oferecendo segurança, eficiência e confiabilidade
                    em cada operação.
                </p>

            </div>

        </section>



        <!-- HISTÓRIA -->

        <section class="about-company">

            <div class="container about-grid">

                <div class="about-image">

                    <img src="./img/sede.jpg" alt="QUIMEX">

                </div>

                <div class="about-content">

                    <span>QUEM SOMOS</span>

                    <h2>
                        Transporte químico com responsabilidade
                        e excelência.
                    </h2>

                    <p>
                        A QUIMEX atua no transporte rodoviário de
                        produtos químicos, oferecendo soluções
                        logísticas seguras para indústrias em todo
                        o território nacional.
                    </p>

                    <p>
                        Nossa empresa investe constantemente em
                        tecnologia, treinamento de equipes e
                        modernização da frota para garantir
                        operações eficientes e dentro das normas
                        ambientais e de segurança.
                    </p>

                </div>

            </div>

        </section>



        <!-- MISSÃO -->

        <section class="mission-section">

            <div class="container mission-grid">

                <div class="mission-card">

                    <i class="fas fa-bullseye"></i>

                    <h3>Missão</h3>

                    <p>
                        Transportar produtos químicos com
                        segurança, qualidade e compromisso.
                    </p>

                </div>

                <div class="mission-card">

                    <i class="fas fa-eye"></i>

                    <h3>Visão</h3>

                    <p>
                        Ser referência nacional em logística
                        química especializada.
                    </p>

                </div>

                <div class="mission-card">

                    <i class="fas fa-handshake"></i>

                    <h3>Valores</h3>

                    <p>
                        Segurança, ética, sustentabilidade,
                        inovação e respeito às pessoas.
                    </p>

                </div>

            </div>

        </section>



        <!-- EQUIPE -->

        <section class="team-section">

            <div class="container">

                <div class="section-title">

                    <span>LIDERANÇA</span>

                    <h2>Nossa Equipe</h2>

                    <p>
                        Profissionais responsáveis por conduzir
                        a QUIMEX com excelência.
                    </p>

                </div>

                <div class="team-grid">

                    <div class="team-card">

                        <div class="team-photo">

                            <img src="img/equipe/diretor.jpg">

                        </div>

                        <h3>Nome do Diretor</h3>

                        <span>Diretor Executivo</span>

                    </div>

                    <div class="team-card">

                        <div class="team-photo">

                            <img src="img/equipe/operacoes.jpg">

                        </div>

                        <h3>Nome do Gestor</h3>

                        <span>Gerente de Operações</span>

                    </div>

                    <div class="team-card">

                        <div class="team-photo">

                            <img src="img/equipe/seguranca.jpg">

                        </div>

                        <h3>Nome do Responsável</h3>

                        <span>Coordenador de Segurança</span>

                    </div>

                    <div class="team-card">

                        <div class="team-photo">

                            <img src="img/equipe/logistica.jpg">

                        </div>

                        <h3>Nome do Responsável</h3>

                        <span>Gerente Logístico</span>

                    </div>

                </div>

            </div>

        </section>



        <!-- NÚMEROS -->

        <section class="numbers">

            <div class="container numbers-grid">

                <div class="number-item">

                    <h2>15+</h2>

                    <span>Anos de experiência</span>

                </div>

                <div class="number-item">

                    <h2>100+</h2>

                    <span>Clientes atendidos</span>

                </div>

                <div class="number-item">

                    <h2>50+</h2>

                    <span>Veículos especializados</span>

                </div>

                <div class="number-item">

                    <h2>24/7</h2>

                    <span>Monitoramento</span>

                </div>

            </div>

        </section>

    </main>
   <?=
        require_once "./partial/footer.php";
    ?>
</body>

</html>