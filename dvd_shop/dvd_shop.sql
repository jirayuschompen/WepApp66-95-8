-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 09:38 AM
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
  `d_name` varchar(100) NOT NULL,
  `d_url` varchar(200) NOT NULL,
  `d_detail` varchar(300) NOT NULL,
  `d_duration` varchar(10) NOT NULL,
  `d_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`d_id`, `d_name`, `d_url`, `d_detail`, `d_duration`, `d_date`) VALUES
(1, 'Avengers: Endgame', 'https://www.youtube.com/embed/TcMBFSGVi1c', 'เป็นภาคต่อของภาพยนตร์ Marvel Cinematic Universe (MCU) ที่มีการรวมตัวของฮีโร่มากมาย เพื่อเอาชนะ Thanos ที่เป็นศัตรูหลักของพวกเขา', '182 นาที', '2019-04-26'),
(2, 'Parasite', 'https://www.youtube.com/embed/5xH0HfJHsaY', 'เป็นภาพยนตร์เรื่องสัญชาตญาณของชาวเกาหลีใต้ ผลงานของผู้กำกับ Bong Joon-ho ที่ได้รับรางวัลปาล์มดอร์ในงานเทศกาลภาพยนตร์คานส์ 2019', '132 นาที', '2019-05-21'),
(3, 'Joker', 'https://www.youtube.com/embed/t433PEQGErc', 'เป็นภาพยนตร์เรื่องการตกต่ำของตัวละคร Joker ที่มีการแสดงโดย Joaquin Phoenix และเป็นส่วนหนึ่งของ DC Extended Universe (DCEU)', '122 นาที', '2019-10-04'),
(4, 'Spider-Man: No Way Home', 'https://www.youtube.com/embed/WgU7P6o-GkM', 'เป็นภาคต่อของภาพยนตร์ Spider-Man ใน Marvel Cinematic Universe (MCU) ที่มีการนำเสนอสาม Spider-Man จากต่างโลกและการเดินทางในมิติแปลกปลอม', '148 นาที', '2021-12-17'),
(5, 'Dune', 'https://www.youtube.com/embed/20Kxwcfkobw', 'เป็นภาพยนตร์การ์ตูนเลียนแบบสรรพสิ่งและแฟนตาซีที่มีโลกที่เต็มไปด้วยแหล่งอํานวยความสะดวกแต่อันตราย เป็นการสร้างภาพยนตร์ราว และรวมองค์ประกอบเสมือนจริงในหนังแนววิทยาศาสตร์', '155 นาที', '2021-09-17'),
(6, 'No Time to Die (007 James Bond)', 'https://www.youtube.com/embed/BIhNsAtPbPI', 'เป็นภาพยนตร์ James Bond ที่ 25 ในซีรีส์ 007 และเป็นการแสดงอำนาจของนักแสดง Daniel Craig ในบทตัวละคร James Bond ภาคสุดท้ายของเขา', '163 นาที', '2021-09-30'),
(7, 'The French Dispatch', 'https://www.youtube.com/embed/TcPk2p0Zaw4', 'เป็นภาพยนตร์อินดี้ที่สร้างขึ้นโดย Wes Anderson ที่เล่าเรื่องราวของนิตยสารศิลปะชื่อ \"The French Dispatch\" และเนื้อหาข่าวสารที่มีความหลากหลาย', '107 นาที', '2021-10-22');

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
(3, 'test', 'chompen', 'jirayus254@gmail.com', '0957314876'),
(4, 'test', '', '', '');

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
(1, 1, 1),
(6, 1, 4),
(7, 1, 4);

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
  MODIFY `md_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
