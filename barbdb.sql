-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 08:14 AM
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
  `dtime` varchar(5) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `vehiclenum` varchar(15) NOT NULL,
  `services` text NOT NULL,
  `comments` text NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`bid`, `mname`, `phone`, `email`, `sdate`, `dtime`, `vehicle`, `vehiclenum`, `services`, `comments`, `status`) VALUES
(39, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-09-29', '10 AM', 'Yamaha FZ', 'Ba 1234', 'Full Servicing', 'lol', 'Active');

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
  `dtime` varchar(5) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `vehiclenum` varchar(15) NOT NULL,
  `services` text NOT NULL,
  `comments` text NOT NULL,
  `status` varchar(7) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cancellations`
--

CREATE TABLE `cancellations` (
  `bid` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `dtime` varchar(5) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `vehiclenum` varchar(15) NOT NULL,
  `services` text NOT NULL,
  `comments` text NOT NULL,
  `status` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`eid`, `ename`, `ephone`, `epassword`) VALUES
(3, 'Ritika Karanjit', 1234567890, '12345');

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
(1, 'Yamaha', 'FZ'),
(2, 'Yamaha', 'R15'),
(3, 'Yamaha', 'MT 15'),
(4, 'Honda', 'Civic'),
(5, 'Honda', 'XR 150'),
(6, 'Husqvarna', 'Vitpilen'),
(7, 'Husqvarna', 'Svartpilen'),
(8, 'Hyundai', 'Creta'),
(9, 'Hyundai', 'Santa fe'),
(20, 'TVS', 'Apache'),
(21, 'Hyundai', 'i10'),
(22, 'Hyundai', 'i20'),
(23, 'Tesla', 'Model X'),
(24, 'Tesla', 'Model S'),
(25, 'Tesla', 'Model 3'),
(26, 'Tesla', 'Model Y'),
(27, 'Land Rover', 'Discovery'),
(28, 'Land Rover', 'Evoke'),
(29, 'Suzuki', 'Gypsy'),
(30, 'Bajaj', 'Pulsar'),
(31, 'Hero', 'Splendor'),
(32, 'Hero', 'Xpulse'),
(33, 'Bajaj', 'Platina'),
(34, 'Suzuki', 'Gixxer'),
(35, 'Royal Enfield', 'Classic'),
(36, 'Royal Enfield', 'Himalayan'),
(37, 'Royal Enfield', 'Thunderbird'),
(38, 'Honda', 'Unicorn'),
(39, 'Honda', 'Aviator'),
(40, 'Honda', 'Pleasure'),
(41, 'Yamaha', 'RayZR'),
(42, 'Aprilia', 'SR 150'),
(43, 'Vespa', 'SXL'),
(44, 'Vespa', 'VXL'),
(45, 'Honda', 'Dio'),
(46, 'Honda', 'Grazia');

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
-- Indexes for table `cancellations`
--
ALTER TABLE `cancellations`
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
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
