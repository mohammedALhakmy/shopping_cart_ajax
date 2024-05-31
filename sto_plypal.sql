-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 01:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sto_plypal`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brands_id` int(100) NOT NULL,
  `brands_title` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brands_id`, `brands_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(222) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prodouts_title` varchar(333) NOT NULL,
  `prodouts_image` varchar(233) NOT NULL,
  `qty` int(122) NOT NULL,
  `price` int(122) NOT NULL,
  `total_amount` int(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `prodouts_title`, `prodouts_image`, `qty`, `price`, `total_amount`) VALUES
(37, 2, '0', 2, 'HeadPhons', '33.png', 1, 1000, 1000),
(38, 1, '0', 2, 'Camera Good', '22.png', 100000, 5000, 500000000),
(39, 3, '0', 2, 'Camear feutiful', 'w2.png', 1, 1200, 1200),
(40, 4, '0', 2, 'Computer HP', 'w6.png', 1, 1300, 1300),
(63, 1, '0', 1, 'Camera Good', '22.png', 10000, 5000, 50000000),
(65, 2, '0', 28, 'HeadPhons', '33.png', 1, 1000, 1000),
(66, 3, '0', 28, 'Camear feutiful', 'w2.png', 1, 1200, 1200),
(67, 1, '0', 28, 'Camera Good', '22.png', 1, 5000, 5000),
(68, 5, '0', 28, 'Computer Smart ', 'w9.png', 1, 1244, 1244),
(69, 3, '0', 1, 'Camear feutiful', 'w2.png', 1, 1200, 1200),
(70, 4, '0', 1, 'Computer HP', 'w6.png', 1, 1300, 1300),
(71, 8, '0', 1, 'Watch Hand Beautiful', 'feature_prod_04.jpg', 1, 875, 875),
(72, 6, '0', 1, 'HeadPhons ', 'w12.png', 1, 600, 600),
(73, 2, '0', 1, 'HeadPhons', '33.png', 1, 1000, 1000),
(74, 5, '0', 1, 'Computer Smart ', 'w9.png', 1, 1244, 1244);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(111) NOT NULL,
  `cat_title` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electroics'),
(2, 'Ladies Wares'),
(3, 'Menu Wear'),
(4, 'Kids Wear'),
(5, 'Fumitures'),
(6, 'Home Appliances'),
(7, 'Electronics Gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `uid` int(12) NOT NULL,
  `pid` int(12) NOT NULL,
  `p_name` varchar(222) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `trx_id` varchar(233) NOT NULL,
  `p_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(110) NOT NULL,
  `products_cat` int(100) NOT NULL,
  `products_brand` int(100) NOT NULL,
  `products_title` varchar(322) NOT NULL,
  `products_price` int(111) NOT NULL,
  `products_description` text NOT NULL,
  `products_images` varchar(311) NOT NULL,
  `products_keywords` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_cat`, `products_brand`, `products_title`, `products_price`, `products_description`, `products_images`, `products_keywords`) VALUES
(1, 1, 2, 'Camera Good', 5000, 'Camera Apple', '22.png', 'Camera Small'),
(2, 6, 3, 'HeadPhons', 1000, 'HeadPhons Smart', '33.png', 'Beutiful'),
(3, 2, 1, 'Camear feutiful', 1200, 'Camera Gooood', 'w2.png', 'Goood'),
(4, 2, 3, 'Computer HP', 1300, 'Computer Tuch', 'w6.png', 'ASUS'),
(5, 1, 2, 'Computer Smart ', 1244, 'Computer Tuch', 'w9.png', 'NOT Bad'),
(6, 2, 1, 'HeadPhons ', 600, 'HeadPhone Goood', 'w12.png', 'LG'),
(7, 5, 3, 'Watch Hand', 699, 'Watch Hand Not Bad', 'contact-img.png', 'Casio'),
(8, 6, 3, 'Watch Hand Beautiful', 875, 'Watch Hand Is Very Goood', 'feature_prod_04.jpg', 'china'),
(9, 3, 4, 'كامير كبير', 50000, 'Camera Apple 	', '22.png 	', 'Camera Small'),
(10, 3, 4, 'HeadPhons 	', 4000, 'HeadPhons Smart 	', '33.png', 'Beutiful'),
(11, 4, 5, 'Camear feutiful ', 4343, 'Camera Gooood 	', 'w2.png 	', 'Goood'),
(12, 4, 5, 'Computer HP', 12200, 'Computer Tuch', 'w6.png', 'ASUS'),
(13, 5, 6, 'Computer Smart 	', 12800, 'Computer Tuch ', 'w9.png', 'NOT Bad'),
(14, 7, 6, 'HeadPhons', 12660, 'HeadPhone Goood ', 'w12.png 	', 'LG'),
(15, 7, 3, 'Watch Hand 	', 14600, 'Watch Hand Not Bad 	', 'contact-img.png 	', 'Casio');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `trx_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uset_info`
--

CREATE TABLE `uset_info` (
  `user_id` int(11) NOT NULL,
  `frist_name` varchar(233) NOT NULL,
  `last_name` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uset_info`
--

INSERT INTO `uset_info` (`user_id`, `frist_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Mohammed', 'Alhakmy', 'mohammed@gmail.com', '101193d7181cc88340ae5b2b17bba8a1', '777387891', 'Yemen Ibb', 'Ibb ALhdean'),
(2, 'Mohammed', 'Alhakmy', 'mohammede@gmail.com', '101193d7181cc88340ae5b2b17bba8a1', '777387891', 'Yemen ', 'Ibb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brands_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `received_payment`
--
ALTER TABLE `received_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uset_info`
--
ALTER TABLE `uset_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brands_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `received_payment`
--
ALTER TABLE `received_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uset_info`
--
ALTER TABLE `uset_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
