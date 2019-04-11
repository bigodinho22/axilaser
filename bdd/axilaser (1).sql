-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Abr-2019 às 17:26
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axilaser`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(120) NOT NULL,
  `senha` varchar(8) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`login`, `senha`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(5) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(5) NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `data` varchar(120) NOT NULL,
  `horario` varchar(120) NOT NULL,
  `regiao` varchar(120) NOT NULL,
  `anotacoes` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id_agenda`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_cliente`, `titulo`, `data`, `horario`, `regiao`, `anotacoes`) VALUES
(3, 4, NULL, '05/04/2019', '', 'Axila', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(120) NOT NULL,
  `senha` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `email`, `telefone`, `senha`) VALUES
(1, 'Letícia ', 'lele@gmail.com', '11998075607', '123'),
(3, 'Jeisianny', 'jeisianny@hotmail.com', '11961888008', NULL),
(4, 'Erick', 'eriksallis@hotmai.lcom', '11961884117', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `datahora`
--

DROP TABLE IF EXISTS `datahora`;
CREATE TABLE IF NOT EXISTS `datahora` (
  `id_horario_data` int(5) NOT NULL AUTO_INCREMENT,
  `id_data` int(5) NOT NULL,
  `horario` varchar(120) NOT NULL,
  `agendada` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_horario_data`),
  KEY `id_data` (`id_data`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `datahora`
--

INSERT INTO `datahora` (`id_horario_data`, `id_data`, `horario`, `agendada`) VALUES
(7, 11, ' 12:00', 0),
(6, 11, '11:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `datas`
--

DROP TABLE IF EXISTS `datas`;
CREATE TABLE IF NOT EXISTS `datas` (
  `id_data` int(5) NOT NULL AUTO_INCREMENT,
  `data` varchar(120) NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `datas`
--

INSERT INTO `datas` (`id_data`, `data`) VALUES
(11, ' 06/04/2019'),
(10, '05/04/2019');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
