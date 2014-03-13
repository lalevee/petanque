-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 26 Mai 2012 à 11:46
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
-- Structure de la table `Configuration`
--

DROP TABLE IF EXISTS `Configuration`;
CREATE TABLE IF NOT EXISTS `Configuration` (
  `c_nom` text CHARACTER SET utf8,
  `c_annee` smallint(4) NOT NULL,
  `c_etat` varchar(3) CHARACTER SET utf8 NOT NULL,
  `c_tour` smallint(6) NOT NULL,
  `c_ieme` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
