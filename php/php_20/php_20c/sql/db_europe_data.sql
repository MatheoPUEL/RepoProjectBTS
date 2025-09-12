-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 sep. 2021 à 16:33
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_europe`
--
USE `db_europe`;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom_fr`, `date_adhesion`, `code`, `nom_local`, `capitale`, `langues`, `monnaie`) VALUES
(1, 'Allemagne', '1957-03-25', 'DE', 'Deutschland', 'Berlin', 'allemand (de)', 'euro (EUR)'),
(2, 'Autriche', '1995-01-01', 'AT', 'Österreich', 'Vienne', 'allemand (de)', 'euro (EUR)'),
(3, 'Belgique', '1957-03-25', 'BE', 'Belgique, België, Belgien', 'Bruxelles', 'français (fr), néerlandais (nl), allemand (de)', 'euro (EUR)'),
(4, 'Bulgarie', '2007-01-01', 'BG', 'България (Bălgaria)', 'Sofia', 'bulgare (bg)', 'lev (BGN)'),
(5, 'Chypre', '2004-05-01', 'CY', 'Κύπρος (Kýpros), Kıbrıs', 'Nicosie', 'grec (el), turc (tr)', 'euro (EUR)'),
(6, 'Croatie', '2013-07-01', 'HR', 'Hrvatska', 'Zagreb', 'croate (hr)', 'kuna (HRK)'),
(7, 'Danemark', '1973-01-01', 'DK', 'Danmark', 'Copenhague', 'danois (da)', 'couronne (DKK)'),
(8, 'Espagne', '1986-01-01', 'ES', 'España', 'Madrid', 'espagnol (es)', 'euro (EUR)'),
(9, 'Estonie', '2004-05-01', 'EE', 'Eesti', 'Tallinn', 'estonien (et)', 'euro (EUR)'),
(10, 'Finlande', '1995-01-01', 'FI', 'Suomi, Finland', 'Helsinki', 'finnois (fi), suédois (sv)', 'euro (EUR)'),
(11, 'France', '1957-03-25', 'FR', 'France', 'Paris', 'français (fr)', 'euro (EUR)'),
(12, 'Grèce', '1981-01-01', 'EL', 'Ελλάδα (Elláda), Ελλάς (Ellás)', 'Athènes', 'grec (el)', 'euro (EUR)'),
(13, 'Hongrie', '2004-05-01', 'HU', 'Magyarország', 'Budapest', 'hongrois (hu)', 'forint (HUF)'),
(14, 'Irlande', '1973-01-01', 'IE', 'Éire, Ireland', 'Dublin', 'irlandais (ga), anglais (en)', 'euro (EUR)'),
(15, 'Italie', '1957-03-25', 'IT', 'Italia', 'Rome', 'italien (it)', 'euro (EUR)'),
(16, 'Lettonie', '2004-05-01', 'LV', 'Latvija', 'Riga', 'letton (lv)', 'euro (EUR)'),
(17, 'Lituanie', '2004-05-01', 'LT', 'Lietuva', 'Vilnius', 'lituanien (lt)', 'euro (EUR)'),
(18, 'Luxembourg', '1957-03-25', 'LU', 'Lëtzebuerg, Luxembourg, Luxemburg', 'Luxembourg', 'luxembourgeois (lb), français (fr), allemand (de)', 'euro (EUR)'),
(19, 'Malte', '2004-05-01', 'MT', 'Malta', 'La Valette', 'maltais (mt), anglais (en)', 'euro (EUR)'),
(20, 'Pays-Bas', '1957-03-25', 'NL', 'Nederland', 'Amsterdam', 'néerlandais (nl)', 'euro (EUR)'),
(21, 'Pologne', '2004-05-01', 'PL', 'Polska', 'Varsovie', 'polonais (pl)', 'złoty (PLN)'),
(22, 'Portugal', '1986-01-01', 'PT', 'Portugal', 'Lisbonne', 'portugais (pt)', 'euro (EUR)'),
(23, 'Tchéquie', '2004-05-01', 'CZ', 'Česko (ou Česká republika)', 'Prague', 'tchèque (cz)', 'couronne (CZK)'),
(24, 'Roumanie', '2007-01-01', 'RO', 'România', 'Bucarest', 'roumain (ro)', 'leu (RON)'),
(25, 'Slovaquie', '2004-05-01', 'SK', 'Slovensko', 'Bratislava', 'slovaque (sk)', 'euro (EUR)'),
(26, 'Slovénie', '2004-05-01', 'SI', 'Slovenija', 'Ljubljana', 'slovène (sl)', 'euro (EUR)'),
(27, 'Suède', '1995-01-01', 'SE', 'Sverige', 'Stockholm', 'suédois (sv)', 'couronne (SEK)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
