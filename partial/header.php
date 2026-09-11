<?php
$base = '/TCC-Quimex/';

$base = '/TCC-Quimex/';

?>

<link rel="stylesheet" href="<?php echo $base; ?>css/header.css">

<header class="header">

    <div class="logo">
        <a href="<?php echo $base; ?>index.php">
            <img src="<?php echo $base; ?>img/logo_quimex.png" alt="Quimex">
        </a>
    </div>

    <nav class="menu">

        <a href="<?php echo $base; ?>index.php">Início</a>

        <a href="<?php echo $base; ?>sobre.php">Sobre nós</a>

        <a href="<?php echo $base; ?>frota.php">Nossa Frota</a>

        <a href="<?php echo $base; ?>servico.php">Serviços</a>

        <a href="<?php echo $base; ?>contato.php">Contato</a>

    </nav>

    <div class="area-login">

        <?php if (isset($_SESSION['id_user'])): ?>

            <!-- USUÁRIO LOGADO -->

            <button class="foto-perfil" onclick="abrirSidebar()">

                <img 
                    src="<?php echo $base; ?>img/perfil.png" 
                    alt="Perfil"
                >

            </button>

        <?php else: ?>

            <!-- USUÁRIO NÃO LOGADO -->

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


<!-- =====================================
     SIDEBAR DO USUÁRIO
===================================== -->

<?php if (isset($_SESSION['id_user'])): ?>

    <div 
        class="overlay" 
        id="overlay" 
        onclick="fecharSidebar()"
    ></div>

    <aside class="sidebar" id="sidebar">

        <button 
            class="fechar-sidebar" 
            onclick="fecharSidebar()"
        >
            &times;
        </button>


        <div class="perfil-sidebar">

            <img 
                src="<?php echo $base; ?>img/perfil.png" 
                alt="Foto de perfil"
            >

            <h3>
                <?php echo $_SESSION['nome']; ?>
            </h3>

            <p>
                <?php echo $_SESSION['email']; ?>
            </p>

        </div>


        <div class="opcoes-sidebar">

            <a href="<?php echo $base; ?>user/perfil.php">
                
                Meu Perfil
            </a>

            <a href="<?php echo $base; ?>user/pedidos.php">
                <span></span>
                Meus Pedidos
            </a>

            <a 
                href="<?php echo $base; ?>logout.php" 
                class="logout"
            >
                
                Sair
            </a>

        </div>

    </aside>

<?php endif; ?>


<script>

function abrirSidebar() {

    document
        .getElementById("sidebar")
        .classList.add("ativo");

    document
        .getElementById("overlay")
        .classList.add("ativo");

}


function fecharSidebar() {

    document
        .getElementById("sidebar")
        .classList.remove("ativo");

    document
        .getElementById("overlay")
        .classList.remove("ativo");

}

</script>