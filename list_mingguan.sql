-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 08:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ampera`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_mingguan`
--

CREATE TABLE `list_mingguan` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `n_minggu` varchar(255) NOT NULL,
  `e1` varchar(255) NOT NULL,
  `le1` varchar(255) NOT NULL,
  `e2` varchar(255) NOT NULL,
  `le2` varchar(255) NOT NULL,
  `e3` varchar(255) NOT NULL,
  `le3` varchar(255) NOT NULL,
  `e4` varchar(255) NOT NULL,
  `le4` varchar(255) NOT NULL,
  `e5` varchar(255) NOT NULL,
  `le5` varchar(255) NOT NULL,
  `e6` varchar(255) NOT NULL,
  `le6` varchar(255) NOT NULL,
  `e7` varchar(255) NOT NULL,
  `le7` varchar(255) NOT NULL,
  `jamita` varchar(255) NOT NULL,
  `epistel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table ampera.list_mingguan: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `ampera`.`list_mingguan`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_mingguan`
--
ALTER TABLE `list_mingguan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_mingguan`
--
ALTER TABLE `list_mingguan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
