-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2014 at 12:33 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `golf_club_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `golf_clubs`
--

CREATE TABLE `golf_clubs` (
`id` int(11) NOT NULL,
  `club_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `year_established` date NOT NULL,
  `club_adress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `other_club_details` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `golf_clubs`
--

INSERT INTO `golf_clubs` (`id`, `club_name`, `year_established`, `club_adress`, `other_club_details`) VALUES
(2, 'yyy', '2014-11-11', 'wffw', 'wfwfwf');

-- --------------------------------------------------------

--
-- Table structure for table `lockers`
--

CREATE TABLE `lockers` (
`id` int(11) NOT NULL,
  `golf_club_id` int(11) NOT NULL,
  `locker_location` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `locker_rental_amount` decimal(10,0) NOT NULL,
  `other_locker_details` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lockers`
--

INSERT INTO `lockers` (`id`, `golf_club_id`, `locker_location`, `locker_rental_amount`, `other_locker_details`) VALUES
(2, 2, '420 rue desplantes', '300', '2014-11-11'),
(3, 2, 'rotot boul. otto', '23', '2014-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
`id` int(11) NOT NULL,
  `golf_club_id` int(11) NOT NULL,
  `member_first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `member_last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `member_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `member_address` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `golf_club_id`, `member_first_name`, `member_last_name`, `member_email`, `member_address`) VALUES
(1, 2, 'toto', 'oeoeo', 'oeeooe@tot.com', '3'),
(2, 2, 'rrr', 'eeee', 'www@hotm.poo', '1'),
(3, 2, 'totoww', 'eeee', 'qwdq@ggg.oo', '6');

-- --------------------------------------------------------

--
-- Table structure for table `members_lockers`
--

CREATE TABLE `members_lockers` (
`id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `locker_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `members_lockers`
--

INSERT INTO `members_lockers` (`id`, `member_id`, `locker_id`) VALUES
(1, 1, 2),
(2, 3, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 3),
(6, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
`id` int(10) NOT NULL,
  `golf_club_id` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_first_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_last_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_pro_details` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Courriel` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `hash_change_password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(2, 'admin', 'afebb4a30fffa1f413fd3045a5646d1fad3bd17a', 'admin@admin.com', NULL, 'admin', NULL, '2014-11-11 05:08:31', '2014-11-11 05:08:31'),
(3, 'Eric', '595fdb780884d9d3efa91814b3f7841a949c60e7', 'toto@hotmail.com', NULL, 'author', NULL, '2014-11-11 07:21:47', '2014-11-11 07:21:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golf_clubs`
--
ALTER TABLE `golf_clubs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lockers`
--
ALTER TABLE `lockers`
 ADD PRIMARY KEY (`id`), ADD KEY `golf_club_id` (`golf_club_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_lockers`
--
ALTER TABLE `members_lockers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
 ADD PRIMARY KEY (`id`), ADD KEY `employed_by_club_id` (`golf_club_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golf_clubs`
--
ALTER TABLE `golf_clubs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lockers`
--
ALTER TABLE `lockers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members_lockers`
--
ALTER TABLE `members_lockers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lockers`
--
ALTER TABLE `lockers`
ADD CONSTRAINT `lockers_ibfk_1` FOREIGN KEY (`golf_club_id`) REFERENCES `golf_clubs` (`id`);

--
-- Constraints for table `professionals`
--
ALTER TABLE `professionals`
ADD CONSTRAINT `professionals_ibfk_1` FOREIGN KEY (`golf_club_id`) REFERENCES `golf_clubs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
