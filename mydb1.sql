-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 15, 2020 at 03:19 PM
-- Server version: 8.0.18
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
-- Database: `mydb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `mobile`) VALUES
(1, 'admin1@gmail.com', 'admin@123', '1234567891'),
(2, 'admin2@gmail.com', 'admin2@123', '1234567892'),
(3, 'admin3@gmail.com', 'admin3', '1234567893');

-- --------------------------------------------------------

--
-- Table structure for table `cominfo`
--

DROP TABLE IF EXISTS `cominfo`;
CREATE TABLE IF NOT EXISTS `cominfo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `required_field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `job_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cominfo`
--

INSERT INTO `cominfo` (`id`, `name`, `email`, `required_field`, `job_location`, `experience`) VALUES
(1, 'TCS', 'tcs@gmail.com', 'it', 'Ahemadabad', 'freshers'),
(2, 'Infosys', 'Infosys@gmail.com', 'It', 'Vadodara, Gandhinagar', '2-4 '),
(3, 'L & T', 'l&t@gmail.com', 'It, Mechanical, Civil', 'Bombay, Puna', '2-3, freshers');

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

DROP TABLE IF EXISTS `comp`;
CREATE TABLE IF NOT EXISTS `comp` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `required_field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `job_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`id`, `name`, `email`, `password`, `required_field`, `job_location`, `experience`) VALUES
(1, 'TCS', 'tcs@gmail.com', 'tcs@123', 'it', 'Ahemadabad', 'freshers'),
(2, 'Infosys', 'infosys@gmail.com', 'Infosys@123', 'It', 'Vadodara, Gandhinagar', '2-4'),
(3, 'L & T', 'l&t@gmail.com', 'l&t@123', 'It, Mechanical, Civil', 'Bombay, Puna', '2-3, freshers');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `concern` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

DROP TABLE IF EXISTS `stud`;
CREATE TABLE IF NOT EXISTS `stud` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cpi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `name`, `field`, `email`, `password`, `mobile`, `cpi`) VALUES
(1, 'def', 'csss', 'def@gmail.com', 'def@123', '1239876545', '8.5'),
(2, 'ghi', 'it', 'ghi@gmail.com', 'ghi@123', '1234598765', '9.1'),
(3, 'jkl', 'civil', 'jkl@gmail.com', 'jkl@123', '1239876548', '7.9');

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

DROP TABLE IF EXISTS `stuinfo`;
CREATE TABLE IF NOT EXISTS `stuinfo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cpi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`id`, `name`, `email`, `field`, `cpi`, `mobile`) VALUES
(1, 'def', 'def@gmail.com', 'csss', '8.5', '1239876545'),
(2, 'ghi', 'ghi@gmail.com', 'it', '9.1', '1234598765'),
(3, 'jkl', 'jkl@gmail.com', 'civil', '7.9', '1239876548');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
