-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2019 at 01:11 AM
-- Server version: 5.7.21
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(120) NOT NULL,
  `senha` varchar(8) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login`, `senha`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_cliente`, `titulo`, `id_horario_data`, `regiao`, `anotacoes`, `compareceu`) VALUES
(6, 36, NULL, 12, 'Axila', NULL, 1),
(7, 37, NULL, 13, 'Axila', NULL, 0),
(8, 38, NULL, 11, 'Axila', NULL, 0),
(9, 39, NULL, 27, 'Axila', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `idade` int(2) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(120) NOT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `idade`, `email`, `telefone`, `senha`) VALUES
(33, 'Edilson', 0, 'eded1263@gmail.com', '11972913914', '6f0450954442d9cfe4ef129d45798975'),
(34, 'bigode', 0, 'bigode@gmail.com', '11972913914', '4edaa105d5f53590338791951e38c3ad'),
(35, 'bruna', 0, 'bruna@gmail.com', '11972913914', '4edaa105d5f53590338791951e38c3ad'),
(36, 'renato', 0, 'renato@gmail.com', '11972913914', '4edaa105d5f53590338791951e38c3ad'),
(38, 'Edilson', 0, 'edilson@gmail.com', '11998075607', '202cb962ac59075b964b07152d234b70'),
(39, 'Letícia ', 17, 'lemayara16@gmail.com', '11998075607', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `clientesformulario`
--

DROP TABLE IF EXISTS `clientesformulario`;
CREATE TABLE IF NOT EXISTS `clientesformulario` (
  `id_cliente_formulario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `idade` int(2) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(120) NOT NULL,
  `fototipo` varchar(3) NOT NULL,
  `corPelo` varchar(8) NOT NULL,
  `roacutan` varchar(32) NOT NULL,
  `cancerVitiligo` varchar(64) NOT NULL,
  `pelo` varchar(32) NOT NULL,
  PRIMARY KEY (`id_cliente_formulario`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientesformulario`
--

INSERT INTO `clientesformulario` (`id_cliente_formulario`, `nome`, `idade`, `email`, `telefone`, `fototipo`, `corPelo`, `roacutan`, `cancerVitiligo`, `pelo`) VALUES
(2, 'flavio', 0, 'fla@gmail.com', '999999', '', '', '', '', ''),
(4, 'edilson', 0, 'edilson@gmail.com', '9999999999', '', '', '', '', ''),
(7, 'andre', 0, 'andre@gmailc.om', '020392039', '', '', '', '', ''),
(8, 'zeca', 0, 'zecaurubu@gmail.com', '0909090909', '', '', '', '', ''),
(18, 'Letícia ', 0, 'lemayara16@gmail.com', '11998075607', '', '', '', '', ''),
(19, 'ricardo', 0, 'rr@email.com', '11', '', '', '', '', ''),
(28, 'Letícia ', 17, 'lele@gmail.com', '11998075607', 'VI', '2', '3', '3', '3'),
(29, 'Letícia', 17, 'l@gmail.com', '11998075607', 'VI', '2', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `datahora`
--

DROP TABLE IF EXISTS `datahora`;
CREATE TABLE IF NOT EXISTS `datahora` (
  `id_horario_data` int(5) NOT NULL AUTO_INCREMENT,
  `id_data` int(5) NOT NULL,
  `horario` time NOT NULL,
  `agendada` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_horario_data`),
  KEY `id_data` (`id_data`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datahora`
--

INSERT INTO `datahora` (`id_horario_data`, `id_data`, `horario`, `agendada`) VALUES
(11, 10, '09:15:00', 1),
(12, 10, '09:35:00', 1),
(13, 10, '10:15:00', 1),
(14, 10, '15:00:00', 0),
(27, 25, '11:00:00', 1),
(28, 25, '12:00:00', 0),
(29, 25, '00:00:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

DROP TABLE IF EXISTS `datas`;
CREATE TABLE IF NOT EXISTS `datas` (
  `id_data` int(5) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id_data`, `data`) VALUES
(10, '2019-04-04'),
(25, '2019-07-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
