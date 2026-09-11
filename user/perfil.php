<?php

session_start();

require_once '../crud.php';

if (!isset($_SESSION['id_user'])) {
    header('Location: ../login.php');
    exit;
}

$base = '/TCC-Quimex/';

$id_user = $_SESSION['id_user'];

$usuario = read(
    $pdo,
    'users',
    "id_user = $id_user"
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Meu Perfil | Quimex</title>

    <link rel="stylesheet" href="/TCC-Quimex/css/perfil.css">

</head>

<body>

<?php require_once '../partial/header.php'; ?>


<main class="pagina-perfil">

    <section class="perfil-container">

        <div class="titulo-perfil">

            <span>QUIMEX</span>

            <h1>Meu Perfil</h1>

            <p>
                Visualize e gerencie suas informações pessoais.
            </p>

        </div>


        <div class="perfil-card">

            <div class="perfil-topo">

                <div class="foto-perfil">

                    <img
                        src="<?php echo $base; ?>img/perfil.png"
                        alt="Foto de perfil"
                    >

                </div>

                <div class="informacoes-principais">

                    <h2>
                        <?php echo $usuario['nome']; ?>
                    </h2>

                    <p>
                        <?php echo $usuario['email']; ?>
                    </p>

                </div>

            </div>


            <div class="informacoes">

                <div class="informacao">

                    <span>Nome</span>

                    <p>
                        <?php echo $usuario['nome']; ?>
                    </p>

                </div>


                <div class="informacao">

                    <span>E-mail</span>

                    <p>
                        <?php echo $usuario['email']; ?>
                    </p>

                </div>


                <div class="informacao">

                    <span>Telefone</span>

                    <p>
                        <?php echo $usuario['telefone']; ?>
                    </p>

                </div>


                <div class="informacao">

                    <span>CPF / CNPJ</span>

                    <p>
                        <?php echo $usuario['cpf_cnpj']; ?>
                    </p>

                </div>


                <div class="informacao">

                    <span>Tipo de cadastro</span>

                    <p>
                        <?php echo $usuario['tipo']; ?>
                    </p>

                </div>


                <div class="informacao">

                    <span>Status</span>

                    <p class="status">
                        <?php echo $usuario['status']; ?>
                    </p>

                </div>

            </div>


            <div class="acoes-perfil">

                <a
                    href="<?php echo $base; ?>user/editar_perfil.php"
                    class="btn-editar"
                >
                    Editar perfil
                </a>

                <a
                    href="<?php echo $base; ?>user/pedidos.php"
                    class="btn-pedidos"
                >
                    Meus pedidos
                </a>

            </div>

        </div>

    </section>

</main>

</body>
</html>