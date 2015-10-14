-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2015 at 08:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `session_db`
--
CREATE DATABASE IF NOT EXISTS `session_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `session_db`;

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE IF NOT EXISTS `users_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `username`, `password`) VALUES
(4, 'clemencepatayo@gmail.com', 'like2536'),
(9, 'clemence@gmail.com', 'love2536'),
(11, 'patayo@gmail.com', 'loveme123'),
(12, 'mwenge@gmail.com', 'like253656');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
