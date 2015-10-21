-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2015 at 06:53 AM
-- Server version: 5.6.21-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
`noteid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`noteid`, `user_id`, `title`, `content`, `date_added`) VALUES
(1, 1, 'This is a note', 'Some crappy stuff to be made', '2015-10-20 19:48:14'),
(2, 1, 'another note', 'something something', '2015-10-21 02:01:40'),
(3, 1, 'Wrong time', 'blah blah', '2015-10-21 02:06:01'),
(6, 1, 'change db properties', 'ohh did it work ? yeah maann', '2015-10-21 02:09:44'),
(8, 1, 'leave it', 'yes yes yes... no no no', '2015-10-21 02:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `age` int(10) unsigned DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `age`, `gender`) VALUES
(1, 'sappy', 23, 'm'),
(2, 'joe sargent', 45, 'm'),
(3, 'jack', 44, 'm'),
(4, 'saptharsh', 45, 'm'),
(5, 'hegde', 45, 'm'),
(6, 'sama', 32, 'm'),
(7, 'james', 32, 'f'),
(8, 'rambo', 22, 'f'),
(9, 'adsfasd', 32, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `savedata`
--

CREATE TABLE IF NOT EXISTS `savedata` (
`id` int(11) NOT NULL,
  `textdata` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savedata`
--

INSERT INTO `savedata` (`id`, `textdata`) VALUES
(3, 'There was a typo in the POST variable which I used previously!! finally inserted data using jQuery and AJAX!!'),
(5, 'Get not working'),
(6, 'finally insert display worked!!'),
(8, 'hey, we improved a lot of things');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(1, 'sappy', 'b268bb8911f8aff6345bae0048d87f5d3a6411c3c229a1bc4979c549b6b9e72e', 'owner'),
(2, 'hegde', 'f859c0c60912170facde6d604b69cbb6dd6a2994f729d6ac780a96b4c8a80d89', 'default'),
(3, 'ram', 'fbf2680517a946131e9a4c27d7f0553fd5276bb67f54a50449e836fbbf04637e', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note`
--
ALTER TABLE `note`
 ADD PRIMARY KEY (`noteid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savedata`
--
ALTER TABLE `savedata`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `savedata`
--
ALTER TABLE `savedata`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
