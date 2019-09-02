-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 03:23 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `address`, `number`, `email`, `password`) VALUES
('Haider', 'Mnshigonj', 1992183707, 'aliangosh123@gmail.com', '99'),
('Haider Tuhin', 'Mnshigonj', 1992183707, 'khanjaky7@gmail.com', '77'),
('hh', 'Mnshigonj', 1992183707, 'amoin953@gmail.com', '88'),
('hmjmhjn', 'Mnshigonj', 1992183707, 'alihaidertuhin@gmail.com', '66');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bname` text NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL,
  `sit` int(40) NOT NULL,
  `time` varchar(30) NOT NULL,
  `price` int(200) NOT NULL,
  `license` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bustbl`
--

CREATE TABLE `bustbl` (
  `bname` text NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL,
  `sit` int(20) NOT NULL,
  `time` varchar(30) NOT NULL,
  `price` int(200) NOT NULL,
  `license` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bustbl`
--

INSERT INTO `bustbl` (`bname`, `from`, `to`, `sit`, `time`, `price`, `license`) VALUES
('hanif', 'Dhaka', 'Khulna', 40, '6', 500, '4444'),
('hanif', 'Dhaka', 'Khulna', 40, '6', 55, '555'),
('Sohag', 'Dhaka', 'Khulna', 40, '8:30', 500, '2323'),
('hanif', 'Rajshahi', 'Khulna', 40, '8:30', 500, '44445');

-- --------------------------------------------------------

--
-- Table structure for table `busticketinfo`
--

CREATE TABLE `busticketinfo` (
  `from` text NOT NULL,
  `to` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` int(20) NOT NULL,
  `license` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busticketinfo`
--

INSERT INTO `busticketinfo` (`from`, `to`, `email`, `number`, `license`) VALUES
('Dhaka', 'Rajshahi', 'aliangosh123@gmail.c', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'aliangosh123@gmail.c', 1992183707, 4444),
('Dhaka', 'Rajshahi', 'fok55470@gmail.com', 1992183707, 2323),
('Dhaka', 'Rajshahi', 'fok55470@gmail.com', 1992183707, 2323),
('Dhaka', 'Rajshahi', 'alihaidertuhin@gmail', 1992183707, 2323),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 2323);

-- --------------------------------------------------------

--
-- Table structure for table `busticketverify`
--

CREATE TABLE `busticketverify` (
  `number` int(30) NOT NULL,
  `transaction` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busticketverify`
--

INSERT INTO `busticketverify` (`number`, `transaction`) VALUES
(1992183707, 54664),
(1992183707, 54664);

-- --------------------------------------------------------

--
-- Table structure for table `calbusticket`
--

CREATE TABLE `calbusticket` (
  `A1` int(30) NOT NULL,
  `A2` int(30) NOT NULL,
  `A3` int(30) NOT NULL,
  `A4` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calbusticket`
--

INSERT INTO `calbusticket` (`A1`, `A2`, `A3`, `A4`) VALUES
(1, 3, 0, 0),
(2, 0, 0, 0),
(4, 0, 0, 0),
(3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `address`, `number`, `email`, `password`) VALUES
('Haider', 'Mnshigonj', 1992183707, 'aliangosh123@gmail.c', 'haider'),
('', '', 0, '', ''),
('hmjmhjn', 'Mnshigonj', 1992183707, 'aliangodsh123@gmail.', 'hh'),
('hhh', 'mn', 1992183707, 'alihaidertuhin@gmail', 'kk'),
('Tuhin', 'ali@gmailcom', 1992183707, 'khanjaky7@gmail.com', '888'),
('Haider', 'Mnshigonj', 1992183707, 'aliangosh123@gmail.c', '66'),
('Haider', 'Mnshigonj', 1992183707, 'aliangosh123@gmail.c', '888');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
