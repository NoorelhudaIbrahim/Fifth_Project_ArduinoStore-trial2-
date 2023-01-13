-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 04:16 PM
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
-- Database: `arduino_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` mediumtext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `create_at`, `update_at`) VALUES
(4, 'اثممخ', 'Kits are a great way to get started with Arduino. The classic Starter Kit includes an Arduino UNO, a large set of electronic components, and a physical book with 15 chapters to help you get started.\r\n\r\nThe Oplà IoT Kit includes the components needed to build amazing IoT projects, and the Sensor Kit includes a set of great plug-and-play sensors and actuators. These kits also have their own dedicated content platform, with several cool projects to follow step by step.', '2022-12-31 07:31:20', '2022-12-31 10:31:20'),
(6, 'Nano Family', 'The Nano Family is a set of boards with a tiny footprint, packed with features. It ranges from the inexpensive, basic Nano Every, to the more feature-packed Nano 33 BLE Sense / Nano RP2040 Connect that has Bluetooth® / Wi-Fi radio modules. These boards also have a set of embedded sensors, such as temperature/humidity, pressure, gesture, microphone and more. They can also be programmed with MicroPython and supports Machine Learning.', '2022-12-31 07:36:22', '2022-12-31 10:36:22'),
(7, 'MKR Family', 'The MKR Family is a series of boards, shields & carriers that can be combined to create amazing projects without any additional circuitry. Each board is equipped with a radio module (except MKR Zero), that enables Wi-Fi, Bluetooth®, LoRa®, Sigfox, NB-IoT communication. All boards in the family are based on the Cortex-M0 32-bit SAMD21 low power processor, and are equipped with a crypto chip for secure communication.\r\n\r\nThe MKR Family shields & carriers are designed to extend the functions of the board: such as environmental sensors, GPS, Ethernet, motor control and RGB matrix.', '2022-12-31 07:37:18', '2022-12-31 10:37:18'),
(8, 'Classic Family', 'n the Classic Family, you will find boards such as the legendary Arduino UNO and other classics such as the Leonardo & Micro. These boards are considered the backbone of the Arduino project, and has been a success for many years (and more to come).', '2022-12-31 07:37:41', '2022-12-31 10:37:41'),
(9, 'Retired', 'To view all retired Arduino products, please visit our Retired Products & Legacy Documentation page. This includes all legacy products, getting started guides and other documentation that is considered legacy.', '2022-12-31 07:38:04', '2022-12-31 10:38:04'),
(12, 'jack', 'hellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohello', '2022-12-31 08:43:34', '2022-12-31 11:43:34'),
(13, 'ahmad', 'hello worldhello worldhello worldhello worldhello worldhello worldhello world', '2022-12-31 08:44:49', '2022-12-31 11:44:49'),
(14, 'assa', 'asasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasas', '2022-12-31 08:48:07', '2022-12-31 11:48:07'),
(15, 'zx', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2022-12-31 08:49:28', '2022-12-31 11:49:28'),
(16, 'dzd', 'zdasasassa', '2022-12-31 08:53:56', '2022-12-31 11:53:56'),
(17, 'asas', 'asasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasas', '2022-12-31 08:55:36', '2022-12-31 11:55:36'),
(18, 'as', 'assddsdsdsdsd', '2022-12-31 08:56:48', '2022-12-31 11:56:48'),
(20, 'jejejjejejejje', 'hehehhehehhe', '2022-12-31 09:08:31', '2022-12-31 12:08:31'),
(21, 'xddfxf', 'xdsdcxxdsdcxxdsdcxxdsdcxxdsdcxxdsdcxxdsdcxxdsdcx', '2022-12-31 09:10:38', '2022-12-31 12:10:38'),
(22, 'sdsdsd', 'sdsd', '2022-12-31 09:13:22', '2022-12-31 12:13:22'),
(23, 'hzjxn', 'zxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzxzx', '2022-12-31 09:21:44', '2022-12-31 12:21:44'),
(24, 'sdc', 'dfgv', '2022-12-31 09:39:34', '2022-12-31 12:39:34'),
(25, ' xcxc', 'dssd', '2022-12-31 10:04:54', '2022-12-31 13:04:54'),
(26, 'as', 'asas', '2022-12-31 10:59:49', '2022-12-31 13:59:49'),
(27, 'asas', 'asas', '2022-12-31 11:00:23', '2022-12-31 14:00:23'),
(28, 'as', 'asas', '2022-12-31 11:00:52', '2022-12-31 14:00:52'),
(29, 'my name is hack', 'oh no ', '2022-12-31 12:03:04', '2022-12-31 15:03:04'),
(32, 'huda', '123456', '2022-12-31 14:58:22', '2022-12-31 17:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `address` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `order_details_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `price_discount` float NOT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `is_sale` tinyint(1) NOT NULL,
  `sale_rate` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_text` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `orders_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
