-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 26 mrt 2024 om 10:40
-- Serverversie: 8.0.31
-- PHP-versie: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets`
--
CREATE DATABASE IF NOT EXISTS `mvc-oop-toets` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `mvc-oop-toets`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `Id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `CapitalCity` varchar(250) NOT NULL,
  `Continent` varchar(250) NOT NULL,
  `Population` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `country`
--

INSERT INTO `country` (`Id`, `Name`, `CapitalCity`, `Continent`, `Population`) VALUES
(1, 'China', 'Bejing', 'Azië', 1412000000),
(2, 'Tanzania', 'Dodoma', 'Afrika', 63590000),
(3, 'Marokko', 'Rabat', 'Afrika', 37080000),
(4, 'Japan', 'Tokio', 'Azië', 125700000),
(5, 'Zwitserland', 'Bern', 'Europa', 8703000);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reuzenrad`
--

DROP TABLE IF EXISTS `reuzenrad`;
CREATE TABLE IF NOT EXISTS `reuzenrad` (
  `Id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Naam` varchar(200) NOT NULL,
  `Hoogte` smallint UNSIGNED NOT NULL,
  `Land` varchar(50) NOT NULL,
  `Kosten` smallint UNSIGNED NOT NULL,
  `AantalPassagiers` smallint UNSIGNED NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reuzenrad`
--

INSERT INTO `reuzenrad` (`Id`, `Naam`, `Hoogte`, `Land`, `Kosten`, `AantalPassagiers`) VALUES
(1, 'Ain Dubai', 250, 'Verendigde Arabische Emiraten', 270, 1750),
(2, 'High Roller', 168, 'Verenigde Staten', 203, 1120),
(3, 'Singapore Flyer', 165, 'Singapore', 240, 784),
(4, 'Star of Nanchang', 160, 'China', 57, 480),
(5, 'London Eye', 135, 'Engeland', 65, 320);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zangeres`
--

DROP TABLE IF EXISTS `zangeres`;
CREATE TABLE IF NOT EXISTS `zangeres` (
  `id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Naam` varchar(100) NOT NULL,
  `NettoWaarde` smallint UNSIGNED NOT NULL,
  `Land` varchar(100) NOT NULL,
  `Mobiel` varchar(20) NOT NULL,
  `Leeftijd` tinyint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `zangeres`
--

INSERT INTO `zangeres` (`id`, `Naam`, `NettoWaarde`, `Land`, `Mobiel`, `Leeftijd`) VALUES
(1, 'Rihanna', 1400, 'Barbados', '+1246 2400 1862400', 35),
(2, 'Madonna', 575, 'Verenigde Staten', '+1 3425 185876', 64),
(3, 'Taylor Swift', 570, 'Verenigde Staten', '+1 5876 236512', 33),
(4, 'Beyoncé', 420, 'Verenigde Staten', '+1 6794 908465', 41),
(5, 'Jennifer Lopez', 400, 'Verenigde Staten', '+1 3131 857345', 53);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
