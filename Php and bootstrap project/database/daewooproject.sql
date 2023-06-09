-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 08:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daewooexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `daewooproject`
--

CREATE TABLE `daewooproject` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `issued` varchar(255) NOT NULL,
  `ddate` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `time` varchar(12) NOT NULL,
  `route` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daewooproject`
--

INSERT INTO `daewooproject` (`id`, `name`, `issued`, `ddate`, `phone`, `time`, `route`) VALUES
(12, 'Mahar Shahid Zaman', '2023-01-27', '2023-01-06', 999999, '00:19', 'Multan-Lahore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daewooproject`
--
ALTER TABLE `daewooproject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daewooproject`
--
ALTER TABLE `daewooproject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
