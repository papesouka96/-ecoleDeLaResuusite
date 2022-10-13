-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 08 oct. 2022 à 14:31
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `papa`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `idEleve` int(15) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `daten` date NOT NULL,
  `lieun` varchar(10) CHARACTER SET utf16 NOT NULL,
  `classe` varchar(15) NOT NULL,
  `cycle` varchar(15) NOT NULL,
  `login` varchar(25) NOT NULL,
  `motdepass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`idEleve`, `date`, `nom`, `prenom`, `daten`, `lieun`, `classe`, `cycle`, `login`, `motdepass`) VALUES
(1, '2022-10-03', 'pape', 'souka', '2022-10-05', 'dagana', 'cea', 'szec', 'dfggg', ''),
(2, '2022-10-03', 'Diop', 'josephine', '2022-10-13', 'dagana', '3e', 'secondaire', 'soso', ''),
(3, '2022-10-03', 'Diop', 'josephine', '2022-10-13', 'dagana', '3e', 'secondaire', 'soso', ''),
(4, '2022-10-03', 'Diop', 'josephine', '2022-10-13', 'dagana', '3e', 'secondaire', 'soso', ''),
(5, '2022-10-03', 'diouf', 'cheikh', '2022-10-06', 'niakhar', 'fgrg', 'rr', '12', ''),
(6, '2022-10-03', 'diouf', 'cheikh', '2022-10-06', 'niakhar', 'fgrg', 'rr', '12', ''),
(7, '2022-10-03', 'Diop', 'josephine', '2022-10-20', 'dagana', '3e', 'secondaire', 'soso', '1234'),
(8, '2022-10-03', 'pape', 'ndiaye', '2022-10-20', 'niakhar', '3e', 'secondaire', 'ceter', '147'),
(9, '2022-10-03', 'pape', 'ndiaye', '2022-10-14', 'niakhar', '3e', 'szec', 'pito', '1234'),
(10, '2022-10-03', 'ous', 'ndiaye', '2022-10-28', 'dagana', '3e', 'secondaire', 'souka', '159');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 NOT NULL,
  `statut` varchar(15) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(25) CHARACTER SET utf8 NOT NULL,
  `login` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `daten` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `date`, `nom`, `prenom`, `email`, `statut`, `adresse`, `login`, `pass`, `daten`) VALUES
(42, '2022-10-08 13:56:37', 'pape', ' souka        ', 'root@d.p', 'Enseignant', '  swxdgcfhgvj        ', 'souka      ', '159', '2022-10-14'),
(43, '2022-10-08 14:06:18', 'diop', ' josephine', 'soso@glt.com', 'Surveillant', ' keur mbaye fall', ' ', '159', '2022-10-06'),
(44, '2022-10-08 14:14:36', 'penda', 'ndiaye ', 'soso@glt7.com', 'Enseignant', ' keur mbaye fall  ', '   ', '147', '2022-10-14'),
(45, '2022-10-08 14:19:39', 'penda', 'ndiaye    ', 'soso@glt97.com', 'Enseignant', ' keur mbaye fall     ', 'panda ', '123', '2022-10-14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`idEleve`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `idEleve` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
