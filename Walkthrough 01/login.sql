-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 10:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` tinyint(4) NOT NULL,
  `L1` varchar(25) NOT NULL DEFAULT '',
  `L2` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `L1`, `L2`) VALUES
(12, 'test2', '$2y$10$qWMhuP6.iHU7YE5P5K1Y1OfGgWhR1rC2g1pwO5pgEBOIpbowcgwr6'),
(13, 'testUser1', '$2y$10$76iOz3rcoV8TK7gz2tqPZejlUo2izZmDLkuUu1Cj2oeP82WDfkMFO'),
(17, 'testUser2', '$2y$10$y75AROQEBt2WsPJqX0krN.RcYBEsyAbjpgbb1OZbbwzlcSGh1Xlri'),
(18, 'testUser3', '$2y$10$8PkZ.8OiqxQWZJbU3vVFNu1temsDWbW609SfFXeu/F6.jmXH2MjUS'),
(19, 'letmein', '$2y$10$PgSBl1AE9JdbymVxfdVa6OBXTlPnkYDdwMedK/nToQsC6cgL2Pfk2'),
(20, 'MateiCatalin', '$2y$10$RdSeE0rDaOgp8pL2mvt4X.1/exVkZkVDkAc1wRgUiEcTwi18Jt3rq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
