-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 03:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educ`
--

-- --------------------------------------------------------

--
-- Table structure for table `edu_news`
--

CREATE TABLE `edu_news` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `edu_users`
--

CREATE TABLE `edu_users` (
  `id` int(100) NOT NULL,
  `acc_user` text NOT NULL,
  `acc_password` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `level` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `edu_users`
--

INSERT INTO `edu_users` (`id`, `acc_user`, `acc_password`, `first_name`, `last_name`, `email`, `level`, `created`) VALUES
(5, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Darius', 'Jakaitis', 'hhh@gmail.com', '3', '2023-01-09 15:36:26'),
(11, 'Testuser', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'TestUser', 'TestUserLastName', 'tesuser@testing.com', '1', '2023-02-01 02:39:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edu_users`
--
ALTER TABLE `edu_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`(1024));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edu_users`
--
ALTER TABLE `edu_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
