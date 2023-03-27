-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 04:17 AM
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
-- Table structure for table `register_asset`
--

CREATE TABLE `register_asset` (
  `Country` varchar(200) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `city` varchar(200) NOT NULL,
  `sites` varchar(200) NOT NULL,
  `type1` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `line_up` varchar(200) NOT NULL,
  `name_of_asset` varchar(200) NOT NULL,
  `asset_no` varchar(500) NOT NULL,
  `voltage_level` varchar(200) NOT NULL,
  `current_rating` varchar(200) NOT NULL,
  `short_circuit` varchar(200) NOT NULL,
  `risk_capacity` varchar(200) NOT NULL,
  `frequency` varchar(200) NOT NULL,
  `installed_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_asset`
--

INSERT INTO `register_asset` (`Country`, `site_name`, `address1`, `city`, `sites`, `type1`, `room`, `line_up`, `name_of_asset`, `asset_no`, `voltage_level`, `current_rating`, `short_circuit`, `risk_capacity`, `frequency`, `installed_date`) VALUES
('Zimbabwe', 'bolt', 'hiel', 'harjruky', '', 'electrical', '5', '2', 'shoes', '10', '123', '554', '254', '2842', '484', '2020-12-03'),
('Ethiopia', 'mammies', 'pyramid', 'desert', '', 'mechanical', '7', '15', 'pyramid', '15', '215', '48', '218', '248', '65', '1888-05-03'),
('Iceland', 'icey juice', 'Hymaen', 'Argymn', '', 'mechanical', '78', '45', 'ice cream', '48', '48', '548', '248', '2458', '2448', '1962-06-04'),
('France', 'cheese fac', 'fanfe', 'poland', '', 'electrical', '48', '457', 'effil tower', '4', '574', '248', '448', '248', '254', '1999-05-07'),
('Cuba', 'carib', 'caribbean', 'vidta', '', 'mechanical', '58', '4542', 'cubic', '421', '444', '3443', '4', '454', '441', '2006-06-08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
