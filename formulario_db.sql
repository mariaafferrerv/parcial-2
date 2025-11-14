-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2025 a las 18:27:09
-- Versión del servidor: 12.0.2-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscriptores`
--

CREATE TABLE `inscriptores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL,
  `tema` text DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscriptores`
--

INSERT INTO `inscriptores` (`id`, `nombre`, `apellido`, `edad`, `sexo`, `pais`, `nacionalidad`, `tema`, `observaciones`, `correo`, `celular`, `fecha`) VALUES
(1, 'María ', 'Ferrer', 22, 'Femenino', 'Panamá', 'Venezolana', 'Python, JS', 'Agregar campos de fecha ', 'ferrervallesm@gmal.com', '60606679', NULL),
(2, 'Ariel', 'Chaverra', 24, 'Masculino', 'Argentina', 'Panameña', 'Ciberseguridad', 'Ninguna', 'ariel@gmail.com', '67088602', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Bolivia'),
(3, 'Brasil'),
(4, 'Canadá'),
(5, 'Chile'),
(6, 'Colombia'),
(7, 'Costa Rica'),
(8, 'Cuba'),
(9, 'Ecuador'),
(10, 'El Salvador'),
(11, 'España'),
(12, 'Estados Unidos'),
(13, 'Guatemala'),
(14, 'Honduras'),
(15, 'México'),
(16, 'Nicaragua'),
(17, 'Panamá'),
(18, 'Paraguay'),
(19, 'Perú'),
(20, 'República Dominicana'),
(21, 'Uruguay'),
(22, 'Venezuela');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscriptores`
--
ALTER TABLE `inscriptores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscriptores`
--
ALTER TABLE `inscriptores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
