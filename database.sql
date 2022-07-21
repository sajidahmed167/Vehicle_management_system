-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 12:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `vmodel` varchar(40) NOT NULL,
  `vcolour` varchar(40) NOT NULL,
  `vtype` varchar(20) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `vnumber` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `vmodel`, `vcolour`, `vtype`, `oname`, `vnumber`) VALUES
(6, 'AE86', 'Matte Black', 'car', 'Takumi Sama', 12344),
(7, 'GT86', 'Matte Black', 'car', 'Abdul Sama', 12222),
(8, 'FR-77', 'Red', 'motorcycle', 'MD Kuddus', 12224),
(9, 'Mustang GT', 'Lime Green', 'car', 'Mr Sohel', 1222),
(10, 'Nissan GTR', 'Yellow', 'car', 'MD Kuddus', 1222222),
(11, 'honda civic', 'Yellow', 'car', 'MD ali', 12223),
(12, 'honda civic', 'Red', 'car', 'MD ali hassn', 122235),
(13, 'bike-r', 'Red', 'motorcycle', 'MD ali hassn', 1222356),
(14, 'Endo Ferrari ', 'Ferrari Red', 'car', 'Hasem the kasem', 11111),
(15, 'Buggati veron', 'Yellow', 'car', 'Jinn', 113333),
(16, 'MR3-422', 'Yellow', 'motorcycle', 'Quarty', 1133331),
(17, 'Toyota Premio', 'Orange', 'car', 'Jasom', 234566),
(18, 'toyota', 'blalsk', 'motorcycle', 'sssss', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `questiona` char(1) NOT NULL,
  `questionb` char(1) NOT NULL,
  `questionc` varchar(1) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `username`, `email`, `questiona`, `questionb`, `questionc`, `feedback`) VALUES
(1, 'sajid ahmed', 'samee_ahmed24@gmail.', 'y', 'n', 'n', 'I am checking to see if your state of the art feedback system works'),
(2, 'Sajid Ahmed', 'sajid.ahmed@gmail.co', 'n', 'y', 'n', 'I have been harassed by one of the drivers'),
(3, 'Sajid Ahmed dd', 'sajid@gmail.com', 'n', 'n', 'n', 'sasa'),
(4, 'sajid', 'sasdasdad@gmail.com', 'y', 'y', 'y', 'sadasdsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `carnumber` int(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `nid` varchar(40) NOT NULL,
  `phoneCode` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `havedriver` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `carnumber`, `gender`, `nid`, `phoneCode`, `phone`, `havedriver`) VALUES
(5, 'Sajid Ahmed', 0, 'm', 'ban1', 880, 1673291942, 'n'),
(6, 'Oishi Tashfia', 0, 'f', 'ban2', 880, 1673291942, 'n'),
(7, 'Shakib Not Hassan ', 0, 'm', 'ban3', 880, 1673292933, 'n'),
(8, 'sajid khan', 12335455, 'm', 'ban-33', 880, 1999999999, 'n'),
(9, 'Maksud', 2223344, 'm', 'ban-22334', 880, 1999999934, 'y'),
(10, 'addg', 2147483647, 'm', 'ban222', 880, 1212143243, 'n'),
(11, 'addg', 2147483647, 'm', 'ban222222', 880, 1212143243, 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
