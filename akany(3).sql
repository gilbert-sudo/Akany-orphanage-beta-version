-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 07 avr. 2021 à 07:28
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `akany`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad_event`
--

DROP TABLE IF EXISTS `ad_event`;
CREATE TABLE IF NOT EXISTS `ad_event` (
  `id_event` int(250) NOT NULL AUTO_INCREMENT,
  `titre_event` text NOT NULL,
  `date_event` date NOT NULL,
  `time_event` time NOT NULL,
  `description_event` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ad_event`
--

INSERT INTO `ad_event` (`id_event`, `titre_event`, `date_event`, `time_event`, `description_event`, `image`) VALUES
(30, 'fzzf', '2021-04-23', '02:00:00', 'edfzegzeg', 'Screenshot_2021-02-22 Document.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `compte_admin`
--

DROP TABLE IF EXISTS `compte_admin`;
CREATE TABLE IF NOT EXISTS `compte_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `image_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte_admin`
--

INSERT INTO `compte_admin` (`id_admin`, `username_admin`, `password_admin`, `image_admin`) VALUES
(1, 'ata admin', '9cf95dacd226dcf43da376cdb6cbba7035218921', '');

-- --------------------------------------------------------

--
-- Structure de la table `demande_dons`
--

DROP TABLE IF EXISTS `demande_dons`;
CREATE TABLE IF NOT EXISTS `demande_dons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `but` varchar(255) NOT NULL,
  `fond` decimal(65,0) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mailbox`
--

DROP TABLE IF EXISTS `mailbox`;
CREATE TABLE IF NOT EXISTS `mailbox` (
  `id_mail` int(11) NOT NULL AUTO_INCREMENT,
  `name_sender` varchar(255) NOT NULL,
  `email_sender` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_mail`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mailbox`
--

INSERT INTO `mailbox` (`id_mail`, `name_sender`, `email_sender`, `subject`, `message`, `time`) VALUES
(8, 'Nambinintsoa', 'nambs@gmail.com', 'ddfdfd', 'fdfdffffffffffffffffffffffffffffffffffffffffffffffffffff', '2021-03-31 06:11:45');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `id_resp` int(11) NOT NULL AUTO_INCREMENT,
  `nom_resp` varchar(255) NOT NULL,
  `prenom_resp` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_resp`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
