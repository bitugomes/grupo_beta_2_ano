-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Set-2022 às 11:01
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sorvete`
--
CREATE DATABASE IF NOT EXISTS `sorvete` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sorvete`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_sorv`
--

DROP TABLE IF EXISTS `cadastro_sorv`;
CREATE TABLE IF NOT EXISTS `cadastro_sorv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(300) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `img` varchar(300) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_sorv`
--

INSERT INTO `cadastro_sorv` (`id`, `endereco`, `nome`, `numero`, `img`, `data`) VALUES
(1, 'afhk,gkhba,jkahk', 'm,hasfhamfanm', '0978787878', 'recebidos/6329d18a4a181.jpg', '2022-09-20 11:43:22'),
(2, 'Sorveteria de Batata', 'Rua puta que pariu, 90', '99001230103', 'recebidos/6332d1730dd33.jpg', '2022-09-27 07:33:23'),
(3, 'sorveteria nossa alegria sua morte nossa sorria  ', 'Rua puta que pariu, 90', '84463261616984984651', 'recebidos/6332d579937be.jpg', '2022-09-27 07:50:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id_senha` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(300) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id_senha`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id_senha`, `login`, `senha`) VALUES
(1, 'alvaro', '$2y$10$zAXiEoOCWW31J.OYGNn.2eeNYThve4KabLTnpljhrViWnOaw9XgN2'),
(2, 'alvaro', '$2y$10$wRdDepcnfDBE7DjsgCsNSOmf1H2UhIDaQOE/uCBz0o3iKTrm.8SK6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
