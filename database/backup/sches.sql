-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2020 at 11:43 AM
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
-- Table structure for table `sches`
--

DROP TABLE IF EXISTS `sches`;
CREATE TABLE IF NOT EXISTS `sches` (
  `sch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `semId` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '2',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sch_id`),
  UNIQUE KEY `sches_semid_classroom_id_day_id_time_id_status_id_unique` (`semId`,`classroom_id`,`day_id`,`time_id`,`status_id`),
  KEY `sches_classroom_id_foreign` (`classroom_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sches`
--

INSERT INTO `sches` (`sch_id`, `semId`, `level_id`, `classroom_id`, `course_id`, `teacher_id`, `day_id`, `time_id`, `status_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 15, 1, 3, 2, NULL, NULL, NULL),
(2, 1, 1, 1, 2, 14, 2, 1, 2, NULL, NULL, NULL),
(3, 1, 1, 2, 1, 13, 4, 2, 2, NULL, NULL, NULL),
(4, 1, 1, 2, 2, 4, 3, 4, 2, NULL, NULL, NULL),
(6, 1, 2, 3, 3, 15, 5, 3, 2, NULL, NULL, NULL),
(7, 1, 2, 3, 4, 14, 2, 4, 2, NULL, NULL, NULL),
(8, 1, 2, 4, 3, 13, 3, 3, 2, NULL, NULL, NULL),
(9, 1, 2, 4, 4, 4, 1, 2, 2, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
