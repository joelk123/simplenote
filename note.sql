-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Janvier 2017 à 01:00
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `note`
--

-- --------------------------------------------------------

--
-- Structure de la table `simplenote`
--

CREATE TABLE `simplenote` (
  `id` int(2) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `texte` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `simplenote`
--

INSERT INTO `simplenote` (`id`, `titre`, `texte`, `date`) VALUES
(1, 'EI de web', 'pensée du jour', '2017-01-26 00:00:00'),
(2, 'DS de GES', 'c''est pas bon', '2017-01-26 00:00:00'),
(5, 'AOO', 'analyse orientee objet', '2017-01-26 15:01:31');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `simplenote`
--
ALTER TABLE `simplenote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `simplenote`
--
ALTER TABLE `simplenote`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
