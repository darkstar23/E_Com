-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 02:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_cart`
--

CREATE TABLE `t_cart` (
  `id` int(11) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_phone_latest`
--

CREATE TABLE `t_phone_latest` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `title2` varchar(64) NOT NULL,
  `title3` varchar(64) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `subtitle` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_phone_latest`
--

INSERT INTO `t_phone_latest` (`id`, `title`, `title2`, `title3`, `img_url`, `subtitle`) VALUES
(1, 'iPhone', '6', 'Plus', 'img/display/h4-slide.png', 'Dual SIM'),
(2, 'Buy one, Get one', '50%', 'off', 'img/display/gsmarena_001.jpg', 'Wow Phone.*'),
(3, 'Samsung', 'Store', 'Edge', 'img/display/S7-edge.jpg', 'Select Phone now'),
(4, 'Apple', 'Store', 'Ipod', 'img/display/h4-slide4.png', '& Phone');

-- --------------------------------------------------------

--
-- Table structure for table `t_phone_latest2`
--

CREATE TABLE `t_phone_latest2` (
  `id` int(11) NOT NULL,
  `img_url` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `orig_price` double NOT NULL,
  `new_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_phone_latest2`
--

INSERT INTO `t_phone_latest2` (`id`, `img_url`, `title`, `orig_price`, `new_price`) VALUES
(1, 'img/products/product-1.jpg', 'Samsung Galaxy s5- 2015', 1700, 1925),
(2, 'img/products/product-2.jpg', 'Nokia Lumia 1320', 1899, 2225),
(3, 'img/products/product-3.jpg', 'LG Leon 2015', 1400, 1625),
(4, 'img/products/product-4.jpg', 'Sony microsoft', 1000, 1225),
(5, 'img/products/product-5.jpg', 'iPhone 6', 1200, 1355),
(6, 'img/products/product-6.jpg', 'Samsung gallaxy note 4', 1400, 1655);

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `id` int(11) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `title` varchar(128) NOT NULL,
  `orig_price` decimal(10,0) NOT NULL,
  `new_price` decimal(10,0) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_phone_latest`
--
ALTER TABLE `t_phone_latest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_phone_latest2`
--
ALTER TABLE `t_phone_latest2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_cart`
--
ALTER TABLE `t_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_phone_latest`
--
ALTER TABLE `t_phone_latest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_phone_latest2`
--
ALTER TABLE `t_phone_latest2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
