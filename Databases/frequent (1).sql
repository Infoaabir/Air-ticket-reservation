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
-- Database: `frequent`
--

-- --------------------------------------------------------

--
-- Table structure for table `frequent`
--

CREATE TABLE `frequent` (
  `Title` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `passportNumber` varchar(50) NOT NULL,
  `nationalty` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `countryCode` varchar(50) NOT NULL,
  `mobileNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `frequent`
--

INSERT INTO `frequent` (`Title`, `firstName`, `middleName`, `lastName`, `passportNumber`, `nationalty`, `email`, `password`, `dateOfBirth`, `country`, `countryCode`, `mobileNumber`) VALUES
('', '0', '0', '0', '0', 'a', 'aa', 'qwe@gmail.com', '2023-07-05', 'Sri Lanka', '2', 48888888),
('', 'Mr', 'aa', 'aa', 'aa', 'qq', 'qw', 'admin@gmail.com', '2023-06-06', 'Sri Lanka', '12', 11234455);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
