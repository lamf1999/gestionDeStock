-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-03-2021 a las 23:00:11
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id14553947_bdtaller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codigo` int(11) NOT NULL,
  `razon` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `ruc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigo`, `razon`, `nombre`, `direccion`, `telefono`, `ruc`) VALUES
(1, 'neymar', 'jr', 'españa', 234, 23456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `stock` int(10) UNSIGNED DEFAULT NULL,
  `barra` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `descripcion`, `stock`, `barra`, `precio`) VALUES
(17, 'PortaCorona 110', 250, '1', 40000),
(18, 'Caja Negra de 4', 30000, '2', 0),
(20, 'Varilla de Freno', 45, '3', 10000),
(21, 'Válvula MMG 150', 0, '2', 40000),
(22, 'Válvula MMG 200', 0, '2', 40000),
(23, '', 0, 'Relay', 0),
(24, 'Cubierta chino Aro 14', 0, '0', 130000),
(25, 'Cubierta Kenda Aro 14', 0, '0', 130000),
(26, 'Cubierta Pirelli Aro 14', 0, '0', 140000),
(27, 'Llave de Contacto CG', 0, '2', 15000),
(28, 'Cubierta Pirelli 2.75/18', 0, '0', 140000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('admin', 'admin'),
('alejandro', 'admin'),
('Alejandro Gonzalez', 'admin'),
('Orlando', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
