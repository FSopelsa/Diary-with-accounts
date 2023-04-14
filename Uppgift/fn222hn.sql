-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 28 okt 2022 kl 13:53
-- Serverversion: 8.0.31-0ubuntu0.22.04.1
-- PHP-version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `fn222hn`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `diary`
--

CREATE TABLE `diary` (
  `headline` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'inläggets rubrik',
  `content` varchar(10000) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci DEFAULT NULL COMMENT 'inläggets innehåll',
  `signature` varchar(50) DEFAULT NULL COMMENT 'skribentens signatur',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'inläggets TIMESTAMP',
  `ID` int NOT NULL COMMENT 'indexerings-id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumpning av Data i tabell `diary`
--

INSERT INTO `diary` (`headline`, `content`, `signature`, `timestamp`, `ID`) VALUES
('[Rubrik 1 som felix]', '[Första inlägget som felix]', '[felix_un]', '2022-10-27 21:00:07', 1),
('[Rubrik 2]', '[Andra inlägget som felix]', '[felix_un]', '2022-10-27 21:00:47', 2),
('[Rubrik 1 som kajsa]', '[Ett litet inlägg från kajsa]', '[kajsa_un]', '2022-10-27 21:04:57', 3),
('[Rubrik 2 som kajsa]', '[Ett till litet inlägg från kajsa]', '[kajsa_un]', '2022-10-27 21:05:14', 4),
('[Bla bla bla]', '[ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur massa orci, porttitor vulputate ipsum varius lacinia. In urna dolor, accumsan nec semper in, sollicitudin quis nisi. Sed posuere nisi vel justo mollis lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse suscipit dapibus urna, ut gravida eros viverra elementum. Vestibulum ullamcorper tristique iaculis. Aenean porta interdum felis, ac dapibus quam consectetur a. Etiam non scelerisque neque. Donec ut volutpat nulla. Nam nec risus id metus varius consequat nec dictum mauris. Etiam venenatis placerat diam sit amet porttitor. Aliquam viverra pharetra ipsum, vitae consectetur justo egestas eu.\r\n\r\nDonec non rutrum augue, sed facilisis leo. Curabitur sit amet ex at velit accumsan faucibus vitae vitae mi. Donec augue ante, volutpat non ante in, facilisis eleifend metus. Ut porta enim eu sem pharetra, quis convallis erat consectetur. Vivamus auctor varius odio et volutpat. Suspendisse eu commodo enim. Fusce accumsan tincidunt sem, vel pretium enim mollis vel. Proin placerat magna vitae quam tincidunt tincidunt.\r\n]', '[felix_un]', '2022-10-28 13:35:49', 10),
('[Bla bla bla]', '[ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur massa orci, porttitor vulputate ipsum varius lacinia. In urna dolor, accumsan nec semper in, sollicitudin quis nisi. Sed posuere nisi vel justo mollis lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse suscipit dapibus urna, ut gravida eros viverra elementum. Vestibulum ullamcorper tristique iaculis. Aenean porta interdum felis, ac dapibus quam consectetur a. Etiam non scelerisque neque. Donec ut volutpat nulla. Nam nec risus id metus varius consequat nec dictum mauris. Etiam venenatis placerat diam sit amet porttitor. Aliquam viverra pharetra ipsum, vitae consectetur justo egestas eu.\r\n\r\nDonec non rutrum augue, sed facilisis leo. Curabitur sit amet ex at velit accumsan faucibus vitae vitae mi. Donec augue ante, volutpat non ante in, facilisis eleifend metus. Ut porta enim eu sem pharetra, quis convallis erat consectetur. Vivamus auctor varius odio et volutpat. Suspendisse eu commodo enim. Fusce accumsan tincidunt sem, vel pretium enim mollis vel. Proin placerat magna vitae quam tincidunt tincidunt.\r\n\r\nUt scelerisque est eu quam efficitur cursus. Integer lobortis sodales dolor, eu imperdiet purus volutpat viverra. Nulla tortor nisi, dapibus a arcu et, porta mattis leo. Mauris mollis posuere lacus, ac aliquam eros gravida sed. Vestibulum in hendrerit turpis. Etiam scelerisque rhoncus rutrum. Nulla facilisi.\r\n\r\nNullam bibendum risus vel massa condimentum sagittis. Proin malesuada ornare mauris, ornare dignissim neque luctus et. Praesent vel nulla felis. Nullam pharetra purus eget risus dictum, nec finibus odio rhoncus. Vivamus pharetra faucibus imperdiet. Donec consequat orci arcu, nec tincidunt est sagittis eget. Aenean faucibus lectus est, nec interdum nisi viverra non. Vivamus dictum a massa et elementum. Mauris pellentesque risus at neque vulputate congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ]', '[felix_un]', '2022-10-28 13:36:41', 11);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL COMMENT 'användar-id',
  `username` varchar(15) NOT NULL COMMENT 'användarnamn',
  `password` varchar(15) NOT NULL COMMENT 'lösenord'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'felix_un', 'felix_pw'),
(2, 'kajsa_un', 'kajsa_pw');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `diary`
--
ALTER TABLE `diary`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT 'indexerings-id', AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
