<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/frota.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Frota</title>
</head>

<body>

        <?php
        require_once "./partial/header.php";
        ?>



        <!-- BANNER -->

        <section class="fleet-banner">

            <div class="container">

                <h1>Nossa Frota</h1>

                <p>
                    Soluções especializadas para o transporte
                    seguro de produtos químicos em todo o Brasil.
                </p>

            </div>

        </section>



        <!-- APRESENTAÇÃO -->

        <section class="fleet-about">

            <div class="container fleet-grid">

                <div class="fleet-text">

                    <span>NOSSA FROTA</span>

                    <h2>
                        SEGURANÇA E TECNOLOGIA
                        EM CADA OPERAÇÃO
                    </h2>

                    <p>
                    A frota planejada reúne 74 veículos para transporte,
                    apoio operacional e resposta a emergências.
                    </p>

                    <p>
                        Caminhões-tanque atendem operações regionais. Carretas-tanque
                        ampliam a capacidade para rotas interestaduais.
                    </p>

                </div>

                <div class="fleet-image">

                    <img src="img/banner-frota.jpg" alt="Frota Quimex">

                </div>

            </div>

        </section>



        <!-- TÍTULO -->

        <section class="fleet-section-title">

            <h2>
                VEÍCULOS DA FROTA PREVISTA
            </h2>

        </section>



        <!-- VEÍCULOS -->

        <section class="vehicles">

            <div class="container vehicles-grid">

                <!-- 1 -->
                <article class="vehicle-card">

                    <img src="./img/tanque.jpg" alt="Caminhão-tanque da frota prevista">

                    <div class="vehicle-content">

                        <h3>Caminhão-tanque</h3>

                        <span class="vehicle-quantity">18 veículos · 15 a 20 mil litros</span>

                        <p>
                            Para coletas menores e operações regionais.
                        </p>

                        <ul>
                            <li>Ácido sulfúrico</li>
                            <li>Ácido clorídrico</li>
                            <li>Soda cáustica</li>
                        </ul>

                    </div>

                </article>

                <!-- 2 -->
                <article class="vehicle-card">

                    <img src="./img/bitrem-tanque.jfif" alt="Carreta-tanque">

                    <div class="vehicle-content">

                        <h3>Carreta-tanque</h3>

                        <span class="vehicle-quantity">42 veículos · 30 a 45 mil litros</span>

                        <p>
                            Indicada para transportes interestaduais e cargas de maior volume.
                        </p>

                        <ul>
                            <li>Metanol</li>
                            <li>Etanol</li>
                            <li>Solventes</li>
                        </ul>

                    </div>

                </article>

                <!-- 3 -->
                <article class="vehicle-card">

                    <img src="./img/caminhao.jpeg" alt="Veículos de apoio">

                    <div class="vehicle-content">

                        <h3>Veículos de apoio</h3>

                        <span class="vehicle-quantity">10 utilitários leves</span>

                        <p>
                            Apoio operacional, logístico e documental.
                        </p>

                    </div>

                </article>

                <!-- 4 -->
                <article class="vehicle-card">

                    <img src="./img/graneleiro.jpg" alt="Graneleiro Químico">

                    <div class="vehicle-content">

                        <h3>Veículos de emergência</h3>

                        <span class="vehicle-quantity">4 veículos</span>

                        <p>
                            Suporte para equipes de resposta rápida a ocorrências.
                        </p>

                    </div>

                </article>

            </div>

        </section>

        <section class="fleet-section-title">
            <h2>TIPOS DE CARGA E PRODUTOS TRANSPORTADOS</h2>
            <p>A escolha do veículo depende da classificação, compatibilidade e exigências de segurança da carga.</p>
        </section>

        <section class="vehicles">
            <div class="container vehicles-grid">
                <!-- 5 -->
                <article class="vehicle-card">

                    <img src="./img/tanque.jpg" alt="Produtos químicos perigosos">

                    <div class="vehicle-content">

                        <h3>Produtos perigosos</h3>

                        <p>
                            Cargas corrosivas e inflamáveis, identificadas conforme sua classe de risco.
                        </p>

                        <ul>
                            <li>Classe 8: ácido sulfúrico, ácido clorídrico e soda cáustica</li>
                            <li>Classe 3: metanol, etanol e solventes</li>
                        </ul>

                    </div>

                </article>

                <!-- 6 -->
                <article class="vehicle-card">

                    <img src="./img/graneleiro.jpg" alt="Fertilizantes, resinas e produtos sólidos">

                    <div class="vehicle-content">

                        <h3>Outros produtos industriais</h3>

                        <p>
                            Transporte em equipamento compatível com as características da carga.
                        </p>

                        <ul>
                            <li>Fertilizantes líquidos</li>
                            <li>Resinas industriais</li>
                            <li>Sólidos: grãos, pós ou produtos embalados</li>
                        </ul>

                    </div>

                </article>

            </div>

        </section>

        <?= 
            require_once "./partial/footer.php";
        ?>
    </body>

</html>
