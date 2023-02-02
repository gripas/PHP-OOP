-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 01:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `pred_news`
--

CREATE TABLE `pred_news` (
  `id` int(100) NOT NULL,
  `title` text COLLATE utf8_lithuanian_ci NOT NULL,
  `content` text COLLATE utf8_lithuanian_ci NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pred_users`
--

CREATE TABLE `pred_users` (
  `id` int(100) NOT NULL,
  `acc_user` text COLLATE utf8_lithuanian_ci NOT NULL,
  `acc_password` text COLLATE utf8_lithuanian_ci NOT NULL,
  `first_name` text COLLATE utf8_lithuanian_ci NOT NULL,
  `last_name` text COLLATE utf8_lithuanian_ci NOT NULL,
  `email` text COLLATE utf8_lithuanian_ci NOT NULL,
  `level` text COLLATE utf8_lithuanian_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pred_users`
--
ALTER TABLE `pred_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`(1024));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pred_users`
--
ALTER TABLE `pred_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
