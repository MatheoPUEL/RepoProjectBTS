-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 déc. 2022 à 13:33
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
-- Base de données : `db_noces`
--
CREATE DATABASE IF NOT EXISTS `db_noces` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_noces`;

-- --------------------------------------------------------

--
-- Structure de la table `noces`
--

DROP TABLE IF EXISTS `noces`;
CREATE TABLE `noces` (
  `id_noces` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `lib_noces` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `noces`
--

INSERT INTO `noces` (`id_noces`, `duree`, `lib_noces`) VALUES
(1, 1, 'Coton'),
(2, 2, 'Cuir'),
(3, 3, 'Froment'),
(4, 4, 'Cire'),
(5, 5, 'Bois'),
(6, 6, 'Chypre'),
(7, 7, 'Laine'),
(8, 8, 'Coquelicot'),
(9, 9, 'Faïence'),
(10, 10, 'Étain'),
(11, 11, 'Corail'),
(12, 12, 'Soie'),
(13, 13, 'Muguet'),
(14, 14, 'Plomb'),
(15, 15, 'Cristal'),
(16, 16, 'Saphir'),
(17, 17, 'Rose'),
(18, 18, 'Turquoise'),
(19, 19, 'Cretonne'),
(20, 20, 'Porcelaine'),
(21, 21, 'Opale'),
(22, 22, 'Bronze'),
(23, 23, 'Béryl'),
(24, 24, 'Satin'),
(25, 25, 'Argent'),
(26, 26, 'Jade'),
(27, 27, 'Acajou'),
(28, 28, 'Nickel'),
(29, 29, 'Velours'),
(30, 30, 'Perle'),
(31, 31, 'Basane'),
(32, 32, 'Cuivre'),
(33, 33, 'Porphyre'),
(34, 34, 'Ambre'),
(35, 35, 'Rubis'),
(36, 36, 'Mousseline'),
(37, 37, 'Papier'),
(38, 38, 'Mercure'),
(39, 39, 'Crêpe'),
(40, 40, 'Émeraude'),
(41, 41, 'Fer'),
(42, 42, 'Nacre'),
(43, 43, 'Flanelle'),
(44, 44, 'Topaze'),
(45, 45, 'Vermeil'),
(46, 46, 'Lavande'),
(47, 47, 'Cachemire'),
(48, 48, 'Améthyste'),
(49, 49, 'Cèdre'),
(50, 50, 'Or'),
(51, 51, 'Camélia'),
(52, 52, 'Tourmaline'),
(53, 53, 'Merisier'),
(54, 54, 'Zibeline'),
(55, 55, 'Orchidée'),
(56, 56, 'Buis ou Lapis-lazuli'),
(57, 57, 'Azalée'),
(58, 58, 'Érable'),
(59, 59, 'Olivier/vison'),
(60, 60, 'Diamant'),
(61, 61, 'Platane'),
(62, 62, 'Ivoire'),
(63, 63, 'Lilas Feuille'),
(64, 64, 'Astrakan'),
(65, 65, 'Palissandre'),
(66, 66, 'Jasmin'),
(67, 67, 'Chinchilla'),
(68, 68, 'Granit'),
(69, 69, 'Mélèze'),
(70, 70, 'Platine'),
(71, 71, 'Ocre'),
(72, 72, 'Titane'),
(73, 73, 'Fonte'),
(74, 74, 'Sienne'),
(75, 75, 'Albâtre'),
(76, 76, 'Zinc'),
(77, 77, 'Silice'),
(78, 78, 'Ébène'),
(79, 79, 'Bambou'),
(80, 80, 'Chêne'),
(81, 81, 'Cornaline'),
(82, 82, 'Grenat'),
(83, 83, 'Vanille'),
(84, 84, 'Iris'),
(85, 85, 'Uranium'),
(86, 86, 'Jaspe'),
(87, 87, 'Psilocybe'),
(88, 88, 'Pehuen'),
(89, 89, 'Onyx'),
(90, 90, 'Granite'),
(91, 91, 'Héliodore'),
(92, 92, 'Lys'),
(93, 93, 'Lapis-lazuli'),
(94, 94, 'Péridot'),
(95, 95, 'Adansonia'),
(96, 96, 'Potasse'),
(97, 97, 'Tourmaline noire'),
(98, 98, 'If'),
(99, 99, 'Araucaria'),
(100, 100, 'Eau');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `noces`
--
ALTER TABLE `noces`
  ADD PRIMARY KEY (`id_noces`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `noces`
--
ALTER TABLE `noces`
  MODIFY `id_noces` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;