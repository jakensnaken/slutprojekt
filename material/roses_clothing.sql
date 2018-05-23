-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 23 maj 2018 kl 12:22
-- Serverversion: 10.1.13-MariaDB
-- PHP-version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `roses_clothing`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `anvandare`
--

CREATE TABLE `anvandare` (
  `id` int(11) NOT NULL,
  `fnamn` varchar(50) NOT NULL,
  `enamn` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `epost` varchar(100) NOT NULL,
  `mobil` varchar(20) NOT NULL,
  `kon` int(1) NOT NULL,
  `anamn` varchar(100) NOT NULL,
  `losen` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `anvandare`
--

INSERT INTO `anvandare` (`id`, `fnamn`, `enamn`, `adress`, `epost`, `mobil`, `kon`, `anamn`, `losen`) VALUES
(6, 'Jacob', 'Skogman', 'HavsÃ¶rnsvÃ¤gen 51', 'jacobskogman27@gmail.com', '076-7707882', 0, '', ''),
(7, 'Jacob', 'Skogman', 'HavsÃ¶rnsvÃ¤gen 51', 'jacobskogman27@gmail.com', '076-7707882', 0, 'Admin1', '$2y$10$ZpVE1UtE0af9M78bU54yFuy6.mezQ9IsMNcsmr/FmDElmQ8GtEjrm');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `anvandare`
--
ALTER TABLE `anvandare`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `anvandare`
--
ALTER TABLE `anvandare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
