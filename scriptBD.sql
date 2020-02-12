-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 12, 2020 at 05:20 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Intelcost_bienes`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bien`
--

CREATE TABLE `Bien` (
  `Id` int(11) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Ciudad` varchar(100) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Codigo_Postal` varchar(30) DEFAULT NULL,
  `Tipo` varchar(100) DEFAULT NULL,
  `Precio` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bien`
--

INSERT INTO `Bien` (`Id`, `Direccion`, `Ciudad`, `Telefono`, `Codigo_Postal`, `Tipo`, `Precio`) VALUES
(1, 'Ap #549-7395 Ut Rd.', 'New York', '334-052-0954', '85328', 'Casa', '$30,746'),
(28, 'Ap #246-9877 Ultricies Rd.', 'Washington', '423-014-6013', '61483', 'Casa', '$32,659');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bien`
--
ALTER TABLE `Bien`
  ADD UNIQUE KEY `Id` (`Id`);
