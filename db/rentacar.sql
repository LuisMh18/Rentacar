-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-04-2016 a las 11:18:02
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rentacar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `num_licencia` int(11) DEFAULT NULL,
  `comentarios` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobertura`
--

CREATE TABLE IF NOT EXISTS `cobertura` (
  `id` int(11) NOT NULL,
  `cobertura` text,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cobertura`
--

INSERT INTO `cobertura` (`id`, `cobertura`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Seguro cubierto contra daños a terceros.\nColisiones con un 10% por el deducible.', 1, '2016-04-25 04:11:49', '2016-04-25 04:11:49'),
(2, 'Cobertura 2', 0, '2016-04-25 04:14:12', '2016-04-25 04:14:12'),
(3, 'Esta es la cobertura 3', 1, '2016-04-25 04:14:26', '2016-04-25 04:46:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE IF NOT EXISTS `codigo` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`id`, `codigo`, `descripcion`, `estatus`, `created_at`, `updated_at`) VALUES
(3, 'xx', 'xxxxxxx', 1, '2016-04-18 23:17:40', '2016-04-18 23:17:40'),
(4, 'uuu', 'uuuuu', 1, '2016-04-18 23:18:41', '2016-04-18 23:52:45'),
(5, 'bbb', 'bbbbbb', 0, '2016-04-18 23:19:08', '2016-04-18 23:19:08'),
(6, 'oo', 'ooooo', 1, '2016-04-18 23:19:28', '2016-04-18 23:19:28'),
(8, 'kk', 'kkkkk', 0, '2016-04-18 23:22:16', '2016-04-18 23:22:16'),
(18, 'hhh', 'hhh', 1, '2016-04-19 22:31:06', '2016-04-19 22:31:06'),
(19, 'kkk', 'kkk', 0, '2016-04-19 22:31:12', '2016-04-19 22:31:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerente`
--

CREATE TABLE IF NOT EXISTS `gerente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerente`
--

INSERT INTO `gerente` (`id`, `nombre`, `paterno`, `materno`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Teresa', 'Diaz', 'No se', 'tere.diaz@emotionsrentacar.com', '2016-04-13 05:00:00', '2016-04-13 05:00:00'),
(6, 'bbbb', 'bbb', 'bbb', 'bbbb@outlook.es', '2016-04-15 01:46:53', '2016-04-15 01:46:53'),
(53, 'dsds', 'sddsds', 'dsdsdsd', 'saas@live.com', '2016-04-15 08:06:47', '2016-04-15 08:06:47'),
(54, 'saxsax', 'saaaaa', 'sax', 'saxasxa@live.com', '2016-04-15 08:07:54', '2016-04-15 08:08:03'),
(55, 'ccc', 'ccc', '', 'cc@outlook.es', '2016-04-15 08:11:12', '2016-04-15 08:17:47'),
(67, 'vvvv', 'vvv', 'vvv', 'vvv@live.com', '2016-04-16 07:12:14', '2016-04-16 07:12:14'),
(68, 'uv', 'uv', 'uv', 'uvu@live.com', '2016-04-17 00:33:50', '2016-04-17 00:33:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(11) NOT NULL,
  `descripcion_grupo` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `descripcion_grupo`, `estatus`, `created_at`, `updated_at`) VALUES
(12, 'Grupo x', 1, '2016-04-19 22:20:10', '2016-04-26 22:05:37'),
(13, 'Grupo z', 1, '2016-04-19 22:20:17', '2016-04-26 22:05:05'),
(18, 'XD', 1, '2016-04-19 22:29:18', '2016-04-19 22:29:34'),
(21, 'Otro grupo', 0, '2016-04-26 22:04:21', '2016-04-26 22:04:51'),
(22, 'Grupo 2', 1, '2016-04-26 22:04:29', '2016-04-26 22:04:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficina`
--

CREATE TABLE IF NOT EXISTS `oficina` (
  `id` int(11) NOT NULL,
  `plaza_id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oficina`
--

INSERT INTO `oficina` (`id`, `plaza_id`, `nombre`, `clave`, `created_at`, `updated_at`) VALUES
(2, 9, 'aaa', 'xxx', '2016-04-19 05:03:45', '2016-04-19 05:03:45'),
(3, 51, 'ooo', '0000', '2016-04-19 05:06:54', '2016-04-27 05:57:25'),
(4, 30, 'No se', '4434', '2016-04-19 05:11:21', '2016-04-27 05:57:41'),
(6, 1, 'fff', '666666', '2016-04-19 05:15:39', '2016-04-27 05:56:58'),
(8, 30, 'hjjhjhhjjhjh', 'jhjh', '2016-04-19 05:21:29', '2016-04-19 05:21:29'),
(9, 9, 'bbbb', '565656', '2016-04-27 04:33:22', '2016-04-27 04:33:22'),
(12, 1, 'ebrfb', 'fdbbfd', '2016-04-27 04:56:20', '2016-04-27 04:56:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plaza`
--

CREATE TABLE IF NOT EXISTS `plaza` (
  `id` int(11) NOT NULL,
  `nombre_plaza` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plaza`
--

INSERT INTO `plaza` (`id`, `nombre_plaza`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Plaza 1', 1, '2016-04-14 05:00:00', '2016-04-14 05:00:00'),
(3, 'Esta es la plaza 3', 0, '2016-04-15 09:19:14', '2016-04-15 09:19:14'),
(5, 'Otra mas', 1, '2016-04-15 09:33:31', '2016-04-15 09:33:31'),
(9, 'Toros', 0, '2016-04-15 09:35:50', '2016-04-15 09:35:50'),
(14, 'jjjjj', 0, '2016-04-15 10:29:29', '2016-04-15 10:29:29'),
(25, 'Plaza ejemplo', 1, '2016-04-16 05:44:08', '2016-04-16 05:44:08'),
(27, 'Una mas', 1, '2016-04-16 05:45:21', '2016-04-16 05:45:21'),
(30, 'Mi plaza', 1, '2016-04-16 07:12:32', '2016-04-16 07:12:32'),
(31, 'Esta es mi plaza XD', 0, '2016-04-19 04:33:13', '2016-04-19 06:25:56'),
(51, 'uuuuu', 1, '2016-04-27 04:51:44', '2016-04-27 04:51:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL,
  `tarifa_id` int(11) NOT NULL,
  `tipo_auto_id` int(11) NOT NULL,
  `lugar_entrega` varchar(100) DEFAULT NULL,
  `num_pedido` varchar(100) DEFAULT NULL,
  `fecha_entrega` datetime DEFAULT NULL,
  `lugar_recepcion` varchar(100) DEFAULT NULL,
  `fecha_recepcion` datetime DEFAULT NULL,
  `dias` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE IF NOT EXISTS `sucursal` (
  `id` int(11) NOT NULL,
  `gerente_id` int(11) NOT NULL,
  `plaza_id` int(11) NOT NULL,
  `nombre_sucursal` varchar(50) DEFAULT NULL,
  `direccion1` varchar(100) DEFAULT NULL,
  `direccion2` varchar(100) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `municipio_delegacion` varchar(50) DEFAULT NULL,
  `referencia` varchar(100) DEFAULT NULL,
  `cp` varchar(7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `gerente_id`, `plaza_id`, `nombre_sucursal`, `direccion1`, `direccion2`, `colonia`, `estado`, `municipio_delegacion`, `referencia`, `cp`, `created_at`, `updated_at`) VALUES
(36, 54, 14, 'aaaa', 'aaa', 'aaa', 'aaaa', 'aaa', 'aaa', 'aaaaa', 'aaa', '2016-04-21 06:05:15', '2016-04-21 06:05:15'),
(40, 53, 9, 'zzzz', 'zzzz', '', 'zzz', 'zzz', 'zz', '', 'zzz', '2016-04-21 06:12:10', '2016-04-21 06:12:10'),
(44, 55, 30, 'ooo', 'ooo', 'oooo', 'ooo', 'ooo', 'ooo', '', '889766', '2016-04-21 06:52:17', '2016-04-21 06:52:17'),
(118, 1, 1, 'iiii', 'iii', 'iii', 'iiii', 'iii', 'iii', 'iiii', '556665', '2016-04-25 22:00:55', '2016-04-25 22:00:55'),
(123, 1, 3, 'Otra mas XD', 'rrr', '', 'rrr', 'rrrrr', 'rr', '', '565656', '2016-04-25 23:55:18', '2016-04-25 23:55:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE IF NOT EXISTS `tarifa` (
  `id` int(11) NOT NULL,
  `oficina_id` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id`, `oficina_id`, `fecha_inicio`, `fecha_fin`, `estatus`, `created_at`, `updated_at`) VALUES
(4, 8, '2016-04-08', '2016-08-09', 1, '2016-04-26 04:27:29', '2016-04-27 03:32:27'),
(11, 3, '2016-04-06', '2016-07-15', 1, '2016-04-26 08:28:27', '2016-04-27 03:45:34'),
(14, 6, '2016-04-25', '2016-05-28', 1, '2016-04-26 08:44:20', '2016-04-26 08:44:20'),
(17, 4, '2016-04-08', '2016-04-14', 0, '2016-04-26 09:25:55', '2016-04-27 03:34:48'),
(23, 2, '2016-04-27', '2016-06-10', 1, '2016-04-27 03:44:58', '2016-04-27 03:44:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa_detalle`
--

CREATE TABLE IF NOT EXISTS `tarifa_detalle` (
  `id` int(11) NOT NULL,
  `tarifa_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `codigo_id` int(11) NOT NULL,
  `cobertura_id` int(11) NOT NULL,
  `tipo_vehiculo_id` int(11) NOT NULL,
  `tarifa_por_dia` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifa_detalle`
--

INSERT INTO `tarifa_detalle` (`id`, `tarifa_id`, `grupo_id`, `codigo_id`, `cobertura_id`, `tipo_vehiculo_id`, `tarifa_por_dia`, `created_at`, `updated_at`) VALUES
(27, 11, 12, 5, 3, 18, 234, '2016-04-27 03:39:19', '2016-04-27 03:39:19'),
(28, 17, 12, 3, 1, 18, 234, '2016-04-27 03:40:28', '2016-04-27 03:40:28'),
(29, 17, 21, 19, 3, 18, 345, '2016-04-27 03:40:40', '2016-04-27 03:40:40'),
(30, 17, 18, 19, 2, 18, 345, '2016-04-27 03:41:00', '2016-04-27 03:41:00'),
(31, 23, 21, 18, 2, 18, 345, '2016-04-27 03:44:59', '2016-04-27 03:44:59'),
(32, 23, 13, 3, 2, 18, 323, '2016-04-27 03:44:59', '2016-04-27 03:44:59'),
(33, 23, 18, 6, 3, 14, 231, '2016-04-27 03:44:59', '2016-04-27 03:44:59'),
(34, 23, 12, 3, 2, 18, 345, '2016-04-27 03:44:59', '2016-04-27 03:44:59'),
(35, 11, 13, 6, 2, 14, 345, '2016-04-27 03:45:31', '2016-04-27 03:45:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_sucursal`
--

CREATE TABLE IF NOT EXISTS `telefono_sucursal` (
  `id` int(11) NOT NULL,
  `sucursal_id` int(11) NOT NULL,
  `tipo_tel_id` int(11) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telefono_sucursal`
--

INSERT INTO `telefono_sucursal` (`id`, `sucursal_id`, `tipo_tel_id`, `numero`, `created_at`, `updated_at`) VALUES
(6, 44, 1, '2223334455', '2016-04-21 06:52:22', '2016-04-21 06:52:22'),
(7, 44, 5, '666778899', '2016-04-21 06:52:25', '2016-04-21 06:52:25'),
(8, 44, 11, '1110009988', '2016-04-21 06:52:28', '2016-04-21 06:52:28'),
(113, 118, 11, '99999', '2016-04-25 22:44:06', '2016-04-25 22:44:06'),
(120, 118, 5, '9906542', '2016-04-25 23:47:42', '2016-04-25 23:47:42'),
(127, 123, 11, '5000054', '2016-04-25 23:55:19', '2016-04-25 23:55:49'),
(128, 123, 1, '9992332', '2016-04-25 23:55:19', '2016-04-25 23:55:49'),
(129, 123, 5, '4554544', '2016-04-25 23:55:49', '2016-04-25 23:55:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tel`
--

CREATE TABLE IF NOT EXISTS `tipo_tel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_tel`
--

INSERT INTO `tipo_tel` (`id`, `nombre`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Nextel', 1, '2016-04-14 05:00:00', '2016-04-14 05:00:00'),
(5, 'Oficina', 1, '2016-04-20 04:40:48', '2016-04-20 21:16:19'),
(11, 'Fijo', 1, '2016-04-20 05:18:01', '2016-04-21 04:29:33'),
(17, 'prueba', 0, '2016-04-27 04:06:50', '2016-04-27 04:06:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo`
--

CREATE TABLE IF NOT EXISTS `tipo_vehiculo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`id`, `descripcion`, `foto`, `estatus`, `created_at`, `updated_at`) VALUES
(14, 'oooo!!', 'camionetas1.jpg', 1, '2016-04-19 00:46:11', '2016-04-19 01:49:42'),
(18, 'wefwe', 'chicos.jpg', 1, '2016-04-19 23:09:18', '2016-04-19 23:09:18'),
(43, 'Vehículo 3', 'mediano1.jpg', 1, '2016-04-27 09:44:40', '2016-04-27 09:44:40'),
(44, 'Otro vehiculo', '09e949af77d6bb912f39113eb249f2e3.jpg', NULL, '2016-04-27 09:45:10', '2016-04-27 10:43:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Angel99', '$2y$10$I3BClkWkkBQhk2KHq5UmIO1CS6.RhPZhA4CWjwJ.sa.vYM5ia5Emq', 'angeldarkkiller99@live.com', NULL, '2016-04-07 03:40:59', '2016-04-20 10:28:47'),
(2, 'Luis99', '$2y$10$/Xw3l/94iAqiaMJjzfkqPOdimqxWN8k1Z4dwth1W08yZcwi3Vfium', 'luis_mh@outlook.es', 't3XC4ifzl2FdXXAAggvZ7NLnauHGg0zvJ7fW6pqjlkWAXq2vSR3GbzEiQunI', '2016-04-07 03:42:24', '2016-04-27 11:27:42'),
(21, 'Yeins99', '$2y$10$S/5YbcL/L.20Drlaa8CSZ.GwPs6YQpqBDDtIQTg3AjBdari0wGp/C', 'ye@hotmail.com', NULL, '2016-04-27 07:27:06', '2016-04-27 07:27:06'),
(22, 'prueba', '$2y$10$6g56p5jnKB70XLv9jbiB/.iACR522TSF24VIkvDt7fzoOmptbNrxq', 'prueba@gmail.com', NULL, '2016-04-27 07:29:08', '2016-04-27 07:29:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente_reserva1_idx` (`reserva_id`);

--
-- Indices de la tabla `cobertura`
--
ALTER TABLE `cobertura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oficina`
--
ALTER TABLE `oficina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_oficina_plaza1_idx` (`plaza_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `plaza`
--
ALTER TABLE `plaza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sucursal_gerente1_idx` (`gerente_id`),
  ADD KEY `fk_sucursal_plaza1_idx` (`plaza_id`);

--
-- Indices de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tarifa_oficina1_idx` (`oficina_id`);

--
-- Indices de la tabla `tarifa_detalle`
--
ALTER TABLE `tarifa_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tarifa_detalle_tarifa1_idx` (`tarifa_id`),
  ADD KEY `fk_tarifa_detalle_grupo1_idx` (`grupo_id`),
  ADD KEY `fk_tarifa_detalle_codigo1_idx` (`codigo_id`),
  ADD KEY `fk_tarifa_detalle_cobertura1_idx` (`cobertura_id`),
  ADD KEY `fk_tarifa_detalle_tipo_vehiculo1_idx` (`tipo_vehiculo_id`);

--
-- Indices de la tabla `telefono_sucursal`
--
ALTER TABLE `telefono_sucursal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_telefono_sucursal_sucursal1_idx` (`sucursal_id`),
  ADD KEY `fk_telefono_sucursal_tipo_tel1_idx` (`tipo_tel_id`);

--
-- Indices de la tabla `tipo_tel`
--
ALTER TABLE `tipo_tel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cobertura`
--
ALTER TABLE `cobertura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `codigo`
--
ALTER TABLE `codigo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `oficina`
--
ALTER TABLE `oficina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `plaza`
--
ALTER TABLE `plaza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `tarifa_detalle`
--
ALTER TABLE `tarifa_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `telefono_sucursal`
--
ALTER TABLE `telefono_sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT de la tabla `tipo_tel`
--
ALTER TABLE `tipo_tel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_reserva1` FOREIGN KEY (`reserva_id`) REFERENCES `reserva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `oficina`
--
ALTER TABLE `oficina`
  ADD CONSTRAINT `fk_oficina_plaza1` FOREIGN KEY (`plaza_id`) REFERENCES `plaza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `fk_sucursal_gerente1` FOREIGN KEY (`gerente_id`) REFERENCES `gerente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sucursal_plaza1` FOREIGN KEY (`plaza_id`) REFERENCES `plaza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD CONSTRAINT `fk_tarifa_oficina1` FOREIGN KEY (`oficina_id`) REFERENCES `oficina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tarifa_detalle`
--
ALTER TABLE `tarifa_detalle`
  ADD CONSTRAINT `fk_tarifa_detalle_cobertura1` FOREIGN KEY (`cobertura_id`) REFERENCES `cobertura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarifa_detalle_codigo1` FOREIGN KEY (`codigo_id`) REFERENCES `codigo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarifa_detalle_grupo1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarifa_detalle_tarifa1` FOREIGN KEY (`tarifa_id`) REFERENCES `tarifa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarifa_detalle_tipo_vehiculo1` FOREIGN KEY (`tipo_vehiculo_id`) REFERENCES `tipo_vehiculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefono_sucursal`
--
ALTER TABLE `telefono_sucursal`
  ADD CONSTRAINT `fk_telefono_sucursal_sucursal1` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_telefono_sucursal_tipo_tel1` FOREIGN KEY (`tipo_tel_id`) REFERENCES `tipo_tel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
