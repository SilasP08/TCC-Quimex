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

ALTER TABLE users
ADD COLUMN nivel ENUM('cliente', 'admin') DEFAULT 'cliente';

ALTER TABLE solicitacoes
MODIFY status ENUM(
    'Em análise',
    'Aguardando pagamento',
    'Separando pedido',
    'Recusado'
) DEFAULT 'Em análise';

INSERT INTO users
(nome, email, telefone, cpf_cnpj, tipo, senha, nivel, status)
VALUES

('Silas Carvalho',
 'silas@gmail.com',
 '(11) 99999-1111',
 '123.456.789-00',
 'PF',
 '123456',
 'cliente',
 'Ativo'),

('João Silva',
 'joao@gmail.com',
 '(11) 99999-2222',
 '234.567.890-11',
 'PF',
 '123456',
 'cliente',
 'Ativo'),

('Maria Oliveira',
 'maria@gmail.com',
 '(11) 99999-3333',
 '345.678.901-22',
 'PF',
 '123456',
 'cliente',
 'Ativo'),

('Empresa Quimex',
 'empresa@quimex.com',
 '(11) 3333-4444',
 '12.345.678/0001-90',
 'PJ',
 '123456',
 'cliente',
 'Ativo'),

('Administrador Quimex',
 'admin@quimex.com',
 '(11) 99999-5555',
 '456.789.012-33',
 'PF',
 'admin123',
 'admin',
 'Ativo');