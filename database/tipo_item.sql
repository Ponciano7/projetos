-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/11/2018 às 02:45
-- Versão do servidor: 10.1.35-MariaDB
-- Versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `paps-projetos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_item`
--

CREATE TABLE `tipo_item` (
  `numero_item` int(11) NOT NULL,
  `descricao_tipo_item` varchar(200) DEFAULT NULL,
  `natureza_item` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `tipo_item`
--

INSERT INTO `tipo_item` (`numero_item`, `descricao_tipo_item`, `natureza_item`) VALUES
(1, 'Material de Consumo', 'CUSTEIO'),
(2, 'Material Permanente', 'CAPITAL'),
(3, 'Serviço de Terceiros Pessoa Física', 'CUSTEIO'),
(4, 'Serviço de Terceiro Pessoa Jurídica', 'CUSTEIO'),
(5, 'Passagem Nacional', 'CUSTEIO'),
(6, 'Passagem Internacional', 'CUSTEIO'),
(7, 'Diária Nacional', 'CUSTEIO'),
(8, 'Diária Internacional', 'CUSTEIO');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tipo_item`
--
ALTER TABLE `tipo_item`
  ADD PRIMARY KEY (`numero_item`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tipo_item`
--
ALTER TABLE `tipo_item`
  MODIFY `numero_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
