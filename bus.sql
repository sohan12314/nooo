-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2021 at 03:36 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

DROP TABLE IF EXISTS `passengers`;
CREATE TABLE IF NOT EXISTS `passengers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `bustype` varchar(225) NOT NULL,
  `departure` varchar(225) NOT NULL,
  `destination` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `morn` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `name`, `bustype`, `departure`, `destination`, `date`, `morn`) VALUES
(30, 'arjun', 'udayaranga', 'tumkur', 'mandya', '2021-06-25', '09.00 pm'),
(28, 'ram', 'rajahamsa', 'Tamil nadu', 'maharastra', '2021-07-03', '05.00 pm'),
(29, 'abay', 'rajahamsa', 'mysore', 'hubli', '2021-07-01', '05.00 pm'),
(27, 'sanjana', 'airavatha', 'Karnataka', 'mysore', '2021-06-26', '09.00 pm'),
(26, 'shashank', 'rajahamsa', 'hubli', 'manglore', '2021-06-25', '05.00 pm'),
(25, 'SOHAN', 'rajahamsa', 'hubli', 'mysore', '2021-06-25', '08.00 pm'),
(24, 'geethana', 'rajahamsa', 'maharastra', 'mandya', '2021-06-24', '08.00 pm'),
(23, 'sanjana', 'Red bus', 'Andrapradesh', 'Tamil nadu', '2021-06-26', '05.00 pm'),
(22, 'sanjana', 'Red bus', 'Andrapradesh', 'Tamil nadu', '2021-06-26', '05.00 pm'),
(21, 'shreya', 'rajahamsa', 'kerala', 'mandya', '2021-06-23', '10.00 am'),
(20, 'shreya', 'rajahamsa', 'kerala', 'mandya', '2021-06-23', '10.00 am'),
(19, 'shashank', 'airavatha', 'kerala', 'maharastra', '2021-06-24', '10.00 am'),
(18, 'Geethana', 'rajahamsa', 'maharastra', 'kerala', '2021-06-24', '01.00 pm'),
(17, 'SOHAN', 'airavatha', 'Karnataka', 'Karnataka', '2021-06-26', '06.00 am'),
(31, 'umar', 'rajahamsa', 'hubli', 'manglore', '2021-06-24', '05.00 pm'),
(32, 'krishna', 'srs', 'banglore', 'mandya', '2021-06-24', '05.00 pm'),
(33, 'shreya', 'rajahamsa', 'banglore', 'mandya', '2021-06-27', '01.00 pm'),
(34, 'yogananda', 'rajahamsa', 'mandya', 'banglore', '2021-06-26', '05.00 pm'),
(35, 'shashank soundarya', 'airavatha', 'banglore', 'manglore', '2021-06-26', '08.00 pm'),
(36, 'yashwanth', 'rajahamsa', 'mandya', 'banglore', '2021-06-26', '08.00 pm'),
(37, 'rajuuuu', 'srs', 'banglore', 'tumkur', '2021-06-26', '08.00 pm'),
(38, 'SOHAN', 'airavatha', 'maharastra', 'Karnataka', '2021-06-25', '06.00 am'),
(39, 'SOHAN', 'airavatha', 'maharastra', 'Karnataka', '2021-06-25', '06.00 am');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
