-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2022 a las 01:31:32
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ds22`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociado`
--

CREATE TABLE `asociado` (
  `id_Asociado` bigint(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `esDonante` varchar(2) NOT NULL,
  `fecha_Nacimiento` date NOT NULL,
  `enfermedades` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asociado`
--

INSERT INTO `asociado` (`id_Asociado`, `nombre`, `apellido`, `esDonante`, `fecha_Nacimiento`, `enfermedades`) VALUES
(9848621487, 'Jorge', 'Lopez', 'SI', '1998-09-19', 'SI'),
(20426394481, 'Luis Agustin', 'Luna', 'SI', '2000-07-14', 'NO'),
(20432344327, 'Ezequiel', 'Bruno', 'NO', '2001-01-06', 'NO'),
(20435679865, 'Martin', 'Palermo', '1', '2001-07-09', ''),
(58987896535, 'Martin', 'Magariños', 'SI', '2022-05-16', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

CREATE TABLE `cuota` (
  `id_Cuota` int(4) NOT NULL,
  `fechaEmitida` date NOT NULL,
  `id_Asociado1` bigint(11) NOT NULL,
  `importe` double NOT NULL,
  `estadoPago` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `id_Donacion` int(11) NOT NULL,
  `id_Asociado1` bigint(11) NOT NULL,
  `id_Pedido1` int(11) NOT NULL,
  `cantidad` float NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_Pedido` int(11) NOT NULL,
  `id_Solicitante1` int(11) NOT NULL,
  `fecha_Emision` date NOT NULL,
  `fecha_Vencimiento` date NOT NULL,
  `completado` tinyint(1) NOT NULL,
  `cantidad_Solicitada` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitante`
--

CREATE TABLE `solicitante` (
  `id_Solicitante` int(11) NOT NULL,
  `id_Asociado1` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociado`
--
ALTER TABLE `asociado`
  ADD PRIMARY KEY (`id_Asociado`);

--
-- Indices de la tabla `cuota`
--
ALTER TABLE `cuota`
  ADD PRIMARY KEY (`id_Cuota`),
  ADD KEY `FK_id_Asociado1_cuota` (`id_Asociado1`) USING BTREE;

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`id_Donacion`),
  ADD KEY `FK_id_Asociado_donacion` (`id_Asociado1`),
  ADD KEY `FK_id_Pedido_donacion` (`id_Pedido1`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_Pedido`),
  ADD KEY `FK_id_Solicitante1_pedido` (`id_Solicitante1`);

--
-- Indices de la tabla `solicitante`
--
ALTER TABLE `solicitante`
  ADD PRIMARY KEY (`id_Solicitante`),
  ADD KEY `FK_cuil_Asociado_solicitante` (`id_Asociado1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuota`
--
ALTER TABLE `cuota`
  MODIFY `id_Cuota` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `id_Donacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `solicitante`
--
ALTER TABLE `solicitante`
  MODIFY `id_Solicitante` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuota`
--
ALTER TABLE `cuota`
  ADD CONSTRAINT `cuota_ibfk_1` FOREIGN KEY (`id_Asociado1`) REFERENCES `asociado` (`id_Asociado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `donacion_ibfk_2` FOREIGN KEY (`id_Pedido1`) REFERENCES `pedido` (`id_Pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donacion_ibfk_3` FOREIGN KEY (`id_Asociado1`) REFERENCES `asociado` (`id_Asociado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_Solicitante1`) REFERENCES `solicitante` (`id_Solicitante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitante`
--
ALTER TABLE `solicitante`
  ADD CONSTRAINT `solicitante_ibfk_1` FOREIGN KEY (`id_Asociado1`) REFERENCES `asociado` (`id_Asociado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
