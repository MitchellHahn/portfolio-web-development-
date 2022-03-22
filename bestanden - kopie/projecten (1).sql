-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 13 dec 2020 om 23:04
-- Serverversie: 10.1.47-MariaDB-0ubuntu0.18.04.1
-- PHP-versie: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_mitchell`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `projectnummer` int(15) NOT NULL,
  `projectnaam` varchar(50) NOT NULL,
  `start_datum` date NOT NULL,
  `datum_inlevering` date NOT NULL,
  `deelnemers` int(15) NOT NULL,
  `locatie` varchar(20) NOT NULL,
  `beschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`projectnummer`, `projectnaam`, `start_datum`, `datum_inlevering`, `deelnemers`, `locatie`, `beschrijving`) VALUES
(1, 'Test', '2020-12-10', '2020-12-31', 3, 'Den Haag', 'Testproject'),
(2, 'Beroepsproduct1 (portfolio)', '2020-09-06', '2020-10-27', 1, 'Rotterdam', 'Voor deze project moest ik een Portfolio bouwen in CSS, HTML, PHP en Javascript');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`projectnummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `projecten`
--
ALTER TABLE `projecten`
  MODIFY `projectnummer` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
