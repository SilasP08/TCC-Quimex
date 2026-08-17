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
                        A QUIMEX possui uma frota moderna e
                        preparada para atender as mais rigorosas
                        exigências do transporte químico.
                    </p>

                    <p>
                        Nossos veículos passam por inspeções,
                        manutenção preventiva e monitoramento
                        constante para garantir máxima segurança.
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
                VEÍCULOS ESPECIALIZADOS
            </h2>

        </section>



        <!-- VEÍCULOS -->

        <section class="vehicles">

            <div class="container vehicles-grid">

                <!-- 1 -->
                <article class="vehicle-card">

                    <img src="./img/tanque.jpg" alt="Tanque Inox">

                    <div class="vehicle-content">

                        <h3>Tanque Inox</h3>

                        <p>
                            Veículo destinado ao transporte de produtos químicos líquidos corrosivos.
                        </p>

                        <ul>
                            <li>Ácido Sulfúrico</li>
                            <li>Ácido Clorídrico</li>
                            <li>Ácido Fosfórico</li>
                            <li>Soda Cáustica</li>
                        </ul>

                    </div>

                </article>

                <!-- 2 -->
                <article class="vehicle-card">

                    <img src="./img/pressao.jpg" alt="Vaso de Pressão">

                    <div class="vehicle-content">

                        <h3>Vaso de Pressão</h3>

                        <p>
                            Equipamento desenvolvido para transporte seguro de gases industriais.
                        </p>

                        <ul>
                            <li>Amônia Anidra</li>
                            <li>Nitrogênio</li>
                            <li>Dióxido de Carbono</li>
                            <li>GLP Industrial</li>
                        </ul>

                    </div>

                </article>

                <!-- 3 -->
                <article class="vehicle-card">

                    <img src="./img/tanque-alimenticio.jpg" alt="Tanque Alimentício">

                    <div class="vehicle-content">

                        <h3>Tanque Alimentício</h3>

                        <p>
                            Utilizado para líquidos alimentícios que exigem alto padrão sanitário.
                        </p>

                        <ul>
                            <li>Glicose Líquida</li>
                            <li>Óleo Vegetal</li>
                            <li>Xarope de Milho</li>
                            <li>Álcool Alimentício</li>
                        </ul>

                    </div>

                </article>

                <!-- 4 -->
                <article class="vehicle-card">

                    <img src="./img/graneleiro.jpg" alt="Graneleiro Químico">

                    <div class="vehicle-content">

                        <h3>Graneleiro Químico</h3>

                        <p>
                            Indicado para o transporte de produtos químicos sólidos a granel.
                        </p>

                        <ul>
                            <li>Ureia</li>
                            <li>Nitrato de Amônio</li>
                            <li>Sulfato de Amônio</li>
                            <li>Carbonato de Sódio</li>
                        </ul>

                    </div>

                </article>

                <!-- 5 -->
                <article class="vehicle-card">

                    <img src="./img/bitrem-tanque.jfif" alt="Bitrem Tanque">

                    <div class="vehicle-content">

                        <h3>Bitrem Tanque</h3>

                        <p>
                            Grande capacidade para operações de longa distância.
                        </p>

                        <ul>
                            <li>Etanol Industrial</li>
                            <li>Metanol</li>
                            <li>Acetona</li>
                            <li>Tolueno</li>
                        </ul>

                    </div>

                </article>

                <!-- 6 -->
                <article class="vehicle-card">

                    <img src="./img/isotanque.jpg" alt="Isotanque">

                    <div class="vehicle-content">

                        <h3>Container Isotanque</h3>

                        <p>
                            Equipamento para transporte intermodal de produtos químicos especiais.
                        </p>

                        <ul>
                            <li>Peróxido de Hidrogênio</li>
                            <li>Fenol</li>
                            <li>Monoetilenoglicol</li>
                            <li>Ácido Acético</li>
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