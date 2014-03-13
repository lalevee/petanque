-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 26 Mai 2012 à 11:48
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
-- Structure de la table `Joueur`
--

DROP TABLE IF EXISTS `Joueur`;
CREATE TABLE IF NOT EXISTS `Joueur` (
  `J_id` int(11) NOT NULL AUTO_INCREMENT,
  `J_equipe` int(11) NOT NULL,
  `J_prenom` varchar(25) NOT NULL,
  `J_nom` varchar(25) NOT NULL,
  `J_mail` varchar(50) NOT NULL,
  `J_bureau` varchar(20) NOT NULL,
  `J_tel` varchar(12) NOT NULL,
  `J_service` varchar(12) DEFAULT NULL,
  `J_asmin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`J_id`),
  UNIQUE KEY `J_nom` (`J_nom`,`J_mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
