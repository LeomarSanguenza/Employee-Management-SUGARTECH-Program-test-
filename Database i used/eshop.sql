-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2025 at 08:50 AM
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
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmpID` int(250) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Salary` int(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Birthdate` date NOT NULL,
  `Username` varchar(150) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmpID`, `FirstName`, `LastName`, `Position`, `Salary`, `Gender`, `Birthdate`, `Username`, `created_at`, `updated_at`) VALUES
(1, 'Leomar', 'Sanguenza', 'Software Developer', 50000, 'Male', '2001-01-06', '', '2025-02-27', '2025-02-27'),
(2, 'Juan', 'Dela cruz', 'Operation', 20000, 'Male', '1999-01-01', NULL, '2025-02-28', '2025-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Item_ID` int(11) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `Remarks` varchar(150) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Item_ID`, `Image`, `Price`, `Remarks`, `created_at`, `updated_at`) VALUES
(1, '1711381716.jpg', 69, 'awfa', '2024-03-25', '2024-03-25'),
(2, '1711546824.png', 58, 'ready', '2024-03-27', '2024-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `UserRole` varchar(150) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Username`, `Password`, `UserRole`, `created_at`, `updated_at`) VALUES
(1, 'first', 'f', 'Marue', '$2y$10$T96I/NhTMehBuLRpE4n6l.QZqns9mm67eFf0buZh/j2n9LygWXYo6', 'Admin', '2025-02-28', '2025-02-28'),
(2, 'Leomar', 'Sanguenza', 'lsanguenza', '$2y$10$9Z2WkqqoFd439WOg/pI3DeIIbUZ1njLW94LcgSeaW.SU14K/ulPFe', 'Admin', '2025-02-28', '2025-02-28'),
(3, 'marue', 'sanguenza', 'Marue2nd', '$2y$10$KY0sfFGif8a6dReGxSLnVe2/OmSOY8ZsXzWLDEbBJ1FJSfOMaSlZ6', 'Admin', '2025-02-28', '2025-02-28'),
(6, 'admin', 'admin', 'admin', '$2y$10$EguRnq99SUkhHiA04tJpse9oiYvutK1ONMQaFl8pJnSlSrLEaur/e', 'Admin', '2025-03-01', '2025-03-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmpID`),
  ADD UNIQUE KEY `EmpID` (`EmpID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EmpID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
