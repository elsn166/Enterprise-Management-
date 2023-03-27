-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 07:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vewon_register_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_register_asset`
--

CREATE TABLE `service_register_asset` (
  `id` int(11) NOT NULL,
  `work_order` varchar(1000) NOT NULL,
  `date1` date NOT NULL,
  `service_visit` varchar(500) NOT NULL,
  `contract1` varchar(500) NOT NULL,
  `primary_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_register_asset`
--

INSERT INTO `service_register_asset` (`id`, `work_order`, `date1`, `service_visit`, `contract1`, `primary_name`) VALUES
(1, 'Thermometer', '2016-07-05', 'Poland', '25', 'Jocky'),
(2, 'Keyboard', '2019-04-08', 'Canada', '6', 'Mike'),
(8, 'Mouse', '2017-08-03', 'Mother Board', '4', 'Keyl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_register_asset`
--
ALTER TABLE `service_register_asset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_register_asset`
--
ALTER TABLE `service_register_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
