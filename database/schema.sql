-- Arquivo gerado para inicializar o banco do sistema de Investimentos
-- Não modifique manualmente sem necessidade.

CREATE DATABASE IF NOT EXISTS bolsa_de_valores;
USE bolsa_de_valores;

DROP TABLE IF EXISTS compras;
CREATE TABLE compras (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ativo VARCHAR(10) NOT NULL,
  quantidade INT NOT NULL,
  valor_unitario DECIMAL(10,2) NOT NULL,
  data_compra DATE NOT NULL
);

INSERT INTO compras (ativo, quantidade, valor_unitario, data_compra) VALUES
('UNIALFA', 5, 10.00, '2025-03-14'),
('UNIALFA', 4, 10.00, '2025-03-14'),
('UNIALFA', 4, 10.00, '2025-03-14'),
('UNIALFA', 4, 10.00, '2025-03-14'),
('UNIALFA', 20, 8.00, '2025-03-21'),
('UNIALFA', 18, 4.00, '2025-03-21'),
('CPLE6', 5, 9.00, '2025-03-21');

DROP TABLE IF EXISTS dividendos;
CREATE TABLE dividendos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ativo VARCHAR(10) NOT NULL,
  valor DECIMAL(10,2) NOT NULL,
  data_recebimento DATE NOT NULL
);

INSERT INTO dividendos (ativo, valor, data_recebimento) VALUES
('UNIALFA', 380.00, '2025-03-28'),
('UNIALFA', 100.00, '2025-03-28'),
('CPLE6', 800.00, '2025-05-09'),
('CPLE6', 90.00, '2025-04-16');

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(255) NOT NULL,
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
