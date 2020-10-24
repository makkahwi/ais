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
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `exam_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `semId` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `midDate` date NOT NULL,
  `midNote` text,
  `finalDate` date DEFAULT NULL,
  `finalNote` text,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `semId`, `level_id`, `course_id`, `midDate`, `midNote`, `finalDate`, `finalNote`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2020-04-07', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 1, 2, '2020-04-23', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 2, 3, '2020-04-23', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 2, 4, '2020-04-23', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
