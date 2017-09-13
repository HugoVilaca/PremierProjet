-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 13 Septembre 2017 à 18:13
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `sport` varchar(255) CHARACTER SET utf8 NOT NULL,
  `rdv` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lieu` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nom_membre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_annonce` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`sport`, `rdv`, `lieu`, `nom_membre`, `date_annonce`, `id`) VALUES
('rdtfgyh', 'dtfyvugjbh', 'azertyu', 'azerty', '2017-05-18', 13),
('rdtfghTFYGU', 'FYGUTFYHV', 'TFCYVHUBJG', 'TYFHVUJBG', '2017-08-24', 14);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `nom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`nom`, `pseudo`, `mail`, `motdepasse`, `id`) VALUES
('hugo', 'hugo', 'hugo@gmail.com', '3faf7ed52fa83d583fc670a96bcf92da270d0767', 1),
('ok', 'ok', 'ok@oko', '7a85f4764bbd6daf1c3545efbbf0f279a6dc0beb', 22),
('youss', 'youss', 'youss@gmail.com', '349fdefda2e3ebacb958e151ef95bfcefafa54f1', 15),
('hugo', 'hugo', 'hugo.slbpt@gmail.com', '3faf7ed52fa83d583fc670a96bcf92da270d0767', 30);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `faible` int(11) NOT NULL,
  `moyen` int(11) NOT NULL,
  `bon` int(11) NOT NULL,
  `confirmé` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
