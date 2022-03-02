-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2022 at 02:50 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noorlogic`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_product_meta_lookup`
--

CREATE TABLE `wp_wc_product_meta_lookup` (
  `product_id` bigint(20) NOT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `virtual` tinyint(1) DEFAULT 0,
  `downloadable` tinyint(1) DEFAULT 0,
  `min_price` decimal(19,4) DEFAULT NULL,
  `max_price` decimal(19,4) DEFAULT NULL,
  `onsale` tinyint(1) DEFAULT 0,
  `stock_quantity` double DEFAULT NULL,
  `stock_status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'instock',
  `rating_count` bigint(20) DEFAULT 0,
  `average_rating` decimal(3,2) DEFAULT 0.00,
  `total_sales` bigint(20) DEFAULT 0,
  `tax_status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'taxable',
  `tax_class` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_wc_product_meta_lookup`
--

INSERT INTO `wp_wc_product_meta_lookup` (`product_id`, `sku`, `virtual`, `downloadable`, `min_price`, `max_price`, `onsale`, `stock_quantity`, `stock_status`, `rating_count`, `average_rating`, `total_sales`, `tax_status`, `tax_class`) VALUES
(11, '', 0, 0, '45.0000', '45.0000', 1, 4, 'instock', 0, '0.00', 1, 'taxable', ''),
(14, '', 0, 0, '10.0000', '10.0000', 0, -1, 'onbackorder', 0, '0.00', 4, 'taxable', ''),
(16, '', 0, 0, '60.0000', '60.0000', 0, 5, 'instock', 0, '0.00', 0, 'taxable', ''),
(18, '', 0, 0, '48.0000', '48.0000', 1, 4, 'instock', 0, '0.00', 1, 'taxable', ''),
(23, '', 0, 0, '50.0000', '50.0000', 1, 6, 'instock', 0, '0.00', 0, 'taxable', ''),
(25, '', 0, 0, '10.0000', '10.0000', 0, 5, 'instock', 0, '0.00', 0, 'taxable', ''),
(109, '', 0, 0, '0.0000', '0.0000', 0, NULL, 'outofstock', 0, '0.00', 0, 'taxable', ''),
(110, '', 0, 0, '5.0000', '5.0000', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(191, '', 0, 0, '10.0000', '10.0000', 0, NULL, 'onbackorder', 0, '0.00', 0, 'taxable', 'parent'),
(193, '', 0, 0, '10.0000', '10.0000', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(194, '', 0, 0, '10.0000', '10.0000', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(195, '', 0, 0, '10.0000', '10.0000', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_wc_product_meta_lookup`
--
ALTER TABLE `wp_wc_product_meta_lookup`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `virtual` (`virtual`),
  ADD KEY `downloadable` (`downloadable`),
  ADD KEY `stock_status` (`stock_status`),
  ADD KEY `stock_quantity` (`stock_quantity`),
  ADD KEY `onsale` (`onsale`),
  ADD KEY `min_max_price` (`min_price`,`max_price`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
