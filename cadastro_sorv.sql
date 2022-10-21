-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Set-2022 às 14:47
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_sorv`
--

INSERT INTO `cadastro_sorv` (`id`, `endereco`, `nome`, `numero`, `img`, `data`) VALUES
(1, 'afhk,gkhba,jkahk', 'm,hasfhamfanm', '0978787878', 'recebidos/6329d18a4a181.jpg', '2022-09-20 11:43:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
