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
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone no.` int(11) NOT NULL,
  `item_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `name`, `email`, `password`, `address`, `phone no.`, `item_detail`) VALUES
(20, 'dhruv', 'QQ@gmail.com', 'password\0\0', 'mesan', 2147483647, ''),
(21, 'abc', 'abc@gmail.com', '12345', 'himatnagar', 2147483647, ''),
(27, '', '', '', '', 0, ''),
(28, '', '', '', '', 0, ''),
(29, '', '', '', '', 0, ''),
(30, '', '', '', '', 0, ''),
(31, '', '', '', '', 0, ''),
(32, '', '', '', '', 0, ''),
(33, '', '', '', '', 0, ''),
(34, '', '', '', '', 0, ''),
(35, '', '', '', '', 0, ''),
(36, '', '', '', '', 0, ''),
(37, '', '', '', '', 0, ''),
(42, 'parth shah', 'fro24@gmail.com', '1234', 'erdff', 2147483647, ''),
(43, 'parth patel', 'fro24@gmail.com', '1234', 'erdffv', 2147483647, ''),
(44, 'qw', 'frog24@gmail.com', '222', 'ds', 2147483647, ''),
(45, 'Xyz', 'abcv@gmail.com', '222', 'ddd', 123987456, ''),
(46, 'parth shah', 'qwec@gmail.com', '1234', 'reddf', 2147483647, ''),
(47, 'parth shah', 'qwer@gmail.com', '1234', 'reddf', 2147483647, ''),
(48, 'darshan patel', 'pd@gmail.com', '1234', 'resd', 2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
