<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$base = '/TCC-Quimex/';

$logado = isset($_SESSION['id_user']);

$nivel = '';

if ($logado && isset($_SESSION['nivel'])) {
    $nivel = $_SESSION['nivel'];
}


?>

<link rel="stylesheet" href="<?php echo $base; ?>css/header.css">


<header class="header">

    <!-- LOGO -->

    <div class="logo">

        <a href="<?php echo $base; ?>index.php">

            <img
                src="<?php echo $base; ?>img/logo_quimex.png"
                alt="Quimex"
            >

        </a>

    </div>


    <!-- MENU -->

   <?php if ($logado && $nivel === 'admin'): ?>

        <!-- MENU DO ADMIN -->

        <nav class="menu">

            <a href="<?php echo $base; ?>admin/admin.php">
                Dashboard
            </a>

            <a href="<?php echo $base; ?>admin/contratos.php">
                Contratos
            </a>

            <a href="<?php echo $base; ?>index.php">
                Voltar ao site
            </a>

        </nav>

    <?php else: ?>

        <!-- MENU NORMAL -->

        <nav class="menu">

            <a href="<?php echo $base; ?>index.php">
                Início
            </a>

            <a href="<?php echo $base; ?>sobre.php">
                Sobre nós
            </a>

            <a href="<?php echo $base; ?>frota.php">
                Nossa Frota
            </a>

            <a href="<?php echo $base; ?>servico.php">
                Serviços
            </a>

            <a href="<?php echo $base; ?>contato.php">
                Contato
            </a>

        </nav>

    <?php endif; ?>


    <!-- ÁREA DO USUÁRIO -->

    <div class="area-login">

        <?php if ($logado): ?>

            <button
                type="button"
                class="foto-perfil"
                onclick="abrirSidebar()"
            >

                <img
                    src="<?php echo $base; ?>img/perfil.png"
                    alt="Perfil"
                >

            </button>

        <?php else: ?>

            <a
                href="<?php echo $base; ?>login.php"
                class="btn-login"
            >
                Entrar
            </a>

            <a
                href="<?php echo $base; ?>cadastro.php"
                class="btn-cadastro"
            >
                Cadastro
            </a>

        <?php endif; ?>

    </div>

</header>


<?php if ($logado): ?>

    <!-- OVERLAY -->

    <div
        class="overlay"
        id="overlay"
        onclick="fecharSidebar()"
    ></div>


    <!-- SIDEBAR -->

    <aside
        class="sidebar"
        id="sidebar"
    >

        <button
            type="button"
            class="fechar-sidebar"
            onclick="fecharSidebar()"
        >
            &times;
        </button>


        <!-- INFORMAÇÕES DO USUÁRIO -->

        <div class="perfil-sidebar">

            <img
                src="<?php echo $base; ?>img/perfil.png"
                alt="Foto de perfil"
            >

            <h3>
                <?php echo htmlspecialchars($_SESSION['nome']); ?>
            </h3>

            <p>
                <?php echo htmlspecialchars($_SESSION['email']); ?>
            </p>

        </div>


        <!-- OPÇÕES -->

        <div class="opcoes-sidebar">

            <?php if ($logado && $nivel === 'admin'): ?>

                <!-- ADMIN -->

                <a href="<?php echo $base; ?>admin/admin.php">

                    <i class="bi bi-speedometer2" aria-hidden="true"></i>

                    Dashboard

                </a>


                <a href="<?php echo $base; ?>admin/contratos.php">

                    <i class="bi bi-list-check" aria-hidden="true"></i>

                    Contratos

                </a>


                <a href="<?php echo $base; ?>index.php">

                    <i class="bi bi-globe2" aria-hidden="true"></i>

                    Voltar ao site

                </a>


            <?php else: ?>

                <!-- CLIENTE -->

                <a href="<?php echo $base; ?>user/perfil.php">

                    <i class="bi bi-person" aria-hidden="true"></i>

                    Meu Perfil

                </a>


                <a href="<?php echo $base; ?>user/pedidos.php">

                    <i class="bi bi-receipt" aria-hidden="true"></i>

                    Meus Pedidos

                </a>

            <?php endif; ?>


            <!-- LOGOUT -->

            <a
                href="<?php echo $base; ?>logout.php"
                class="logout"
            >

                <i class="bi bi-box-arrow-right" aria-hidden="true"></i>

                Sair

            </a>

        </div>

    </aside>


    <script>

        function abrirSidebar() {

            document
                .getElementById('sidebar')
                .classList.add('ativo');

            document
                .getElementById('overlay')
                .classList.add('ativo');

        }


        function fecharSidebar() {

            document
                .getElementById('sidebar')
                .classList.remove('ativo');

            document
                .getElementById('overlay')
                .classList.remove('ativo');

        }

    </script>

<?php endif; ?>
