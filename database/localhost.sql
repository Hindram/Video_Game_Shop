-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2015 at 03:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Cosmos`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `Cat_ID` int(11) NOT NULL,
  `Cat_Name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Cat_ID`, `Cat_Name`) VALUES
(1, 'Action'),
(2, 'Sports'),
(3, 'Adventure'),
(4, 'Family'),
(5, 'Console');

-- --------------------------------------------------------

--
-- Table structure for table `Companies`
--

CREATE TABLE IF NOT EXISTS `Companies` (
  `Comp_ID` int(11) NOT NULL,
  `Comp_Name` char(50) NOT NULL,
  `Developer_Img` text NOT NULL,
  `Publisher_Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Companies`
--

INSERT INTO `Companies` (`Comp_ID`, `Comp_Name`, `Developer_Img`, `Publisher_Img`) VALUES
(1, 'infinity ward', './images/Companies/infinity ward.png', './images/Companies/activision.png'),
(2, '343 Industries', './images/Companies/343 Industries.jpeg', './images/Companies/MicrosoftStudiosLogo.png'),
(3, 'Telltale Games, Inc.', './images/Companies/Telltale_Games_logo.png', './images/Companies/Telltale_Games_logo.png'),
(4, 'Naughty Dog, Inc.', './images/Companies/Naughty_Dog.svg.png', './images/Companies/Naughty_Dog.svg.png'),
(5, 'Spearhead Games', './images/Companies/Spearhead Game.png', './images/Companies/Spearhead Game.png'),
(6, 'Ubisoft', './images/Companies/Ubisoft.png', './images/Companies/Ubisoft.png'),
(7, 'EA Canada', './images/Companies/EA_Canada_Logo.svg.png', './images/Companies/EA_Sports_logo.png'),
(8, 'Mojang', './images/Companies/Mojang_logo.png', './images/Companies/Sony_Computer_Entertainment_logo.svg.png'),
(9, 'Frogwares Games', './images/Companies/Frogwares_Game_Development_Studio.jpg', './images/Companies/logo_focus_white.png'),
(10, 'Sony', './images/Devices/Icon_ps4.png', './images/Devices/Icon_ps4.png'),
(11, 'Microsoft', './images/Companies/Microsoft.png', './images/Companies/Microsoft.png'),
(12, 'Milestone', './images/Companies/Milestone.png', './images/Companies/Bandai_Namco_Entertainment_logo.jpg'),
(13, 'Ghost Games', './images/Companies/Ghostgameslogo.png', './images/Companies/EA_Canada_Logo.svg.png'),
(14, 'ToyLogic Inc.', './images/Companies/ToyLogiclogo.gif', './images/Companies/MicrosoftStudiosLogo.png'),
(15, 'Carbon', './images/Companies/carbon_games.png', './images/Companies/Curve_Studios_logo.png'),
(16, 'Santa Monica Studio', './images/Companies/SCE_Santa_Monica_Studio_logo.png', './images/Devices/Icon_ps4.png'),
(17, 'Traveller''s Tales', './images/Companies/Traveller''s Tales.png', './images/Companies/Warner Bros. Interactive.png');

-- --------------------------------------------------------

--
-- Table structure for table `Managers`
--

CREATE TABLE IF NOT EXISTS `Managers` (
  `M_ID` int(11) NOT NULL,
  `M_Email` char(60) NOT NULL,
  `M_Password` char(30) NOT NULL,
  `M_Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Managers`
--

INSERT INTO `Managers` (`M_ID`, `M_Email`, `M_Password`, `M_Phone`) VALUES
(27493, 'karl_soft@yahoo.com', 'f6Js4Bx1pa', 582979388),
(94726, 'Gohn_bill@yahoo.com', 'Go39Sva0dS', 529387103);

-- --------------------------------------------------------

--
-- Table structure for table `Platform`
--

CREATE TABLE IF NOT EXISTS `Platform` (
  `Platform_ID` int(11) NOT NULL,
  `Platform_Name` char(20) NOT NULL,
  `Platfrom_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Platform`
--

INSERT INTO `Platform` (`Platform_ID`, `Platform_Name`, `Platfrom_img`) VALUES
(1, 'PS4', './images/Devices/Icon_ps4.png'),
(2, 'X-Box1', './images/Devices/XboxOne.png');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `P_ID` int(11) NOT NULL,
  `P_Name` char(60) NOT NULL,
  `P_Type` char(30) NOT NULL,
  `P_Price` double NOT NULL,
  `P_Quantity` int(11) NOT NULL,
  `P_ReleaseDate` date NOT NULL,
  `P_Image` text NOT NULL,
  `Rating_Cat_Img` text NOT NULL,
  `P_Video` text NOT NULL,
  `P_Condition` char(20) NOT NULL,
  `P_Rate` double NOT NULL,
  `Category_ID` int(11) NOT NULL,
  `Company_ID` int(11) NOT NULL,
  `Platform_id` int(11) NOT NULL,
  `P_Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`P_ID`, `P_Name`, `P_Type`, `P_Price`, `P_Quantity`, `P_ReleaseDate`, `P_Image`, `Rating_Cat_Img`, `P_Video`, `P_Condition`, `P_Rate`, `Category_ID`, `Company_ID`, `Platform_id`, `P_Description`) VALUES
(1, 'Call of Duty Ghosts', 'Game', 352, 3, '2013-11-05', './images/media/Games/Call of Duty Ghosts.jpg', './images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/Zxnx3W-HA18', 'New', 98, 1, 1, 1, 'Call of Duty: Ghosts delivers a riveting all-new gameplay experience built on an entirely new story, setting and cast of characters,all powered by a new, next generation Call of Duty engine that redefines the series for the next generation.'),
(2, 'Call of Duty Ghosts', 'Game', 370, 15, '2013-11-19', './images/media/Games/Call of Duty Ghosts-Xbox1.jpg', './images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/Zxnx3W-HA18', 'New', 95, 1, 1, 2, 'Call of Duty: Ghosts delivers a riveting all-new gameplay experience built on an entirely new story, setting and cast of characters,all powered by a new, next generation Call of Duty engine that redefines the series for the next generation.'),
(3, 'Halo 5', 'Game', 436, 29, '2012-10-06', './images/media/Games/Halo.jpg', './images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/oBk3c4UIcGw', 'New', 97, 1, 2, 2, 'Halo is a military science fiction first-person shooter video game franchise,"Halo" refers to the Halo rings: large, habitable megastructures that were created by the Forerunners to destroy all sentient life. They are similar to the Orbitals in Iain M. Banks'' Culture novels.'),
(4, 'The Walking Dead', 'Game', 410, 41, '2014-10-27', './images/media/Games/The walking dead.jpg', './images/media/Games/ratingsymbol_m.png', ' https://www.youtube.com/embed/3zcUNZKxtSM', 'New', 96, 1, 3, 1, 'The Walking Dead is an episodic interactive drama graphic adventure video game,The game takes place in the same fictional world as the comic, with events occurring shortly after the onset of the zombie apocalypse in Georgia. '),
(5, 'The Walking Dead', 'Game', 374, 16, '2014-10-27', './images/media/Games/the walking dead Xbox-one.jpg', './images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/3zcUNZKxtSM', 'New', 96, 1, 3, 2, 'The Walking Dead is an episodic interactive drama graphic adventure video game,The game takes place in the same fictional world as the comic, with events occurring shortly after the onset of the zombie apocalypse in Georgia. '),
(6, 'The Last of Us', 'Game', 276, 44, '2014-07-29', './images/media/Games/the last of us.jpg', './images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/OQWD5W3fpPM', 'New', 90, 1, 4, 1, 'The Last of Us is an action-adventure survival horror video game,The Last of Us is played from a third-person perspective; players use firearms, improvised weapons and stealth to defend against hostile humans and zombie-like creatures infected by a mutated strain of the Cordyceps fungus. "Listen mode" lets players locate enemies through a heightened sense of hearing and spatial awareness. '),
(7, 'Tiny Brains', 'Game', 233, 59, '2013-12-03', './images/media/Games/Tiny Brains.jpg', './images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/0s03VNNzMrA', 'New', 95, 4, 5, 1, 'Tiny Brains is a 3D co-op action puzzle game in which up to four players can take the role of tiny (but super-powered!) lab animals. Players must work together using complementary physics-based abilities to tackle the tests of a nefarious mad scientist.'),
(8, 'Rabbids Invasion', 'Game', 277, 47, '2014-09-10', './images/media/Games/_-Rabbids-Invasion-The-Interactive-TV-Show-PS4-_.jpg', './images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/wJi5jdghFn8', 'New', 96, 4, 6, 1, 'Rabbids Invasion, the hit TV show on Nickelodeon, is now a video game on Xbox One, PS4, and Kinect for Xbox 360. Rabbids Invasion: The Interactive TV Show gives kids an opportunity to watch, play and interact with their favorite TV characters, the Rabbids! With over 20 interactive TV episodes, kids will jump into the show by playing full motion.'),
(9, 'FIFA 15', 'Game', 420, 31, '2014-09-25', './images/media/Games/FIFA 15.jpg', './images/media/Games/ratingsymbol_rp.png', 'https://www.youtube.com/embed/TnTYVT6lwBc', 'New', 99, 2, 7, 1, 'FIFA 15 is an association football simulation video game,The game features Lionel Messi on its cover, alongside a different player in different parts of the world, and is the first game in the FIFA series to be fully licensed by the Premier League.'),
(10, 'FIFA 15', 'Game', 397, 55, '2014-09-26', './images/media/Games/FIFA 15 Xbox-One.jpg', './images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/TnTYVT6lwBc', 'New', 99, 2, 7, 2, 'FIFA 15 is an association football simulation video game,The game features Lionel Messi on its cover, alongside a different player in different parts of the world, and is the first game in the FIFA series to be fully licensed by the Premier League.'),
(11, 'The Crew', 'Game', 386, 38, '2014-12-02', './images/media/Games/crew ps4.jpg', './images/media/Games/ratingsymbol_rp.png', 'https://www.youtube.com/embed/k0-nrHFL-po', 'New', 70, 2, 6, 1, 'The Crew is a 2014 racing video game set in a large open world environment.The Crew features an open and persistent world for racing and free-roaming across a scaled-down recreation of the United States.'),
(12, 'Minecraft', 'Game', 355, 29, '2011-11-18', './images/media/Games/MINECRAFT Xbox-One.jpg', './images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/FaMTedT6P0I', 'New', 97, 3, 8, 2, 'Minecraft is a sandbox independent video game,The creative and building aspects of Minecraft allow players to build constructions out of textured cubes in a 3D procedurally generated world.'),
(13, 'Sherlock Holmes: Crimes and Punishments', 'Game', 286, 57, '2014-08-12', './images/media/Games/sherlock_holmes_crimes_punishments_ps4-one.jpg', './images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/zVSxcHJJyL8', 'New', 80, 3, 9, 1, 'Sherlock Holmes: Crimes & Punishments is an adventure video game in the Adventures of Sherlock Holmes series,The game takes place in London and its suburbs in 1894 and 1895, towards the end of the 19th century.The game is split into six cases of murders, disappearances and thefts.'),
(14, 'PS4 Controller', 'Device', 387, 32, '2014-02-04', './images/Devices/PS4-console1.jpg', '', '', 'New', 99, 5, 10, 1, 'This is PS4 Controller '),
(15, 'PS4 Headset', 'Device', 456, 46, '2014-02-04', './images/Devices/ps4-headset.jpg', '', '', 'New', 97, 5, 10, 1, 'This is PS4 Headset'),
(16, 'PS4 Camera', 'Device', 526, 59, '2014-04-16', './images/Devices/PS4 camera.jpg', '', '', 'New', 96, 5, 10, 1, 'This is PS4 Camera'),
(17, 'Xbox One Controller', 'Device', 463, 46, '2014-04-08', './images/Devices/XboxOne_Controller.jpg', '', '', 'New', 99, 5, 11, 2, 'This Xbox One Controller'),
(18, 'Xbox One Headset', 'Device', 521, 55, '2014-04-25', './images/Devices/Xbox one headset.jpg', '', '', 'New', 97, 5, 11, 2, 'This is Xbox One Headset'),
(19, 'Xbox One Camera', 'Device', 588, 48, '2014-03-30', './images/Devices/Xbox-One-Kinect.jpg', '', '', 'New', 98, 5, 11, 2, 'This is Xbox One Camera'),
(20, 'MXGP 14', 'Game', 322, 31, '2014-06-03', './images/media/Games/MX GP14.jpg', './images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/qF3xbit8wtk', 'New', 97, 2, 12, 1, 'From down in the mud to the stars of the championship, Motocross warriors battle across the globe for fame and glory.Dust, thrills, spectacular jumps and a desperate struggle for first place; These are the key elements that make up the new videogame dedicated to one of the most adrenaline-fuelled and demanding championships of all time.'),
(21, 'Rory McIlroy PGA TOUR', 'Game', 311, 18, '2014-09-24', './images/media/Games/Rory Mcllroy.png', './images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/xF4-XNQn9CM', 'New', 95, 2, 7, 2, 'Golf without limits in EA SPORTS Rory McIlroy PGA TOUR.Usher in the next generation of golf with the power of the Frostbite 3 engine and play the most beautiful sports game to date with no load times, enabling you to explore authentic tournament courses or unique fantasy environments, opening up your golf experience like never before. Don’t just play the course, explore it!'),
(22, 'Need for Speed Rivals', 'Game', 276, 22, '2014-03-11', './images/media/Games/NeedForSpeed.png', './images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/xsKHweFi7AU', 'New', 96, 2, 13, 2, 'Welcome to Redview County, where a street-racing rivalry between cops and racers never stops as both sides compete in an all-out war featuring the fastest cars, mods and technology in a gritty open road environment.Play as either a cop or racer, where each side of the law has its own set of high stakes challenges, rewards and consequences. Risk everything in the ultimate high stakes rivalry. The downloadable version of this game supports English, French, Italian, German, Spanish, Portuguese, Dutch, Japanese.'),
(23, 'Happy Wars', 'Game', 375, 23, '2014-05-13', './images/media/Games/Happy wars.png', './images/media/Games/ratingsymbol_t.png', 'https://www.youtube.com/embed/hg3eFbYag9E', 'New', 97, 3, 14, 2, 'Happy Wars is a large-scale online multiplayer action game, involving up to 20 players per match. Go wild in over-the-top melees in a fantasy setting featuring comical characters! Assign any of the 6 unique character classes to your player character, personalize it by adding customization parts from a wide variety of choices, and engage in heated sieges and cast spells in grand magical battles with players all over the world! Happy Wars is great because: - Happy Wars offers wide variety of game modes, including a Quick Match mode involving 20 players per match, Co-op, Special Game, Story Campaign modes and more! - 4-Player split screen local multiplayer allows family and friends to play together on the couch. - You can share and use the save file from your Xbox 360 version of Happy Wars! (*However, some items may not be shared.)'),
(24, 'Stealth Inc. 2: A Game of Clones', 'Game', 355, 35, '2015-03-04', './images/media/Games/Stealthing.png', './images/media/Games/ratingsymbol_t.png', 'https://www.youtube.com/embed/b1ZsBHDGr8w', 'New', 80, 3, 15, 2, 'Stealth Inc 2 is a puzzle platformer where you play the role of a clone escaping a sinister and high-tech testing facility. Stealth Inc 2 tests both your brain and your reflexes over 60 varied levels linked together by a sprawling and detailed overworld.'),
(25, 'Minecraft', 'Game', 377, 48, '2014-07-23', './images/media/Games/Minecraft PS4.jpg', './images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/5QYaQw0cQYI', 'New', 95, 3, 8, 1, 'The game involves players creating and destroying various types of blocks in a three dimensional environment. The player takes an avatar that can destroy or create blocks, forming fantastic structures, creations and artwork across the various multiplayer servers in multiple game modes.'),
(26, 'Hohokum PS4', 'Game', 297, 21, '2014-08-12', './images/media/Games/hohokum-PS4.jpg', './images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/Du5K_CtwSm8', 'New', 60, 3, 16, 1, 'A whimsical, colorful game with an emphasis on playful exploration and creativity.'),
(27, 'Monopoly Family Fun Pack', 'Game', 379, 22, '2014-11-12', './images/media/Games/Monopoly-family-fun-PS4.jpg', './images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/nh-wOBN-TgE&spfreload=10', 'New', 97, 4, 6, 1, 'Monopoly Family Fun Pack features an exclusive Monopoly game bundle for players to enjoy a modern twist to the well-known franchise. The pack includes Monopoly Plus, My Monopoly – an extension of Monopoly Plus that allows players to customise the classic and 3D boards – and Monopoly Deal – the delightfully addictive card game where your luck can change in an instant.'),
(28, 'Angry Bird Star Wars PS4', 'Game', 351, 16, '2014-10-07', './images/media/Games/Angry-Birds-Star-Wars.jpg', './images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/3No2gvSRzCY', 'New', 97, 4, 1, 1, 'Join an epic adventure with the Angry Birds in the legendary Star Wars™ universe, re-mastered for gaming systems! Use the Force, wield your Lightsaber, and blast away Pigtroopers on an intergalactic journey from the deserts of Tatooine to the depths of the Pig Star -- where you’ll face off against the terrifying Darth Vader, Dark Lord of the Pigs! Can you become a Jedi Master and restore freedom to the galaxy? May the birds be with you!'),
(29, 'Angry Birds Star Wars Xbox One', 'Game', 361, 16, '2014-12-17', './images/media/Games/Angry bird star wars Xbox one.png', './images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/3No2gvSRzCY', 'New', 95, 4, 1, 2, 'Join an epic adventure with the Angry Birds in the legendary Star Wars™ universe, re-mastered for gaming systems! Use the Force, wield your Lightsaber, and blast away Pigtroopers on an intergalactic journey from the deserts of Tatooine to the depths of the Pig Star -- where you’ll face off against the terrifying Darth Vader, Dark Lord of the Pigs! Can you become a Jedi Master and restore freedom to the galaxy? May the birds be with you!'),
(30, 'The LEGO Movie Videogame', 'Game', 364, 14, '2014-11-12', './images/media/Games/LEGO.png', './images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/hEO0YJ2mzFs', 'New', 96, 4, 17, 2, 'Join Emmet and an unlikely group of resistance fighters in their heroic quest to thwart Lord Business’ evil plans—a mission that Emmet is hopelessly and hilariously unprepared for.  It’s a wild ride with a surprising mix of over 90 playable characters including Batman, Superman, Wonder Woman, the Green Ninja, Gandalf, Shakespeare, Cleopatra and more.');

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE IF NOT EXISTS `Sales` (
  `Pro_ID` int(11) NOT NULL,
  `Pro_ Description` text NOT NULL,
  `Sale_StartDate` datetime NOT NULL,
  `Sale_EndDate` datetime NOT NULL,
  `Sale_Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sales`
--

INSERT INTO `Sales` (`Pro_ID`, `Pro_ Description`, `Sale_StartDate`, `Sale_EndDate`, `Sale_Amount`) VALUES
(2, 'This is limited time sale. so,what are you waiting for!', '2015-04-03 09:00:00', '2015-04-15 09:00:00', 15),
(10, 'This is limited time sale. so,what are you waiting for!', '2015-03-10 12:00:00', '2015-03-16 11:00:00', 10),
(5, 'This is limited time sale. so,what are you waiting for!', '2015-04-25 08:00:00', '2015-04-30 08:00:00', 12),
(3, 'This is limited time sale. so,what are you waiting for!', '2015-03-18 07:00:00', '2015-03-23 06:00:00', 7),
(27, 'This is limited time sale. so,what are you waiting for!', '2015-05-03 03:00:00', '2015-05-10 04:00:00', 20),
(25, 'This is limited time sale. so,what are you waiting for!', '2015-05-01 05:00:00', '2015-05-05 06:00:00', 12),
(15, 'This is a limited time sale, so what are you waiting for!', '2015-05-13 09:00:00', '2015-05-20 10:00:00', 13),
(9, 'This is limited time sale. so, what are you waiting for!', '2015-05-14 06:00:00', '2015-05-21 07:00:00', 10),
(30, 'This is limited time sale. so, what are you waiting for!', '2015-05-15 03:00:00', '2015-05-22 04:00:00', 20),
(25, 'This is limited time sale. so, what are you waiting for!', '2015-05-11 01:00:00', '2015-05-20 02:00:00', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
 ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `Companies`
--
ALTER TABLE `Companies`
 ADD PRIMARY KEY (`Comp_ID`);

--
-- Indexes for table `Platform`
--
ALTER TABLE `Platform`
 ADD PRIMARY KEY (`Platform_ID`), ADD KEY `Game_ID` (`Platform_ID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
 ADD PRIMARY KEY (`P_ID`), ADD KEY `Category_ID` (`Category_ID`,`Company_ID`), ADD KEY `Platform_id` (`Platform_id`);

--
-- Indexes for table `Sales`
--
ALTER TABLE `Sales`
 ADD KEY `Pro_ID` (`Pro_ID`);
--
-- Database: `Supplies`
--

-- --------------------------------------------------------

--
-- Table structure for table `Units`
--

CREATE TABLE IF NOT EXISTS `Units` (
  `ID` int(11) NOT NULL,
  `Department Name` char(30) NOT NULL,
  `College/Deanship Name` char(40) NOT NULL,
  `Search_Keywords` char(100) NOT NULL,
  `Admin` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Units`
--

INSERT INTO `Units` (`ID`, `Department Name`, `College/Deanship Name`, `Search_Keywords`, `Admin`) VALUES
(1, 'Department of Computer Science', 'College of Computer Science & IT', 'IT,software,hardware,stationary', 'mZahed'),
(2, 'Department of Computer Info.', 'College of Computer Science & IT', 'IT,software,hardware,stationary', 'mZahed'),
(3, '', 'College of Computer Science & IT', 'IT,software,hardware,stationary', 'mZahed'),
(4, '', 'College of Design', 'softwawre,Art,stationary,tools', 'ISaad'),
(5, 'Human Resources', 'Deanship of Admin Staff Development', 'software,stationary', 'mSami'),
(6, '', 'Deanship of Admin Staff Development', 'software,stationary', 'mSami'),
(7, 'Department of Graphic Design', 'College of Design', 'software,hardware,stationary,Art,Tools', 'ISaad'),
(8, '', 'Warehouse Admin', 'All', 'sAli');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `Username` char(20) NOT NULL,
  `Password` char(20) NOT NULL,
  `Name` char(30) NOT NULL,
  `Unit_ID` int(11) NOT NULL,
  `Building No` char(10) NOT NULL,
  `RoomNo` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Username`, `Password`, `Name`, `Unit_ID`, `Building No`, `RoomNo`) VALUES
('aKhalid', '11111', 'Adel Khalid', 2, '400', '401'),
('ISaad', '12345', 'Layla Saad', 7, '900', '929'),
('mSami', '12345', 'Mohammed Sami', 5, '10', '101'),
('mZahed', '12345', 'Mai Zahed', 3, '600', '6200'),
('sAli', '101010', 'Salem Ali', 8, '555', '501');

-- --------------------------------------------------------

--
-- Table structure for table `Warehouse_item`
--

CREATE TABLE IF NOT EXISTS `Warehouse_item` (
  `ID` char(10) NOT NULL,
  `Name` char(20) NOT NULL,
  `Category` char(20) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Warehouse_item`
--

INSERT INTO `Warehouse_item` (`ID`, `Name`, `Category`, `Quantity`) VALUES
('art_1', 'Brushes', 'Art', 872),
('hw_1', 'Internet Cables', 'Hardware', 271),
('hw_2', 'Projector', 'Hardware', 10),
('st_1', 'Blue Pens', 'Stationary', 1000),
('st_2', 'A4 Paper Pack', 'Stationary', 2090),
('sw_1', 'OS Installation CD', 'Software', 342);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Units`
--
ALTER TABLE `Units`
 ADD PRIMARY KEY (`ID`), ADD KEY `Admin` (`Admin`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`Username`), ADD KEY `Unit_ID` (`Unit_ID`);

--
-- Indexes for table `Warehouse_item`
--
ALTER TABLE `Warehouse_item`
 ADD PRIMARY KEY (`ID`);
--
-- Database: `cdcol`
--

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) DEFAULT NULL,
  `interpret` varchar(200) DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, 'PD1001', 'Android Phone FX1', 'Di sertakan secara rambang yang lansung tidak munasabah. Jika anda ingin menggunakan Lorem Ipsum, anda perlu memastikan bahwa tiada apa yang', 'android-phone.jpg', '200.50'),
(2, 'PD1002', 'Television DXT', 'Ia menggunakan kamus yang mengandungi lebih 200 ayat Latin, bersama model dan struktur ayat Latin, untuk menghasilkan Lorem Ipsum yang munasabah.', 'lcd-tv.jpg', '500.85'),
(3, 'PD1003', 'External Hard Disk', 'Ada banyak versi dari mukasurat-mukasurat Lorem Ipsum yang sedia ada, tetapi kebanyakkannya telah diubahsuai, lawak jenaka diselitkan, atau ayat ayat yang', 'external-hard-disk.jpg', '100.00'),
(4, 'PD1004', 'Wrist Watch GE2', 'Memalukan akan terselit didalam di tengah tengah kandungan text. Semua injin Lorem Ipsum didalam Internet hanya mengulangi text, sekaligus menjadikan injin kami sebagai yang terunggul dan tepat sekali di Internet.', 'wrist-watch.jpg', '400.30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE IF NOT EXISTS `pma__bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE IF NOT EXISTS `pma__column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'Supplies', 'Warehouse_item', 'ID', '', '', '_', ''),
(2, 'Supplies', 'Warehouse_item', 'Name', '', '', '_', ''),
(3, 'Supplies', 'Warehouse_item', 'Category', '', '', '_', ''),
(4, 'Supplies', 'Warehouse_item', 'Quantity', '', '', '_', ''),
(5, 'Supplies', 'User', 'Username', '', '', '_', ''),
(6, 'Supplies', 'User', 'Password', '', '', '_', ''),
(7, 'Supplies', 'User', 'Name', '', '', '_', ''),
(8, 'Supplies', 'User', 'Unit_ID', '', '', '_', ''),
(9, 'Supplies', 'User', 'Building No', '', '', '_', ''),
(10, 'Supplies', 'User', 'RoomNo', '', '', '_', ''),
(11, 'Supplies', 'Units', 'ID', '', '', '_', ''),
(12, 'Supplies', 'Units', 'Department Name', '', '', '_', ''),
(13, 'Supplies', 'Units', 'College/Deanship Name', '', '', '_', ''),
(14, 'Supplies', 'Units', 'Search_Keywords', '', '', '_', ''),
(15, 'Supplies', 'Units', 'Admin', '', '', '_', ''),
(51, 'Cosmos', 'Products', 'P_Rate', '', '', '_', ''),
(50, 'Cosmos', 'Products', 'P_Condition', '', '', '_', ''),
(61, 'Cosmos', 'Products', 'P_Video', '', '', '_', ''),
(48, 'Cosmos', 'Products', 'P_Image', '', '', '_', ''),
(47, 'Cosmos', 'Products', 'P_ReleaseDate', '', '', '_', ''),
(46, 'Cosmos', 'Products', 'P_Quantity', '', '', '_', ''),
(45, 'Cosmos', 'Products', 'P_Price', '', '', '_', ''),
(44, 'Cosmos', 'Products', 'P_Type', '', '', '_', ''),
(43, 'Cosmos', 'Products', 'P_Name', '', '', '_', ''),
(42, 'Cosmos', 'Products', 'P_ID', '', '', '_', ''),
(27, 'Cosmos', 'Category', 'Cat_ID', '', '', '_', ''),
(28, 'Cosmos', 'Category', 'Cat_Name', '', '', '_', ''),
(29, 'Cosmos', 'Managers', 'M_ID', '', '', '_', ''),
(30, 'Cosmos', 'Managers', 'M_Email', '', '', '_', ''),
(31, 'Cosmos', 'Managers', 'M_Password', '', '', '_', ''),
(32, 'Cosmos', 'Managers', 'M_Phone', '', '', '_', ''),
(54, 'Cosmos', 'Platform', 'Platform_Name', '', '', '_', ''),
(34, 'Cosmos', 'Platform', 'Platform_ID', '', '', '_', ''),
(35, 'Cosmos', 'Companies', 'Comp_ID', '', '', '_', ''),
(36, 'Cosmos', 'Companies', 'Comp_Name', '', '', '_', ''),
(37, 'Cosmos', 'Sales', 'Pro_ID', '', '', '_', ''),
(62, 'Cosmos', 'Sales', 'Pro_ Description', '', '', '_', ''),
(39, 'Cosmos', 'Sales', 'Sale_StartDate', '', '', '_', ''),
(40, 'Cosmos', 'Sales', 'Sale_EndDate', '', '', '_', ''),
(41, 'Cosmos', 'Sales', 'Sale_Amount', '', '', '_', ''),
(52, 'Cosmos', 'Products', 'Category_ID', '', '', '_', ''),
(53, 'Cosmos', 'Products', 'Company_ID', '', '', '_', ''),
(55, 'Cosmos', 'Products', 'Platform_id', '', '', '_', ''),
(56, 'Cosmos', 'Platform', 'Platfrom_img', '', '', '_', ''),
(57, 'Cosmos', 'Products', 'Rating_Cat_Img', '', '', '_', ''),
(58, 'Cosmos', 'Companies', 'Developer_Img', '', '', '_', ''),
(59, 'Cosmos', 'Companies', 'Publisher_Img', '', '', '_', ''),
(60, 'Cosmos', 'Products', 'P_Description', '', '', '_', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma__designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

--
-- Dumping data for table `pma__designer_coords`
--

INSERT INTO `pma__designer_coords` (`db_name`, `table_name`, `x`, `y`, `v`, `h`) VALUES
('Cosmos', 'Category', 401, 379, 1, 1),
('Cosmos', 'Companies', 91, 377, 1, 1),
('Cosmos', 'Managers', 226, 479, 1, 1),
('Cosmos', 'Platform', 364, 78, 1, 1),
('Cosmos', 'Products', 99, 62, 1, 1),
('Cosmos', 'Sales', 353, 198, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE IF NOT EXISTS `pma__history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE IF NOT EXISTS `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"Cosmos","table":"Products"},{"db":"Cosmos","table":"Managers"},{"db":"Cosmos","table":"Sales"},{"db":"web","table":"products"},{"db":"Cosmos","table":"products"},{"db":"Cosmos","table":"Companies"},{"db":"Cosmos","table":"Platform"},{"db":"Cosmos","table":"Category"},{"db":"demo","table":"products"},{"db":"Supplies","table":"User"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE IF NOT EXISTS `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Dumping data for table `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('Cosmos', 'Products', 'Platform_id', 'Cosmos', 'Platform', 'Platform_ID'),
('Cosmos', 'Products', 'Category_ID', 'Cosmos', 'Category', 'Cat_ID'),
('Cosmos', 'Products', 'Company_ID', 'Cosmos', 'Companies', 'Comp_ID'),
('Cosmos', 'Sales', 'Pro_ID', 'Cosmos', 'Products', 'P_ID');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE IF NOT EXISTS `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE IF NOT EXISTS `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'Cosmos', 'Products', '{"sorted_col":"P_ID ASC"}', '2015-05-13 21:42:56'),
('root', 'Cosmos', 'Sales', '[]', '2015-05-01 18:38:34'),
('root', 'Cosmos', 'products', '{"sorted_col":"P_ID ASC"}', '2015-05-12 16:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE IF NOT EXISTS `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE IF NOT EXISTS `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2015-04-15 14:41:15', '{"collation_connection":"utf8mb4_general_ci"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_coords`
--
ALTER TABLE `pma__designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;
--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Cat_ID` int(11) NOT NULL,
  `Cat_Name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`) VALUES
(1, 'Action'),
(2, 'Sports'),
(3, 'Adventure'),
(4, 'Family'),
(5, 'Console');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `Comp_ID` int(11) NOT NULL,
  `Comp_Name` char(50) NOT NULL,
  `Developer_Img` text NOT NULL,
  `Publisher_Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`Comp_ID`, `Comp_Name`, `Developer_Img`, `Publisher_Img`) VALUES
(1, 'infinity ward', '/images/Companies/infinity ward.png', '/images/Companies/activision.png'),
(2, '343 Industries', '/images/Companies/343 Industries.jpeg', '/images/Companies/MicrosoftStudiosLogo.png'),
(3, 'Telltale Games, Inc.', '/images/Companies/Telltale_Games_logo.png', '/images/Companies/Telltale_Games_logo.png'),
(4, 'Naughty Dog, Inc.', '/images/Companies/Naughty_Dog.svg.png', '/images/Companies/Naughty_Dog.svg.png'),
(5, 'Spearhead Games', '/images/Companies/Spearhead Game.png', '/images/Companies/Spearhead Game.png'),
(6, 'Ubisoft', '/images/Companies/Ubisoft.png', '/images/Companies/Ubisoft.png'),
(7, 'EA Canada', '/images/Companies/EA_Canada_Logo.svg.png', '/images/Companies/EA_Sports_logo.png'),
(8, 'Mojang', '/images/Companies/Mojang_logo.png', '/images/Companies/Sony_Computer_Entertainment_logo.svg.png'),
(9, 'Frogwares Games', '/images/Companies/Frogwares_Game_Development_Studio.jpg', '/images/Companies/logo_focus_white.png'),
(10, 'Sony', '/images/Devices/Icon_ps4.png', '/images/Devices/Icon_ps4.png'),
(11, 'Microsoft', '/images/Companies/Microsoft.png', '/images/Companies/Microsoft.png'),
(12, 'Milestone', '/images/Companies/Milestone.png', '/images/Companies/Bandai_Namco_Entertainment_logo.jpg'),
(13, 'Ghost Games', '/images/Companies/Ghostgameslogo.png', '/images/Companies/EA_Canada_Logo.svg.png'),
(14, 'ToyLogic Inc.', '/images/Companies/ToyLogiclogo.gif', '/images/Companies/MicrosoftStudiosLogo.png'),
(15, 'Carbon', '/images/Companies/carbon_games.png', '/images/Companies/Curve_Studios_logo.png'),
(16, 'Santa Monica Studio', '/images/Companies/SCE_Santa_Monica_Studio_logo.png', '/images/Devices/Icon_ps4.png'),
(17, 'Traveller''s Tales', '/images/Companies/Traveller''s Tales.png', '/images/Companies/Warner Bros. Interactive.png');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE IF NOT EXISTS `managers` (
  `M_ID` int(11) NOT NULL,
  `M_Email` char(60) NOT NULL,
  `M_Password` char(30) NOT NULL,
  `M_Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`M_ID`, `M_Email`, `M_Password`, `M_Phone`) VALUES
(27493, 'karl_soft@yahoo.com', 'f6Js4Bx1pa', 582979388),
(94726, 'Gohn_bill@yahoo.com', 'Go39Sva0dS', 529387103);

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE IF NOT EXISTS `platform` (
  `Platform_ID` int(11) NOT NULL,
  `Platform_Name` char(20) NOT NULL,
  `Platfrom_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`Platform_ID`, `Platform_Name`, `Platfrom_img`) VALUES
(1, 'PS4', '/images/Devices/Icon_ps4.png'),
(2, 'X-Box1', '/images/Devices/XboxOne.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `P_ID` int(11) NOT NULL,
  `P_Name` char(60) NOT NULL,
  `P_Type` char(30) NOT NULL,
  `P_Price` double NOT NULL,
  `P_Quantity` int(11) NOT NULL,
  `P_ReleaseDate` date NOT NULL,
  `P_Image` text NOT NULL,
  `Rating_Cat_Img` text NOT NULL,
  `P_Video` text NOT NULL,
  `P_Condition` char(20) NOT NULL,
  `P_Rate` double NOT NULL,
  `Category_ID` int(11) NOT NULL,
  `Company_ID` int(11) NOT NULL,
  `Platform_id` int(11) NOT NULL,
  `P_Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_ID`, `P_Name`, `P_Type`, `P_Price`, `P_Quantity`, `P_ReleaseDate`, `P_Image`, `Rating_Cat_Img`, `P_Video`, `P_Condition`, `P_Rate`, `Category_ID`, `Company_ID`, `Platform_id`, `P_Description`) VALUES
(1, 'Call of Duty Ghosts', 'Game', 352, 4, '2013-11-05', '/images/media/Games/Call of Duty Ghosts.jpg', '/images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/Zxnx3W-HA18\r\n', 'New', 98, 1, 1, 1, 'Call of Duty: Ghosts delivers a riveting all-new gameplay experience built on an entirely new story, setting and cast of characters,\r\n\r\nall powered by a new, next generation Call of Duty engine that redefines the series for the next generation.'),
(2, 'Call of Duty Ghosts', 'Game', 370, 2, '2013-11-19', '/images/media/Games/Call of Duty Ghosts-Xbox1.jpg', '/images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/Zxnx3W-HA18', 'New', 95.5, 1, 1, 2, 'Call of Duty: Ghosts delivers a riveting all-new gameplay experience built on an entirely new story, setting and cast of characters,\r\n\r\nall powered by a new, next generation Call of Duty engine that redefines the series for the next generation.'),
(3, 'Halo 5', 'Game', 436, 6, '2012-10-06', '/images/media/Games/Halo.jpg', '/images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/oBk3c4UIcGw', 'New', 97.9, 1, 2, 2, 'Halo is a military science fiction first-person shooter video game franchise,\r\n\r\n"Halo" refers to the Halo rings: large, habitable megastructures that were created by the Forerunners to destroy all sentient life. They are similar to the Orbitals in Iain M. Banks'' Culture novels.'),
(4, 'The Walking Dead', 'Game', 410, 8, '2014-10-27', '/images/media/Games/The walking dead.jpg', '/images/media/Games/ratingsymbol_m.png', ' https://www.youtube.com/embed/3zcUNZKxtSM', 'New', 94.4, 1, 3, 1, 'The Walking Dead is an episodic interactive drama graphic adventure video game,The game takes place in the same fictional world as the comic, with events occurring shortly after the onset of the zombie apocalypse in Georgia. '),
(5, 'The Walking Dead', 'Game', 374, 5, '2014-10-27', '/images/media/Games/the walking dead Xbox-one.jpg', '/images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/3zcUNZKxtSM', 'New', 96.88, 1, 3, 2, 'The Walking Dead is an episodic interactive drama graphic adventure video game,\r\n\r\nThe game takes place in the same fictional world as the comic, with events occurring shortly after the onset of the zombie apocalypse in Georgia. '),
(6, 'The Last of Us', 'Game', 276, 5, '2014-07-29', '/images/media/Games/the last of us.jpg', '/images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/OQWD5W3fpPM\r\n', 'New', 89.3, 1, 4, 1, 'The Last of Us is an action-adventure survival horror video game,\r\n\r\nThe Last of Us is played from a third-person perspective; players use firearms, improvised weapons and stealth to defend against hostile humans and zombie-like creatures infected by a mutated strain of the Cordyceps fungus. "Listen mode" lets players locate enemies through a heightened sense of hearing and spatial awareness. '),
(7, 'Tiny Brains', 'Game', 233, 6, '2013-12-03', '/images/media/Games/Tiny Brains.jpg', '/images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/0s03VNNzMrA', 'New', 93.99, 4, 5, 1, 'Tiny Brains is a 3D co-op action puzzle game in which up to four players can take the role of tiny (but super-powered!) lab animals. \r\n\r\nPlayers must work together using complementary physics-based abilities to tackle the tests of a nefarious mad scientist.'),
(8, 'Rabbids Invasion', 'Game', 277, 7, '2014-09-10', '/images/media/Games/_-Rabbids-Invasion-The-Interactive-TV-Show-PS4-_.jpg', '/images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/wJi5jdghFn8', 'New', 93, 4, 6, 1, 'Rabbids Invasion, the hit TV show on Nickelodeon, is now a video game on Xbox One, PS4, and Kinect for Xbox 360. \r\n\r\nRabbids Invasion: The Interactive TV Show gives kids an opportunity to watch, play and interact with their favorite TV characters, the Rabbids! With over 20 interactive TV episodes, kids will jump into the show by playing full motion.'),
(9, 'FIFA 15', 'Game', 420, 3, '2014-09-25', '/images/media/Games/FIFA 15.jpg', '/images/media/Games/ratingsymbol_rp.png', 'https://www.youtube.com/embed/TnTYVT6lwBc', 'New', 99.1, 2, 7, 1, 'FIFA 15 is an association football simulation video game,The game features Lionel Messi on its cover, alongside a different player in different parts of the world, and is the first game in the FIFA series to be fully licensed by the Premier League.'),
(10, 'FIFA 15', 'Game', 397, 6, '2014-09-26', '/images/media/Games/FIFA 15 Xbox-One.jpg', '/images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/TnTYVT6lwBc', 'New', 99, 2, 7, 2, 'FIFA 15 is an association football simulation video game,\r\n\r\nThe game features Lionel Messi on its cover, alongside a different player in different parts of the world, and is the first game in the FIFA series to be fully licensed by the Premier League.'),
(11, 'The Crew', 'Game', 386, 4, '2014-12-02', '/images/media/Games/crew ps4.jpg', '/images/media/Games/ratingsymbol_rp.png', 'https://www.youtube.com/embed/k0-nrHFL-po', 'New', 85.54, 2, 6, 1, 'The Crew is a 2014 racing video game set in a large open world environment.\r\n\r\nThe Crew features an open and persistent world for racing and free-roaming across a scaled-down recreation of the United States.'),
(12, 'Minecraft', 'Game', 355, 10, '2011-11-18', '/images/media/Games/MINECRAFT Xbox-One.jpg', '/images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/FaMTedT6P0I', 'New', 97.3, 3, 8, 2, 'Minecraft is a sandbox independent video game,\r\n\r\nThe creative and building aspects of Minecraft allow players to build constructions out of textured cubes in a 3D procedurally generated world.'),
(13, 'Sherlock Holmes: Crimes and Punishments', 'Game', 286, 8, '2014-08-12', '/images/media/Games/sherlock_holmes_crimes_punishments_ps4-one.jpg', '/images/media/Games/ratingsymbol_m.png', 'https://www.youtube.com/embed/zVSxcHJJyL8', 'New', 88.79, 3, 9, 1, 'Sherlock Holmes: Crimes & Punishments is an adventure video game in the Adventures of Sherlock Holmes series,\r\n\r\nThe game takes place in London and its suburbs in 1894 and 1895, towards the end of the 19th century.\r\n\r\nThe game is split into six cases of murders, disappearances and thefts.'),
(14, 'PS4 Controller', 'Device', 387, 12, '2014-02-04', '/images/Devices/PS4-console1.jpg', '', '', 'New', 99.9, 5, 10, 1, 'This is PS4 Controller '),
(15, 'PS4 Headset', 'Device', 456, 8, '2014-02-04', '/images/Devices/ps4-headset.jpg', '', '', 'New', 97.99, 5, 10, 1, 'This is PS4 Headset'),
(16, 'PS4 Camera', 'Device', 526, 9, '2014-04-16', '/images/Devices/PS4 camera.jpg', '', '', 'New', 96.68, 5, 10, 1, 'This is PS4 Camera'),
(17, '', 'Device', 463, 6, '2014-04-08', '/images/Devices/XboxOne_Controller.jpg', '', '', 'New', 99.88, 5, 11, 2, 'This Xbox One Controller'),
(18, 'Xbox One Headset', 'Device', 521, 5, '2014-04-25', '/images/Devices/Xbox one headset.jpg', '', '', 'New', 97.99, 5, 11, 2, 'This is Xbox One Headset'),
(19, 'Xbox One Camera', 'Device', 588, 4, '2014-03-30', '/images/Devices/Xbox-One-Kinect.jpg', '', '', 'New', 98.96, 5, 11, 2, 'This is Xbox One Camera'),
(20, 'MXGP 14', 'Game', 322, 16, '2014-06-03', '/images/media/Games/MX GP14.jpg', '/images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/qF3xbit8wtk', 'New', 94.7, 2, 12, 1, 'From down in the mud to the stars of the championship, Motocross warriors battle across the globe for fame and glory.\r\n\r\nDust, thrills, spectacular jumps and a desperate struggle for first place; These are the key elements that make up the new videogame dedicated to one of the most adrenaline-fuelled and demanding championships of all time.'),
(21, 'Rory McIlroy PGA TOUR', 'Game', 311, 21, '2014-09-24', '/images/media/Games/Rory Mcllroy.png', '/images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/xF4-XNQn9CM', 'New', 95.33, 2, 7, 2, 'Golf without limits in EA SPORTS Rory McIlroy PGA TOUR.\r\n\r\nUsher in the next generation of golf with the power of the Frostbite 3 engine and play the most beautiful sports game to date with no load times, enabling you to explore authentic tournament courses or unique fantasy environments, opening up your golf experience like never before. Don’t just play the course, explore it!'),
(22, 'Need for Speed Rivals', 'Game', 276, 23, '2014-03-11', '/images/media/Games/NeedForSpeed.png', '/images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/xsKHweFi7AU', 'New', 96.99, 2, 13, 2, 'Welcome to Redview County, where a street-racing rivalry between cops and racers never stops as both sides compete in an all-out war featuring the fastest cars, mods and technology in a gritty open road environment.\r\nPlay as either a cop or racer, where each side of the law has its own set of high stakes challenges, rewards and consequences. Risk everything in the ultimate high stakes rivalry. The downloadable version of this game supports English, French, Italian, German, Spanish, Portuguese, Dutch, Japanese.'),
(23, 'Happy Wars', 'Game', 375, 15, '2014-05-13', '/images/media/Games/Happy wars.png', '/images/media/Games/ratingsymbol_t.png', 'https://www.youtube.com/embed/hg3eFbYag9E', 'New', 97.22, 3, 14, 2, 'Happy Wars is a large-scale online multiplayer action game, involving up to 20 players per match. Go wild in over-the-top melees in a fantasy setting featuring comical characters! Assign any of the 6 unique character classes to your player character, personalize it by adding customization parts from a wide variety of choices, and engage in heated sieges and cast spells in grand magical battles with players all over the world! Happy Wars is great because: - Happy Wars offers wide variety of game modes, including a Quick Match mode involving 20 players per match, Co-op, Special Game, Story Campaign modes and more! - 4-Player split screen local multiplayer allows family and friends to play together on the couch. - You can share and use the save file from your Xbox 360 version of Happy Wars! (*However, some items may not be shared.)'),
(24, 'Stealth Inc. 2: A Game of Clones', 'Game', 355, 17, '2015-03-04', '/images/media/Games/Stealthing.png', '/images/media/Games/ratingsymbol_t.png', 'https://www.youtube.com/embed/b1ZsBHDGr8w', 'New', 87.75, 3, 15, 2, 'Stealth Inc 2 is a puzzle platformer where you play the role of a clone escaping a sinister and high-tech testing facility. Stealth Inc 2 tests both your brain and your reflexes over 60 varied levels linked together by a sprawling and detailed overworld.'),
(25, 'Minecraft', 'Game', 377, 19, '2014-07-23', '/images/media/Games/Minecraft PS4.jpg', '/images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/5QYaQw0cQYI', 'New', 95.77, 3, 8, 1, 'The game involves players creating and destroying various types of blocks in a three dimensional environment. \r\nThe player takes an avatar that can destroy or create blocks, forming fantastic structures, creations and artwork across the various multiplayer servers in multiple game modes.'),
(26, 'Hohokum PS4', 'Game', 297, 23, '2014-08-12', '/images/media/Games/hohokum-PS4.jpg', '/images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/watch?v=Du5K_CtwSm8', 'New', 86.39, 3, 16, 1, 'A whimsical, colorful game with an emphasis on playful exploration and creativity.'),
(27, 'Monopoly Family Fun Pack', 'Game', 379, 25, '2014-11-12', '/images/media/Games/Monopoly-family-fun-PS4.jpg', '/images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/nh-wOBN-TgE&spfreload=10', 'New', 97.56, 4, 6, 1, 'Monopoly Family Fun Pack features an exclusive Monopoly game bundle for players to enjoy a modern twist to the well-known franchise. \r\nThe pack includes Monopoly Plus, My Monopoly – an extension of Monopoly Plus that allows players to customise the classic and 3D boards – and Monopoly Deal – the delightfully addictive card game where your luck can change in an instant.\r\n'),
(28, 'Angry Bird Star Wars PS4', 'Game', 351, 16, '2014-10-07', '/images/media/Games/Angry-Birds-Star-Wars.jpg', '/images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/3No2gvSRzCY', 'New', 93.99, 4, 1, 1, 'Join an epic adventure with the Angry Birds in the legendary Star Wars™ universe, re-mastered for gaming systems! Use the Force, wield your Lightsaber, and blast away Pigtroopers on an intergalactic journey from the deserts of Tatooine to the depths of the Pig Star -- where you’ll face off against the terrifying Darth Vader, Dark Lord of the Pigs! Can you become a Jedi Master and restore freedom to the galaxy? May the birds be with you!'),
(29, 'Angry Birds Star Wars Xbox One', 'Game', 361, 17, '2014-12-17', '/images/media/Games/Angry bird star wars Xbox one.png', '/images/media/Games/ratingsymbol_e.png', 'https://www.youtube.com/embed/3No2gvSRzCY', 'New', 95.77, 4, 1, 2, 'Join an epic adventure with the Angry Birds in the legendary Star Wars™ universe, re-mastered for gaming systems! Use the Force, wield your Lightsaber, and blast away Pigtroopers on an intergalactic journey from the deserts of Tatooine to the depths of the Pig Star -- where you’ll face off against the terrifying Darth Vader, Dark Lord of the Pigs! Can you become a Jedi Master and restore freedom to the galaxy? May the birds be with you!'),
(30, 'The LEGO Movie Videogame', 'Game', 364, 16, '2014-11-12', '/images/media/Games/LEGO.png', '/images/media/Games/ratingsymbol_e10.png', 'https://www.youtube.com/embed/hEO0YJ2mzFs', 'New', 96.88, 4, 17, 2, 'Join Emmet and an unlikely group of resistance fighters in their heroic quest to thwart Lord Business’ evil plans—a mission that Emmet is hopelessly and hilariously unprepared for.  \r\nIt’s a wild ride with a surprising mix of over 90 playable characters including Batman, Superman, Wonder Woman, the Green Ninja, Gandalf, Shakespeare, Cleopatra and more.');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `Pro_ID` int(11) NOT NULL,
  `Pro_ Description` text NOT NULL,
  `Sale_StartDate` datetime NOT NULL,
  `Sale_EndDate` datetime NOT NULL,
  `Sale_Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`Pro_ID`, `Pro_ Description`, `Sale_StartDate`, `Sale_EndDate`, `Sale_Amount`) VALUES
(2, 'This is limited time sale. so,what are you waiting for!', '2015-04-03 09:00:00', '2015-04-15 09:00:00', 15),
(10, 'This is limited time sale. so,what are you waiting for!', '2015-03-10 12:00:00', '2015-03-16 11:00:00', 10),
(5, 'This is limited time sale. so,what are you waiting for!', '2015-04-25 08:00:00', '2015-04-30 08:00:00', 12),
(3, 'This is limited time sale. so,what are you waiting for!', '2015-03-18 07:00:00', '2015-03-23 06:00:00', 7),
(27, 'This is limited time sale. so,what are you waiting for!', '2015-05-03 03:00:00', '2015-05-10 04:00:00', 20),
(25, 'This is limited time sale. so,what are you waiting for!', '2015-05-01 05:00:00', '2015-05-05 06:00:00', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
 ADD PRIMARY KEY (`Comp_ID`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
 ADD PRIMARY KEY (`Platform_ID`), ADD KEY `Game_ID` (`Platform_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`P_ID`), ADD KEY `Category_ID` (`Category_ID`,`Company_ID`), ADD KEY `Platform_id` (`Platform_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
 ADD KEY `Pro_ID` (`Pro_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
