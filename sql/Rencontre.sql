-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 26 Mai 2012 à 11:49
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
-- Structure de la table `Rencontre`
--

DROP TABLE IF EXISTS `Rencontre`;
CREATE TABLE IF NOT EXISTS `Rencontre` (
  `R_id` int(11) NOT NULL AUTO_INCREMENT,
  `M_joue` tinyint(4) NOT NULL,
  `R_consol` tinyint(4) NOT NULL,
  `R_tour` int(11) NOT NULL,
  `R_e1` int(11) NOT NULL,
  `R_score1` int(11) NOT NULL,
  `R_e2` int(11) NOT NULL,
  `R_score2` int(11) NOT NULL,
  PRIMARY KEY (`R_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
