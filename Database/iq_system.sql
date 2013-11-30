-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2013 at 09:41 PM
-- Server version: 5.5.20-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iq_system`
--
CREATE DATABASE IF NOT EXISTS `iq_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `iq_system`;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `Platform` varchar(20) DEFAULT NULL,
  `Language` varchar(20) DEFAULT NULL,
  `Percentage` varchar(10) DEFAULT NULL,
  `Quote` varchar(50) DEFAULT NULL,
  `Benefits` varchar(50) DEFAULT NULL,
  `Phase` varchar(20) DEFAULT NULL,
  `Field` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`Platform`, `Language`, `Percentage`, `Quote`, `Benefits`, `Phase`, `Field`) VALUES
('windows', 'java', 'jhj', ' hjh', 'hh', 'hjh', 'hj'),
('', '', '', '', '', '', ''),
('windows', 'java', 'ghg', '', '', '', ''),
('windows', 'java', 'ghg', 'hfjh', 'hghj', 'jhghj', 'hjghj'),
('windows', 'java', 'hh', 'hjhjh', 'jhj', 'jhjh', 'hjh'),
('', '', '', '', '', '', ''),
('Mac', 'java', 'jh', 'hjhjhjk', 'jhkjhkh', 'hkhkjk', 'hkhkj'),
('', '', '', '', '', '', ''),
('Mac', 'java', '', '', '', '', ''),
('Mac', 'java', 'hh', ' hkjhj', 'hguigiu', 'hg', 'gu');

-- --------------------------------------------------------

--
-- Table structure for table `templates2`
--

CREATE TABLE IF NOT EXISTS `templates2` (
  `Rating` varchar(20) DEFAULT NULL,
  `Satisfaction` varchar(50) DEFAULT NULL,
  `Recommend` varchar(10) DEFAULT NULL,
  `Reason` varchar(50) DEFAULT NULL,
  `Changes` varchar(40) DEFAULT NULL,
  `Comments` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates2`
--

INSERT INTO `templates2` (`Rating`, `Satisfaction`, `Recommend`, `Reason`, `Changes`, `Comments`) VALUES
('good', 'very satisfied', 'no', 'jhgy', 'ghgh', 'gjhgjhg');

-- --------------------------------------------------------

--
-- Table structure for table `templates3`
--

CREATE TABLE IF NOT EXISTS `templates3` (
  `Job_title` varchar(20) DEFAULT NULL,
  `Job_period` varchar(20) DEFAULT NULL,
  `Job_area` varchar(50) DEFAULT NULL,
  `Compare` varchar(20) DEFAULT NULL,
  `Usages` varchar(20) DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates3`
--

INSERT INTO `templates3` (`Job_title`, `Job_period`, `Job_area`, `Compare`, `Usages`, `Location`) VALUES
('gh', 'ghgh', 'ghgh', 'better', '', 'home'),
('jhh', 'jhjhjh', 'hjhj', 'better', 'daily', 'home'),
('hlhkh', 'jhj', 'hjhj', 'better', 'daily', 'office'),
('jhj', 'hjhj', 'hjh', 'unsure', 'unsure', 'office'),
('hhjh', 'hj', 'hjjh', 'better', 'daily', '');

-- --------------------------------------------------------

--
-- Table structure for table `templates5`
--

CREATE TABLE IF NOT EXISTS `templates5` (
  `Memorize` varchar(20) DEFAULT NULL,
  `Assist` varchar(20) DEFAULT NULL,
  `Learnability` varchar(20) DEFAULT NULL,
  `Effectiveness` varchar(20) DEFAULT NULL,
  `Efficients` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates5`
--

INSERT INTO `templates5` (`Memorize`, `Assist`, `Learnability`, `Effectiveness`, `Efficients`) VALUES
('yes', 'yes', 'yes', 'yes', ''),
('yes', 'yes', 'yes', 'yes', ''),
('yes', 'yes', 'yes', 'yes', ''),
('yes', 'yes', 'yes', 'yes', ''),
('no', 'no', 'no', 'yes', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
