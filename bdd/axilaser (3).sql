-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Abr-2019 às 17:56
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

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
  `id_horario_data` int(11) NOT NULL,
  `regiao` varchar(120) NOT NULL,
  `anotacoes` varchar(120) DEFAULT NULL,
  `compareceu` int(1) NOT NULL,
  PRIMARY KEY (`id_agenda`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_cliente`, `titulo`, `id_horario_data`, `regiao`, `anotacoes`, `compareceu`) VALUES
(6, 36, NULL, 12, 'Axila', NULL, 1);

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
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `email`, `telefone`, `senha`) VALUES
(33, 'Edilson', 'eded1263@gmail.com', '11972913914', '6f0450954442d9cfe4ef129d45798975'),
(34, 'bigode', 'bigode@gmail.com', '11972913914', '4edaa105d5f53590338791951e38c3ad'),
(35, 'bruna', 'bruna@gmail.com', '11972913914', '4edaa105d5f53590338791951e38c3ad'),
(36, 'renato', 'renato@gmail.com', '11972913914', '4edaa105d5f53590338791951e38c3ad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientesformulario`
--

DROP TABLE IF EXISTS `clientesformulario`;
CREATE TABLE IF NOT EXISTS `clientesformulario` (
  `id_cliente_formulario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(120) NOT NULL,
  PRIMARY KEY (`id_cliente_formulario`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientesformulario`
--

INSERT INTO `clientesformulario` (`id_cliente_formulario`, `nome`, `email`, `telefone`) VALUES
(1, 'teste', 'teste@gmail.com', '999999999'),
(2, 'flavio', 'fla@gmail.com', '999999'),
(3, '', '', ''),
(4, 'edilson', 'edilson@gmail.com', '9999999999'),
(5, 'Bigode', 'bigo@gmail.com', '9999999'),
(6, 'Bigode', 'bigo@gmail.com', '9999999'),
(7, 'andre', 'andre@gmailc.om', '020392039'),
(8, 'zeca', 'zecaurubu@gmail.com', '0909090909'),
(9, 'edilson', 'arroba@gmail.com', '1298182'),
(10, 'Doido', 'doido@gmail.com', '901920192');

-- --------------------------------------------------------

--
-- Estrutura da tabela `datahora`
--

DROP TABLE IF EXISTS `datahora`;
CREATE TABLE IF NOT EXISTS `datahora` (
  `id_horario_data` int(5) NOT NULL AUTO_INCREMENT,
  `id_data` int(5) NOT NULL,
  `horario` time NOT NULL,
  `agendada` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_horario_data`),
  KEY `id_data` (`id_data`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `datahora`
--

INSERT INTO `datahora` (`id_horario_data`, `id_data`, `horario`, `agendada`) VALUES
(11, 10, '09:15:00', 0),
(12, 10, '09:35:00', 1),
(13, 10, '10:15:00', 0),
(14, 10, '15:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `datas`
--

DROP TABLE IF EXISTS `datas`;
CREATE TABLE IF NOT EXISTS `datas` (
  `id_data` int(5) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `datas`
--

INSERT INTO `datas` (`id_data`, `data`) VALUES
(10, '2019-04-04'),
(24, '2019-04-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
