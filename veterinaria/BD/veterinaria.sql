-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 08:09 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `veterinaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(6) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nombre_mascota` varchar(50) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `raza` varchar(20) NOT NULL,
  `fecha_nacimiento` varchar(25) NOT NULL,
  `servicio` varchar(50) NOT NULL,
  `id_servicio` int(6) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `id_servicio` (`id_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `direccion`, `telefono`, `correo`, `nombre_mascota`, `especie`, `raza`, `fecha_nacimiento`, `servicio`, `id_servicio`) VALUES
(1, 'carlos toro', 'calle falsa#12-3', '1234556', 'carlos@gmail.com', 'gordo', 'canino', 'pastor belga', '25/12/2005', 'peluqueria', 1),
(2, 'luz mendieta', 'calle 34sur#45b-12', '2345643', 'marina@outlook.com', 'cintya', 'felino', 'criollo', '12/05/2019', 'corte de uñas', 3);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(6) NOT NULL AUTO_INCREMENT,
  `nombre_proverdor` varchar(50) NOT NULL,
  `direccion_proveedor` varchar(50) NOT NULL,
  `telefono_proveedor` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `producto_servicio` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` int(4) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proverdor`, `direccion_proveedor`, `telefono_proveedor`, `correo`, `producto_servicio`, `descripcion`, `cantidad`) VALUES
(1, 'nutrican s.a.s', 'av chile#23-22', '2032211', 'pedidos@nutrican.com', 'comida para perro', 'comida para perro marca purina bolsa por 5 kilos', 10),
(2, 'semillas y semillas ltda', 'calle 29#34bis-22', '3215678900', 'semillasysemillas@gmail.com', 'comida para aves', 'comida para aves bolsa por 10 kilos', 30);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(6) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(50) NOT NULL,
  `precio_servicio` int(6) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `precio_servicio`, `descripcion`) VALUES
(1, 'peluqueria', 10000, 'corte de pelo completo'),
(2, 'baño', 20000, 'baño completo seco o humedo'),
(3, 'corte de uñas', 5000, 'corte de uñas para felinos');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
