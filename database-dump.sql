-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 11:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nxm_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `email`, `registration_date`) VALUES
(4, 'Winston', 'Brown', '98765445678', 'wbrownthe2nd@gmail.com', '2024-11-09 10:16:48'),
(5, 'Winston', 'Brown', '98765445678', 'wbrownthe2nd@gmail.com', '2024-11-09 10:17:00'),
(6, 'Winston', 'Brown', '(876) 776-5783', 'wbrownthe2nd@gmail.com', '2024-11-09 10:17:10'),
(7, 'Winston', 'Brown', '(876) 776-5783', 'wbrownthe2nd@gmail.com', '2024-11-09 10:17:48'),
(8, 'Winston', 'Brown', '(876) 776-5783', 'wbrownthe2nd@gmail.com', '2024-11-09 10:19:46'),
(9, 'Winston', 'Brown', '(876) 776-5783', 'wbrownthe2nd@gmail.com', '2024-11-09 10:22:18'),
(10, 'Winston', 'Brown', '(876) 776-5783', 'wbrownthe2nd@gmail.com', '2024-11-09 10:24:50'),
(11, 'Winston', 'Brown', '(876) 776-5783', 'wbrownthe2nd@gmail.com', '2024-11-09 10:25:51'),
(12, 'Winston', 'Brown', '(876) 776-5783', 'wbrownthe2nd@gmail.com', '2024-11-09 10:26:27'),
(13, 'Winston', 'Brown', '(876) 776-5783', 'dddd@df.b', '2024-11-09 10:28:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
