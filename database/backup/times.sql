-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2020 at 11:45 AM
-- Server version: 5.7.26
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
-- Database: `ais`
--

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

DROP TABLE IF EXISTS `times`;
CREATE TABLE IF NOT EXISTS `times` (
  `time_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `timeName` varchar(255) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`time_id`, `timeName`, `startTime`, `endTime`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1st', '08:00:00', '08:55:00', NULL, NULL, NULL),
(2, '2nd', '09:00:00', '09:45:00', NULL, NULL, NULL),
(3, '3rd', '09:50:00', '10:35:00', NULL, NULL, NULL),
(4, '4th', '10:55:00', '11:40:00', NULL, NULL, NULL),
(5, '5th', '11:45:00', '12:30:00', NULL, NULL, NULL),
(6, '6th', '12:35:00', '13:10:00', NULL, NULL, NULL),
(7, '7th', '13:50:00', '14:30:00', NULL, NULL, NULL),
(8, '8th', '14:30:00', '15:15:00', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
