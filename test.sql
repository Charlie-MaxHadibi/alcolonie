-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 11 mars 2024 à 18:21
-- Version du serveur : 10.11.6-MariaDB-0+deb12u1
-- Version de PHP : 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `ID` int(11) NOT NULL,
  `idgame` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `nomphoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `partie`
--

INSERT INTO `partie` (`ID`, `idgame`, `nom`, `nomphoto`) VALUES
(1, 4, 'mateo', 'mateo'),
(2, 4, 'adele', 'adele'),
(3, 4, 'orane', 'orane'),
(4, 4, 'yann', 'yann'),
(5, 4, 'maiwenn', 'maiwenn (6)'),
(6, 4, 'loic', 'loic (3)'),
(7, 4, 'charass', 'charass (4)'),
(8, 4, 'leonie', 'leonie (4)'),
(9, 4, 'fabien', 'fabien (2)'),
(10, 4, 'kiki', 'kiki'),
(11, 4, 'marie', 'marie'),
(12, 4, 'benji', 'benji'),
(13, 4, 'valentin', 'valentin'),
(14, 4, 'louis', 'louis (2)'),
(15, 4, 'tmax', 'tmax (4)'),
(16, 4, 'jg', 'jg');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `ID` int(11) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nomphoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`ID`, `prenom`, `nomphoto`) VALUES
(1, 'adele', 'adele'),
(2, 'adele', 'adele (2)'),
(3, 'adele', 'adele (3)'),
(4, 'axel', 'axel'),
(5, 'axel', 'axel (2)'),
(6, 'benji', 'benji'),
(7, 'benji', 'benji (2)'),
(8, 'charass', 'charass'),
(10, 'charass', 'charass (2)'),
(11, 'charass', 'charass (3)'),
(12, 'charass', 'charass (4)'),
(13, 'cloe', 'cloe'),
(14, 'charass', 'charass (2)'),
(15, 'clotilde', 'clotilde'),
(16, 'enzo', 'enzo'),
(17, 'enzo', 'enzo (2)'),
(18, 'enzo', 'enzo (3)'),
(19, 'enzo', 'enzo (4)'),
(20, 'fabien', 'fabien'),
(21, 'fabien', 'fabien (2)'),
(22, 'fabien', 'fabien (3)'),
(23, 'gaetan', 'gaetan'),
(24, 'jg', 'jg'),
(25, 'kelian', 'kelian'),
(26, 'kiki', 'kiki'),
(27, 'leonie', 'leonie'),
(28, 'leonie', 'leonie (2)'),
(29, 'leonie', 'leonie (3)'),
(30, 'leonie', 'leonie (4)'),
(31, 'leonie', 'leonie (5)'),
(32, 'loic', 'loic'),
(33, 'loic', 'loic (2)'),
(34, 'loic', 'loic (3)'),
(35, 'louis', 'louis'),
(36, 'louis', 'louis (2)'),
(37, 'louis', 'louis (3)'),
(38, 'louna', 'louna'),
(39, 'louna', 'louna (2)'),
(40, 'maiwenn', 'maiwenn'),
(41, 'maiwenn', 'maiwenn (2)'),
(42, 'maiwenn', 'maiwenn (2)'),
(43, 'maiwenn', 'maiwenn (3)'),
(44, 'maiwenn', 'maiwenn (4)'),
(45, 'maiwenn', 'maiwenn (5)'),
(46, 'maiwenn', 'maiwenn (6)'),
(47, 'maiwenn', 'maiwenn (7)'),
(48, 'maiwenn', 'maiwenn (8)'),
(49, 'marie', 'marie'),
(50, 'mateo', 'mateo'),
(51, 'orane', 'orane'),
(52, 'orane', 'orane (2)'),
(53, 'tmax', 'tmax'),
(54, 'tmax', 'tmax (2)'),
(55, 'tmax', 'tmax (3)'),
(56, 'tmax', 'tmax (4)'),
(57, 'yann', 'yann'),
(58, 'valentin', 'valentin'),
(59, 'silane', 'silane');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `partie`
--
ALTER TABLE `partie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
