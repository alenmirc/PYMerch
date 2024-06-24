-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 08:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pymerch`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'T-shirt'),
(2, 'Bag'),
(3, 'Jacket'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `target_file` varchar(255) NOT NULL,
  `product_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `category`, `user`, `target_file`, `product_link`) VALUES
(9, 'Iskolar Stacked - Tanglaw Clothing Streetwear Collection', 1, 5, 'uploads/f2.png', 'https://shopee.ph/Iskolar-Stacked-Tanglaw-Clothing-Streetwear-Collection-i.273965663.10254638738?sp_atk=d9905e65-e5d6-476c-9d5d-9efe3ba65363&xptdk=d9905e65-e5d6-476c-9d5d-9efe3ba65363'),
(10, 'PUP Classic Raglan Drifit Tee - Tanglaw Clothing Raglan Collection', 1, 5, 'uploads/f4.png', 'https://shopee.ph/PUP-Classic-Raglan-Drifit-Tee-Tanglaw-Clothing-Raglan-Collection-i.273965663.11109489483?xptdk=f6c204c2-c16f-4c99-ae2f-29a60bc273d2'),
(11, 'Tanglaw Windbreaker Jacket', 3, 5, 'uploads/f3.png', 'https://shopee.ph/Tanglaw-Windbreaker-Jacket-i.273965663.6946831872?xptdk=ab47a6cf-793b-43ae-bb3e-87141f16682f'),
(12, 'Tanglaw Klasika Tote Bag - Tanglaw Clothing Klasika Tote Bag Collection', 2, 5, 'uploads/f1.png', 'https://shopee.ph/Tanglaw-Klasika-Tote-Bag-Tanglaw-Clothing-Klasika-Tote-Bag-Collection-i.273965663.14763009310?sp_atk=e9e7daf0-2475-4e6d-8839-032c1a9fc944');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(2, 'alen', 'alen', 'alen'),
(3, 'alenn', 'alenn', 'alenn'),
(5, 'alentest', 'alentest@gmail.com', 'alentest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_user` (`user`),
  ADD KEY `product_category` (`category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
