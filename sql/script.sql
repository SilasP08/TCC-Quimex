-- ============================================
-- BANCO DE DADOS - QUIMEX
-- ============================================

-- Criação do banco
CREATE DATABASE IF NOT EXISTS db_quimex;


-- Seleciona o banco
USE db_quimex;


-- ============================================
-- TABELA DE USUÁRIOS
-- ============================================

CREATE TABLE IF NOT EXISTS users (

    id_user INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(150) NOT NULL,

    email VARCHAR(150) NOT NULL UNIQUE,

    telefone VARCHAR(20) NOT NULL,

    cpf_cnpj VARCHAR(20) NOT NULL UNIQUE,

    tipo ENUM('PF', 'PJ') NOT NULL,

    senha VARCHAR(255) NOT NULL,

    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,

    status ENUM('Ativo', 'Inativo') DEFAULT 'Ativo'

);


-- ============================================
-- TABELA DE FORMULÁRIOS
-- ============================================

CREATE TABLE solicitacoes (
    id_solicitacao INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    servico VARCHAR(150) NOT NULL,
    produto VARCHAR(150) NOT NULL,
    local_entrega VARCHAR(255) NOT NULL,
    data_transporte DATE NOT NULL,
    quantidade VARCHAR(100),
    observacoes TEXT,
    status ENUM('Aguardando pagamento',
    'Separando pedido',
    'Em transporte',
    'Concluído',
    'Cancelado')
        DEFAULT 'Aguardando pagamento',
    data_solicitacao DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_user)
    REFERENCES users(id_user)
    ON DELETE CASCADE
);

-- ============================================
-- FIM DO SCRIPT
-- ============================================