-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2024 at 07:40 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `vechile_id` int NOT NULL AUTO_INCREMENT,
  `owner` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `vechile_no` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`vechile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`vechile_id`, `owner`, `type`, `vechile_no`, `color`) VALUES
(1, 'Tarun', 'FOUR WHEELER', 'HR 12 AA 0007', 'BLACK'),
(2, 'Ritik', 'FOUR WHEELER', 'HR 12 AA 0008', 'BLACK'),
(4, 'Aditya', 'TWO WHEELER', 'HR 12 AA 0011', 'BLACK'),
(5, 'Sahil', 'TWO WHEELER', 'HR 12 AA 0001', 'WHITE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
