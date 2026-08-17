<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
    <header class="header">

        <div class="logo">
            <img src="img/logo_quimex.png" alt="Logo QUIMEX">
        </div>

        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="./sobre.php">Sobre</a>
            <a href="#">Serviços</a>
            <a href="./frota.php">Frota</a>
            <a href="#">Contato</a>
        </nav>

        <div class="header-btn">
            <a href="./login">Login</a>
            <a href="./cadastro">Cadastro</a>
        </div>

    </header>
    <section class="login">

        <div class="overlay"></div>

        <div class="login-box">

            <img src="./img/logo_quimex.png" class="logo">

            <h1>Bem-vindo!</h1>

            <p>
                Faça login para acessar o painel da QUIMEX.
            </p>

            <form>

                <div class="input-box">

                    <i class="fa-solid fa-envelope"></i>

                    <input type="email" placeholder="Digite seu e-mail">

                </div>

                <div class="input-box">

                    <i class="fa-solid fa-lock"></i>

                    <input type="password" placeholder="Digite sua senha">

                </div>

                <button>

                    Entrar

                </button>

            </form>

            <div class="links">

                <a href="#">Esqueceu sua senha?</a>

                <a href="cadastro.php">

                    Criar uma conta

                </a>

            </div>

        </div>

    </section>


</body>

</html>