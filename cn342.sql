-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 03:43 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cn342`
--

-- --------------------------------------------------------

--
-- Table structure for table `addren`
--

CREATE TABLE `addren` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addren`
--

INSERT INTO `addren` (`id`, `Header`, `Detail`) VALUES
(1, 'Add4', 'rigeriogerogeorigeorighor');

-- --------------------------------------------------------

--
-- Table structure for table `addrth`
--

CREATE TABLE `addrth` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addrth`
--

INSERT INTO `addrth` (`id`, `Header`, `Detail`) VALUES
(1, 'av', 's5v');

-- --------------------------------------------------------

--
-- Table structure for table `admien`
--

CREATE TABLE `admien` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admien`
--

INSERT INTO `admien` (`id`, `Header`, `Detail`, `Image`) VALUES
(1, '2', 'qwg', 'à¸Ÿà¸£à¸±à¸‡-à¸™à¸£à¸µà¸à¸¸à¸¥-Miss-Utip-Freshy-Idol-5-teen.mthai944406_369232609864361_1009911989_n.jpg'),
(3, 'sad', 'd', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admith`
--

CREATE TABLE `admith` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admith`
--

INSERT INTO `admith` (`id`, `Header`, `Detail`, `Image`) VALUES
(1, '1s', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `autoen`
--

CREATE TABLE `autoen` (
  `id` int(5) NOT NULL,
  `Header1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header4` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header5` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header6` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail4` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail5` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `autoen`
--

INSERT INTO `autoen` (`id`, `Header1`, `Header2`, `Header3`, `Header4`, `Header5`, `Header6`, `Detail1`, `Detail2`, `Detail3`, `Detail4`, `Detail5`, `Image`) VALUES
(1, 'wefwe', 'efwef', 'wef', 'fw', 'we', 'ewfewf', 'wef', 'wef', 'wef', 'wef', 'gr4', 'q.jpg'),
(2, 'wefwe', 'efwef', 'guigiug', 'fws', 'we', 'ewfewf', 'wef', 'wef', 'wef', 'wef', 'gr4', '');

-- --------------------------------------------------------

--
-- Table structure for table `autoth`
--

CREATE TABLE `autoth` (
  `id` int(5) NOT NULL,
  `Header1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header4` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header5` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Header6` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail4` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail5` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `autoth`
--

INSERT INTO `autoth` (`id`, `Header1`, `Header2`, `Header3`, `Header4`, `Header5`, `Header6`, `Detail1`, `Detail2`, `Detail3`, `Detail4`, `Detail5`, `Image`) VALUES
(1, 'a', 'b', 'c', 'de', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'z.jpg'),
(2, 'a', 'b', 'c', 'de', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'z.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `depaen`
--

CREATE TABLE `depaen` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depaen`
--

INSERT INTO `depaen` (`id`, `Header`, `Detail`, `Image`) VALUES
(1, 'asdfsa', 'wfq', '0'),
(3, '6', 'asf6', '120349608.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `depath`
--

CREATE TABLE `depath` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depath`
--

INSERT INTO `depath` (`id`, `Header`, `Detail`, `Image`) VALUES
(1, 'ads', 's', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `histen`
--

CREATE TABLE `histen` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `histen`
--

INSERT INTO `histen` (`id`, `Header`, `Detail`) VALUES
(1, 'ad', 'xbnd');

-- --------------------------------------------------------

--
-- Table structure for table `histth`
--

CREATE TABLE `histth` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `histth`
--

INSERT INTO `histth` (`id`, `Header`, `Detail`) VALUES
(3, 'hs', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `homeen`
--

CREATE TABLE `homeen` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homeen`
--

INSERT INTO `homeen` (`id`, `Header`, `Detail`, `Image`) VALUES
(1, 'as', 'bs', '3.jpg'),
(5, 'sdgsdg', 'd', '3.jpg'),
(7, '7', '9s', '');

-- --------------------------------------------------------

--
-- Table structure for table `hometh`
--

CREATE TABLE `hometh` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hometh`
--

INSERT INTO `hometh` (`id`, `Header`, `Detail`, `Image`) VALUES
(2, '12à¹€à¸”', '2', ''),
(13, 'h', '', ''),
(14, 'ghj', 'j', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(3, '4j', 'aj'),
(5, 'mickey', '248');

-- --------------------------------------------------------

--
-- Table structure for table `newen`
--

CREATE TABLE `newen` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `Detail` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `Image` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newen`
--

INSERT INTO `newen` (`id`, `Header`, `Detail`, `Image`) VALUES
(1, 'sadf', 'ผมทแืผสแ่ผแ่ทวปแาวป่แวปสาแสวแาวผปาแวผปาแวาแวาแวสผปาแวผปาแสวผปาแวสผปาแวผปาแวผปาแวสผปาแวสผปาแวผปาแวผปาวแผปแผปแผปแ', ''),
(3, 'aaa', 'à¸”à¸³à¸«à¸³à¸²à¸£à¸«à¸²à¸£à¸«à¹ˆà¸à¸µà¸£à¹ˆà¹€à¹‰à¸µà¸£à¸·à¹‰à¹ˆà¹€à¹ˆà¸µà¸„à¸«à¸³à¹‰à¹ˆà¹€à¸µà¸„à¸«à¹ˆà¸«à¸à¸£à¸•à¹ˆà¹€à¸«à¸à¸£à¸•à¹ˆà¸²à¹€à¸à¸£à¸«à¸•à¸²à¹€à¹ˆà¸£à¸²à¹€à¸„à¸•à¹ˆà¸•à¹€à¸Ÿà¹„à¹ˆà¸£à¸•à¸Ÿà¹„à¹ˆà¸™à¸²à¸œà¸—à¸¡à¹ˆà¸£à¸à¸­à¸·à¸—à¸µà¸£à¸Ÿà¸³à¸—à¸­à¸£à¸à¸«à¸·à¸—à¸­à¸µà¸£à¸—à¸µà¸£à¸”à¸·à¸Ÿà¹„à¹ˆà¸—à¸¡à¹ˆà¸£à¸·à¸¢à¸ªà¸­à¸—à¸¡à¸µà¸£à¸Ÿà¸«à¸·à¸—à¸·à¸µà¸­à¸Ÿà¸£à¸—à¸¡à¸­à¸Ÿà¸·à¸—à¹ˆà¸£à¸Ÿà¸«à¸™à¸²à¹ˆà¸£à¸·à¸«à¸­à¸Ÿà¸—à¸™à¹ˆà¸­à¸·à¸«à¸—à¹ˆà¸£à¸«à¸­à¸—à¸¡à¸£à¹ˆà¸­à¸«à¸Ÿà¸—à¸­à¸«à¸Ÿà¹ˆà¸£à¸—à¸­à¸Ÿà¸«à¸­à¸µà¸•à¸·à¸«à¹ˆà¸£à¸«à¸­à¸Ÿà¸·à¸£à¹ˆà¸­à¸«à¸·à¸—à¹ˆà¸£à¸«à¸­à¸—à¸µà¸«à¸­à¸Ÿà¸—à¸Ÿà¸£à¸—à¸µà¸·à¹ˆà¸—à¸­à¸«à¸£à¸·à¸«à¸­à¸µà¸£à¸Ÿà¸™à¸²à¸¡à¸­à¸«à¸²à¸™à¸ªà¸¡à¸­à¸«à¹ˆà¸£à¸·à¸«à¸—à¸­à¸Ÿà¸™à¸²à¸­à¸—à¸«à¸Ÿà¸£à¸·à¹ˆà¸­à¸—à¸£à¸«à¸™à¸Ÿà¸·à¸—à¸­à¸£à¸«à¹ˆà¸Ÿà¸™à¸²à¸·à¸—à¸­à¹ˆà¸£à¸«à¸—à¸«à¸­à¹ˆà¸£à¸—à¸­à¸«à¸µà¹ˆà¸­à¸·à¸«à¸—à¸Ÿà¹ˆà¸£à¸´à¸·à¹ˆà¸£à¸·à¸—à¸­à¸«à¹ˆà¸£à¸·à¸—à¸­à¸«à¹ˆà¸£à¸·à¸­à¸«à¸µà¸£à¸·à¸£à¸·à¸«à¸­à¹ˆà¸£à¸«à¸­à¸·à¸µà¹‰à¹ˆà¸£à¸­à¸«à¸·à¸£à¸·à¸­à¸« à¸µà¸£à¹‰à¸«à¸­à¸·à¸µà¸·à¸µà¸£à¸«à¸·', ''),
(4, 'à¸Ÿ', 'à¸«à¸Ÿà¸Ÿà¸à¸Ÿà¸', '3.jpg'),
(6, 's', 'a', ''),
(7, 'à¸²à¸§', 'à¸§à¸²à¸·à¸·à¸²à¸§', ''),
(8, 'à¸›à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸”', 'à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸­à¸à¸”à¹€à¸”à¸à¹€à¸à¸”à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€à¹€', ''),
(9, 'OOOOOOO', 'lhfidsfoiuehfbsdvnlvohsojvdnvkhsdfv Testvdjvsdfpsdfjdpsjfpsdjfposdpof', ''),
(10, 'lortioeritoreitoeritoritoeritoeritoert', 'dsfdsfdsfdsfdsfsdfsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', ''),
(11, 'dgdfgfdgfdg', 'xcvcxvcxvxcvxcv xvxcvxcvxcvxcvxcvxcv fvffbdfhdfhdfh fgdfgfdgdfgdfg', ''),
(12, 'Conjugation', 'The negative verb has no infinitive form. The negative verb is the same with indicative, conditional and potential mood and, with those moods, it is conjugated only in person. (For the negative verb in the imperative mood', ''),
(13, '', 'h', ''),
(14, 'asv', 'wq', '');

-- --------------------------------------------------------

--
-- Table structure for table `newth`
--

CREATE TABLE `newth` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newth`
--

INSERT INTO `newth` (`id`, `Header`, `Detail`, `Image`) VALUES
(1, 'news', 'a', '3.jpg'),
(4, 'qwdqw', 'fwq', 'à¸Ÿà¸£à¸±à¸‡-à¸™à¸£à¸µà¸à¸¸à¸¥-à¹ƒà¸™à¸Šà¸¸à¸”à¸™à¸´à¸ªà¸´à¸•à¸ˆà¸¸à¸¬à¸²-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `soften`
--

CREATE TABLE `soften` (
  `id` int(5) NOT NULL,
  `Header1` varchar(1000) NOT NULL,
  `Header2` varchar(1000) NOT NULL,
  `Header3` varchar(1000) NOT NULL,
  `Header4` varchar(1000) NOT NULL,
  `Header5` varchar(1000) NOT NULL,
  `Header6` varchar(1000) NOT NULL,
  `Detail1` varchar(1000) NOT NULL,
  `Detail2` varchar(1000) NOT NULL,
  `Detail3` varchar(1000) NOT NULL,
  `Detail4` varchar(1000) NOT NULL,
  `Detail5` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soften`
--

INSERT INTO `soften` (`id`, `Header1`, `Header2`, `Header3`, `Header4`, `Header5`, `Header6`, `Detail1`, `Detail2`, `Detail3`, `Detail4`, `Detail5`, `Image`) VALUES
(3, 'sfaa', 'aa', 'ba', 'zxa', 'xa', 'ca', 'va', 'ba', 'na', 'm,a', ',a', 'module_table_top.png'),
(4, '', '', '', '', '', '', '', '', '', 'as', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `softth`
--

CREATE TABLE `softth` (
  `id` int(5) NOT NULL,
  `Header1` varchar(1000) NOT NULL,
  `Header2` varchar(1000) NOT NULL,
  `Header3` varchar(1000) NOT NULL,
  `Header4` varchar(1000) NOT NULL,
  `Header5` varchar(1000) NOT NULL,
  `Header6` varchar(1000) NOT NULL,
  `Detail1` varchar(1000) NOT NULL,
  `Detail2` varchar(1000) NOT NULL,
  `Detail3` varchar(1000) NOT NULL,
  `Detail4` varchar(1000) NOT NULL,
  `Detail5` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `softth`
--

INSERT INTO `softth` (`id`, `Header1`, `Header2`, `Header3`, `Header4`, `Header5`, `Header6`, `Detail1`, `Detail2`, `Detail3`, `Detail4`, `Detail5`, `Image`) VALUES
(1, 'fsd', 'sdf', 'sdf', 'df', 'ew', 'qfwq', 'qwf', 'saf', 'xzv', 'wvds', 'sdv', 'module_table_bottom.png'),
(2, 'fsd', 'sdf', 'sdf', 'df', 'ew', 'qfwq', 'qwf', 'saf', 'xzv', 'wvds', 'sdv', 'module_table_top.png'),
(3, 'ada', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', 'sf', '', '', '', '', '', '', '', '', '', ''),
(5, '6', '', '', '', '', '', '', '', '5', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studen`
--

CREATE TABLE `studen` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studen`
--

INSERT INTO `studen` (`id`, `Header`, `Detail`) VALUES
(1, 'a', 'ijqfiefw');

-- --------------------------------------------------------

--
-- Table structure for table `studth`
--

CREATE TABLE `studth` (
  `id` int(5) NOT NULL,
  `Header` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studth`
--

INSERT INTO `studth` (`id`, `Header`, `Detail`) VALUES
(5, 'w', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addren`
--
ALTER TABLE `addren`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addrth`
--
ALTER TABLE `addrth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admien`
--
ALTER TABLE `admien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admith`
--
ALTER TABLE `admith`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autoen`
--
ALTER TABLE `autoen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autoth`
--
ALTER TABLE `autoth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depaen`
--
ALTER TABLE `depaen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depath`
--
ALTER TABLE `depath`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histen`
--
ALTER TABLE `histen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histth`
--
ALTER TABLE `histth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeen`
--
ALTER TABLE `homeen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hometh`
--
ALTER TABLE `hometh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newen`
--
ALTER TABLE `newen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newth`
--
ALTER TABLE `newth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soften`
--
ALTER TABLE `soften`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softth`
--
ALTER TABLE `softth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studen`
--
ALTER TABLE `studen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studth`
--
ALTER TABLE `studth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addren`
--
ALTER TABLE `addren`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `addrth`
--
ALTER TABLE `addrth`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admien`
--
ALTER TABLE `admien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admith`
--
ALTER TABLE `admith`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `autoen`
--
ALTER TABLE `autoen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `autoth`
--
ALTER TABLE `autoth`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `depaen`
--
ALTER TABLE `depaen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `depath`
--
ALTER TABLE `depath`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `histen`
--
ALTER TABLE `histen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `histth`
--
ALTER TABLE `histth`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `homeen`
--
ALTER TABLE `homeen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hometh`
--
ALTER TABLE `hometh`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newen`
--
ALTER TABLE `newen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `newth`
--
ALTER TABLE `newth`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `soften`
--
ALTER TABLE `soften`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `softth`
--
ALTER TABLE `softth`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `studen`
--
ALTER TABLE `studen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studth`
--
ALTER TABLE `studth`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
