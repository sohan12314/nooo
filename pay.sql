-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2021 at 03:37 PM
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
-- Database: `pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `gpay`
--

DROP TABLE IF EXISTS `gpay`;
CREATE TABLE IF NOT EXISTS `gpay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `ph` varchar(225) NOT NULL,
  `tran` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpay`
--

INSERT INTO `gpay` (`id`, `name`, `ph`, `tran`) VALUES
(1, 'Arjun', '123456789', 'a23frt56'),
(2, 'umar', '9606146693', 'a23frt56'),
(3, 'krishna', '960614534', '123e345443'),
(4, 'shreya', '1234567890', 's1h2h3h4'),
(5, 'yogananda', '9880926799', '1082354782'),
(6, 'shashank', '123456789', '12wsd22342r'),
(7, 'yashwanth', '9964557445', '213423534'),
(8, 'geethana', '960614534', 'a23frt56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
