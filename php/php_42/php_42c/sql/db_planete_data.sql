-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 19 fév. 2019 à 17:15
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
-- Base de données :  `systeme_solaire`
--
USE `db_planete`;

--
-- Déchargement des données de la table `planete`
--

INSERT INTO `planete` (`id`, `nom`, `type`, `diametre`, `masse`, `demi_grand_axe`, `periode_revolution`, `inclinaison`, `excentricite`, `periode_rotation`, `satellites`, `anneaux`, `atmosphere`) VALUES
(1, 'Mercure', 'Planètes telluriques', '0.382', '0.06', '0.387', '0.24', '3.38', '0.206', '58.64', 0, 'non', 'négligeable'),
(2, 'Vénus', 'Planètes telluriques', '0.949', '0.82', '0.723', '0.62', '3.86', '0.007', '-243.02', 0, 'non', 'CO2, N2'),
(3, 'Terre', 'Planètes telluriques', '1.000', '1.00', '1.000', '1.00', '7.25', '0.017', '1.00', 1, 'non', 'N2, O2'),
(4, 'Mars', 'Planètes telluriques', '0.532', '0.11', '1.523', '1.88', '5.65', '0.093', '1.03', 2, 'non', 'CO2, N2'),
(5, 'Jupiter', 'Géantes gazeuses', '11.209', '317.80', '5.203', '11.86', '6.09', '0.048', '0.41', 67, 'oui', 'H2, He'),
(6, 'Saturne', 'Géantes gazeuses', '9.449', '95.20', '9.537', '29.46', '5.51', '0.054', '0.43', 62, 'oui', 'H2, He'),
(7, 'Uranus', 'Géantes de glaces', '4.007', '14.60', '19.229', '84.01', '6.48', '0.047', '-0.72', 27, 'oui', 'H2, He'),
(8, 'Neptune', 'Géantes de glaces', '3.883', '17.20', '30.069', '164.80', '6.43', '0.009', '0.67', 14, 'oui', 'H2, He');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
