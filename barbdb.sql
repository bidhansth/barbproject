-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 09:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `bid` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `dtime` tinyint(4) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `vehiclenum` varchar(15) NOT NULL,
  `services` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`bid`, `mname`, `phone`, `email`, `sdate`, `dtime`, `vehicle`, `vehiclenum`, `services`, `comments`) VALUES
(24, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-09-22', 9, 'yamaha fz', '12123 ', 'Full Servicing', ''),
(26, 'Ajit KC', 9843777722, 'azaxkc@gmail.com', '2021-09-22', 4, 'yamaha fz', '123a', 'Full Servicing', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `dtime` tinyint(4) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `vehiclenum` varchar(15) NOT NULL,
  `services` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `mname`, `phone`, `email`, `sdate`, `dtime`, `vehicle`, `vehiclenum`, `services`, `comments`) VALUES
(25, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-09-22', 10, 'yamaha fz', '1212', 'Full Servicing', ''),
(27, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-09-24', 9, 'yamaha fz', '122', 'Full Servicing', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `eid` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `ephone` double NOT NULL,
  `epassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mid` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` double NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mid`, `mname`, `email`, `phone`, `password`) VALUES
(17, 'Bidhan Shrestha', 'bidhan.sth1@gmail.com', 9808946761, '827ccb0eea8a706c4c34a16891f84e7b'),
(19, 'Ajit KC', 'azaxkc@gmail.com', 9843777722, '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vid` int(11) NOT NULL,
  `vmake` varchar(15) NOT NULL,
  `vmodel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vid`, `vmake`, `vmodel`) VALUES
(1, 'yamaha', 'fz'),
(2, 'yamaha', 'r15'),
(3, 'yamaha', 'mt 15'),
(4, 'honda', 'civic'),
(5, 'honda', 'xr 150'),
(6, 'husqvarna', 'vitpilen'),
(7, 'husqvarna', 'svartpilen'),
(8, 'hyundai', 'creta'),
(9, 'hyundai', 'santa fe'),
(10, 'hyundai', 'i20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
