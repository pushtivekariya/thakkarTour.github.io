-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 09:59 AM
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
-- Database: `dbtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_log`
--

CREATE TABLE `ad_log` (
  `admin_name` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `admin_password` varchar(255) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `ad_log`
--

INSERT INTO `ad_log` (`admin_name`, `admin_password`) VALUES
('pushti vekariya', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(15, 'mansi malaviya', 'mansimalaviya@gmail.com', 2147483647, 'lakshman nagar', 'qwerty', 34, '2022-08-10', '2022-08-20'),
(17, 'sakshi', 'sk@gmail.com', 2147483647, 'mumbai', 'surat', 2, '2022-08-04', '2022-08-04'),
(18, 'mital vekariya', 'mital@gmail.com', 2147483647, 'kamrej', 'statue of unity', 4, '2022-08-19', '2022-09-02'),
(19, 'rutu gabani', 'rutu@gmail.com', 2147483647, 'vijay nagar , surat', 'mahabaleshvar', 3, '2022-08-26', '2022-08-30'),
(20, 'shilpa savani', 'shilu@gmail.com', 2147483647, 'lajamani chowk surat', 'goa', 2, '2022-08-17', '2022-08-19'),
(21, 'priya', 'priya28@gmail.com', 2147483647, 'matavadi', 'manali', 2, '2022-08-18', '2022-08-28'),
(23, 'pushti vekariya', 'sakshi38@gmail.com', 2147483647, 'shubhvilla', 'mahal', 2, '2022-08-07', '2022-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `del_trip`
--

CREATE TABLE `del_trip` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `del_trip`
--

INSERT INTO `del_trip` (`id`, `uname`, `email`, `mobile`, `reason`) VALUES
(1, 'mansi malaviya', 'priya@76gmail.com', 0, 'price is more than others'),
(2, 'manu', 'kirtivekariya85@gamil.com', 0, 'due to covid situation'),
(3, 'pushti vekariya', 'priya28@gmail.com', 1243658790, 'emergency office work'),
(4, 'mansi malaviya', 'priya28@gmail.com', 2147483647, 'not a mendatory reason'),
(5, 'mital vekariya', 'mitu@gmail.com', 1234560987, 'not a reason'),
(6, 'pushti vekariya', 'priya@76gmail.com', 1243658790, 'due to emergency work');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`uname`, `upass`) VALUES
('manu', '123'),
('mital', '1q'),
('pushti', '12'),
('pushti', '123'),
('pushti vekariya', '12'),
('pushti vekariya', '123'),
('pushti vekariya', '12345'),
('pushti vekariya', '1234678'),
('rutu', '12'),
('rutu', '123'),
('rutu', '12345'),
('rutu', 'qw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `del_trip`
--
ALTER TABLE `del_trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`uname`,`upass`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `del_trip`
--
ALTER TABLE `del_trip`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
