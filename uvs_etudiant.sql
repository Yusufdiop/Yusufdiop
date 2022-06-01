-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 jan. 2022 à 14:09
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `uvs_etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `INE` varchar(20) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELEPHONE` int(11) NOT NULL,
  `GENRE` varchar(50) NOT NULL,
  PRIMARY KEY (`INE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`INE`, `NOM`, `PRENOM`, `EMAIL`, `TELEPHONE`, `GENRE`) VALUES
('N0020221', 'FALL', 'Bachir', 'bachir.fall@test.com', 777777774, 'masculin'),
('N0020222', 'NDIAYE', 'Fatou', 'fatou.ndiaye@test.com', 777777773, 'feminin'),
('N0020211', 'DIOP', 'Modou', 'modou.diop@test.com', 777777777, 'masculin'),
('N0020212', 'FALL', 'Ndeye', 'ndeye.fall@test.com', 777777771, 'feminin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
