-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2021 a las 16:59:40
-- Versión del servidor: 10.5.11-MariaDB-1:10.5.11+maria~focal
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `service_warranty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `benificiado`
--

CREATE TABLE `benificiado` (
  `id_beneficiado` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `ci` int(11) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `benificiado`
--

INSERT INTO `benificiado` (`id_beneficiado`, `nombre`, `ci`, `direccion`) VALUES
(1, 'victor  hugo zurita', 888888, 'calle verde'),
(2, 'cochasoft', 78787878, 'calle blanco'),
(3, 'agronomia srl', 68686868, 'calle mirador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `marca` varchar(40) DEFAULT NULL,
  `modelo` varchar(40) DEFAULT NULL,
  `numero_serie` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `marca`, `modelo`, `numero_serie`) VALUES
(1, 'suzuki', 'sx4009', 'su34212'),
(9, 'toyota', 'toyoland', 'ty3432');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantia`
--

CREATE TABLE `garantia` (
  `id_garantia` int(11) NOT NULL,
  `benificiado_id_beneficiado` int(11) NOT NULL,
  `equipo_id_equipo` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `garantia`
--

INSERT INTO `garantia` (`id_garantia`, `benificiado_id_beneficiado`, `equipo_id_equipo`, `fecha_inicio`, `fecha_final`) VALUES
(1, 1, 1, '0000-00-00', NULL),
(2, 2, 9, '2021-07-19', NULL),
(3, 3, 9, '2021-07-19', NULL),
(4, 1, 9, '2021-07-19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `id_seguimiento` int(11) NOT NULL,
  `garantia_id_garantia` int(11) NOT NULL,
  `servicio_tecnico_id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_tecnico`
--

CREATE TABLE `servicio_tecnico` (
  `id_servicio` int(11) NOT NULL,
  `equipo_id_equipo` int(11) NOT NULL,
  `benificiado_id_beneficiado` int(11) NOT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `tiemposervicio` date DEFAULT NULL,
  `detalle` varchar(40) DEFAULT NULL,
  `observacion` varchar(40) DEFAULT NULL,
  `cambiopiesas` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `benificiado`
--
ALTER TABLE `benificiado`
  ADD PRIMARY KEY (`id_beneficiado`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `garantia`
--
ALTER TABLE `garantia`
  ADD PRIMARY KEY (`id_garantia`),
  ADD KEY `garantia_FKIndex1` (`equipo_id_equipo`),
  ADD KEY `garantia_FKIndex2` (`benificiado_id_beneficiado`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`id_seguimiento`),
  ADD KEY `seguimiento_FKIndex1` (`servicio_tecnico_id_servicio`),
  ADD KEY `seguimiento_FKIndex2` (`garantia_id_garantia`);

--
-- Indices de la tabla `servicio_tecnico`
--
ALTER TABLE `servicio_tecnico`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `servicio_tecnico_FKIndex1` (`benificiado_id_beneficiado`),
  ADD KEY `servicio_tecnico_FKIndex2` (`equipo_id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `benificiado`
--
ALTER TABLE `benificiado`
  MODIFY `id_beneficiado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `garantia`
--
ALTER TABLE `garantia`
  MODIFY `id_garantia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id_seguimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio_tecnico`
--
ALTER TABLE `servicio_tecnico`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
