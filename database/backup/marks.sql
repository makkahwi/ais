-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2020 at 11:42 AM
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
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `mark_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `markName` varchar(255) NOT NULL,
  `semId` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `markValue` int(11) NOT NULL,
  `fullMarkValue` int(11) NOT NULL,
  `note` text,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mark_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mark_id`, `markName`, `semId`, `classroom_id`, `course_id`, `student_id`, `markValue`, `fullMarkValue`, `note`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Assign', 1, 1, 1, 222222, 51, 100, NULL, NULL, NULL, NULL),
(2, 'Assign', 1, 1, 2, 222223, 7, 10, NULL, NULL, NULL, NULL),
(3, 'Assign', 1, 2, 1, 222224, 52, 106, NULL, NULL, NULL, NULL),
(4, 'Assign', 1, 2, 2, 222225, 54, 100, NULL, NULL, NULL, NULL),
(5, 'Assign', 1, 3, 3, 222226, 51, 101, NULL, NULL, NULL, NULL),
(6, 'Assign', 1, 3, 4, 222227, 55, 102, NULL, NULL, NULL, NULL),
(7, 'Assign', 1, 4, 3, 222228, 56, 100, NULL, NULL, NULL, NULL),
(8, 'Assign', 1, 4, 4, 222229, 57, 110, NULL, NULL, NULL, NULL),
(9, 'Assign', 1, 1, 2, 222222, 51, 100, NULL, NULL, NULL, NULL),
(10, 'Assign', 1, 1, 1, 222223, 7, 10, NULL, NULL, NULL, NULL),
(11, 'Assign', 1, 2, 2, 222224, 52, 106, NULL, NULL, NULL, NULL),
(12, 'Assign', 1, 2, 1, 222225, 54, 100, NULL, NULL, NULL, NULL),
(13, 'Assign', 1, 3, 4, 222226, 51, 101, NULL, NULL, NULL, NULL),
(14, 'Assign', 1, 3, 3, 222227, 55, 102, NULL, NULL, NULL, NULL),
(15, 'Assign', 1, 4, 4, 222228, 56, 100, NULL, NULL, NULL, NULL),
(16, 'Assign', 1, 4, 3, 222229, 57, 110, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
