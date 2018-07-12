-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 09:30 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `urole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `password`, `uname`, `urole`) VALUES
('Admin', 'ee472ad52b47df94903b221a6901958b', 'gate@admin#vkp', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `cnt` int(11) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `contact_department` varchar(40) NOT NULL,
  `contact_personal` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `outtime` datetime NOT NULL,
  `nov` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cnt`, `contact_number`, `uname`, `contact_department`, `contact_personal`, `datetime`, `photo`, `status`, `outtime`, `nov`) VALUES
(23, '9808156144', 'Abhinav', 'CentralOffice', 'Sapna', '2018-05-11 12:58:38', 'saved_images/1526023728.jpg', 0, '0000-00-00 00:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`cnt`),
  ADD KEY `datetime` (`datetime`),
  ADD KEY `outtime` (`outtime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `cnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
