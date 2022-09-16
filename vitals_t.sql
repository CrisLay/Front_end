-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 03:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `vitals_t`
--

CREATE TABLE `vitals_t` (
  `vitals_id` int(12) NOT NULL,
  `oxygen_lvl` int(3) NOT NULL,
  `heart_rate` int(3) NOT NULL,
  `temp` float NOT NULL,
  `readingtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitals_t`
--

INSERT INTO `vitals_t` (`vitals_id`, `oxygen_lvl`, `heart_rate`, `temp`, `readingtime`) VALUES
(1, 97, 72, 36.5, '2022-03-31 07:45:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vitals_t`
--
ALTER TABLE `vitals_t`
  ADD PRIMARY KEY (`vitals_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vitals_t`
--
ALTER TABLE `vitals_t`
  MODIFY `vitals_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
