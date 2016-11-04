-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2016 a las 16:21:07
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mecanico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE `piezas` (
  `PIEZ_ID` int(10) UNSIGNED NOT NULL,
  `PIEZ_NOM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `piezas`
--

INSERT INTO `piezas` (`PIEZ_ID`, `PIEZ_NOM`) VALUES
(1, 'Manillar'),
(2, 'Cadena'),
(3, 'Pedal'),
(4, 'Retrovisor'),
(5, 'Neumático');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `PREC_ID` int(10) UNSIGNED NOT NULL,
  `PROV_ID` int(10) UNSIGNED NOT NULL,
  `PIEZ_ID` int(10) UNSIGNED NOT NULL,
  `PRECIO` decimal(10,2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`PREC_ID`, `PROV_ID`, `PIEZ_ID`, `PRECIO`) VALUES
(6, 4, 4, '145.00'),
(7, 6, 1, '214.00'),
(8, 3, 5, '56.00'),
(9, 3, 1, '96.00'),
(10, 5, 4, '157.00'),
(11, 4, 2, '113.00'),
(12, 6, 2, '224.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `PROV_ID` int(10) UNSIGNED NOT NULL,
  `PROV_NOM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`PROV_ID`, `PROV_NOM`) VALUES
(3, 'Honda'),
(4, 'Kawasaki'),
(5, 'BMW'),
(6, 'Yamaha');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD PRIMARY KEY (`PIEZ_ID`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`PREC_ID`),
  ADD UNIQUE KEY `CT_UQ_PROV_PIEZ_ID` (`PROV_ID`,`PIEZ_ID`),
  ADD KEY `FK_PROV` (`PROV_ID`),
  ADD KEY `FK_PIEZ` (`PIEZ_ID`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`PROV_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `piezas`
--
ALTER TABLE `piezas`
  MODIFY `PIEZ_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `PREC_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `PROV_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `precios`
--
ALTER TABLE `precios`
  ADD CONSTRAINT `FK_PIEZ` FOREIGN KEY (`PIEZ_ID`) REFERENCES `piezas` (`PIEZ_ID`),
  ADD CONSTRAINT `FK_PROV` FOREIGN KEY (`PROV_ID`) REFERENCES `proveedores` (`PROV_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
