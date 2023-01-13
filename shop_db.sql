-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Jan 02, 2023 at 02:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33
=======
-- Generation Time: Jan 12, 2023 at 10:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

<<<<<<< HEAD
--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(10, 2, 26, 'ali naserhh', 1212, 1, '1274158[9].jpg');

=======
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c
-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` mediumtext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_imge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `create_at`, `update_at`, `category_imge`) VALUES
<<<<<<< HEAD
(20, 'mhamed', 'my category', '2023-01-02 13:32:30', '2023-01-02 13:32:30', 'Canary-300x300.jpg'),
(21, 'karam', 'my category', '2023-01-02 13:33:06', '2023-01-02 13:33:06', '1024846.jpg'),
(22, 'jack', 'asdas', '2023-01-02 13:33:28', '2023-01-02 13:33:28', 'images (1).jfif');
=======
(23, 'Kits', 'Kits are a great way to get started with Arduino. The classic Starter Kit includes an Arduino UNO, a large set of electronic components, and a physical book with 15 chapters to help you get started.  The Oplà IoT Kit includes the components needed to build amazing IoT projects, and the Sensor Kit includes a set of great plug-and-play sensors and actuators. These kits also have their own dedicated content platform, with several cool projects to follow step by step.', '2023-01-02 15:07:49', '2023-01-02 15:07:49', 'Arduino starter-kit.jpg'),
(24, 'Nano Family', 'The Nano Family is a set of boards with a tiny footprint, packed with features. It ranges from the inexpensive, basic Nano Every, to the more feature-packed Nano 33 BLE Sense / Nano RP2040 Connect that has Bluetooth® / Wi-Fi radio modules. These boards also have a set of embedded sensors, such as temperature/humidity, pressure, gesture, microphone and more. They can also be programmed with MicroPython and supports Machine Learning.', '2023-01-02 15:09:19', '2023-01-02 15:09:19', 'Arduino nano-33-ble.jpg'),
(25, 'MKR Family', 'The MKR Family is a series of boards, shields & carriers that can be combined to create amazing projects without any additional circuitry. Each board is equipped with a radio module , that enables Wi-Fi communication. All boards in the family are based on the Cortex-M0 32-bit SAMD21 low power processor, and are equipped with a crypto chip for secure communication.  The MKR Family shields & carriers are designed to extend the functions of the board.\r\n', '2023-01-02 15:09:46', '2023-01-02 15:09:46', 'Arduino-mkr_1000_wifi.jpg'),
(26, 'Classic Family', 'In the Classic Family, you will find boards such as the legendary Arduino UNO and other classics such as the Leonardo & Micro. These boards are considered the backbone of the Arduino project, and has been a success for many years (and more to come).', '2023-01-02 15:13:43', '2023-01-02 15:13:43', 'Arduino-leonardo.jpg');
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

<<<<<<< HEAD
--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 2, 'ali572 mhamdgmail.co', 'mhamd@gmail.com', '7532573757', 'dfsfsddhdfgfdgfdgfdsgfdsgsdf');

=======
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

<<<<<<< HEAD
--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(3, 2, 'ali naser', '7575727527', 'mhamd@gmail.com', 'credit card', 'flat no. aqaba, eightth, aqaba, 5727275, Jordan - 77110', 'sadasda (4755 x 1) - ali naser (4527 x 1) - ', 9282, '2023-01-02', 'pending');

=======
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c
-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL,
<<<<<<< HEAD
  `category` varchar(255) NOT NULL
=======
  `category_name` varchar(255) NOT NULL,
  `on_sale` tinyint(1) NOT NULL,
  `new_price` float NOT NULL
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

<<<<<<< HEAD
INSERT INTO `products` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`, `category`) VALUES
(26, 'ali naserhh', '1212', 1212, '1274158[9].jpg', '1024846.jpg', '3160DQHOFLL._AC_SY1000_.jpg', 'karam'),
(27, 'ali naser', 'dsfadsfadsfdsfadsfadsfsdaf', 25, 'dog-cat-fish.webp', 'dog_thumb_1644498337052_1644498346070.webp', 'American-Bulldog-standing-in-three-quarter-view.jpg', 'jack');
=======
INSERT INTO `products` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`, `category_name`, `on_sale`, `new_price`) VALUES
(28, 'Arduino Starter Kit ', 'Get started with electronics quickly and easily - no prior experience required. ', 96, 'Arduino starter-kit.jpg', 'Arduino starter-kit.jpg', 'Arduino starter-kit.jpg', 'Kits', 1, 80),
(29, 'Arduino Oplà IoT Kit                                                                                ', 'Add smart technology to your home and workplace with the first Open programmable IoT platform that allows you to build custom IoT devices.', 118, 'Arduino opla-iot-kit.jpg', 'Arduino opla-iot-kit.jpg', 'Arduino opla-iot-kit.jpg', 'Kits', 0, 0),
(30, 'Arduino Sensor Kit - Base', 'Learn to Plug, Sketch and Play with basic Grove sensors, actuators and Arduino.\r\n\r\nAll the modules are pre-wired on the PCB, just connect your Arduino Board to the Shield and start your measurements!', 35, 'Arduino sensor-kit.jpg', 'Arduino sensor-kit.jpg', 'Arduino sensor-kit.jpg', 'Kits', 0, 0),
(31, 'Arduino Nano 33 IoT', 'An IoT connected IMU sensor in the Nano form factor.', 24, 'Arduino nano-33-iot.jpg', 'Arduino nano-33-iot.jpg', 'Arduino nano-33-iot.jpg', 'Nano Family', 1, 20),
(32, 'Arduino Nano RP2040', 'The Arduino with a Raspberry Pi® filling. With header mounted version.', 31, 'Arduino nano-rp2040-connect.jpg', 'Arduino nano-rp2040-connect.jpg', 'Arduino nano-rp2040-connect.jpg', 'Nano Family', 0, 0),
(33, 'Arduino Nano 33 BLE Sense', 'Bring the power of AI to your pocket with Arduino’s tiniest form factor.\r\n\r\n', 41, 'Arduino nano-33-ble-sense.jpg', 'Arduino nano-33-ble-sense.jpg', 'Arduino nano-33-ble-sense.jpg', 'Nano Family', 0, 0),
(34, 'Arduino Nano 33 BLE', 'Arduino&#39;s tiniest form factor with Bluetooth® and Bluetooth® Low Energy and embedded inertial sensor.', 26, 'Arduino nano-33-ble.jpg', 'Arduino nano-33-ble.jpg', 'Arduino nano-33-ble.jpg', 'Nano Family', 0, 0),
(35, 'Arduino Nano Every', 'Looking for the Nano Every? Check the Arduino Every - Pack solution!\r\n\r\n', 12, 'Arduino nano-every.jpg', 'Arduino nano-every.jpg', 'Arduino nano-every.jpg', 'Nano Family', 0, 0),
(36, 'Arduino Nano', 'The classic Arduino Nano is the smallest board to build your projects with.\r\n\r\n', 25, 'Arduino nano.jpg', 'Arduino nano.jpg', 'Arduino nano.jpg', 'Nano Family', 0, 0),
(37, 'Arduino Nano Motor Carrier', 'Nano Motor Carrier provides a quick and easy way to connect and control motors in your Engineering Kit R2.\r\n\r\n', 78, 'Arduino nano-motor-carrier.jpg', 'Arduino nano-motor-carrier.jpg', 'Arduino nano-motor-carrier.jpg', 'Nano Family', 0, 0),
(38, 'Arduino MKR WiFi 1010', 'The basic Arduino board to build secure WiFi and Bluetooth® applications.\r\n\r\n', 39, 'Arduino-mkr_wifi_1010.png', 'Arduino-mkr_wifi_1010.png', 'Arduino-mkr_wifi_1010.png', 'MKR Family', 1, 30),
(39, 'Arduino MKR WAN 1300 ', 'MKR WAN 1300 is a powerful board that combines the functionality of the MKR Zero and LoRa / LoRaWANTM connectivity. It is the ideal solution for makers wanting to design IoT projects with minimal previous experience in networking having a low power device.', 49, 'Arduino-mkr_wan_1300.jpg', 'Arduino-mkr_wan_1300.jpg', 'Arduino-mkr_wan_1300.jpg', 'MKR Family', 0, 0),
(40, 'Arduino MKR WAN 1310', 'Connect your sensors and actuators over long distances harnessing the power of the LoRa® wireless protocol or throughout LoRaWAN™ networks.\r\n\r\n', 46, 'Arduino-mkr_wan_1310.png', 'Arduino-mkr_wan_1310.png', 'Arduino-mkr_wan_1310.png', 'MKR Family', 0, 0),
(41, 'Arduino MKR GSM 1400', 'GSM/3G board to get your products online worldwide in seconds.\r\n\r\nGSM/3G board to get your products online worldwide in seconds.\r\n\r\n', 84, 'Arduino-mkr_gsm_1400.png', 'Arduino-mkr_gsm_1400.png', 'Arduino-mkr_gsm_1400.png', 'MKR Family', 0, 0),
(42, 'Arduino MKR NB 1500', 'Implement inexpensive, large-coverage solutions over Narrowband IoT.\r\n\r\n', 93, 'Arduino-mkr_nb_1500.png', 'Arduino-mkr_nb_1500.png', 'Arduino-mkr_nb_1500.png', 'MKR Family', 0, 0),
(43, 'Arduino MKR Vidor 4000', 'Bring the power of FPGAs to your embedded projects.\r\n\r\n', 87, 'Arduino-mkr_vidor_4000.jpg', 'Arduino-mkr_vidor_4000.jpg', 'Arduino-mkr_vidor_4000.jpg', 'MKR Family', 0, 0),
(44, 'Arduino MKR ZERO ', 'MKR ZERO has an on-board SD connector with dedicated SPI interfaces (SPI1) that allows you to play with MUSIC files with no extra hardware!', 30, 'Arduino-mkr_zero.jpg', 'Arduino-mkr_zero.jpg', 'Arduino-mkr_zero.jpg', 'MKR Family', 0, 0),
(45, 'Arduino MKR ENV Shield rev2', 'The MKR ENV Shield allows a MKR board to acquire environmental data collected by an array of sensors.\r\n\r\n', 41, 'Arduino-mkr_env_shield_r2.jpg', 'Arduino-mkr_env_shield_r2.jpg', 'Arduino-mkr_env_shield_r2.jpg', 'MKR Family', 0, 0),
(46, 'Arduino MKR GPS Shield', 'The low power Global Navigation Satellite System receiver shield for your georeferenced projects', 40, 'Arduino-mkr_gps_shield.jpg', 'Arduino-mkr_gps_shield.jpg', 'Arduino-mkr_gps_shield.jpg', 'MKR Family', 0, 0),
(47, 'Arduino MKR IMU Shield', 'Need to integrate inertial measurements within your MKR based project? Plug in the Arduino MKR IMU shield and get the three-dimensional acceleration, yaw rate and magnetic field strength data in 3 perpendicular axes.', 30, 'Arduino-mkr_imu_shield.jpg', 'Arduino-mkr_imu_shield.jpg', 'Arduino-mkr_imu_shield.jpg', 'MKR Family', 0, 0),
(48, 'Arduino MKR RGB Shield', '84 LEDs at your service!', 54, 'Arduino-mkr_rgb_shield.jpg', 'Arduino-mkr_rgb_shield.jpg', 'Arduino-mkr_rgb_shield.jpg', 'MKR Family', 0, 0),
(49, 'Arduino MKR Therm Shield', 'Your solution for precise and extended range temperature measurements.\r\n', 54, 'Arduino-mkr_therm_shield.jpg', 'Arduino-mkr_therm_shield.jpg', 'Arduino-mkr_therm_shield.jpg', 'MKR Family', 0, 0),
(50, 'Arduino MKR ETH Shield', 'You may want to connect an Arduino MKR board with an Ethernet cable instead of using WiFi. An Ethernet connection can sometimes be stabler, faster, and more secure. To do this, plug in the Arduino MKR ETH shield.', 32, 'Arduino-mkr_eth_shield.jpg', 'Arduino-mkr_eth_shield.jpg', 'Arduino-mkr_eth_shield.jpg', 'MKR Family', 0, 0),
(51, 'Arduino MKR 485 Shield', 'Want to add serial communications to your device using the RS-485 protocol? The Arduino MKR 485 shield will provide the industrial connectivity you need', 39, 'Arduino-mkr_485_shield.jpg', 'Arduino-mkr_485_shield.jpg', 'Arduino-mkr_485_shield.jpg', 'MKR Family', 0, 0),
(52, 'Arduino MKR CAN Shield', 'Need to connect a device to a CAN (Controller Area Network) for communication within an automobile and with other CAN devices? The Arduino MKR CAN shield will provide automotive CAN connectivity.', 39, 'Arduino-mkr_can_shield.jpg', 'Arduino-mkr_can_shield.jpg', 'Arduino-mkr_can_shield.jpg', 'MKR Family', 0, 0),
(53, 'Arduino MKR Mem Shield', 'Are you developing a complex IoT device with your MKR board and running out of memory? Add Flash memory and microSD storage to your MKR board, and allow over-the-air updates, with the Arduino MKR MEM Shield.', 23, 'Arduino-mkr_mem_shield.jpg', 'Arduino-mkr_mem_shield.jpg', 'Arduino-mkr_mem_shield.jpg', 'MKR Family', 0, 0),
(54, 'Arduino Uno Rev3', 'The Arduino UNO is the best board to get started with electronics and coding. If this is your first experience tinkering with the platform, the UNO is the most robust board you can start playing with. The UNO is the most used and documented board of the whole Arduino family.', 28, 'Arduino-uno-r3.jpg', 'Arduino-uno-r3.jpg', 'Arduino-uno-r3.jpg', 'Classic Family', 0, 0),
(55, 'Arduino Mega 2560 Rev3', 'The 8-bit board with 54 digital pins, 16 analog inputs, and 4 serial ports.', 49, 'Arduino-Mega-2560-rev3.jpg', 'Arduino-Mega-2560-rev3.jpg', 'Arduino-Mega-2560-rev3.jpg', 'Classic Family', 0, 0),
(56, 'Arduino Leonardo ', 'The classic Arduino board that can act as a mouse or keyboard.', 25, 'Arduino-leonardo.jpg', 'Arduino-leonardo.jpg', 'Arduino-leonardo.jpg', 'Classic Family', 0, 0),
(57, 'Arduino UNO Mini ', 'The Arduino UNO Mini Limited Edition is a collector’s item for serious Arduino lovers. It’s a miniaturized but fully functioning version of the well-known Arduino UNO, in a special livery and packaging.', 54, 'Arduino-uno-mini-le.jpg', 'Arduino-uno-mini-le.jpg', 'Arduino-uno-mini-le.jpg', 'Classic Family', 0, 0),
(58, ' Arduino Due', 'The Arduino Due is the first Arduino board based on a 32-bit ARM core microcontroller. With 54 digital input/output pins, 12 analog inputs, it is the perfect board for powerful larger scale Arduino projects.', 48, 'Arduino-due.jpg', 'Arduino-due.jpg', 'Arduino-due.jpg', 'Classic Family', 0, 0),
(59, 'Arduino Micro', 'The Micro comes with a built-in USB which makes the Micro recognizable as a mouse or keyboard.', 25, 'Arduino-micro.jpg', 'Arduino-micro.jpg', 'Arduino-micro.jpg', 'Classic Family', 0, 0),
(60, 'Arduino Zero', 'Arduino Zero is a simple and powerful 32-bit extension of the platform established by the UNO. This board aims to provide a platform for innovative projects in smart IoT devices, wearable technology, high-tech automation, crazy robotics, and much more.', 48, 'Arduino-zero.jpg', 'Arduino-zero.jpg', 'Arduino-zero.jpg', 'Classic Family', 0, 0),
(61, 'ARDUINO UNO WiFi REV2', 'The Arduino for your educational projects with wireless connectivity and motion sensing.', 54, 'Arduino-uno-wifi-r2.jpg', 'Arduino-uno-wifi-r2.jpg', 'Arduino-uno-wifi-r2.jpg', 'Classic Family', 0, 0),
(62, 'Arduino Motor Shield Rev3', 'The Arduino Motor Shield allows your arduino to drive DC and stepper motors, relays and solenoids.', 28, 'Arduino-motor-shield-rev3.jpg', 'Arduino-motor-shield-rev3.jpg', 'Arduino-motor-shield-rev3.jpg', 'Classic Family', 0, 0),
(63, 'Arduino 4 Relays Shield', 'The Arduino 4 Relays Shield allows your Arduino driving high power loads.', 28, 'Arduino-4-relay-shield.jpg', 'Arduino-4-relay-shield.jpg', 'Arduino-4-relay-shield.jpg', 'Classic Family', 0, 0),
(64, 'Arduino Ethernet Shield 2', 'The Arduino Ethernet Shield 2 connects your Arduino to the internet', 30, 'Arduino-ethernet-shield-rev2.jpg', 'Arduino-ethernet-shield-rev2.jpg', 'Arduino-ethernet-shield-rev2.jpg', 'Classic Family', 0, 0);
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
<<<<<<< HEAD
  `id` int(100) NOT NULL,
=======
  `id` int(10) NOT NULL,
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
<<<<<<< HEAD
(1, 'muhammed', 'nmhammed50@gmail.com', '7d7ce76ed0aa112c7056a56887623ea79c28ae3a'),
(2, 'admin', 'mhamd@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');
=======
(1, 'noorelhudaibrahim', 'noorelhudaibrahimalshebailat@gmail.com', 'e176ef75a45aa6e356c672ac2f8e69676e1c1ee5'),
(7, 'noorelhudaibrahim', 'noorelhudaibrahimalshebailat@gmail.com', 'e176ef75a45aa6e356c672ac2f8e69676e1c1ee5');
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pid` (`pid`);
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- Indexes for table `products`
--
ALTER TABLE `products`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_name` (`category_name`);
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pid` (`pid`);
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
<<<<<<< HEAD
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
=======
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
<<<<<<< HEAD
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
=======
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
<<<<<<< HEAD
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
=======
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
<<<<<<< HEAD
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `products` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `products` (`id`);
>>>>>>> a015c45fec0864a23f8850f243e7b1c464c8181c
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
