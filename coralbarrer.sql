-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 05, 2022 at 07:20 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coralbarrer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'admin',
  `password` text NOT NULL,
  `profile_pic` text DEFAULT NULL,
  PRIMARY KEY (`admin_id`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `email`, `role`, `password`, `profile_pic`) VALUES
(5, 'diro', 'diro@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
(4, 'admin2', 'admin2@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'assets/img/Profile_pic/Screenshot (12).png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `user_email`, `msg`, `time`, `date`, `role`) VALUES
(5, 6, 'admin2@gmail.com', 'hlw', '10:21:03', '2022-09-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type` varchar(200) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `post` text NOT NULL,
  `post_img` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_email`, `post`, `post_img`, `date`, `time`, `role`) VALUES
(6, 'admin2@gmail.com', 'wedwc dve', 'assets/img/Article/2.PNG', '2022-09-05', '10:18:48', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `profile_pic` text DEFAULT NULL,
  PRIMARY KEY (`user_id`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `country`, `contact_no`, `password`, `role`, `profile_pic`) VALUES
(7, 'samitha', 'samitha@gmail.com', 'dbfjasdf', '0783748424', '81fa86daf7bd9bbed9fb08de7ebac432', 'user', NULL),
(8, 'krishan', 'krishan@gmail.com', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'user', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
