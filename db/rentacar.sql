-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-05-2016 a las 01:28:30
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
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `num_licencia` varchar(50) DEFAULT NULL,
  `comentarios` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `email`, `telefono`, `num_licencia`, `comentarios`, `created_at`, `updated_at`) VALUES
(1, 'Pedro', 'Lopez', 'pedro@live.com', '2223334455', '323-9823ui', 'Sin comentarios', '2016-04-28 05:00:00', '2016-04-28 05:00:00'),
(2, 'Juan', 'Gomez', 'juanjo@hotmail.com', '45455455', '343-943-43', NULL, '2016-04-28 05:00:00', '2016-04-28 05:00:00'),
(3, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-04-29 11:07:50', '2016-04-29 11:07:50'),
(4, 'ppp', 'ppp', 'ppp@outlook.es', '777666554', '9821-9782', '', '2016-04-29 12:36:42', '2016-04-29 12:36:42'),
(5, 'ooo', 'ooo', 'ooo@live.com', '77666554', '9812-0812', 'Comentarios', '2016-04-29 12:39:21', '2016-04-29 12:39:21'),
(6, 'xxxx', 'xxxx', 'xxx@hotmail.com', '77766554', '97812-1298', '', '2016-04-29 12:42:58', '2016-04-29 12:42:58'),
(7, 'yyy', 'yyyy', 'yyy@outlook.com', '8889996654', '232-9832', 'XD', '2016-04-29 12:46:11', '2016-04-29 12:46:11'),
(8, 'mmmm', 'mmmm', 'mmm@gmail.com', '0009998877', '98612-12-12', '', '2016-04-29 13:21:46', '2016-04-29 13:21:46'),
(9, 'nnnn', 'nnnn', 'nnn@hotmail.com', '4443332288', '9812-9821', '', '2016-04-29 14:22:55', '2016-04-29 14:22:55'),
(10, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-04-29 23:14:16', '2016-04-29 23:14:16'),
(11, 'pppp', 'pppp', 'pppp@live.com', '6665554433', '23-2323-208', '', '2016-04-29 23:28:05', '2016-04-29 23:28:05'),
(12, 'aaaa', 'aaa', 'aaaaa@live.com', 'aaa', 'aaa', 'aaaa', '2016-05-02 21:18:27', '2016-05-02 21:18:27'),
(13, 'pppp', 'pppp', 'ppp@live.com', '979898', '989987', 'comentarios', '2016-05-02 22:23:52', '2016-05-02 22:23:52'),
(14, 'uuu', 'uuu', 'uuu@outlook.es', '888776655', '8302838', '', '2016-05-03 05:13:58', '2016-05-03 05:13:58'),
(15, 'jjj', 'jjj', 'jjj@hotmail.com', '8778772', '98283', 'Sin comentarios', '2016-05-03 05:32:59', '2016-05-03 05:32:59'),
(16, 'yyy', 'yyy', 'yyy@live.com', '972393', '923-2303', 'Nos e que comentar', '2016-05-03 05:36:07', '2016-05-03 05:36:07'),
(17, 'hhh', 'hhh', 'hhh@outlook.es', '799799', '923-232', 'Comentarios', '2016-05-03 05:38:22', '2016-05-03 05:38:22'),
(18, 'xxx', 'xxx', 'xx@live.com', '444556675', '3223-2323-23', 'Comentarios', '2016-05-03 07:49:56', '2016-05-03 07:49:56'),
(19, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-03 10:20:33', '2016-05-03 10:20:33'),
(20, 'xxxx', 'xxxx', 'xxx@hotmail.com', '77766554', '97812-1298', '', '2016-05-03 10:24:15', '2016-05-03 10:24:15'),
(21, 'vvv', 'vvv', 'vv@gmail.com', '867879', '98721-1212', 'Sin comentarios', '2016-05-03 10:28:17', '2016-05-03 10:28:17'),
(22, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-03 10:31:17', '2016-05-03 10:31:17'),
(23, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-03 10:39:29', '2016-05-03 10:39:29'),
(24, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-03 10:45:44', '2016-05-03 10:45:44'),
(25, 'ff', 'ff', 'fff@outlook.es', '87799', '7213-332', '', '2016-05-03 10:48:03', '2016-05-03 10:48:03'),
(26, 'jj', 'jjj', 'jjj@live.com', '987658', '23-22323-32', '', '2016-05-03 11:16:27', '2016-05-03 11:16:27'),
(27, 'ggg', 'ggg', 'ggg@outlook.es', '888777665', '343-3443-3', 'Comentarios', '2016-05-03 20:14:36', '2016-05-03 20:14:36'),
(28, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-03 21:05:22', '2016-05-03 21:05:22'),
(29, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-03 21:41:58', '2016-05-03 21:41:58'),
(30, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-04 05:11:28', '2016-05-04 05:11:28');

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
(2, 'Seguro cubierto contra daños a terceros. Colisiones con un 20% por el deducible.', 0, '2016-04-25 04:14:12', '2016-04-28 03:21:36'),
(3, 'Seguro cubierto contra daños a terceros. Colisiones con un 5% por el deducible.', 1, '2016-04-25 04:14:26', '2016-04-28 03:21:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE IF NOT EXISTS `codigo` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `descripcion_codigo` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`id`, `codigo`, `descripcion_codigo`, `tipo`, `estatus`, `created_at`, `updated_at`) VALUES
(4, 'SCAR', 'MEDIANO', 1, 1, '2016-04-18 23:18:41', '2016-04-28 06:54:50'),
(6, 'ICMR', 'INTERMEDIO', 1, 1, '2016-04-18 23:19:28', '2016-04-28 06:54:14'),
(8, 'CCAR', 'COMPACTO', 0, 1, '2016-04-18 23:22:16', '2016-04-28 07:02:23'),
(18, 'CCMR', 'COMPACTO', 0, 1, '2016-04-19 22:31:06', '2016-04-28 06:53:02'),
(19, 'ECMN', 'ECONOMICO', 0, 1, '2016-04-19 22:31:12', '2016-04-28 06:52:23'),
(24, 'FCMR', 'FULLSIZE', 2, 1, '2016-04-28 06:57:20', '2016-04-28 06:57:20'),
(25, 'PCAR', 'PREMIUM', 2, 1, '2016-04-28 06:58:08', '2016-04-28 06:58:08'),
(26, 'IPNR', 'PICK UP CS', 3, 1, '2016-04-28 06:59:25', '2016-04-28 06:59:25'),
(27, 'IVAR', 'MINIVAN', 3, 1, '2016-04-28 07:00:01', '2016-04-28 07:00:01'),
(28, 'SVAR', 'MAXIVAN', 3, 1, '2016-04-28 07:00:41', '2016-04-28 07:00:41'),
(29, 'FRAR', 'VAN DE LUJO', 3, 1, '2016-04-28 07:01:19', '2016-04-28 07:01:19'),
(31, 'effwe', 'fwefwe', 1, 1, '2016-05-03 22:21:02', '2016-05-03 22:21:02'),
(32, 'qwdqw', 'dqwd', 0, 0, '2016-05-03 22:22:07', '2016-05-03 22:22:07'),
(35, 'yyyxx', 'yyyxxx', 3, 1, '2016-05-03 22:26:21', '2016-05-03 22:47:34'),
(41, 'jjjxxx', 'jjjjxxx', 1, 0, '2016-05-03 22:32:30', '2016-05-03 22:47:47'),
(43, 'uuux--', 'uuuux--', 0, 0, '2016-05-03 22:33:41', '2016-05-03 22:47:16');

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerente`
--

INSERT INTO `gerente` (`id`, `nombre`, `paterno`, `materno`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Teresa', 'Diaz', '', 'tere.diaz@emotionsrentacar.com', '2016-04-13 05:00:00', '2016-04-28 03:31:59'),
(53, 'Ariel', 'Quiroz', '', 'ariel.quiroz@emotionsrentacar.com', '2016-04-15 08:06:47', '2016-04-28 03:35:12'),
(54, 'Gerardo', 'Echazarreta', 'Trujillo', 'gerardo.echazarreta@emotionsrentacar.com', '2016-04-15 08:07:54', '2016-04-28 03:34:33'),
(55, 'Virginia', 'Gimenez', '', 'virginia.gimenez@emotionsrentacar.com', '2016-04-15 08:11:12', '2016-04-28 03:33:33');

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
(12, 'DA', 1, '2016-04-19 22:20:10', '2016-04-28 03:17:42'),
(13, 'D', 1, '2016-04-19 22:20:17', '2016-04-28 03:17:36'),
(18, 'CA', 1, '2016-04-19 22:29:18', '2016-04-28 03:17:26'),
(21, 'C1', 0, '2016-04-26 22:04:21', '2016-04-28 03:17:18'),
(22, 'B', 1, '2016-04-26 22:04:29', '2016-04-28 03:17:11');

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
(3, 30, 'CD México', 'CD México', '2016-04-19 05:06:54', '2016-05-02 23:15:25'),
(4, 1, 'Monterrey', 'Monterrey', '2016-04-19 05:11:21', '2016-05-02 23:16:09'),
(6, 31, 'Toluca', 'Toluca', '2016-04-19 05:15:39', '2016-05-02 23:16:16'),
(8, 25, 'Ciudad Aguascalientes', 'Aguascalientes', '2016-04-19 05:21:29', '2016-05-03 09:07:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_reminders`
--

INSERT INTO `password_reminders` (`email`, `token`, `created_at`) VALUES
('luis_mh@outlook.es', 'b5927ffeaf95714f665328f4fcc0916b21537afa', '2016-05-03 23:19:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plaza`
--

INSERT INTO `plaza` (`id`, `nombre_plaza`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Plaza 3', 1, '2016-04-14 05:00:00', '2016-05-02 22:49:40'),
(3, 'Esta es la plaza 3', 0, '2016-04-15 09:19:14', '2016-04-15 09:19:14'),
(25, 'Plaza 2', 1, '2016-04-16 05:44:08', '2016-05-02 22:49:29'),
(30, 'Plaza 1', 1, '2016-04-16 07:12:32', '2016-05-02 22:49:19'),
(31, 'Plaza 4', 1, '2016-05-02 22:51:52', '2016-05-02 22:51:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `num_reserva` varchar(100) DEFAULT NULL,
  `lugar_entrega` varchar(100) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `hora_entrega` varchar(50) NOT NULL,
  `lugar_devolucion` varchar(100) DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `hora_devolucion` varchar(50) NOT NULL,
  `tarifa_por_dia` double DEFAULT NULL,
  `dias` varchar(50) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `vehiculo` varchar(50) NOT NULL,
  `transmision` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `cliente_id`, `num_reserva`, `lugar_entrega`, `fecha_entrega`, `hora_entrega`, `lugar_devolucion`, `fecha_devolucion`, `hora_devolucion`, `tarifa_por_dia`, `dias`, `total`, `vehiculo`, `transmision`, `foto`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 19, '20160503052033', 'Aguascalientes', '2016-05-03', '5:01 AM', 'Aguascalientes', '2016-05-12', '5:00 AM', 400, '9', 3600, 'AVEO - GOL SEDAN', 1, 'megane.jpg', '2016-05-03', '2016-05-03 10:20:33', '2016-05-03 10:20:33'),
(2, 20, '20160503052415', 'México', '2016-05-03', '12:00 AM', 'Aguascalientes', '2016-05-05', '3:00 AM', 900, '2', 1800, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-05-03', '2016-05-03 10:24:15', '2016-05-03 10:24:15'),
(3, 21, '20160503052817', 'México', '2016-05-12', '2:10 PM', 'México', '2016-05-03', '3:00 PM', 1800, '-9', -16200, 'EXPRESS VAN - URBAN - HI ACE', 2, 'imagenes-de-camionetas-blanca.jpg', '2016-05-03', '2016-05-03 10:28:17', '2016-05-03 10:28:17'),
(4, 22, '20160503053117', 'Aguascalientes', '2016-05-03', '2:00 AM', 'México', '2016-05-06', '5:00 PM', 800, '3', 2400, 'VERSA', 2, 'grande1.jpg', '2016-05-03', '2016-05-03 10:31:17', '2016-05-03 10:31:17'),
(5, 23, '20160503053929', 'Aguascalientes', '2016-05-10', '10:00 AM', 'Aguascalientes', '2016-05-25', '3:00 PM', 800, '15', 12000, 'ELANTRA', 2, 'Honda-Jazz-20151.jpg', '2016-05-03', '2016-05-03 10:39:29', '2016-05-03 10:39:29'),
(6, 24, '20160503054545', 'Aguascalientes', '2016-05-03', '3:00 PM', 'México', '2016-05-26', '1:00 PM', 1800, '23', 41400, 'EXPEDITION - SUBURBAN', 2, 'Auto_ford_ecosport_mv_frente.gif', '2016-05-03', '2016-05-03 10:45:45', '2016-05-03 10:45:45'),
(7, 25, '20160503054803', 'México', '2016-05-12', '3:01 AM', 'Aguascalientes', '2016-05-15', '3:03 PM', 600, '3', 1800, 'TIIDA', 1, 'mediano1.jpg', '2016-05-03', '2016-05-03 10:48:03', '2016-05-03 10:48:03'),
(8, 26, '20160503061627', 'México', '2016-05-03', '3:00 AM', 'México', '2017-01-01', '4:02 AM', 400, '243', 97200, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', '2016-05-03', '2016-05-03 11:16:27', '2016-05-03 11:16:27'),
(9, 27, '20160503151436', 'Aguascalientes', '2016-05-05', '1:00 PM', 'Aguascalientes', '2016-05-25', '3:00 PM', 700, '20', 14000, 'VERSA', 1, 'grande1.jpg', '2016-05-03', '2016-05-03 20:14:36', '2016-05-03 20:14:36'),
(10, 28, '20160503160522', 'México', '2016-05-05', '5:00 PM', 'Aguascalientes', '2016-05-28', '1:00 PM', 600, '23', 13800, 'TIIDA', 1, 'mediano1.jpg', '2016-05-03', '2016-05-03 21:05:22', '2016-05-03 21:05:22'),
(11, 29, '20160503164158', 'Aguascalientes', '2016-05-03', '3:00 PM', 'México', '2016-05-04', '12:00 AM', 400, '1', 400, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', '2016-05-03', '2016-05-03 21:41:58', '2016-05-03 21:41:58'),
(12, 30, '20160504001128', 'Aguascalientes', '2016-05-04', '3:00 PM', 'México', '2016-05-26', '5:00 PM', 700, '22', 15400, 'TIIDA', 2, 'mediano1.jpg', '2016-05-04', '2016-05-04 05:11:28', '2016-05-04 05:11:28');

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
(40, 53, 31, 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', 'Sin referencias', '98863', '2016-04-21 06:12:10', '2016-05-02 22:52:10'),
(44, 54, 1, 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '', '889766', '2016-04-21 06:52:17', '2016-05-02 22:51:26'),
(118, 55, 30, 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', 'Referencias', '556665', '2016-04-25 22:00:55', '2016-04-28 03:39:46'),
(123, 1, 25, 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '', '565656', '2016-04-25 23:55:18', '2016-05-02 22:51:07');

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id`, `oficina_id`, `fecha_inicio`, `fecha_fin`, `estatus`, `created_at`, `updated_at`) VALUES
(26, 3, '2016-04-28', '2016-05-31', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(27, 3, '2016-06-01', '2016-07-31', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(28, 3, '2016-08-01', '2016-09-30', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(29, 3, '2016-10-01', '2016-11-30', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(30, 3, '2016-12-01', '2017-01-01', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(31, 8, '2016-04-28', '2016-05-31', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(32, 8, '2016-06-01', '2016-07-31', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(33, 8, '2016-08-01', '2016-09-30', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(34, 8, '2016-10-01', '2016-11-30', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(35, 8, '2016-12-01', '2017-01-01', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47');

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
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifa_detalle`
--

INSERT INTO `tarifa_detalle` (`id`, `tarifa_id`, `grupo_id`, `codigo_id`, `cobertura_id`, `tipo_vehiculo_id`, `tarifa_por_dia`, `created_at`, `updated_at`) VALUES
(68, 26, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(69, 26, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(70, 26, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(71, 26, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(72, 26, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(73, 26, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(74, 26, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(75, 26, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(76, 26, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(77, 26, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(78, 26, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(79, 26, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(80, 26, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(81, 26, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(82, 26, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(83, 26, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(84, 27, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(85, 27, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(86, 27, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(87, 27, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(88, 27, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(89, 27, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(90, 27, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(91, 27, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(92, 27, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(93, 27, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(94, 27, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(95, 27, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(96, 27, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(97, 27, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(98, 27, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(99, 27, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(100, 28, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(101, 28, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(102, 28, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(103, 28, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(104, 28, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(105, 28, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(106, 28, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(107, 28, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(108, 28, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(109, 28, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(110, 28, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(111, 28, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(112, 28, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(113, 28, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(114, 28, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(115, 28, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(116, 29, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(117, 29, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(118, 29, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(119, 29, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(120, 29, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(121, 29, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(122, 29, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(123, 29, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(124, 29, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(125, 29, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(126, 29, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(127, 29, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(128, 29, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(129, 29, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(130, 29, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(131, 29, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(132, 30, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(133, 30, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(134, 30, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(135, 30, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(136, 30, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(137, 30, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(138, 30, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(139, 30, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(140, 30, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(141, 30, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(142, 30, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(143, 30, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(144, 30, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(145, 30, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(146, 30, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(147, 30, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(148, 31, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(149, 31, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(150, 31, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(151, 31, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(152, 31, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(153, 31, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(154, 31, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(155, 31, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(156, 31, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(157, 31, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(158, 31, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(159, 31, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(160, 31, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(161, 31, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(162, 31, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(163, 31, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(164, 32, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(165, 32, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(166, 32, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(167, 32, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(168, 32, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(169, 32, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(170, 32, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(171, 32, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(172, 32, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(173, 32, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(174, 32, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(175, 32, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(176, 32, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(177, 32, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(178, 32, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(179, 32, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(180, 33, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(181, 33, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(182, 33, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(183, 33, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(184, 33, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(185, 33, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(186, 33, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(187, 33, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(188, 33, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(189, 33, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(190, 33, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(191, 33, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(192, 33, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(193, 33, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(194, 33, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(195, 33, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(196, 34, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(197, 34, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(198, 34, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(199, 34, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(200, 34, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(201, 34, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(202, 34, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(203, 34, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(204, 34, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(205, 34, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(206, 34, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(207, 34, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(208, 34, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(209, 34, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(210, 34, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(211, 34, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(212, 35, 13, 29, 3, 97, 1800, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(213, 35, 13, 29, 1, 96, 1700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(214, 35, 18, 28, 3, 95, 1500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(215, 35, 18, 28, 1, 94, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(216, 35, 22, 27, 3, 93, 1300, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(217, 35, 22, 27, 1, 92, 1100, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(218, 35, 12, 24, 3, 89, 1200, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(219, 35, 12, 25, 1, 88, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(220, 35, 18, 24, 3, 86, 800, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(221, 35, 22, 24, 1, 85, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(222, 35, 18, 4, 3, 84, 900, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(223, 35, 18, 4, 1, 83, 450, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(224, 35, 13, 6, 3, 82, 700, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(225, 35, 18, 6, 1, 81, 600, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(226, 35, 13, 8, 3, 78, 500, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(227, 35, 13, 8, 1, 77, 400, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(228, 31, 13, 18, 1, 79, 728, '2016-05-03 04:43:25', '2016-05-03 04:43:25');

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
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8;

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
(129, 123, 5, '4554544', '2016-04-25 23:55:49', '2016-04-25 23:55:49'),
(130, 40, 1, '2223334455', '2016-04-28 03:50:00', '2016-04-28 03:50:00'),
(131, 40, 5, '666778854', '2016-04-28 03:50:00', '2016-04-28 03:50:00'),
(132, 40, 11, '33445567', '2016-04-28 03:50:00', '2016-04-28 03:50:00');

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
  `codigo_id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `transmision` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`id`, `codigo_id`, `descripcion`, `transmision`, `foto`, `estatus`, `created_at`, `updated_at`) VALUES
(75, 19, 'MARCH -  GOL HB ', 1, 'chicos.jpg', 1, '2016-04-28 09:55:39', '2016-04-28 10:01:29'),
(76, 19, 'MARCH -  GOL HB ', 2, 'chicos.jpg', 1, '2016-04-28 09:55:56', '2016-04-28 10:01:42'),
(77, 18, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', 1, '2016-04-28 09:57:26', '2016-04-29 03:25:43'),
(78, 18, 'AVEO - VW GOL SEDAN', 2, 'mazda3-450px.jpg', 1, '2016-04-28 09:57:43', '2016-04-29 03:26:18'),
(79, 8, 'AVEO - GOL SEDAN', 1, 'megane.jpg', 1, '2016-04-28 10:00:20', '2016-04-29 03:38:58'),
(80, 8, 'AVEO - GOL SEDAN', 2, 'megane.jpg', 1, '2016-04-28 10:00:57', '2016-04-29 03:39:12'),
(81, 6, 'TIIDA', 1, 'mediano1.jpg', 1, '2016-04-28 10:03:44', '2016-04-28 10:03:44'),
(82, 6, 'TIIDA', 2, 'mediano1.jpg', 1, '2016-04-28 10:04:26', '2016-04-28 10:04:26'),
(83, 4, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', 1, '2016-04-28 10:09:01', '2016-04-29 03:29:04'),
(84, 4, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', 1, '2016-04-28 10:09:41', '2016-04-29 03:29:28'),
(85, 24, 'VERSA', 1, 'grande1.jpg', 1, '2016-04-28 10:10:57', '2016-04-28 10:10:57'),
(86, 24, 'VERSA', 2, 'grande1.jpg', 1, '2016-04-28 10:11:13', '2016-04-28 10:11:13'),
(87, 8, 'Prueba 1', 1, 'chicos.jpg', NULL, '2016-04-28 10:11:38', '2016-04-28 10:11:38'),
(88, 25, 'ELANTRA', 1, 'Honda-Jazz-20151.jpg', 1, '2016-04-28 10:12:38', '2016-04-29 03:36:08'),
(89, 24, 'ELANTRA', 2, 'Honda-Jazz-20151.jpg', 1, '2016-04-28 10:12:53', '2016-04-29 03:35:59'),
(90, 26, 'PICK UP CABINA SENCILLA', 1, 'camionetas1.jpg', 1, '2016-04-28 10:13:38', '2016-04-28 10:13:38'),
(91, 26, 'PICK UP CABINA SENCILLA', 2, 'camionetas1.jpg', 1, '2016-04-28 10:13:54', '2016-04-28 10:13:54'),
(92, 27, 'SIENA - TOWN & COUNTRY - ROUTAN', 1, 'camionetas_grandes.jpg', 1, '2016-04-28 10:15:20', '2016-04-29 03:44:40'),
(93, 27, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'camionetas_grandes.jpg', 1, '2016-04-28 10:15:50', '2016-04-29 03:44:55'),
(94, 28, 'EXPRESS VAN - URBAN - HI ACE', 1, 'imagenes-de-camionetas-blanca.jpg', 1, '2016-04-28 10:16:51', '2016-04-29 03:44:23'),
(95, 28, 'EXPRESS VAN - URBAN - HI ACE', 2, 'imagenes-de-camionetas-blanca.jpg', 1, '2016-04-28 10:17:10', '2016-04-29 03:44:10'),
(96, 29, 'EXPEDITION - SUBURBAN', 1, 'Auto_ford_ecosport_mv_frente.gif', 1, '2016-04-28 10:17:52', '2016-04-29 03:35:14'),
(97, 29, 'EXPEDITION - SUBURBAN', 2, 'Auto_ford_ecosport_mv_frente.gif', 1, '2016-04-28 10:18:08', '2016-04-29 03:35:02');

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
(2, 'Luis99', '$2y$10$.BEMnJsOGHmIKLl3vzkoc.pxoxUE0QXsa8lspbt7eOA9uSAILTqIG', 'luis_mh@outlook.es', 'HHVUYuxagNiF7ZSiJwEfxiggrdPCkrTcbSy2CDzWbcolgEEru1y9H1oe5I08', '2016-04-07 03:42:24', '2016-05-04 08:26:38'),
(21, 'Yeins99', '$2y$10$S/5YbcL/L.20Drlaa8CSZ.GwPs6YQpqBDDtIQTg3AjBdari0wGp/C', 'ye@hotmail.com', NULL, '2016-04-27 07:27:06', '2016-04-27 07:27:06'),
(22, 'prueba', '$2y$10$6g56p5jnKB70XLv9jbiB/.iACR522TSF24VIkvDt7fzoOmptbNrxq', 'prueba@gmail.com', NULL, '2016-04-27 07:29:08', '2016-04-27 07:29:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `password_reminders`
--
ALTER TABLE `password_reminders`
  ADD KEY `password_reminders_email_index` (`email`),
  ADD KEY `password_reminders_token_index` (`token`);

--
-- Indices de la tabla `plaza`
--
ALTER TABLE `plaza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reserva_cliente1_idx` (`cliente_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tipo_vehiculo_codigo1_idx` (`codigo_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `cobertura`
--
ALTER TABLE `cobertura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `codigo`
--
ALTER TABLE `codigo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `oficina`
--
ALTER TABLE `oficina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `plaza`
--
ALTER TABLE `plaza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `tarifa_detalle`
--
ALTER TABLE `tarifa_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=229;
--
-- AUTO_INCREMENT de la tabla `telefono_sucursal`
--
ALTER TABLE `telefono_sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT de la tabla `tipo_tel`
--
ALTER TABLE `tipo_tel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `oficina`
--
ALTER TABLE `oficina`
  ADD CONSTRAINT `fk_oficina_plaza1` FOREIGN KEY (`plaza_id`) REFERENCES `plaza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_reserva_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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

--
-- Filtros para la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD CONSTRAINT `fk_tipo_vehiculo_codigo1` FOREIGN KEY (`codigo_id`) REFERENCES `codigo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
