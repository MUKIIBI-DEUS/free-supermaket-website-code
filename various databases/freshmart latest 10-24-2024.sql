-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 10:32 AM
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
(6, 'deus123', 'mu', '../../../../assets/images/uploads/dog.jpg', '2024-04-25 12:24:46', 'Kampala', '070023232', 'sharifa@gmail.com', 'seat12', 'cashier', 'Employee', 'false'),
(8, 'deus', 'ttt', '../../../../assets/images/uploads/shopping.png', '2024-05-02 12:29:12', 'wasasa', '070787878', 'df@fdfdfd', 'deusD', '1234', 'Admin', 'false'),
(9, 'deus', 'mukiibi', '../../../../assets/images/uploads/500 days of summer.jpg', '2024-05-03 17:56:51', 'wakiso', '08030232', 'dsdsio@sdadiasd.com', 'deusM', '$2y$10$nm2uIndXNJYEnDCdAliNeOm3b4e8Mr7hxAypAdVZ68cp4C8oEPAiK', 'Admin', 'false'),
(10, 'mukiiibi', 'deiiedie', '../../../../assets/images/uploads/alex of venice.jpg', '2024-05-03 17:59:02', 'wqkaksda', '08302323', 'dsdk@dksda', 'deust', '$2y$10$XxcTaauYe8DcbV9RGcTykeOJYpjG8jDyKodVjHb.PCgPjQoS/IXsu', 'Customer', 'false'),
(11, 'asas', 'asas', '../../../../assets/images/uploads/doctorpanefinal.jpg', '2024-08-19 11:46:28', 'asas', '32232', 'dasa@dsdsd', 'asdasda', 'asdasd', 'Customer', 'false'),
(12, 'Mukiibi', 'Dean', '../../../../assets/images/uploads/ic_chat.png', '2024-08-19 11:49:35', 'Wakiso', '0720022', 'deus@gmail.com', 'deuusahha', 'asasa', 'Customer', 'false');

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
(3, 'Pine Apple', 10, NULL),
(5, 'Acerola  new fruits ug', 38, NULL),
(6, 'Apricot', 9, NULL),
(7, 'Babaco', 143, NULL),
(8, 'Coacola', 997, NULL),
(9, 'Ackee', 10, NULL),
(10, 'Avocado', 12, NULL),
(12, 'Dates', 132, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp(),
  `user_id_for_logs` int(11) DEFAULT NULL,
  `action_type` varchar(50) DEFAULT NULL,
  `described` varchar(500) NOT NULL,
  `new_values` varchar(500) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `affected_table` varchar(50) DEFAULT NULL,
  `affected_record_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `timestamp`, `user_id_for_logs`, `action_type`, `described`, `new_values`, `ip_address`, `affected_table`, `affected_record_id`) VALUES
(1, '2024-08-19 18:19:45', 8, 'delete', '418,6,1,5000,5000,2024-08-19,14:34:34', '0', '::1', 'sales', 418),
(2, '2024-08-19 18:22:24', 8, 'delete', '417,6,sauvage,1,100000,100000,2024-08-19,14:34:31', '0', '::1', 'sales', 417),
(3, '2024-08-19 18:23:39', 8, 'delete', '409:1:Milk:1:2000:1900:2024-08-10:00:10:02', '0', '::1', 'sales', 409),
(4, '2024-08-19 18:38:29', 8, 'delete', 'sales_id=>416,employee_id=>6:productName=>sauvage:qauntity=>1:Total=>100000:profits=>100000:DOS=>2024-08-19:sales_time=>14:34:28', '0', '::1', 'sales', 416),
(5, '2024-08-19 18:46:47', 8, 'delete', 'sales_id=>411,employee_id=>1::productName=>Snacks::qauntity=>3::Total=>6000::profits=>6000::DOS=>2024-08-10::sales_time=>00:11:40', 'empty', '::1', 'sales', 411),
(6, '2024-08-19 18:53:25', 6, 'delete', 'sales_id=>471,employee_id=>6::productName=>sauvage::qauntity=>1::Total=>100000::profits=>100000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 471),
(7, '2024-08-19 19:37:37', 6, 'update', 'sales_id=> 467::employee_id=>6::product_Id=>12::productName=>soap::qauntity=>1::Total=> 2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>467,employee_id=>6::product_id=>::productName=>soap::qauntity=>1::Total=>2000::profits=>1000::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 467),
(8, '2024-08-19 19:39:37', 6, 'update', 'sales_id=> 467::employee_id=>6::product_Id=>12::productName=>soap::qauntity=>1::Total=> 2000::profits=>1000::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>467,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>90000::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 467),
(9, '2024-08-19 19:42:23', 0, 'delete', 'sales_id=>470,employee_id=>6::product_id=>9::productName=>Milk::qauntity=>1::Total=>1500::profits=>1400::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 470),
(10, '2024-08-19 19:43:19', 8, 'delete', 'sales_id=>469,employee_id=>6::product_id=>7::productName=>Sugar::qauntity=>1::Total=>5000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 469),
(11, '2024-08-19 19:46:59', 0, 'delete', 'sales_id=>468,employee_id=>6::product_id=>13::productName=>Pine Apple::qauntity=>1::Total=>5000::profits=>5000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 468),
(12, '2024-08-19 19:51:37', 8, 'delete', 'sales_id=>467,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>90000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 467),
(13, '2024-08-19 19:57:10', 8, 'delete', 'sales_id=>466,employee_id=>6::product_id=>10::productName=>Water::qauntity=>1::Total=>1000::profits=>500::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 466),
(14, '2024-08-19 21:45:33', 0, 'delete', 'sales_id=>465,employee_id=>6::product_id=>4::productName=>Snacks::qauntity=>1::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 465),
(15, '2024-08-19 21:48:12', 0, 'update', 'sales_id=> 464::employee_id=>6::product_Id=>12::productName=>soap::qauntity=>1::Total=> 2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>464,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 464),
(16, '2024-08-19 21:49:27', 8, 'update', 'sales_id=> 464::employee_id=>6::product_Id=>12::productName=>soap::qauntity=>1::Total=> 2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>464,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 464),
(17, '2024-08-19 21:49:47', 8, 'update', 'sales_id=> 461::employee_id=>6::product_Id=>10::productName=>Water::qauntity=>1::Total=> 1000::profits=>500::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>461,employee_id=>6::product_id=>10::productName=>Water::qauntity=>1000000::Total=>1000::profits=>500::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 461),
(18, '2024-08-19 21:50:10', 8, 'update', 'sales_id=> 427::employee_id=>6::product_Id=>12::productName=>soap::qauntity=>1::Total=> 2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:13', 'sales_id=>427,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1000000000::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:13', '::1', 'sales', 427),
(19, '2024-08-19 22:02:39', 8, 'update', 'sales_id=> 453::employee_id=>6::product_Id=>13::productName=>Pine Apple::qauntity=>1::Total=> 5000::profits=>5000::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>453,employee_id=>6::product_id=>13::productName=>Pine Apple::qauntity=>910009::Total=>5000::profits=>5000::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 453),
(20, '2024-08-19 22:05:57', 8, 'update', 'sales_id=> 463::employee_id=>6::product_Id=>12::productName=>soap::qauntity=>1::Total=> 2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>463,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 463),
(21, '2024-08-21 12:13:52', 8, 'update', 'sales_id=> 464::employee_id=>6::product_Id=>12::productName=>soap::qauntity=>1::Total=> 2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>464,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>1000::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 464),
(22, '2024-08-21 12:40:47', 8, 'delete', 'sales_id=>464,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>1000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 464),
(23, '2024-08-21 12:41:11', 8, 'delete', 'sales_id=>463,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 463),
(24, '2024-08-21 12:41:43', 8, 'delete', 'sales_id=>462,employee_id=>6::product_id=>4::productName=>Snacks::qauntity=>1::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 462),
(25, '2024-08-21 14:48:56', 8, 'update supplier', 'supplier_id=>6,fname=>Wasswa::lname=>Dennis::prev_s_contact=>0799221212::prev_s_location=>wakiso::prev_product_id=>8', 'supplier_id=>6::fname=>Wasswa::lname=>Dennis::contact=>0799221212::location=>wakiso::productId=>8', '::1', 'suppliers', 6),
(26, '2024-08-21 14:56:05', 8, 'update', 'supplier_id=>6,fname=>Wasswa::lname=>Dennis::prev_s_contact=>0799221212::prev_s_location=>wakiso::prev_product_id=>8', 'supplier_id=>6::fname=>Wasswa::lname=>Dennis::contact=>0799221212::location=>wakiso::productId=>13', '::1', 'suppliers', 6),
(27, '2024-08-21 14:57:31', 8, 'update', 'supplier_id=>6,fname=>Wasswa::lname=>Dennis::prev_s_contact=>0799221212::prev_s_location=>wakiso::prev_product_id=>13', 'supplier_id=>6::fname=>Wasswa::lname=>Dennis::contact=>0799221212::location=>wakiso::productId=>13', '::1', 'suppliers', 6),
(28, '2024-08-21 15:41:25', 8, 'update', 'supplier_id=>6,fname=>Wasswa::lname=>Dennis::prev_s_contact=>0799221212::prev_s_location=>wakiso::prev_product_id=>13', 'supplier_id=>6::fname=>Mukiibi::lname=>Dennis::contact=>0799221212::location=>wakiso::productId=>13', '::1', 'supplier', 6),
(29, '2024-08-21 15:41:36', 8, 'update', 'supplier_id=>6,fname=>Mukiibi::lname=>Dennis::prev_s_contact=>0799221212::prev_s_location=>wakiso::prev_product_id=>13', 'supplier_id=>6::fname=>Deus::lname=>Dennis::contact=>0799221212::location=>wakiso::productId=>13', '::1', 'supplier', 6),
(30, '2024-08-21 15:43:17', 8, 'update', 'supplier_id=>6,fname=>Deus::lname=>Dennis::prev_s_contact=>0799221212::prev_s_location=>wakiso::prev_product_id=>13', 'supplier_id=>6::fname=>Deus::lname=>Dennis::contact=>0799221212::location=>wakiso::productId=>13', '::1', 'supplier', 6),
(31, '2024-08-21 15:43:50', 8, 'update', 'supplier_id=>6,fname=>Deus::lname=>Dennis::prev_s_contact=>0799221212::prev_s_location=>wakiso::prev_product_id=>13', 'supplier_id=>6::fname=>Deus::lname=>Dennis::contact=>0799221212::location=>wakiso::productId=>13', '::1', 'supplier', 6),
(32, '2024-08-21 15:44:33', 8, 'update', 'supplier_id=>7,fname=>Mukiibi::lname=>deus::prev_s_contact=>0032323::prev_s_location=>kibuye::prev_product_id=>13', 'supplier_id=>7::fname=>Mukiibi::lname=>deus::contact=>0774017993::location=>Lungujja wakaliga::productId=>13', '::1', 'supplier', 7),
(33, '2024-08-21 15:45:01', 8, 'update', 'supplier_id=>7,fname=>Mukiibi::lname=>deus::prev_s_contact=>0774017993::prev_s_location=>Lungujja wakaliga::prev_product_id=>13', 'supplier_id=>7::fname=>Mutyaba::lname=>deus::contact=>0774017993::location=>Lungujja wakaliga::productId=>13', '::1', 'supplier', 7),
(34, '2024-08-21 15:46:42', 8, 'update', 'supplier_id=>7,fname=>Mutyaba::lname=>deus::prev_s_contact=>0774017993::prev_s_location=>Lungujja wakaliga::prev_product_id=>13', 'supplier_id=>7::fname=>Mutyaba::lname=>deus::contact=>0774017993::location=>Lungujja wakaliga::productId=>4', '::1', 'supplier', 7),
(35, '2024-08-21 15:52:14', 8, 'delete', 'supplier_id=>6,fname=>Deus::lname=>Dennis::prev_s_contact=>0799221212::prev_s_location=>wakiso::prev_product_id=>13', 'supplier_id=>6::fname=>Deus::lname=>Dennis::contact=>0799221212::location=>wakiso::productId=>13', '::1', 'supplier', 6),
(36, '2024-08-21 15:53:33', 8, 'delete', 'supplier_id=>8,fname=>asas::lname=>asas::prev_s_contact=>2121::prev_s_location=>sasas::prev_product_id=>13', 'empty', '::1', 'supplier', 8),
(37, '2024-08-21 18:58:33', 8, 'update', 'supplier_id=>7,fname=>Mutyaba::lname=>deus::prev_s_contact=>0774017993::prev_s_location=>Lungujja wakaliga::prev_product_id=>4', 'supplier_id=>7::fname=>Kato::lname=>deus::contact=>0774017993::location=>Lungujja wakaliga::productId=>4', '::1', 'supplier', 7),
(38, '2024-08-21 19:03:03', 8, 'delete', 'supplier_id=>7,fname=>Kato::lname=>deus::prev_s_contact=>0774017993::prev_s_location=>Lungujja wakaliga::prev_product_id=>4', 'empty', '::1', 'supplier', 7),
(39, '2024-08-21 19:20:20', 8, 'add supplier', 'empty', 'firstName=>asas::LastName=>sdasdasd::contact=>dasdasdasd::location=>adasda::productId=>9', '::1', 'supplier', 0),
(40, '2024-08-21 19:46:37', 8, 'add supplier', 'empty', 'firstName=>asas::LastName=>asas::contact=>asdasds::location=>asdas::productId=>8', '::1', 'supplier', 18),
(41, '2024-08-21 19:48:14', 8, 'add supplier', 'empty', 'firstName=>Liam::LastName=>Nsereko::contact=>0782831121::location=>Kitunzi lungujja::productId=>9', '::1', 'supplier', 19),
(42, '2024-08-21 20:00:21', 8, 'update', 'supplier_id=>15,fname=>wasa::lname=>asas::prev_s_contact=>dasasas::prev_s_location=>asas::prev_product_id=>13', 'supplier_id=>15::fname=>wasa::lname=>asas::contact=>dasasas::location=>asas::productId=>13', '::1', 'supplier', 15),
(43, '2024-08-21 21:02:01', 8, 'update', 'supplier_id=>9,fname=>Nakityo::lname=>Christine::prev_s_contact=>070329321::prev_s_location=>Mityana::prev_product_id=>8', 'supplier_id=>9::fname=>Nakityo::lname=>Christine::contact=>070329321::location=>Mityana::productId=>7', '::1', 'supplier', 9),
(44, '2024-08-21 21:02:11', 8, 'update', 'supplier_id=>9,fname=>Nakityo::lname=>Christine::prev_s_contact=>070329321::prev_s_location=>Mityana::prev_product_id=>7', 'supplier_id=>9::fname=>Nakityo::lname=>Christine::contact=>070329321::location=>Mityana::productId=>13', '::1', 'supplier', 9),
(45, '2024-08-21 21:08:16', 8, 'add supplier', 'empty', 'firstName=>Ankunda::LastName=>Adrian::contact=>070292132::location=>Kibuye::productId=>8', '::1', 'supplier', 20),
(46, '2024-08-21 21:26:13', 8, 'delete', 'sales_id=>456,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'empty', '::1', 'sales', 456),
(47, '2024-08-22 18:24:50', 8, 'update', 'supplier_id=>15,fname=>wasa::lname=>asas::prev_s_contact=>dasasas::prev_s_location=>asas::prev_product_id=>13', 'supplier_id=>15::fname=>wasa::lname=>asas::contact=>dasasas::location=>asas::productId=>13', '::1', 'supplier', 15),
(48, '2024-08-22 18:25:19', 8, 'update', 'supplier_id=>10,fname=>nsas::lname=>klldjkljl::prev_s_contact=>003232::prev_s_location=>ksdljaklj::prev_product_id=>13', 'supplier_id=>10::fname=>Muyingo::lname=>James::contact=>0702917121::location=>wakaliga lungujja::productId=>13', '::1', 'supplier', 10),
(49, '2024-08-22 18:25:26', 8, 'delete', 'supplier_id=>10,fname=>Muyingo::lname=>James::prev_s_contact=>0702917121::prev_s_location=>wakaliga lungujja::prev_product_id=>13', 'empty', '::1', 'supplier', 10),
(50, '2024-08-22 18:56:14', 8, 'add new product', 'empty', 'product_name	=>ddsdsd::category=>Health and Fitnes::buyingPrice=>2132::unitcost=>23212::productImage=>../../../../assets/images/uploads/networking.jpg', '::1', 'products', 16),
(51, '2024-08-22 18:56:14', 8, 'add initial product stock', 'empty', 'product_name=>ddsdsd::initialStock=>1212', '::1', 'inventory', 15),
(52, '2024-08-22 19:39:37', 8, 'add new product', 'empty', 'product_name	=>Soda::category=>Home and Kitchen::buyingPrice=>2121::unitcost=>121212::productImage=>../../../../assets/images/uploads/client 7.jpg', '::1', 'products', 17),
(53, '2024-08-22 19:39:37', 8, 'add initial product stock', 'empty', 'product_name=>Soda::initialStock=>123', '::1', 'inventory', 1),
(54, '2024-08-22 19:43:02', 8, 'add new product', 'empty', 'product_name	=>Mango::category=>Food and Beverages::buyingPrice=>1234::unitcost=>1212::productImage=>../../../../assets/images/uploads/mango.jpg', '::1', 'products', 1),
(55, '2024-08-22 19:43:02', 8, 'add initial product stock', 'empty', 'product_name=>Mango::initialStock=>322', '::1', 'inventory', 2),
(56, '2024-08-22 19:49:00', 8, 'add new product', 'empty', 'product_name	=>Water Melon::category=>Food and Beverages::buyingPrice=>500::unitcost=>1000::productImage=>../../../../assets/images/uploads/waterMelon.jpg', '::1', 'products', 1),
(57, '2024-08-22 19:49:00', 8, 'add initial product stock', 'empty', 'product_name=>Water Melon::initialStock=>100', '::1', 'inventory', 1),
(58, '2024-08-22 23:16:28', 8, 'edit product stock', '102', '103', '::1', 'inventory', 1),
(59, '2024-08-22 23:17:50', 8, 'edit product stock', '103', '104', '::1', 'inventory', 1),
(60, '2024-08-22 23:20:28', 8, 'add new product', 'empty', 'product_name	=>Red Apple::category=>Food and Beverages::buyingPrice=>1000::unitcost=>1500::productImage=>../../../../assets/images/uploads/red apples.jpg', '::1', 'products', 2),
(61, '2024-08-22 23:20:28', 8, 'add initial product stock', 'empty', 'product_name=>Red Apple::initialStock=>120', '::1', 'inventory', 2),
(62, '2024-08-22 23:20:47', 8, 'edit product stock', '120', '125', '::1', 'inventory', 2),
(63, '2024-08-22 23:20:57', 8, 'edit product stock', '125', '127', '::1', 'inventory', 2),
(64, '2024-08-22 23:42:28', 8, 'edit product stock', '104', '102', '::1', 'inventory', 1),
(65, '2024-08-22 23:58:13', 8, 'add new product stock', '102', 'newStock=>12::expiryDate=>', '::1', 'inventory', 1),
(66, '2024-08-22 23:58:26', 8, 'edit product stock', '114', '115', '::1', 'inventory', 1),
(67, '2024-08-22 23:59:30', 8, 'add new product stock', '115', 'newStock=>0::expiryDate=>', '::1', 'inventory', 1),
(68, '2024-08-23 00:07:32', 8, 'edit product stock', '115', '119', '::1', 'inventory', 1),
(69, '2024-08-23 12:38:00', 8, 'add new product', 'empty', 'product_name	=>Pine Apple::category=>Food and Beverages::buyingPrice=>1000::unitcost=>2000::productImage=>../../../../assets/images/uploads/PineApple.jpg', '::1', 'products', 3),
(70, '2024-08-23 12:38:00', 8, 'add initial product stock', 'empty', 'product_name=>Pine Apple::initialStock=>123', '::1', 'inventory', 3),
(71, '2024-08-23 17:22:49', 8, 'edit product stock', '118', '119', '::1', 'inventory', 1),
(72, '2024-08-23 17:23:01', 8, 'add new product stock', '119', 'newStock=>12::expiryDate=>', '::1', 'inventory', 1),
(73, '2024-08-28 10:25:00', 8, 'add new product stock', '131', 'newStock=>10::expiryDate=>2024-08-31', '::1', 'inventory', 1),
(74, '2024-08-28 10:36:34', 8, 'update', 'sales_id=> 477::employee_id=>6::product_Id=>3::productName=>Pine Apple::qauntity=>1::Total=> 2000::profits=>1000::DOS=>2024-08-23::sales_time=>13:28:47', 'sales_id=>477,employee_id=>6::product_id=>3::productName=>Pine Apple::qauntity=>1::Total=>2000::profits=>5000::DOS=>2024-08-23::sales_time=>13:28:47', '::1', 'sales', 477),
(75, '2024-09-12 12:10:25', 8, 'add new product', 'empty', 'product_name	=>Mountain dew bottle::category=>Food and Beverages::buyingPrice=>800::unitcost=>1000::productImage=>../../../../assets/images/uploads/mountain dew bottle.jpg', '::1', 'products', 4),
(76, '2024-09-12 12:10:25', 8, 'add initial product stock', 'empty', 'product_name=>Mountain dew bottle::initialStock=>60', '::1', 'inventory', 4),
(77, '2024-09-12 12:29:10', 8, 'add new product', 'empty', 'product_name	=>Acerola ::category=>Food and Beverages::buyingPrice=>1000::unitcost=>3000::productImage=>../../../../assets/images/uploads/acerola.jpg', '::1', 'products', 5),
(78, '2024-09-12 12:29:10', 8, 'add initial product stock', 'empty', 'product_name=>Acerola ::initialStock=>40', '::1', 'inventory', 5),
(79, '2024-09-12 12:30:16', 8, 'add new product', 'empty', 'product_name	=>Apricot::category=>Food and Beverages::buyingPrice=>1000::unitcost=>4000::productImage=>../../../../assets/images/uploads/apricot.jpg', '::1', 'products', 6),
(80, '2024-09-12 12:30:16', 8, 'add initial product stock', 'empty', 'product_name=>Apricot::initialStock=>10', '::1', 'inventory', 6),
(81, '2024-09-12 13:59:33', 6, 'add new product', 'empty', 'product_name	=>Babaco::category=>Food and Beverages::buyingPrice=>1000::unitcost=>3000::productImage=>../../../../assets/images/uploads/babaco.jpg', '::1', 'products', 7),
(82, '2024-09-12 13:59:33', 6, 'add initial product stock', 'empty', 'product_name=>Babaco::initialStock=>145', '::1', 'inventory', 7),
(83, '2024-09-12 14:12:47', 6, 'add new product', 'empty', 'product_name	=>Coacola::category=>Food and Beverages::buyingPrice=>5000::unitcost=>10000::productImage=>../../../../assets/images/uploads/coacola.jpg', '::1', 'products', 8),
(84, '2024-09-12 14:12:47', 6, 'add initial product stock', 'empty', 'product_name=>Coacola::initialStock=>1000', '::1', 'inventory', 8),
(85, '2024-09-12 16:52:40', 8, 'add new product', 'empty', 'product_name	=>Ackee::category=>Food and Beverages::buyingPrice=>1000::unitcost=>2000::productImage=>../../../../assets/images/uploads/ackee.jpg', '::1', 'products', 9),
(86, '2024-09-12 16:52:40', 8, 'add initial product stock', 'empty', 'product_name=>Ackee::initialStock=>20', '::1', 'inventory', 9),
(87, '2024-09-12 16:54:25', 8, 'add new product', 'empty', 'product_name	=>Avocado::category=>Food and Beverages::buyingPrice=>500::unitcost=>1000::productImage=>../../../../assets/images/uploads/avocado.jpg', '::1', 'products', 10),
(88, '2024-09-12 16:54:25', 8, 'add initial product stock', 'empty', 'product_name=>Avocado::initialStock=>12', '::1', 'inventory', 10),
(89, '2024-09-12 16:55:33', 8, 'add new product', 'empty', 'product_name	=>coconut::category=>Food and Beverages::buyingPrice=>1000::unitcost=>2000::productImage=>../../../../assets/images/uploads/coconut.jpg', '::1', 'products', 11),
(90, '2024-09-12 16:55:33', 8, 'add initial product stock', 'empty', 'product_name=>coconut::initialStock=>135', '::1', 'inventory', 11),
(91, '2024-09-12 17:27:51', 8, 'add new product', 'empty', 'product_name	=>Daiiad::category=>Food and Beverages::buyingPrice=>3232::unitcost=>323232::productImage=>../../../../assets/images/uploads/date.jpg', '::1', 'products', 12),
(92, '2024-09-12 17:27:51', 8, 'add initial product stock', 'empty', 'product_name=>Daiiad::initialStock=>132', '::1', 'inventory', 12),
(93, '2024-09-15 23:00:17', 8, 'edit product stock', '122', '123', '::1', 'inventory', 3),
(94, '2024-09-15 23:00:32', 8, 'edit product stock', '123', '124', '::1', 'inventory', 3),
(95, '2024-09-15 23:01:13', 8, 'edit product stock', '124', '123', '::1', 'inventory', 3),
(96, '2024-09-15 23:01:19', 8, 'edit product stock', '123', '14', '::1', 'inventory', 3),
(97, '2024-09-15 23:01:31', 8, 'add new product stock', '14', 'newStock=>9::expiryDate=>', '::1', 'inventory', 3),
(98, '2024-09-15 23:01:43', 8, 'add new product stock', '23', 'newStock=>3::expiryDate=>', '::1', 'inventory', 3),
(99, '2024-09-18 11:16:25', 6, 'edit product stock', '20', '0', '::1', 'inventory', 9),
(100, '2024-09-18 11:17:56', 6, 'edit product stock', '0', '1', '::1', 'inventory', 9),
(101, '2024-09-18 11:56:46', 6, 'edit product stock', '26', '0', '::1', 'inventory', 3),
(102, '2024-09-18 11:58:23', 6, 'edit product stock', '0', '10', '::1', 'inventory', 3),
(103, '2024-09-18 12:03:50', 6, 'edit product stock', '9', '1', '::1', 'inventory', 6),
(104, '2024-09-18 12:04:22', 6, 'edit product stock', '0', '10', '::1', 'inventory', 6),
(105, '2024-09-18 12:18:33', 6, 'edit product stock', '0', '10', '::1', 'inventory', 9),
(106, '2024-09-18 12:19:37', 6, 'add new product stock', '0', 'newStock=>10::expiryDate=>2024-11-09', '::1', 'inventory', 9),
(107, '2024-09-18 12:33:45', 8, 'edit product stock', '10', '1', '::1', 'inventory', 3),
(108, '2024-09-23 22:50:31', 8, 'edit product stock', '0', '1', '::1', 'inventory', 3),
(109, '2024-09-23 22:50:54', 8, 'edit product stock', '1', '10', '::1', 'inventory', 3);

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
  `productImage` varchar(300) DEFAULT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `buying_price`, `unitcost`, `productImage`, `expiry_date`) VALUES
(3, 'Pine Apple', 'Food and Beverages', 1500, 2000, '../../../../assets/images/uploads/PineApple.jpg', '2024-08-31'),
(5, 'Acerola  new fruits ug', 'Food and Beverages', 1000, 3000, '../../../../assets/images/uploads/acerola.jpg', '2024-09-20'),
(6, 'Apricot', 'Food and Beverages', 1000, 4000, '../../../../assets/images/uploads/apricot.jpg', '2024-09-28'),
(7, 'Babaco', 'Food and Beverages', 1000, 3000, '../../../../assets/images/uploads/babaco.jpg', '2024-10-12'),
(8, 'Coacola', 'Food and Beverages', 5000, 10000, '../../../../assets/images/uploads/coacola.jpg', '2024-09-27'),
(9, 'Ackee', 'Food and Beverages', 1000, 2000, '../../../../assets/images/uploads/ackee.jpg', '2024-10-12'),
(10, 'Avocado', 'Food and Beverages', 500, 1000, '../../../../assets/images/uploads/avocado.jpg', '2024-09-20'),
(12, 'Dates', 'Food and Beverages', 3232, 50000, '../../../../assets/images/uploads/date.jpg', '2024-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(255) NOT NULL,
  `employee_id` int(255) DEFAULT NULL,
  `product_id` int(255) DEFAULT NULL,
  `product_Name` varchar(300) DEFAULT NULL,
  `qty` int(255) DEFAULT NULL,
  `total` int(255) DEFAULT NULL,
  `profit` int(255) NOT NULL,
  `date_of_sale` date NOT NULL,
  `sale_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `employee_id`, `product_id`, `product_Name`, `qty`, `total`, `profit`, `date_of_sale`, `sale_time`) VALUES
(410, 1, 4, 'Snacks', 4, 8000, 8000, '2024-08-10', '00:10:02'),
(426, 6, 13, 'Pine Apple', 1, 5000, 5000, '2024-08-19', '18:52:46'),
(427, 6, 12, 'soap', 1000000000, 2000, 2000, '2024-08-19', '18:53:13'),
(428, 6, 8, 'sauvage', 1, 100000, 100000, '2024-08-19', '18:53:13'),
(429, 6, 9, 'Milk', 1, 1500, 1400, '2024-08-19', '18:53:13'),
(430, 6, 13, 'Pine Apple', 1, 5000, 5000, '2024-08-19', '18:53:13'),
(431, 6, 12, 'soap', 1, 2000, 2000, '2024-08-19', '18:53:13'),
(432, 6, 4, 'Snacks', 1, 2000, 2000, '2024-08-19', '18:53:13'),
(433, 6, 4, 'Snacks', 1, 2000, 2000, '2024-08-19', '18:53:13'),
(434, 6, 7, 'Sugar', 1, 5000, 2000, '2024-08-19', '18:53:13'),
(435, 6, 7, 'Sugar', 1, 5000, 2000, '2024-08-19', '18:53:13'),
(436, 6, 10, 'Water', 1, 1000, 500, '2024-08-19', '18:53:13'),
(437, 6, 8, 'sauvage', 1, 100000, 100000, '2024-08-19', '18:53:13'),
(438, 6, 12, 'soap', 1, 2000, 2000, '2024-08-19', '18:53:13'),
(439, 6, 13, 'Pine Apple', 1, 5000, 5000, '2024-08-19', '18:53:13'),
(440, 6, 4, 'Snacks', 1, 2000, 2000, '2024-08-19', '18:53:13'),
(441, 6, 12, 'soap', 1, 2000, 2000, '2024-08-19', '18:53:13'),
(442, 6, 9, 'Milk', 1, 1500, 1400, '2024-08-19', '18:53:13'),
(443, 6, 8, 'sauvage', 1, 100000, 100000, '2024-08-19', '18:53:13'),
(444, 6, 7, 'Sugar', 1, 5000, 2000, '2024-08-19', '18:53:13'),
(445, 6, 7, 'Sugar', 1, 5000, 2000, '2024-08-19', '18:53:13'),
(446, 6, 10, 'Water', 1, 1000, 500, '2024-08-19', '18:53:13'),
(447, 6, 13, 'Pine Apple', 1, 5000, 5000, '2024-08-19', '18:53:13'),
(448, 6, 12, 'soap', 1, 2000, 2000, '2024-08-19', '18:53:13'),
(449, 6, 9, 'Milk', 1, 1500, 1400, '2024-08-19', '18:53:14'),
(450, 6, 10, 'Water', 1, 1000, 500, '2024-08-19', '18:53:14'),
(451, 6, 4, 'Snacks', 1, 2000, 2000, '2024-08-19', '18:53:14'),
(452, 6, 7, 'Sugar', 1, 5000, 2000, '2024-08-19', '18:53:14'),
(453, 6, 13, 'Pine Apple', 910009, 5000, 5000, '2024-08-19', '18:53:14'),
(454, 6, 12, 'soap', 1, 2000, 2000, '2024-08-19', '18:53:14'),
(455, 6, 4, 'Snacks', 1, 2000, 2000, '2024-08-19', '18:53:14'),
(457, 6, 4, 'Snacks', 1, 2000, 2000, '2024-08-19', '18:53:14'),
(458, 6, 10, 'Water', 1, 1000, 500, '2024-08-19', '18:53:14'),
(459, 6, 7, 'Sugar', 1, 5000, 2000, '2024-08-19', '18:53:14'),
(460, 6, 7, 'Sugar', 1, 5000, 2000, '2024-08-19', '18:53:14'),
(461, 6, 10, 'Water', 1000000, 1000, 500, '2024-08-19', '18:53:14'),
(472, 6, 9, 'Milk', 1, 1500, 1400, '2024-08-21', '22:45:04'),
(473, 6, 13, 'Pine Apple', 1, 5000, 5000, '2024-08-21', '22:45:04'),
(474, 6, 8, 'sauvage', 1, 100000, 100000, '2024-08-21', '22:45:04'),
(475, 6, 9, 'Milk', 1, 1500, 1400, '2024-08-21', '23:31:08'),
(476, 6, 1, 'Water Melon', 1, 1000, -4000, '2024-08-23', '13:27:00'),
(477, 6, 3, 'Pine Apple', 1, 2000, 5000, '2024-08-23', '13:28:47'),
(478, 8, 4, 'Mountain dew bottle', 1, 1000, 200, '2024-09-12', '12:11:50'),
(479, 6, 7, 'Babaco', 1, 3000, 2000, '2024-09-16', '16:18:50'),
(480, 6, 6, 'Apricot', 1, 4000, 3000, '2024-09-16', '17:10:11'),
(481, 6, 8, 'Coacola', 1, 10000, 5000, '2024-09-16', '17:17:15'),
(482, 6, 8, 'Coacola', 1, 10000, 5000, '2024-09-16', '17:17:15'),
(483, 6, 5, 'Acerola  new fruits ug', 1, 3000, 2000, '2024-09-16', '18:06:45'),
(484, 6, 9, 'Ackee', 1, 2000, 1000, '2024-09-18', '11:21:24'),
(485, 6, 6, 'Apricot', 1, 4000, 3000, '2024-09-18', '12:04:01'),
(486, 6, 6, 'Apricot', 1, 4000, 3000, '2024-09-18', '12:04:28'),
(487, 6, 9, 'Ackee', 10, 20000, 10000, '2024-09-18', '12:18:47'),
(488, 6, 7, 'Babaco', 1, 3000, 2000, '2024-09-18', '12:31:02'),
(489, 6, 8, 'Coacola', 1, 10000, 5000, '2024-09-18', '12:31:02'),
(490, 6, 3, 'Pine Apple', 1, 2000, 500, '2024-09-18', '12:34:33'),
(491, 6, 5, 'Acerola  new fruits ug', 1, 3000, 2000, '2024-09-28', '22:08:43');

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
(186, 8, '2024-08-11 18:34:54', '2024-08-11 18:36:32'),
(187, 8, '2024-08-11 18:36:36', '2024-08-11 18:38:43'),
(188, 8, '2024-08-11 18:38:50', '2024-08-11 18:39:22'),
(189, 8, '2024-08-11 18:40:00', '2024-08-11 18:42:30'),
(190, 8, '2024-08-11 18:43:44', NULL),
(191, 8, '2024-08-12 08:50:11', NULL),
(192, 8, '2024-08-12 09:01:52', NULL),
(193, 8, '2024-08-12 09:12:29', '2024-08-12 09:15:31'),
(194, 8, '2024-08-12 09:15:43', '2024-08-12 09:26:03'),
(195, 8, '2024-08-12 09:26:11', NULL),
(196, 8, '2024-08-12 09:36:36', NULL),
(197, 8, '2024-08-12 10:08:48', '2024-08-12 10:18:47'),
(198, 8, '2024-08-12 10:18:53', NULL),
(199, 6, '2024-08-12 10:24:54', '2024-08-12 10:29:24'),
(200, 8, '2024-08-12 10:30:16', '2024-08-12 10:33:02'),
(201, 8, '2024-08-12 10:33:33', NULL),
(202, 8, '2024-08-12 10:45:16', '2024-08-12 11:29:21'),
(203, 8, '2024-08-12 11:29:40', NULL),
(204, 8, '2024-08-12 12:53:30', NULL),
(205, 8, '2024-08-12 15:57:31', NULL),
(206, 8, '2024-08-12 16:43:33', '2024-08-12 16:45:55'),
(207, 8, '2024-08-12 16:47:21', NULL),
(208, 8, '2024-08-13 13:26:41', NULL),
(209, 8, '2024-08-13 13:28:04', '2024-08-13 13:32:22'),
(210, 8, '2024-08-13 13:32:32', NULL),
(211, 8, '2024-08-13 13:33:36', NULL),
(212, 8, '2024-08-13 13:40:24', NULL),
(213, 8, '2024-08-13 13:43:33', NULL),
(214, 8, '2024-08-13 13:44:41', '2024-08-13 13:45:38'),
(215, 8, '2024-08-13 13:45:44', NULL),
(216, 8, '2024-08-13 13:46:49', NULL),
(217, 8, '2024-08-13 13:47:35', NULL),
(218, 8, '2024-08-13 13:50:53', NULL),
(219, 8, '2024-08-13 13:52:12', NULL),
(220, 8, '2024-08-13 13:54:11', '2024-08-13 13:55:05'),
(221, 8, '2024-08-13 13:55:11', '2024-08-13 13:55:50'),
(222, 8, '2024-08-13 13:55:55', '2024-08-13 13:56:30'),
(223, 8, '2024-08-13 13:56:36', NULL),
(224, 8, '2024-08-19 09:02:24', NULL),
(225, 8, '2024-08-19 09:10:12', NULL),
(226, 8, '2024-08-19 09:26:53', '2024-08-19 09:30:03'),
(227, 8, '2024-08-19 09:30:08', NULL),
(228, 8, '2024-08-19 09:40:37', '2024-08-19 09:44:00'),
(229, 8, '2024-08-19 09:44:11', NULL),
(230, 8, '2024-08-19 09:46:11', NULL),
(231, 8, '2024-08-19 09:56:39', NULL),
(232, 8, '2024-08-19 10:01:11', NULL),
(233, 8, '2024-08-19 10:07:05', '2024-08-19 10:14:43'),
(234, 8, '2024-08-19 10:11:34', '2024-08-19 10:20:45'),
(235, 8, '2024-08-19 10:14:49', '2024-08-19 10:14:52'),
(236, 8, '2024-08-19 10:15:00', '2024-08-19 10:20:40'),
(237, 8, '2024-08-19 10:21:10', '2024-08-19 10:24:45'),
(238, 8, '2024-08-19 10:24:51', NULL),
(239, 8, '2024-08-19 10:36:49', '2024-08-19 10:39:35'),
(240, 8, '2024-08-19 10:39:40', '2024-08-19 10:49:59'),
(241, 8, '2024-08-19 10:50:04', '2024-08-19 11:01:33'),
(242, 8, '2024-08-19 11:01:45', NULL),
(243, 8, '2024-08-19 11:32:02', NULL),
(244, 6, '2024-08-19 11:34:20', NULL),
(245, 8, '2024-08-19 11:47:15', '2024-08-19 11:51:08'),
(246, 8, '2024-08-19 11:51:13', NULL),
(247, 8, '2024-08-19 12:33:59', NULL),
(248, 8, '2024-08-19 12:56:15', '2024-08-19 12:58:37'),
(249, 6, '2024-08-19 13:01:27', NULL),
(250, 8, '2024-08-19 14:07:56', '2024-08-19 14:24:23'),
(251, 8, '2024-08-19 14:34:43', NULL),
(252, 8, '2024-08-19 14:46:05', NULL),
(253, 6, '2024-08-19 15:52:41', NULL),
(254, 8, '2024-08-19 16:41:55', '2024-08-19 16:41:58'),
(255, 8, '2024-08-19 16:43:01', NULL),
(256, 6, '2024-08-19 16:45:45', NULL),
(257, 8, '2024-08-19 16:50:09', NULL),
(258, 8, '2024-08-19 17:24:47', NULL),
(259, 8, '2024-08-19 17:41:43', NULL),
(260, 8, '2024-08-19 18:42:31', NULL),
(261, 8, '2024-08-19 18:43:59', NULL),
(262, 8, '2024-08-19 18:49:20', NULL),
(263, 8, '2024-08-19 18:53:26', '2024-08-19 18:56:06'),
(264, 8, '2024-08-19 18:56:25', NULL),
(265, 8, '2024-08-19 18:59:32', '2024-08-19 18:59:38'),
(266, 8, '2024-08-19 19:00:18', '2024-08-19 19:05:40'),
(267, 8, '2024-08-19 19:05:45', '2024-08-19 19:11:02'),
(268, 8, '2024-08-20 10:18:16', '2024-08-20 10:19:01'),
(269, 8, '2024-08-20 10:19:29', '2024-08-20 10:20:12'),
(270, 8, '2024-08-20 10:20:21', NULL),
(271, 8, '2024-08-20 10:34:45', '2024-08-20 10:36:15'),
(272, 8, '2024-08-20 10:36:33', NULL),
(273, 8, '2024-08-20 11:06:12', NULL),
(274, 8, '2024-08-20 11:06:31', '2024-08-20 11:13:48'),
(275, 8, '2024-08-20 11:15:37', '2024-08-20 11:16:24'),
(276, 8, '2024-08-20 11:16:42', '2024-08-20 11:19:25'),
(277, 8, '2024-08-20 11:19:49', NULL),
(278, 8, '2024-08-20 11:26:26', NULL),
(279, 8, '2024-08-20 11:37:15', '2024-08-20 11:37:33'),
(280, 8, '2024-08-20 11:37:42', NULL),
(281, 8, '2024-08-21 08:18:19', NULL),
(282, 8, '2024-08-21 08:38:57', '2024-08-21 08:39:37'),
(283, 8, '2024-08-21 08:40:21', NULL),
(284, 8, '2024-08-21 08:54:52', NULL),
(285, 8, '2024-08-21 09:41:19', NULL),
(286, 8, '2024-08-21 11:25:43', '2024-08-21 12:06:43'),
(287, 8, '2024-08-21 12:40:00', '2024-08-21 12:57:08'),
(288, 8, '2024-08-21 15:48:05', '2024-08-21 16:51:37'),
(289, 6, '2024-08-21 16:51:52', '2024-08-21 16:53:53'),
(290, 8, '2024-08-21 16:54:05', NULL),
(291, 8, '2024-08-21 17:12:09', '2024-08-21 17:16:34'),
(292, 8, '2024-08-21 17:17:24', NULL),
(293, 8, '2024-08-21 17:32:02', NULL),
(294, 8, '2024-08-21 17:32:03', '2024-08-21 17:41:02'),
(295, 8, '2024-08-21 17:41:46', NULL),
(296, 8, '2024-08-21 18:01:01', NULL),
(297, 8, '2024-08-21 18:31:06', '2024-08-21 18:33:21'),
(298, 6, '2024-08-21 18:33:36', '2024-08-21 18:40:10'),
(299, 6, '2024-08-21 18:40:19', '2024-08-21 18:42:02'),
(300, 6, '2024-08-21 18:43:43', NULL),
(301, 6, '2024-08-21 18:53:21', '2024-08-21 19:02:26'),
(302, 6, '2024-08-21 19:02:37', '2024-08-21 19:35:32'),
(303, 6, '2024-08-21 19:35:41', NULL),
(304, 8, '2024-08-21 19:45:31', '2024-08-21 20:02:14'),
(305, 6, '2024-08-21 20:05:56', '2024-08-21 20:06:17'),
(306, 6, '2024-08-21 20:06:35', '2024-08-21 20:44:23'),
(307, 8, '2024-08-21 20:31:26', '2024-08-21 20:44:17'),
(308, 8, '2024-08-22 11:49:55', NULL),
(309, 8, '2024-08-22 15:24:11', NULL),
(310, 8, '2024-08-22 16:32:21', NULL),
(311, 8, '2024-08-22 17:13:36', '2024-08-22 17:20:17'),
(312, 8, '2024-08-22 17:20:37', NULL),
(313, 8, '2024-08-22 21:27:20', NULL),
(314, 8, '2024-08-23 09:17:26', NULL),
(315, 8, '2024-08-23 09:46:30', NULL),
(316, 6, '2024-08-23 10:25:01', NULL),
(317, 8, '2024-08-23 10:37:51', NULL),
(318, 8, '2024-08-23 13:59:19', '2024-08-23 13:59:26'),
(319, 6, '2024-08-23 13:59:40', '2024-08-23 14:01:23'),
(320, 8, '2024-08-23 14:06:43', NULL),
(321, 8, '2024-08-26 06:44:23', NULL),
(322, 6, '2024-08-26 06:57:09', '2024-08-26 06:57:46'),
(323, 8, '2024-08-26 07:20:38', NULL),
(324, 8, '2024-08-28 07:22:38', '2024-08-28 07:41:01'),
(325, 8, '2024-09-01 14:20:47', NULL),
(326, 8, '2024-09-01 14:52:18', NULL),
(327, 8, '2024-09-01 15:02:45', NULL),
(328, 8, '2024-09-01 15:07:17', '2024-09-01 15:08:18'),
(329, 8, '2024-09-01 15:08:25', NULL),
(330, 8, '2024-09-01 15:11:21', NULL),
(331, 8, '2024-09-09 16:41:19', NULL),
(332, 6, '2024-09-12 08:45:38', '2024-09-12 08:50:14'),
(333, 6, '2024-09-12 08:50:22', NULL),
(334, 8, '2024-09-12 08:58:24', NULL),
(335, 6, '2024-09-12 09:30:33', NULL),
(336, 6, '2024-09-12 10:59:52', NULL),
(337, 8, '2024-09-12 13:40:22', NULL),
(338, 6, '2024-09-12 13:40:39', '2024-09-12 13:43:12'),
(339, 6, '2024-09-12 13:43:34', NULL),
(340, 8, '2024-09-12 13:43:48', '2024-09-12 15:01:04'),
(341, 8, '2024-09-15 18:36:07', NULL),
(342, 6, '2024-09-15 18:37:56', '2024-09-15 18:55:28'),
(343, 8, '2024-09-15 18:55:37', NULL),
(344, 6, '2024-09-15 18:56:05', '2024-09-15 18:56:18'),
(345, 6, '2024-09-15 18:56:26', '2024-09-15 18:56:48'),
(346, 6, '2024-09-15 18:56:52', '2024-09-15 18:57:04'),
(347, 6, '2024-09-15 18:57:10', '2024-09-15 18:57:20'),
(348, 6, '2024-09-15 18:57:43', '2024-09-15 18:57:58'),
(349, 6, '2024-09-15 18:58:08', '2024-09-15 18:59:05'),
(350, 8, '2024-09-15 19:00:16', '2024-09-15 19:01:03'),
(351, 8, '2024-09-15 19:01:10', '2024-09-15 19:04:32'),
(352, 8, '2024-09-15 19:04:45', NULL),
(353, 6, '2024-09-15 19:08:45', NULL),
(354, 8, '2024-09-15 19:12:05', '2024-09-15 19:12:51'),
(355, 6, '2024-09-15 19:14:10', NULL),
(356, 8, '2024-09-15 19:17:39', NULL),
(357, 8, '2024-09-15 19:34:05', NULL),
(358, 8, '2024-09-15 20:00:54', NULL),
(359, 8, '2024-09-15 20:34:54', NULL),
(360, 8, '2024-09-15 20:46:14', NULL),
(361, 8, '2024-09-16 05:16:16', NULL),
(362, 8, '2024-09-16 05:32:10', NULL),
(363, 8, '2024-09-16 05:42:34', '2024-09-16 05:51:08'),
(364, 8, '2024-09-16 05:51:33', NULL),
(365, 8, '2024-09-16 06:01:48', NULL),
(366, 8, '2024-09-16 06:12:29', '2024-09-16 06:13:51'),
(367, 8, '2024-09-16 06:14:31', '2024-09-16 06:21:20'),
(368, 8, '2024-09-16 06:15:10', NULL),
(369, 8, '2024-09-16 08:05:32', NULL),
(370, 8, '2024-09-16 09:14:26', '2024-09-16 09:20:38'),
(371, 8, '2024-09-16 09:20:49', NULL),
(372, 8, '2024-09-16 09:37:22', '2024-09-16 09:37:34'),
(373, 8, '2024-09-16 09:37:59', '2024-09-16 09:43:38'),
(374, 8, '2024-09-16 09:43:59', NULL),
(375, 8, '2024-09-16 09:51:57', NULL),
(376, 8, '2024-09-16 11:13:05', NULL),
(377, 8, '2024-09-16 11:30:07', NULL),
(378, 8, '2024-09-16 11:42:04', NULL),
(379, 8, '2024-09-16 12:21:16', NULL),
(380, 8, '2024-09-16 13:10:33', '2024-09-16 13:14:41'),
(381, 6, '2024-09-16 13:14:57', '2024-09-16 13:15:27'),
(382, 6, '2024-09-16 13:15:39', NULL),
(383, 8, '2024-09-16 13:33:37', NULL),
(384, 6, '2024-09-16 13:34:13', NULL),
(385, 6, '2024-09-16 13:39:09', NULL),
(386, 6, '2024-09-16 14:09:31', NULL),
(387, 8, '2024-09-16 14:32:38', NULL),
(388, 6, '2024-09-16 14:33:03', NULL),
(389, 8, '2024-09-16 15:20:18', NULL),
(390, 8, '2024-09-16 16:21:55', '2024-09-16 16:22:19'),
(391, 8, '2024-09-18 05:48:54', NULL),
(392, 6, '2024-09-18 08:15:43', NULL),
(393, 6, '2024-09-18 08:44:17', '2024-09-18 08:47:19'),
(394, 6, '2024-09-18 08:47:26', NULL),
(395, 6, '2024-09-18 08:59:22', NULL),
(396, 6, '2024-09-18 09:17:09', NULL),
(397, 6, '2024-09-18 09:30:07', NULL),
(398, 8, '2024-09-18 09:31:57', NULL),
(399, 6, '2024-09-18 09:34:24', NULL),
(400, 8, '2024-09-18 10:21:09', '2024-09-18 10:25:00'),
(401, 8, '2024-09-18 10:25:10', NULL),
(402, 6, '2024-09-18 10:25:36', NULL),
(403, 8, '2024-09-18 10:37:54', NULL),
(404, 6, '2024-09-18 10:41:14', NULL),
(405, 8, '2024-09-18 13:15:40', NULL),
(406, 8, '2024-09-18 13:15:41', NULL),
(407, 8, '2024-09-18 13:36:02', NULL),
(408, 8, '2024-09-18 15:51:20', NULL),
(409, 8, '2024-09-19 13:31:36', NULL),
(410, 8, '2024-09-23 07:45:45', NULL),
(411, 8, '2024-09-23 19:48:42', NULL),
(412, 8, '2024-09-25 08:35:26', '2024-09-25 08:35:54'),
(413, 8, '2024-09-25 08:36:00', NULL),
(414, 8, '2024-09-27 10:30:33', NULL),
(415, 8, '2024-09-27 14:08:38', NULL),
(416, 8, '2024-09-27 17:42:16', NULL),
(417, 8, '2024-09-27 20:07:25', NULL),
(418, 8, '2024-09-28 19:05:40', '2024-09-28 19:06:19'),
(419, 6, '2024-09-28 19:08:26', '2024-09-28 19:08:48'),
(420, 8, '2024-09-28 19:08:54', NULL),
(421, 8, '2024-09-29 13:13:11', NULL),
(422, 8, '2024-09-29 13:24:18', NULL),
(423, 8, '2024-09-29 17:45:34', NULL),
(424, 8, '2024-10-06 09:41:01', '2024-10-06 09:42:31'),
(425, 8, '2024-10-07 13:44:53', '2024-10-07 13:46:43'),
(426, 6, '2024-10-07 13:47:03', NULL),
(427, 8, '2024-10-07 13:47:19', NULL),
(428, 8, '2024-10-14 18:08:01', NULL),
(429, 8, '2024-10-14 18:08:01', NULL),
(430, 8, '2024-10-14 18:22:26', NULL),
(431, 8, '2024-10-18 05:43:08', '2024-10-18 05:47:36'),
(432, 6, '2024-10-18 05:47:46', NULL),
(433, 8, '2024-10-22 15:22:42', '2024-10-22 15:23:51'),
(434, 8, '2024-10-23 18:44:28', NULL);

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
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogindetails`
--
ALTER TABLE `userlogindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;

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
