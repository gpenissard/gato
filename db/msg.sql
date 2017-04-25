-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 25 Avril 2017 à 15:48
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gato`
--

-- --------------------------------------------------------

--
-- Structure de la table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_heure` datetime NOT NULL,
  `content` varchar(144) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `msg`
--

INSERT INTO `msg` (`id`, `user_id`, `date_heure`, `content`) VALUES
(1, 1, '2017-04-25 11:00:00', 'Premier message'),
(2, 4, '2017-04-25 11:00:00', 'Hey moi aussi'),
(3, 1, '2017-04-25 15:38:27', 'hola'),
(4, 1, '2017-04-25 15:42:23', 'hola'),
(5, 1, '2017-04-25 15:42:27', 'hola'),
(6, 1, '2017-04-25 15:42:28', 'hola'),
(7, 1, '2017-04-25 15:42:29', 'hola'),
(8, 1, '2017-04-25 15:42:29', 'hola'),
(9, 1, '2017-04-25 15:42:29', 'hola'),
(10, 1, '2017-04-25 15:42:29', 'hola');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
