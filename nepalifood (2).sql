-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 07:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepalifood`
--
CREATE DATABASE IF NOT EXISTS `nepalifood` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nepalifood`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `C_ID` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `code` text NOT NULL,
  `register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`C_ID`, `full_name`, `email`, `password`, `code`, `register_date`) VALUES
(0, 'Shreeya Shrestha', 'shreeya.191542@ncit.edu.np', '67b0d6f6423bbbcadcaceec4cb481a99', '', '2023-07-18 05:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `ingredients` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `feature` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `ingredients`, `price`, `img_name`, `feature`, `active`) VALUES
(1, 'chowmein', 'veg/chicken/buff/Egg/Pork', '', '120', 'food_7616.jpg', 'Yes', 'Yes'),
(2, 'Momo', 'Veg/Chicken/Buff/Pork', '', '200', 'food_6589.png', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `nepali_table`
--

CREATE TABLE `nepali_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `additional` varchar(100) NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nepali_table`
--

INSERT INTO `nepali_table` (`id`, `quantity`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `additional`, `food`, `price`) VALUES
(1, 1, '120', '2023-06-28 08:43:57', 'ordered', 'Shreeya Shrestha', '9845986286', 'shreeyashrestha1821@gmail.com', 'gfg', '', 'chowmein', 120),
(3, 1, '200', '2023-07-19 05:23:51', 'ordered', 'Shreeya Shrestha', '9810219288', '', 'balkumari', '', 'Momo', 200),
(4, 1, '200', '2023-07-19 05:33:39', 'ordered', ' Shreeya Shrestha', '9810219286', '', 'balkumari', '', 'Momo', 200),
(5, 1, '200', '2023-07-19 05:35:01', 'ordered', '  Shreeya Shrestha', '4543526253', '', 'gfg', '', 'Momo', 200),
(6, 1, '200', '2023-07-19 05:36:29', 'ordered', '   Shreeya Shrestha', '7865432344', '', 'fgffdgf', 'hh', 'Momo', 200),
(7, 4, '800', '2023-07-19 05:37:35', 'ordered', '   Shreeya Shrestha', '4321567890', '', 'fgffdgf', '', 'Momo', 200),
(8, 6, '1200', '2023-07-19 05:42:32', 'ordered', '   Shreeya Shrestha', '9810219288', '', 'lalitpur', '', 'Momo', 200),
(9, 3, '600', '2023-07-19 05:43:26', 'ordered', '   Shreeya Shrestha', '8710292653', '', 'lalitpur', '', 'Momo', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nepali_table`
--
ALTER TABLE `nepali_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nepali_table`
--
ALTER TABLE `nepali_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
