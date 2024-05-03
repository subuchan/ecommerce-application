-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 10:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `username`, `password`) VALUES
(1, 'Ecom', 'Admin@2023');

-- --------------------------------------------------------

--
-- Table structure for table `beautyhealth_product_table`
--

CREATE TABLE `beautyhealth_product_table` (
  `id` int(11) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_size1` varchar(50) NOT NULL,
  `product_count1` varchar(255) NOT NULL,
  `product_size2` varchar(50) NOT NULL,
  `product_count2` varchar(255) NOT NULL,
  `product_size3` varchar(50) NOT NULL,
  `product_count3` varchar(255) NOT NULL,
  `product_size4` varchar(50) NOT NULL,
  `product_count4` varchar(255) NOT NULL,
  `product_size5` varchar(50) NOT NULL,
  `product_count5` varchar(255) NOT NULL,
  `product_size6` varchar(50) NOT NULL,
  `product_count6` varchar(255) NOT NULL,
  `product_size7` varchar(50) NOT NULL,
  `product_count7` varchar(255) NOT NULL,
  `product_img1` varchar(50) NOT NULL,
  `product_img2` varchar(255) NOT NULL,
  `product_img3` varchar(50) NOT NULL,
  `product_price` varchar(1000) NOT NULL,
  `product_offer` varchar(1000) NOT NULL,
  `product_details` varchar(2000) NOT NULL,
  `product_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `electronics_product_table`
--

CREATE TABLE `electronics_product_table` (
  `id` int(11) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_size1` varchar(50) NOT NULL,
  `product_count1` varchar(255) NOT NULL,
  `product_size2` varchar(50) NOT NULL,
  `product_count2` varchar(255) NOT NULL,
  `product_size3` varchar(50) NOT NULL,
  `product_count3` varchar(255) NOT NULL,
  `product_size4` varchar(50) NOT NULL,
  `product_count4` varchar(255) NOT NULL,
  `product_size5` varchar(50) NOT NULL,
  `product_count5` varchar(255) NOT NULL,
  `product_size6` varchar(50) NOT NULL,
  `product_count6` varchar(255) NOT NULL,
  `product_size7` varchar(50) NOT NULL,
  `product_count7` varchar(255) NOT NULL,
  `product_img1` varchar(1000) NOT NULL,
  `product_img2` varchar(1000) NOT NULL,
  `product_img3` varchar(1000) NOT NULL,
  `product_price` varchar(2000) NOT NULL,
  `product_offer` varchar(1000) NOT NULL,
  `product_details` varchar(2000) NOT NULL,
  `product_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homekitchen_product_table`
--

CREATE TABLE `homekitchen_product_table` (
  `id` int(11) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `product_size1` varchar(255) NOT NULL,
  `product_count1` varchar(500) NOT NULL,
  `product_size2` varchar(255) NOT NULL,
  `product_count2` varchar(500) NOT NULL,
  `product_size3` varchar(255) NOT NULL,
  `product_count3` varchar(500) NOT NULL,
  `product_size4` varchar(255) NOT NULL,
  `product_count4` varchar(500) NOT NULL,
  `product_size5` varchar(255) NOT NULL,
  `product_count5` varchar(500) NOT NULL,
  `product_size6` varchar(255) NOT NULL,
  `product_count6` varchar(500) NOT NULL,
  `product_size7` varchar(255) NOT NULL,
  `product_count7` varchar(500) NOT NULL,
  `product_img1` varchar(1500) NOT NULL,
  `product_img2` varchar(1000) NOT NULL,
  `product_img3` varchar(1000) NOT NULL,
  `product_price` varchar(1000) NOT NULL,
  `product_offer` varchar(255) NOT NULL,
  `product_details` varchar(2000) NOT NULL,
  `product_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kids_product_table`
--

CREATE TABLE `kids_product_table` (
  `id` int(11) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_size1` varchar(255) NOT NULL,
  `product_count1` varchar(255) NOT NULL,
  `product_size2` varchar(255) NOT NULL,
  `product_count2` varchar(255) NOT NULL,
  `product_size3` varchar(255) NOT NULL,
  `product_count3` varchar(255) NOT NULL,
  `product_size4` varchar(255) NOT NULL,
  `product_count4` varchar(255) NOT NULL,
  `product_size5` varchar(255) NOT NULL,
  `product_count5` varchar(255) NOT NULL,
  `product_size6` varchar(255) NOT NULL,
  `product_count6` varchar(255) NOT NULL,
  `product_size7` varchar(255) NOT NULL,
  `product_count7` varchar(255) NOT NULL,
  `product_img1` varchar(1000) NOT NULL,
  `product_img2` varchar(1000) NOT NULL,
  `product_img3` varchar(1000) NOT NULL,
  `product_price` varchar(1000) NOT NULL,
  `product_offer` varchar(255) NOT NULL,
  `product_details` varchar(1000) NOT NULL,
  `product_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mens_product_table`
--

CREATE TABLE `mens_product_table` (
  `id` int(11) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `product_size1` varchar(255) NOT NULL,
  `product_count1` varchar(255) NOT NULL,
  `product_size2` varchar(255) NOT NULL,
  `product_count2` varchar(255) NOT NULL,
  `product_size3` varchar(255) NOT NULL,
  `product_count3` varchar(255) NOT NULL,
  `product_size4` varchar(255) NOT NULL,
  `product_count4` varchar(255) NOT NULL,
  `product_size5` varchar(255) NOT NULL,
  `product_count5` varchar(255) NOT NULL,
  `product_size6` varchar(255) NOT NULL,
  `product_count6` varchar(255) NOT NULL,
  `product_size7` varchar(255) NOT NULL,
  `product_count7` varchar(255) NOT NULL,
  `product_img1` varchar(2000) NOT NULL,
  `product_img2` varchar(2000) NOT NULL,
  `product_img3` varchar(2000) NOT NULL,
  `product_price` mediumtext NOT NULL,
  `product_offer` varchar(1000) NOT NULL,
  `product_offer_price` varchar(100) NOT NULL,
  `product_details` varchar(2000) NOT NULL,
  `product_delivery_charge` mediumtext NOT NULL,
  `product_description` varchar(2000) NOT NULL,
  `productsize_m` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mens_product_table`
--

INSERT INTO `mens_product_table` (`id`, `product_category`, `product_brand`, `product_name`, `product_size1`, `product_count1`, `product_size2`, `product_count2`, `product_size3`, `product_count3`, `product_size4`, `product_count4`, `product_size5`, `product_count5`, `product_size6`, `product_count6`, `product_size7`, `product_count7`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_offer`, `product_offer_price`, `product_details`, `product_delivery_charge`, `product_description`, `productsize_m`) VALUES
(8, 'Jeans', 'Men Slim Mid Rise Grey Jeans', 'Lzard ', 'S', '', 'M', '', 'L', '', 'XL', '', 'XXL', '', 'XXXL', '', '4XL', '', '1-445x618.jpg', '', '', '600', '201', '399', ' ffs                                                                                               ', '60', '                                                                                                ', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`) VALUES
(1, 'anand', 'anand123'),
(2, 'subash ', 'subash123'),
(3, 'anand@', 'anand@123');

-- --------------------------------------------------------

--
-- Table structure for table `user_addtocart`
--

CREATE TABLE `user_addtocart` (
  `id` int(11) NOT NULL,
  `pro_id` varchar(1000) NOT NULL,
  `qty` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rowid` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `subtotal` varchar(1000) NOT NULL,
  `delivery` varchar(1000) NOT NULL,
  `discount` varchar(1000) NOT NULL,
  `discount_price` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_addtocart`
--

INSERT INTO `user_addtocart` (`id`, `pro_id`, `qty`, `price`, `name`, `image`, `rowid`, `size`, `user_id`, `subtotal`, `delivery`, `discount`, `discount_price`) VALUES
(342, '4', '1', '441', 'Gorgeous Glamarous Men Jeans', 'uavx8_512.jpg', '', 'S', '1', '441', '', '', ''),
(343, '2', '1', '243', 'Black Jeans', '6zp5a_512.jpg', '', 'L', '1', '243', '', '', ''),
(352, '8', '1', '600', 'Lzard ', '1-445x618.jpg', '', 'S', '3', '600', '60', '201', '399'),
(353, '8', '1', '600', 'Lzard ', '1-445x618.jpg', '', 'M', '3', '600', '60', '201', '399'),
(355, '8', '1', '600', 'Lzard ', '1-445x618.jpg', '', 'L', '2', '600', '60', '201', '399');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_number` varchar(100) NOT NULL,
  `user_address` varchar(10000) NOT NULL,
  `user_pincode` varchar(100) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_nearby` varchar(1000) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_name`, `user_number`, `user_address`, `user_pincode`, `user_city`, `user_state`, `user_nearby`, `user_id`, `date`) VALUES
(10, 'anand123', '7338939037', 'no.5.srinivasa nagar', '600053', 'chennai', 'tamilnaduu', 'pilayar kovil', '3', '2023-11-08 05:59:26.176435'),
(11, 'subash', '9597656498', 'chennai', '600099', 'chennai', 'tn', 'chennai', '2', '2023-12-02 07:33:14.603342');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mens_product_table`
--
ALTER TABLE `mens_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_addtocart`
--
ALTER TABLE `user_addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mens_product_table`
--
ALTER TABLE `mens_product_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_addtocart`
--
ALTER TABLE `user_addtocart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
