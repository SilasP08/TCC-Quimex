<?php

require_once '../crud.php';

$add = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'telefone' => $_POST['telefone'],
    'cpf_cnpj' => $_POST['cpf_cnpj'],
    'tipo' => $_POST['tipo'],
    'senha' => $_POST['senha']
];

create($pdo, 'users', $add);

header('Location: ../login.php');