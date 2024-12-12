-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 03:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv_nguyenvietduong`
--
CREATE DATABASE IF NOT EXISTS `qlsv_nguyenvietduong` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `qlsv_nguyenvietduong`;

-- --------------------------------------------------------

--
-- Table structure for table `table_students`
--

CREATE TABLE `table_students` (
  `id` int(50) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(1) NOT NULL,
  `hometown` varchar(250) NOT NULL,
  `level` int(1) NOT NULL,
  `group_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_students`
--

INSERT INTO `table_students` (`id`, `fullname`, `dob`, `gender`, `hometown`, `level`, `group_id`) VALUES
(2, 'Nguyễn Nam Khánh', '1232-12-23', 1, 'Hà Nội', 1, 1),
(5, 'Đào Thế Vũ ', '2024-12-11', 1, 'Bắc Ninh', 0, 6),
(7, 'Trần Minh Long', '2002-12-31', 1, 'Nam Định', 2, 7),
(8, 'Trần Đình Hưng Thịnh', '2005-01-12', 1, 'Nghệ An', 2, 2),
(9, 'Nguyễn Việt Dương', '2004-09-15', 1, 'Hà Nội', 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_students`
--
ALTER TABLE `table_students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
