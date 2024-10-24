-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 09:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `fname` varchar(300) DEFAULT NULL,
  `lname` varchar(300) DEFAULT NULL,
  `e_photo` varchar(400) DEFAULT NULL,
  `doj` timestamp NOT NULL DEFAULT current_timestamp(),
  `e_location` varchar(50) DEFAULT NULL,
  `e_contact` varchar(300) DEFAULT NULL,
  `e_email` varchar(100) DEFAULT NULL,
  `userName` varchar(300) DEFAULT NULL,
  `e_password` varchar(255) DEFAULT NULL,
  `e_role` varchar(50) DEFAULT NULL,
  `loginStatus` varchar(20) DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `fname`, `lname`, `e_photo`, `doj`, `e_location`, `e_contact`, `e_email`, `userName`, `e_password`, `e_role`, `loginStatus`) VALUES
(1, 'Mukiibi', 'Deus', '../../../../assets/images/uploads/add user24.png', '2024-04-23 14:13:01', 'Wakiso', '07029121', 'dsj@gmail.com', 'deus', 'kdsdsas', 'Admin', 'false'),
(2, 'Mutyaba', 'Dues', '../../../../assets/images/uploads/Cathedral2.jpg', '2024-04-23 14:49:39', 'Wakiso', '083232', 'wias@gmail.com', 'deusqw', 'asasd', 'Admin', 'false'),
(4, 'deus', 'asasa', '../../../../assets/images/uploads/white_user136.png', '2024-04-24 16:00:59', 'sasas', 'sasas', 'asdasd@dfsdf', 'dat', '123', 'Admin', 'false'),
(5, 'deus', 'mukiibi', '../../../../assets/images/uploads/clock.jpg', '2024-04-24 20:10:37', 'Wakiso', '07023232', 'sas@gmail.com', 'admin', 'admin', 'Admin', 'false'),
(6, 'Sharifah', 'Nansubuga', '../../../../assets/images/uploads/dog.jpg', '2024-04-25 12:24:46', 'Kampala', '070023232', 'sharifa@gmail.com', 'shifah', 'shifah', 'Employee', 'false'),
(8, 'deus', 'ttt', '../../../../assets/images/uploads/shopping.png', '2024-05-02 12:29:12', 'wasasa', '070787878', 'df@fdfdfd', 'deusD', '1234', 'Admin', 'false'),
(9, 'deus', 'mukiibi', '../../../../assets/images/uploads/500 days of summer.jpg', '2024-05-03 17:56:51', 'wakiso', '08030232', 'dsdsio@sdadiasd.com', 'deusM', '$2y$10$nm2uIndXNJYEnDCdAliNeOm3b4e8Mr7hxAypAdVZ68cp4C8oEPAiK', 'Admin', 'false'),
(10, 'mukiiibi', 'deiiedie', '../../../../assets/images/uploads/alex of venice.jpg', '2024-05-03 17:59:02', 'wqkaksda', '08302323', 'dsdk@dksda', 'deust', '$2y$10$XxcTaauYe8DcbV9RGcTykeOJYpjG8jDyKodVjHb.PCgPjQoS/IXsu', 'Customer', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) DEFAULT NULL,
  `inventory_no` int(11) DEFAULT NULL,
  `stock_keeping_unit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_id`, `product_name`, `inventory_no`, `stock_keeping_unit`) VALUES
(1, 'soda', 1000, NULL),
(2, 'Towels', 58, NULL),
(3, 'Dove', 90, NULL),
(4, 'Snacks', 68, NULL),
(5, 'Nutella', 86, NULL),
(6, 'Fruits', 96, NULL),
(7, 'Sugar', 46, NULL),
(8, 'sauvage', 50, NULL),
(9, 'Milk', 85, NULL),
(10, 'Water', 75, NULL),
(12, 'Dettol', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) DEFAULT NULL,
  `category` varchar(300) DEFAULT NULL,
  `unitcost` int(11) DEFAULT NULL,
  `productImage` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `unitcost`, `productImage`) VALUES
(1, 'soda', 'Home and Kitchen', 1000, '../../../../assets/images/uploads/cococola.jpg'),
(2, 'Towels', 'Clothing and Fashion', 20000, '../../../../assets/images/uploads/towels-2.jpg'),
(3, 'Dove', 'Beauty and Personal Care', 25000, '../../../../assets/images/uploads/dove.jpg'),
(4, 'Snacks', 'Food and Beverages', 2000, '../../../../assets/images/uploads/snack.jpg'),
(5, 'Nutella', 'Food and Beverages', 10000, '../../../../assets/images/uploads/nutella.jpg'),
(6, 'Fruits', 'Food and Beverages', 2000, '../../../../assets/images/uploads/friuts.jpg'),
(7, 'Sugar', 'Food and Beverages', 8000, '../../../../assets/images/uploads/sugar.jpg'),
(8, 'sauvage', 'Beauty and Personal Care', 100000, '../../../../assets/images/uploads/sauvage.jpg'),
(9, 'Milk', 'Food and Beverages', 5000, '../../../../assets/images/uploads/milk.jpg'),
(10, 'Water', 'Food and Beverages', 1000, '../../../../assets/images/uploads/water.jpg'),
(12, 'Dettol', 'Tools and Home Improvement', 10000, '../../../../assets/images/uploads/dettol.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `fname` varchar(300) DEFAULT NULL,
  `lname` varchar(300) DEFAULT NULL,
  `s_contact` varchar(300) DEFAULT NULL,
  `s_location` varchar(300) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `fname`, `lname`, `s_contact`, `s_location`, `product_id`) VALUES
(1, 'eric', 'ogm', '0702121212', 'wakiso', 12);

-- --------------------------------------------------------

--
-- Table structure for table `userlogindetails`
--

CREATE TABLE `userlogindetails` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logoutTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogindetails`
--

INSERT INTO `userlogindetails` (`id`, `user_id`, `loginTime`, `logoutTime`) VALUES
(1, 4, '2024-04-30 09:16:46', '2024-04-30 09:16:55'),
(2, 5, '2024-04-30 09:19:07', '2024-04-30 09:26:23'),
(4, 5, '2024-04-30 09:28:58', '2024-04-30 09:30:21'),
(5, 5, '2024-04-30 09:30:26', '2024-04-30 09:33:13'),
(6, 4, '2024-04-30 09:34:43', '2024-04-30 09:34:46'),
(7, 4, '2024-04-30 09:38:16', NULL),
(8, 5, '2024-04-30 10:11:41', '2024-04-30 10:14:27'),
(9, 5, '2024-04-30 10:14:32', '2024-04-30 10:15:40'),
(10, 5, '2024-04-30 10:17:38', '2024-04-30 10:17:44'),
(11, 5, '2024-04-30 10:20:21', '2024-04-30 10:21:37'),
(12, 5, '2024-04-30 10:24:29', '2024-04-30 11:14:46'),
(13, 5, '2024-04-30 11:19:32', '2024-04-30 11:25:33'),
(14, 5, '2024-04-30 11:27:04', '2024-04-30 11:27:12'),
(15, 5, '2024-04-30 11:34:00', NULL),
(16, 5, '2024-04-30 11:57:49', NULL),
(17, 5, '2024-04-30 11:59:31', '2024-04-30 12:06:06'),
(18, 5, '2024-04-30 12:07:52', NULL),
(19, 5, '2024-04-30 12:09:38', NULL),
(20, 5, '2024-04-30 12:10:46', NULL),
(21, 5, '2024-04-30 12:11:39', NULL),
(22, 5, '2024-04-30 12:18:36', '2024-04-30 12:19:27'),
(23, 4, '2024-04-30 12:22:33', NULL),
(24, 4, '2024-04-30 12:23:47', NULL),
(25, 5, '2024-04-30 12:34:14', '2024-04-30 13:28:17'),
(26, 5, '2024-04-30 13:28:24', NULL),
(27, 4, '2024-04-30 13:32:35', '2024-04-30 13:32:37'),
(28, 4, '2024-04-30 13:36:05', '2024-04-30 13:36:09'),
(29, 4, '2024-04-30 13:36:13', '2024-04-30 13:36:15'),
(30, 5, '2024-04-30 13:45:55', '2024-04-30 13:47:21'),
(31, 7, '2024-04-30 13:47:27', '2024-04-30 13:47:42'),
(32, 4, '2024-04-30 13:48:27', '2024-04-30 13:49:10'),
(33, 4, '2024-04-30 14:23:49', NULL),
(34, 5, '2024-04-30 14:42:38', NULL),
(35, 5, '2024-04-30 14:52:59', NULL),
(36, 5, '2024-04-30 15:04:19', NULL),
(37, 5, '2024-04-30 15:15:56', NULL),
(38, 5, '2024-04-30 15:26:40', NULL),
(39, 5, '2024-04-30 15:37:07', NULL),
(40, 5, '2024-04-30 15:54:32', NULL),
(41, 5, '2024-04-30 16:05:13', NULL),
(42, 5, '2024-04-30 16:16:11', NULL),
(43, 5, '2024-04-30 16:26:38', NULL),
(44, 5, '2024-04-30 16:29:06', NULL),
(45, 5, '2024-04-30 16:41:09', NULL),
(46, 5, '2024-04-30 16:51:24', NULL),
(47, 5, '2024-04-30 17:02:02', NULL),
(48, 5, '2024-04-30 17:19:34', NULL),
(49, 5, '2024-04-30 17:29:52', NULL),
(50, 5, '2024-05-01 18:40:07', '2024-05-01 18:47:08'),
(51, 5, '2024-05-01 18:47:17', NULL),
(52, 4, '2024-05-02 05:41:55', '2024-05-02 05:43:37'),
(53, 6, '2024-05-02 06:44:32', NULL),
(54, 6, '2024-05-02 06:46:56', NULL),
(55, 6, '2024-05-02 06:47:15', NULL),
(56, 6, '2024-05-02 06:49:01', NULL),
(57, 6, '2024-05-02 06:49:33', NULL),
(58, 6, '2024-05-02 06:51:18', NULL),
(59, 6, '2024-05-02 06:53:01', NULL),
(60, 6, '2024-05-02 06:53:24', NULL),
(61, 6, '2024-05-02 06:54:01', NULL),
(62, 6, '2024-05-02 07:03:33', NULL),
(63, 6, '2024-05-02 07:04:26', NULL),
(64, 6, '2024-05-02 07:11:51', '2024-05-02 07:11:55'),
(65, 6, '2024-05-02 07:16:31', '2024-05-02 07:16:50'),
(66, 6, '2024-05-02 07:17:55', NULL),
(67, 6, '2024-05-02 07:32:19', '2024-05-02 07:40:37'),
(68, 6, '2024-05-02 07:59:26', '2024-05-02 07:59:43'),
(69, 4, '2024-05-02 07:59:58', '2024-05-02 08:00:49'),
(70, 6, '2024-05-02 08:00:58', '2024-05-02 08:04:43'),
(71, 6, '2024-05-02 08:05:21', '2024-05-02 08:06:36'),
(72, 6, '2024-05-02 08:06:43', NULL),
(73, 6, '2024-05-02 08:08:34', NULL),
(74, 6, '2024-05-02 08:23:30', '2024-05-02 08:47:15'),
(75, 5, '2024-05-02 08:40:27', NULL),
(76, 6, '2024-05-02 08:47:27', NULL),
(77, 6, '2024-05-02 09:22:37', NULL),
(78, 6, '2024-05-02 09:56:51', NULL),
(79, 6, '2024-05-02 10:10:20', NULL),
(80, 5, '2024-05-02 10:13:13', '2024-05-02 10:18:45'),
(81, 5, '2024-05-02 10:20:34', '2024-05-02 10:22:55'),
(82, 5, '2024-05-02 10:24:20', NULL),
(83, 6, '2024-05-02 10:55:29', NULL),
(84, 6, '2024-05-02 11:07:43', NULL),
(85, 6, '2024-05-02 11:24:49', NULL),
(86, 6, '2024-05-02 11:35:57', '2024-05-02 11:42:34'),
(87, 6, '2024-05-02 11:45:16', NULL),
(88, 6, '2024-05-02 11:57:13', NULL),
(89, 5, '2024-05-02 11:57:58', '2024-05-02 12:06:16'),
(90, 5, '2024-05-02 12:06:30', '2024-05-02 12:09:07'),
(91, 6, '2024-05-02 12:11:00', '2024-05-02 12:14:56'),
(92, 5, '2024-05-02 12:15:06', '2024-05-02 12:21:19'),
(93, 6, '2024-05-02 12:21:29', '2024-05-02 12:23:37'),
(94, 6, '2024-05-02 12:26:14', '2024-05-02 12:26:19'),
(95, 5, '2024-05-02 12:26:31', '2024-05-02 12:31:12'),
(96, 5, '2024-05-02 12:31:26', '2024-05-02 12:32:51'),
(97, 8, '2024-05-02 12:33:00', '2024-05-02 12:33:26'),
(98, 5, '2024-05-02 12:33:32', '2024-05-02 12:36:14'),
(99, 6, '2024-05-02 12:59:05', '2024-05-02 13:01:01'),
(100, 6, '2024-05-02 13:01:07', NULL),
(101, 8, '2024-05-02 13:05:00', NULL),
(102, 8, '2024-05-03 16:53:05', '2024-05-03 17:00:19'),
(103, 8, '2024-05-03 17:22:21', NULL),
(104, 8, '2024-05-03 18:01:47', '2024-05-03 18:01:50'),
(105, 8, '2024-05-07 06:04:34', '2024-05-07 06:05:47'),
(106, 6, '2024-05-07 06:49:02', NULL),
(107, 5, '2024-05-07 06:50:14', NULL),
(108, 6, '2024-05-07 07:02:17', '2024-05-07 07:02:23'),
(109, 8, '2024-05-07 07:03:09', '2024-05-07 07:03:12'),
(110, 6, '2024-05-07 07:03:26', NULL),
(111, 5, '2024-05-07 07:08:09', NULL),
(112, 8, '2024-05-07 07:48:56', '2024-05-07 07:48:59'),
(113, 8, '2024-05-07 09:08:51', '2024-05-07 09:15:10'),
(114, 6, '2024-05-07 09:15:30', '2024-05-07 09:21:00'),
(115, 6, '2024-05-07 09:22:35', '2024-05-07 09:23:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `products_fk2` (`product_id`);

--
-- Indexes for table `userlogindetails`
--
ALTER TABLE `userlogindetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlogindetails`
--
ALTER TABLE `userlogindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `products_pk` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `products_fk2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
