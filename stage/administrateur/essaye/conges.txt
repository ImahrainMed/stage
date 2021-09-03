-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 sep. 2021 à 18:02
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `conges`
--

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

CREATE TABLE `conge` (
  `id_c` int(11) NOT NULL,
  `date_dep` date NOT NULL,
  `date_f` date NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `Etat` char(20) NOT NULL DEFAULT 'En cours',
  `motif` varchar(100) DEFAULT NULL,
  `cin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`id_c`, `date_dep`, `date_f`, `type`, `Etat`, `motif`, `cin`) VALUES
(7, '2021-07-16', '2021-07-25', 'exception', 'En cours', 'ff', NULL),
(8, '2021-07-16', '2021-07-25', 'exception', 'accepté', 'ff', NULL),
(9, '2021-07-15', '2021-07-17', 'exception', 'refusé', 'h', NULL),
(10, '2021-08-10', '2021-08-26', 'annuelle', 'En cours', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `cin` int(11) NOT NULL,
  `nom` varchar(16) DEFAULT NULL,
  `prenom` varchar(22) DEFAULT NULL,
  `tele` int(10) DEFAULT NULL,
  `fonction` varchar(19) DEFAULT NULL,
  `spec` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `prenom`, `tele`, `fonction`, `spec`) VALUES
(22, 'Abbiouyi', 'Ahmed', 707375446, 'Ingenieur', 'Réseaux informatiqe');

-- --------------------------------------------------------

--
-- Structure de la table `solde`
--

CREATE TABLE `solde` (
  `id_S` int(11) NOT NULL,
  `soldeannuel` int(11) DEFAULT NULL,
  `soldeexception` int(11) DEFAULT NULL,
  `soldeconponsation` int(11) DEFAULT NULL,
  `cin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `passw` varchar(50) DEFAULT NULL,
  `session` varchar(50) DEFAULT NULL,
  `cin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `passw`, `session`, `cin`) VALUES
(7, 'nouha@gmail.com', 'Nouhail@2000', 'employe', NULL),
(10, 'nouhaila@gmail.com', 'fff', 'secritaire generale', NULL),
(11, 'nouha@gmail.com', '1234', 'administrateur', NULL),
(12, 'nouhaila@gmail.com', 'fff', '1', 22),
(13, 'nouhaila@gmail.com', 'fff', 'selectionner', 22);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `conge`
--
ALTER TABLE `conge`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `solde`
--
ALTER TABLE `solde`
  ADD PRIMARY KEY (`id_S`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `conge`
--
ALTER TABLE `conge`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;