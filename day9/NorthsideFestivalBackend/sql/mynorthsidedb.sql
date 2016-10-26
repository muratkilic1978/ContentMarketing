-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 26. 10 2016 kl. 10:36:39
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mynorthsidedb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
`id` int(11) NOT NULL,
  `artistname` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Data dump for tabellen `artist`
--

INSERT INTO `artist` (`id`, `artistname`, `country`) VALUES
(1, 'Jose Gonzales', 'Spain'),
(2, 'Incubus', 'United States'),
(3, 'FKA Twigs', 'England'),
(4, 'Grace Jones', 'Jamaica'),
(5, 'Placebo', 'England'),
(6, 'Underworld', 'England'),
(7, 'John Grant', 'United States'),
(8, 'George Ezra', 'England'),
(9, 'Wolf Alice', 'England'),
(10, 'Savages', 'England'),
(11, 'Sivas', 'Denmark'),
(12, 'The Black Keys', 'United States'),
(13, 'Interpol', 'United States'),
(14, 'MØ', 'Denmark'),
(15, 'Go Go Berlin', 'Denmark'),
(16, 'Pet Shop Boys', 'England'),
(17, 'Spids Nøgenhat', 'Denmark'),
(18, 'Dizzy Mizz Lizzy', 'Denmark'),
(20, 'Jack Garratt', 'England'),
(21, 'Little Dragon', 'Sverige'),
(22, 'Broken Twin', 'Denmark'),
(23, 'Scarlet Pleasure', 'Denmark'),
(24, 'The Minds of 99', 'Denmark'),
(26, 'Gusgus', 'Island'),
(27, 'Madonna', 'United States'),
(28, 'Kim Larsen', 'Denmark'),
(30, 'Måge', 'Denmark');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `artiststage`
--

CREATE TABLE IF NOT EXISTS `artiststage` (
  `year` varchar(4) NOT NULL,
  `month` varchar(4) NOT NULL,
  `day` varchar(4) NOT NULL,
  `clock` time NOT NULL,
`id` int(11) NOT NULL,
  `stageid` int(11) NOT NULL,
  `artistid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `artiststage`
--

INSERT INTO `artiststage` (`year`, `month`, `day`, `clock`, `id`, `stageid`, `artistid`) VALUES
('2016', '06', '15', '12:00:00', 1, 1, 22);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `Stage`
--

CREATE TABLE IF NOT EXISTS `Stage` (
`id` int(11) NOT NULL,
  `stagename` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Data dump for tabellen `Stage`
--

INSERT INTO `Stage` (`id`, `stagename`, `capacity`) VALUES
(1, 'Red', 10000),
(4, 'Blue', 20000);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `artist`
--
ALTER TABLE `artist`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `artistname` (`artistname`);

--
-- Indeks for tabel `artiststage`
--
ALTER TABLE `artiststage`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `stageid` (`artistid`,`year`), ADD KEY `artiststage_ibfk_1` (`stageid`);

--
-- Indeks for tabel `Stage`
--
ALTER TABLE `Stage`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `stagename` (`stagename`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `artist`
--
ALTER TABLE `artist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Tilføj AUTO_INCREMENT i tabel `artiststage`
--
ALTER TABLE `artiststage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tilføj AUTO_INCREMENT i tabel `Stage`
--
ALTER TABLE `Stage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `artiststage`
--
ALTER TABLE `artiststage`
ADD CONSTRAINT `artiststage_ibfk_1` FOREIGN KEY (`stageid`) REFERENCES `Stage` (`id`),
ADD CONSTRAINT `artiststage_ibfk_2` FOREIGN KEY (`artistid`) REFERENCES `Artist` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
