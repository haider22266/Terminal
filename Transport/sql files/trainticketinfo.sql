-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 02:58 PM
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
-- Table structure for table `trainticketinfo`
--

CREATE TABLE `trainticketinfo` (
  `from` text NOT NULL,
  `to` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(40) NOT NULL,
  `license` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainticketinfo`
--

INSERT INTO `trainticketinfo` (`from`, `to`, `email`, `number`, `license`) VALUES
('Dhaka', 'Rajshahi', '', 1992183707, 4444),
('Dhaka', 'Rajshahi', '', 1992183707, 0),
('Dhaka', 'Rajshahi', '', 1992183707, 2323),
('Dhaka', 'Rajshahi', '', 1992183707, 2323),
('Dhaka', 'Rajshahi', '', 1992183707, 4444),
('Rajshahi', 'Dhaka', '', 1992183707, 555),
('', 'Dhaka', '', 1992183707, 4444),
('Rajshahi', 'Dhaka', '', 1992183707, 2323),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 0),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 0),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 0),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 0),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Dhaka', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 4444),
('Dhaka', 'Rajshahi', 'khanjaky7@gmail.com', 1992183707, 4444),
('', '', 'khanjaky7@gmail.com', 1992183707, 4444),
('Rajshahi', 'Rajshahi', 'aliangosh123@gmail.com', 1992183707, 2323);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
