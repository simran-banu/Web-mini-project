-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2020 at 06:44 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restrogirls`
--
CREATE DATABASE IF NOT EXISTS `restrogirls` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `restrogirls`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE IF NOT EXISTS `book_table` (
  `bid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `time` time NOT NULL,
  `Ntable` int(11) NOT NULL,
  `tb` varchar(100) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`bid`, `name`, `addr`, `phone`, `bdate`, `time`, `Ntable`, `tb`) VALUES
(1, 'Sandhya ', 'bangalore', 2147483647, '2020-12-18', '20:00:00', 4, 'Table2'),
(2, 'Simran ', 'bangalore', 2147483647, '2020-12-30', '05:30:00', 2, 'Table8'),
(3, 'Ramesh ', 'bangalore', 2147483647, '2021-01-01', '01:30:00', 2, 'Table6');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `contact`, `addr`, `email`, `uid`, `pass`) VALUES
('simran', '8553600407', 'bangalore', 'Simranbanu541999@gmail.com', 101, 'Simran123@'),
('sandhya', '9620289420', 'bangalore', 'Sandhyasandy301999@gmail.com', 102, 'sandy123@'),
('Ramesh ', '8217089910', 'bangalore', 'Ramesh09@gmail.com', 103, 'ram123@'),
('Kutty', '9448895521', 'mangalore', 'kutty5@gmail.com', 104, 'Kutty123@');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
