-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2025 at 01:54 PM
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
-- Database: `bytemembership`
--
DROP DATABASE IF EXISTS `bytemembership`;
CREATE DATABASE IF NOT EXISTS `bytemembership` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bytemembership`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_adviser`
--

DROP TABLE IF EXISTS `tb_adviser`;
CREATE TABLE `tb_adviser` (
  `adviser_id` int(11) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `status` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_adviser`
--

INSERT INTO `tb_adviser` (`adviser_id`, `profile`, `name`, `email`, `contact`, `status`, `username`, `password`) VALUES
(1, '', 'Fritz John Bucane Luis ', 'admin@gmail.com', '09753742872', 'Super Admin', 'admin', '123'),
(2, '', 'Noe John Sonillo', 'noe@gmail.com', '0000000', 'Admin', 'Noe', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

DROP TABLE IF EXISTS `tb_student`;
CREATE TABLE `tb_student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `birthdate` date NOT NULL,
  `age` varchar(150) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `birthPlace` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `section` varchar(20) NOT NULL,
  `year` varchar(100) NOT NULL,
  `sports` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`id`, `student_id`, `student_name`, `gender`, `contact`, `birthdate`, `age`, `civil_status`, `birthPlace`, `email`, `section`, `year`, `sports`, `password`, `status`) VALUES
(16, '19-0640', 'grace lhyn Legaste', 'Female', '0909090909', '1997-02-26', '28', 'Married', 'lambunao, iloilo', 'grace@gmail.com', 'B', '4th year', 'table tennis', '123', 'Approve'),
(30, '', 'fritz luis', 'Male', '09456220613', '2019-06-04', '6', 'Single', 'ASMD', 'fritz@gmail.com', 'A', '4th year', 'badminton', '', 'Pending'),
(31, '', 'Jayrold Dave Bebit', 'Male', '09456220613', '2002-04-04', '23', 'Single', 'estancia', 'jayrold@gmail.com', 'A', '1st Year', 'football', '', 'Pending'),
(32, '', 'jhguj', 'Male', '9098', '2025-10-05', '0', 'Single', 'nkj', 'jayrold@gmail.com', 'C', '', 'basketball', '', 'Pending'),
(33, '', 'kenneth ababa', 'Male', '09456220613', '2002-11-03', '22', 'Single', 'Negros Occidental, Sagay city', 'kennethababa@gmail.com', 'A', '4th year', 'badminton', '', 'Pending'),
(34, '', 'KENNETH', 'Male', '09876', '2025-10-08', '0', 'Single', 'JKJHG', 'Mq@JHSDJ', 'C', '2nd year', 'athlete\'s', '', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_adviser`
--
ALTER TABLE `tb_adviser`
  ADD PRIMARY KEY (`adviser_id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_adviser`
--
ALTER TABLE `tb_adviser`
  MODIFY `adviser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
