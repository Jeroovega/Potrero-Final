-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 02-12-2023 a las 03:12:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_integrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `nombre_producto` text NOT NULL,
  `descripcion_producto` text NOT NULL,
  `precio_producto` float NOT NULL,
  `imagen_producto` blob NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombre_producto`, `descripcion_producto`, `precio_producto`, `imagen_producto`, `id_producto`) VALUES
('RainBowSix', '1 DIC 2015', 6.39, '', 12),
('EA SPORTS FC 24', '29 SEP 2023', 69.99, '', 13),
('Madden NFL 24', '17 AGO 2023', 69.99, '', 14),
('F1 23', '16 JUN 2023', 89.99, '', 15),
('Forza Horizon 5', '9 NOV 2021', 32.78, '', 16),
('Far Cry 5', '27 MAR 2018', 47.99, '', 17),
('ARMA III', '12 SEP 2013', 29.99, '', 18),
('ESCAPE THE BACKROOMS', '11 AGO 2022', 5.79, '', 19),
('GHOST WATCHERS', '28 JUL 2022', 14.99, '', 20),
('SKYRIM', '2 ABR 2018', 35.99, '', 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
