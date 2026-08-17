<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro | QUIMEX</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cadastro.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

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

                        <i class="fa-solid fa-user"></i>

                        <input type="text" name="nome" placeholder="Nome Completo">

                    </div>

                    <div class="input-box">

                        <i class="fa-solid fa-envelope"></i>

                        <input type="email" name="email" placeholder="E-mail">

                    </div>

                    <div class="input-box">

                        <i class="fa-solid fa-phone"></i>

                        <input type="text" name="telefone" placeholder="Telefone">

                    </div>

                    <div class="input-box">

                        <i class="fa-solid fa-id-card"></i>

                        <input type="text" name="cpf_cnpj" placeholder="CPF ou CNPJ">

                    </div>

                    <div class="input-box">

                        <i class="fa-solid fa-user-group"></i>

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

                        <i class="fa-solid fa-chevron-down select-arrow"></i>

                    </div>

                    <div class="input-box">

                        <i class="fa-solid fa-lock"></i>

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