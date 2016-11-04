-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2016 a las 15:34:01
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_empl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_documents`
--

CREATE TABLE `t_documents` (
  `DOCS_ID` int(11) NOT NULL,
  `EMPL_ID` int(11) NOT NULL,
  `DOCS_NAME` varchar(100) NOT NULL,
  `DOCS_TYPE` enum('PDF','DOC','XLS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_documents`
--

INSERT INTO `t_documents` (`DOCS_ID`, `EMPL_ID`, `DOCS_NAME`, `DOCS_TYPE`) VALUES
(1, 1, 'titulo', 'DOC'),
(2, 1, 'Titulo', 'PDF'),
(3, 1, 'Curriculum', 'DOC'),
(4, 1, 'Certificado OCP', 'PDF'),
(5, 1, 'Matriz conocimientos', 'XLS'),
(6, 2, 'Grado', 'PDF'),
(7, 2, 'Curriculum', 'DOC'),
(8, 2, 'Certificado MS', 'PDF'),
(9, 4, 'Titulo', 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_employees`
--

CREATE TABLE `t_employees` (
  `EMPL_ID` int(11) NOT NULL,
  `OFFC_ID` int(11) NOT NULL,
  `KNLN_ID` int(11) DEFAULT NULL,
  `EMPL_FORNAME` varchar(50) NOT NULL,
  `EMPL_MIDDLE_NAME` varchar(50) DEFAULT NULL,
  `EMPL_SURNAME` varchar(50) NOT NULL,
  `EMPL_NUMBER` int(11) NOT NULL,
  `EMPL_HIRE_DATE` datetime NOT NULL,
  `EMPL_MENTOR_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_employees`
--

INSERT INTO `t_employees` (`EMPL_ID`, `OFFC_ID`, `KNLN_ID`, `EMPL_FORNAME`, `EMPL_MIDDLE_NAME`, `EMPL_SURNAME`, `EMPL_NUMBER`, `EMPL_HIRE_DATE`, `EMPL_MENTOR_ID`) VALUES
(1, 10, 10, 'Albert', 'David', 'Gomes', 67, '2009-09-09 00:00:00', NULL),
(2, 11, 11, 'Juan', 'Pedro', 'Sanz', 617, '2010-09-09 00:00:00', NULL),
(4, 14, 20, 'Juan', 'Migule', 'Pardina', 20, '2000-09-09 00:00:00', NULL),
(5, 20, NULL, 'Jose', 'Pepe', 'Pages', 111, '2012-09-09 00:00:00', NULL),
(6, 11, 10, 'Pere', 'Varas', 'Urquijo', 112, '2012-07-09 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_knowledge_lines`
--

CREATE TABLE `t_knowledge_lines` (
  `KNLN_ID` int(11) NOT NULL,
  `KNLN_NAME` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_knowledge_lines`
--

INSERT INTO `t_knowledge_lines` (`KNLN_ID`, `KNLN_NAME`) VALUES
(10, 'Java'),
(20, '.NET'),
(30, 'Mainframe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_offices`
--

CREATE TABLE `t_offices` (
  `OFFC_ID` int(11) NOT NULL,
  `OFFC_COUNTRY` varchar(30) NOT NULL,
  `OFFC_CITY` varchar(50) NOT NULL,
  `OFFC_DESCRIPTION` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_offices`
--

INSERT INTO `t_offices` (`OFFC_ID`, `OFFC_COUNTRY`, `OFFC_CITY`, `OFFC_DESCRIPTION`) VALUES
(10, 'España', 'Madrid', 'Oficina Central'),
(11, 'España', 'Barcelona', ''),
(12, 'España', 'Barcelona', ''),
(14, 'España', 'Barcelona', NULL),
(20, 'Chile', 'Santiago', 'Oficina principal de Chile'),
(30, 'Argentina', 'Buenos Aires', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_projects`
--

CREATE TABLE `t_projects` (
  `PRJT_ID` int(11) NOT NULL,
  `PRJT_CODE` varchar(16) NOT NULL,
  `PRJT_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_projects`
--

INSERT INTO `t_projects` (`PRJT_ID`, `PRJT_CODE`, `PRJT_NAME`) VALUES
(1, '098', 'UCO'),
(2, '987', 'SASA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_projects_employees`
--

CREATE TABLE `t_projects_employees` (
  `PRJT_ID` int(11) NOT NULL,
  `EMPL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_projects_employees`
--

INSERT INTO `t_projects_employees` (`PRJT_ID`, `EMPL_ID`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_projects_employees`
--
CREATE TABLE `v_projects_employees` (
`NOMBRE` varchar(50)
,`APELLIDOS` varchar(50)
,`NUM_EMPLEADO` int(11)
,`NOM_PROJT` varchar(50)
,`CODI_PRJT` varchar(16)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `v_projects_employees`
--
DROP TABLE IF EXISTS `v_projects_employees`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_projects_employees`  AS  select `e`.`EMPL_FORNAME` AS `NOMBRE`,`e`.`EMPL_SURNAME` AS `APELLIDOS`,`e`.`EMPL_NUMBER` AS `NUM_EMPLEADO`,`p`.`PRJT_NAME` AS `NOM_PROJT`,`p`.`PRJT_CODE` AS `CODI_PRJT` from ((`t_employees` `e` join `t_projects_employees` `pe` on((`e`.`EMPL_ID` = `pe`.`EMPL_ID`))) join `t_projects` `p` on((`pe`.`PRJT_ID` = `p`.`PRJT_ID`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_documents`
--
ALTER TABLE `t_documents`
  ADD PRIMARY KEY (`DOCS_ID`),
  ADD KEY `FK_DOCS_EMPL` (`EMPL_ID`);

--
-- Indices de la tabla `t_employees`
--
ALTER TABLE `t_employees`
  ADD PRIMARY KEY (`EMPL_ID`);

--
-- Indices de la tabla `t_knowledge_lines`
--
ALTER TABLE `t_knowledge_lines`
  ADD PRIMARY KEY (`KNLN_ID`);

--
-- Indices de la tabla `t_offices`
--
ALTER TABLE `t_offices`
  ADD PRIMARY KEY (`OFFC_ID`);

--
-- Indices de la tabla `t_projects`
--
ALTER TABLE `t_projects`
  ADD PRIMARY KEY (`PRJT_ID`);

--
-- Indices de la tabla `t_projects_employees`
--
ALTER TABLE `t_projects_employees`
  ADD PRIMARY KEY (`PRJT_ID`,`EMPL_ID`),
  ADD KEY `FK_PROJ_EMPL` (`PRJT_ID`),
  ADD KEY `FK_PROJ_EMPL_EMPL_ID` (`EMPL_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_documents`
--
ALTER TABLE `t_documents`
  MODIFY `DOCS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `t_employees`
--
ALTER TABLE `t_employees`
  MODIFY `EMPL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `t_projects`
--
ALTER TABLE `t_projects`
  MODIFY `PRJT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_documents`
--
ALTER TABLE `t_documents`
  ADD CONSTRAINT `FK_DOCS_EMPL` FOREIGN KEY (`EMPL_ID`) REFERENCES `t_employees` (`EMPL_ID`);

--
-- Filtros para la tabla `t_projects_employees`
--
ALTER TABLE `t_projects_employees`
  ADD CONSTRAINT `FK_PROJ_EMPL` FOREIGN KEY (`PRJT_ID`) REFERENCES `t_projects` (`PRJT_ID`),
  ADD CONSTRAINT `FK_PROJ_EMPL_EMPL_ID` FOREIGN KEY (`EMPL_ID`) REFERENCES `t_employees` (`EMPL_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
