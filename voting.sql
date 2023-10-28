-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2011 at 02:31 AM
-- Server version: 5.1.32
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `leve` int(25) NOT NULL AUTO_INCREMENT,
  `password` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`leve`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`leve`, `password`, `username`) VALUES
(1, 'buddha', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `votecount` int(11) NOT NULL DEFAULT '0',
  `sy` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `position`, `name`, `platform`, `picture`, `votecount`, `sy`) VALUES
(1, 'President', 'Prem Bahadur KC', 'cmp', 'Prem Bahadur KC.jpg', 1, '2011'),
(2, 'President', 'Anil Damuru', 'cmp', 'Anil Damuru.jpg', 0, '2011'),
(3, 'Vice President', 'Prem Bahadur KC', 'cmp', 'Prem Bahadur KC.jpg', 0, '2011');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position` varchar(50) NOT NULL,
  `IDNo` int(11) NOT NULL AUTO_INCREMENT,
  `Limit` int(11) NOT NULL,
  PRIMARY KEY (`IDNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position`, `IDNo`, `Limit`) VALUES
('President', 1, 1),
('Vice President', 2, 1),
('Secretary', 3, 1),
('Treasurer', 4, 1),
('Vice Secretary', 5, 1),
('Member', 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studid` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `sec` varchar(5) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `leve` varchar(10) NOT NULL DEFAULT '2',
  `sy` varchar(15) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studid`, `name`, `course`, `year`, `sec`, `password`, `leve`, `sy`) VALUES
('09-201', 'Anil Damuru', 'Computer', '2nd', 'A', '0c45ca', '2', '2009-2013'),
('09-220', 'Prem Bahadur KC', 'Computer', '2nd', 'A', 'buddha', '2', '2009-2013');

-- --------------------------------------------------------

--
-- Table structure for table `votecount`
--

CREATE TABLE IF NOT EXISTS `votecount` (
  `StudID` varchar(15) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votecount`
--

INSERT INTO `votecount` (`StudID`, `Position`, `Result`) VALUES
('09-220', 'President', 1);
