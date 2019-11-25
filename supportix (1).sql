-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2019 a las 03:49:59
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
-- Base de datos: `supportix`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idcargo` int(11) NOT NULL,
  `nom_car` varchar(100) CHARACTER SET latin1 NOT NULL,
  `estado_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Jose Rivas'),
(2, 'Laura Villanueva'),
(3, 'Angelin Lugo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kind`
--

CREATE TABLE `kind` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `kind`
--

INSERT INTO `kind` (`id`, `name`) VALUES
(1, 'Conexion'),
(2, 'Velocidad'),
(3, 'Router'),
(4, 'Bloqueo'),
(5, 'Bloqueo'),
(6, 'Site Caido'),
(7, 'Mudanza'),
(8, 'Por visita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `priority`
--

CREATE TABLE `priority` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `priority`
--

INSERT INTO `priority` (`id`, `name`) VALUES
(1, 'Alta'),
(2, 'Media'),
(3, 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`id`, `name`, `description`) VALUES
(1, 'Ventas', 'dpto ventas'),
(2, 'Soporte', 'soporte'),
(3, 'Administracion', 'administracion'),
(4, 'Facebook', 'red social facebook');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site`
--

CREATE TABLE `site` (
  `id` int(32) NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `description` text CHARACTER SET latin1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `site`
--

INSERT INTO `site` (`id`, `name`, `description`) VALUES
(1, 'Agueybana', 'Site agueybana'),
(2, 'Acqualina', 'site acqualina'),
(3, 'Arallanes', NULL),
(4, 'Monte Flores', NULL),
(5, 'Cedro', NULL),
(6, 'Bello Horizonte', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Pendiente'),
(2, 'En Desarrollo'),
(3, 'Terminado'),
(4, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `kind_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `asigned_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `site_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority_id` int(11) NOT NULL DEFAULT '1',
  `status_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`id`, `title`, `description`, `updated_at`, `created_at`, `kind_id`, `user_id`, `asigned_id`, `project_id`, `site_id`, `category_id`, `priority_id`, `status_id`) VALUES
(2, 'No tiene conexion', 'No conecta con sus equipos', NULL, '2019-11-10 15:38:12', 1, 2, NULL, 2, 'Agueybana', 1, 2, 1),
(3, 'Sin conexion', 'No conecta con sus equipos', NULL, '2019-11-11 18:25:17', 1, 2, NULL, 1, '', 2, 2, 1),
(5, 'Olvido de clave Wifi', 'no sabe la clave wifi', NULL, '2019-11-11 19:03:54', 3, 2, NULL, 2, '', 1, 1, 1),
(9, 'Router Malo', 'No le enciende', NULL, '2019-11-24 18:27:32', 3, 2, NULL, 2, '2', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `kind` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `idprofile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `profile_pic`, `is_active`, `kind`, `created_at`, `idprofile`) VALUES
(1, 'admin', 'Administrador', 'administrador@gmail.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'foto1.jpg', 1, 1, '2017-07-15 12:05:45', 1),
(2, NULL, 'Jose rivas', 'joseanriher@gmail.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'foto1.jpg', 1, 1, '2019-11-08 02:36:30', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idcargo`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `priority_id` (`priority_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kind_id` (`kind_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `kind`
--
ALTER TABLE `kind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `priority`
--
ALTER TABLE `priority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`priority_id`) REFERENCES `priority` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`kind_id`) REFERENCES `kind` (`id`),
  ADD CONSTRAINT `ticket_ibfk_5` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `ticket_ibfk_6` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
