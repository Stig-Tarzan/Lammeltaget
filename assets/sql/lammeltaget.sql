-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 28 maj 2017 kl 12:11
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

--
-- Dumpning av Data i tabell `comment`
--

INSERT INTO `comment` (`commentID`, `trailID`, `userID`, `content`, `date`) VALUES
(28, 34, 55, 'Snigg led', '2017-05-27'),
(37, 34, 58, 'Jag kan skriva', '2017-05-27'),
(43, 36, 58, 'hEJ!', '2017-05-27'),
(44, 36, 58, 'hEJ!', '2017-05-27'),
(50, 36, 55, 'Men vafan', '2017-05-27'),
(51, 36, 55, 'Men vafan', '2017-05-27'),
(57, 34, 55, 'Tjrna', '2017-05-27'),
(58, 36, 55, 'He!', '2017-05-27'),
(61, 34, 59, 'Hej', '2017-05-28');

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
  `trailLength` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `trail`
--

INSERT INTO `trail` (`trailID`, `userID`, `trailName`, `creationDate`, `trailInfoText`, `trailShape`, `difficultyLevel`, `trailLength`) VALUES
(34, 58, 'Henkes knÃ¤ppakanot', '2017-05-25', 'Denna tar jag nÃ¤r jag ska hem ', '62.34756782149854,17.02031135559082,62.347693176011234,17.021880179709115,62.34842014576479,17.023146182364144,62.348698978807285,17.02374699718348,62.348698978807285,17.024433642691292,62.34969478995963,17.024111777609505,62.35592545517361,17.022638440394076,62.35911116746044,17.021350980066927,62.35986772442904,17.011909604334505,62.36002699714961,17.0060731175181,62.361340964834746,16.992683530115755,62.36201782996129,16.9882203330053,62.36488440414231,16.977663158322684,62.364964027293006,16.97380077734124,62.36444647303582,16.967964290524833,62.36396872271918,16.959381221677177,62.3630131992605,16.93981181946583,62.364406660800036,16.925220602424815,62.365003838789086,16.919555776985362,62.36906433385619,16.906681173713878,62.3700196645793,16.89887058106251,62.37336308248376,16.88642513123341,62.3743182762804,16.87990199890919,62.374517271158304,16.87363636912778,62.374517271158304,16.870203141588718,62.37555202323597,16.86591160716489,62.37519384386536,16.858959321398288,62.37439787439002,16.855783585924655,62.374517271158304,16.845483903307468,62.374238677959454,16.839990739244968,62.37499485347739,16.823768739122897,62.37435807536161,16.802654389757663,62.38259534807404,16.76797879161313,62.41409543781683,16.614838633686304,62.41533128940945,16.60944467992522,62.41632488949538,16.60343653173186,62.416364632812815,16.599488320061937,62.416384504451734,16.59588343114592,62.41574860546267,16.592278542229906,62.415053075475114,16.586785378167406,62.415053075475114,16.583609642693773,62.415152437891365,16.581635536858812,62.41650373400825,16.582837166497484', 1, 25791),
(36, 58, 'Johnny Bodes grillstrÃ¥k', '2017-05-26', 'Bring tha barbeque mf!', '59.98015751818917,17.574159626383334,59.9835926266744,17.60574531974271,59.98840117973968,17.65518379630521,59.964351427509236,17.64969063224271,59.96366403503516,17.60849190177396,59.97466060315572,17.57553291739896', 3, 11790);

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL,
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

INSERT INTO `user` (`userID`, `admin`, `userName`, `email`, `password`, `salt`, `firstName`, `lastName`, `dateOfBirth`, `adress`, `postalCode`, `postalCity`) VALUES
(55, 0, '123', '123', '2a67dec90998db3f5c9dbbc4ef1aaa4409c30722', 'ba7ac0cb1c036e6856c746', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 0, 'Stig-Tarzan', 'John.f.almqvist@gmail.com', 'fc1303730bb840d60bb84e032b8673af29236317', '90e2fabf9d4913e73d3831', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 1, 'admin', 'admin@admin.admin', 'cbe2dbf8ea585bc7be5a0331842b33b1cf10d731', '7ee74cf4dfb7a6d4ecb089', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `vote`
--

CREATE TABLE `vote` (
  `voteID` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `trailID` int(255) NOT NULL,
  `vote` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `vote`
--

INSERT INTO `vote` (`voteID`, `userID`, `trailID`, `vote`) VALUES
(12, 55, 34, 1),
(14, 58, 34, -1),
(16, 55, 36, -1);

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
-- Index för tabell `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`voteID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `trailID` (`trailID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
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
  MODIFY `trailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT för tabell `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT för tabell `vote`
--
ALTER TABLE `vote`
  MODIFY `voteID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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

--
-- Restriktioner för tabell `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`trailID`) REFERENCES `trail` (`trailID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
