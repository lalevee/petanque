-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 22 Avril 2013 à 17:46
-- Version du serveur: 5.1.67
-- Version de PHP: 5.3.2-1ubuntu4.19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `petanque`
--
CREATE DATABASE `petanque` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `petanque`;

-- --------------------------------------------------------

--
-- Structure de la table `Configuration`
--

CREATE TABLE IF NOT EXISTS `Configuration` (
  `c_nom` text CHARACTER SET utf8,
  `c_annee` smallint(4) NOT NULL,
  `c_etat` varchar(3) CHARACTER SET utf8 NOT NULL,
  `c_tour` smallint(6) NOT NULL,
  `c_ieme` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Equipe`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Joueur`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Structure de la table `Rencontre`
--

CREATE TABLE IF NOT EXISTS `Rencontre` (
  `R_id` int(11) NOT NULL AUTO_INCREMENT,
  `R_joue` tinyint(4) NOT NULL,
  `R_consol` tinyint(4) NOT NULL,
  `R_tour` int(11) NOT NULL,
  `R_e1` int(11) NOT NULL,
  `R_score1` int(11) NOT NULL,
  `R_e2` int(11) NOT NULL,
  `R_score2` int(11) NOT NULL,
  PRIMARY KEY (`R_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
