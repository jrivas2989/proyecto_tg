-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2020 a las 03:26:44
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estadisticas_casos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idoper`
--

CREATE TABLE `idoper` (
  `mes` varchar(20) NOT NULL,
  `total` int(5) NOT NULL,
  `seguimiento` int(5) NOT NULL,
  `solucionado` int(6) NOT NULL,
  `oper` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idoper`
--

INSERT INTO `idoper` (`mes`, `total`, `seguimiento`, `solucionado`, `oper`) VALUES
('octubre', 67, 0, 67, 'jose rivas'),
('Octubre', 5, 0, 5, 'david haddad'),
('Octubre', 39, 0, 39, 'mildred penaranda'),
('Octubre', 64, 0, 64, 'laura villanueva'),
('Octubre', 1, 0, 1, 'angelin lugo'),
('Noviembre', 4, 0, 4, 'freddy gandica'),
('Noviembre', 1, 0, 1, 'david haddad'),
('Noviembre', 42, 3, 39, 'jose rivas'),
('Noviembre', 57, 1, 56, 'laura villanueva'),
('Noviembre', 46, 1, 46, 'angelin lugo'),
('Diciembre', 3, 0, 3, 'freddy gandica'),
('Diciembre', 53, 1, 52, 'laura villanueva'),
('Diciembre', 8, 0, 8, 'jose rivas'),
('Diciembre', 68, 6, 62, 'angelin lugo'),
('Diciembre', 2, 0, 2, 'Bryn suarez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idproblem`
--

CREATE TABLE `idproblem` (
  `mes` varchar(25) NOT NULL,
  `problema` varchar(30) NOT NULL,
  `total` int(2) NOT NULL,
  `seguimiento` int(2) NOT NULL,
  `solucionado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idproblem`
--

INSERT INTO `idproblem` (`mes`, `problema`, `total`, `seguimiento`, `solucionado`) VALUES
('Octubre', 'conexion', 67, 0, 67),
('Octubre', 'velocidad', 42, 0, 42),
('Octubre', 'router', 7, 0, 7),
('Octubre', 'bloqueo', 32, 0, 32),
('Octubre', 'site caido', 6, 0, 6),
('Octubre', 'mudanza', 4, 0, 4),
('Octubre', 'por visita', 18, 0, 18),
('Noviembre', 'conexion', 59, 1, 58),
('Noviembre', 'velocidad', 32, 1, 32),
('Noviembre', 'router', 6, 0, 6),
('Noviembre', 'site caido', 21, 0, 21),
('Noviembre', 'mudanza', 4, 0, 4),
('Noviembre', 'por visita', 19, 3, 16),
('Noviembre', 'bloqueo', 9, 0, 9),
('Diciembre', 'conexion', 61, 1, 60),
('Diciembre', 'velocidad', 26, 1, 25),
('Diciembre', 'Router', 16, 0, 16),
('Diciembre', 'Bloqueo', 3, 0, 3),
('Diciembre', 'site caido', 6, 0, 6),
('Diciembre', 'mudanza', 4, 0, 4),
('Diciembre', 'por visita', 18, 3, 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
