-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 05 fév. 2023 à 16:37
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
-- Base de données : `db_polygone`
--
CREATE DATABASE IF NOT EXISTS `db_polygone` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_polygone`;

-- --------------------------------------------------------

--
-- Structure de la table `polygone`
--

DROP TABLE IF EXISTS `polygone`;
CREATE TABLE `polygone` (
  `id_polygone` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `polygone`
--

INSERT INTO `polygone` (`id_polygone`, `nom`) VALUES
(1, 'hénagone ou monogone'),
(2, 'digone'),
(3, 'triangle ou trigone'),
(4, 'quadrilatère ou tétragone'),
(5, 'pentagone'),
(6, 'hexagone'),
(7, 'heptagone'),
(8, 'octogone'),
(9, 'ennéagone ou nonagone'),
(10, 'décagone'),
(11, 'hendécagone'),
(12, 'dodécagone'),
(13, 'triskaidécagone ou tridécagone'),
(14, 'tétrakaidécagone ou tétradécagone, quadridécagone'),
(15, 'pentakaidécagone ou pentadécagone, quidécagone'),
(16, 'hexakaidécagone ou hexadécagone'),
(17, 'heptakaidécagone ou heptadécagone'),
(18, 'octakaidécagone ou octadécagone'),
(19, 'ennéakaidécagone ou ennéadécagone'),
(20, 'icosagone'),
(21, 'icosikaihenagone ou henicosagone'),
(22, 'icosikaidigone ou doicosagone'),
(23, 'icosikaitrigone ou triaicosagone'),
(24, 'icosikaitétragone ou tétraicosagone'),
(25, 'icosikaipentagone ou pentaicosagone'),
(26, 'icosikaihexagone ou hexaicosagone'),
(27, 'icosikaiheptagone ou heptaicosagone'),
(28, 'icosikaioctagone ou octaicosagone'),
(29, 'icosikaiennéagone ou ennéaicosagone'),
(30, 'triacontagone'),
(31, 'triacontakaihenagone ou hentriacontagone'),
(32, 'triacontakaidigone ou dotriacontagone'),
(33, 'triacontakaitrigone ou tritriacontagone'),
(34, 'triacontakaitétragone ou tétratriacontagone'),
(35, 'triacontakaipentagone ou pentatriacontagone'),
(36, 'triacontakaihexagone ou hexatriacontagone'),
(37, 'triacontakaiheptagone ou heptatriacontagone'),
(38, 'triacontakaioctogone ou octatriacontagone'),
(39, 'triacontakaiennégone ou ennéatriacontagone'),
(40, 'tétracontagone'),
(50, 'pentacontagone'),
(60, 'hexacontagone'),
(70, 'heptacontagone'),
(80, 'octacontagone'),
(90, 'ennéacontagone'),
(100, 'hectogone ou hécatontagone'),
(200, 'dihectogone'),
(300, 'trihectogone'),
(400, 'tétrahectogone'),
(500, 'pentahectogone'),
(600, 'hexahectogone'),
(700, 'heptahectogone'),
(800, 'octahectogone'),
(900, 'ennéahectogone'),
(1000, 'chiliogone ou chiliagone ou chiligone'),
(10000, 'myriagone ou myriogone');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `polygone`
--
ALTER TABLE `polygone`
  ADD PRIMARY KEY (`id_polygone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `polygone`
--
ALTER TABLE `polygone`
  MODIFY `id_polygone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
