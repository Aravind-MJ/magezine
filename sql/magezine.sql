-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2016 at 05:21 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `magezine`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_of_mags`
--

CREATE TABLE IF NOT EXISTS `list_of_mags` (
`id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_mags`
--

INSERT INTO `list_of_mags` (`id`, `name`) VALUES
(1, 'Magezine 1'),
(2, 'Magezine 2');

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE IF NOT EXISTS `login_log` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `used_username` varchar(255) NOT NULL DEFAULT 'NORMAL',
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`id`, `user_id`, `used_username`, `time`, `status`) VALUES
(1, 1, 'aravind', '2016-08-13 13:55:20.837815', 0),
(2, 1, 'NORMAL', '2016-08-13 13:55:33.878068', 1);

-- --------------------------------------------------------

--
-- Table structure for table `magezines`
--

CREATE TABLE IF NOT EXISTS `magezines` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pages` int(11) NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `download_count` int(11) NOT NULL DEFAULT '0',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mag_users`
--

CREATE TABLE IF NOT EXISTS `mag_users` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mag_users`
--

INSERT INTO `mag_users` (`id`, `name`, `username`, `email`, `password`, `role`, `created_date`, `updated_date`) VALUES
(1, 'Aravind M J', 'aravind', 'aravind@gmail.com', '$2y$10$KUwjVReMUSf3Tz7ZtPEjieW/ZKTgVF/MaNwoJmsyQWWo1T6I7WeN2', 1, '2016-08-06', '2016-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_of_mags`
--
ALTER TABLE `list_of_mags`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magezines`
--
ALTER TABLE `magezines`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mag_users`
--
ALTER TABLE `mag_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_of_mags`
--
ALTER TABLE `list_of_mags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_log`
--
ALTER TABLE `login_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `magezines`
--
ALTER TABLE `magezines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mag_users`
--
ALTER TABLE `mag_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
