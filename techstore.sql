-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2015 at 11:16 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techstore`
--
CREATE DATABASE IF NOT EXISTS `techstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `techstore`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_ID` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_desc` varchar(50) NOT NULL,
  `cat_img` varchar(30) NOT NULL,
  `cat_pageName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_ID`, `cat_name`, `cat_desc`, `cat_img`, `cat_pageName`) VALUES
(1, 'Motherboards', 'all of the parts plug into the Motherboard', 'motherboard_cat.jpg', 'motherboards'),
(2, 'RAM', 'RAM is a temporary storage for data', 'ram_cat.jpg', 'ram'),
(3, 'Video Cards', 'The graphical powerhouse of a PC', 'videocard_cat.jpg', 'videocards'),
(4, 'Processor', 'the logical center of your computer', 'processor_cat.jpg', 'cpu'),
(5, 'Hard Drives & SSDs', 'Storage for all of your data', 'storage_cat.jpg', 'storage');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_name` varchar(20) NOT NULL,
  `prod_desc` varchar(50) NOT NULL,
  `prod_img` varchar(20) NOT NULL,
  `prod_price` decimal(10,0) NOT NULL,
  `prod_qty` int(3) NOT NULL,
  `prod_cat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_name`, `prod_desc`, `prod_img`, `prod_price`, `prod_qty`, `prod_cat`) VALUES
('Motherboard', 'the thing that all the parts plug into', 'motherboard1.jpg', '160', 10, 'motherboards'),
('Nvidia GTX 980ti', 'ill insert this later, this is a placeholder', 'videocard1.jpg', '749', 20, 'videocards'),
('HyperX Fury DDR4 RAM', 'ill insert this later, this is a placeholder', 'ram1.jpg', '129', 12, 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `user_firstName` varchar(20) NOT NULL,
  `user_lastName` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_userName` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_ID` (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
