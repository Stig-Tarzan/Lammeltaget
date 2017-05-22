-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 maj 2017 kl 08:55
-- Serverversion: 5.7.14
-- PHP-version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `lammeltaget`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `trailID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `image`
--

CREATE TABLE `image` (
  `imageID` int(11) NOT NULL,
  `trailID` int(11) NOT NULL,
  `imageSource` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `map`
--

CREATE TABLE `map` (
  `mapID` int(11) NOT NULL,
  `trailID` int(11) NOT NULL,
  `apiID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `trail`
--

CREATE TABLE `trail` (
  `trailID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `upVotes` int(11) NOT NULL,
  `downVotes` int(11) NOT NULL,
  `difficultyLevel` int(5) NOT NULL,
  `creationDate` date NOT NULL,
  `trailInfoText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `salt` text,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `postalCode` varchar(5) DEFAULT NULL,
  `postalCity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`userID`, `userName`, `email`, `password`, `salt`, `firstName`, `lastName`, `dateOfBirth`, `adress`, `postalCode`, `postalCity`) VALUES
(1, 'Stig-Tarzan', 'John.f.almqvist@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Stig-ArchimedesQ ', 'arche@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Stig-Jane', 'janes@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Perry', 'per@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Kallek', 'kalle@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'henry', 'henka@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Gert', '123@', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Pert', 'perty@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Kurt', 'kurre@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Pelle', 'pelets@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Hulken', 'hullepull@gmaiul.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Stiggan', 'gmaui@', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'jula', 'John.f.almqvist@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Krypterad', '123@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'a7bb625777dc0c0df839a5', NULL, NULL, NULL, NULL, NULL, NULL),
(55, '123', '123', '2a67dec90998db3f5c9dbbc4ef1aaa4409c30722', 'ba7ac0cb1c036e6856c746', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `trailID` (`trailID`),
  ADD KEY `userID` (`userID`);

--
-- Index för tabell `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageID`),
  ADD KEY `trailID` (`trailID`);

--
-- Index för tabell `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`mapID`),
  ADD KEY `mapID` (`mapID`),
  ADD KEY `trailID` (`trailID`),
  ADD KEY `mapID_2` (`mapID`),
  ADD KEY `mapID_3` (`mapID`);

--
-- Index för tabell `trail`
--
ALTER TABLE `trail`
  ADD PRIMARY KEY (`trailID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `trailID` (`trailID`);

--
-- Index för tabell `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userName` (`userName`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `image`
--
ALTER TABLE `image`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `map`
--
ALTER TABLE `map`
  MODIFY `mapID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `trail`
--
ALTER TABLE `trail`
  MODIFY `trailID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`trailID`) REFERENCES `trail` (`trailID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriktioner för tabell `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`trailID`) REFERENCES `trail` (`trailID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriktioner för tabell `map`
--
ALTER TABLE `map`
  ADD CONSTRAINT `map_ibfk_1` FOREIGN KEY (`trailID`) REFERENCES `trail` (`trailID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriktioner för tabell `trail`
--
ALTER TABLE `trail`
  ADD CONSTRAINT `trail_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
