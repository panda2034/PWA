-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2018 a las 05:36:06
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_modallogin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE personal (
  `id` int(11) NOT NULL,
  `nombres` varchar(90) NOT NULL,
  `direccion` text NOT NULL,
  `genero` varchar(20) NOT NULL,
  `designado` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombres`, `direccion`, `genero`, `designado`, `edad`, `image`) VALUES
(191, 'Gonzales Cotrina, Maria Luisa', 'Av. Los Poetas 657 - Quito - Ecuador', 'Mujer', 'Recepcion', 23, ''),
(190, 'Figueroa Carmona, Fernando Jose', 'Av. Litoral 456 int. 45 - Santiago', 'Hombre', 'Sistemas', 35, ''),
(189, 'Molina Cotrado, Julio Cesar', 'Calle el Miraflorino 345', 'Hombre', 'Administracion', 32, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
