-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 11:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- l: `spark_basic_banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `cname` varchar(55) NOT NULL,
  `acc_number` varchar(20) NOT NULL,
  `acc_type` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `current_balance` int(11) DEFAULT NULL,
  `acc_created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `cname`, `acc_number`, `acc_type`, `nationality`, `email_id`, `current_balance`, `acc_created_on`) VALUES
(1, 'Sanjay Kumar Sah', 'SBBS20220911SAN1603', 'Saving', 'Indian', 'Sanjay8797421521@gmail.com', 200, '2022-09-11 10:36:18'),
(2, 'Sanjay Kumar Sah', 'SBBS20220911SAN1603', 'Saving', 'Indian', 'Sanjay8797421521@gmail.com', 200, '2022-09-11 10:45:43'),
(3, 'Bibek Kumar Sah', 'SBBS20220911BIB1609', 'Saving', 'Indian', 'Bibek@gmail.com', 1700, '2022-09-11 10:45:43'),
(4, 'Mohammad Afroz', 'SBBS20220911AFZ1610', 'Saving', 'Indian', 'Afroz@gmail.com', 1000, '2022-09-11 10:45:43'),
(5, 'Arun Kumar Shestha', 'SBBS20220911ARU1611', 'Saving', 'Indian', 'Arun@gmail.com', 1000, '2022-09-11 10:45:43'),
(6, 'Dhiraj Kumar Shah', 'SBBS20220911DH1609', 'Saving', 'Indian', 'Dhiraj@gmail.com', 1000, '2022-09-11 10:45:43'),
(7, 'Rupesh Kumar Dhah', 'SBBS20220911RUP1609', 'Saving', 'Indian', 'Rupesh@gmail.com', 1000, '2022-09-11 10:45:43'),
(8, 'Aman Jaishwal', 'SBBS20220911AMA1609', 'Saving', 'Indian', 'Aman@gmail.com', 1000, '2022-09-11 10:45:43'),
(9, 'Om Yadav', 'SBBS20220911OMY1609', 'Saving', 'Indian', 'Omyadav@gmail.com', 1000, '2022-09-11 10:45:43'),
(10, 'Hari Kumar Mandal', 'SBBS20220911BIB1609', 'Saving', 'Indian', 'Hari@gmail.com', 1000, '2022-09-11 10:45:43'),
(11, 'Bishwajit Kumar Kamat', 'SBBS20220911BIB1609', 'Saving', 'Indian', 'Bishwajit@gmail.com', 1000, '2022-09-11 10:45:43'),
(12, 'Varma Kumar Londa', 'SBBS20220911BIB1609', 'Saving', 'Indian', 'Varma@gmail.com', 1000, '2022-09-11 10:45:43'),
(13, 'Ashmita Kumar Raut', 'SBBS20220911BIB1609', 'Saving', 'Indian', 'Ashmita@gmail.com', 1000, '2022-09-11 10:45:43'),
(14, 'Pinku Kumar Chaudhari', 'SBBS20220911BIB1609', 'Saving', 'Indian', 'Pinku@gmail.com', 1000, '2022-09-11 10:45:43'),
(15, 'Chinki Kumar Pandey', 'SBBS20220911BIB1609', 'Saving', 'Indian', 'Chinki@gmail.com', 1000, '2022-09-11 10:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `transactiondetails`
--

CREATE TABLE `transactiondetails` (
  `tid` int(11) NOT NULL,
  `tdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `senderAccNumber` varchar(20) NOT NULL,
  `recipientAccNumber` varchar(20) NOT NULL,
  `senderName` varchar(50) NOT NULL,
  `recipientName` varchar(50) NOT NULL,
  `transactionAmt` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactiondetails`
--

INSERT INTO `transactiondetails` (`tid`, `tdate`, `senderAccNumber`, `recipientAccNumber`, `senderName`, `recipientName`, `transactionAmt`, `message`, `cid`) VALUES
(1, '2022-09-11 11:21:34', 'SBBS20220911SAN1603', 'SBBS20220911BIB1609', 'Sanjay kumar Sah', 'Bibek Kumar Sah', 100, 'Check', 2),
(2, '2022-09-11 11:22:59', 'SBBS20220911SAN1603', 'SBBS20220911BIB1609', 'Sanjay kumar Sah', 'Bibek Kumar Sah', 100, 'check transaction', 2),
(4, '2022-09-11 11:24:23', 'SBBS20220911SAN1603', 'SBBS20220911BIB1609', 'Sanjay kumar Sah', 'Bibek Kumar Sah', 100, 'check transaction', 2),
(5, '2022-09-11 16:15:19', 'SBBS20220911SAN1603', 'SBBS20220911BIB1609', 'Sanjay Kumar Sah', 'Bibek Kumar Sah', 100, 'gift', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `transactiondetails`
--
ALTER TABLE `transactiondetails`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transactiondetails`
--
ALTER TABLE `transactiondetails`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactiondetails`
--
ALTER TABLE `transactiondetails`
  ADD CONSTRAINT `transactiondetails_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`);
COMMIT;
