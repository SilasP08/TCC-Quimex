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

CREATE TABLE IF NOT EXISTS formularios (

    id_formulario INT AUTO_INCREMENT PRIMARY KEY,

    id_user INT NULL,

    nome VARCHAR(150) NOT NULL,

    email VARCHAR(150) NOT NULL,

    telefone VARCHAR(20),

    assunto VARCHAR(150) NOT NULL,

    mensagem TEXT NOT NULL,

    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP,

    status ENUM(
        'Pendente',
        'Em atendimento',
        'Respondido'
    ) DEFAULT 'Pendente',

    CONSTRAINT fk_formulario_user
        FOREIGN KEY (id_user)
        REFERENCES users(id_user)
        ON DELETE SET NULL
        ON UPDATE CASCADE

);


-- ============================================
-- FIM DO SCRIPT
-- ============================================