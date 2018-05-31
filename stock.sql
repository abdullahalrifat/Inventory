-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 02:00 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------
--
-- Table structure for table `ExpenceType`
--

CREATE TABLE `ExpenceType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ExpenceType`
--

INSERT INTO `ExpenceType` (`id`, `Name`, `Type`) VALUES
(4, 'Salary', '2'),
(5, 'b', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Accounting`
--

CREATE TABLE `Accounting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Entry` int(11) NOT NULL,
  `Amount` double NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (Entry) REFERENCES ExpenceType(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='';

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT '0',
  `brand_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'Gap', 1, 2),
(2, 'Forever 21', 1, 2),
(3, 'Gap', 1, 2),
(4, 'Forever 21', 1, 2),
(5, 'Adidas', 1, 2),
(6, 'Gap', 1, 2),
(7, 'Forever 21', 1, 2),
(8, 'Adidas', 1, 2),
(9, 'Gap', 1, 2),
(10, 'Forever 21', 1, 2),
(11, 'Adidas', 1, 2),
(12, 'Gap', 1, 2),
(13, 'Forever 21', 1, 2),
(14, 'ASUS', 1, 2),
(15, 'ASUS', 1, 2),
(16, 'ASUS', 1, 1),
(17, 'Laptop', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT '0',
  `categories_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'Sports ', 1, 2),
(2, 'Casual', 1, 2),
(3, 'Casual', 1, 2),
(4, 'Sport', 1, 2),
(5, 'Casual', 1, 2),
(6, 'Sport wear', 1, 2),
(7, 'Casual wear', 1, 2),
(8, 'Sports ', 1, 2),
(9, 'Laptop', 1, 2),
(10, 'Laptop', 1, 1),
(11, 'Electronic', 1, 1);

-- --------------------------------------------------------


--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`) VALUES
(1, '2016-07-15', 'John Doe', '9807867564', '2700.00', '351.00', '3051.00', '1000.00', '2051.00', '1000.00', '1051.00', 2, 2, 2),
(2, '2016-07-15', 'John Doe', '9808746573', '3400.00', '442.00', '3842.00', '500.00', '3342.00', '3342', '0', 2, 1, 2),
(3, '2016-07-16', 'John Doe', '9809876758', '3600.00', '468.00', '4068.00', '568.00', '3500.00', '3500', '0', 2, 1, 2),
(4, '2016-08-01', 'Indra', '19208130', '1200.00', '156.00', '1356.00', '1000.00', '356.00', '356', '0.00', 2, 1, 2),
(5, '2016-07-16', 'John Doe', '9808767689', '3600.00', '468.00', '4068.00', '500.00', '3568.00', '3568', '0', 2, 1, 2),
(6, '2018-04-13', 'ruhul', '01688137799', '2400.00', '312.00', '2712.00', '10', '2702.00', '2702', '0.00', 2, 1, 2),
(7, '2018-04-13', 'Ruhul', '01688137799', '42300.00', '5499.00', '47799.00', '0', '47799.00', '47799', '0.00', 2, 1, 2),
(8, '2018-04-13', 'aa', '111', '42300.00', '5499.00', '47799.00', '0', '47799.00', '47799', '0.00', 2, 1, 2),
(9, '2018-04-19', 'q', '1', '1200.00', '156.00', '1356.00', '0', '1356.00', '1356', '0.00', 2, 1, 2),
(10, '2018-04-19', '1', '1', '1200.00', '156.00', '1356.00', '0', '1356.00', '1356', '0.00', 1, 1, 2),
(11, '2018-04-04', 'q', 'q', '1200.00', '156.00', '1356.00', '0', '1356.00', '1356', '0.00', 2, 1, 2),
(12, '2018-04-20', '1', '1', '1200.00', '0.00', '1200.00', '0', '1200.00', '1200', '0.00', 1, 1, 2),
(13, '2018-04-20', 'q', 'q', '1200.00', '0.00', '1200.00', '0', '1200.00', '1200', '0.00', 2, 1, 2),
(14, '2018-04-20', '3', '3', '1200.00', '0.00', '1200.00', '0', '1200.00', '1200', '0.00', 2, 1, 2),
(15, '2018-04-20', '2', '2', '1200.00', '0.00', '1200.00', '0', '1200.00', '1200', '0.00', 2, 1, 2),
(16, '2018-04-20', '4', '4', '1200.00', '0.00', '1200.00', '0', '1200.00', '1200', '0.00', 2, 1, 2),
(17, '2018-04-20', '1', '1', '1200.00', '0.00', '1200.00', '0', '1200.00', '1200', '0.00', 2, 1, 2),
(18, '2018-04-20', '1', '1', '1200.00', '0.00', '1200.00', '0', '1200.00', '1200', '0.00', 2, 1, 2),
(19, '2018-04-20', 'Ruhul', '01688137799', '42300.00', '0.00', '42300.00', '0', '42300.00', '42300', '0.00', 2, 1, 1),
(20, '2018-04-20', 'Ruhul', '01688137799', '1000.00', '0.00', '1000.00', '0', '1000.00', '1000', '0.00', 2, 1, 1),
(21, '2018-05-12', 'ruhul', '1', '1000.00', '0.00', '1000.00', '0', '1000.00', '1000', '0.00', 2, 1, 1),
(22, '2018-05-14', '1', '1', '1000.00', '0.00', '1000.00', '0', '1000.00', '1000', '0.00', 2, 1, 1),
(23, '2018-05-15', '1', '1', '1000.00', '0.00', '1000.00', '0', '1000.00', '1000', '0.00', 2, 1, 1),
(24, '2018-05-15', '1', '1', '1000.00', '0.00', '1000.00', '0', '1000.00', '1000', '0.00', 2, 1, 1),
(25, '2018-05-15', '3', '3', '1000.00', '0.00', '1000.00', '0', '1000.00', '1000', '0.00', 2, 1, 1),
(26, '2018-05-29', 'Sadik', '01521208218', '5000.00', '0', '5000.00', '500', '4500.00', '3500', '1000', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`) VALUES
(1, 1, 1, '1', '1500', '1500.00', 2),
(2, 1, 2, '1', '1200', '1200.00', 2),
(3, 2, 3, '2', '1200', '2400.00', 2),
(4, 2, 4, '1', '1000', '1000.00', 2),
(5, 3, 5, '2', '1200', '2400.00', 2),
(6, 3, 6, '1', '1200', '1200.00', 2),
(7, 4, 5, '1', '1200', '1200.00', 2),
(8, 5, 7, '2', '1200', '2400.00', 2),
(9, 5, 8, '1', '1200', '1200.00', 2),
(10, 6, 7, '2', '1200', '2400.00', 2),
(11, 7, 9, '1', '42300', '42300.00', 2),
(12, 8, 9, '1', '42300', '42300.00', 2),
(13, 9, 7, '1', '1200', '1200.00', 2),
(14, 10, 7, '1', '1200', '1200.00', 2),
(15, 11, 7, '1', '1200', '1200.00', 2),
(16, 12, 7, '1', '1200', '1200.00', 2),
(17, 13, 7, '1', '1200', '1200.00', 2),
(18, 14, 7, '1', '1200', '1200.00', 2),
(19, 15, 7, '1', '1200', '1200.00', 2),
(20, 16, 7, '1', '1200', '1200.00', 2),
(21, 17, 7, '1', '1200', '1200.00', 2),
(22, 18, 7, '1', '1200', '1200.00', 2),
(23, 19, 9, '1', '42300', '42300.00', 1),
(24, 20, 10, '1', '1000', '1000.00', 1),
(25, 21, 10, '1', '1000', '1000.00', 1),
(26, 22, 10, '1', '1000', '1000.00', 1),
(27, 23, 10, '1', '1000', '1000.00', 1),
(28, 24, 10, '1', '1000', '1000.00', 1),
(29, 25, 10, '1', '1000', '1000.00', 1),
(31, 26, 10, '5', '1000', '5000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `active`, `status`) VALUES
(1, 'Half pant', '../assests/images/stock/2847957892502c7200.jpg', 1, 2, '19', '1500', 2, 2),
(2, 'T-Shirt', '../assests/images/stock/163965789252551575.jpg', 2, 2, '9', '1200', 2, 2),
(3, 'Half Pant', '../assests/images/stock/13274578927924974b.jpg', 5, 3, '18', '1200', 2, 2),
(4, 'T-Shirt', '../assests/images/stock/12299578927ace94c5.jpg', 6, 3, '29', '1000', 2, 2),
(5, 'Half Pant', '../assests/images/stock/24937578929c13532e.jpg', 8, 5, '17', '1200', 2, 2),
(6, 'Polo T-Shirt', '../assests/images/stock/10222578929f733dbf.jpg', 9, 5, '29', '1200', 2, 2),
(7, 'Half Pant', '../assests/images/stock/1770257893463579bf.jpg', 11, 7, '16', '1200', 2, 2),
(8, 'Polo T-shirt', '../assests/images/stock/136715789347d1aea6.jpg', 12, 7, '9', '1200', 2, 2),
(9, 'Zenbook', '../assests/images/stock/3846488395acfa030ca0e4.png', 14, 9, '7', '42300', 2, 2),
(10, 'asus', '../assests/images/stock/3801956495ada29211b29b.jpg', 16, 10, '89', '1000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', '');

--
-- Indexes for dumped tables
--


--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);


--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--


--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
