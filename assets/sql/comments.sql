-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 18 maj 2017 kl 09:52
-- Serverversion: 5.7.14
-- PHP-version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `simwheel`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `comments`
--

INSERT INTO `comments` (`cid`, `username`, `date`, `message`) VALUES
(53, 'Jan-olof', '2017-05-12 17:34:29', 'Simulation is extensively used for educational purposes. It is frequently used by way of adaptive hypermedia.\r\n\r\nSimulation is often used in the training of civilian and military personnel.[7] This usually occurs when it is prohibitively expensive or simply too dangerous to allow trainees to use the real equipment in the real world. In such situations they will spend time learning valuable lessons in a "safe" virtual environment yet living a lifelike experience (or at least it is the goal). Often the convenience is to permit mistakes during training for a safety-critical system. There is a distinction, though, between simulations used for training and Instructional simulation.\r\n\r\nTraining simulations typically come in one of three categories:[8]\r\n"live" simulation (where actual players use genuine systems in a real environment);\r\n"virtual" simulation (where actual players use simulated systems in a synthetic environment[5]), or\r\n"constructive" simulation (where simulated players use simulated systems in a synthetic environment). Constructive simulation is often referred to as "wargaming" since it bears some resemblance to table-top war games in which players command armies of soldiers and equipment that move around a board.\r\n\r\nIn standardized tests, "live" simulations are sometimes called "high-fidelity", producing "samples of likely performance", as opposed to "low-fidelity", "pencil-and-paper" simulations producing only "signs of possible performance",[9] but the distinction between high, moderate and low fidelity remains relative, depending on the context of a particular comparison.\r\nSimulations in education are somewhat like training simulations. They focus on specific tasks. The term \'microworld\' is used to refer to educational simulations which model some abstract concept rather than simulating a realistic object or environment, or in some cases model a real world environment in a simplistic way so as to help a learner develop an understanding of the key concepts. Normally, a user can create some sort of construction within the microworld that will behave in a way consistent with the concepts being modeled. Seymour Papert was one of the first to advocate the value of microworlds, and the Logo programming environment developed by Papert is one of the most famous microworlds. As another example, the Global Challenge Award online STEM learning web site uses microworld simulations to teach science concepts related to global warming and the future of energy. Other projects for simulations in educations are Open Source Physics, NetSim etc.\r\n\r\nProject Management Simulation is increasingly used to train students and professionals in the art and science of project management. Using simulation for project management training improves learning retention and enhances the learning process.[10][11]\r\nSocial simulations may be used in social science classrooms to illustrate social and political processes in anthropology, economics, history, political science, or sociology courses, typically at the high school or university level. These may, for example, take the form of civics simulations, in which participants assume roles in a simulated society, or international relations simulations in which participants engage in negotiations, alliance formation, trade, diplomacy, and the use of force. Such simulations might be based on fictitious political systems, or be based on current or historical events. An example of the latter would be Barnard College\'s Reacting to the Past series of historical educational games.[12] The National Science Foundation has also supported the creation of reacting games that address science and math education.\r\n\r\nIn recent years, there has been increasing use of social simulations for staff training in aid and development agencies. The Carana simulation, for example, was first developed by the United Nations Development Programme, and is now used in a very revised form by the World Bank for training staff to deal with fragile and conflict-affected countries.[14]'),
(54, 'Hank', '2017-05-12 17:38:18', 'Kan man simulera en krokus?'),
(55, 'Hank', '2017-05-12 17:44:25', 'Eller vore det oetiskt? \r\n\r\n\r\n\r\n\r\n... You tell me son'),
(56, 'Jan-olof', '2017-05-12 17:45:43', '@Hank \r\n\r\nDu Ã¤r en person genomsyrad av kÃ¤rlek, lÃ¥t den blomma likt en kaktus pÃ¥ ett hav av dÃ¶d Ã¶ken.');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
