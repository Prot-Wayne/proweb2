-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 03:33 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proweb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cedula`, `fecha`) VALUES
(1, 72282267, '2018-03-29 00:52:19'),
(2, 72282267, '2018-03-29 00:53:32'),
(3, 72282267, '2018-03-29 00:53:48'),
(4, 123, '2018-04-06 01:48:35'),
(5, 22502202, '2018-04-13 01:51:26'),
(10, 22502202, '2018-04-29 21:52:30'),
(11, 22502202, '2018-04-29 22:12:41'),
(12, 22502202, '2018-04-29 22:13:26'),
(13, 22502202, '2018-05-01 02:43:09'),
(14, 22502202, '2018-05-01 02:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `cart_plantilla`
--

CREATE TABLE `cart_plantilla` (
  `id` int(11) NOT NULL,
  `plantilla_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_plantilla`
--

INSERT INTO `cart_plantilla` (`id`, `plantilla_id`, `cart_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 3, 3),
(5, 1, 4),
(6, 4, 5),
(10, 7, 9),
(11, 8, 10),
(12, 1, 11),
(13, 3, 12),
(14, 7, 13),
(15, 6, 13),
(16, 5, 14),
(17, 8, 14);

-- --------------------------------------------------------

--
-- Table structure for table `cotizacion`
--

CREATE TABLE `cotizacion` (
  `idcotizacion` int(11) NOT NULL,
  `coticedula` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cotizacion`
--

INSERT INTO `cotizacion` (`idcotizacion`, `coticedula`, `fecha`) VALUES
(1, 123, '2018-04-06 01:48:19'),
(2, 22502202, '2018-04-07 00:33:02'),
(3, 22502202, '2018-04-13 01:40:43'),
(4, 22502202, '2018-04-13 01:44:37'),
(5, 22502202, '2018-04-13 01:47:40'),
(6, 22502202, '2018-04-13 01:49:42'),
(7, 22502202, '2018-05-04 00:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `cotizacion_plantilla`
--

CREATE TABLE `cotizacion_plantilla` (
  `idcotizacionc` int(11) NOT NULL,
  `idplantillap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cotizacion_plantilla`
--

INSERT INTO `cotizacion_plantilla` (`idcotizacionc`, `idplantillap`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 1),
(4, 2),
(5, 3),
(6, 4),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `pnombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` int(30) NOT NULL,
  `imagen_ppal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plantilla`
--

INSERT INTO `plantilla` (`id`, `pnombre`, `descripcion`, `precio`, `imagen_ppal`) VALUES
(1, 'Darkly', 'Primera Plantilla', 500000, '1.jpg'),
(2, 'Flatly', 'Segunda Plantilla', 600000, '2.jpg'),
(3, 'Sandstone', 'Tercera Plantilla', 650000, '3.jpg'),
(4, 'Sketchy', 'Cuarta Plantilla', 500000, '4.jpg'),
(5, 'Dashboard', 'Quinta Plantilla', 800000, '5.jpg'),
(6, 'Application', 'Sexta Plantilla', 800000, '6.jpg'),
(7, 'Admin', 'Séptima Plantilla', 850000, '7.jpg'),
(8, 'Admin Spark', 'Octava Plantilla', 870000, '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `direccion`, `telefono`, `password`) VALUES
(72282267, 'Leonardo', 'Cra 2a', '323', '202cb962ac59075b964b07152d234b70'),
(777, 'Catalina', 'Cra 27 nro 45', '3234942779', '202cb962ac59075b964b07152d234b70'),
(456, 'Parzival', 'Cra 27 nro 45', '45646546', '202cb962ac59075b964b07152d234b70'),
(1143153877, 'Laura', 'cra 2a jdhk', '3104491684', 'e10adc3949ba59abbe56e057f20f883e'),
(22502202, 'Catalina', 'Cra 2a', '30000', '$2y$10$jdU6nGr9rzHjYPgcNxWeke4peuuuxX3CZqM63EOwUSNTlITkSjuhK'),
(0, '', '', '', '$2y$10$NS7pH9SXTzhbDbMRxbTObOSjZqtL905JHkrssbLxkBIcvmeT1V8lK'),
(123, 'Leonardo', 'Cra 27 nro 45', '333', '$2y$10$/eYCj53oeh4XfeXE9uIokek4lIPhA5yCQlB/iBTwgokAarFNtTkDq'),
(31568946, 'Laura', 'ffsdf', '456', '$2y$10$HivvDu9n6BsK0dZkawlG2ehLSmOjORJsv9SlbK8gNAfZbWE68hcY2'),
(7, '', '', '', '$2y$10$c/85kxu4Y.mBEobdGFrqOe2xhttazfAVChhIEGCOOpiwyJJCelT9S'),
(72, '', '', '', '$2y$10$RQpNJKwm4xn2/ILBofyKdO8suOwFYrceUzyx/QsxH2gfTsA1wy57C'),
(722, '', '', '', '$2y$10$oBt.qEqUpwMepI2EFRKEc.32NSXfGU2EPulv2Q.ufwwprpRI6lZmu'),
(7228, '', '', '', '$2y$10$Hoa9ZTOkdD/62VYTMzi6d.K7jTQNBaiypCFI6HOnhGph0SlS5Jt56'),
(72282, '', '', '', '$2y$10$XSeXYUG41spnv58wddF0h.soYptadtSiCaiH12pQ7KfOkAZgVumxa'),
(722822, '', '', '', '$2y$10$sJlMKDCVOJ4MectPijn/EuYjeZLDolEhWFzopToA.z72m9AnRCDPK'),
(7228226, '', '', '', '$2y$10$xgJVYRJhmAmpkf2..y99cec7uG3EtAiiYABf97Y04JVCZdxhisAVC'),
(728, '', '', '', '$2y$10$vSZzsJNEqr2j8Iyr50Q3kO.JozVYqVePa0aksWZZK5/Xx0jgCK7Y2'),
(7282, '', '', '', '$2y$10$LB82yxIlUXkfTs0Kb7bGie.DXy5HLOCNXkFr7/97CEpyvavMdVl/K'),
(14789788, 'Jimbo roso', '123132', '12131', '$2y$10$Uf.O6lnR8IR/pTzi1JyPXuvk2hkUoMI455fTRoGXIM5QafeLnFpMC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_plantilla`
--
ALTER TABLE `cart_plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`idcotizacion`);

--
-- Indexes for table `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_plantilla`
--
ALTER TABLE `cart_plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `idcotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
