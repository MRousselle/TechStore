-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 11:27 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

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
(1, 'Processor', 'the logical center of your computer', 'cpuCategory.png', 'cpu'),
(2, 'Motherboards', 'all of the parts plug into the Motherboard', 'motherboardCategory.png', 'motherboards'),
(3, 'Video Cards', 'The graphical powerhouse of a PC', 'gpuCategory.png', 'videocards'),
(4, 'RAM', 'RAM is a temporary storage for data', 'ramCategory.png', 'ram'),
(5, 'Hard Drives & SSDs', 'Storage for all of your data', 'storageCategory.png', 'storage'),
(6, 'Power Supplies', 'The device that provides power to your build', 'psuCategory.png', 'psu'),
(7, 'Cases and Towers', 'The case that houses your build', 'caseCategory.png', 'cases');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_ID` int(11) NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_img` varchar(20) NOT NULL,
  `prod_price` decimal(10,0) NOT NULL,
  `prod_qty` int(3) NOT NULL,
  `prod_cat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_ID`, `prod_name`, `prod_desc`, `prod_img`, `prod_price`, `prod_qty`, `prod_cat`) VALUES
(1, 'ASUS Z170-A', 'Z170 Express is a single-chipset design that supports 6th-generation Intel LGA1151 Core i7/Core i5/Core i3/Pentium/Celeron processors.', 'motherboard1.png', '214', 10, 'motherboards'),
(2, 'Nvidia GTX 980ti', 'Powered by NVIDIA GeForce GTX 980 TI GPU\nIntegrated with industry''s best 6GB GDDR5 memory 384-bit memory interface', 'videocard1.png', '889', 20, 'videocards'),
(3, 'HyperX Fury DDR4 RAM', 'Engineered and tested to deliver extreme performance, Kingston HyperX easily endures the most rigorous demands of any creative professional, gamer or PC enthusiast.', 'ram1.png', '129', 12, 'ram'),
(4, 'Intel i7 4790k', 'Devil''s Canyon Quad-Core 4.0 GHz LGA 1150 BX80646I74790K Desktop Processor Intel HD Graphics 4600', 'cpu1.png', '439', 100, 'cpu'),
(5, 'Samsung EVO 250GB', 'Upgrade virtually every aspect of your computer''s performance with Samsung''s new 850 EVO, designed with state-of-the-art SSD advancements including 3D V-NAND technology.', 'storage1.png', '134', 12, 'storage'),
(6, 'Corsair AX1200i', 'Digitally Controlled Power The fully modular Corsair AX1200i uses a Digital Signal Processor (DSP) for tighter voltage regulation, which improves overall system stability, and increases performance to 80 PLUS Platinum levels.', 'psu1.png', '439', 5, 'psu'),
(7, 'NZXT H440 ', 'Featuring a doorless, ODD-free front panel made entirely of steel and a large, full-view window that reveals an interior specially engineered to make your build seamless and beautiful.', 'case1.png', '154', 8, 'cases'),
(8, 'Intel i5 6600k', 'Skylake Quad-Core 3.5 GHz LGA 1151 Desktop Processor Intel HD Graphics 530', 'cpu2.png', '239', 4, 'cpu'),
(9, 'AMD X8 FX-8350', 'BIG BLOWOUT SALE! WE ARE LITERALLY GIVING THESE AWAY BECAUSE THEY ARE SO BAD NO ONE WANTS THEM!', 'cpu3.png', '0', 999, 'cpu'),
(10, 'MSI Z97S', 'Enjoy a blazing fast system boot up and insanely fast loading of applications and games with selected MSI motherboards. We offer the next generation of high speed storage support through M.2 and SATA Express.', 'motherboard2.png', '170', 14, 'motherboards'),
(11, 'ASUS MAXIMUS VIII', 'Best gaming protection – carefully-selected premium components to ensure maximum durability.', 'motherboard3.png', '300', 14, 'motherboards'),
(12, 'MSI R9 390x', 'Powered by AMD R9 390x Integrated with industry''s best 6GB GDDR5 memory 384-bit memory interface ', 'videocard2.png', '550', 8, 'videocards'),
(13, 'EVGA GTX TITAN X', 'The EVGA GeForce GTX TITAN X combines the technologies and performance of the new NVIDIA Maxwell architecture in the fastest and most advanced graphics card on the planet.', 'videocard3.png', '1400', 34, 'videocards'),
(14, 'Corsair Vengeance', 'Corsair Memory is specifically designed for rock-solid stability in demanding applications. Data lines are carefully engineered for noise immunity; clock lines are optimized for minimum skew. All modules use JEDEC-compliant six-layer.', 'ram2.png', '99', 22, 'ram'),
(15, 'G.SKILL Ripjaws', '16GB (4x4GB) DDR4 3200MHz CL15 Quad-Channel DIMMs (F4-3200C16Q-16GRKD)', 'ram3.png', '140', 32, 'ram');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_ID`);

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
  MODIFY `cat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
