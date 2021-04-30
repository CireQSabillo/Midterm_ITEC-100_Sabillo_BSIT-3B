-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 09:38 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `Username` varchar(100) NOT NULL,
  `Activity` varchar(200) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`Username`, `Activity`, `Time`, `Date`) VALUES
('ADMIN', 'LOGIN', '03:19:59', '2021-04-25'),
('ADMIN', 'LOGOUT', '03:20:16', '2021-04-25'),
('ADMIN', 'LOGIN', '03:20:33', '2021-04-25'),
('ADMIN', 'LOGOUT', '03:20:43', '2021-04-25'),
('ADMIN', 'LOGIN', '03:22:37', '2021-04-25'),
('ADMIN', 'LOGIN', '03:22:55', '2021-04-25'),
('ADMIN', 'LOGIN', '03:23:41', '2021-04-25'),
('ADMIN', 'LOGOUT', '03:24:32', '2021-04-25'),
('ADMIN', 'LOGIN', '03:24:40', '2021-04-25'),
('ADMIN', 'PASSWORD CHANGED', '03:28:51', '2021-04-25'),
('ADMIN', 'LOGIN', '03:29:02', '2021-04-25'),
('ADMIN', 'LOGOUT', '03:29:30', '2021-04-25'),
('ADMIN2', 'LOGIN', '03:30:17', '2021-04-25'),
('ADMIN2', 'LOGOUT', '03:30:46', '2021-04-25'),
('ADMIN', 'LOGIN', '03:31:07', '2021-04-25'),
('ADMIN2', 'LOGOUT', '03:31:25', '2021-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `user_code`
--

CREATE TABLE `user_code` (
  `ID` int(200) NOT NULL,
  `User_ID` varchar(200) NOT NULL,
  `Code` varchar(200) NOT NULL,
  `Created` varchar(200) NOT NULL,
  `Expiration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_code`
--

INSERT INTO `user_code` (`ID`, `User_ID`, `Code`, `Created`, `Expiration`) VALUES
(1, 'ADMIN', '612583', '2021-04-23 18:17:19', '2021-04-23 18:22:19'),
(47, 'ADMIN', '193904', '2021-04-25 15:22:37', '2021-04-25 15:27:37'),
(48, 'ADMIN', '315332', '2021-04-25 15:22:55', '2021-04-25 15:27:55'),
(49, 'ADMIN', '481913', '2021-04-25 15:23:41', '2021-04-25 15:28:41'),
(50, 'ADMIN', '415671', '2021-04-25 15:24:40', '2021-04-25 15:29:40'),
(51, 'ADMIN', '658197', '2021-04-25 15:29:02', '2021-04-25 15:34:02'),
(52, 'ADMIN2', '256830', '2021-04-25 15:30:17', '2021-04-25 15:35:17'),
(53, 'ADMIN', '853048', '2021-04-25 15:31:07', '2021-04-25 15:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_database`
--

CREATE TABLE `user_database` (
  `ID` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirm_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_database`
--

INSERT INTO `user_database` (`ID`, `username`, `email`, `password`, `confirm_password`) VALUES
(1, 'ADMIN', 'admin@gmail.com', 'ADMIN123admin!@#', 'ADMIN123admin!@#'),
(7, 'ADMIN2', 'admin@gmail.com', 'ADMIN2admin212!@', 'ADMIN2admin212!@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_code`
--
ALTER TABLE `user_code`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_database`
--
ALTER TABLE `user_database`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_code`
--
ALTER TABLE `user_code`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_database`
--
ALTER TABLE `user_database`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
