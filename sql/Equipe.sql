-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 26 Mai 2012 à 11:47
-- Version du serveur: 5.5.22
-- Version de PHP: 5.3.10-1ubuntu3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `petanque`
--

-- --------------------------------------------------------

--
-- Structure de la table `Equipe`
--

DROP TABLE IF EXISTS `Equipe`;
CREATE TABLE IF NOT EXISTS `Equipe` (
  `E_id` int(11) NOT NULL AUTO_INCREMENT,
  `E_nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_roman_ci DEFAULT NULL,
  `E_active` tinyint(4) NOT NULL DEFAULT '1',
  `E_consol` tinyint(4) NOT NULL DEFAULT '0',
  `E_nombre` int(11) NOT NULL,
  `E_j1` int(11) NOT NULL,
  `E_j2` int(11) NOT NULL,
  `E_j3` int(11) DEFAULT '0',
  PRIMARY KEY (`E_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
