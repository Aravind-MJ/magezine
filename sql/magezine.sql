-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2016 at 07:52 AM
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
-- Table structure for table `login_log`
--

CREATE TABLE IF NOT EXISTS `login_log` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`id`, `user_id`, `time`, `status`) VALUES
(7, 0, '2016-08-07 05:49:59.789732', 0),
(8, 0, '2016-08-07 05:51:14.474524', 0),
(9, 1, '2016-08-07 05:51:26.584175', 0),
(10, 1, '2016-08-07 05:51:49.637736', 1);

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
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
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
-- AUTO_INCREMENT for table `login_log`
--
ALTER TABLE `login_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mag_users`
--
ALTER TABLE `mag_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
