-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 19 fév. 2019 à 17:14
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_planete`
--
CREATE DATABASE IF NOT EXISTS `db_planete` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_planete`;

-- --------------------------------------------------------

--
-- Structure de la table `planete`
--

DROP TABLE IF EXISTS `planete`;
CREATE TABLE `planete` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `diametre` decimal(8,3) DEFAULT NULL,
  `masse` decimal(7,2) DEFAULT NULL,
  `demi_grand_axe` decimal(8,3) DEFAULT NULL,
  `periode_revolution` decimal(7,2) DEFAULT NULL,
  `inclinaison` decimal(8,2) DEFAULT NULL,
  `excentricite` decimal(8,3) DEFAULT NULL,
  `periode_rotation` decimal(7,2) DEFAULT NULL,
  `satellites` int(5) DEFAULT NULL,
  `anneaux` varchar(20) DEFAULT NULL,
  `atmosphere` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `planete`
--
ALTER TABLE `planete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `planete`
--
ALTER TABLE `planete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
