-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 04:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `item_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `email`, `item_detail`) VALUES
(40, 'abc@gmail.com', '\"PANEER-TIKKA-150rs\"'),
(43, 'abc@gmail.com', '\"MASALA-CHANA-75rs\"'),
(44, 'abc@gmail.com', '\"PANEER-TIKKA-150rs\"'),
(45, 'abc@gmail.com', '\"MASALA-CHANA-75rs\"'),
(79, 'pd@gmail.com', '\"COCA-COLA-40rs\"'),
(80, 'pd@gmail.com', '\"MASALA-DOSA-150rs\"'),
(81, 'pd@gmail.com', '\"COCA-COLA-40rs\"'),
(82, 'pd@gmail.com', '\"PANEER-TIKKA-150rs\"'),
(83, 'pd@gmail.com', '\"MASALA-CHANA-75rs\"'),
(84, 'pd@gmail.com', '\"PANEER-TIKKA-150rs\"'),
(85, 'pd@gmail.com', '\"SPRITE-40rs\"'),
(86, 'pd@gmail.com', '\"MASALA-CHANA-75rs\"'),
(87, 'pd@gmail.com', '\"PAPER-DOSA-140rs\"'),
(88, 'pd@gmail.com', '\"BLACK-FOREST-130rs\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
