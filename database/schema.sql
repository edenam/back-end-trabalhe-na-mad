-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2016 at 12:51 PM
-- Server version: 5.6.30-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mongeralaegon`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto_categoria`
--

CREATE TABLE IF NOT EXISTS `produto_categoria` (
  `cd_id_produto` int(9) unsigned NOT NULL,
  `cd_id_categoria` int(9) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto_categoria`
--

INSERT INTO `produto_categoria` (`cd_id_produto`, `cd_id_categoria`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_categoria`
--

CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `cd_id` int(9) unsigned NOT NULL,
  `nm_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_categoria`
--

INSERT INTO `tb_categoria` (`cd_id`, `nm_categoria`) VALUES
(1, 'Eletrodoméstimos'),
(2, 'Informática');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produto`
--

CREATE TABLE IF NOT EXISTS `tb_produto` (
  `cd_id` int(9) unsigned NOT NULL,
  `nm_produto` varchar(255) NOT NULL,
  `dt_fabricacao` date NOT NULL,
  `vl_tamanho` decimal(3,2) NOT NULL COMMENT 'Expresso em M,CM',
  `vl_largura` decimal(3,2) NOT NULL COMMENT 'Expresso em M,CM',
  `vl_peso` decimal(4,3) NOT NULL COMMENT 'Expresso em KG,G'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produto`
--

INSERT INTO `tb_produto` (`cd_id`, `nm_produto`, `dt_fabricacao`, `vl_tamanho`, `vl_largura`, `vl_peso`) VALUES
(1, 'asdfasdf', '0000-00-00', 9.99, 9.99, 9.999),
(2, 'teste', '0000-00-00', 9.99, 9.99, 9.999),
(3, 'eden testando', '0000-00-00', 9.99, 9.99, 9.999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD KEY `cd_id_produto` (`cd_id_produto`),
  ADD KEY `cd_id_categoria` (`cd_id_categoria`);

--
-- Indexes for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`cd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `cd_id` int(9) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `cd_id` int(9) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD CONSTRAINT `produto_categoria_ibfk_1` FOREIGN KEY (`cd_id_produto`) REFERENCES `tb_produto` (`cd_id`),
  ADD CONSTRAINT `produto_categoria_ibfk_2` FOREIGN KEY (`cd_id_categoria`) REFERENCES `tb_categoria` (`cd_id`);