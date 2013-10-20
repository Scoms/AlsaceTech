-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 18 Octobre 2013 à 10:32
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `AlsaceTech`
--

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `label` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `activities`
--

INSERT INTO `activities` (`id`, `type`, `label`) VALUES
(1, 'autre', 'Village des entrepreneurs'),
(2, 'autre', 'Parcours de l''innovation'),
(5, 'emploi', 'Correction CV et lettres de motivation en Francais (stand Apec,Afij, Espace Avenir, Est Job)'),
(6, 'emploi', 'Correction CV en Anglais'),
(7, 'emploi', 'Correction CV en Allemand, et informations sur l''emploi en Allemagne et en Suisse'),
(8, 'emploi', 'Simulation d''entretien avec des cabinets de recrutements'),
(9, 'emploi', 'Analyse de l''e-reputation aupres de YuPeek et DogFinance');

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conf_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Contenu de la table `bookings`
--

/*INSERT INTO `bookings` (`id`, `conf_id`, `user_id`) VALUES
(78, 2, 6),
(80, 18, 6),
(81, 13, 6),
(82, 15, 6),
(83, 4, 6),
(84, 4, 22),
(85, 15, 22),
(86, 4, 59),
(87, 15, 59);*/

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `link1` varchar(200) NOT NULL,
  `link2` varchar(200) NOT NULL,
  `category` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Contenu de la table `companies`
--

INSERT INTO `companies` (`id`, `label`, `link1`, `link2`, `category`) VALUES
(1, 'ABASE EUROPE', '', '', 'INFORMATIQ'),
(2, 'Accenture', '', '', 'INFORMATIQ'),
(3, 'ACTED', '', '', 'ENERGIE'),
(4, 'AFIJ', '', '', ''),
(5, 'ALDES AERAULIQUE', '', '', 'CONSTRUCTI'),
(6, 'ALTEN', '', '', 'BANQUE'),
(7, 'ALTRAN', '', '', 'BANQUE'),
(8, 'Apave Alsacienne SAS', '', '', 'CONSTRUCTI'),
(9, 'APEC', '', '', ''),
(10, 'ARISAL', '', '', ''),
(11, 'ARMEE DE L''AIR', '', '', 'PUBLIC'),
(12, 'ARMEE DE TERRE', '', '', 'PUBLIC'),
(13, 'ARTELIA', '', '', 'ENERGIE'),
(14, 'ASSYSTEM France', '', '', 'ENERGIE'),
(15, 'Atos', '', '', 'INFORMATIQ'),
(16, 'ATRYA', '', '', 'CONSTRUCTI'),
(17, 'AXENS SA', '', '', 'ENERGIE'),
(18, 'AXON'' CABLE SAS', '', '', 'TRANSPORT'),
(19, 'BADISCHE STAHLWERKE GMBH', '', '', 'TRANSPORT'),
(20, 'BASF', '', '', 'ENERGIE'),
(21, 'BLIQUE GAWLITTA', '', '', 'BANQUE'),
(22, 'BOUYGUES CONTRUCTION', '', '', 'CONSTRUCTI'),
(23, 'BREI', '', '', ''),
(24, 'BUREAU VERITAS', '', '', ''),
(25, 'Campustudy.com', '', '', ''),
(26, 'CAPGEMINI', '', '', 'INFORMATIQ'),
(27, 'CASTORAMA', '', '', 'AGRO'),
(28, 'CEA', '', '', 'ENERGIE'),
(29, 'CGI', '', '', 'INFORMATIQ'),
(30, 'CLEMESSY', '', '', 'ENERGIE'),
(31, 'COLAS', '', '', 'CONSTRUCTI'),
(32, 'CONSTELLIUM FRANCE', '', '', 'CONSTRUCTI'),
(33, 'CONSTANTINI SARL', '', '', 'CONSTRUCTI'),
(34, 'CREDIT AGRICOLE ALSACE VOSGES', '', '', 'BANQUE'),
(35, 'CREDIT MUTUEL - EURO INFORMATION', '', '', 'BANQUE'),
(36, 'CRYOSTAR SAS', '', '', 'ENERGIE'),
(37, 'Decathlon', '', '', 'AGRO'),
(38, 'DECATHLON LOGISTIQUE', '', '', 'AGRO'),
(39, 'Demathieu Bard', '', '', 'CONSTRUCTI'),
(40, 'Mars Chocolat France', '', '', 'AGRO'),
(41, 'meilleurs-entreprises.com', '', '', ''),
(42, 'MESSIER - BUGATTI - DOWTY', '', '', 'TRANSPORT'),
(43, 'Movvijob', '', '', ''),
(44, 'NGE', '', '', 'CONSTRUCTI'),
(45, 'NOVATRIS', '', '', 'ENERGIE'),
(46, 'Orange', '', '', 'INFORMATIQ'),
(47, 'ORTEC Groupe', '', '', 'ENERGIE'),
(48, 'Osiatis', '', '', 'INFORMATIQ'),
(49, 'PLASTIC OMNIUM', '', '', 'TRANSPORT'),
(50, 'PROEVOLUTIUON', '', '', ''),
(51, 'QUALICONSULT', '', '', 'CONSTRUCTI'),
(52, 'SAINT GOBAIN PAM', '', '', 'ENERGIE'),
(53, 'SALM (SCMIDT - CUISINELLA)', '', '', 'AGRO'),
(54, 'SAS BURKERT', '', '', 'ENERGIE'),
(55, 'Schaeffer France', '', '', 'TRANSPORT'),
(56, 'SCHILLER MEDICAL SAS', '', '', 'INFORMATIQ'),
(57, 'SIEMENS', '', '', 'INFORMATIQ'),
(58, 'SNCF', '', '', 'TRANSPORT'),
(59, 'SOCOMEC', '', '', 'INFORMATIQ'),
(60, 'SODEXO', '', '', 'AGRO'),
(61, 'SOLVAY', '', '', 'ENERGIE'),
(62, 'SOLYSTIC SAS', '', '', 'TRANSPORT'),
(63, 'SOPRA GROUP', '', '', 'INFORMATIQ'),
(64, 'Spie Batignolles Est', '', '', 'CONSTRUCTI'),
(65, 'SPIE EST', '', '', 'INFORMATIQ'),
(66, 'StudyramaEmploie', '', '', ''),
(67, 'Technology and Strategy', '', '', 'INFORMATIQ'),
(68, 'The Dow Chemical Company', '', '', 'ENERGIE'),
(69, 'Total SA', '', '', 'ENERGIE'),
(70, 'TRALUX', '', '', 'CONSTRUCTI'),
(71, 'ubifrance', '', '', 'PUBLIC'),
(72, 'Universite de Strasbourg / Espace Avenir', '', '', ''),
(73, 'Dogfinance', '', '', ''),
(74, 'Eco-Emballages', '', '', 'ENERGIE'),
(75, 'EDF', '', '', 'ENERGIE'),
(76, 'EIFFAGE CONSTRUCTION', '', '', 'CONSTRUCTI'),
(77, 'EIFFAGE ENERGIE', '', '', 'ENERGIE'),
(78, 'EMERSON PROCESS MANAGEMENT SAS', '', '', 'TRANSPORT'),
(79, 'ES GEOTHERMIE', '', '', 'ENERGIE'),
(80, 'EstJob', '', '', ''),
(81, 'ETEL S.A', '', '', 'TRANSPORT'),
(82, 'ETENA - Pole de l''entrepreneurait Etudiants Alsaci', '', '', ''),
(83, 'EURES-T-Rhinsuperieur', '', '', ''),
(84, 'EUROVIA', '', '', 'CONSTRUCTI'),
(85, 'FAURECIA', '', '', 'TRANSPORT'),
(86, 'FEDEEH', '', '', ''),
(87, 'GDF SUEZ ENERGIE SERVICES', '', '', 'ENERGIE'),
(88, 'Gendarmerie Nationale', '', '', 'PUBLIC'),
(89, 'Goodyear dunlop tires operations', '', '', 'TRANSPORT'),
(90, 'GUARDIAN EUROPA', '', '', 'ENERGIE'),
(91, 'hager electro sas', '', '', 'INFORMATIQ'),
(92, 'HANPLOI', '', '', ''),
(93, 'Initek', '', '', 'INFORMATIQ'),
(94, 'JOHNSON&JOHNSON', '', '', 'ENERGIE'),
(95, 'Juniors Alsace Tech', '', '', ''),
(96, 'KUHN SA', '', '', 'TRANSPORT'),
(97, 'Le Moniteur Emploi', '', '', ''),
(98, 'Leon Grosse', '', '', 'CONSTRUCTI'),
(99, 'LEROY MERLIN FRANCE', '', '', 'AGRO'),
(100, 'LIDL', '', '', 'AGRO'),
(101, 'MANAGING', '', '', ''),
(102, 'Marine nationale', '', '', 'PUBLIC'),
(103, 'Valeo Gmbh', '', '', 'TRANSPORT'),
(104, 'Vallee de l''Energie', '', '', 'ENERGIE'),
(105, 'VEOLIA ENVIRONNEMENT', '', '', 'ENERGIE'),
(106, 'VINCI Construction France', '', '', 'CONSTRUCTI'),
(107, 'VINCI ENERGIES France Est', '', '', 'CONSTRUCTI'),
(108, 'XSeon Engineering GmbH / XS Word SARL', '', '', 'BANQUE'),
(109, 'Yupeek SARL', '', '', ''),
(110, 'VIVERIS', '', '', 'INFORMATIQ');

-- --------------------------------------------------------

--
-- Structure de la table `confs`
--

CREATE TABLE IF NOT EXISTS `confs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `label` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `confs`
--

INSERT INTO `confs` (`id`, `start`, `end`, `label`, `description`, `type`) VALUES
(1, '10:15:00', '11:00:00', 'Technique et recherche d''emploi : APEC', '', 'G'),
(2, '11:05:00', '11:35:00', 'Mobilité internationale', 'Retour d''expérience d''un étudiant ayant effectué un stage/année d''étude à l''étranger (10 min).\nPrésentation d''Ubifrance (10 min).\nPrésentation des aides (10 min) : "boussole" par Région Alsace (aide financière) et spécificité d''une candidature en Allemagne, Suisse par ArbeitsAgentur/Eures.  \n', 'G'),
(3, '10:00:00', '10:45:00', 'BTP', '', 'M'),
(4, '10:00:00', '10:45:00', 'Energie/ Eau/ Déchets', '', 'M'),
(5, '10:55:00', '11:40:00', 'Industrie/ Plasturgie/ Matériaux', '', 'M'),
(6, '10:55:00', '11:40:00', 'Marketing/ RH/ Finance/ Logistique', '', 'M'),
(7, '11:50:00', '12:35:00', 'Label', '', 'M'),
(8, '11:50:00', '12:35:00', 'Chimie/ Biochimie/ Formulation/ Médicaments', '', ''),
(9, '14:00:00', '14:45:00', 'Industrie', '', 'M'),
(10, '14:00:00', '14:45:00', 'Energie/ Eau/ Déchets', '', 'M'),
(11, '14:55:00', '15:40:00', 'Marketing/ RH/ Finance/ Logistique', '', 'M'),
(12, '14:55:00', '15:40:00', 'Chimie/ Biochimie/ Formulation/ Médicaments', '', 'M'),
(13, '15:50:00', '16:35:00', 'Rénovation/ Réhabilitation/ Construction de bâtiments', '', 'M'),
(14, '15:50:00', '16:35:00', 'Biotechnologie/ Santé/ Médicaments', '', 'M'),
(15, '11:40:00', '12:40:00', 'Double compétence', '', 'G'),
(16, '13:00:00', '14:00:00', 'A la rencontre d''entrepreneurs', '', 'G'),
(17, '14:10:00', '15:10:00', 'Double compétence', '', 'G'),
(18, '15:15:00', '15:45:00', 'Mobilité internationale', '', 'G'),
(19, '15:50:00', '16:35:00', 'Techniques de recherche d''emploi', '', 'G');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `school` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Contenu de la table `users`
--

/*INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `school`, `created`, `modified`, `password`) VALUES
(6, 'Laurent', 'Wieser', 'wieser.laurent@gmail.com', 'ENSIIE Strasbourg', '2013-10-14 11:53:25', '2013-10-18 10:31:12', '152ff7a56361bd1d737e578a49b42a4f427255e4'),
(7, 'a', 'a', 'audrey.arth@hotmail.com', 'a', '2013-10-14 11:56:59', '2013-10-14 11:56:59', '152ff7a56361bd1d737e578a49b42a4f427255e4'),
(8, 'a', 'a', 'audrey.arth@hotmail.fr', 'a', '2013-10-14 12:04:04', '2013-10-15 14:05:05', '152ff7a56361bd1d737e578a49b42a4f427255e4'),
(22, 'Laurent', 'wieser', 'laurentwieser@hotmail.com', 'aaaa', '2013-10-16 11:11:09', '2013-10-16 12:37:37', 'df900066921b8638f5598db8d163deda5cb5cd57'),
(23, 'a', 'a', 'bonjour@ok.com', 'a', '2013-10-16 11:11:56', '2013-10-16 11:11:56', '152ff7a56361bd1d737e578a49b42a4f427255e4');*/

-- --------------------------------------------------------

--
-- Structure de la table `users_activities`
--

CREATE TABLE IF NOT EXISTS `users_activities` (
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_activities`
--

/*INSERT INTO `users_activities` (`user_id`, `activity_id`) VALUES
(22, 5),
(22, 7),
(53, 5),
(53, 7),
(53, 1),
(53, 2),
(54, 5),
(54, 7),
(54, 1),
(55, 5),
(55, 7),
(22, 1),
(56, 5),
(56, 7),
(56, 1),
(56, 2),
(57, 5),
(57, 7),
(57, 1),
(57, 2),
(59, 6),
(62, 6),
(62, 1),
(62, 2),
(59, 2);*/

-- --------------------------------------------------------

--
-- Structure de la table `users_companies`
--

CREATE TABLE IF NOT EXISTS `users_companies` (
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_companies`
--

/*INSERT INTO `users_companies` (`user_id`, `company_id`, `id`) VALUES
(8, 1, 0),
(22, 1, 0),
(22, 2, 0),
(22, 89, 0),
(22, 91, 0),
(59, 5, 0),
(59, 8, 0),
(59, 9, 0),
(6, 43, 0),
(6, 83, 0);*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
