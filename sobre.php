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
                        A QUIMEX é uma proposta de transportadora química
                        com base planejada em Paulínia-SP e rotas de referência
                        para polos industriais de diferentes regiões do Brasil.
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

                    <h2>Estrutura Organizacional</h2>

                    <p>
                        A estrutura organizacional combina direção executiva,
                        diretorias funcionais e áreas operacionais e de apoio.
                    </p>

                </div>

                <div class="team-grid">

                    <div class="team-card">
                        <div class="team-initials" aria-hidden="true">GP</div>
                        <h3>Giovanna Andrade Pinheiro</h3>
                        <span>Diretora Geral / CEO</span>
                    </div>

                    <div class="team-card">
                        <div class="team-initials" aria-hidden="true">YM</div>
                        <h3>Yves Vicenzo Alves de Oliveira Muniz</h3>
                        <span>Vice-Diretor Geral / Integração Executiva</span>
                    </div>

                    <div class="team-card">
                        <div class="team-initials" aria-hidden="true">AM</div>
                        <h3>Antonio Vitor Fernandes Leite Melo</h3>
                        <span>Diretor de Pesquisa e Desenvolvimento</span>
                    </div>

                    <div class="team-card">
                        <div class="team-initials" aria-hidden="true">BC</div>
                        <h3>Brendel Raynan Barros Silva Crispim</h3>
                        <span>Diretor de Mercado e Inteligência</span>
                    </div>

                    <div class="team-card">
                        <div class="team-initials" aria-hidden="true">EC</div>
                        <h3>Erik Silva Camott</h3>
                        <span>Diretor Comercial e Marketing</span>
                    </div>

                    <div class="team-card">
                        <div class="team-initials" aria-hidden="true">GG</div>
                        <h3>Guilherme Dantas Gonsalez</h3>
                        <span>Diretor de Estratégia e Planejamento</span>
                    </div>

                    <div class="team-card">
                        <div class="team-initials" aria-hidden="true">JM</div>
                        <h3>José Kaio Barbosa de Sousa Morais</h3>
                        <span>Diretor de Suprimentos e Projetos</span>
                    </div>

                    <div class="team-card">
                        <div class="team-initials" aria-hidden="true">SC</div>
                        <h3>Silas Possarle Carvalho Silva</h3>
                        <span>Diretor Financeiro</span>
                    </div>

                </div>

            </div>

        </section>



        <!-- NÚMEROS -->

        <section class="numbers">

            <div class="container numbers-grid">

                <div class="number-item">

                    <h2>74</h2>

                    <span>Veículos previstos no projeto</span>

                </div>

                <div class="number-item">

                    <h2>25 km</h2>

                    <span>Rota mínima de referência</span>

                </div>

                <div class="number-item">

                    <h2>1.850 km</h2>

                    <span>Rota máxima de referência</span>

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
