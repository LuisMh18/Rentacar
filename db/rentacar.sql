-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-04-2016 a las 23:22:23
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
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE IF NOT EXISTS `codigo` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`id`, `codigo`, `descripcion`, `estatus`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Primer código', 1, '2016-04-18 23:10:00', '2016-04-18 23:10:00'),
(2, 'cc', 'ewweew', 0, '2016-04-18 23:17:04', '2016-04-18 23:17:04'),
(3, 'xx', 'xxxxxxx', 1, '2016-04-18 23:17:40', '2016-04-18 23:17:40'),
(4, 'uuu', 'uuuuu', 1, '2016-04-18 23:18:41', '2016-04-18 23:52:45'),
(5, 'bbb', 'bbbbbb', 0, '2016-04-18 23:19:08', '2016-04-18 23:19:08'),
(6, 'oo', 'ooooo', 1, '2016-04-18 23:19:28', '2016-04-18 23:19:28'),
(8, 'kk', 'kkkkk', 0, '2016-04-18 23:22:16', '2016-04-18 23:22:16'),
(18, 'hhh', 'hhh', 1, '2016-04-19 22:31:06', '2016-04-19 22:31:06'),
(19, 'kkk', 'kkk', 0, '2016-04-19 22:31:12', '2016-04-19 22:31:12'),
(21, 'llll', 'lll', 1, '2016-04-19 22:31:28', '2016-04-19 22:31:28'),
(23, ':p', 'No se que poner', 0, '2016-04-19 22:39:24', '2016-04-19 22:39:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerente`
--

INSERT INTO `gerente` (`id`, `nombre`, `paterno`, `materno`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Teresa', 'Diaz', 'No se', 'tere.diaz@emotionsrentacar.com', '2016-04-13 05:00:00', '2016-04-13 05:00:00'),
(6, 'bbbb', 'bbb', 'bbb', 'bbbb@outlook.es', '2016-04-15 01:46:53', '2016-04-15 01:46:53'),
(53, 'dsds', 'sddsds', 'dsdsdsd', 'saas@live.com', '2016-04-15 08:06:47', '2016-04-15 08:06:47'),
(54, 'saxsax', 'saaaaa', 'sax', 'saxasxa@live.com', '2016-04-15 08:07:54', '2016-04-15 08:08:03'),
(55, 'ccc', 'ccc', '', 'cc@outlook.es', '2016-04-15 08:11:12', '2016-04-15 08:17:47'),
(65, 'uuu', 'uuu', 'uuu', 'uuuu@live.com', '2016-04-16 05:19:27', '2016-04-16 05:19:27'),
(67, 'vvvv', 'vvv', 'vvv', 'vvv@live.com', '2016-04-16 07:12:14', '2016-04-16 07:12:14'),
(68, 'uv', 'uv', 'uv', 'uvu@live.com', '2016-04-17 00:33:50', '2016-04-17 00:33:50'),
(69, 'wwww', 'www', 'www', 'wwww@live.com', '2016-04-17 00:46:34', '2016-04-17 00:46:34'),
(70, 'ggg', 'ggg', 'ggg', 'ggg@live.com', '2016-04-18 21:00:56', '2016-04-18 21:00:56'),
(71, 'hhh', 'hhh', 'hh', 'hhh@outlook.es', '2016-04-19 06:19:55', '2016-04-19 06:19:55'),
(78, 'liilli', 'iilil', 'iililil', 'iliil@hotmail.com', '2016-04-19 07:21:52', '2016-04-19 07:21:52'),
(79, 'qwqwwq', 'wqwqwq', 'wqwqwq', 'wqqwwq@outlok.es', '2016-04-19 07:22:44', '2016-04-19 07:22:44'),
(80, ':D', ':D', ':D', ':D@live.com', '2016-04-19 07:31:07', '2016-04-19 07:31:07'),
(81, 'grentenose', 'grentenose', 'grentenose', 'grentenose@outlook.es', '2016-04-19 08:10:32', '2016-04-19 08:10:32'),
(82, 'dwqd', 'wqd', 'wdq', 'qwd@live.com', '2016-04-19 08:46:23', '2016-04-19 08:46:23'),
(83, 'dwqdqwd', 'dqwdqwd', '', 'xqw@live.com', '2016-04-19 09:41:06', '2016-04-19 09:41:06'),
(86, 'dw', 'dwqd', 'qwdqw', 'gefwegg@live.com', '2016-04-19 21:36:39', '2016-04-19 21:36:39'),
(87, 'xdxd', 'xdxd', '', 'xdxd@live.com', '2016-04-19 21:37:16', '2016-04-19 21:45:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `descripcion`, `estatus`, `created_at`, `updated_at`) VALUES
(12, 'xxxx', 1, '2016-04-19 22:20:10', '2016-04-19 22:20:10'),
(13, 'zzzz', 0, '2016-04-19 22:20:17', '2016-04-19 22:29:42'),
(17, 'No me lo se', 0, '2016-04-19 22:26:44', '2016-04-19 22:26:44'),
(18, 'XD', 1, '2016-04-19 22:29:18', '2016-04-19 22:29:34');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oficina`
--

INSERT INTO `oficina` (`id`, `plaza_id`, `nombre`, `clave`, `created_at`, `updated_at`) VALUES
(2, 9, 'aaa', 'xxx', '2016-04-19 05:03:45', '2016-04-19 05:03:45'),
(3, 25, 'uuu', 'yy', '2016-04-19 05:06:54', '2016-04-19 05:06:54'),
(4, 5, 'ggggg', 'gg', '2016-04-19 05:11:21', '2016-04-19 05:11:21'),
(6, 5, 'zzz', 'rr', '2016-04-19 05:15:39', '2016-04-19 05:15:39'),
(7, 31, 'tggtgtgt', 'tgtg', '2016-04-19 05:16:31', '2016-04-19 05:16:31'),
(8, 30, 'hjjhjhhjjhjh', 'jhjh', '2016-04-19 05:21:29', '2016-04-19 05:21:29');

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plaza`
--

INSERT INTO `plaza` (`id`, `nombre_plaza`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Plaza 1', 1, '2016-04-14 05:00:00', '2016-04-14 05:00:00'),
(3, 'Esta es la plaza 3', 0, '2016-04-15 09:19:14', '2016-04-15 09:19:14'),
(5, 'Otra mas', 1, '2016-04-15 09:33:31', '2016-04-15 09:33:31'),
(9, 'Toros', 0, '2016-04-15 09:35:50', '2016-04-15 09:35:50'),
(13, 'aaaaa', 1, '2016-04-15 10:28:57', '2016-04-15 10:35:46'),
(14, 'jjjjj', 0, '2016-04-15 10:29:29', '2016-04-15 10:29:29'),
(21, 'gregerg', 1, '2016-04-15 22:41:47', '2016-04-15 22:41:54'),
(25, 'Plaza ejemplo', 1, '2016-04-16 05:44:08', '2016-04-16 05:44:08'),
(26, 'Plaza 2 XD', 1, '2016-04-16 05:45:09', '2016-04-16 05:45:09'),
(27, 'Una mas', 1, '2016-04-16 05:45:21', '2016-04-16 05:45:21'),
(29, 'gggggg', 1, '2016-04-16 05:47:43', '2016-04-16 05:47:43'),
(30, 'Mi plaza', 1, '2016-04-16 07:12:32', '2016-04-16 07:12:32'),
(31, 'Esta es mi plaza XD', 0, '2016-04-19 04:33:13', '2016-04-19 06:25:56'),
(34, ':p', 1, '2016-04-19 07:30:48', '2016-04-19 07:30:48'),
(35, 'plazanoseXD', 1, '2016-04-19 08:10:42', '2016-04-19 08:10:42'),
(36, ':DD', 1, '2016-04-19 09:54:26', '2016-04-19 09:54:26'),
(37, 'dq', 1, '2016-04-19 20:39:28', '2016-04-19 20:39:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL,
  `tarifa_id` int(11) NOT NULL,
  `tipo_auto_id` int(11) NOT NULL,
  `lugar_entrega` varchar(100) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `gerente_id`, `plaza_id`, `nombre_sucursal`, `direccion1`, `direccion2`, `colonia`, `estado`, `municipio_delegacion`, `referencia`, `cp`, `created_at`, `updated_at`) VALUES
(1, 55, 27, 'yyyy', 'yyy', 'yyy', 'yyy', 'yyy', 'yy', 'yyyy', 'y', '2016-04-14 05:00:00', '2016-04-19 21:30:24'),
(33, 1, 1, 'aaaa', 'aaa', '', 'aaa', 'aa', 'aa', 'aaa', 'aaa', '2016-04-19 21:32:26', '2016-04-19 21:32:26'),
(35, 1, 9, 'yyyy', 'yyy', 'yy', 'yyy', 'yy', 'yyy', '', 'yyy', '2016-04-19 21:54:39', '2016-04-19 21:54:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE IF NOT EXISTS `tarifa` (
  `id` int(11) NOT NULL,
  `oficina_id` int(11) NOT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `total` double NOT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa_detalle`
--

CREATE TABLE IF NOT EXISTS `tarifa_detalle` (
  `id` int(11) NOT NULL,
  `tarifa_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `codigo_id` int(11) NOT NULL,
  `tipo_vehiculo_id` int(11) NOT NULL,
  `tarifa_por_dia` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telefono_sucursal`
--

INSERT INTO `telefono_sucursal` (`id`, `sucursal_id`, `tipo_tel_id`, `numero`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '(449)273-3229', '2016-04-14 05:00:00', '2016-04-14 05:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_tel`
--

INSERT INTO `tipo_tel` (`id`, `nombre`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Nextel', 1, '2016-04-14 05:00:00', '2016-04-14 05:00:00'),
(3, 'Prueba', 0, '2016-04-20 04:33:29', '2016-04-20 04:33:29'),
(5, 'oooo', 1, '2016-04-20 04:40:48', '2016-04-20 05:09:55'),
(7, 'kkkk', 0, '2016-04-20 04:41:03', '2016-04-20 05:10:04'),
(8, 'uuuuuxx', 1, '2016-04-20 04:41:09', '2016-04-20 05:09:41'),
(11, 'XD', 0, '2016-04-20 05:18:01', '2016-04-20 05:19:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo`
--

CREATE TABLE IF NOT EXISTS `tipo_vehiculo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`id`, `descripcion`, `estatus`, `created_at`, `updated_at`) VALUES
(2, 'kkkkk', 1, '2016-04-19 00:19:37', '2016-04-19 00:19:37'),
(3, 'zzzz', 0, '2016-04-19 00:25:26', '2016-04-19 00:25:26'),
(5, 'aaaaaa', 0, '2016-04-19 00:28:12', '2016-04-19 00:28:12'),
(7, 'xx', 1, '2016-04-19 00:29:36', '2016-04-19 00:29:36'),
(8, 'ggggg', 0, '2016-04-19 00:29:45', '2016-04-19 00:29:45'),
(9, 'zzzz', 0, '2016-04-19 00:29:52', '2016-04-19 00:29:52'),
(11, 'yyyyy', 1, '2016-04-19 00:30:23', '2016-04-19 00:30:23'),
(12, 'hhhhh', 0, '2016-04-19 00:30:37', '2016-04-19 00:46:02'),
(14, 'oooo!!', 1, '2016-04-19 00:46:11', '2016-04-19 01:49:42'),
(18, 'wefwe', 0, '2016-04-19 23:09:18', '2016-04-19 23:09:18');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Angel99', '$2y$10$I3BClkWkkBQhk2KHq5UmIO1CS6.RhPZhA4CWjwJ.sa.vYM5ia5Emq', 'angeldarkkiller99@live.com', NULL, '2016-04-07 03:40:59', '2016-04-20 10:28:47'),
(2, 'Luis99', '$2y$10$/Xw3l/94iAqiaMJjzfkqPOdimqxWN8k1Z4dwth1W08yZcwi3Vfium', 'luis_mh@outlook.es', '8yN5aUMzJ8KupaNnTumivWJhtqrzYvTlGCDIJIz83goW8p2kd3ljWT1HKQaW', '2016-04-07 03:42:24', '2016-04-19 09:56:07'),
(3, 'Yeins999', '$2y$10$HZ.9SexAojpVu.QTmiA.0.auIdNXxsw5AgLx3ljYCoNOhlgo1v7Mi', 'yeins@live.com', 'gv7zg0ZiLSo4w092JscDcyZdl4JtopXzQBzHOA7lsJce9EDqL9ntDPGggi4U', '2016-04-13 23:07:21', '2016-04-20 11:19:21'),
(13, 'Prueba', '$2y$10$Um7wXMg40fC3RXti2L1XquBd3D9eLi5eyvjNEiVbBcXtjJ4qtgWNq', 'prueba@hotmail.com', NULL, '2016-04-20 10:35:15', '2016-04-20 10:35:15'),
(14, 'prueba2', '$2y$10$FtrIgjvn1FuFsdYth3bMLuKbg4ysoM1VTZnGhxYcFsTTX8Y3tf9ry', 'pruba2@outlook.es', NULL, '2016-04-20 10:43:45', '2016-04-20 10:43:45');

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
-- AUTO_INCREMENT de la tabla `codigo`
--
ALTER TABLE `codigo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `oficina`
--
ALTER TABLE `oficina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `plaza`
--
ALTER TABLE `plaza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tarifa_detalle`
--
ALTER TABLE `tarifa_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `telefono_sucursal`
--
ALTER TABLE `telefono_sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_tel`
--
ALTER TABLE `tipo_tel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
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
