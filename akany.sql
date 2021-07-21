-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 juin 2021 à 08:24
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `akany`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad_event`
--

CREATE TABLE `ad_event` (
  `id_event` int(250) NOT NULL,
  `titre_event` text NOT NULL,
  `date_event` date NOT NULL,
  `time_event` time NOT NULL,
  `description_event` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `object` varchar(255) NOT NULL,
  `contained` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `contained_2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `commentaires` (
  `id_coms` int(11) NOT NULL,
  `nom_commentateur` varchar(255) NOT NULL,
  `email_commentateur` varchar(255) NOT NULL,
  `compte_facebook` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `id_blog` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_coms`, `nom_commentateur`, `email_commentateur`, `compte_facebook`, `commentaire`, `id_blog`) VALUES
(1, 'Mikajy', 'mika@gmai.com', '', 'Heureux l’homme qui, à la fin de sa vie, ne possède que ce qu’il a donné aux autres. ~ Armando F. Aquierre BLOG 1', 8),
(2, 'Nantenaina', 'ghf@gfh.com', 'mika', 'Je préfère donner que recevoir : c’est comme si ma pauvre existence devenait enfin utile et sublimait ma condition d’humain en me tirant vers le haut. ~ Laurence Maron BLOG 2', 9),
(8, 'baggio', 'b@gmail.Com', 'fbbb', 'andrana blog3', 10),
(9, 'Nanta', 'nanar@gmail.com', '', 'vita ilay coms blog 22222', 9),
(10, 'ranaivo', 'rana@gamil.com', 'fbsd', 'strong ranaivonampoizina blog 3', 10);

-- --------------------------------------------------------

--
-- Structure de la table `compte_admin`
--

CREATE TABLE `compte_admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `image_admin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte_admin`
--

INSERT INTO `compte_admin` (`id_admin`, `username_admin`, `password_admin`, `image_admin`) VALUES
(1, 'ata admin', '9cf95dacd226dcf43da376cdb6cbba7035218921', '180243.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `page_facebook` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `demande_dons` (
  `id` int(11) NOT NULL,
  `but` varchar(255) NOT NULL,
  `fond` decimal(65,0) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande_dons`
--

INSERT INTO `demande_dons` (`id`, `but`, `fond`, `description`, `images`) VALUES
(10, 'Cause 1', '1000000', 'I tell you, whenever you did this for one of the least important of these members of my family, you did this for me!.', 'Cause1.jpg'),
(11, 'Cause 2', '200000', 'I tell you, whenever you did this for one of the least important of these members of my family, you did this for me!.', 'cause2.jpg'),
(12, 'Cause 3', '300000', 'I tell you, whenever you did this for one of the least important of these members of my family, you did this for me!.', 'cause3.jpg'),
(13, 'Cause 4', '400000', 'I tell you, whenever you did this for one of the least important of these members of my family, you did this for me!.', 'cause4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `mailbox`
--

CREATE TABLE `mailbox` (
  `id_mail` int(11) NOT NULL,
  `name_sender` varchar(255) NOT NULL,
  `email_sender` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mailbox`
--

INSERT INTO `mailbox` (`id_mail`, `name_sender`, `email_sender`, `subject`, `message`, `time`) VALUES
(8, 'Nambinintsoa', 'nambs@gmail.com', 'ddfdfd', 'fdfdffffffffffffffffffffffffffffffffffffffffffffffffffff', '2021-03-31 06:11:45');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE `responsable` (
  `id_resp` int(11) NOT NULL,
  `nom_resp` varchar(255) NOT NULL,
  `prenom_resp` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`id_resp`, `nom_resp`, `prenom_resp`, `fonction`, `image`) VALUES
(23, 'RANAIVONAMPOIZINA', 'Gilbert', 'Responsable 1', 'Staff_2.jpg'),
(24, 'RANAIVONAMPOIZINA', 'Gilbert', 'Responsable 2', 'Staff_3.jpg'),
(25, 'RANAIVONAMPOIZINA', 'Gilbert', 'Responsable 3', 'Staff_1.jpg'),
(26, 'RANAIVONAMPOIZINA', 'Gilbert', 'Responsable 4', 'Staff_6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_services` int(11) NOT NULL,
  `types` varchar(250) NOT NULL,
  `commentaires` text NOT NULL,
  `images` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `temoignage` (
  `id_temoin` int(11) NOT NULL,
  `nom_temoin` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `lien_video` text NOT NULL,
  `date_de_publication` datetime NOT NULL DEFAULT current_timestamp(),
  `images` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoin`, `nom_temoin`, `title`, `function`, `lien_video`, `date_de_publication`, `images`) VALUES
(6, 'Témoin 1', 'Témoignage 1 ', '', 'https://www.youtube.com/watch?v=sxgYxA-f8tc', '2021-06-22 11:12:19', 'IMG_4276.jpg'),
(7, 'Témoin 2', 'Témoignage 2', '', ' https://www.youtube.com/watch?v=sxgYxA-f8tc', '2021-06-22 11:25:47', '_MG_4290.jpg'),
(8, 'Témoin 3', 'Témoignage 3', '', ' https://www.youtube.com/watch?v=sxgYxA-f8tc', '2021-06-22 11:26:42', 'IMG_4005.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ad_event`
--
ALTER TABLE `ad_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_coms`);

--
-- Index pour la table `compte_admin`
--
ALTER TABLE `compte_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `demande_dons`
--
ALTER TABLE `demande_dons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mailbox`
--
ALTER TABLE `mailbox`
  ADD PRIMARY KEY (`id_mail`);

--
-- Index pour la table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id_resp`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_services`);

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id_temoin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ad_event`
--
ALTER TABLE `ad_event`
  MODIFY `id_event` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_coms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `compte_admin`
--
ALTER TABLE `compte_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `demande_dons`
--
ALTER TABLE `demande_dons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `mailbox`
--
ALTER TABLE `mailbox`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_resp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id_temoin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
