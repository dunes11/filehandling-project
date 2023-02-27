-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 01:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `narayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, '@narayan', 'narayan1234', '2023-02-20 09:09:56', '2023-02-21 05:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `username` varchar(35) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `address` tinytext DEFAULT NULL,
  `father_name` varchar(35) DEFAULT NULL,
  `mother_name` varchar(35) DEFAULT NULL,
  `dob` varchar(35) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profile` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `username`, `mobile`, `email`, `address`, `father_name`, `mother_name`, `dob`, `gender`, `created_at`, `updated_at`, `profile`) VALUES
(1, 'narayan swami', '@bhains', '9664259840', 'narayanaswami750@gmail.com', 'bikaner se aage', 'papa', 'mummy', '2000-04-11', 'male', '2023-02-23 10:04:46', '2023-02-23 10:04:46', 'image/2023-02-23@bhains1696245120narayan.jpg'),
(2, 'narayan swami', '@bhains', '9664259840', 'narayanaswami750@gmail.com', 'bikaner se aage', 'papa', 'mummy', '2000-04-11', 'male', '2023-02-23 10:06:05', '2023-02-23 10:06:05', 'image/2023-02-23@bhains1702450486narayan.jpg'),
(3, 'fsdfsdf', 'dsf', '232323', 'narayanaswami750@gmail.com', 'fdfsd', 'sffdsf', 'mummy', '2012-01-31', 'male', '2023-02-23 10:18:57', '2023-02-23 10:18:57', 'image/2023-02-23dsf241660785pexels.jpg'),
(4, 'sfdsf', 'fdsf', '34343', 'super@gmail.com', 'sdf', 'er', 'fdf', '0052-02-05', 'male', '2023-02-23 10:27:39', '2023-02-23 10:27:39', ''),
(5, 'slimpy', '@slimpy', '966425885', 'slimpywer@gmail.com', 'near railway station las vegas', 'mr broad', 'jenny', '1995-08-21', 'female', '2023-02-23 10:42:38', '2023-02-23 10:42:38', 'image/2023-02-23@slimpy719877003slimpy.jpg'),
(7, 'deen swami', '@deen', '96565354', 'deen212@gmail.com', 'bikaner se phele', 'babulal', 'bhgwati', '2013-08-09', 'male', '2023-02-23 11:08:43', '2023-02-23 11:08:43', ''),
(8, 'narayan swami', 'df', '34343', 'super@gmail.com', 'fsdfsdf', 'dff', 'dfdf', '1998-04-04', 'male', '2023-02-23 11:10:10', '2023-02-23 11:10:10', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
