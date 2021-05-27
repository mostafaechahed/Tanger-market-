-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 mai 2021 à 15:54
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loccar`
--

-- --------------------------------------------------------

--
-- Structure de la table `automobile`
--

CREATE TABLE `automobile` (
  `IMM` varchar(30) NOT NULL,
  `MARQUE` varchar(30) NOT NULL,
  `PRXLOCA` int(11) NOT NULL,
  `NOMV` varchar(300) NOT NULL,
  `PHOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `automobile`
--

INSERT INTO `automobile` (`IMM`, `MARQUE`, `PRXLOCA`, `NOMV`, `PHOTO`) VALUES
('045J9', 'CHEVROLLET', 5001, 'chevrollet', 'images/'),
('20JK76', 'RENAULT', 300, 'renault', 'images/renault.jpeg'),
('40D125', 'WOSLWAGEN', 1200, 'fiat', 'images/wolsvagen.jpg'),
('587H8904', 'FIAT', 2000, 'fiat', 'images/fiat500.jpg'),
('587H89046', 'Mazerati', 4007, 'mazerati', 'images/mazerati.png'),
('613L09', 'TESLA', 4000, 'tesla', 'images/tesla.jpg'),
('66F1245', 'MERCEDES', 1000, 'mercedes', 'images/mercedes.JPG'),
('85JH987', 'LAMBORGHINI', 1800, 'lamborghini', 'images/Lamborghini.jpg'),
('98Z6789', 'LOGAN', 400, 'logan', 'images/logan.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `login` varchar(200) NOT NULL,
  `motpass` varchar(200) NOT NULL,
  `my_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`login`, `motpass`, `my_photo`) VALUES
('mostafa echahed', '222222', 'images/moi.jpg'),
('tarek benchikh', '111111', 'images/logo.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`IMM`,`MARQUE`,`PRXLOCA`,`PHOTO`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
