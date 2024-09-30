-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:54 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', '123'),
('sliit@gmail.com', 'sliit123');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Title` varchar(50) NOT NULL,
  `id` int(5) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `confirmPassword` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `Country` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `phoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Title`, `id`, `firstName`, `lastName`, `email`, `Password`, `confirmPassword`, `date`, `Country`, `language`, `phoneNumber`) VALUES
('Miss', 1, 'Mohamed', 'Aabir', 'mohamedaabir03@gmail.com', '123', '123', '2023-05-30', 'RS', 'Englishd', 6435344),
('Mr', 2, 'mas', 'fgh', 'g@gmail.com', '111', '111', '2023-06-08', 'AF', 'English', 45789008),
('Miss', 3, 'masdf', 'fghg', 'g2@gmail.com', 'ss', 'ss', '2031-09-15', 'AF', 'English', 98765432),
('Miss', 4, 'masdf', 'fghg', 'g42@gmail.com', '33', '33', '2031-09-15', 'AF', 'English', 987654321),
('Miss', 5, 'masdf', 'fghg', 'g42aa2@gmail.com', 'ee', 'ee', '2031-09-09', 'AF', 'English', 45680765),
('Mr', 6, 'qwe', 'qwe', 'qwe@gmail.com', '123', '123', '2009-07-15', 'AU', 'English', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`,`lastName`,`email`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
