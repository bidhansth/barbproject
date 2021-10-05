-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 03:04 PM
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
(39, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-09-29', '10 AM', 'Yamaha FZ', 'Ba 1234', 'Full Servicing', 'lol', 'Active'),
(43, 'Ajit KC', 9843777722, 'azaxkc@gmail.com', '2021-10-04', '9 AM', 'Yamaha FZ', '123a sdas ', 'Full Servicing', 'asdasdas, ', 'Pending'),
(44, 'Ajit KC', 9843777722, 'azaxkc@gmail.com', '2021-10-03', '9 AM', 'Husqvarna Svartpilen', '12e asdas', 'Full Servicing', 'asd 12', 'Active'),
(45, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-10-03', '10 AM', 'Hyundai i20', '123 asda ', 'Full Servicing', 'asd 123 asd 12asd lol', 'Pending'),
(46, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-10-03', '12 PM', 'Hero Splendor', '123 asd asas1', 'Basic Servicing', 'aaaaaaaaaabbbbbbb', 'Pending'),
(47, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-10-03', '1 PM', 'Bajaj Pulsar', '123 asd asas111', 'Basic Servicing', 'aaaaaaaaaab, headlight replacement', 'Active'),
(49, 'Bibesh Paudel', 9867649508, 'bibesh03@gmail.com', '2021-10-04', '1 PM', 'TVS Apache', 'Ba 1 Kha 1990', 'Full Servicing', 'sidelight broken, ', 'Active'),
(51, 'Birendra Bista', 1234567890, 'birendra.bista@ncit.edu.np', '2021-10-04', '12 PM', 'Honda Civic', 'Ba 12 Kha 1221', 'Basic Servicing,Full Wash', ', ', 'Active');

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

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `mname`, `phone`, `email`, `sdate`, `dtime`, `vehicle`, `vehiclenum`, `services`, `comments`, `status`) VALUES
(50, 'Ajit KC', 9843777722, 'azaxkc@gmail.com', '2021-10-06', '9 AM', 'Hyundai i10', 'Ba 14 Cha 1294', 'Basic Servicing,Front Brake,Half Wash', 'back light broken', 'Pending');

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

--
-- Dumping data for table `cancellations`
--

INSERT INTO `cancellations` (`bid`, `mname`, `phone`, `email`, `sdate`, `dtime`, `vehicle`, `vehiclenum`, `services`, `comments`, `status`) VALUES
(48, 'Bidhan Shrestha', 9808946761, 'bidhan.sth1@gmail.com', '2021-10-04', '4 PM', 'Yamaha FZ', '123 asd 123 ', 'Full Servicing', '123213 asdad', 0);

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
(4, 'Admin', 1001, '12345'),
(5, 'Ritika Karanjit', 9841722152, '12345');

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
(19, 'Ajit KC', 'azaxkc@gmail.com', 9843777722, '827ccb0eea8a706c4c34a16891f84e7b'),
(20, 'Bibesh Paudel', 'bibesh03@gmail.com', 9867649508, '827ccb0eea8a706c4c34a16891f84e7b'),
(21, '123', '1@2.com', 0, '827ccb0eea8a706c4c34a16891f84e7b'),
(22, 'Birendra Bista', 'birendra.bista@ncit.edu.np', 1234567890, '827ccb0eea8a706c4c34a16891f84e7b');

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
(46, 'Honda', 'Grazia'),
(47, 'Honda', 'abc');

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
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
