-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/05/2025 às 03:14
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bolsa_de_valores`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `ativo` varchar(10) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_unitario` decimal(10,2) NOT NULL,
  `data_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`id`, `ativo`, `quantidade`, `valor_unitario`, `data_compra`) VALUES
(1, 'UNIALFA', 5, 10.00, '2025-03-14'),
(2, 'UNIALFA', 4, 10.00, '2025-03-14'),
(3, 'UNIALFA', 4, 10.00, '2025-03-14'),
(4, 'UNIALFA', 4, 10.00, '2025-03-14'),
(5, 'UNIALFA', 20, 8.00, '2025-03-21'),
(6, 'UNIALFA', 18, 4.00, '2025-03-21'),
(7, 'CPLE6', 5, 9.00, '2025-03-21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dividendos`
--

CREATE TABLE `dividendos` (
  `id` int(11) NOT NULL,
  `ativo` varchar(10) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data_recebimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dividendos`
--

INSERT INTO `dividendos` (`id`, `ativo`, `valor`, `data_recebimento`) VALUES
(1, 'UNIALFA', 380.00, '2025-03-28'),
(2, 'UNIALFA', 100.00, '2025-03-28'),
(3, 'CPLE6', 800.00, '2025-05-09'),
(4, 'CPLE6', 90.00, '2025-04-16');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dividendos`
--
ALTER TABLE `dividendos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `dividendos`
--
ALTER TABLE `dividendos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE usuarios ( id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL UNIQUE, senha VARCHAR(255) NOT NULL, criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP );