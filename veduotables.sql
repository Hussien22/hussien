-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 06:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veduotables`
--

-- --------------------------------------------------------

--
-- Table structure for table `marceting`
--

CREATE TABLE `marceting` (
  `ID` int(8) NOT NULL,
  `PATH` varchar(111) NOT NULL,
  `IMAGPATH` varchar(111) NOT NULL,
  `DESCRIPTION` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `networkveduo`
--

CREATE TABLE `networkveduo` (
  `ID` int(8) NOT NULL,
  `PATH` varchar(111) NOT NULL,
  `IMAGPATH` varchar(111) NOT NULL,
  `DESCRIPTION` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networkveduo`
--

INSERT INTO `networkveduo` (`ID`, `PATH`, `IMAGPATH`, `DESCRIPTION`) VALUES
(1, '1.mp4', '1.jpg', 'first one to start in networking'),
(2, '2.mp4', '2.jpg', 'secand to start in the network'),
(3, '3.mp4', '3.jpg', 'therred in networking '),
(4, '4.mp4', '4.jpg', 'fourth one that give ahint ');

-- --------------------------------------------------------

--
-- Table structure for table `programingveduo`
--

CREATE TABLE `programingveduo` (
  `ID` int(8) NOT NULL,
  `PATH` varchar(111) NOT NULL,
  `IMAGPATH` varchar(111) NOT NULL,
  `DESCRIPTION` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programingveduo`
--

INSERT INTO `programingveduo` (`ID`, `PATH`, `IMAGPATH`, `DESCRIPTION`) VALUES
(1, '11.mp4', '11.jpg', 'starting in lairn the programming'),
(2, '22.mp4', '22.jpg', 'secand  veduo to starte learn programing'),
(3, '33.mp4', '33.jpg', 'thirred veduo of starting to veduo'),
(4, '44.mp4', '44.jpg', 'fours one to start learn to ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(111) NOT NULL,
  `paswword` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `paswword`) VALUES
(1, 'hussien', 11111),
(2, 'hussin1', 1),
(3, 'aa', 333),
(4, 'aaaa', 4444);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
