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
-- Table structure for table `register_asset`
--

CREATE TABLE `register_asset` (
  `id` int(255) NOT NULL,
  `Country` varchar(200) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `city` varchar(200) NOT NULL,
  `sites` varchar(200) NOT NULL,
  `type1` varchar(200) NOT NULL,
  `building` varchar(200) NOT NULL,
  `floor_no` varchar(1000) NOT NULL,
  `room` varchar(200) NOT NULL,
  `line_up` varchar(200) NOT NULL,
  `name_of_asset` varchar(200) NOT NULL,
  `asset_no` varchar(500) NOT NULL,
  `quantity` varchar(1000) NOT NULL,
  `voltage_level` varchar(200) NOT NULL,
  `current_rating` varchar(200) NOT NULL,
  `short_circuit` varchar(200) NOT NULL,
  `risk_capacity` varchar(200) NOT NULL,
  `frequency` varchar(200) NOT NULL,
  `installed_date` date NOT NULL,
  `end_date` varchar(10) NOT NULL,
  `diff_old` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_asset`
--

INSERT INTO `register_asset` (`id`, `Country`, `site_name`, `address1`, `city`, `sites`, `type1`, `building`, `floor_no`, `room`, `line_up`, `name_of_asset`, `asset_no`, `quantity`, `voltage_level`, `current_rating`, `short_circuit`, `risk_capacity`, `frequency`, `installed_date`, `end_date`, `diff_old`) VALUES
(1, 'Vanuatu', 'ABC Company', 'Kety', 'Losh', '', 'electrical', '5', '1', '2', '4', 'Charger', '10', '20', '325', '485', '894', '84', '75', '2021-05-08', '2021-10-10', '0'),
(2, 'Denmark', 'DEF Company', 'Soye', 'Onta', '', 'mechanical', '2', '1', '6', '4', 'Transformer', '40', '52', '487', '563', '415', '575', '575', '2016-02-13', '2021-10-10', '5'),
(3, 'Haiti', 'DEF Company', 'Yie', 'Ued', '', 'mechanical', '3', '1', '4', '3', 'Switches', '25', '30', '875', '463', '472', '344', '453', '2013-11-24', '2021-10-10', '8'),
(4, 'Northern Mariana Islands', 'ABC Company', 'Sinet', 'Mefi', '', 'electrical', '2', '1', '4', '2', 'Solar Panel', '85', '42', '864', '289', '473', '785', '854', '2006-09-16', '2021-10-10', '15'),
(5, 'Falkland Islands (Malvinas)', 'ABC Company', 'Hut', 'Heaq', '', 'electrical', '1', '4', '3', '1', 'Cables', '5', '14', '258', '468', '147', '473', '482', '2015-04-08', '2021-10-10', '6'),
(6, 'Kazakhstan', 'DEF Company', 'Edut', 'Viny', '', 'mechanical', '1', '5', '4', '3', 'Batteries', '20', '35', '487', '967', '375', '738', '997', '2019-07-04', '2021-10-10', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_asset`
--
ALTER TABLE `register_asset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_asset`
--
ALTER TABLE `register_asset`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
