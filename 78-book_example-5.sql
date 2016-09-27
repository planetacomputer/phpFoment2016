-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2016 a las 15:10:44
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shops`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shops`
--

CREATE TABLE `shops` (
  `idShop` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `nif` varchar(12) NOT NULL,
  `alta` datetime NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `shops`
--

INSERT INTO `shops` (`idShop`, `nombre`, `tipo`, `ubicacion`, `codigo`, `nif`, `alta`, `idUser`) VALUES
(1, 'Zara', 'Ropa', 'Calle calle 12', '08023', '99887654R', '0000-00-00 00:00:00', 2),
(2, 'Boy&Toy', 'Masajes', 'Calle calle 14', '08023', '99887554R', '0000-00-00 00:00:00', 2),
(3, 'Mis Rebajas', 'Ropa', 'Calle calle 16', '08023', '19887654R', '0000-00-00 00:00:00', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`idShop`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `shops`
--
ALTER TABLE `shops`
  MODIFY `idShop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
