<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <?php
        require_once "./partial/header.php";
    ?>
    <section class="hero">

        <!-- SLIDE 1 -->
        <div class="slide active">

            <img src="img/slide1.jpeg" alt="Slide 1">

            <div class="overlay"></div>

            <div class="content">

                <h1>
                    SOLUÇÕES DE<br>
                    TRANSPORTE
                </h1>

                <p>
                    Tecnologia e eficiência para as melhores entregas, as mais modernas e as mais seguras.
                </p>

                <a href="#">Saiba mais</a>

            </div>

        </div>

        <!-- SLIDE 2 -->
        <div class="slide">

            <img src="img/slide2.jpg" alt="Slide 2">

            <div class="overlay"></div>

            <div class="content">

                <h1>
                    AUTOMAÇÃO<br>
                    INTELIGENTE
                </h1>

                <p>
                    Sistemas inteligentes para aumentar produtividade.
                </p>

                <a href="#">Nossos serviços</a>

            </div>

        </div>

        <!-- SLIDE 3 -->
        <div class="slide">

            <img src="img/slide3.jpg" alt="Slide 3">

            <div class="overlay"></div>

            <div class="content">

                <h1>
                    EQUIPE<br>
                    ESPECIALIZADA
                </h1>

                <p>
                    Profissionais preparados para grandes desafios.
                </p>

                <a href="#">Entrar em contato</a>

            </div>

        </div>

        <!-- BOLINHAS -->

        <div class="indicators">

            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>

        </div>

    </section>
    <section class="about">

        <!-- TÍTULO -->

        <div class="about-title">

            <h2>
                ESPECIALISTAS NO TRANSPORTE
                DE PRODUTOS QUÍMICOS
            </h2>

            <div class="line"></div>

        </div>

        <!-- CONTEÚDO -->

        <div class="about-container">

            <!-- IMAGEM -->

            <div class="about-image">

                <img src="img/caminhao.jpeg" alt="Caminhão QUIMEX">

            </div>

            <!-- TEXTO -->

            <div class="about-content">

                <h3>
                    LOGÍSTICA SEGURA E
                    EFICIENTE PARA O
                    SETOR QUÍMICO
                </h3>

                <p>
                    A QUIMEX atua no transporte de produtos químicos
                    com excelência, segurança e compromisso.
                    Nossa equipe é preparada para atender operações
                    complexas com alto padrão de qualidade e
                    responsabilidade.
                </p>

                <ul>

                    <li>Transporte de produtos químicos líquidos</li>

                    <li>Produtos químicos sólidos e industriais</li>

                    <li>Logística especializada e monitorada</li>

                    <li>Equipe treinada para cargas perigosas</li>

                </ul>

                <a href="./frota.php">
                    Conheça nossa frota
                </a>

            </div>

        </div>

    </section>
    <section class="certifications">

        <div class="section-header">

            <h2>
                COMPROMISSO COM A SEGURANÇA,
                QUALIDADE E RESPONSABILIDADE
            </h2>

            <div class="line"></div>

        </div>

        <div class="certifications-grid">

            <div class="certification-card">
                <img src="img/ISO-9001-2015.png" alt="ISO 9001">
            </div>

            <div class="certification-card">
                <img src="img/ISO_14001_artigo.png" alt="ISO 14001">
            </div>

            <div class="certification-card">
                <img src="img/inmetro.png" alt="INMETRO">
            </div>

            <div class="certification-card">
                <img src="img/together.png" alt="Responsabilidade Ambiental">
            </div>

        </div>

    </section>
    <section class="differentials">

        <!-- CARD 1 -->

        <div class="card">

            <div class="icon">
                <i class="fa-solid fa-medal"></i>
            </div>

            <h3>SISTEMA DE GESTÃO</h3>

            <div class="card-line"></div>

            <p>
                A QUIMEX trabalha com processos rigorosos de
                gestão logística, garantindo eficiência,
                rastreabilidade e excelência no transporte
                de produtos químicos em todo o território nacional.
            </p>

        </div>

        <!-- CARD 2 -->

        <div class="card">

            <div class="icon">
                <i class="fa-solid fa-shield-heart"></i>
            </div>

            <h3>SAÚDE E SEGURANÇA</h3>

            <div class="card-line"></div>

            <p>
                Nossas operações seguem protocolos rigorosos
                de segurança, priorizando a proteção dos
                colaboradores, clientes e cargas transportadas
                durante todas as etapas da operação.
            </p>

        </div>

        <!-- CARD 3 -->

        <div class="card">

            <div class="icon">
                <i class="fa-solid fa-earth-americas"></i>
            </div>

            <h3>MEIO AMBIENTE</h3>

            <div class="card-line"></div>

            <p>
                A QUIMEX atua com responsabilidade ambiental,
                reduzindo impactos e seguindo normas ambientais
                para o transporte seguro de produtos químicos
                líquidos, sólidos e perigosos.
            </p>

        </div>

    </section>
    <?=
        require_once "./partial/footer.php";
    ?>
    <script>

        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        let current = 0;

        function changeSlide() {

            slides[current].classList.remove('active');
            dots[current].classList.remove('active');

            current++;

            if (current >= slides.length) {
                current = 0;
            }

            slides[current].classList.add('active');
            dots[current].classList.add('active');

        }

        setInterval(changeSlide, 5000);

    </script>
</body>

</html>