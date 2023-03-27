-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 05:08 AM
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
-- Table structure for table `pie_chart`
--

CREATE TABLE `pie_chart` (
  `asset_name` varchar(1000) NOT NULL,
  `year_of_difference` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pie_chart`
--

INSERT INTO `pie_chart` (`asset_name`, `year_of_difference`) VALUES
('Mobile', '2011'),
('Mobile', '21'),
('Mobile', '2020'),
('9y9h', '11'),
('faf', '10'),
('gwrgsf', '16'),
('gsfgsfg', '22'),
('sgw', '16'),
('gwg', '20'),
('gwrg', '26'),
('wgr', '18'),
('va', '8'),
('wrg', '21'),
('wrgwr', '26'),
('fgq', '136'),
('hw', '21'),
('gwr', '22'),
('wrgw', '20'),
('Pots', '3'),
('moitr', '16'),
('dress', '16'),
('ggyu', '14'),
('fie', '21'),
('2', '25'),
('8444nhb', '11'),
('gwrg', '31'),
('eeeeeee', '169'),
('shoes', '1'),
('pyramid', '133'),
('ice cream', '59'),
('effil tower', '22'),
('cubic', '15'),
('Usre', '2'),
('Stick', '3'),
('yelow', '6'),
('usi', '16'),
('jier', '14'),
('Table', '13'),
('Transformer', '16'),
('Mobile', '1'),
('Charger', '6'),
('Laptop', '11'),
('Bag', '15'),
('Cable', '7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
