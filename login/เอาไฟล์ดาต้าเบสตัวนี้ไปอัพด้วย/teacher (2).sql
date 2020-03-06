-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2019 at 05:08 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `idTeacher` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobposition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdLine` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StatusAdmin` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`idTeacher`, `Title`, `img`, `Name_Surname`, `jobposition`, `phone`, `IdLine`, `Facebook`, `StatusAdmin`, `level`, `Username`, `Password`) VALUES
('cs001', 'ดร.', 'user1.jpg', 'เจษฎา ชาตรี', 'อาจารย์', '-', '@tiwly', '-', '0', '0', 'cs001', '123456789'),
('cs002', 'ดร.', 'user4.png', 'เจษฎา โพนแก้ว', 'อาจารย์', '-', '-', '-', '0', '0', 'cs002', '123456789'),
('cs003', '', 'user2.jpg', 'กนิษฐา อินธิชิต', 'อาจารย์', '-', '-', '-', '1', '1', 'cs003', '123456789'),
('cs004', '', 'user3.jpg', 'พิศาล สุขขี', 'ประธานสาขา', '-', '-', '-', '1', '1', 'cs004', '123456789'),
('cs005', '', 'user4.jpg', 'อุรารัตน์ แก้วดวงงาม', 'อาจารย์', '-', '-', '-', '0', '0', 'cs005', '123456789'),
('cs006', '', 'user5.jpg', 'กริชบดินทร์ ผิวหอม', 'อาจารย์', '-', '-', '-', '0', '0', 'cs006', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`idTeacher`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
