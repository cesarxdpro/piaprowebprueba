-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2022 a las 23:42:27
-- Versión del servidor: 8.0.26
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `med-22`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dup_citap`
--

CREATE TABLE `dup_citap` (
  `ID_Cita` int NOT NULL,
  `ID_Usu` int NOT NULL,
  `ID_Paciente` int NOT NULL,
  `FechaYHoraIni` datetime NOT NULL,
  `FechaYHoraFin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `dup_citap`
--

INSERT INTO `dup_citap` (`ID_Cita`, `ID_Usu`, `ID_Paciente`, `FechaYHoraIni`, `FechaYHoraFin`) VALUES
(1, 1, 1, '2022-05-23 08:00:00', '2022-05-23 08:50:00'),
(2, 1, 4, '2022-05-23 08:50:00', '2022-05-23 09:40:00'),
(3, 1, 4, '2022-05-23 09:30:00', '2022-05-23 10:20:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `ID_Paciente` int NOT NULL,
  `Nom_Pac` tinytext NOT NULL,
  `FechNac_Pac` date NOT NULL,
  `Edad_Pac` int NOT NULL,
  `Est_Pac` int NOT NULL,
  `Peso_Pac` float NOT NULL,
  `Dom_Pac` varchar(100) NOT NULL,
  `Enf_Pac` varchar(150) DEFAULT NULL,
  `AntH_Pac` varchar(255) DEFAULT NULL,
  `AntP_Pac` varchar(255) DEFAULT NULL,
  `Aleg_Pac` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`ID_Paciente`, `Nom_Pac`, `FechNac_Pac`, `Edad_Pac`, `Est_Pac`, `Peso_Pac`, `Dom_Pac`, `Enf_Pac`, `AntH_Pac`, `AntP_Pac`, `Aleg_Pac`) VALUES
(1, 'Giuliana Lucila Deferr', '2002-01-19', 20, 157, 60, 'Argentina-Ushuaia', 'NA', 'NA', 'NA', 'NA'),
(4, 'Ejemplo4', '2002-02-14', 20, 180, 90, 'EjemploDomicilio', 'NA', 'NA', 'NA', 'NA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usu` int NOT NULL,
  `Nom_Usu` tinytext NOT NULL,
  `Contr_Usu` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usu`, `Nom_Usu`, `Contr_Usu`) VALUES
(1, 'Antonio Segovia', 'Contraseña123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dup_citap`
--
ALTER TABLE `dup_citap`
  ADD PRIMARY KEY (`ID_Cita`),
  ADD UNIQUE KEY `FechaYHoraIni_UNIQUE` (`FechaYHoraIni`),
  ADD UNIQUE KEY `FechaYHoraFin_UNIQUE` (`FechaYHoraFin`),
  ADD KEY `fk_DUP_CitaP_Usuario_idx` (`ID_Usu`),
  ADD KEY `fk_DUP_CitaP_Paciente1_idx` (`ID_Paciente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID_Paciente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dup_citap`
--
ALTER TABLE `dup_citap`
  MODIFY `ID_Cita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID_Paciente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dup_citap`
--
ALTER TABLE `dup_citap`
  ADD CONSTRAINT `fk_DUP_CitaP_Paciente1` FOREIGN KEY (`ID_Paciente`) REFERENCES `paciente` (`ID_Paciente`),
  ADD CONSTRAINT `fk_DUP_CitaP_Usuario` FOREIGN KEY (`ID_Usu`) REFERENCES `usuario` (`ID_Usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
