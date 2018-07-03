-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03-Jul-2018 às 19:22
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastrosite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionais`
--

DROP TABLE IF EXISTS `profissionais`;
CREATE TABLE IF NOT EXISTS `profissionais` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profissao` varchar(20) NOT NULL,
  `data_nacimento` int(11) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `telefone` varchar(40) NOT NULL,
  `whtasapp` varchar(40) NOT NULL,
  `bairro` varchar(25) DEFAULT NULL,
  `cep` int(15) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `nacionalidade` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `sobrenome` text NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nome`, `email`, `senha`, `sobrenome`) VALUES
(1, 'paulo', 'paulogabrielmarins@outlook.com', 'e10adc3949ba59abbe56e057f20f883e', 'gabriel'),
(2, 'bruninho', 'nil@nil.com', '202cb962ac59075b964b07152d234b70', 'gabriel'),
(3, 'Ariel', 'Ariel@gamil.com', '25f9e794323b453885f5181f1b624d0b', 'Januario'),
(4, 'Carol', 'carolina@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Guimaraes'),
(5, 'Gislene', 'Gislene@hotmail.com', '202cb962ac59075b964b07152d234b70', 'Aparecida'),
(6, 'jony', 'jony@hotmail.com', '202cb962ac59075b964b07152d234b70', 'silva'),
(7, 'Ariel', 'Ariel@outlook.com', '202cb962ac59075b964b07152d234b70', 'Januario'),
(8, 'tocha', 'tochahumano@outlook.com', '202cb962ac59075b964b07152d234b70', 'silva'),
(9, 'paulo', 'aki@outlook.com', '202cb962ac59075b964b07152d234b70', 'gabriel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
