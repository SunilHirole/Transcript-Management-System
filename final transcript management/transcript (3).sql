-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2013 at 07:45 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transcript`
--

-- --------------------------------------------------------

--
-- Table structure for table `dupid`
--

CREATE TABLE IF NOT EXISTS `dupid` (
  `recpt` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `prog` varchar(10) NOT NULL,
  `rollno` int(12) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `sem` varchar(6) NOT NULL,
  `year` int(6) NOT NULL,
  `spec` varchar(15) NOT NULL,
  `dupid_type` varchar(35) NOT NULL,
  `fees` int(10) NOT NULL,
  `add` varchar(50) NOT NULL,
  `total` int(10) NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recpt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dupid`
--

INSERT INTO `dupid` (`recpt`, `name`, `prog`, `rollno`, `dept`, `sem`, `year`, `spec`, `dupid_type`, `fees`, `add`, `total`, `apply_date`) VALUES
(1, 'xsX', 'B.tech', 6626, 'BK', '1st', 2008, 'NILL', 'Duplicate ID card', 100, '232', 100, '2013-10-21 18:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `recpt` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `prog` varchar(10) NOT NULL,
  `rollno` int(12) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `sem` varchar(6) NOT NULL,
  `year` int(6) NOT NULL,
  `spec` varchar(15) NOT NULL,
  `grade_type` varchar(35) NOT NULL,
  `fees` int(10) NOT NULL,
  `add` varchar(50) NOT NULL,
  `total` int(10) NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recpt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pass`) VALUES
(205112024, 'asdfg'),
(205112082, 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `tdata`
--

CREATE TABLE IF NOT EXISTS `tdata` (
  `recpt` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `prog` varchar(10) NOT NULL,
  `rollno` int(12) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `sem` varchar(6) NOT NULL,
  `year` int(6) NOT NULL,
  `spec` varchar(15) NOT NULL,
  `tras_type` varchar(35) NOT NULL,
  `fees` int(10) NOT NULL,
  `no_trans` int(5) NOT NULL,
  `add` varchar(50) NOT NULL,
  `total` int(10) NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recpt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1528 ;

--
-- Dumping data for table `tdata`
--

INSERT INTO `tdata` (`recpt`, `name`, `prog`, `rollno`, `dept`, `sem`, `year`, `spec`, `tras_type`, `fees`, `no_trans`, `add`, `total`, `apply_date`) VALUES
(1523, 'Sunil Hirole', 'MCA', 205112024, 'CA', '3rd', 2013, 'NILL', 'Full Transcript (additional)', 20, 1, 'Aquamarine-A', 20, '0000-00-00 00:00:00'),
(1524, 'Anil', 'MCA', 205112076, 'CA', '3rd', 2013, 'NILL', 'Partial Transcript (first copy)', 80, 2, 'Aquamarine-A', 160, '0000-00-00 00:00:00'),
(1525, 'qwerty', 'MBA', 565465, 'snvjk', '1st', 2008, 'cj', 'Full Transcript (first copy)', 100, 1, 'jnkjv', 100, '2013-10-21 14:15:19'),
(1526, 'BJK', 'B.Arch', 20241, 'CA', '2nd', 2009, 'NILL', 'Partial Transcript (first copy)', 80, 2, 'bhb', 160, '2013-10-21 17:39:56'),
(1527, 'fjkvh', 'B.Arch', 211, 'ca', '2nd', 2009, 'n', 'Select', 0, 0, '', 0, '2013-10-21 18:13:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
