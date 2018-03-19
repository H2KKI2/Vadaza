-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 dec 2017 om 17:24
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vadaza`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Nokia'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Huawei');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(1, 3, '127.0.0.1', -1, 1),
(2, 9, '127.0.0.1', -1, 1),
(3, 1, '127.0.0.1', -1, 1),
(4, 2, '127.0.0.1', -1, 1),
(5, 4, '127.0.0.1', -1, 1),
(6, 6, '127.0.0.1', -1, 1),
(7, 5, '127.0.0.1', -1, 1),
(8, 8, '127.0.0.1', -1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'smartphones'),
(3, ''),
(4, ''),
(5, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 2, 7, 1, '07M47684BS5725041', 'Completed'),
(2, 2, 2, 1, '07M47684BS5725041', 'Completed');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 2, 2, 'Samsung Galaxy note 8', 500, ' ', 's-l300.jpg', 'samsung'),
(2, 2, 3, 'iPhone 7 plus', 700, '', 'iphone7-200x300.jpg', 'apple'),
(3, 2, 3, 'iphone 5', 300, '', 'iphone5-200x300.png', 'apple'),
(4, 2, 3, 'iPhone 6s', 600, '', 'iphone_offer-200x300.jpg', 'apple'),
(5, 2, 2, 'Samsung Galaxy s8 plus', 800, '', '05ddd967c0de7fec70cc50041f3b2906.jpg', 'samsung'),
(6, 2, 1, 'Nokia 6', 350, '', 'Nokia.jpg', 'Nokia'),
(7, 2, 1, 'Nokia 8', 500, '', 'nokia-8.jpg', 'Nokia'),
(8, 2, 4, 'Sony Xperia XZ', 400, '', 'd6f63882b46db445c68b7eb5d1097075.jpg', 'Sony'),
(9, 2, 3, 'iPhone 6 plus', 500, '', 'iphone6-6plus-200x300.jpg', 'apple'),
(10, 2, 6, 'Huawei Mate 8 PRO', 600, '', 'huawei_mate_8_nxt-l09_mate8_nxt-l09_200x300_mpi_1_96640.jpg', 'Huawei'),
(11, 2, 6, 'Huawei P10', 120, '', '41itREcOj1L._SY300_QL70_.jpg', 'Huawei'),
(12, 2, 6, 'Huawei p10 plus', 150, '', 'HuaweiP10_front.jpg', 'Huawei'),
(13, 2, 6, 'Huawei Mate 9', 600, '', 'mate_9_grey-min-min (2).png', 'Huawei'),
(14, 2, 6, 'Huawei NOVA', 400, '', 'huawei-nova-plus.jpg', 'Huawei'),
(15, 2, 6, 'Huawei P9', 500, '', '1381372.jpg', 'Huawei'),
(16, 2, 6, 'Huawei P8', 600, '', 'Huawei P8.JPG', 'Huawei'),
(17, 2, 6, 'Huawei Y7', 500, '', 'u=2617750268,1826573435&fm=72.jpg', 'Huawei'),
(19, 2, 6, 'Huawei Y6', 300, '', 'huawei_honor_6_play_mya_al10_200x300_mpi_1_111740.jpg', 'Huawei'),
(20, 10, 7, '', 0, '', '', ''),
(21, 10, 7, '', 0, '', '', ''),
(22, 10, 7, '', 0, '', '', ''),
(23, 10, 7, '', 0, '', '', ''),
(24, 10, 7, '', 0, '', '', ''),
(25, 10, 7, '', 0, '', '', ''),
(26, 10, 7, '', 0, '', '', ''),
(27, 10, 7, '', 0, '', '', ''),
(32, 10, 7, '', 0, '', '', ''),
(33, 2, 2, 'Samsung Galaxy s8', 800, '', 'small_201703291643477760.jpg', 'samsung'),
(34, 2, 4, 'Sony Xperia XA1', 300, '', 'sony-xperia-xa1-ultra-n.jpg', 'sony'),
(35, 10, 7, '', 0, '', '', ''),
(36, 2, 5, 'LG V30', 150, '', 'basic-shot-1.png', 'LG'),
(37, 2, 5, 'LG G6', 200, '', 'lgg6-200x300.png', 'LG'),
(38, 2, 4, 'Sony Xperia L1', 3500, '', 'smartphone-sony-xperia-l1-noir.jpg', 'sony'),
(39, 2, 5, 'LG Q6', 250, '', 'lg_q6_2017_q6_2017_200x300_mpi_1_110804.jpg', 'LG'),
(40, 10, 7, '', 0, '', '', ''),
(45, 2, 2, 'Samsung Galaxy s7 edge', 500, '0', 'samsung_galaxy_s7_edge-200x300.png', 'samsung'),
(46, 2, 2, 'Samsung Galaxy s7', 400, '', 'samsung_galaxy_s7-200x300.png', 'samsung');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Mathias', 'prinsen', 'Mathias.prinsen@gmail.com', '', '', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexen voor tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexen voor tabel `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT voor een tabel `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
