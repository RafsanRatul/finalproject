-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 04:34 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `un` varchar(10) CHARACTER SET latin1 NOT NULL,
  `address` longtext NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `pw` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `tag`, `name`, `email`, `un`, `address`, `phone_no`, `pw`) VALUES
(31, 2, 'Rafsan Jani', 'rat@gmail.com', 'ratul', 'Dhaka', '0125635263', 'e10adc3949ba59abbe56e057f20f883e'),
(33, 2, 'Tasneem', 'shama123@gmail.com', 'Shama', 'Puran Dhaka', '01515203927', '3354045a397621cd92406f1f98cde292');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
