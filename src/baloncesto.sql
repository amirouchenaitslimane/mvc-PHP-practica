-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2018 a las 19:42:20
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baloncesto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `posicion` enum('base','escolta','alero','ala pivot','pivot') NOT NULL,
  `partidos` int(11) NOT NULL,
  `puntos` float NOT NULL,
  `rebotes` float NOT NULL,
  `asistencias` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `posicion`, `partidos`, `puntos`, `rebotes`, `asistencias`) VALUES
(4, 'Stipes', 'escolta', 51, 52, 3.1, 0.9),
(5, 'Montes', 'alero', 52, 52, 4.6, 4.1),
(6, 'Volkov', 'ala pivot', 31, 52, 5.6, 1.3),
(7, 'Suarez', 'ala pivot', 24, 6.9, 4.8, 4.5),
(8, 'Carter', 'ala pivot', 46, 52, 9.1, 1.8),
(9, 'Graham', 'pivot', 17, 2.1, 8.4, 0.2),
(10, 'Cesar', 'pivot', 28, 52, 6.8, 0.7),
(11, 'Amirouche', 'pivot', 8, 3.1, 6.8, 0.7),
(12, 'Jofre', 'alero', 0, 0, 0, 0),
(13, 'Stevenson', 'pivot', 0, 0, 0, 0),
(14, 'Lehman', 'ala pivot', 0, 0, 0, 0),
(16, 'ds', 'alero', 4545, 12, 12, 12),
(17, 'ps', 'alero', 4545, 12, 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
