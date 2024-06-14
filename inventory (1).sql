-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 05:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `Item_Id` bigint(20) NOT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Brand` varchar(50) DEFAULT NULL,
  `ItemQuantity` int(50) DEFAULT NULL,
  `DateDeleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`Item_Id`, `Category`, `Brand`, `ItemQuantity`, `DateDeleted`) VALUES
(1, 'Knife', 'Motolola', 3, '2024-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `borrowedlog`
--

CREATE TABLE `borrowedlog` (
  `Borrow_Id` bigint(20) NOT NULL,
  `Student_Id` varchar(11) NOT NULL,
  `Item_Id` bigint(100) DEFAULT NULL,
  `BorrowQuantity` int(11) DEFAULT NULL,
  `timeStart` time NOT NULL,
  `timeEnd` time NOT NULL,
  `DateBorrowed` date DEFAULT NULL,
  `DateReturned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `Item_Id` bigint(20) NOT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Brand` varchar(50) DEFAULT NULL,
  `ItemQuantity` int(50) DEFAULT NULL,
  `DateAdded` date DEFAULT NULL,
  `BorrowQuantity` int(11) NOT NULL,
  `DamagedQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`Item_Id`, `Category`, `Brand`, `ItemQuantity`, `DateAdded`, `BorrowQuantity`, `DamagedQuantity`) VALUES
(2, 'Knife', 'Motolola', 3, '2024-06-10', 0, 0),
(3, 'Plate', 'Miniso', 24, '2024-06-11', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginhistory`
--

CREATE TABLE `loginhistory` (
  `User_Id` int(11) DEFAULT NULL,
  `loginTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginhistory`
--

INSERT INTO `loginhistory` (`User_Id`, `loginTime`) VALUES
(1, '2024-06-09 13:38:25'),
(1, '2024-06-10 19:43:08'),
(1, '2024-06-10 19:49:12'),
(1, '2024-06-10 19:55:26'),
(1, '2024-06-11 03:44:48'),
(1, '2024-06-11 05:35:02'),
(1, '2024-06-11 11:12:02'),
(1, '2024-06-11 15:30:48'),
(1, '2024-06-11 17:31:51'),
(1, '2024-06-11 23:37:14'),
(1, '2024-06-12 13:11:48'),
(1, '2024-06-13 00:58:35'),
(1, '2024-06-13 12:50:47'),
(1, '2024-06-13 22:47:52'),
(1, '2024-06-14 21:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `Request_Id` bigint(11) NOT NULL,
  `Student_Id` varchar(11) NOT NULL,
  `Item_Id` bigint(100) DEFAULT NULL,
  `BorrowQuantity` int(11) DEFAULT NULL,
  `DateBorrowed` date DEFAULT NULL,
  `DateReturned` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `returnedlog`
--

CREATE TABLE `returnedlog` (
  `Request_Id` bigint(11) NOT NULL,
  `StudentName` varchar(50) DEFAULT NULL,
  `SectionCourse` varchar(50) DEFAULT NULL,
  `Item_Id` bigint(100) DEFAULT NULL,
  `BorrowQuantity` int(11) DEFAULT NULL,
  `DamagedQuantity` int(11) NOT NULL,
  `DateBorrowed` date DEFAULT NULL,
  `DateReturned` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentslist`
--

CREATE TABLE `studentslist` (
  `Student_Id` varchar(11) NOT NULL,
  `StudentName` varchar(50) DEFAULT NULL,
  `SectionCourse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `PassWord` varchar(255) DEFAULT NULL
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `UserName`, `PassWord`) VALUES
(1, 'admin', '$2y$10$HAjAL.Ukf4HjnPNZcGB/2uoyh7cPaBgRZJamYJbceglnM40taTIRm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`Item_Id`);

--
-- Indexes for table `borrowedlog`
--
ALTER TABLE `borrowedlog`
  ADD PRIMARY KEY (`Borrow_Id`),
  ADD KEY `Item_Id` (`Item_Id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`Item_Id`);

--
-- Indexes for table `loginhistory`
--
ALTER TABLE `loginhistory`
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`Request_Id`),
  ADD KEY `Item_Id` (`Item_Id`);

--
-- Indexes for table `returnedlog`
--
ALTER TABLE `returnedlog`
  ADD PRIMARY KEY (`Request_Id`),
  ADD KEY `Item_Id` (`Item_Id`);

--
-- Indexes for table `studentslist`
--
ALTER TABLE `studentslist`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `Item_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `borrowedlog`
--
ALTER TABLE `borrowedlog`
  MODIFY `Borrow_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `Item_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowedlog`
--
ALTER TABLE `borrowedlog`
  ADD CONSTRAINT `borrowedlog_ibfk_1` FOREIGN KEY (`Item_Id`) REFERENCES `items` (`Item_Id`),
  ADD CONSTRAINT `borrowedlog_ibfk_2` FOREIGN KEY (`Student_Id`) REFERENCES `studentslist` (`Student_Id`);

--
-- Constraints for table `loginhistory`
--
ALTER TABLE `loginhistory`
  ADD CONSTRAINT `loginhistory_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`User_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
