-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jan-2020 às 04:57
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `starwars`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clima`
--

CREATE TABLE `clima` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clima`
--

INSERT INTO `clima` (`id`, `tipo`) VALUES
(1, 'Temperado'),
(2, 'Arido'),
(3, 'Equatorial'),
(4, 'Tropical'),
(5, 'Subtropical'),
(6, 'Mediterrâneo'),
(7, 'Polar'),
(8, 'Desértico'),
(9, 'Semiárido'),
(10, 'chuva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planeta`
--

CREATE TABLE `planeta` (
  `id_planeta` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `clima` varchar(100) DEFAULT NULL,
  `terreno` varchar(100) DEFAULT NULL,
  `qntfilme` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `planeta`
--

INSERT INTO `planeta` (`id_planeta`, `nome`, `clima`, `terreno`, `qntfilme`) VALUES
(1, 'Coruscant', 'Temperado', 'Urbano', '1'),
(2, 'Estrela da Morte', 'Arido', 'Montanhoso', '3'),
(3, 'Dagobah', 'chuva', 'Cavernas', '5'),
(4, 'Hoth', 'Polar', 'Primário', '6'),
(5, 'Endor', 'Temperado', 'Primário', '7'),
(6, 'Naboo', 'Temperado', 'Florestas', '2'),
(7, 'Tatooine', 'Arido', 'Desértico', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clima`
--
ALTER TABLE `clima`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planeta`
--
ALTER TABLE `planeta`
  ADD PRIMARY KEY (`id_planeta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clima`
--
ALTER TABLE `clima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `planeta`
--
ALTER TABLE `planeta`
  MODIFY `id_planeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
