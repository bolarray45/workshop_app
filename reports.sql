-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2025 at 11:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reports`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions_taken`
--

CREATE TABLE `actions_taken` (
  `action_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actions_taken`
--

INSERT INTO `actions_taken` (`action_id`, `report_id`, `description`) VALUES
(3, 11, 'sdcsdcsdcsdcc');

-- --------------------------------------------------------

--
-- Table structure for table `centres`
--

CREATE TABLE `centres` (
  `centre_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `centres`
--

INSERT INTO `centres` (`centre_id`, `name`, `region_id`) VALUES
(2, 'TEPA', 4),
(3, 'PECTS', 4),
(4, 'ASSIN FOSU', 13),
(5, 'NAVAL BASE', 15),
(6, 'ASTC', 15),
(7, 'HEADQUARTERS', 15);

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `challenge_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`challenge_id`, `report_id`, `description`) VALUES
(2, 11, 'sdcdscsdcsdcsdc');

-- --------------------------------------------------------

--
-- Table structure for table `logistics`
--

CREATE TABLE `logistics` (
  `logistics_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `items_used` text DEFAULT NULL,
  `shortages` text DEFAULT NULL,
  `requested` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logistics`
--

INSERT INTO `logistics` (`logistics_id`, `report_id`, `items_used`, `shortages`, `requested`) VALUES
(12, 11, NULL, NULL, NULL),
(13, 11, 'sdcsdccdc', 'scdsdcsdc', 'sdcsdcsdc'),
(14, 12, NULL, NULL, NULL),
(17, 16, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `recommendation_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommendations`
--

INSERT INTO `recommendations` (`recommendation_id`, `report_id`, `description`) VALUES
(2, 11, 'sdcfvdfsvss');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `name`) VALUES
(9, 'AHAFO'),
(4, 'ASHANTI'),
(10, 'BONO'),
(5, 'BONO-EAST'),
(13, 'CENTRAL'),
(14, 'EASTERN'),
(15, 'GREATER ACCRA'),
(12, 'HEADQUARTERS'),
(7, 'NORTH EAST'),
(17, 'NORTHERN'),
(8, 'OTI'),
(6, 'SAVANNAH'),
(18, 'UPPER EAST'),
(19, 'UPPER WEST'),
(16, 'VOLTA'),
(20, 'WESTERN'),
(11, 'WESTERN NORTH');

-- --------------------------------------------------------

--
-- Table structure for table `reportsuggroups`
--

CREATE TABLE `reportsuggroups` (
  `GroupID` int(11) NOT NULL,
  `Label` varchar(300) DEFAULT NULL,
  `Provider` varchar(10) DEFAULT '',
  `Comment` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reportsuggroups`
--

INSERT INTO `reportsuggroups` (`GroupID`, `Label`, `Provider`, `Comment`) VALUES
(1, 'Cordinator', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reportsugmembers`
--

CREATE TABLE `reportsugmembers` (
  `UserName` varchar(100) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Provider` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reportsugmembers`
--

INSERT INTO `reportsugmembers` (`UserName`, `GroupID`, `Provider`) VALUES
('903144', 1, ''),
('admin', -1, ''),
('admin', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `reportsugrights`
--

CREATE TABLE `reportsugrights` (
  `TableName` varchar(100) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL,
  `Page` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reportsugrights`
--

INSERT INTO `reportsugrights` (`TableName`, `GroupID`, `AccessMask`, `Page`) VALUES
('actions_taken', -1, 'ADESPIM', NULL),
('actions_taken', 1, 'AEDSP', ''),
('centres', -1, 'ADESPIM', NULL),
('challenges', -1, 'ADESPIM', NULL),
('challenges', 1, 'AEDSP', ''),
('logistics', -1, 'ADESPIM', NULL),
('logistics', 1, 'AEDSP', ''),
('recommendations', -1, 'ADESPIM', NULL),
('recommendations', 1, 'AEDSP', ''),
('regions', -1, 'ADESPIM', NULL),
('sessions', -1, 'ADESPIM', NULL),
('sessions', 1, 'AEDSP', ''),
('users', -1, 'ADESPIM', NULL),
('vw_consolidated_weekly', -1, 'ADESPIM', NULL),
('vw_weekly_centre_summary', -1, 'ADESPIM', NULL),
('weekly_reports', -1, 'ADESPIM', NULL),
('weekly_reports_calendar', -1, 'AEDSPI', ''),
('weekly_reports_stns', -1, 'ADESPIM', ''),
('weekly_reports_stns', 1, 'AEDSPI', ''),
('welfare', -1, 'ADESPIM', NULL),
('welfare', 1, 'AEDSP', '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `session_date` date NOT NULL,
  `part` enum('Class-1','Class-2','Class-3','Class-4','Class-5','Class-6') NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `facilitator` varchar(150) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `report_id`, `session_date`, `part`, `topic`, `facilitator`, `remarks`) VALUES
(316, 11, '2025-08-25', 'Class-1', NULL, NULL, NULL),
(317, 11, '2025-08-25', 'Class-2', NULL, NULL, NULL),
(318, 11, '2025-08-25', 'Class-3', NULL, NULL, NULL),
(319, 11, '2025-08-25', 'Class-4', NULL, NULL, NULL),
(320, 11, '2025-08-25', 'Class-5', NULL, NULL, NULL),
(321, 11, '2025-08-25', 'Class-6', NULL, NULL, NULL),
(322, 11, '2025-08-26', 'Class-1', NULL, NULL, NULL),
(323, 11, '2025-08-26', 'Class-2', NULL, NULL, NULL),
(324, 11, '2025-08-26', 'Class-3', NULL, NULL, NULL),
(325, 11, '2025-08-26', 'Class-4', NULL, NULL, NULL),
(326, 11, '2025-08-26', 'Class-5', NULL, NULL, NULL),
(327, 11, '2025-08-26', 'Class-6', NULL, NULL, NULL),
(328, 11, '2025-08-27', 'Class-1', NULL, NULL, NULL),
(329, 11, '2025-08-27', 'Class-2', NULL, NULL, NULL),
(330, 11, '2025-08-27', 'Class-3', NULL, NULL, NULL),
(331, 11, '2025-08-27', 'Class-4', NULL, NULL, NULL),
(332, 11, '2025-08-27', 'Class-5', NULL, NULL, NULL),
(333, 11, '2025-08-27', 'Class-6', NULL, NULL, NULL),
(334, 11, '2025-08-28', 'Class-1', NULL, NULL, NULL),
(335, 11, '2025-08-28', 'Class-2', NULL, NULL, NULL),
(336, 11, '2025-08-28', 'Class-3', NULL, NULL, NULL),
(337, 11, '2025-08-28', 'Class-4', NULL, NULL, NULL),
(338, 11, '2025-08-28', 'Class-5', NULL, NULL, NULL),
(339, 11, '2025-08-28', 'Class-6', NULL, NULL, NULL),
(340, 11, '2025-08-29', 'Class-1', NULL, NULL, NULL),
(341, 11, '2025-08-29', 'Class-2', NULL, NULL, NULL),
(342, 11, '2025-08-29', 'Class-3', NULL, NULL, NULL),
(343, 11, '2025-08-29', 'Class-4', NULL, NULL, NULL),
(344, 11, '2025-08-29', 'Class-5', NULL, NULL, NULL),
(345, 11, '2025-08-29', 'Class-6', NULL, NULL, NULL),
(346, 11, '2025-08-30', 'Class-1', NULL, NULL, NULL),
(347, 11, '2025-08-30', 'Class-2', NULL, NULL, NULL),
(348, 11, '2025-08-30', 'Class-3', NULL, NULL, NULL),
(349, 11, '2025-08-30', 'Class-4', NULL, NULL, NULL),
(350, 11, '2025-08-30', 'Class-5', NULL, NULL, NULL),
(351, 11, '2025-08-30', 'Class-6', NULL, NULL, NULL),
(352, 11, '2025-08-31', 'Class-1', NULL, NULL, NULL),
(353, 11, '2025-08-31', 'Class-2', NULL, NULL, NULL),
(354, 11, '2025-08-31', 'Class-3', NULL, NULL, NULL),
(355, 11, '2025-08-31', 'Class-4', NULL, NULL, NULL),
(356, 11, '2025-08-31', 'Class-5', NULL, NULL, NULL),
(357, 11, '2025-08-31', 'Class-6', NULL, NULL, NULL),
(358, 12, '2025-08-25', 'Class-1', 'Bleeding Control', 'Dr. Donkor Abraham', 'Nothing For Now'),
(359, 12, '2025-08-25', 'Class-2', NULL, NULL, NULL),
(360, 12, '2025-08-25', 'Class-3', NULL, NULL, NULL),
(361, 12, '2025-08-25', 'Class-4', NULL, NULL, NULL),
(362, 12, '2025-08-25', 'Class-5', NULL, NULL, NULL),
(363, 12, '2025-08-25', 'Class-6', NULL, NULL, NULL),
(364, 12, '2025-08-26', 'Class-1', NULL, NULL, NULL),
(365, 12, '2025-08-26', 'Class-2', NULL, NULL, NULL),
(366, 12, '2025-08-26', 'Class-3', NULL, NULL, NULL),
(367, 12, '2025-08-26', 'Class-4', NULL, NULL, NULL),
(368, 12, '2025-08-26', 'Class-5', NULL, NULL, NULL),
(369, 12, '2025-08-26', 'Class-6', NULL, NULL, NULL),
(370, 12, '2025-08-27', 'Class-1', NULL, NULL, NULL),
(371, 12, '2025-08-27', 'Class-2', NULL, NULL, NULL),
(372, 12, '2025-08-27', 'Class-3', NULL, NULL, NULL),
(373, 12, '2025-08-27', 'Class-4', NULL, NULL, NULL),
(374, 12, '2025-08-27', 'Class-5', NULL, NULL, NULL),
(375, 12, '2025-08-27', 'Class-6', NULL, NULL, NULL),
(376, 12, '2025-08-28', 'Class-1', NULL, NULL, NULL),
(377, 12, '2025-08-28', 'Class-2', NULL, NULL, NULL),
(378, 12, '2025-08-28', 'Class-3', NULL, NULL, NULL),
(379, 12, '2025-08-28', 'Class-4', NULL, NULL, NULL),
(380, 12, '2025-08-28', 'Class-5', NULL, NULL, NULL),
(381, 12, '2025-08-28', 'Class-6', NULL, NULL, NULL),
(382, 12, '2025-08-29', 'Class-1', NULL, NULL, NULL),
(383, 12, '2025-08-29', 'Class-2', NULL, NULL, NULL),
(384, 12, '2025-08-29', 'Class-3', NULL, NULL, NULL),
(385, 12, '2025-08-29', 'Class-4', NULL, NULL, NULL),
(386, 12, '2025-08-29', 'Class-5', NULL, NULL, NULL),
(387, 12, '2025-08-29', 'Class-6', NULL, NULL, NULL),
(388, 12, '2025-08-30', 'Class-1', NULL, NULL, NULL),
(389, 12, '2025-08-30', 'Class-2', NULL, NULL, NULL),
(390, 12, '2025-08-30', 'Class-3', NULL, NULL, NULL),
(391, 12, '2025-08-30', 'Class-4', NULL, NULL, NULL),
(392, 12, '2025-08-30', 'Class-5', NULL, NULL, NULL),
(393, 12, '2025-08-30', 'Class-6', NULL, NULL, NULL),
(394, 12, '2025-08-31', 'Class-1', NULL, NULL, NULL),
(395, 12, '2025-08-31', 'Class-2', NULL, NULL, NULL),
(396, 12, '2025-08-31', 'Class-3', NULL, NULL, NULL),
(397, 12, '2025-08-31', 'Class-4', NULL, NULL, NULL),
(398, 12, '2025-08-31', 'Class-5', NULL, NULL, NULL),
(399, 12, '2025-08-31', 'Class-6', NULL, NULL, NULL),
(484, 16, '2025-08-25', 'Class-1', NULL, NULL, NULL),
(485, 16, '2025-08-25', 'Class-2', NULL, NULL, NULL),
(486, 16, '2025-08-25', 'Class-3', NULL, NULL, NULL),
(487, 16, '2025-08-25', 'Class-4', NULL, NULL, NULL),
(488, 16, '2025-08-25', 'Class-5', NULL, NULL, NULL),
(489, 16, '2025-08-25', 'Class-6', NULL, NULL, NULL),
(490, 16, '2025-08-26', 'Class-1', NULL, NULL, NULL),
(491, 16, '2025-08-26', 'Class-2', NULL, NULL, NULL),
(492, 16, '2025-08-26', 'Class-3', NULL, NULL, NULL),
(493, 16, '2025-08-26', 'Class-4', NULL, NULL, NULL),
(494, 16, '2025-08-26', 'Class-5', NULL, NULL, NULL),
(495, 16, '2025-08-26', 'Class-6', NULL, NULL, NULL),
(496, 16, '2025-08-27', 'Class-1', NULL, NULL, NULL),
(497, 16, '2025-08-27', 'Class-2', NULL, NULL, NULL),
(498, 16, '2025-08-27', 'Class-3', NULL, NULL, NULL),
(499, 16, '2025-08-27', 'Class-4', NULL, NULL, NULL),
(500, 16, '2025-08-27', 'Class-5', NULL, NULL, NULL),
(501, 16, '2025-08-27', 'Class-6', NULL, NULL, NULL),
(502, 16, '2025-08-28', 'Class-1', NULL, NULL, NULL),
(503, 16, '2025-08-28', 'Class-2', NULL, NULL, NULL),
(504, 16, '2025-08-28', 'Class-3', NULL, NULL, NULL),
(505, 16, '2025-08-28', 'Class-4', NULL, NULL, NULL),
(506, 16, '2025-08-28', 'Class-5', NULL, NULL, NULL),
(507, 16, '2025-08-28', 'Class-6', NULL, NULL, NULL),
(508, 16, '2025-08-29', 'Class-1', NULL, NULL, NULL),
(509, 16, '2025-08-29', 'Class-2', NULL, NULL, NULL),
(510, 16, '2025-08-29', 'Class-3', NULL, NULL, NULL),
(511, 16, '2025-08-29', 'Class-4', NULL, NULL, NULL),
(512, 16, '2025-08-29', 'Class-5', NULL, NULL, NULL),
(513, 16, '2025-08-29', 'Class-6', NULL, NULL, NULL),
(514, 16, '2025-08-30', 'Class-1', NULL, NULL, NULL),
(515, 16, '2025-08-30', 'Class-2', NULL, NULL, NULL),
(516, 16, '2025-08-30', 'Class-3', NULL, NULL, NULL),
(517, 16, '2025-08-30', 'Class-4', NULL, NULL, NULL),
(518, 16, '2025-08-30', 'Class-5', NULL, NULL, NULL),
(519, 16, '2025-08-30', 'Class-6', NULL, NULL, NULL),
(520, 16, '2025-08-31', 'Class-1', NULL, NULL, NULL),
(521, 16, '2025-08-31', 'Class-2', NULL, NULL, NULL),
(522, 16, '2025-08-31', 'Class-3', NULL, NULL, NULL),
(523, 16, '2025-08-31', 'Class-4', NULL, NULL, NULL),
(524, 16, '2025-08-31', 'Class-5', NULL, NULL, NULL),
(525, 16, '2025-08-31', 'Class-6', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(190) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('admin','regional_manager','centre_head','viewer') NOT NULL DEFAULT 'viewer',
  `region_id` int(11) DEFAULT NULL,
  `centre_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(250) DEFAULT NULL,
  `userpic` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password_hash`, `role`, `region_id`, `centre_id`, `is_active`, `created_at`, `username`, `userpic`) VALUES
(2, 'DAVID LOUK TIIBE', 'lovetiibe@gmail.com', 'T3pa@2025', 'centre_head', 4, 2, 1, '2025-08-29 00:00:00', '1288988', NULL),
(4, 'MANSURAT GANIYU', 'bolade.mansurat@gmail.com', 'P3cts@2025', 'centre_head', 4, 3, 1, '2025-08-29 19:30:58', '903144', NULL),
(6, 'JOSEPH MENSAH', 'Josephmens10@yahoo.com', 'Assin@2025', 'centre_head', 13, 4, 1, '2025-08-29 19:32:23', '1507461', NULL),
(7, 'ANITA ACQUAH', 'aacquah33@gmail.com', 'Ga@2025', 'centre_head', 15, 5, 1, '2025-08-29 19:33:59', '1540039', NULL),
(8, 'KENNEDY ADOM', 'edykoffconsult@gmail.com', 'Astc@2025', 'centre_head', 15, 6, 1, '2025-08-29 19:34:57', '926180', NULL),
(9, 'Administrator', 'edboatend@gmail.com', '1234', 'viewer', 15, 7, 1, '2025-08-29 17:39:09', 'admin', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_consolidated_weekly`
-- (See below for the actual view)
--
CREATE TABLE `vw_consolidated_weekly` (
`week_start` date
,`week_end` date
,`centres_reporting` bigint(21)
,`trainees_expected_total` decimal(32,0)
,`avg_daily_attendance_avg` decimal(7,2)
,`absentees_total` decimal(32,0)
,`facilitators_present_total` decimal(32,0)
,`facilitators_expected_total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_weekly_centre_summary`
-- (See below for the actual view)
--
CREATE TABLE `vw_weekly_centre_summary` (
`report_id` int(11)
,`centre_id` int(11)
,`centre_name` varchar(150)
,`region_name` varchar(100)
,`week_start` date
,`week_end` date
,`trainees_expected` int(11)
,`avg_daily_attendance` decimal(6,2)
,`absentees` int(11)
,`facilitators_present` int(11)
,`facilitators_expected` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `weekly_reports`
--

CREATE TABLE `weekly_reports` (
  `report_id` int(11) NOT NULL,
  `centre_id` int(11) NOT NULL,
  `coordinator_id` int(11) DEFAULT NULL,
  `week_start` date NOT NULL,
  `week_end` date NOT NULL,
  `submitted_at` datetime DEFAULT NULL,
  `trainees_expected` int(11) DEFAULT NULL,
  `avg_daily_attendance` decimal(6,2) DEFAULT NULL,
  `absentees` int(11) DEFAULT NULL,
  `facilitators_present` int(11) DEFAULT NULL,
  `facilitators_expected` int(11) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weekly_reports`
--

INSERT INTO `weekly_reports` (`report_id`, `centre_id`, `coordinator_id`, `week_start`, `week_end`, `submitted_at`, `trainees_expected`, `avg_daily_attendance`, `absentees`, `facilitators_present`, `facilitators_expected`, `remarks`, `created_at`, `updated_at`) VALUES
(11, 2, 2, '2025-08-25', '2025-08-31', NULL, 0, 0.00, 0, 0, 0, NULL, '2025-08-29 17:36:25', NULL),
(12, 7, 9, '2025-08-25', '2025-08-31', NULL, 0, 0.00, 0, 0, 0, NULL, '2025-08-29 18:42:50', NULL),
(16, 3, 4, '2025-08-25', '2025-08-31', NULL, 0, 0.00, 0, 0, 0, NULL, '2025-08-29 21:17:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `welfare`
--

CREATE TABLE `welfare` (
  `welfare_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `meals` text DEFAULT NULL,
  `accommodation` text DEFAULT NULL,
  `medical` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `welfare`
--

INSERT INTO `welfare` (`welfare_id`, `report_id`, `meals`, `accommodation`, `medical`) VALUES
(11, 11, NULL, NULL, NULL),
(12, 11, 'sdcsdccdscs', 'sdcsdcdsc', 'sdcsdcsdc'),
(13, 12, NULL, NULL, NULL),
(16, 16, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure for view `vw_consolidated_weekly`
--
DROP TABLE IF EXISTS `vw_consolidated_weekly`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_consolidated_weekly`  AS SELECT `wr`.`week_start` AS `week_start`, min(`wr`.`week_end`) AS `week_end`, count(distinct `wr`.`centre_id`) AS `centres_reporting`, sum(`wr`.`trainees_expected`) AS `trainees_expected_total`, round(avg(`wr`.`avg_daily_attendance`),2) AS `avg_daily_attendance_avg`, sum(`wr`.`absentees`) AS `absentees_total`, sum(`wr`.`facilitators_present`) AS `facilitators_present_total`, sum(`wr`.`facilitators_expected`) AS `facilitators_expected_total` FROM `weekly_reports` AS `wr` GROUP BY `wr`.`week_start` ORDER BY `wr`.`week_start` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `vw_weekly_centre_summary`
--
DROP TABLE IF EXISTS `vw_weekly_centre_summary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_weekly_centre_summary`  AS SELECT `wr`.`report_id` AS `report_id`, `wr`.`centre_id` AS `centre_id`, `c`.`name` AS `centre_name`, `r`.`name` AS `region_name`, `wr`.`week_start` AS `week_start`, `wr`.`week_end` AS `week_end`, `wr`.`trainees_expected` AS `trainees_expected`, `wr`.`avg_daily_attendance` AS `avg_daily_attendance`, `wr`.`absentees` AS `absentees`, `wr`.`facilitators_present` AS `facilitators_present`, `wr`.`facilitators_expected` AS `facilitators_expected` FROM ((`weekly_reports` `wr` join `centres` `c` on(`c`.`centre_id` = `wr`.`centre_id`)) join `regions` `r` on(`r`.`region_id` = `c`.`region_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions_taken`
--
ALTER TABLE `actions_taken`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `idx_report` (`report_id`);

--
-- Indexes for table `centres`
--
ALTER TABLE `centres`
  ADD PRIMARY KEY (`centre_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`challenge_id`),
  ADD KEY `idx_report` (`report_id`);

--
-- Indexes for table `logistics`
--
ALTER TABLE `logistics`
  ADD PRIMARY KEY (`logistics_id`),
  ADD KEY `idx_report` (`report_id`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`recommendation_id`),
  ADD KEY `idx_report` (`report_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `reportsuggroups`
--
ALTER TABLE `reportsuggroups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `reportsugmembers`
--
ALTER TABLE `reportsugmembers`
  ADD PRIMARY KEY (`UserName`,`GroupID`,`Provider`);

--
-- Indexes for table `reportsugrights`
--
ALTER TABLE `reportsugrights`
  ADD PRIMARY KEY (`TableName`,`GroupID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `idx_report` (`report_id`),
  ADD KEY `idx_date` (`session_date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `centre_id` (`centre_id`);

--
-- Indexes for table `weekly_reports`
--
ALTER TABLE `weekly_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD UNIQUE KEY `uniq_centre_week` (`centre_id`,`week_start`),
  ADD KEY `idx_week` (`week_start`,`week_end`),
  ADD KEY `idx_centre` (`centre_id`),
  ADD KEY `coordinator_id` (`coordinator_id`);

--
-- Indexes for table `welfare`
--
ALTER TABLE `welfare`
  ADD PRIMARY KEY (`welfare_id`),
  ADD KEY `idx_report` (`report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions_taken`
--
ALTER TABLE `actions_taken`
  MODIFY `action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `centres`
--
ALTER TABLE `centres`
  MODIFY `centre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `challenge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logistics`
--
ALTER TABLE `logistics`
  MODIFY `logistics_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `recommendation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reportsuggroups`
--
ALTER TABLE `reportsuggroups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=526;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `weekly_reports`
--
ALTER TABLE `weekly_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `welfare`
--
ALTER TABLE `welfare`
  MODIFY `welfare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actions_taken`
--
ALTER TABLE `actions_taken`
  ADD CONSTRAINT `actions_taken_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `weekly_reports` (`report_id`) ON DELETE CASCADE;

--
-- Constraints for table `centres`
--
ALTER TABLE `centres`
  ADD CONSTRAINT `centres_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`region_id`);

--
-- Constraints for table `challenges`
--
ALTER TABLE `challenges`
  ADD CONSTRAINT `challenges_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `weekly_reports` (`report_id`) ON DELETE CASCADE;

--
-- Constraints for table `logistics`
--
ALTER TABLE `logistics`
  ADD CONSTRAINT `logistics_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `weekly_reports` (`report_id`) ON DELETE CASCADE;

--
-- Constraints for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD CONSTRAINT `recommendations_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `weekly_reports` (`report_id`) ON DELETE CASCADE;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `weekly_reports` (`report_id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`region_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`centre_id`) REFERENCES `centres` (`centre_id`);

--
-- Constraints for table `weekly_reports`
--
ALTER TABLE `weekly_reports`
  ADD CONSTRAINT `weekly_reports_ibfk_1` FOREIGN KEY (`centre_id`) REFERENCES `centres` (`centre_id`),
  ADD CONSTRAINT `weekly_reports_ibfk_2` FOREIGN KEY (`coordinator_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `welfare`
--
ALTER TABLE `welfare`
  ADD CONSTRAINT `welfare_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `weekly_reports` (`report_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
