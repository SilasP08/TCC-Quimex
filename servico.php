<?php

session_start();

$base = '/TCC-Quimex/';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solicitar Serviço | Quimex</title>

    <link rel="stylesheet" href="<?php echo $base; ?>css/servico.css">

</head>

<body>


<?php require_once __DIR__ . '/partial/header.php'; ?>


<main class="pagina-servico">

    <section class="servico-container">

        <div class="servico-titulo">

            <span>QUIMEX</span>

            <h1>
                Solicite seu serviço
            </h1>

            <p>
                Preencha o formulário abaixo com as informações
                sobre o transporte que você precisa.
            </p>

        </div>


        <form 
            action="<?php echo $base; ?>function/insert_servico.php" 
            method="POST"
            class="form-servico"
        >


            <!-- SERVIÇO -->

            <div class="campo">

                <label for="servico">
                    Tipo de serviço
                </label>

                <select name="servico" id="servico" required>

                    <option value="">
                        Selecione um serviço
                    </option>

                    <option value="Transporte de produtos químicos">
                        Transporte de produtos químicos
                    </option>

                    <option value="Transporte de produtos industriais">
                        Transporte de produtos industriais
                    </option>

                    <option value="Transporte de cargas especiais">
                        Transporte de cargas especiais
                    </option>

                </select>

            </div>


            <!-- PRODUTO -->

            <div class="campo">

                <label for="produto">
                    Produto químico
                </label>

                <input
                    type="text"
                    name="produto"
                    id="produto"
                    placeholder="Ex: Ácido sulfúrico"
                    required
                >

            </div>


            <!-- LOCAL DE ENTREGA -->

            <div class="campo">

                <label for="local_entrega">
                    Local de entrega
                </label>

                <input
                    type="text"
                    name="local_entrega"
                    id="local_entrega"
                    placeholder="Digite o endereço de entrega"
                    required
                >

            </div>


            <!-- DATA -->

            <div class="campo">

                <label for="data_transporte">
                    Data do transporte
                </label>

                <input
                    type="date"
                    name="data_transporte"
                    id="data_transporte"
                    required
                >

            </div>


            <!-- QUANTIDADE -->

            <div class="campo">

                <label for="quantidade">
                    Quantidade da carga
                </label>

                <input
                    type="text"
                    name="quantidade"
                    id="quantidade"
                    placeholder="Ex: 500 kg"
                    required
                >

            </div>


            <!-- OBSERVAÇÕES -->

            <div class="campo campo-grande">

                <label for="observacoes">
                    Observações
                </label>

                <textarea
                    name="observacoes"
                    id="observacoes"
                    rows="5"
                    placeholder="Digite alguma informação adicional sobre o serviço..."
                ></textarea>

            </div>


            <!-- BOTÃO -->

            <button type="submit" class="btn-solicitar">

                Solicitar serviço

            </button>


        </form>

    </section>

</main>


</body>

</html>