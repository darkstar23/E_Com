-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 04:50 AM
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

--
-- Dumping data for table `t_cart`
--

INSERT INTO `t_cart` (`id`, `img_url`, `title`, `price`, `quantity`, `total`) VALUES
(7, 'img/products/Experia.jpg', 'Samsung Xperia A', '31999', 1, '31999');

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
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`id`, `img_url`, `title`, `orig_price`, `new_price`, `description`) VALUES
(1, 'img/products/samsung.jpg', 'Samsung S4', '1925', '1700', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload'),
(2, 'img/products/Huawei-P9.jpg', 'Huawei P9', '23999', '21299', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload'),
(3, 'img/products/lg-v20-all-380x380-1.jph', 'LG V20', '21999', '21399', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload'),
(4, 'img/products/samsung-galaxy-s7-edge-.jpg', 'Samsung Galaxy Explod 7', '12999', '11899', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload'),
(5, 'img/products/lg-gystylus.jpg', 'LG 4 (Stylus)', '13999', '12899', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload'),
(6, 'img/products/nokia.jpg', 'Lumia 1320', '12999', '12699', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload'),
(7, 'img/products/Macbook-2015.jpg', 'Apple Macbook (2015)', '23999', '21899', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload'),
(8, 'img/products/Lumia-950XL.jpg', 'Lumia 950 XL', '12999', '11899', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload'),
(9, 'img/products/Xperia-E5.jpg', 'Xperia E5', '13899', '12899', 'Double tap the screen to turn on New settings and processing algorithms for the Nokia Pro Camera Tutorial mode for the Nokia Pro Camera Bracketing mode for the Nokia Pro Camera Stereo audio recording Customisable audio bass filter New settings and processing algorithms for the Nokia Smart Camera Nokia Best Shot in the Nokia Smart Camera captures a moving object multiple times Motion Focus in the Nokia Smart Camera places focus on moving objects Support for colourful profiles in the Display+Touch Settings menu Flip to silence FM Radio support[76][77] Lumia Storage Check Nokia Glance Screen Nokia call+SMS filter Settings app New ringtones (Blom, Breathing, Dawn, Launch, and Wobbles) Up to 10% improved battery life (varies per device) Enables Nokia Video Trimmer and Nokia Video Upload');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
