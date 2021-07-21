-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 22 juin 2021 à 11:53
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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ad_event`
--

INSERT INTO `ad_event` (`id_event`, `titre_event`, `date_event`, `time_event`, `description_event`, `image`) VALUES
(35, 'Evenement 3 ', '2022-01-01', '10:00:00', 'Evenement 3 ', 'photo3.jpg'),
(32, 'Evenement 1', '2021-06-26', '10:00:00', 'Evenement 1', 'photo2.jpg'),
(34, 'Evenement 2', '2021-12-25', '10:00:00', 'Evenement 2', 'photo1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id_blog` int(11) NOT NULL AUTO_INCREMENT,
  `object` varchar(255) NOT NULL,
  `contained` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `contained_2` text NOT NULL,
  PRIMARY KEY (`id_blog`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id_blog`, `object`, `contained`, `image`, `contained_2`) VALUES
(10, 'Blog 3', 'Contenue blog 3', 'bg3.jpg', 'Suite contenue blog 3'),
(8, 'Blog 1', 'Contenue blog 1', 'bg1.jpg', 'Suite Contenue blog 1'),
(9, 'Blog 2', 'Contenue blog 2', 'bg2.jpg', 'Suite contenue blog 2');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_coms` int(11) NOT NULL AUTO_INCREMENT,
  `nom_commentateur` varchar(255) NOT NULL,
  `email_commentateur` varchar(255) NOT NULL,
  `compte_facebook` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id_coms`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(1, 'ata admin', '9cf95dacd226dcf43da376cdb6cbba7035218921', '180243.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `number_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `page_facebook` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `address`, `number_phone`, `email`, `page_facebook`) VALUES
(1, 'Akany Tafta/Sahasoa, Lot III T 267 AB ', '+261 32 04 564 06', 'ravoniarisoa@freenet.mg', 'AKANY TAFITA SAHASOA'),
(6, '', '', 'toavina.razafindrakoto@gmail.com', ''),
(7, 'korkgor', '', '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande_dons`
--

INSERT INTO `demande_dons` (`id`, `but`, `fond`, `description`, `images`) VALUES
(10, 'Cause 1', '1000000', 'Cause 1', 'Cause1.jpg'),
(11, 'Cause 2', '200000', 'Cause 2', 'cause2.jpg'),
(12, 'Cause 3', '300000', 'Cause 3', 'cause3.jpg'),
(13, 'Cause 4', '400000', 'Cause 4', 'cause4.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id_services` int(11) NOT NULL AUTO_INCREMENT,
  `types` varchar(250) NOT NULL,
  `commentaires` text NOT NULL,
  `images` varchar(250) NOT NULL,
  PRIMARY KEY (`id_services`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_services`, `types`, `commentaires`, `images`) VALUES
(9, 'Service 1', 'Details service 1', '9-13SportsCar-2.jpg'),
(10, 'Service 2', 'Details service 2', '180134.jpg'),
(11, 'Service 3', 'Detail service 3', '1445857-30913983-2560-1440.jpg'),
(12, 'Service 4', 'Detail service 4', '180190.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id_temoin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_temoin` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `lien_video` text NOT NULL,
  `date_de_publication` datetime NOT NULL DEFAULT current_timestamp(),
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id_temoin`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoin`, `nom_temoin`, `title`, `function`, `lien_video`, `date_de_publication`, `images`) VALUES
(6, 'TÃ©moin 1', 'TÃ©moignage 1 ', 'Exemple fonction 1 ', 'https://www.youtube.com/watch?v=sxgYxA-f8tc', '2021-06-22 11:12:19', 'temoin1.jpg'),
(7, 'TÃ©moin 2', 'TÃ©moignage 2', 'Exemple fonction 2', ' https://www.youtube.com/watch?v=sxgYxA-f8tc', '2021-06-22 11:25:47', 'temoin2.jpg'),
(8, 'TÃ©moin 3', 'TÃ©moignage 3', 'Exemple fonction 3', ' https://www.youtube.com/watch?v=sxgYxA-f8tc', '2021-06-22 11:26:42', 'Temoin3.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
