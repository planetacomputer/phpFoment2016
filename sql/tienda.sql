-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2016 a las 18:12:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `ART_ID` int(10) UNSIGNED NOT NULL,
  `ART_NOM` varchar(100) DEFAULT NULL,
  `ART_PRECIO` decimal(10,2) UNSIGNED DEFAULT NULL,
  `FAB_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`ART_ID`, `ART_NOM`, `ART_PRECIO`, `FAB_ID`) VALUES
(1, 'Portatil MD5', '998.00', 1),
(2, 'Auriculares X90', '34.65', 2),
(3, 'Mando PS', '22.15', 2),
(4, 'Tablet G6', '275.00', 3),
(5, 'Movil 5F', '155.05', 4),
(6, 'Cadena musical estereo', '125.95', 5),
(7, 'TV HD 765T', '786.00', 6),
(8, 'Reproductor Blu-Ray JH3', '96.76', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricantes`
--

CREATE TABLE `fabricantes` (
  `FAB_ID` int(10) UNSIGNED NOT NULL,
  `FAB_NOM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fabricantes`
--

INSERT INTO `fabricantes` (`FAB_ID`, `FAB_NOM`) VALUES
(6, 'Apple'),
(1, 'Asus'),
(7, 'Huawei'),
(4, 'Lenovo'),
(8, 'LG'),
(5, 'Motorola'),
(3, 'Msi'),
(10, 'Philips'),
(9, 'Samsung'),
(11, 'Siemens'),
(2, 'Toshiba'),
(12, 'Xiaomi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ART_ID`),
  ADD KEY `fk_ARTICULOS_FABRICANTES_idx` (`FAB_ID`);

--
-- Indices de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`FAB_ID`),
  ADD UNIQUE KEY `FAB_NOM_UNIQUE` (`FAB_NOM`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ART_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `FAB_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `fk_ARTICULOS_FABRICANTES` FOREIGN KEY (`FAB_ID`) REFERENCES `fabricantes` (`FAB_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
