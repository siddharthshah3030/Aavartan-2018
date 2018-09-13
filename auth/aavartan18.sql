-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 08:21 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aavartan18`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`) VALUES
(1, 'October Sky'),
(2, 'CAD-alyst'),
(3, 'Lan Gaming'),
(4, 'Sherlock Holmes'),
(5, 'Khet'),
(6, 'MARVEL TREASURE HUNT'),
(7, 'FOOT-TRONICA'),
(8, 'CRAZY CODES'),
(9, 'Gwiggle'),
(10, 'Sale your stock'),
(11, 'CAPTURE THE MOMENT'),
(12, 'CODENESIA'),
(13, 'Kya aap 5vi pass se tezz h??'),
(14, 'GRAVITY CONTROL'),
(15, 'Wire bend'),
(16, 'Tech Charades'),
(17, 'Rush Hour');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

CREATE TABLE `forgotpassword` (
  `id` int(100) NOT NULL,
  `rkey` varchar(64) NOT NULL,
  `time` int(11) NOT NULL,
  `status` char(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgotpassword`
--

INSERT INTO `forgotpassword` (`id`, `rkey`, `time`, `status`) VALUES
(8, 'ebdf2983f429ae8b28d5fcf3d3094a69', 1536759319, 'used'),
(8, '7be87068b20b26ffcc871bc9b622fe6d', 1536759474, 'used'),
(8, '0ff67afcadae20ddc7fec827584276d0', 1536760408, 'pending'),
(10, '9c0b171c02618f6a1c0806585102ac03', 1536767357, 'used');

-- --------------------------------------------------------

--
-- Table structure for table `registered_events`
--

CREATE TABLE `registered_events` (
  `id` int(100) NOT NULL,
  `1` tinyint(1) NOT NULL DEFAULT '0',
  `2` tinyint(1) NOT NULL DEFAULT '0',
  `3` tinyint(1) NOT NULL DEFAULT '0',
  `4` tinyint(1) NOT NULL DEFAULT '0',
  `5` tinyint(1) NOT NULL DEFAULT '0',
  `6` tinyint(1) NOT NULL DEFAULT '0',
  `7` tinyint(1) NOT NULL DEFAULT '0',
  `8` tinyint(1) NOT NULL DEFAULT '0',
  `9` tinyint(1) NOT NULL DEFAULT '0',
  `10` tinyint(1) NOT NULL DEFAULT '0',
  `11` tinyint(1) NOT NULL DEFAULT '0',
  `12` tinyint(1) NOT NULL DEFAULT '0',
  `13` tinyint(1) NOT NULL DEFAULT '0',
  `14` tinyint(1) NOT NULL DEFAULT '0',
  `15` tinyint(1) NOT NULL DEFAULT '0',
  `16` tinyint(1) NOT NULL DEFAULT '0',
  `17` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_events`
--

INSERT INTO `registered_events` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`) VALUES
(42, 0, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phoneno` bigint(10) DEFAULT NULL,
  `branch` varchar(100) NOT NULL,
  `course` varchar(40) NOT NULL,
  `college` varchar(100) NOT NULL,
  `semester` int(2) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `activation` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phoneno`, `branch`, `course`, `college`, `semester`, `email`, `password`, `activation`) VALUES
(42, 'Akash Gayakwad', 9039739727, 'CSE', 'B.Tech.', 'NIT Raipur', 3, 'akashgayakwad123@gmail.com', '780ee723dc9e18e09db21e5c6772671701e7346b5e013811760b2e37129c23bc', 'activated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
