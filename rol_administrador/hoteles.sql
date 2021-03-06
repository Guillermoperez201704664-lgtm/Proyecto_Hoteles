-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2020 a las 19:20:01
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hoteles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `administrador_id` int(11) NOT NULL,
  `nombre_administrador` text NOT NULL,
  `apellido_administrador` text NOT NULL,
  `DPI` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_habitacion`
--

CREATE TABLE `asignacion_habitacion` (
  `correlativo` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `habitacion_id` int(11) NOT NULL,
  `Fecha_ingreso` text NOT NULL,
  `estatus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignacion_habitacion`
--

INSERT INTO `asignacion_habitacion` (`correlativo`, `cliente_id`, `habitacion_id`, `Fecha_ingreso`, `estatus_id`) VALUES
(1, 123, 100, '5-10-2020', 1),
(5, 456, 200, '6-10-2020', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `nombre_cliente` text NOT NULL,
  `apellido_cliente` text NOT NULL,
  `Dpi` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nombre_cliente`, `apellido_cliente`, `Dpi`, `sexo_id`) VALUES
(123, 'Angel', 'Rodas', 12345678, 1),
(132, 'Lorena', 'Perez', 78653421, 2),
(456, 'Esmeralda', 'Sosa', 87654321, 2),
(789, 'Carlos', 'Morales', 21436587, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `empleado_id` int(11) NOT NULL,
  `nombre_empleado` text NOT NULL,
  `apellido_empleado` text NOT NULL,
  `DPI` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `administrador_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_habitacion`
--

CREATE TABLE `estatus_habitacion` (
  `estatus_id` int(11) NOT NULL,
  `tipo_estatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estatus_habitacion`
--

INSERT INTO `estatus_habitacion` (`estatus_id`, `tipo_estatus`) VALUES
(0, 'libre'),
(1, 'ocupado'),
(2, 'reserva ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `habitacion_id` int(11) NOT NULL,
  `tipo_habitacion_id` int(11) NOT NULL,
  `piso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`habitacion_id`, `tipo_habitacion_id`, `piso_id`) VALUES
(300, 10, 3),
(100, 20, 1),
(200, 30, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piso`
--

CREATE TABLE `piso` (
  `piso_id` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `piso`
--

INSERT INTO `piso` (`piso_id`, `descripcion`) VALUES
(1, 'nivel 1'),
(2, 'nivel 2'),
(3, 'nivel 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `sexo_id` int(11) NOT NULL,
  `tipo_sexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`sexo_id`, `tipo_sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `tipo_habitacion_id` int(11) NOT NULL,
  `nombre_habitacion` text NOT NULL,
  `Precio_dia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_habitacion`
--

INSERT INTO `tipo_habitacion` (`tipo_habitacion_id`, `nombre_habitacion`, `Precio_dia`) VALUES
(10, 'Suit', 500),
(20, 'Familiar', 300),
(30, 'Personal', 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`administrador_id`,`DPI`),
  ADD KEY `sexo_id` (`sexo_id`);

--
-- Indices de la tabla `asignacion_habitacion`
--
ALTER TABLE `asignacion_habitacion`
  ADD PRIMARY KEY (`correlativo`,`cliente_id`,`habitacion_id`),
  ADD KEY `estatus_id` (`estatus_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `habitacion_id` (`habitacion_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`,`Dpi`),
  ADD KEY `sexo_id` (`sexo_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`empleado_id`),
  ADD KEY `sexo_id` (`sexo_id`),
  ADD KEY `administrador_id` (`administrador_id`);

--
-- Indices de la tabla `estatus_habitacion`
--
ALTER TABLE `estatus_habitacion`
  ADD PRIMARY KEY (`estatus_id`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`habitacion_id`),
  ADD KEY `tipo_habitacion_id` (`tipo_habitacion_id`,`piso_id`),
  ADD KEY `piso_id` (`piso_id`);

--
-- Indices de la tabla `piso`
--
ALTER TABLE `piso`
  ADD PRIMARY KEY (`piso_id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`sexo_id`);

--
-- Indices de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD PRIMARY KEY (`tipo_habitacion_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`sexo_id`);

--
-- Filtros para la tabla `asignacion_habitacion`
--
ALTER TABLE `asignacion_habitacion`
  ADD CONSTRAINT `asignacion_habitacion_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`),
  ADD CONSTRAINT `asignacion_habitacion_ibfk_2` FOREIGN KEY (`habitacion_id`) REFERENCES `habitacion` (`habitacion_id`),
  ADD CONSTRAINT `asignacion_habitacion_ibfk_3` FOREIGN KEY (`estatus_id`) REFERENCES `estatus_habitacion` (`estatus_id`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`sexo_id`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`sexo_id`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`administrador_id`) REFERENCES `administrador` (`administrador_id`);

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`tipo_habitacion_id`) REFERENCES `tipo_habitacion` (`tipo_habitacion_id`),
  ADD CONSTRAINT `habitacion_ibfk_2` FOREIGN KEY (`piso_id`) REFERENCES `piso` (`piso_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
