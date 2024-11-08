-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2024 at 01:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialmedia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_tb`
--

CREATE TABLE `blog_tb` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `article` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_tb`
--

INSERT INTO `blog_tb` (`id`, `author`, `topic`, `article`, `created_at`) VALUES
(1, '', 'FrontEnd Development', 'Frontend development is so so nice', '2024-10-23 11:46:25'),
(2, 'Deshnic', 'FrontEnd Development', 'Front end development is cosmos', '2024-10-23 11:47:35'),
(3, 'Nkwenti', 'Backend development', 'Backend dev is cosmos', '2024-10-23 12:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'Deshnic', '$2y$10$0pOOpyJU51MjjxOjbUr.oeyg9Xiaeq3R5wB4IXzVYhKbdfV5Xt.LC', 'nkwentideshnic@gmail.com', '2024-10-22 11:27:24'),
(2, 'Nkwenti', '$2y$10$gh/HxYiJ4o207jELLTf1SOyyV2jfdOVyDCyMaNDxwWDRPUDatSA/W', 'nkwentideshnic@gmail.com', '2024-10-23 07:24:42'),
(3, 'Santung', '$2y$10$LUICmgpiBXU1il0YjbCIqOLDAFD3bzsPKzBS8hSc6dRxberi26uAa', 'santungdeshnic@gmail.com', '2024-11-08 12:17:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_tb`
--
ALTER TABLE `blog_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_tb`
--
ALTER TABLE `blog_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
