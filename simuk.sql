-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2018 a las 00:22:21
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simuk`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertLogin` (IN `PID` INT, IN `PUser` VARCHAR(50), IN `PClave` VARCHAR(50), IN `PPermiso` INT)  NO SQL
INSERT INTO login(ID,User,Clave,Permiso) VALUES(PID,PUser,PClave,PPermiso)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectLogin` (IN `PUser` VARCHAR(50), IN `PClave` VARCHAR(50))  NO SQL
SELECT * FROM login where User = PUser AND Clave = PClave$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria`
--

CREATE TABLE `convocatoria` (
  `ID` int(11) NOT NULL,
  `IDInstitucion` int(11) NOT NULL,
  `NombreES` varchar(50) NOT NULL,
  `NombreEN` varchar(50) NOT NULL,
  `DescripcortaES` varchar(100) NOT NULL,
  `DescripcortaEN` varchar(100) NOT NULL,
  `DescripLargaES` text NOT NULL,
  `DescripLargaEN` text NOT NULL,
  `UrlPdf` varchar(100) NOT NULL,
  `UrlImage` varchar(100) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `FechaPublic` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorioemail`
--

CREATE TABLE `directorioemail` (
  `ID` int(11) NOT NULL,
  `IDRela` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directoriotel`
--

CREATE TABLE `directoriotel` (
  `ID` int(11) NOT NULL,
  `IDRela` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UrlLogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `Permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID`, `User`, `Clave`, `Permiso`) VALUES
(1, 'Admin', '123456j', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `directorioemail`
--
ALTER TABLE `directorioemail`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `directoriotel`
--
ALTER TABLE `directoriotel`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `directoriotel`
--
ALTER TABLE `directoriotel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
