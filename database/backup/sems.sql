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
-- Table structure for table `sems`
--

DROP TABLE IF EXISTS `sems`;
CREATE TABLE IF NOT EXISTS `sems` (
  `semId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `year_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `results` date NOT NULL,
  `end` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`semId`),
  UNIQUE KEY `sems_title_year_id_unique` (`title`,`year_id`),
  UNIQUE KEY `sems_start_unique` (`start`),
  UNIQUE KEY `sems_results_unique` (`results`),
  UNIQUE KEY `sems_end_unique` (`end`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sems`
--

INSERT INTO `sems` (`semId`, `title`, `year_id`, `start`, `results`, `end`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Sem 1', 1, '2020-04-02', '2020-04-22', '2020-04-29', NULL, '2020-04-12 16:00:00', NULL),
(2, 'Sem 2', 1, '2020-04-07', '2020-04-15', '2020-04-17', NULL, '2020-04-13 16:00:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
