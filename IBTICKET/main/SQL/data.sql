-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 03:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_cus` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  `slip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_cus`, `first_name`, `last_name`, `email`, `phone`, `address`, `created`, `modified`, `status`, `slip`, `total_price`) VALUES
(1, 'm', 's', 'mongkonwith31@gmail.com', '123456789', '5', '2022-11-05 21:57:00', '2022-11-05 21:57:00', 1, NULL, 0.00),
(2, 'monnnnn', 's', 'mongkonwith31@gmail.com', '123456789', '5', '2022-11-05 21:59:44', '2022-11-05 21:59:44', 1, NULL, 0.00),
(3, 'asd', 'asd', 'mongkonwith31@gmail.com', '0123456789', ' 123456', '2022-11-06 20:06:01', '2022-11-06 20:06:01', 1, NULL, 0.00),
(4, '123', '12345', 'mongkonwith.luk@g.swu.ac.th', '1234567894', ' 123', '2022-11-06 20:08:18', '2022-11-06 20:08:18', 1, NULL, 0.00),
(5, '123', '12345', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-06 21:28:26', '2022-11-06 21:28:26', 1, NULL, 0.00),
(6, '123', '12345', 'mongkonwith.luk@g.swu.ac.th', '1234567894', ' 123', '2022-11-06 21:28:40', '2022-11-06 21:28:40', 1, NULL, 0.00),
(7, '123456', 'asdw', 'mongkon@gmail.com', '0954941263', '  sasdasdas', '2022-11-06 21:40:21', '2022-11-06 21:40:21', 1, '299042810_1459986161183444_2053560358537057088_n.jpg', 0.00),
(8, 'gg', 'gg', 'gg@gmail.com', '0000000000', ' 0000000000', '2022-11-07 12:27:16', '2022-11-07 12:27:16', 1, '119174820_3371689309520588_4276268677815527310_n.jpg', 0.00),
(9, 'ชื่อ', 'นามสกุล', 'mongkonwith.luk@g.swu.ac.th', '0954941263', ' ที่อยู่', '2022-11-09 01:18:09', '2022-11-09 01:18:09', 1, '280669797_5042199442530391_8509934428420062241_n.jpg', 0.00),
(10, '123', '12345', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-09 01:54:31', '2022-11-09 01:54:31', 1, '281435118_5042202585863410_9138114466233064610_n.jpg', 0.00),
(20, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '  123', '2022-11-09 02:43:33', '2022-11-09 02:43:33', 1, '280669797_5042199442530391_8509934428420062241_n.jpg', 0.00),
(22, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-09 18:00:43', '2022-11-09 18:00:43', 1, '143631.jpg', 0.00),
(23, 'hgjghj', 'fchfhchhc', 'mong@g.swu.ac.th', '123456755555555', ' 12355555555555555', '2022-11-09 23:56:10', '2022-11-09 23:56:10', 1, 'เสาร์ 5.jpg', 0.00),
(24, 'hgjghj', 'fchfhchhc', 'mong@g.swu.ac.th', '123456755555555', '  12355555555555555', '2022-11-09 23:59:38', '2022-11-09 23:59:38', 1, 'Screenshot 2022-10-22 010131.png', 0.00),
(25, 'hgjghj', 'fchfhchhc', 'mong@g.swu.ac.th', '123456755555555', '   12355555555555555', '2022-11-10 00:00:06', '2022-11-10 00:00:06', 1, '84524630_2827230680666522_1189893450674208768_n.jpg', 0.00),
(26, 'hgjghj', 'fchfhchhc', 'mong@g.swu.ac.th', '123456755555555', '    12355555555555555', '2022-11-10 00:00:32', '2022-11-10 00:00:32', 1, '84524630_2827230680666522_1189893450674208768_n.jpg', 0.00),
(27, 'mon', 's', 'monk@g.swu.ac.th', '12345', '123', '2022-11-10 22:50:35', '2022-11-10 22:50:35', 1, '84524630_2827230680666522_1189893450674208768_n.jpg', 0.00),
(28, 'mon', 's', 'monk@g.swu.ac.th', '12345', ' 123', '2022-11-10 22:55:09', '2022-11-10 22:55:09', 1, '84524630_2827230680666522_1189893450674208768_n.jpg', 0.00),
(29, 'mon', 's', 'monk@g.swu.ac.th', '12345', '  123', '2022-11-10 22:59:11', '2022-11-10 22:59:11', 1, 'หน้า.png', 0.00),
(30, 'monjhjlh', 'shjlhlhj', 'monkjhljhl@g.swu.ac.th', '12345k.n', '   123', '2022-11-10 23:07:14', '2022-11-10 23:07:14', 1, 'Screenshot 2021-08-18 142223.png', 0.00),
(31, 'monjhjlh', 'shjlhlhj', 'monkjhljhl@g.swu.ac.th', '12345k.n', '    123', '2022-11-11 01:00:28', '2022-11-11 01:00:28', 1, 'Screenshot 2021-08-18 142223.png', 0.00),
(32, 'lukj', 'deee', 'lak@gmail.com', '12365498778', ' sda', '2022-11-12 21:13:55', '2022-11-12 21:13:55', 1, 'Untitled-1.png', 0.00),
(33, 'lukjgfdgfd', 'deeefdgdfg', 'lakdfgfd@gmail.com', '12365498778', '  sdadfg', '2022-11-12 21:17:38', '2022-11-12 21:17:38', 1, 'หลัง.png', 0.00),
(34, 'lukjgfdgfd', 'deeefdgdfg', 'lakdfgfd@gmail.com', '12365498778', '   sdadfg', '2022-11-12 23:39:56', '2022-11-12 23:39:56', 1, '133798813_397532331513898_1332364890800837023_n.jpg', 0.00),
(35, 'lukjgfdgfd', 'deeefdgdfg', 'lakdfgfd@gmail.com', '12365498778', '    sdadfg', '2022-11-12 23:58:56', '2022-11-12 23:58:56', 1, '05.jpg', 0.00),
(36, 'lukjgfdgfd', 'deeefdgdfg', 'lakdfgfd@gmail.com', '12365498778', '     sdadfg', '2022-11-13 00:01:57', '2022-11-13 00:01:57', 1, 'Screenshot 2021-08-18 142223.png', 0.00),
(37, 'lukjgfdgfd', 'deeefdgdfg', 'lakdfgfd@gmail.com', '12365498778', '      sdadfg', '2022-11-13 00:41:31', '2022-11-13 00:41:31', 1, '02.png', 0.00),
(38, 'monnnnn', 'llllll', 'admin@gmail.com', '0954941263', ' sdasd', '2022-11-13 00:50:24', '2022-11-13 00:50:24', 1, 'หลัง.png', 0.00),
(39, 'monnnnn', 'llllll', 'admin@gmail.com', '0954941263', 'sdasd', '2022-11-13 00:52:25', '2022-11-13 00:52:25', 1, 'Screenshot 2021-08-18 142223.png', 0.00),
(40, 'monnnnn', 'llllll', 'admin@gmail.com', '0954941263', 'sdasd', '2022-11-13 00:53:56', '2022-11-13 00:53:56', 1, '05.jpg', 0.00),
(41, 'monnnnn', 'llllll', 'admin@gmail.com', '0954941263', ' sdasd', '2022-11-13 01:09:50', '2022-11-13 01:09:50', 1, 'หน้า.png', 0.00),
(42, 'monnnnn', 'llllll', 'admin@gmail.com', '0954941263', '  sdasd', '2022-11-13 01:13:36', '2022-11-13 01:13:36', 1, 'หลัง.png', 0.00),
(43, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-13 01:24:16', '2022-11-13 01:24:16', 1, 'Screenshot 2021-08-18 142223.png', 0.00),
(44, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-13 01:26:29', '2022-11-13 01:26:29', 1, 'หน้า.png', 0.00),
(45, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-13 01:29:14', '2022-11-13 01:29:14', 1, 'nqhRmHZU_400x400[1].jpg', 0.00),
(46, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-13 01:30:30', '2022-11-13 01:30:30', 1, 'port.jpg', 0.00),
(47, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', ' 123', '2022-11-13 01:32:53', '2022-11-13 01:32:53', 1, '280751504_5042199795863689_973637779630022504_n.jpg', 0.00),
(48, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '  123', '2022-11-13 01:37:23', '2022-11-13 01:37:23', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(49, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '   123', '2022-11-13 02:34:54', '2022-11-13 02:34:54', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(50, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-13 21:26:58', '2022-11-13 21:26:58', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(51, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', ' 123', '2022-11-13 21:28:47', '2022-11-13 21:28:47', 1, '302320353_636124688137282_1458055310626003902_n.png', 0.00),
(52, 'mong', 'fmgomo', 'monglfklg@gmail.com', 'sdasd', ' sdasd', '2022-11-13 21:54:18', '2022-11-13 21:54:18', 1, '1.jpg', 0.00),
(53, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-13 23:18:36', '2022-11-13 23:18:36', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(54, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-14 12:45:08', '2022-11-14 12:45:08', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(55, 'four', 'rawee', 'four@gmail.com', '123456789', ' 123456789', '2022-11-14 15:39:03', '2022-11-14 15:39:03', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(56, 'mongkonwith', 'srising', 'admin2@gmail.com', '0213564789', 'ที่อยู่ในการจัดส่ง', '2022-11-14 21:58:53', '2022-11-14 21:58:53', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(57, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-15 00:09:04', '2022-11-15 00:09:04', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(58, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-15 21:19:29', '2022-11-15 21:19:29', 1, 'ba154685-db18-4ac7-b318-a4a2b15b9d4c.jpg', 0.00),
(59, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '1234567894', '123', '2022-11-20 21:14:53', '2022-11-20 21:14:53', 1, 'cr.jpg', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `status_order` enum('1','2','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=ดำเนินการสั่งซื้อ 2=ยืนยันการสั่งซื้อ 0=ยกเลิกคำสั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `customer_id`, `grand_total`, `created`, `status_order`) VALUES
(5, 5, 10000.00, '2022-11-06 21:28:26', '0'),
(9, 9, 66000.00, '2022-11-09 01:18:09', '2'),
(10, 10, 15000.00, '2022-11-09 01:54:31', '2'),
(11, 20, 21000.00, '2022-11-09 02:43:33', '2'),
(12, 22, 2500.00, '2022-11-09 18:00:43', '0'),
(13, 23, 2500.00, '2022-11-09 23:56:10', '1'),
(14, 24, 2500.00, '2022-11-09 23:59:38', '1'),
(15, 25, 9000.00, '2022-11-10 00:00:06', '1'),
(16, 26, 2500.00, '2022-11-10 00:00:32', '1'),
(17, 27, 26000.00, '2022-11-10 22:50:35', '2'),
(18, 28, 15000.00, '2022-11-10 22:55:09', '0'),
(19, 29, 10000.00, '2022-11-10 22:59:11', '1'),
(20, 30, 2500.00, '2022-11-10 23:07:14', '0'),
(21, 31, 3000.00, '2022-11-11 01:00:28', '1'),
(22, 32, 19450.00, '2022-11-12 21:13:55', '1'),
(23, 33, 27450.00, '2022-11-12 21:17:38', '1'),
(24, 34, 2500.00, '2022-11-12 23:39:56', '1'),
(25, 35, 3950.00, '2022-11-12 23:58:56', '1'),
(26, 36, 40000.00, '2022-11-13 00:01:57', '1'),
(27, 37, 5500.00, '2022-11-13 00:41:31', '1'),
(28, 38, 2500.00, '2022-11-13 00:50:24', '1'),
(29, 39, 2500.00, '2022-11-13 00:52:25', '1'),
(30, 40, 2500.00, '2022-11-13 00:53:56', '1'),
(31, 41, 3000.00, '2022-11-13 01:09:50', '1'),
(32, 42, 2500.00, '2022-11-13 01:13:36', '1'),
(33, 43, 2500.00, '2022-11-13 01:24:16', '1'),
(34, 44, 2500.00, '2022-11-13 01:26:29', '1'),
(35, 45, 3950.00, '2022-11-13 01:29:14', '1'),
(36, 46, 2500.00, '2022-11-13 01:30:30', '1'),
(37, 47, 2500.00, '2022-11-13 01:32:53', '1'),
(38, 48, 10000.00, '2022-11-13 01:37:23', '1'),
(39, 49, 5000.00, '2022-11-13 02:34:54', '1'),
(40, 50, 10000.00, '2022-11-13 21:26:58', '1'),
(41, 51, 8500.00, '2022-11-13 21:28:47', '1'),
(42, 52, 2500.00, '2022-11-13 21:54:18', '1'),
(43, 53, 35450.00, '2022-11-13 23:18:36', '1'),
(44, 54, 2500.00, '2022-11-14 12:45:08', '0'),
(45, 55, 27500.00, '2022-11-14 15:39:03', '2'),
(46, 56, 5000.00, '2022-11-14 21:58:53', '1'),
(47, 57, 2500.00, '2022-11-15 00:09:04', '1'),
(48, 58, 8500.00, '2022-11-15 21:19:29', '1'),
(49, 59, 5500.00, '2022-11-20 21:14:53', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(6, 5, 9, 1),
(7, 5, 10, 1),
(11, 9, 4, 4),
(12, 9, 3, 5),
(13, 9, 2, 8),
(14, 9, 1, 7),
(15, 10, 10, 1),
(16, 10, 9, 1),
(17, 10, 1, 1),
(18, 11, 1, 1),
(19, 11, 10, 1),
(20, 11, 9, 1),
(21, 11, 2, 2),
(22, 12, 1, 1),
(23, 13, 1, 1),
(24, 14, 1, 1),
(25, 15, 2, 3),
(26, 16, 3, 1),
(27, 17, 4, 2),
(28, 17, 10, 1),
(29, 17, 9, 2),
(30, 17, 1, 2),
(31, 18, 2, 5),
(32, 19, 10, 1),
(33, 20, 9, 1),
(34, 21, 2, 1),
(35, 22, 4, 1),
(36, 22, 5, 1),
(37, 22, 9, 1),
(38, 22, 10, 1),
(39, 23, 10, 1),
(40, 23, 9, 1),
(41, 23, 5, 1),
(42, 23, 4, 1),
(43, 23, 3, 1),
(44, 23, 2, 1),
(45, 23, 1, 1),
(46, 24, 1, 1),
(47, 25, 5, 1),
(48, 26, 10, 4),
(49, 27, 3, 1),
(50, 27, 2, 1),
(51, 28, 1, 1),
(52, 29, 1, 1),
(53, 30, 1, 1),
(54, 31, 2, 1),
(55, 32, 1, 1),
(56, 33, 9, 1),
(57, 34, 1, 1),
(58, 35, 5, 1),
(59, 36, 9, 1),
(60, 37, 9, 1),
(61, 38, 10, 1),
(62, 39, 3, 1),
(63, 39, 1, 1),
(64, 40, 1, 4),
(65, 41, 4, 1),
(66, 41, 3, 1),
(67, 41, 2, 1),
(68, 42, 1, 1),
(69, 43, 10, 1),
(70, 43, 9, 1),
(71, 43, 5, 1),
(72, 43, 4, 1),
(73, 43, 3, 1),
(74, 43, 2, 2),
(75, 43, 1, 3),
(76, 44, 1, 1),
(77, 45, 10, 2),
(78, 45, 1, 3),
(79, 46, 9, 1),
(80, 46, 1, 1),
(81, 47, 1, 1),
(82, 48, 2, 2),
(83, 48, 1, 1),
(84, 49, 2, 1),
(85, 49, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `created`, `modified`, `status`, `link`) VALUES
(1, 'cr.jpg', 'Leo Chiangrai United', 'Ticket Season 2022/23          \n (All Match)                                                \nสนาม Leo Chiangrai Stadium \n-STAND : ไม่ระบุที่นั่ง\n', 2500.00, '2022-03-10 14:36:34', '2022-03-10 14:36:34', 1, 'checkout.php'),
(2, 'bangkok.jpg', 'True Bangkok United', 'Ticket Season 2022/23          \n (All Match)                                                \nสนาม สนามฟุตบอลธรรมศาสตร์ รังสิต\n\nSTAND : VIP Entrance\n', 3000.00, '2022-03-10 19:48:44', '2022-03-10 19:48:44', 1, 'https://www.youtube.com/watch?v=OJ7MIyKa9l4&ab_channel=AlynWee-Topic'),
(3, 'chonburi.jpg', 'Chonburi Football Club', 'Ticket Season 2022/23          \n (All Match)                                                \nสนาม ชลบุรี ยูทีเอ สเตเดี้ยม\n\n     ----STAND :ZONE VIP \n', 2500.00, '2022-03-10 12:43:49', '2022-03-10 12:43:49', 1, '\\main\\CHON.php'),
(4, 'port.jpg', 'Port FC', 'Ticket Season 2022/23          \n (All Match)                                                \nสนาม PAT Stadium ( Port FC )\n\nSTAND : ZONE VIP\n', 3000.00, '2022-03-10 21:53:00', '0000-00-00 00:00:00', 1, NULL),
(5, 'mun.png', 'Muangthong United FC  2022/23', 'Ticket Season 2022/23          \n (All Match)                                                \nสนาม The Thunderdome Stadium\nSTAND : E2, E3 (Gold Package)\n', 3950.00, '2022-03-10 21:53:01', '0000-00-00 00:00:00', 1, NULL),
(9, 'bg.png', 'BG Pathum United', 'Ticket Season 2022/23          \n (All Match)                                                \nสนาม บีจี สเตเดี้ยม  ( BG PU ) \n----STAND : W4 W6 NH', 2500.00, '2022-11-06 09:15:14', '2022-11-06 09:15:14', 1, NULL),
(10, 'burirum.jpg', 'BURIRAM UNITED', 'Ticket Season 2022/23 (All Match)                                               \nสนาม ช้างอารีนา (Chang ARENA) \nSTAND : A10 A11 (VIP Platinum)\n', 10000.00, '2022-11-06 09:15:14', '2022-11-06 09:15:14', 1, '\\main\\Burirum.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `urole`, `create_at`) VALUES
(1, 'kooooooo', 'sssssssssssss', 'admin2@gmail.com', '$2y$10$YtAcKL.cQWMRFE0JnNQI1.1Hb37hYPuD1GbrTw4R6l5OckXFzDaBa', 'admin', '2022-11-13 14:30:31'),
(2, 'look', 'sdas', 'mon@g.swu.ac.th', '$2y$10$iARcHzNjFB.4.WNgY1nJ6OUR.UP9kkdz3ZwuffnemPTbJAoYUlwlm', 'user', '2022-11-13 14:31:08'),
(3, 'mongkonwith', 'srising', 'mongkonwith.luk@g.swu.ac.th', '$2y$10$PhR/2BDvk2QhpYmOKHYCVOa9qJwXT9nDSQ7ahPdUeTbfcfFqUynYa', 'user', '2022-11-13 15:31:32'),
(4, 'win', 'zaza', 'win@gmail.com', '$2y$10$a.WIsE8NGzAzUySrP1mATuRxjR9HYZjK70G7ll32IDVvnEWYyFOyG', 'admin', '2022-11-14 05:22:56'),
(5, 'admin3', 'last', 'admin3@gmail.com', '$2y$10$etGCex8stHxkgB5oJqxaLuknILdj2fyPRkEmvzctNaxXI99sGrfbK', 'admin', '2022-11-14 08:36:14'),
(6, 'mongkonwith', 'sri', 'mongkonwith@g.swu.ac.th', '$2y$10$6mQW.ljjLvZY2TALcXQwJ.u08mIiWBMSWda1UWy5BHl/xYvLh0wTe', 'user', '2022-11-15 14:10:06'),
(7, 'four', 'rawee', 'four01@gmail.com', '$2y$10$AngQxJDZeuepZf.ylYxYpuelYV8MAQHcWritH30IB5da9VnL7hg16', 'user', '2022-11-15 14:32:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id_cus`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
