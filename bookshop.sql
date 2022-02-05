-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 12:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyerrequest`
--

CREATE TABLE `buyerrequest` (
  `OrderId` int(6) UNSIGNED NOT NULL,
  `BuyerName` varchar(40) NOT NULL,
  `BuyerPhoneNumber` varchar(30) NOT NULL,
  `SellerName` varchar(10) NOT NULL,
  `BookName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerrequest`
--

INSERT INTO `buyerrequest` (`OrderId`, `BuyerName`, `BuyerPhoneNumber`, `SellerName`, `BookName`) VALUES
(1, 'afridul33', '123456', 'aiman', 'Dune (nove'),
(2, 'ridwan11', '123456', 'sadiq', 'Sherlock H'),
(4, 'Joy', '123456', 'Hopkins', 'ABCD Basic'),
(5, 'Joy', '123456', 'Hopkins', 'ABCD Basic'),
(6, 'Tania', '01743865', 'Ahad', 'ABCD Basic'),
(7, 'Atanu', '014566889', 'Joy', 'Steve Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `confirmtable`
--

CREATE TABLE `confirmtable` (
  `orderId` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmtable`
--

INSERT INTO `confirmtable` (`orderId`, `status`) VALUES
('6', 'Done'),
('1', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `BookID` varchar(10) NOT NULL,
  `BookName` varchar(30) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Publication` varchar(50) NOT NULL,
  `Genre` varchar(15) NOT NULL,
  `BookPrice` double NOT NULL,
  `BookPublished` date NOT NULL,
  `SellerName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`BookID`, `BookName`, `Author`, `Publication`, `Genre`, `BookPrice`, `BookPublished`, `SellerName`) VALUES
('111458', 'Attack on Titan', 'Isayama', 'Shonen Jump', 'Fantasy', 700, '2021-02-23', 'joy1'),
('112233', 'Steve Jobs', 'Walter Isaacson', 'Us Publication', 'Biography', 300, '2020-11-19', 'Joy'),
('11445', 'My Hero Academia', 'Kohei Horikoshi', 'Shonen Jump', 'Fantasy', 700, '2019-05-02', 'Eren Jager'),
('121', 'ABCD Basics', 'Hopkins', 'Hippo Publication', 'Educational', 250, '2021-03-01', 'Ahad Publications'),
('123', 'Kisame', 'Waka', 'Sito', 'Biography', 500, '2021-04-04', 'atanu22'),
('12345', 'Sherlock Holmes', 'Arthur Conan Doyle', 'UK Publication', 'Fantasy', 500, '2020-11-07', 'Rahat'),
('1445', 'Zamindarer Goppo', 'Hashiram Das', 'Pagla Publications', 'Drama', 120, '2020-03-06', 'Habib'),
('361145', 'Fight of The Sorcerers', 'Gege Akutami', 'Shonen Jump', 'Fantasy', 980, '2019-06-17', 'atanu22'),
('456321', 'Hitler\'s Secret Book', 'Zweites Buch', 'Us Publication', 'Biography', 600, '2020-11-10', 'aiman'),
('77439', 'WatashiWa', 'JK', 'RK', 'Biography', 120, '2021-03-29', 'atanu22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `nid` int(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `imageg` varchar(30) DEFAULT NULL,
  `deleted_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `email`, `username`, `password`, `address`, `phoneno`, `nid`, `gender`, `type`, `dob`, `imageg`, `deleted_by`) VALUES
('Afridul Haque', 'afridul@gmail.com', 'afridul33', '1234', 'Faridpur', '12365478', 654221445, 'male', 'dguy', '1999-01-21', '../view/uploads/Chloe-wallpape', NULL),
('Atanu Rudra Joy', 'atanu@email.com', 'atanu22', '1234', 'Mirpur, Dhaka', '2564564569', 421536989, 'male', 'seller', '1999-06-03', '../view/uploads/Arrow-wallpape', NULL),
('Ridwan Mannan', 'ridwan@gmail.com', 'ridwan11', '1234', 'Chattogram', '123456789', 213654799, 'male', 'buyer', '1998-06-17', '../view/uploads/Blonde-wallpap', NULL),
('Tania Rahman', 'tania.rahman26@yahoo.com', 'tania26', '12345', 'Mirsharai, Chattogram', '0152123498', 78945612, 'female', 'admin', '1999-05-10', '../view/uploads/Batman_Arkham-', 'atanu22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `firstname` (`firstname`),
  ADD UNIQUE KEY `firstname_2` (`firstname`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  MODIFY `OrderId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
