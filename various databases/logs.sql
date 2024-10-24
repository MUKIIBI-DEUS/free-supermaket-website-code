-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 09:07 PM
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
(20, '2024-08-19 22:05:57', 8, 'update', 'sales_id=> 463::employee_id=>6::product_Id=>12::productName=>soap::qauntity=>1::Total=> 2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', 'sales_id=>463,employee_id=>6::product_id=>12::productName=>soap::qauntity=>1::Total=>2000::profits=>2000::DOS=>2024-08-19::sales_time=>18:53:14', '::1', 'sales', 463);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
