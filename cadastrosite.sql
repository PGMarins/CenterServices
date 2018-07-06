-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jul-2018 às 06:10
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Estrutura da tabela `gp_usuarios`
--

CREATE TABLE `gp_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionais`
--

CREATE TABLE `profissionais` (
  `codigo` int(11) NOT NULL,
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
  `nacionalidade` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `sobrenome` text NOT NULL,
  `id_grupo` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gp_usuarios`
--
ALTER TABLE `gp_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profissionais`
--
ALTER TABLE `profissionais`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gp_usuarios`
--
ALTER TABLE `gp_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profissionais`
--
ALTER TABLE `profissionais`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `gp_usuarios` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
