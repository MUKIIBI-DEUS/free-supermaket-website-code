-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 10:04 AM
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
(5, 'deus', 'mukiibi', '../../../../assets/images/uploads/clock.jpg', '2024-04-24 20:10:37', 'Wakiso', '07023232', 'sas@gmail.com', 'dedit123', 'admin', 'Employee', 'false'),
(6, 'Sharifah', 'Nansubuga', '../../../../assets/images/uploads/dog.jpg', '2024-04-25 12:24:46', 'Kampala', '070023232', 'sharifa@gmail.com', 'shifah', 'shifah', 'Employee', 'true'),
(8, 'deus', 'ttt', '../../../../assets/images/uploads/shopping.png', '2024-05-02 12:29:12', 'wasasa', '070787878', 'df@fdfdfd', 'deusD', '1234', 'Admin', 'true'),
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
(15, 'Movie', 1285, NULL),
(16, 'Movie low', 1292, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) DEFAULT NULL,
  `category` varchar(300) DEFAULT NULL,
  `buying_price` int(11) NOT NULL,
  `unitcost` int(11) DEFAULT NULL,
  `productImage` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `buying_price`, `unitcost`, `productImage`) VALUES
(12, 'Dettel', 'Tools and Home Improvement', 100, 2000, '../../../../assets/images/uploads/dettol.jpg'),
(15, 'Movie', 'Electronics', 600, 1000, '../../../../assets/images/uploads/movies.png'),
(16, 'Movie low', 'Electronics', 600, 800, '../../../../assets/images/uploads/movie low.png'),
(17, 'wsad', 'Pet Supplies', 3332, 34434, '../../../../assets/images/uploads/reume.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_Name` varchar(300) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `profit` int(11) NOT NULL,
  `date_of_sale` date NOT NULL,
  `sale_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `employee_id`, `product_id`, `product_Name`, `qty`, `total`, `profit`, `date_of_sale`, `sale_time`) VALUES
(416, 1, 15, 'Movie', 10, 10000, 2000, '2024-08-10', '16:01:16'),
(417, 1, 15, 'Movie', 1, 1000, 400, '2024-08-11', '21:54:44'),
(418, 1, 15, 'Movie', 1, 1000, 400, '2024-08-12', '11:27:25'),
(419, 1, 15, 'Movie', 1, 1000, 400, '2024-08-13', '10:13:11'),
(420, 1, 15, 'Movie', 1, 1000, 400, '2024-08-14', '13:49:33'),
(421, 1, 16, 'Movie low', 4, 3200, 800, '2024-08-15', '20:18:37'),
(422, 1, 15, 'Movie', 1, 1000, 400, '2024-08-15', '20:36:05'),
(429, 6, 15, 'Movie', 1, 1000, 400, '2024-08-15', '22:16:13'),
(430, 6, 16, 'Movie low', 1, 800, 200, '2024-08-16', '20:15:36'),
(431, 6, 15, 'Movie', 1, 1000, 400, '2024-08-16', '20:15:36'),
(432, 6, 15, 'Movie', 2, 2000, 800, '2024-08-18', '20:25:57');

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
(115, 6, '2024-05-07 09:22:35', '2024-05-07 09:23:05'),
(116, 5, '2024-05-22 14:48:03', '2024-05-22 14:51:14'),
(117, 8, '2024-05-22 14:52:45', NULL),
(118, 5, '2024-05-27 12:07:08', NULL),
(119, 5, '2024-05-27 12:51:28', NULL),
(120, 5, '2024-05-27 13:32:11', NULL),
(121, 5, '2024-05-27 14:12:33', '2024-05-27 14:16:29'),
(122, 5, '2024-05-27 14:16:37', NULL),
(123, 5, '2024-05-27 14:35:12', NULL),
(124, 5, '2024-06-04 13:10:58', NULL),
(125, 8, '2024-07-31 13:44:12', '2024-07-31 13:50:21'),
(126, 8, '2024-07-31 14:41:47', NULL),
(127, 8, '2024-08-01 10:03:33', NULL),
(128, 8, '2024-08-01 10:15:01', '2024-08-01 10:18:32'),
(129, 8, '2024-08-01 10:28:22', NULL),
(130, 8, '2024-08-01 10:40:23', '2024-08-01 10:48:31'),
(131, 6, '2024-08-01 10:48:46', '2024-08-01 10:49:25'),
(132, 8, '2024-08-01 12:38:46', NULL),
(133, 5, '2024-08-01 12:52:57', '2024-08-01 13:02:33'),
(134, 5, '2024-08-01 13:02:42', NULL),
(135, 5, '2024-08-01 13:20:20', NULL),
(136, 5, '2024-08-01 14:10:57', NULL),
(137, 8, '2024-08-01 20:40:41', NULL),
(138, 5, '2024-08-03 11:02:28', NULL),
(139, 5, '2024-08-05 19:22:35', NULL),
(140, 5, '2024-08-06 17:09:13', NULL),
(141, 5, '2024-08-07 14:43:03', NULL),
(142, 5, '2024-08-07 15:36:36', '2024-08-07 15:44:18'),
(143, 6, '2024-08-07 15:44:48', NULL),
(144, 5, '2024-08-07 15:48:31', NULL),
(145, 5, '2024-08-07 16:19:04', NULL),
(146, 5, '2024-08-07 17:09:58', NULL),
(147, 5, '2024-08-07 18:49:49', NULL),
(148, 8, '2024-08-08 11:15:28', NULL),
(149, 8, '2024-08-08 13:04:22', '2024-08-08 13:05:26'),
(150, 8, '2024-08-08 13:05:37', NULL),
(151, 5, '2024-08-09 10:39:31', NULL),
(152, 5, '2024-08-09 13:14:46', '2024-08-09 13:14:59'),
(153, 5, '2024-08-09 13:15:04', NULL),
(154, 5, '2024-08-09 13:53:44', NULL),
(155, 5, '2024-08-09 14:13:51', '2024-08-09 14:14:54'),
(156, 5, '2024-08-09 14:15:09', '2024-08-09 14:17:30'),
(157, 5, '2024-08-09 14:17:35', '2024-08-09 14:18:19'),
(158, 5, '2024-08-09 14:18:26', '2024-08-09 14:20:13'),
(159, 5, '2024-08-09 14:24:11', '2024-08-09 14:25:47'),
(160, 5, '2024-08-09 14:25:54', NULL),
(161, 6, '2024-08-09 14:38:38', NULL),
(162, 6, '2024-08-09 15:03:41', NULL),
(163, 5, '2024-08-09 15:15:29', NULL),
(164, 5, '2024-08-09 15:20:03', NULL),
(165, 8, '2024-08-09 15:22:20', NULL),
(166, 6, '2024-08-09 15:42:21', '2024-08-09 18:31:17'),
(167, 8, '2024-08-09 18:34:53', NULL),
(168, 6, '2024-08-09 18:46:22', NULL),
(169, 8, '2024-08-09 19:10:06', '2024-08-09 19:13:11'),
(170, 8, '2024-08-09 19:13:22', NULL),
(171, 8, '2024-08-09 19:49:27', '2024-08-09 19:59:31'),
(172, 8, '2024-08-09 19:59:42', '2024-08-09 20:00:20'),
(173, 8, '2024-08-09 20:00:36', NULL),
(174, 8, '2024-08-09 20:05:17', '2024-08-09 20:08:40'),
(175, 8, '2024-08-09 20:08:59', NULL),
(176, 8, '2024-08-09 21:03:22', NULL),
(177, 6, '2024-08-09 21:09:29', NULL),
(178, 8, '2024-08-09 21:16:59', '2024-08-09 21:17:36'),
(179, 8, '2024-08-09 21:17:53', '2024-08-09 21:21:49'),
(180, 8, '2024-08-09 21:21:59', NULL),
(181, 8, '2024-08-10 09:35:45', NULL),
(182, 8, '2024-08-10 10:05:38', NULL),
(183, 5, '2024-08-10 10:55:05', NULL),
(184, 8, '2024-08-10 11:06:21', NULL),
(185, 5, '2024-08-10 11:36:58', NULL),
(186, 8, '2024-08-10 12:51:32', NULL),
(187, 6, '2024-08-10 12:52:30', NULL),
(188, 8, '2024-08-10 15:27:37', NULL),
(189, 8, '2024-08-10 15:38:33', '2024-08-10 15:39:16'),
(190, 8, '2024-08-10 15:39:49', NULL),
(191, 8, '2024-08-10 16:15:42', '2024-08-10 16:18:04'),
(192, 8, '2024-08-10 16:18:13', NULL),
(193, 8, '2024-08-10 16:23:33', NULL),
(194, 8, '2024-08-10 17:35:58', NULL),
(195, 8, '2024-08-11 18:54:15', '2024-08-11 18:54:27'),
(196, 6, '2024-08-11 18:54:33', NULL),
(197, 8, '2024-08-12 08:25:49', NULL),
(198, 6, '2024-08-12 08:27:09', '2024-08-12 08:31:46'),
(199, 8, '2024-08-13 07:12:33', NULL),
(200, 6, '2024-08-13 07:12:54', NULL),
(201, 8, '2024-08-13 16:10:57', NULL),
(202, 8, '2024-08-13 16:22:10', '2024-08-13 16:30:20'),
(203, 8, '2024-08-13 16:30:27', '2024-08-13 16:30:32'),
(204, 8, '2024-08-13 16:30:37', '2024-08-13 16:31:57'),
(205, 8, '2024-08-13 16:31:32', '2024-08-13 16:31:47'),
(206, 8, '2024-08-13 16:32:03', NULL),
(207, 8, '2024-08-13 16:32:37', '2024-08-13 16:40:43'),
(208, 6, '2024-08-13 16:34:08', NULL),
(209, 8, '2024-08-13 16:36:52', NULL),
(210, 8, '2024-08-13 16:37:27', NULL),
(211, 8, '2024-08-13 16:40:51', '2024-08-13 16:44:41'),
(212, 8, '2024-08-13 16:46:46', '2024-08-13 16:52:56'),
(213, 8, '2024-08-13 16:53:01', '2024-08-13 16:55:48'),
(214, 8, '2024-08-13 16:55:53', NULL),
(215, 8, '2024-08-13 17:00:50', '2024-08-13 17:03:52'),
(216, 6, '2024-08-13 17:04:03', NULL),
(217, 6, '2024-08-13 17:24:12', NULL),
(218, 8, '2024-08-13 17:24:45', '2024-08-13 17:24:54'),
(219, 6, '2024-08-13 17:25:00', NULL),
(220, 6, '2024-08-13 17:31:39', NULL),
(221, 8, '2024-08-13 17:34:21', '2024-08-13 17:39:08'),
(222, 8, '2024-08-13 17:39:44', NULL),
(223, 8, '2024-08-13 17:40:38', NULL),
(224, 8, '2024-08-13 20:46:06', '2024-08-13 20:47:09'),
(225, 8, '2024-08-14 10:48:33', NULL),
(226, 6, '2024-08-14 10:49:17', NULL),
(227, 8, '2024-08-15 17:16:12', NULL),
(228, 6, '2024-08-15 17:17:49', NULL),
(229, 6, '2024-08-15 18:23:33', NULL),
(230, 6, '2024-08-15 18:36:48', NULL),
(231, 8, '2024-08-15 18:37:18', NULL),
(232, 8, '2024-08-15 19:27:34', '2024-08-15 20:37:12'),
(233, 8, '2024-08-16 12:59:35', '2024-08-16 13:01:32'),
(234, 8, '2024-08-16 17:13:16', NULL),
(235, 6, '2024-08-16 17:13:27', NULL),
(236, 8, '2024-08-17 09:10:41', NULL),
(237, 8, '2024-08-17 10:07:22', NULL),
(238, 8, '2024-08-18 09:26:36', NULL),
(239, 6, '2024-08-18 09:31:48', NULL),
(240, 8, '2024-08-18 17:24:38', NULL),
(241, 6, '2024-08-18 17:25:44', NULL),
(242, 8, '2024-08-19 07:39:01', '2024-08-19 07:48:41'),
(243, 8, '2024-08-19 07:49:30', '2024-08-19 07:59:24'),
(244, 8, '2024-08-19 07:55:08', NULL),
(245, 8, '2024-08-19 07:59:54', NULL),
(246, 8, '2024-08-19 08:02:56', NULL);

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
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlogindetails`
--
ALTER TABLE `userlogindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

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
