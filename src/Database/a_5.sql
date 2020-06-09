-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2020 at 08:27 PM
-- Server version: 10.3.17-MariaDB-0+deb10u1
-- PHP Version: 7.3.10-1+0~20191008.45+debian9~1.gbp365209

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `price`, `description`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 'piso 1', 600, 'dgbsdgbsg', 22, '2020-02-20 18:48:26', '2020-02-20 18:48:26', NULL),
(17, 'casa4', 45, 'bgdfb', 22, '2020-02-20 18:51:39', '2020-02-20 18:51:39', NULL),
(18, 'casa d', 345, 'bgdfb', 22, '2020-02-20 18:52:29', '2020-02-20 18:52:29', NULL),
(28, 'casa', 45, 'bgdfb', 22, '2020-02-20 20:01:24', '2020-02-20 20:01:24', NULL),
(29, 'casa1', 45, 'bgdfb', 22, '2020-02-20 20:04:08', '2020-02-20 20:04:08', NULL),
(30, 'casa gava', 150000, 'adasasfag', 22, '2020-02-20 20:10:16', '2020-02-20 20:10:16', NULL),
(32, 'piso', 200000, 'dgbsdgbsg', 22, '2020-02-24 19:51:34', '2020-02-24 19:51:34', NULL),
(33, 'casa Castelldefles', 400000, 'Casa adosada', 22, '2020-03-02 18:03:18', '2020-03-02 18:03:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roles`, `created_at`, `updated_at`, `deleted_at`, `email`, `telf`) VALUES
(22, 'elena', '$argon2i$v=19$m=65536,t=4,p=1$RVhvRHlHcXo3RVRnMVRHTg$NCqfVkEFh87FufpZZWxs9jFw9f3AUnvwBE/zQcz2Byo', NULL, '2020-02-17 18:55:02', '2020-02-17 18:55:02', NULL, 'elena@gmail.com', 123456),
(23, 'maria', '$argon2i$v=19$m=65536,t=4,p=1$YjJrbW1OU1NOLzZQT3c2TA$Wkvezb0/zj8apqrgIIxVQyN38vcbkv2U5yRV4Pgk19Y', NULL, '2020-02-17 18:56:58', '2020-02-17 18:56:58', NULL, 'maria@gmail.com', 123456),
(24, 'luisa', '$argon2i$v=19$m=65536,t=4,p=1$aDlSRVpzc0RXajBsSzFYYw$u2beDLMYKscr65TorqjKRm6CNU8nfWTekTDApuny5Po', NULL, '2020-02-20 19:56:52', '2020-02-20 19:56:52', NULL, 'luisa@gmail.com', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
