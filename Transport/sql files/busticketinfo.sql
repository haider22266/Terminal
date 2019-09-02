-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 03:25 PM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
