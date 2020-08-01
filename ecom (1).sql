-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 02:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(1, 'Kajal Verma', 'kv97134@gmail.com', 'kajal12345', 'kajal.jpeg', '8168091950', 'India', 'Web Developer', 'I am a web developer');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'MEN', 'Surprising things for men.'),
(2, 'WOMEN', 'Surprising things for women.'),
(3, 'KIDS', 'Surprising things for Kids.'),
(4, 'OTHERS', 'Surprising things for others.'),
(5, 'Both for Men and Women', 'men and women both can use these products');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(1, 'Heena Takkar', 'heena05@gmail.com', 'heena12345', 'India', 'Rohtak', '7988787256', 'Jawahar Nagar,Rohtak', 'Screenshot_2020-07-08-21-11-14-170.jpeg', '::1'),
(2, 'Anchal', 'aanch1026@gmail.com', 'anchal12345', 'India', 'Rohtak', '9255988399', 'Chinyot colony,Rohtak', 'Screenshot_2020-07-08-21-10-24-865.jpeg', '::1'),
(3, 'Priyanka', 'priyanka 07@gmail.com', 'priyanka12345', 'India', 'Rohtak', '9253360833', 'Chinyot colony,Rohtak', 'Screenshot_2020-07-08-21-14-19-677.jpeg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(2, 1, 2, 250, 1868134023, 1, 'Select a size', '2020-07-20 09:04:12', 'Complete'),
(3, 1, 10, 300, 1987604848, 1, 'Large', '2020-07-20 09:08:18', 'Complete'),
(4, 1, 21, 1000, 1536387049, 2, 'Small', '2020-07-20 16:24:58', 'Complete'),
(5, 1, 28, 1200, 1924445581, 4, 'Small', '2020-07-21 08:06:22', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(100) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(2, 4, 1, '2020-04-19 09:33:59', 'T-Shirt', 'product3.jpeg', 't-shirt1.jpeg', 'tshirt8.jpeg', 250, '<p>Reasonable price and comfortable clothes buy from our website.</p>', 'T-shirt'),
(3, 4, 1, '2020-04-19 09:33:59', 'T-Shirt', 'tshirt9.webp', 'tshirt3.jpeg', 'tshirt6.jpeg', 250, '<p>Reasonable prices and comfortable products buy from pur website.</p>', 'T-shirt'),
(5, 4, 2, '2020-04-19 09:45:55', 'T-Shirt', 'pair tshirt1.jpeg', 'tshirt4.jpeg', 'tshirt11.jpeg', 250, '<p>Reasonable Prices</p>', 'T-shirt'),
(6, 1, 1, '2020-05-13 09:48:35', 'Jacket', 'jack5.jpeg', 'jack9.jpeg', '12.jpeg', 300, '<p>Reasonable Prices</p>', 'Jacket'),
(7, 3, 1, '2020-05-13 09:49:25', 'Kurta', 'kurta3.jpeg', 'kurta4.jpeg', 'kurta7.jpeg', 400, '<p>Reasonable Prices</p>', 'Men Kurta'),
(8, 3, 1, '2020-05-13 09:50:27', 'Kurta', 'kurta2.png', 'kurta1.jpeg', 'kurta6.jpeg', 400, '<p>Reasonable Prices</p>', 'Men Kurta'),
(9, 3, 1, '2020-05-13 09:51:28', 'Kurta', 'kurta5.jpeg', '', '', 400, '<p>Reasonable Prices</p>', 'Men Kurta'),
(10, 1, 2, '2020-05-13 09:52:04', 'Jacket', 'women jack3.jpeg', '', '', 300, '<p>Reasonable Prices</p>', 'Jacket'),
(11, 1, 2, '2020-05-15 10:01:23', 'Jacket', 'women jack2.jpeg', '', '', 350, '<p>Reasonable Prices</p>', ' jacket'),
(12, 7, 1, '2020-05-14 10:03:19', 'Watch', 'men watch3.jpeg', '', '', 500, '<p>Reasonable Prices</p>', 'mens watch'),
(13, 7, 1, '2020-05-20 10:04:02', 'Watch', 'men watch2.jpeg', '', '', 500, '<p>Reasonable Prices</p>', 'mens watch'),
(15, 7, 1, '2020-05-20 10:22:45', 'Belt', 'belt2.webp', '', '', 120, '<p>Reasonable Prices</p>', 'Mens belt'),
(16, 7, 1, '2020-05-19 10:28:02', 'Belt', 'belt1.webp', '', '', 120, '<p>Reasonable Prices</p>', 'Mens belt'),
(17, 7, 1, '2020-05-23 10:29:01', 'Belt', 'belt3.jpeg', 'belt4.jpeg', '', 120, '<p>Reasonable Prices</p>', 'Mens belt'),
(18, 7, 1, '2020-05-19 10:29:39', 'Wallet', 'wallet4.jpeg', '', '', 200, '<p>Reasonable Prices</p>', 'Mens wallet'),
(20, 7, 1, '2020-05-19 10:30:53', 'Wallet', 'wallet2.jpeg', '', '', 250, '<p>Reasonable Prices</p>', 'Mens wallet'),
(21, 6, 1, '2020-05-19 10:31:40', 'Dress', 'girl dress1.jpeg', '', '', 500, '<p>Reasonable Prices</p>', 'girl dresses'),
(22, 7, 1, '2020-05-19 10:32:21', 'Sunglass', 'glas4.jpeg', '', '', 200, '', 'Mens sunglass'),
(23, 7, 1, '2020-05-19 10:32:52', 'Sunglass', 'glas3.jpeg', '', '', 200, '<p>Reasonable Prices</p>', 'Mens sunglass'),
(24, 7, 1, '2020-05-19 10:33:27', 'Sunglass', 'sunglass1.jpeg', '', '', 200, '<p>Reasonable Prices</p>', 'Mens sunglass'),
(25, 2, 2, '2020-05-19 10:34:09', 'Shoes', 'girl shooe2.jpeg', '', '', 400, '<p>Reasonable Prices</p>', 'Shoes'),
(26, 2, 2, '2020-05-19 10:35:09', 'Shoes', 'shoes1.jpeg', '', '', 400, '<p>Reasonable Prices</p>', 'Shoes'),
(27, 5, 3, '2020-05-19 10:36:06', 'Teddy Bear', 'teddy3.jpeg', '', '', 200, '<p>Reasonable Prices</p>', 'teddy bear'),
(28, 5, 3, '2020-05-19 10:39:02', 'Teddy Bear', 'teddi1.jpeg', '', '', 300, '<p>Reasonable Prices</p>', 'teddy bear');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(3, 'KURTA', 'Designer Kurtas buy from our website'),
(4, 'T-SHIRTS', 'simple and sobur t-shirts'),
(5, 'TOYS', 'Kids will enjoy by playing with toys'),
(6, 'DRESS', 'Beautiful appearences'),
(7, 'ACCESSORIES', 'use these accessories to live your life with ease and comfort.'),
(9, 'Shoes', '	\r\n	Comfortable and Gud Quality shoes					');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`) VALUES
(1, '1st image', '8.jpeg'),
(2, '2nd image', '4.png'),
(3, '3rd image', '7.jpeg'),
(4, '4rth image', '5.gif'),
(5, '5th image', '10.jpeg'),
(7, '6th image', '2.jpeg'),
(8, '7th image', '13.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
