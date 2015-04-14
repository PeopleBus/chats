-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 14 Avril 2015 à 16:19
-- Version du serveur: 5.5.41-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sondage`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `position` int(10) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `photoname` varchar(255) DEFAULT NULL,
  `phonenumber1` varchar(255) DEFAULT NULL,
  `phonenumber2` varchar(255) DEFAULT NULL,
  `total_vote` int(10) NOT NULL,
  `actual_work` varchar(255) DEFAULT NULL,
  `history` varchar(20000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `candidates`
--

INSERT INTO `candidates` (`id`, `position`, `lastname`, `firstname`, `email`, `birthdate`, `photoname`, `phonenumber1`, `phonenumber2`, `total_vote`, `actual_work`, `history`) VALUES
(1, 0, 'GNASSINGBE', 'Essozina Faure', NULL, NULL, 'fg.jpg', NULL, NULL, 0, NULL, 'feg ...'),
(2, 0, 'FABRE', 'Jean-Pierre', NULL, NULL, 'jpf.jpg', NULL, NULL, 0, NULL, 'jpf ...'),
(3, 0, 'GUOGUE', 'Aimé', NULL, NULL, 'ag.jpg', NULL, NULL, 0, NULL, 'ag ...'),
(4, 0, 'TCHASSONA-TRAORE', 'Mohamed', NULL, NULL, 'mtt.jpg', NULL, NULL, 0, NULL, 'mtt ...'),
(5, 0, 'TAMAA', 'Gerry ', NULL, NULL, 'gt.jpg', NULL, NULL, 0, NULL, 'gt ...'),
(6, 0, '', 'ABSTENTION', NULL, NULL, 'home.jpg', NULL, NULL, 0, NULL, 'bn ...');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` varchar(255) NOT NULL,
  `name_lang_key` varchar(255) NOT NULL,
  `desc_lang_key` varchar(255) NOT NULL,
  `sort` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `desc_lang_key` (`desc_lang_key`),
  UNIQUE KEY `name_lang_key` (`name_lang_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `modules`
--

INSERT INTO `modules` (`id`, `name_lang_key`, `desc_lang_key`, `sort`) VALUES
('config', 'module_config', 'module_config_desc', 100);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) CHARACTER SET utf32 NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('7c1d34b4fcebfd08c4d7eb2cf3af0720', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/41.0.2272.76 Chrome/41.0.2272.76 ', 1429010878, ''),
('b6352e54bfd7f03bb797989942613d82', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/41.0.2272.76 Chrome/41.0.2272.76 ', 1429009962, ''),
('bd9ce12e67ba490ce855fc8eec1cdfa9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/41.0.2272.76 Chrome/41.0.2272.76 ', 1429021504, ''),
('e5cc926d70c33160832a239a800a174b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/41.0.2272.76 Chrome/41.0.2272.76 ', 1429008580, ''),
('f365baf15b5693443d664597b41066d6', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/41.0.2272.76 Chrome/41.0.2272.76 ', 1429010425, '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phonenumber1` varchar(255) DEFAULT NULL,
  `phonenumber2` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `candidate_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `comment` text,
  `vote_date` date DEFAULT NULL,
  `diaspora` int(1) DEFAULT NULL,
  PRIMARY KEY (`candidate_id`,`user_id`),
  KEY `votes_ibfk2` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk1` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`session_id`);

--
-- Contraintes pour la table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`),
  ADD CONSTRAINT `votes_ibfk2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
