-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2020 at 11:46 AM
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '7',
  `schoolNo` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '6',
  `leaveDate` date DEFAULT NULL,
  `eName` varchar(255) NOT NULL,
  `aName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `nation` varchar(255) NOT NULL,
  `ppno` varchar(255) NOT NULL,
  `ppExpiry` date NOT NULL,
  `relative_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `visa` varchar(255) DEFAULT NULL,
  `doc1` varchar(255) DEFAULT NULL,
  `doc2` varchar(255) DEFAULT NULL,
  `doc3` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_schoolno_unique` (`schoolNo`),
  UNIQUE KEY `users_ename_unique` (`eName`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `schoolNo`, `status`, `leaveDate`, `eName`, `aName`, `name`, `dob`, `gender`, `email`, `phone`, `address`, `nation`, `ppno`, `ppExpiry`, `relative_id`, `photo`, `passport`, `visa`, `doc1`, `doc2`, `doc3`, `password`, `email_verified_at`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 5, 333333, 2, NULL, 'Teacher 1', 'المعلم رقم 1', 'Teacher 1 معلم', '2019-12-06', 'Male ذكر', 'user1@user.com', '+601128094804', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$urIDAzFlqZ7AMJnxDHD4BOO2WeoXpJDCvsZ8da0RNIA1mKQuLOFxm', NULL, NULL, NULL, '2020-04-15 15:41:50', '2020-04-15 15:41:50'),
(5, 4, 444444, 2, NULL, 'Accountant 1', 'المحاسب رقم 1', 'Accountant 1 محاسب', '2019-12-06', 'Male ذكر', 'user1@user.com', '+601128094804', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$urIDAzFlqZ7AMJnxDHD4BOO2WeoXpJDCvsZ8da0RNIA1mKQuLOFxm', NULL, NULL, NULL, '2020-04-15 15:41:50', '2020-04-15 15:41:50'),
(3, 6, 222222, 2, NULL, 'Student 1', 'الطالب رقم 1', 'Student 1 طالب', '2019-12-13', 'Male ذكر', 'ma@sdf', '062 718 5731', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qviY5bWuSCntIUiy9tMxPeT3dph6aQUMV59kvMWB1sQEYOK.VCsr6', NULL, NULL, NULL, '2020-04-15 10:43:34', '2020-04-15 10:43:34'),
(6, 6, 222223, 2, NULL, 'Student 2', 'الطالب رقم 2', 'Student 2 طالب', '2019-12-13', 'Male ذكر', 'ma@sdf', '062 718 5731', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qviY5bWuSCntIUiy9tMxPeT3dph6aQUMV59kvMWB1sQEYOK.VCsr6', NULL, NULL, NULL, '2020-04-15 10:43:34', '2020-04-15 10:43:34'),
(7, 6, 222224, 2, NULL, 'Student 3', 'الطالب رقم 3', 'Student 3 طالب', '2019-12-13', 'Male ذكر', 'ma@sdf', '062 718 5731', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qviY5bWuSCntIUiy9tMxPeT3dph6aQUMV59kvMWB1sQEYOK.VCsr6', NULL, NULL, NULL, '2020-04-15 10:43:34', '2020-04-15 10:43:34'),
(8, 6, 222225, 2, NULL, 'Student 4', 'الطالب رقم 4', 'Student 4 طالب', '2019-12-13', 'Male ذكر', 'ma@sdf', '062 718 5731', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qviY5bWuSCntIUiy9tMxPeT3dph6aQUMV59kvMWB1sQEYOK.VCsr6', NULL, NULL, NULL, '2020-04-15 10:43:34', '2020-04-15 10:43:34'),
(9, 6, 222226, 2, NULL, 'Student 5', 'الطالب رقم 5', 'Student 5 طالب', '2019-12-13', 'Male ذكر', 'ma@sdf', '062 718 5731', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qviY5bWuSCntIUiy9tMxPeT3dph6aQUMV59kvMWB1sQEYOK.VCsr6', NULL, NULL, NULL, '2020-04-15 10:43:34', '2020-04-15 10:43:34'),
(10, 6, 222227, 2, NULL, 'Student 6', 'الطالب رقم 6', 'Student 6 طالب', '2019-12-13', 'Male ذكر', 'ma@sdf', '062 718 5731', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qviY5bWuSCntIUiy9tMxPeT3dph6aQUMV59kvMWB1sQEYOK.VCsr6', NULL, NULL, NULL, '2020-04-15 10:43:34', '2020-04-15 10:43:34'),
(11, 6, 222228, 2, NULL, 'Student 7', 'الطالب رقم 7', 'Student 7 طالب', '2019-12-13', 'Male ذكر', 'ma@sdf', '062 718 5731', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qviY5bWuSCntIUiy9tMxPeT3dph6aQUMV59kvMWB1sQEYOK.VCsr6', NULL, NULL, NULL, '2020-04-15 10:43:34', '2020-04-15 10:43:34'),
(12, 6, 222229, 2, NULL, 'Student 8', 'الطالب رقم 8', 'Student 8 طالب', '2019-12-13', 'Male ذكر', 'ma@sdf', '062 718 5731', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qviY5bWuSCntIUiy9tMxPeT3dph6aQUMV59kvMWB1sQEYOK.VCsr6', NULL, NULL, NULL, '2020-04-15 10:43:34', '2020-04-15 10:43:34'),
(13, 5, 333334, 2, NULL, 'Teacher 2', 'المعلم رقم 2', 'Teacher 2 معلم', '2019-12-06', 'Male ذكر', 'user1@user.com', '+601128094804', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$urIDAzFlqZ7AMJnxDHD4BOO2WeoXpJDCvsZ8da0RNIA1mKQuLOFxm', NULL, NULL, NULL, '2020-04-15 15:41:50', '2020-04-15 15:41:50'),
(14, 5, 333335, 2, NULL, 'Teacher 3', 'المعلم رقم 3', 'Teacher 3 معلم', '2019-12-06', 'Male ذكر', 'user1@user.com', '+601128094804', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$urIDAzFlqZ7AMJnxDHD4BOO2WeoXpJDCvsZ8da0RNIA1mKQuLOFxm', NULL, NULL, NULL, '2020-04-15 15:41:50', '2020-04-15 15:41:50'),
(15, 5, 333336, 2, NULL, 'Teacher 4', 'المعلم رقم 4', 'Teacher 4 معلم', '2019-12-06', 'Male ذكر', 'user1@user.com', '+601128094804', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'sdf223', '2020-04-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$urIDAzFlqZ7AMJnxDHD4BOO2WeoXpJDCvsZ8da0RNIA1mKQuLOFxm', NULL, NULL, NULL, '2020-04-15 15:41:50', '2020-04-15 15:41:50'),
(16, 7, 123456, 6, NULL, 'Suhaib Ahmad', 'صهيب أحمد', 'Amelia', '2019-12-20', 'Female أنثى', 'user1@user.com', '+601128094804', 'Mahallah Ali, IIUM Gombk, Jalan Gombak', 'Malaysia', 'J453535', '2020-04-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$wiy0X1bDprWn82RUm2CBlOaa3ygcCy55mHOxRnEmPSblEhRTb98M2', NULL, NULL, NULL, '2020-04-16 11:23:46', '2020-04-16 11:23:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
