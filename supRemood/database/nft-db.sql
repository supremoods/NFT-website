-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 12:59 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nft-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `bidding_start_time` datetime(6) NOT NULL,
  `bidding_end_time` datetime(6) NOT NULL,
  `image` varchar(500) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `description`, `creator`, `bidding_start_time`, `bidding_end_time`, `image`, `category`) VALUES
(2, 'Art 1', 500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/1.jpg', 'digital_art'),
(3, 'Art 2', 300, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/2.jpg', 'digital_art'),
(4, 'Art 3', 500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/3.jpg', 'digital_art'),
(5, 'Art 4', 500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/4.jpg', 'digital_art'),
(6, 'Art 5', 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/5.jpg', 'digital_art'),
(7, 'Art 6', 300, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/6.jpg', 'digital_art'),
(8, 'Art 7', 700, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/7.jpg', 'digital_art'),
(9, 'Art 8', 800, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/8.jpg', 'digital_art'),
(10, 'Art 9', 500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/9.jpg', 'digital_art'),
(11, 'Art 10', 900, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ALPAS NFT', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/10.jpg', 'digital_art');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `email`, `password`, `balance`) VALUES
(5, 'supremood', 'lappay.john@gmail.com', 'supremood', 0),
(6, 'supremo', 'john@gmail.com', 'supremood', 0),
(9, 'dormammu', 'jericovic65@gmail.com', 'dormammu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
