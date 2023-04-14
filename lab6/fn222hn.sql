-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 20 okt 2022 kl 11:28
-- Serverversion: 8.0.30-0ubuntu0.22.04.1
-- PHP-version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Databas: `fn222hn`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `album`
--

CREATE TABLE `album` (
  `ID` int NOT NULL COMMENT 'album-ID',
  `TITLE` varchar(50) COLLATE utf8mb3_swedish_ci NOT NULL COMMENT 'albumets titel',
  `YEAR` int NOT NULL COMMENT 'utgivningsår',
  `ARTIST_ID` int NOT NULL COMMENT 'artistens id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumpning av Data i tabell `album`
--

INSERT INTO `album` (`ID`, `TITLE`, `YEAR`, `ARTIST_ID`) VALUES
(1, 'The Dark Side of the Moon', 1973, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `artist`
--

CREATE TABLE `artist` (
  `ID` int NOT NULL COMMENT 'artist-ID',
  `NAME` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL COMMENT 'Artistens namn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumpning av Data i tabell `artist`
--

INSERT INTO `artist` (`ID`, `NAME`) VALUES
(1, 'Pink Floyd');

-- --------------------------------------------------------

--
-- Tabellstruktur `song`
--

CREATE TABLE `song` (
  `ID` int NOT NULL COMMENT 'låt-ID',
  `TITLE` varchar(50) COLLATE utf8mb3_swedish_ci NOT NULL COMMENT 'låtens titel',
  `LENGTH` int NOT NULL COMMENT 'låtens längd i sek',
  `ALBUM_ID` int NOT NULL COMMENT 'albumets id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumpning av Data i tabell `song`
--

INSERT INTO `song` (`ID`, `TITLE`, `LENGTH`, `ALBUM_ID`) VALUES
(1, 'Speak to Me', 65, 1),
(2, 'Breathe', 169, 1),
(3, 'On the Run', 225, 1),
(4, 'Time', 413, 1),
(5, 'The Great Gig in the Sky', 283, 1),
(6, 'Money', 382, 1),
(7, 'Us and Them', 469, 1),
(8, 'Any Colour You Like', 206, 1),
(9, 'Brain Damage', 226, 1),
(10, 'Eclipse ', 132, 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `artist`
--
ALTER TABLE `artist`
  ADD UNIQUE KEY `ID` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
