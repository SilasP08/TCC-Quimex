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


-- SOLICITAÇÃO DE EXEMPLO VINCULADA A UM CLIENTE
INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT
    id_user,
    'Transporte de produtos químicos líquidos',
    'Ácido sulfúrico',
    'Campinas - SP',
    DATE_ADD(CURDATE(), INTERVAL 7 DAY),
    '10.000 litros',
    'Solicitação de exemplo para cliente cadastrado.',
    'Em análise'
FROM users
WHERE email = 'silas@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT
    id_user,
    'Transporte de produtos químicos líquidos',
    'Metanol',
    'Curitiba - PR',
    DATE_ADD(CURDATE(), INTERVAL 14 DAY),
    '30.000 litros',
    'Carga inflamável classe 3; carreta-tanque compatível.',
    'Aguardando pagamento'
FROM users
WHERE email = 'joao@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT
    id_user,
    'Transporte de produtos químicos líquidos',
    'Fertilizantes líquidos',
    'Goiânia - GO',
    DATE_ADD(CURDATE(), INTERVAL 21 DAY),
    '18.000 litros',
    'Usar tanque compatível com a classificação do produto.',
    'Separando pedido'
FROM users
WHERE email = 'maria@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT
    id_user,
    'Transporte de produtos químicos líquidos',
    'Resinas industriais',
    'Camaçari - BA',
    DATE_ADD(CURDATE(), INTERVAL 30 DAY),
    '12.000 litros',
    'Definir equipamento após análise de compatibilidade e acondicionamento.',
    'Em análise'
FROM users
WHERE email = 'empresa@quimex.com';


-- SOLICITAÇÕES ADICIONAIS PARA POPULAR A PAGINAÇÃO
INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos líquidos', 'Ácido clorídrico', 'Cubatão - SP', DATE_ADD(CURDATE(), INTERVAL 9 DAY), '8.000 litros', 'Carga corrosiva classe 8.', 'Aguardando pagamento'
FROM users WHERE email = 'silas@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos líquidos', 'Soda cáustica', 'Paulínia - SP', DATE_ADD(CURDATE(), INTERVAL 16 DAY), '15.000 litros', 'Tanque compatível com a carga.', 'Separando pedido'
FROM users WHERE email = 'silas@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de cargas perigosas', 'Etanol', 'Camaçari - BA', DATE_ADD(CURDATE(), INTERVAL 23 DAY), '20.000 litros', 'Carga inflamável classe 3.', 'Em análise'
FROM users WHERE email = 'silas@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos líquidos', 'Etanol', 'Joinville - SC', DATE_ADD(CURDATE(), INTERVAL 28 DAY), '24.000 litros', 'Tanque rodoviário compatível.', 'Em análise'
FROM users WHERE email = 'joao@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de cargas perigosas', 'Solventes', 'Porto Alegre - RS', DATE_ADD(CURDATE(), INTERVAL 35 DAY), '18.000 litros', 'Carga inflamável classe 3.', 'Recusado'
FROM users WHERE email = 'joao@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos líquidos', 'Resinas industriais', 'Cubatão - SP', DATE_ADD(CURDATE(), INTERVAL 42 DAY), '12.000 litros', 'Definir acondicionamento após análise da carga.', 'Aguardando pagamento'
FROM users WHERE email = 'joao@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos líquidos', 'Ácido sulfúrico', 'Campinas - SP', DATE_ADD(CURDATE(), INTERVAL 28 DAY), '9.000 litros', 'Carga corrosiva classe 8.', 'Aguardando pagamento'
FROM users WHERE email = 'maria@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos sólidos', 'Produtos químicos sólidos', 'Cuiabá - MT', DATE_ADD(CURDATE(), INTERVAL 35 DAY), '10.000 kg', 'Carga embalada; confirmar compatibilidade do veículo.', 'Em análise'
FROM users WHERE email = 'maria@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos líquidos', 'Soda cáustica', 'Campo Grande - MS', DATE_ADD(CURDATE(), INTERVAL 42 DAY), '16.000 litros', 'Carga corrosiva classe 8.', 'Separando pedido'
FROM users WHERE email = 'maria@gmail.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de cargas perigosas', 'Metanol', 'Curitiba - PR', DATE_ADD(CURDATE(), INTERVAL 37 DAY), '22.000 litros', 'Carga inflamável classe 3.', 'Separando pedido'
FROM users WHERE email = 'empresa@quimex.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos líquidos', 'Fertilizantes líquidos', 'Goiânia - GO', DATE_ADD(CURDATE(), INTERVAL 44 DAY), '19.000 litros', 'Usar tanque apropriado à classificação.', 'Em análise'
FROM users WHERE email = 'empresa@quimex.com';

INSERT INTO solicitacoes
(id_user, servico, produto, local_entrega, data_transporte, quantidade, observacoes, status)
SELECT id_user, 'Transporte de produtos químicos líquidos', 'Resinas industriais', 'Camaçari - BA', DATE_ADD(CURDATE(), INTERVAL 51 DAY), '14.000 litros', 'Confirmar especificação e compatibilidade do tanque.', 'Aguardando pagamento'
FROM users WHERE email = 'empresa@quimex.com';
