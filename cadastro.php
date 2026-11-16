<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro | QUIMEX</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cadastro.css">


</head>

<body>

     <?php
        require_once "./partial/header.php";
    ?>

    <section class="register">

        <div class="overlay"></div>

        <div class="register-box">

            <img src="./img/logo_quimex.png" class="logo">

            <h1>Criar Conta</h1>

            <p>Cadastre-se para utilizar os serviços da QUIMEX.</p>

            <form action="./function/create.php" method="POST">

                <div class="grid">

                    <div class="input-box">

                        <i class="bi bi-person" aria-hidden="true"></i>

                        <input type="text" name="nome" placeholder="Nome Completo">

                    </div>

                    <div class="input-box">

                        <i class="bi bi-envelope" aria-hidden="true"></i>

                        <input type="email" name="email" placeholder="E-mail">

                    </div>

                    <div class="input-box">

                        <i class="bi bi-telephone" aria-hidden="true"></i>

                        <input type="text" name="telefone" placeholder="Telefone">

                    </div>

                    <div class="input-box">

                        <i class="bi bi-person-vcard" aria-hidden="true"></i>

                        <input type="text" name="cpf_cnpj" placeholder="CPF ou CNPJ">

                    </div>

                    <div class="input-box">

                        <i class="bi bi-people" aria-hidden="true"></i>

                        <select name="tipo" required>

                            <option value="" selected disabled>
                                Selecione o tipo de pessoa
                            </option>

                            <option value="PF">
                                Pessoa Física
                            </option>

                            <option value="PJ">
                                Pessoa Jurídica
                            </option>

                        </select>

                        <i class="bi bi-chevron-down select-arrow" aria-hidden="true"></i>

                    </div>

                    <div class="input-box">

                        <i class="bi bi-lock" aria-hidden="true"></i>

                        <input type="password" name="senha" placeholder="Senha">

                    </div>

                </div>

                <button type="submit">

                    Criar Conta

                </button>

            </form>

            <div class="login-link">

                Já possui uma conta?

                <a href="login.php">

                    Entrar

                </a>

            </div>

        </div>

    </section>

</body>

</html>
