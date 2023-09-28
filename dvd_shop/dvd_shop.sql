-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 07:31 AM
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
-- Database: `dvd_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actorid`
--

CREATE TABLE `actorid` (
  `a_id` int(2) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `a_lastname` varchar(20) NOT NULL,
  `a_bdate` date NOT NULL,
  `a_movie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actorid`
--

INSERT INTO `actorid` (`a_id`, `a_name`, `a_lastname`, `a_bdate`, `a_movie`) VALUES
(1, 'Joaquin', 'Phoenix', '1974-10-28', 'Joker');

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `d_id` int(3) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_detail` varchar(300) NOT NULL,
  `d_duration` varchar(10) NOT NULL,
  `d_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`d_id`, `d_name`, `d_detail`, `d_duration`, `d_date`) VALUES
(1, 'Avengers: Endgame', 'เป็นภาคต่อของภาพยนตร์ Marvel Cinematic Universe (MCU) ที่มีการรวมตัวของฮีโร่มากมาย เพื่อเอาชนะ Thanos ที่เป็นศัตรูหลักของพวกเขา', '182 นาที', '2019-04-26'),
(2, 'Parasite', 'เป็นภาพยนตร์เรื่องสัญชาตญาณของชาวเกาหลีใต้ ผลงานของผู้กำกับ Bong Joon-ho ที่ได้รับรางวัลปาล์มดอร์ในงานเทศกาลภาพยนตร์คานส์ 2019', '132 นาที', '2019-05-21'),
(3, 'Joker', 'เป็นภาพยนตร์เรื่องการตกต่ำของตัวละคร Joker ที่มีการแสดงโดย Joaquin Phoenix และเป็นส่วนหนึ่งของ DC Extended Universe (DCEU)', '122 นาที', '2019-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `memberid`
--

CREATE TABLE `memberid` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberid`
--

INSERT INTO `memberid` (`id`, `name`, `lastname`, `email`, `telephone`) VALUES
(1, 'jirayus', 'chompen', 'jirayus254@gmail.com', '0957314876'),
(2, 'jira', 'chom', 'kk@gmail.com', '0957314876'),
(3, 'jirayu', 'chompen', 'jirayus254@gmail.com', '0957314876'),
(4, 'test', 't', 'tt', '12');

-- --------------------------------------------------------

--
-- Table structure for table `member_dvd`
--

CREATE TABLE `member_dvd` (
  `md_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_dvd`
--

INSERT INTO `member_dvd` (`md_id`, `m_id`, `d_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actorid`
--
ALTER TABLE `actorid`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`d_id`) USING BTREE;

--
-- Indexes for table `memberid`
--
ALTER TABLE `memberid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_dvd`
--
ALTER TABLE `member_dvd`
  ADD PRIMARY KEY (`md_id`),
  ADD KEY `dvd_id` (`d_id`),
  ADD KEY `member_id` (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actorid`
--
ALTER TABLE `actorid`
  MODIFY `a_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `memberid`
--
ALTER TABLE `memberid`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member_dvd`
--
ALTER TABLE `member_dvd`
  MODIFY `md_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actorid`
--
ALTER TABLE `actorid`
  ADD CONSTRAINT `actor_movie` FOREIGN KEY (`a_id`) REFERENCES `dvd` (`d_id`);

--
-- Constraints for table `member_dvd`
--
ALTER TABLE `member_dvd`
  ADD CONSTRAINT `dvd_id` FOREIGN KEY (`d_id`) REFERENCES `dvd` (`d_id`),
  ADD CONSTRAINT `member_id` FOREIGN KEY (`m_id`) REFERENCES `memberid` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
