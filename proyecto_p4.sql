-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2016 a las 03:17:22
-- Versión del servidor: 5.6.20-log
-- Versión de PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_p4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cantidadEstrellas` varchar(10) NOT NULL,
  `ciudad` varchar(18) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ubicacionFotografia` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE `tours` (
  `nombreT` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `empresa` varchar(45) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NIF` varchar(12) NOT NULL,
  `idUser` varchar(10) NOT NULL,
  `nombreU` varchar(45) NOT NULL,
  `apellidos` varchar(92) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `userType` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
