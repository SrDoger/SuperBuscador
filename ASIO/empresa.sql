-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 04:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Table structure for table `busqueda`
--

CREATE TABLE `busqueda` (
  `id` int(10) NOT NULL,
  `search` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `idProducto` text NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrito`
--

INSERT INTO `carrito` (`idProducto`, `id_usuario`) VALUES
('sdafas', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('', 12),
('\"id\"', 12),
('\"id\"', 12),
('\"id\"', 12),
('\"id\"', 12),
('\"id\"', 12),
('\"id\"', 12),
('id', 12),
('id', 12),
('id', 12),
('id', 12),
('id', 12),
('id', 12),
('MLA1143745839', 12),
('MLA1143745839', 12),
('MLA1143745839', 12),
('MLA1143745839', 12),
('MLA1143745839', 12),
('MLA1143745839', 12),
('MLA1143745839', 12),
('MLA1143745839', 12),
('MLA1143745839', 12),
('', 12),
('MLA929070256', 12);

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `id` int(10) NOT NULL,
  `producto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `nombre` text NOT NULL,
  `pwd` text NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `mail`, `nombre`, `pwd`, `admin`) VALUES
(12, 'mail@gmail.com', 'asdasd', '123456', NULL),
(412, '', 'jose', '123456', NULL),
(413, 'allanjmontero@gmail.com', 'Sr_Doger', '555a9aae3c2c23f0f9f911c8230c4238', 1),
(414, 'sexo@gmail.com', 'Sr_Doger', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(415, 'sfdfsd@gmail.com', 'tuviejaentangfa', '202cb962ac59075b964b07152d234b70', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD KEY `relacion_carrito_usuario` (`id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `relacion_carrito_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
