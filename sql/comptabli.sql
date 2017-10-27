-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 27 Octobre 2017 à 18:05
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `comptabli`
--

-- --------------------------------------------------------

--
-- Structure de la table `cabinet`
--

CREATE TABLE IF NOT EXISTS `cabinet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `responsable` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `colaborators`
--

CREATE TABLE IF NOT EXISTS `colaborators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `lastlogin` varchar(256) NOT NULL,
  `cabinet` int(11) NOT NULL,
  `hire_date` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cabinet` (`cabinet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tache` int(11) NOT NULL,
  `id_colaborator` int(11) NOT NULL,
  `description` text NOT NULL,
  `dateupdate` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `missions`
--

CREATE TABLE IF NOT EXISTS `missions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `author` int(11) NOT NULL,
  `dateupdate` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `mission_colaborator`
--

CREATE TABLE IF NOT EXISTS `mission_colaborator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mission` int(11) NOT NULL,
  `id_colaborator` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_mission` (`id_mission`),
  KEY `id_colaborator` (`id_colaborator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `oauth2_access_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth2_access_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D247A21B5F37A13B` (`token`),
  KEY `IDX_D247A21B19EB6921` (`client_id`),
  KEY `IDX_D247A21BA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `oauth2_access_tokens`
--

INSERT INTO `oauth2_access_tokens` (`id`, `client_id`, `user_id`, `token`, `expires_at`, `scope`) VALUES
(1, 1, 1, 'OThlMmY0ZDY2NDU2Yjg5MzU2NmYzZWMzY2RjZDdjZDRjZjFhY2M4Y2JmMzA3NTQ5MzkyMWNlMTIwMjk5MzRmMg', 1508760943, NULL),
(2, 1, 1, 'MWEyZDEyZDY1Nzg4NTkxOGM1YjRhMWZkZGQ3MGM0YTkwNTI2OGFhYmEwMWE5M2I4ZGQ1MGRmMzdiZjFmYzQwZQ', 1508840820, NULL),
(3, 1, 1, 'OTQ5ZjY5NzkyODkyNzUzMDI4ZTdiYzVhMjViNjc1YThiYTFkZGI4YjZjNjk1OTM5NmExN2Q1MmMwOGEwYmE4Yg', 1508942820, NULL),
(4, 1, 1, 'NDZhYTA5ZWNmNzNlNWFjODBhNGViYjMxYjAyNDI0NTRiNzlkOTMxMWM1NTk4ZjczOWI1ZGQ1YWViYjY4YThiMQ', 1508943102, NULL),
(5, 1, NULL, 'MThhZmFkYjM1ZTgxMTAzYTFiMTkxZmEzY2I2ZWYzMjcwNjcxM2ZmMWUwNDhlZDRhMDM4NTAwMmY3NzQ1NTk3Mw', 1508945233, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `oauth2_auth_codes`
--

CREATE TABLE IF NOT EXISTS `oauth2_auth_codes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uri` longtext COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A018A10D5F37A13B` (`token`),
  KEY `IDX_A018A10D19EB6921` (`client_id`),
  KEY `IDX_A018A10DA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `oauth2_clients`
--

CREATE TABLE IF NOT EXISTS `oauth2_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uris` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allowed_grant_types` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `oauth2_clients`
--

INSERT INTO `oauth2_clients` (`id`, `random_id`, `redirect_uris`, `secret`, `allowed_grant_types`) VALUES
(1, '3bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4', 'a:0:{}', '4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k', 'a:1:{i:0;s:13:"refresh_token";}');

-- --------------------------------------------------------

--
-- Structure de la table `oauth2_refresh_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth2_refresh_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D394478C5F37A13B` (`token`),
  KEY `IDX_D394478C19EB6921` (`client_id`),
  KEY `IDX_D394478CA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `oauth2_refresh_tokens`
--

INSERT INTO `oauth2_refresh_tokens` (`id`, `client_id`, `user_id`, `token`, `expires_at`, `scope`) VALUES
(1, 1, 1, 'NDJkN2M4ZGJiYjg1YzMxOTE3YzJjMjI4MmI5YjMwMTU5NDc4OGU1ZmUxOGEyZjY1Y2UxYmYzYzA5NzEzZWI5Zg', 1509966943, NULL),
(2, 1, 1, 'ZmQ2ODVlZTI3MGQzOTQwOGUxMDIwNGFlNGUxMDRmOGE0NjEzMDIwOTM4YmM5ODNlYTVkYjU4NzVjYTY1NWY0NA', 1510046821, NULL),
(3, 1, 1, 'YTc5MGU0ZGZiNzBmYTVjNzIwODJlOTIwNmEwYWEzNjI2OTdlODc1ZjRmYzY4ZDRiOTY3YWMyZDk1ZDJjOWNhMQ', 1510148821, NULL),
(4, 1, 1, 'NjFhNWZiZGE2MDQzYzU2NjMxM2U0MjVmZGQ2MTNlODIxYzI4NTcwMTA3M2M1ZTEzYTlkNmZiZDQ4YzM4NjY2Ng', 1510149102, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE IF NOT EXISTS `taches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mission_colab` int(11) NOT NULL,
  `titre` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `begindate` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_mission_colab` (`id_mission_colab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9C05FB297` (`confirmation_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'admin', 'admin', 'admin@example.com', 'admin@example.com', 1, 'q3RCSE/IvsKT9PdLVSFmw62MlyB.JVlR3yKiSSw8gTo', 'iEFWoNqCWX0H5KUOq7kPjJbRcdQTpUi/4mlo3ScbQNuo8rRwkWqUxHJfj12R62eDyxSdz22qLt67ZPLOwjV0+w==', NULL, NULL, NULL, 'a:0:{}');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `colaborators`
--
ALTER TABLE `colaborators`
  ADD CONSTRAINT `colaborators_ibfk_1` FOREIGN KEY (`cabinet`) REFERENCES `cabinet` (`id`);

--
-- Contraintes pour la table `mission_colaborator`
--
ALTER TABLE `mission_colaborator`
  ADD CONSTRAINT `mission_colaborator_ibfk_2` FOREIGN KEY (`id_colaborator`) REFERENCES `colaborators` (`id`),
  ADD CONSTRAINT `mission_colaborator_ibfk_1` FOREIGN KEY (`id_mission`) REFERENCES `missions` (`id`);

--
-- Contraintes pour la table `oauth2_access_tokens`
--
ALTER TABLE `oauth2_access_tokens`
  ADD CONSTRAINT `FK_D247A21B19EB6921` FOREIGN KEY (`client_id`) REFERENCES `oauth2_clients` (`id`),
  ADD CONSTRAINT `FK_D247A21BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `oauth2_auth_codes`
--
ALTER TABLE `oauth2_auth_codes`
  ADD CONSTRAINT `FK_A018A10D19EB6921` FOREIGN KEY (`client_id`) REFERENCES `oauth2_clients` (`id`),
  ADD CONSTRAINT `FK_A018A10DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `oauth2_refresh_tokens`
--
ALTER TABLE `oauth2_refresh_tokens`
  ADD CONSTRAINT `FK_D394478C19EB6921` FOREIGN KEY (`client_id`) REFERENCES `oauth2_clients` (`id`),
  ADD CONSTRAINT `FK_D394478CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `taches_ibfk_1` FOREIGN KEY (`id_mission_colab`) REFERENCES `mission_colaborator` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
