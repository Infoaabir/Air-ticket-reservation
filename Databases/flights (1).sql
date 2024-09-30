-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:53 PM
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
-- Database: `flights`
--

-- --------------------------------------------------------

--
-- Table structure for table `flightdata`
--

CREATE TABLE `flightdata` (
  `fnumber` varchar(6) NOT NULL,
  `id` int(11) NOT NULL,
  `dairport` text NOT NULL,
  `aairport` text NOT NULL,
  `duration` varchar(100) NOT NULL,
  `dtime` varchar(5) NOT NULL,
  `dlocation` varchar(255) NOT NULL,
  `atime` varchar(5) NOT NULL,
  `alocation` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flightdata`
--

INSERT INTO `flightdata` (`fnumber`, `id`, `dairport`, `aairport`, `duration`, `dtime`, `dlocation`, `atime`, `alocation`, `date`) VALUES
('UL305', 1, 'ADB', 'CMB', '5h 10m', '18:30', 'Abu Dhabi, UAE', '23:00', 'Colombo, Sri Lanka', '2023-06-21'),
('UC294', 2, 'CMB', 'MIM', '4h 40m', '08:30', 'Colombo, Sri Lanka', '13:00', 'Mumbai, India', '2023-06-26'),
('UC294', 3, 'CMB', 'DHI', 'required', '08:30', 'Colombo, Sri Lanka', '13:00', 'Delhi, India', '2023-06-26'),
('UL783', 4, 'LND', 'WDC', '10h 50m', '07:45', 'London, UK', '17:15', 'Washington DC, USA', '2023-06-21'),
('UL349', 5, 'JSA', 'PSA', '13h 20m', '23:00', 'Jeddah, Saudi Arabia', '14:45', 'Paris, France', '2023-06-16'),
('UL672', 6, 'TKY', 'MIA', '09h 10m', '12:30', 'Tokyo, JPN', '09:20', 'Miami, USA', '2023-06-23'),
('UL934', 7, 'JKI', 'BJC', '7h 15m', '07:30', 'Jakarta, Indonesia', '15:15', 'Beijing, China', '2023-06-30'),
('tg', 21, 'xcv', 'm', 'mf', 'fmn', 'bcbsd', 'fn', 'b', '2023-07-07'),
('', 25, '', '', '', '', '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flightdata`
--
ALTER TABLE `flightdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flightdata`
--
ALTER TABLE `flightdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
