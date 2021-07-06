-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 09:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeflight`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `AirlineID` varchar(6) NOT NULL,
  `AirlineName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`AirlineID`, `AirlineName`) VALUES
('AL0001', 'Air Asia'),
('AL0002', 'KBT'),
('AL0003', 'Japan Airline'),
('AL0004', 'Korea Airline'),
('AL0005', 'Nok Air');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `AirPortID` varchar(4) NOT NULL,
  `AirPortName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`AirPortID`, `AirPortName`) VALUES
('A001', 'Bankkok'),
('A002', 'Thaiwan'),
('A003', 'Indo'),
('A004', 'Japan'),
('A005', 'Korea');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `databaseType` int(1) NOT NULL,
  `customerID` int(5) NOT NULL,
  `payMentID` varchar(4) DEFAULT NULL,
  `title` varchar(10) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `PersonalID` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`databaseType`, `customerID`, `payMentID`, `title`, `Fname`, `Lname`, `tel`, `email`, `username`, `password`, `PersonalID`) VALUES
(1, 1, NULL, 'นาย', 'สุระชาติ', 'มะณีพันธ์', '0990291770', 'masker4de@gmail.com', 'masker4de', 'masker4de', '1459900000000'),
(0, 2, NULL, 'นาง', 'สุระชาติ', 'มะณีพันธ์', '0990291770', 'masker4de@gmail.com', 'masker4de', 'awd', '1234567890123'),
(0, 43, NULL, 'นาย', 'สุระชาติ', 'มะณีพันธ์', '0990291770', 'flukeseyhey@gmail.com', 'masker4de', 'awd', '1234567890123'),
(1, 44, NULL, 'นาย', 'zero', 'XI', '0990291770', 'arshoora@gmail.com', 'admin', '1234', '1234567890123');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flightID` int(8) NOT NULL,
  `AirPortID` varchar(4) NOT NULL,
  `ToAirPortID` varchar(4) NOT NULL,
  `FlightDate` date NOT NULL,
  `flightTime` time DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `AirlineID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flightID`, `AirPortID`, `ToAirPortID`, `FlightDate`, `flightTime`, `Price`, `AirlineID`) VALUES
(65400001, 'A001', 'A002', '2019-05-30', '00:00:00', 1500, 'AL0002'),
(65400002, 'A002', 'A001', '2019-05-31', '18:30:00', 999, 'AL0005'),
(65400004, 'A003', 'A005', '0000-00-00', '00:00:00', 2900, 'AL0002'),
(65400005, 'A003', 'A005', '0000-00-00', '00:00:00', 999, 'AL0004');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `customerID` int(5) NOT NULL,
  `payMentID` varchar(4) NOT NULL,
  `PersonalID` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `orderID` int(7) NOT NULL,
  `flightID` int(8) NOT NULL,
  `passengerName` varchar(45) DEFAULT NULL,
  `baggage` int(3) DEFAULT NULL,
  `flight_AirPortID` varchar(4) NOT NULL,
  `customerID` int(5) NOT NULL,
  `payMentID` varchar(4) NOT NULL,
  `PersonalID` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `payMentID` varchar(4) NOT NULL,
  `payMentName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotionID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `promotionName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotionID`, `promotionName`, `price`) VALUES
('0001', 'Wonder visit campaign', 50),
('2', 'ONE WAY TO AUSTRALIA AND NEW ZEALAND', 69),
('3', 'AUSTRALASIA DELIGHT FOR 2', 30),
('4', 'เที่ยวหน้าร้อนก่อนเปิดเทอม', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`AirlineID`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`AirPortID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flightID`),
  ADD KEY `fk_flight_Airline` (`AirlineID`),
  ADD KEY `fk_flight_AirPort` (`AirPortID`) USING BTREE,
  ADD KEY `fk_flight_toAirPort` (`ToAirPortID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`customerID`,`payMentID`,`PersonalID`),
  ADD KEY `fk_customer_order_customerid` (`customerID`) USING BTREE,
  ADD KEY `fk_customer_order_personalid` (`PersonalID`) USING BTREE,
  ADD KEY `fk_paymenthod_order_paymentid` (`payMentID`) USING BTREE;

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`orderID`) USING BTREE,
  ADD KEY `fk_flight_order_info` (`flightID`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`payMentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `flightID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65400006;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `orderID` int(7) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `fk_flight_AirPort` FOREIGN KEY (`AirPortID`) REFERENCES `airport` (`AirPortID`),
  ADD CONSTRAINT `fk_flight_Airline` FOREIGN KEY (`AirlineID`) REFERENCES `airline` (`AirlineID`),
  ADD CONSTRAINT `fk_flight_toAirPort` FOREIGN KEY (`ToAirPortID`) REFERENCES `airport` (`AirPortID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
