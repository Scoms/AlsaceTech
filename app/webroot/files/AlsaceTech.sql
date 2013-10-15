-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 15 Octobre 2013 à 20:31
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
-- Structure de la table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conf_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Contenu de la table `bookings`
--

INSERT INTO `bookings` (`id`, `conf_id`, `user_id`) VALUES
(78, 2, 6),
(79, 4, 6),
(80, 18, 6),
(81, 13, 6);

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `link1` varchar(200) NOT NULL,
  `link2` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Contenu de la table `companies`
--

INSERT INTO `companies` (`id`, `label`, `link1`, `link2`) VALUES
(1, 'ABASE EUROPE', '', ''),
(2, 'Accenture', '', ''),
(3, 'ACTED', '', ''),
(4, 'AFIJ', '', ''),
(5, 'ALDES AERAULIQUE', '', ''),
(6, 'ALTEN', '', ''),
(7, 'ALTRAN', '', ''),
(8, 'Apave Alsacienne SAS', '', ''),
(9, 'APEC', '', ''),
(10, 'ARISAL', '', ''),
(11, 'ARMEE DE L''AIR', '', ''),
(12, 'ARMEE DE TERRE', '', ''),
(13, 'ARTELIA', '', ''),
(14, 'ASSYSTEM France', '', ''),
(15, 'Atos', '', ''),
(16, 'ATRYA', '', ''),
(17, 'AXENS SA', '', ''),
(18, 'AXON'' CABLE SAS', '', ''),
(19, 'BADISCHE STAHLWERKE GMBH', '', ''),
(20, 'BASF', '', ''),
(21, 'BLIQUE GAWLITTA', '', ''),
(22, 'BOUYGUES CONTRUCTION', '', ''),
(23, 'BREI', '', ''),
(24, 'BUREAU VERITAS', '', ''),
(25, 'Campustudy.com', '', ''),
(26, 'CAPGEMINI', '', ''),
(27, 'CASTORAMA', '', ''),
(28, 'CEA', '', ''),
(29, 'CGI', '', ''),
(30, 'CLEMESSY', '', ''),
(31, 'COLAS', '', ''),
(32, 'CONSTELLIUM FRANCE', '', ''),
(33, 'CONSTANTINI SARL', '', ''),
(34, 'CREDIT AGRICOLE ALSACE VOSGES', '', ''),
(35, 'CREDIT MUTUEL - EURO INFORMATION', '', ''),
(36, 'CRYOSTAR SAS', '', ''),
(37, 'Decathlon', '', ''),
(38, 'DECATHLON LOGISTIQUE', '', ''),
(39, 'Demathieu Bard', '', ''),
(40, 'Mars Chocolat France', '', ''),
(41, 'meilleurs-entreprises.com', '', ''),
(42, 'MESSIER - BUGATTI - DOWTY', '', ''),
(43, 'Movvijob', '', ''),
(44, 'NGE', '', ''),
(45, 'NOVATRIS', '', ''),
(46, 'Orange', '', ''),
(47, 'ORTEC Groupe', '', ''),
(48, 'Osiatis', '', ''),
(49, 'PLASTIC OMNIUM', '', ''),
(50, 'PROEVOLUTIUON', '', ''),
(51, 'QUALICONSULT', '', ''),
(52, 'SAINT GOBAIN PAM', '', ''),
(53, 'SALM (SCMIDT - CUISINELLA)', '', ''),
(54, 'SAS BRUCKERT', '', ''),
(55, 'Schaeffer France', '', ''),
(56, 'SCHILLER MEDICAL SAS', '', ''),
(57, 'SIEMENS', '', ''),
(58, 'SNCF', '', ''),
(59, 'SOCOMEC', '', ''),
(60, 'SODEXO', '', ''),
(61, 'SOLVAY', '', ''),
(62, 'SOLYSTIC SAS', '', ''),
(63, 'SOPRA GROUP', '', ''),
(64, 'Spie Batignolles Est', '', ''),
(65, 'SPIE EST', '', ''),
(66, 'StudyramaEmploie', '', ''),
(67, 'Technology and Strategy', '', ''),
(68, 'The Dow Chemical Company', '', ''),
(69, 'Total SA', '', ''),
(70, 'TRALUX', '', ''),
(71, 'ubifrance', '', ''),
(72, 'Universite de Strasbourg / Espace Avenir', '', ''),
(73, 'Dogfinance', '', ''),
(74, 'Eco-Emballages', '', ''),
(75, 'EDF', '', ''),
(76, 'EIFFAGE CONSTRUCTION', '', ''),
(77, 'EIFFAGE ENERGIE', '', ''),
(78, 'EMERSON PROCESS MANAGEMENT SAS', '', ''),
(79, 'ES GEOTHERMIE', '', ''),
(80, 'EstJob', '', ''),
(81, 'ETEL S.A', '', ''),
(82, 'ETENA - Pole de l''entrepreneurait Etudiants Alsaci', '', ''),
(83, 'EURES-T-Rhinsuperieur', '', ''),
(84, 'EUROVIA', '', ''),
(85, 'FAURECIA', '', ''),
(86, 'FEDEEH', '', ''),
(87, 'GDF SUEZ ENERGIE SERVICES', '', ''),
(88, 'Gendarmerie Nationale', '', ''),
(89, 'Goodyear dunlop tires operations', '', ''),
(90, 'GUARDIAN EUROPA', '', ''),
(91, 'hager electro sas', '', ''),
(92, 'HANPLOI', '', ''),
(93, 'Initek', '', ''),
(94, 'JOHNSON&JOHNSON', '', ''),
(95, 'Juniors Alsace Tech', '', ''),
(96, 'KUHN SA', '', ''),
(97, 'Le Moniteur Emploi', '', ''),
(98, 'Leon Grosse', '', ''),
(99, 'LEROY MERLIN FRANCE', '', ''),
(100, 'LIDL', '', ''),
(101, 'MANAGING', '', ''),
(102, 'Marine nationale', '', ''),
(103, 'Valeo Gmbh', '', ''),
(104, 'Vallee de l''Energie', '', ''),
(105, 'VEOLIA ENVIRONNEMENT', '', ''),
(106, 'VINCI Construction France', '', ''),
(107, 'VINCI ENERGIES France Est', '', ''),
(108, 'XSeon Engineering GmbH / XS Word SARL', '', ''),
(109, 'Yupeek SARL', '', ''),
(110, 'VIVERIS', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `school`, `created`, `modified`, `password`) VALUES
(6, 'Laurent', 'Wieser', 'wieser.laurent@gmail.com', 'ENSIIE Strasbourg', '2013-10-14 11:53:25', '2013-10-15 20:26:00', '152ff7a56361bd1d737e578a49b42a4f427255e4'),
(7, 'a', 'a', 'audrey.arth@hotmail.com', 'a', '2013-10-14 11:56:59', '2013-10-14 11:56:59', '152ff7a56361bd1d737e578a49b42a4f427255e4'),
(8, 'a', 'a', 'audrey.arth@hotmail.fr', 'a', '2013-10-14 12:04:04', '2013-10-15 14:05:05', '152ff7a56361bd1d737e578a49b42a4f427255e4'),
(20, '', '', '', '', '2013-10-15 13:52:05', '2013-10-15 13:52:06', ''),
(21, '', '', '', '', '2013-10-15 13:54:14', '2013-10-15 13:54:14', '');

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

INSERT INTO `users_companies` (`user_id`, `company_id`, `id`) VALUES
(6, 1, 0),
(8, 1, 0),
(6, 2, 0),
(6, 3, 0),
(6, 9, 0),
(6, 8, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
