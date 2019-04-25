-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Abr-2019 às 15:55
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
  `senha` varchar(32) NOT NULL,
  `tipo` int(1) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientesformulario`
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
  `situacao` int(1) NOT NULL,
  PRIMARY KEY (`id_cliente_formulario`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `datas`
--

DROP TABLE IF EXISTS `datas`;
CREATE TABLE IF NOT EXISTS `datas` (
  `id_data` int(5) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
