-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 10, 2023 at 04:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Username`, `Password`) VALUES
('Janhavi', 'Janu201101');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `Full_Name`, `Phone_No`, `Username`, `Password`, `Address`, `Pay_Mode`) VALUES
(9, 'Janhavi Kharkar', 8828277267, '', '', 'vitawa thane', 'COD'),
(10, 'Anshuta Kharkar', 8828457584, '', '', 'mumbai maharashtra', 'COD'),
(11, 'user1', 84445451211, '', '', 'mumbai maharashtra', 'COD'),
(12, 'Reshma Kharkar', 8928906997, '', '', 'malad mumbai', 'COD'),
(16, 'Janhavi Kharkar', 8828277267, '', '', 'malad mumbai', 'COD'),
(20, '', 0, 'Janhavi', 'Janu@2012', '', 'COD'),
(21, 'John', 8545454875, '', 'John', 'Airoli sector 19 navi mumbai', 'COD'),
(22, '', 0, 'Janhavi', 'Janu@2012', '', 'COD'),
(23, 'vijay', 8928903657, '', 'viju123', 'vitawa koliwada thane', 'COD'),
(24, '', 0, 'vijay', 'viju123', '', 'COD'),
(25, '', 0, 'vijay', 'viju123', 'Airoli sector 3 navi mumbai', 'COD'),
(26, 'rohini', 8928906578, '', 'rohini123', 'ghansoli navi mumbai', 'UPI'),
(27, 'rohini', 1256456332, '', 'rohu', 'airoli naka navi mumbai', 'COD'),
(28, '', 0, 'kripa', 'kripa123', 'Tukaram niwas vitawa koliwada   , near vitthal temple ,near paryache maidan', 'COD'),
(29, '', 0, 'kripa', 'kripa123', 'ghansoli navi mumbai', 'COD'),
(30, '', 0, 'kripa', 'kripa123', 'ghansoli navi mumbai', 'UPI');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `Username` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Username`, `Phone_No`, `Email`, `Password`) VALUES
('Janhavi', 8828277267, 'Kharkarjanhavi@gmail.com', 'Janu201101'),
('Anshuta', 8945697812, 'Kharkaranshuta@gmail.com', 'anshu123'),
('Reshma', 1336457454, 'reshma@gmail.com', 'reshu123'),
('Vijay', 4564578543, 'vijay@gmail.com', 'viju123'),
('Kripa', 254621333, 'kripa@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(9, 'Maggi Noodles', 105, 1),
(9, 'Spinach', 25, 1),
(10, 'Maggi Noodles', 105, 1),
(10, 'Strawberries', 200, 1),
(10, 'Amul Milk Taaza', 30, 1),
(10, 'Harpic', 80, 1),
(11, 'Coconut Oil', 85, 2),
(11, 'Olive Oil', 300, 1),
(11, 'Basmati Rice', 150, 1),
(11, 'Cashew Nuts', 185, 1),
(11, 'Harpic', 80, 1),
(12, 'Maggi Noodles', 105, 2),
(12, 'Strawberries', 200, 1),
(12, 'Amul Milk Taaza', 30, 1),
(12, 'Amul Butter', 50, 2),
(13, 'Maggi Noodles', 105, 1),
(13, 'Sunflower Oil', 300, 1),
(13, 'Coconut Oil', 85, 1),
(13, 'Dove Soap', 45, 1),
(14, 'Potatoes', 35, 1),
(14, 'Cashew Nuts', 185, 1),
(14, 'Baby Powder', 130, 1),
(14, 'Apples', 130, 1),
(15, 'Santoor Soap', 35, 1),
(15, 'Sunflower Oil', 300, 1),
(15, 'Onions', 40, 1),
(15, 'Avocados', 300, 1),
(16, 'Maggi Noodles', 105, 1),
(16, 'Strawberries', 200, 1),
(16, 'Amul Milk Taaza', 30, 1),
(16, 'Avocados', 300, 1),
(17, 'Amul Milk Taaza', 30, 1),
(17, 'Strawberries', 200, 1),
(17, 'Sunflower Oil', 300, 1),
(18, 'Maggi Noodles', 105, 1),
(19, 'Strawberries', 200, 1),
(20, 'Avocados', 300, 1),
(21, 'Amul Cookies', 20, 1),
(21, 'Sunflower Oil', 300, 1),
(22, 'Maggi Noodles', 105, 2),
(22, 'Strawberries', 200, 1),
(22, 'Pears Soap', 130, 1),
(23, 'Amul Milk Taaza', 30, 1),
(24, 'Basmati Rice', 150, 1),
(25, 'Onions', 40, 1),
(25, 'Amul Lassi', 15, 1),
(25, 'Amul Butter', 50, 1),
(26, 'Maggi Noodles', 105, 1),
(27, 'Amul Milk Taaza', 30, 1),
(28, 'Amul Butter', 50, 1),
(29, 'Avocados', 300, 1),
(30, 'Amul Lassi', 15, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
