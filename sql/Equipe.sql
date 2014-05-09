-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 13 Mars 2014 à 17:58
-- Version du serveur: 5.1.73
-- Version de PHP: 5.3.2-1ubuntu4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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

CREATE TABLE IF NOT EXISTS `Equipe` (
  `E_id` int(11) NOT NULL AUTO_INCREMENT,
  `E_rang` int(11) NOT NULL,
  `E_nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_roman_ci DEFAULT NULL,
  `E_active` tinyint(4) NOT NULL DEFAULT '1',
  `E_consol` tinyint(4) NOT NULL DEFAULT '0',
  `E_nombre` int(11) NOT NULL,
  `E_j1` int(11) NOT NULL,
  `E_j2` int(11) NOT NULL,
  `E_j3` int(11) DEFAULT '0',
  `E_j4` int(11) DEFAULT '0',
  PRIMARY KEY (`E_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
