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


        <div class="service-facts" aria-label="Informações sobre atendimento e transporte">

            <article class="service-fact">
                <span>Prazo estimado de retorno</span>
                <strong>Até 1 dia útil</strong>
                <p>Previsão para responder solicitações de orçamento.</p>
            </article>

            <article class="service-fact">
                <span>Rotas de referência</span>
                <strong>25 a 1.850 km</strong>
                <p>Paulínia–Campinas: 25 km. Paulínia–Camaçari: 1.850 km.</p>
            </article>

            <article class="service-fact">
                <span>Tipos transportados</span>
                <strong>Líquidos e sólidos</strong>
                <p>Químicos perigosos, fertilizantes e resinas industriais.</p>
            </article>

        </div>


        <form 
            action="<?php echo $base; ?>function/insert_servico.php" 
            method="POST"
            class="form-servico"
            id="form-servico"
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

                    <option value="Transporte de produtos químicos líquidos">
                        Transporte de produtos químicos líquidos
                    </option>

                    <option value="Transporte de produtos químicos sólidos">
                        Transporte de produtos químicos sólidos
                    </option>

                    <option value="Transporte de cargas perigosas">
                        Transporte de cargas perigosas
                    </option>

                    <option value="Armazenagem temporária">
                        Armazenagem temporária
                    </option>

                </select>

            </div>


            <!-- PRODUTO -->

            <div class="campo">

                <label for="produto">
                    Produto ou material para transporte
                </label>

                <input
                    type="text"
                    name="produto"
                    id="produto"
                    list="produtos-quimex"
                    placeholder="Ex: Ácido sulfúrico ou fertilizante líquido"
                    required
                >

                <datalist id="produtos-quimex">
                    <option value="Ácido sulfúrico">
                    <option value="Ácido clorídrico">
                    <option value="Soda cáustica">
                    <option value="Metanol">
                    <option value="Etanol">
                    <option value="Solventes">
                    <option value="Fertilizantes líquidos">
                    <option value="Resinas industriais">
                    <option value="Produtos químicos sólidos">
                </datalist>

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
