-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Skapad: 29 jan 2013 kl 12:15
-- Serverversion: 5.5.27-log
-- PHP-version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `armory`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `armory`
--

CREATE TABLE IF NOT EXISTS `armory` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Level` int(11) NOT NULL,
  `Class` text NOT NULL,
  `Proffesion` text NOT NULL,
  `Proffesion Level` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `armory`
--

INSERT INTO `armory` (`Id`, `Name`, `Level`, `Class`, `Proffesion`, `Proffesion Level`) VALUES
(1, 'Odish', 87, 'Frost - Death Knight', 'Jewelcrafting/Mining', ''),
(2, 'Frillex', 90, 'Frost - Mage', 'Tailoring/Herbalism', '597/600');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
