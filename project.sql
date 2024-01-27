-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 02:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `product_name` varchar(30) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`product_name`, `product_image`, `product_price`, `product_category`) VALUES
('Product 1', 'periph1.jfif', '$19.99', 'peripherique'),
('Product 18', 'periph5.jfif', '$49.99', 'peripherique'),
('Product 19', 'gaming5.jfif', '$49.99', 'PC GAMING'),
('Product 2', 'portable1.jfif', '$29.99', 'portable'),
('Product 20', 'portable5.jfif', '$49.99', 'portable'),
('Product 9', 'gaming1.jfif', '$49.99', 'PC GAMING');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(30) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_image`, `product_price`, `product_category`) VALUES
('Product 1', 'periph1.jfif', '$19.99', 'peripherique'),
('Product 2', 'portable1.jfif', '$29.99', 'portable'),
('Product 3', 'av1.jfif', '$24.99', 'audio/video'),
('Product 4', 'periph2.jfif', '$39.99', 'peripherique'),
('Product 5', 'av2.jfif', '$14.99', 'audio/video'),
('Product 6', 'periph3.jfif', '$49.99', 'peripherique'),
('Product 7', 'portable2.jfif', '$49.99', 'portable'),
('Product 8', 'av3.jfif', '$49.99', 'audio/video'),
('Product 9', 'gaming1.jfif', '$49.99', 'PC GAMING'),
('Product 10', 'portable3.jfif', '$49.99', 'portable'),
('Product 11', 'gaming2.jfif', '$49.99', 'PC GAMING'),
('Product 12', 'av4.jfif', '$49.99', 'audio/video'),
('Product 13', 'portable4.jfif', '$49.99', 'portable'),
('Product 14', 'periph4.jfif', '$49.99', 'peripherique'),
('Product 15', 'gaming3.jfif', '$49.99', 'PC GAMING'),
('Product 16', 'av5.jfif', '$49.99', 'audio/video'),
('Product 17', 'gaming4.jfif', '$49.99', 'PC GAMING'),
('Product 18', 'periph5.jfif', '$49.99', 'peripherique'),
('Product 19', 'gaming5.jfif', '$49.99', 'PC GAMING'),
('Product 20', 'portable5.jfif', '$49.99', 'portable');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `mdp`) VALUES
('amenbrahem@gmail.com', '123'),
('amine@gmail.com', '123'),
('aminekaroui@gmail.com', '1234'),
('ayoub@gmail.com', '852');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`product_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
