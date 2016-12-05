-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2016 a las 12:38:10
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
  `idHotel` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cantidadEstrellas` varchar(10) NOT NULL,
  `ciudad` varchar(18) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ubicacionFotografia` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`idHotel`, `nombre`, `descripcion`, `cantidadEstrellas`, `ciudad`, `direccion`, `telefono`, `email`, `ubicacionFotografia`) VALUES
(1, 'Marriot', 'ALTA GAMA', '5', 'Heredia', 'Belen Heredia', '22014578', 'marriot@gmail.com', 'N/A'),
(2, 'Barcelo', 'Guanacaste', '4', 'Liberia', 'Canchas de golf', '22104578', 'marriot@gmail.com', 'N/A'),
(3, 'Turrialba ', 'ALTA GAMA', '2', 'Cartago', 'Opera', '22014578', 'marriot@gmail.com', 'N/A'),
(4, 'SanJose', 'MEDIA', '5', 'San Jose', 'lkjasld', '22014578', 'marriot@gmail.com', 'N/A'),
(5, 'Jaco Beach', 'PLAYA', '4', 'Puntarenas', 'Jaco', '22014578', 'marriot@gmail.com', 'N/A'),
(6, 'Marriot2', 'lop', '5', 'Heredia', 'Belen', '22104578', 'marriot@gmail.com', 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE `tours` (
  `idTour` int(11) NOT NULL,
  `nombreTour` varchar(45) NOT NULL,
  `descripcionTour` varchar(255) NOT NULL,
  `empresa` varchar(45) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ubicacionTour` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`idTour`, `nombreTour`, `descripcionTour`, `empresa`, `telefono`, `email`, `ubicacionTour`) VALUES
(1, 'Canopy', 'ALTO RIESGO', 'Africa Mia', '22561048', 'marriot@gmail.com', 'Guanacaste');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NIF` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `apellidos` varchar(92) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `clave` varchar(500) NOT NULL,
  `userType` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NIF`, `username`, `nombreUsuario`, `apellidos`, `email`, `telefono`, `clave`, `userType`) VALUES
('123', 'root', '0', '0', '0', '0', '21232f297a57a5a743894a0e4a801fc3', '0'),
('101110111', 'pep19', 'Joshep', 'Guardiola', 'marriot@gmail.com', '22561048', 'messi', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`idHotel`);

--
-- Indices de la tabla `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`idTour`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NIF`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `idHotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tours`
--
ALTER TABLE `tours`
  MODIFY `idTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
