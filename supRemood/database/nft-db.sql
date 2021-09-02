-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 08:34 AM
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
(2, 'Edelgard x Utena', 500, 'The world always seems brighter when you\'ve just made something that wasn\'t there before', 'John Lappay', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/1.jpg', 'digital_art'),
(3, 'Moon Goddess', 300, 'Painting is poetry that is seen rather than felt, and poetry is painting that is felt rather than seen.', 'Jerico Victoria', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/2.jpg', 'digital_art'),
(4, 'Sheol', 500, 'Art enables us to find ourselves and lose ourselves at the same time', 'Sharina Atienza', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/3.jpg', 'digital_art'),
(5, 'Naomi', 500, 'The aim of art is to represent not the outward appearance of things, but their inward signifance', 'Angelo Silvestre', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/4.jpg', 'digital_art'),
(6, 'Lily', 1000, 'The most beautiful experience we can have is the mysterious. It is the fundamental emotion that stands at the cradle of true art and true science.', 'John Lappay', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/5.jpg', 'digital_art'),
(7, 'Zhypiee', 300, 'Every artist dips his brush in his own soul, and paints his own nature into his pictures.', 'Angelica Perez', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/6.jpg', 'digital_art'),
(8, 'Alena Fischer', 700, 'Art is unquestionably one of the purest and highest elements in human happiness. It trains the mind through the eye, and the eye through the mind. As the sun colours flowers, so does art colour life.', 'Sandra Cueto', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/7.jpg', 'digital_art'),
(9, 'Arya', 800, 'Art and love are the same thing: It’s the process of seeing yourself in things that are not you', 'Rejie Tenorio', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/8.jpg', 'digital_art'),
(10, 'Morigann', 500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaWhat art is, in reality, is this missing link, not the links which exist. It\'s not what you see that is art; art is the gap.', 'Rejie Tenorio', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/products/9.jpg', 'digital_art'),
(12, 'Goldfish', 1000, 'Every artist dips his brush in his own soul, and paints his own nature into his pictures.', 'Z--ED', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/1.jpg', 'digital_art'),
(13, 'Chloe', 1000, 'Art is unquestionably one of the purest and highest elements in human happiness. It trains the mind through the eye, and the eye through the mind. As the sun colours flowers, so does art colour life.', 'Aris Jerome', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/2.png', 'digital_art'),
(14, 'Alisa', 1000, 'Art enables us to find ourselves and lose ourselves at the same time', 'KUMOGRAPHY', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'images/4.jpg', 'digital_art');

-- --------------------------------------------------------

--
-- Table structure for table `temp_value`
--

CREATE TABLE `temp_value` (
  `temp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_value`
--

INSERT INTO `temp_value` (`temp`) VALUES
(3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `balance` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `email`, `password`, `balance`, `image`) VALUES
(1, 'ryuShimotzuki', 'ryu@gmail.com', 'supremo25', 0, '../images/default-avatar.png'),
(5, 'supremood23', 'lappay.john2223@gmail.com', 'supremood', 0, '../images/default-avatar.png'),
(6, 'supremo', 'john@gmail.com', 'supremood', 2567, '30739787_1588591967926106_7638881661316235264_n.jpg'),
(9, 'dormammu', 'jericovic65@gmail.com', 'dormammu', 0, '../images/default-avatar.png'),
(15, 'ryu_024', 'ryu_shimutzuki23@gmail.com', 'supremo25', 52, '../images/default-avatar.png'),
(16, 'ryu123', 'ryu123@gmail.com', 'supremo', 0, 'photo_2021-08-17_20-27-32.jpg');

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
