-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 04:19 AM
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
  `work_order` varchar(1000) NOT NULL,
  `date1` date NOT NULL,
  `service_visit` varchar(500) NOT NULL,
  `contract1` varchar(500) NOT NULL,
  `primary_name` varchar(500) NOT NULL,
  `source` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_register_asset`
--

INSERT INTO `service_register_asset` (`work_order`, `date1`, `service_visit`, `contract1`, `primary_name`, `source`) VALUES
('mobile phone', '0000-00-00', 'canada', '545', 'john', 'Lighthouse.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
