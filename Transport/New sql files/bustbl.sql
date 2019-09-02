-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 10:03 AM
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
('hanif', 'Rajshahi', 'Khulna', 40, '8:30', 500, '44445'),
('hh', 'Dhaka', 'Khulna', 40, '6', 0, '444458');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
