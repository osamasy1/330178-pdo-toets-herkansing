-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2022 at 12:29 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_toets_herkansing`
--

-- --------------------------------------------------------

--
-- Table structure for table `burrito`
--

DROP TABLE IF EXISTS `burrito`;
CREATE TABLE IF NOT EXISTS `burrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `burritoformaat` varchar(50) NOT NULL,
  `saus` varchar(50) NOT NULL,
  `bonen` varchar(50) NOT NULL,
  `rijst` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burrito`
--

INSERT INTO `burrito` (`id`, `burritoformaat`, `saus`, `bonen`, `rijst`) VALUES
(2, '25', 'Salsa_crudo', 'Kidney Bonen', 'Bruine_rijst');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
