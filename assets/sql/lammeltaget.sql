-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 25 maj 2017 kl 10:12
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
  `trailName` varchar(255) NOT NULL,
  `creationDate` date NOT NULL,
  `trailInfoText` text NOT NULL,
  `trailShape` text NOT NULL,
  `difficultyLevel` int(5) NOT NULL,
  `trailLength` int(111) DEFAULT NULL,
  `upVotes` int(11) DEFAULT NULL,
  `downVotes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `trail`
--

INSERT INTO `trail` (`trailID`, `userID`, `trailName`, `creationDate`, `trailInfoText`, `trailShape`, `difficultyLevel`, `trailLength`, `upVotes`, `downVotes`) VALUES
(16, 55, 'Henke', '2017-05-23', 'Hej\n\nfÃ¶r att gÃ¥ denna led bÃ¶r du har en 12-15 stora stout i magen.', '', 3, 3616, NULL, NULL),
(23, 55, 'Filips sÃ¶ndagssvÃ¤ngom', '2017-05-23', 'Buss till enkÃ¶ping, Ã¥ngestgÃ¥ng tillbaka', '59.637714606663124,17.085216497071087,59.642369436139475,17.09887218894437,59.64566603794365,17.10882854880765,59.6461865244132,17.122218136209995,59.6479214210013,17.134234432596713,59.6486153545187,17.139727596659213,59.6479214210013,17.14384746970609,59.64930927368334,17.148997311014682,59.65347248727425,17.173716549295932,59.65451320994377,17.182642940897495,59.65624767597115,17.191912655252963,59.65659455841357,17.203928951639682,59.659369488800344,17.221781734842807,59.661450535917574,17.23070812644437,59.661450535917574,17.265727047342807,59.675691402419595,17.275327207753435,59.69143794711179,17.278773311991245,59.71481989541446,17.27740001049824,59.73126407273375,17.297999375732616,59.74406761982972,17.311732285888866,59.750294599241485,17.347781175049022,59.75997870604839,17.372500413330272,59.765511222373114,17.3855466832174,59.779511305306656,17.407862662221305,59.79143267154701,17.435328482533805,59.804903870331884,17.452837942983024,59.819405230483916,17.492663383090985,59.830622196906425,17.50639629783109,59.83993803118089,17.528712276834995,59.845112368616974,17.551714901346713,59.85373447723729,17.59154034079984,59.85401681036324,17.60457372874953,59.857464999137555,17.612641813466325,59.855349252052875,17.614434600400273,59.85345267185024,17.61627996020252,59.85254744773451,17.61726701312,59.853150933214465,17.620185256528202,59.8540836192585,17.621941566467285,59.85560786825034,17.62550675921375,59.85590958460679,17.626365066098515,59.8557802779319,17.628124595212284,59.855974237755774,17.62846791796619,59.85655611044338,17.629841208981816,59.856814717260335,17.63044202380115,59.85690091908598,17.63177239947254,59.85761503835156,17.632028281950625,59.85762581333279,17.63460320260492,59.8545949433288,17.640055060910527,59.85512592417869,17.642027557158144,59.85630046445922,17.645718276762636', 1, 44820, NULL, NULL),
(30, 55, 'Paranteser och mellanslag', '2017-05-24', 'paranteser och mellanslag', '59.927899962315344,18.164674763102084,59.9155111016389,17.81448555411771,59.849359025742544,17.97928047599271', 1, 31339, NULL, NULL),
(31, 55, '', '2017-05-24', '', '59.91688787012676,18.126222614664584,59.919641235783466,17.736207966227084,59.87142434819982,17.868043903727084', 1, 30840, NULL, NULL),
(32, 55, '', '2017-05-24', '', '59.965038801131506,18.02871895255521,59.78031051030412,18.03146553458646', 1, 20541, NULL, NULL);

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
  MODIFY `trailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
