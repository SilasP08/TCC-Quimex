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

    <title>Editar Perfil | Quimex</title>

    <link rel="stylesheet" href="/TCC-Quimex/css/editar_perfil.css">

</head>

<body>

<?php require_once '../partial/header.php'; ?>


<main class="pagina-editar">

    <section class="editar-container">

        <div class="titulo-editar">

            <span>QUIMEX</span>

            <h1>Editar perfil</h1>

            <p>
                Altere suas informações pessoais.
            </p>

        </div>


        <form
            action="<?php echo $base; ?>function/update_perfil.php"
            method="POST"
            class="form-editar"
        >

            <input
                type="hidden"
                name="id_user"
                value="<?php echo $usuario['id_user']; ?>"
            >


            <div class="campo">

                <label for="nome">
                    Nome
                </label>

                <input
                    type="text"
                    name="nome"
                    id="nome"
                    value="<?php echo $usuario['nome']; ?>"
                    required
                >

            </div>


            <div class="campo">

                <label for="email">
                    E-mail
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    value="<?php echo $usuario['email']; ?>"
                    required
                >

            </div>


            <div class="campo">

                <label for="telefone">
                    Telefone
                </label>

                <input
                    type="text"
                    name="telefone"
                    id="telefone"
                    value="<?php echo $usuario['telefone']; ?>"
                    required
                >

            </div>


            <div class="campo">

                <label for="cpf_cnpj">
                    CPF / CNPJ
                </label>

                <input
                    type="text"
                    name="cpf_cnpj"
                    id="cpf_cnpj"
                    value="<?php echo $usuario['cpf_cnpj']; ?>"
                    required
                >

            </div>


            <div class="acoes">

                <a
                    href="<?php echo $base; ?>user/perfil.php"
                    class="btn-voltar"
                >
                    Voltar
                </a>

                <button
                    type="submit"
                    class="btn-salvar"
                >
                    Salvar alterações
                </button>

            </div>

        </form>

    </section>

</main>

</body>
</html>