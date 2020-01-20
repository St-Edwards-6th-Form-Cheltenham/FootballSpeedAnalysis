-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 10:31 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvdList`
--

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Genre` text NOT NULL,
  `RunningTime` int(11) NOT NULL,
  `Year` year(4) NOT NULL,
  `PlotSummary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`ID`, `Title`, `Genre`, `RunningTime`, `Year`, `PlotSummary`) VALUES
(1, 'c jkz` m', 'Comedy', 222, 2018, 'cvd'),
(3, 'The Moonstone', 'Comedy', 232, 1967, 'Very fast action packed comedy'),
(4, ' vids ', 'Cult Thriller', 3, 2018, 'Shorty');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('john', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`),
  ADD UNIQUE KEY `ID_4` (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_3` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
