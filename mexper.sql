-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2021 a las 01:25:07
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mexper`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `telefono` int(15) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` varchar(150) NOT NULL,
  `fecha` date NOT NULL,
  `ayuda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`ID`, `nombre`, `apellido`, `correo`, `telefono`, `asunto`, `mensaje`, `fecha`, `ayuda`) VALUES
(1, 'Jesus', 'Arroyo', 'jss.ar@outlook.com', 2147483647, 'hehe', 'saludos al fer <3', '2021-01-15', 'afinacion'),
(2, 'Jesús Antonio', 'Arroyo', 'sydeer05@gmail.com', 2147483647, 'hehedgab', 'HOAAAAAAAAAAAAAAAAAAAAAA', '2021-01-15', 'amotiguadores'),
(3, 'Kevin', 'Rogers', 'kncdmx@gmail.com', 2147483647, '', 'holaaaaaaaaaa', '2021-01-09', '0'),
(4, 'alma patricia', 'Rodríguez', 'correo@ejemplo.com', 5555, '', 'necesito agender una cta por fa ', '2021-01-21', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Automovil` varchar(30) NOT NULL,
  `Telefono` int(15) NOT NULL,
  `Mensaje` varchar(150) NOT NULL,
  `Servicio` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`ID`, `Nombre`, `Email`, `Automovil`, `Telefono`, `Mensaje`, `Servicio`) VALUES
(15, 'Kevin Rogers', 'kncdmx@gmail.com', 'Mazda-sport-1997', 2147483647, 'asfasf', 'Cambio de aceite'),
(16, 'Jesús Antonio Rodríguez Arroyo', 'sydeer05@gmail.com', 'Mazda-sport-2015', 551986363, 'safaf', 'Afinación Completa'),
(17, 'alma patricia Rodríguez', 'sydeer05@gmail.com', 'Mazda-sport-2015', 2147483647, 'asdvasva', 'Cambio de amortiguadores'),
(18, 'alma patricia Rodríguez', 'sydeer05@gmail.com', 'Mazda-sport-2018', 2147483647, 'adavaq', 'Cambio de balatas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
