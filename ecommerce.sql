-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 12:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `role`) VALUES
('1', 'tejasri', 'teja123', 'admin');

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `category`) VALUES
(1, 'NAVY BLUE MID RISE TWILL BLAZE', 3000, 'images/Men1.jpg', 'c01'),
(2, 'Casual Shirts For Men', 1200, 'images/Men2.jpg', 'c01'),
(3, 'SNITCH Shirt', 980, 'images/Men3.jpg', 'c01'),
(4, 'T-Shirt', 700, 'images/Men4.jpg', 'c01'),
(5, ' Drop Women\'s Renata Dress', 1500, 'images/women1.jpg', 'c02'),
(6, 'Women Pala Silk Saree', 3000, 'images/Women2.jpg', 'c02'),
(7, 'straight black dress', 1250, 'images/Women3.jpg', 'c02'),
(8, 'Simple white women shirt', 600, 'images/Women4.jpg', 'c02'),
(9, 'Floral Printed Dress', 1500, 'images/kid1.jpg', 'c03'),
(10, 'Fashion Dream', 1200, 'images/kid2.jpg', 'c03'),
(11, 'Hopscotch Girls Casual Dress', 2000, 'images/kid3.jpg', 'c03'),
(12, 'Casual wear', 1800, 'images/kid4.jpg', 'c03'),
(13, 'Beats Headphone', 22700, 'images/sp1.jpg', 'c04'),
(14, 'Mens FanaticRunning Shoe', 5000, 'images/shoe1.jpg', 'c04'),
(15, 'Men\'s Watch New Wheels', 2500, 'images/watch1.jpg', 'c04'),
(16, 'Anchor Bracelet', 2500, 'images/chain1.jpg', 'c04');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `first_name`, `last_name`, `phone`, `registration_time`, `password`) VALUES
(78, 'ttt@gmail.com', 'ttt', 'ttt', 4578877, '2024-03-13 05:26:53', '9990775155c3518a0d7917f7780b24aa');

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `item_id`, `status`) VALUES
(49, 78, 2, 'Confirmed'),
(50, 78, 2, 'Confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
