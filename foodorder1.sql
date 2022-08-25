-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 11:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact1`
--

CREATE TABLE `contact1` (
  `Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact1`
--

INSERT INTO `contact1` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('Nikita', 'Nikita@gmail.com', '9876543210', 'Hello', 'Want some desi food'),
('Nikita', 'nikita@gmail.com', '9876543210', 'Hello', 'Hi, Nikita here'),
('Chanchal', 'chan@gmail.com', '9876543021', 'Food review', 'Bestt'),
('adarsh', 'adarsh@gmail.com', '7589678569', 'hello', 'all well??'),
('Sangeeta', 'sangeeta@gmail.com', '7589678000', 'Food query', 'hellloo'),
('Shantanu', 'shantanu@gmail.com', '7589678987', 'Can i get this?', 'pav bhaji'),
('Chanchal', 'csmalshg@gmail.com', '7589685469', 'hello', 'heyyyy'),
('\"Chanchal\"', 'csmalshg@gmail.com', '7589678000', 'hello', ''),
('\\nikita', 'nikita.patil18@vit.edu', '7589609876', 'Food query', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('1234567', '745896', 'csmalshg@gmail.com', '1234567809', 'shegaon', '1234567'),
('j1234', 'Jayesh Kamane', 'j@gmail.com', '7894561230', 'Pune', 'j1234'),
('Niki88', 'Nikita', 'Nikita@vit.edu', '6754382901', 'Pune', 'niki88'),
('s1234', 'Shubhu', 's@gmail.com', '1234567809', 'shegaon', 's1234'),
('sangeeta08', 'Sangeeta Malviya', 'sangeetamalviya08@gmail.com', '9999999999', 'Bibewadi', '1234'),
('y1234', 'Yogesh Kadam', 'y@gmail.com', '4567891230', 'Goa', 'y1234');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(11) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(1, 'Masala Paneer Kathi Roll', 40, '', 1, 'images/Masala_Paneer_Kathi_Roll.jpg', 'ENABLE'),
(2, 'Dosa', 60, '', 2, 'images/dosa.jpg', 'ENABLE'),
(3, 'Idli Sambhar', 80, '', 1, 'images/idlisambhar.jpg', 'ENABLE'),
(4, 'Spring Rolls', 65, '', 2, 'images/Spring_Rolls.jpg', 'ENABLE'),
(5, 'Baahubali Thali', 200, '', 3, 'images/Baahubali_Thali.jpg', 'ENABLE'),
(6, 'Coffee', 25, '', 2, 'images/coffee.jpg', 'ENABLE'),
(7, 'Tea', 20, '', 2, 'images/tea.jpg', 'ENABLE'),
(8, 'Paneer Pakora', 45, '', 2, 'images/paneer pakora.jpg', 'ENABLE'),
(9, 'Puff', 35, '', 2, 'images/puff.jpg', 'ENABLE'),
(10, 'Daal Baati Churma', 100, '', 8, 'images/daal_baati.jpg', 'ENABLE'),
(11, 'Samosa', 30, '', 8, 'images/samosa.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('j1234', 'Jayesh Kamane', 'j@gmail.com', '1234567809', 'shegaon', 'j1234'),
('k1234', 'Krunal Kale', 'ckj40856@gmail.com', '9487810674', 'USA,', 'k1234'),
('niki9820', 'Nikhil Patil', 'niki@gmail.cm', '1234567891', 'Pachora', 'niki9820'),
('roshanraj07', 'Roshan Raj', 'roshan@gmail.com', '9541258761', 'Bihar', 'roshan'),
('s1234', 'Shubhu Joshi', 's@gmail.com', '1234567890', 'Goa', 's1234'),
('sangeeta08', 'Sangeeta', 'sangeeta@gmail.com', '9999999999', 'Bibewadi', '1a2s3d4f5g'),
('v1234', 'Varad Kajarekar', 'v@gmail.com', '9876543210', 'Karnataka', 'v1234'),
('y1234', 'Yogesh Kadam', 'y@gmail.com', '8903079750', 'Pondicherry', 'y1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(11) NOT NULL,
  `F_ID` int(11) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(156, 1, 'Masala Paneer Kathi Roll', 40, 1, '2022-06-09', 'y1234', 1),
(157, 1, 'Masala Paneer Kathi Roll', 40, 1, '2022-06-09', 'j1234', 1),
(158, 1, 'Masala Paneer Kathi Roll', 40, 1, '2022-06-09', 'j1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'Nikhil\'s Restaurant', 'nikhil@restaurant.com', '7998562145', 'Karnataka', 'v1234'),
(2, 'Roshan\'s Restaurant', 'roshan@restaurant.com', '9887546821', 'Bihar', 'roshanraj07'),
(3, 'Aditi\'s Restaurant', 'aditi@restaurant.com', '7778564231', 'Goa', 's1234'),
(4, 'Food Exploria', 'ckj40856@gmail.com', '09487810674', 'Pune', 'k1234'),
(6, 'Pocket Cafe', 'lecafepondi234@gmail.com', '9443369040', 'USA', 'y1234'),
(7, 'Dosa Hut', 'sangeeta08@gmail.com', '9999999999', 'Bibewadi', 'sangeeta08'),
(8, 'Go 4 Food', 'go4food@gmail.com', '7412963258', 'shegaon', 'j1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
