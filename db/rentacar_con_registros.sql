-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2016 a las 23:23:52
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rentacar`
--

CREATE DATABASE rentacar;
USE rentacar;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `num_licencia` varchar(50) DEFAULT NULL,
  `comentarios` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(30, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-04 05:11:28', '2016-05-04 05:11:28'),
(31, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', 'Sin comentarios', '2016-05-08 04:32:49', '2016-05-08 04:32:49'),
(32, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-14 20:21:04', '2016-05-14 20:21:04'),
(33, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-14 20:37:26', '2016-05-14 20:37:26'),
(34, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-14 21:04:05', '2016-05-14 21:04:05'),
(35, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-14 21:05:57', '2016-05-14 21:05:57'),
(36, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-14 21:42:03', '2016-05-14 21:42:03'),
(37, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:09:27', '2016-05-15 18:09:27'),
(38, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 18:13:15', '2016-05-15 18:13:15'),
(39, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:15:49', '2016-05-15 18:15:49'),
(40, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-15 18:17:21', '2016-05-15 18:17:21'),
(41, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:18:09', '2016-05-15 18:18:09'),
(42, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:20:13', '2016-05-15 18:20:13'),
(43, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:22:09', '2016-05-15 18:22:09'),
(44, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 18:23:39', '2016-05-15 18:23:39'),
(45, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:25:16', '2016-05-15 18:25:16'),
(46, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:27:45', '2016-05-15 18:27:45'),
(47, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:30:26', '2016-05-15 18:30:26'),
(48, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 18:31:38', '2016-05-15 18:31:38'),
(49, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:33:51', '2016-05-15 18:33:51'),
(50, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 18:36:03', '2016-05-15 18:36:03'),
(51, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 18:37:05', '2016-05-15 18:37:05'),
(52, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-15 18:38:05', '2016-05-15 18:38:05'),
(53, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-15 18:38:43', '2016-05-15 18:38:43'),
(54, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-15 18:40:43', '2016-05-15 18:40:43'),
(55, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 19:01:06', '2016-05-15 19:01:06'),
(56, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 19:10:58', '2016-05-15 19:10:58'),
(57, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 19:26:40', '2016-05-15 19:26:40'),
(58, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 19:28:47', '2016-05-15 19:28:47'),
(59, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 19:30:16', '2016-05-15 19:30:16'),
(60, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 19:33:19', '2016-05-15 19:33:19'),
(61, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 19:35:25', '2016-05-15 19:35:25'),
(62, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 19:36:26', '2016-05-15 19:36:26'),
(63, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 19:37:57', '2016-05-15 19:37:57'),
(64, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 19:39:39', '2016-05-15 19:39:39'),
(65, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-05-15 19:41:26', '2016-05-15 19:41:26'),
(66, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 19:46:07', '2016-05-15 19:46:07'),
(67, 'xxx', 'xxxx', 'xxx@gmail.com', '6660009988', '323-2233-254', 'No hay comentarios..', '2016-05-15 20:03:49', '2016-05-15 20:03:49'),
(68, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', 'Comentarios', '2016-05-15 20:07:59', '2016-05-15 20:07:59'),
(69, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-20 15:38:55', '2016-06-20 15:38:55'),
(70, 'Luis Jose', 'Correa', 'luis@gmail.com', '7776665544', '5673-98788', 'Mis comentarios', '2016-06-20 16:36:48', '2016-06-20 16:36:48'),
(71, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-20 19:10:56', '2016-06-20 19:10:56'),
(72, 'Jesus', 'No se Xd', 'jesus@live.com', '9991112299', '823-2328', 'Comentarios...', '2016-06-20 19:14:34', '2016-06-20 19:14:34'),
(73, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-20 19:16:19', '2016-06-20 19:16:19'),
(74, 'Pedro', 'Picapiedra', 'nuevo@hotmail.com', '4443330099', '58-26532', '', '2016-06-20 20:05:48', '2016-06-20 20:05:48'),
(75, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-20 20:09:16', '2016-06-20 20:09:16'),
(76, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-20 20:39:35', '2016-06-20 20:39:35'),
(77, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-20 20:40:48', '2016-06-20 20:40:48'),
(78, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-20 20:54:23', '2016-06-20 20:54:23'),
(79, 'Luis', 'Aguilar', 'miemail@outlook.es', '7778886655', ' 5673-98788', 'No se que comentar.', '2016-06-20 20:58:17', '2016-06-20 20:58:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobertura`
--

CREATE TABLE `cobertura` (
  `id` int(11) NOT NULL,
  `cobertura` text,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `codigo` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `descripcion_codigo` varchar(100) NOT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`id`, `codigo`, `descripcion_codigo`, `estatus`, `created_at`, `updated_at`) VALUES
(4, 'SCAR', 'MEDIANO', 1, '2016-04-18 23:18:41', '2016-04-28 06:54:50'),
(6, 'ICMR', 'INTERMEDIO', 1, '2016-04-18 23:19:28', '2016-04-28 06:54:14'),
(18, 'CCMR', 'COMPACTO ', 1, '2016-04-19 22:31:06', '2016-06-20 21:22:38'),
(19, 'ECMN', 'ECONOMICO', 1, '2016-04-19 22:31:12', '2016-04-28 06:52:23'),
(24, 'FCMR', 'FULLSIZE', 1, '2016-04-28 06:57:20', '2016-04-28 06:57:20'),
(25, 'PCAR', 'PREMIUM', 1, '2016-04-28 06:58:08', '2016-04-28 06:58:08'),
(26, 'IPNR', 'PICK UP CS', 1, '2016-04-28 06:59:25', '2016-04-28 06:59:25'),
(27, 'IVAR', 'MINIVAN', 1, '2016-04-28 07:00:01', '2016-04-28 07:00:01'),
(28, 'SVAR', 'MAXIVAN', 1, '2016-04-28 07:00:41', '2016-04-28 07:00:41'),
(29, 'FRAR', 'VAN DE LUJO', 1, '2016-04-28 07:01:19', '2016-04-28 07:01:19'),
(31, 'effwe', 'fwefwe', 0, '2016-05-03 22:21:02', '2016-06-19 23:50:56'),
(32, 'qwdqw', 'dqwd', 0, '2016-05-03 22:22:07', '2016-05-03 22:22:07'),
(35, 'yyyxx', 'yyyxxx', 0, '2016-05-03 22:26:21', '2016-06-19 23:50:42'),
(41, 'jjjxxx', 'jjjjxxx', 0, '2016-05-03 22:32:30', '2016-05-03 22:47:47'),
(43, 'uuux--', 'uuuux--', 0, '2016-05-03 22:33:41', '2016-05-03 22:47:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerente`
--

CREATE TABLE `gerente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `descripcion_grupo` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficina`
--

CREATE TABLE `oficina` (
  `id` int(11) NOT NULL,
  `plaza_id` int(11) NOT NULL,
  `nombre_oficina` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oficina`
--

INSERT INTO `oficina` (`id`, `plaza_id`, `nombre_oficina`, `clave`, `created_at`, `updated_at`) VALUES
(3, 30, 'CD México', 'CD México', '2016-04-19 05:06:54', '2016-05-02 23:15:25'),
(4, 1, 'Monterrey', 'Monterrey', '2016-04-19 05:11:21', '2016-05-02 23:16:09'),
(6, 31, 'Toluca', 'Toluca', '2016-04-19 05:15:39', '2016-05-02 23:16:16'),
(8, 25, 'Ciudad Aguascalientes', 'Aguascalientes', '2016-04-19 05:21:29', '2016-05-03 09:07:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reminders`
--

CREATE TABLE `password_reminders` (
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

CREATE TABLE `plaza` (
  `id` int(11) NOT NULL,
  `nombre_plaza` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `reserva` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `cliente_id`, `num_reserva`, `lugar_entrega`, `fecha_entrega`, `hora_entrega`, `lugar_devolucion`, `fecha_devolucion`, `hora_devolucion`, `tarifa_por_dia`, `dias`, `total`, `vehiculo`, `transmision`, `foto`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 19, '20160503052033', 'Aguascalientes', '2016-05-03', '5:01 AM', 'Aguascalientes', '2016-05-12', '5:00 AM', 400, '9', 3600, 'AVEO - GOL SEDAN', 1, 'megane.jpg', '2016-05-03', '2016-05-03 10:20:33', '2016-05-03 10:20:33'),
(2, 20, '20160503052415', 'México', '2016-05-03', '12:00 AM', 'Aguascalientes', '2016-05-05', '3:00 AM', 900, '2', 1800, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-05-03', '2016-05-03 10:24:15', '2016-05-03 10:24:15'),
(4, 22, '20160503053117', 'Aguascalientes', '2016-05-03', '2:00 AM', 'México', '2016-05-06', '5:00 PM', 800, '3', 2400, 'VERSA', 2, 'grande1.jpg', '2016-05-03', '2016-05-03 10:31:17', '2016-05-03 10:31:17'),
(5, 23, '20160503053929', 'Aguascalientes', '2016-05-10', '10:00 AM', 'Aguascalientes', '2016-05-25', '3:00 PM', 800, '15', 12000, 'ELANTRA', 2, 'Honda-Jazz-20151.jpg', '2016-05-03', '2016-05-03 10:39:29', '2016-05-03 10:39:29'),
(6, 24, '20160503054545', 'Aguascalientes', '2016-05-03', '3:00 PM', 'México', '2016-05-26', '1:00 PM', 1800, '23', 41400, 'EXPEDITION - SUBURBAN', 2, 'Auto_ford_ecosport_mv_frente.gif', '2016-05-03', '2016-05-03 10:45:45', '2016-05-03 10:45:45'),
(7, 25, '20160503054803', 'México', '2016-05-12', '3:01 AM', 'Aguascalientes', '2016-05-15', '3:03 PM', 600, '3', 1800, 'TIIDA', 1, 'mediano1.jpg', '2016-05-03', '2016-05-03 10:48:03', '2016-05-03 10:48:03'),
(8, 26, '20160503061627', 'México', '2016-05-03', '3:00 AM', 'México', '2017-01-01', '4:02 AM', 400, '243', 97200, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', '2016-05-03', '2016-05-03 11:16:27', '2016-05-03 11:16:27'),
(9, 27, '20160503151436', 'Aguascalientes', '2016-05-05', '1:00 PM', 'Aguascalientes', '2016-05-25', '3:00 PM', 700, '20', 14000, 'VERSA', 1, 'grande1.jpg', '2016-05-03', '2016-05-03 20:14:36', '2016-05-03 20:14:36'),
(10, 28, '20160503160522', 'México', '2016-05-05', '5:00 PM', 'Aguascalientes', '2016-05-28', '1:00 PM', 600, '23', 13800, 'TIIDA', 1, 'mediano1.jpg', '2016-05-03', '2016-05-03 21:05:22', '2016-05-03 21:05:22'),
(11, 29, '20160503164158', 'Aguascalientes', '2016-05-03', '3:00 PM', 'México', '2016-05-04', '12:00 AM', 400, '1', 400, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', '2016-05-03', '2016-05-03 21:41:58', '2016-05-03 21:41:58'),
(12, 30, '20160504001128', 'Aguascalientes', '2016-05-04', '3:00 PM', 'México', '2016-05-26', '5:00 PM', 700, '22', 15400, 'TIIDA', 2, 'mediano1.jpg', '2016-05-04', '2016-05-04 05:11:28', '2016-05-04 05:11:28'),
(13, 31, '20160507233249', 'Aguascalientes', '2016-05-07', '4:00 PM', 'México', '2016-05-21', '2:00 PM', 728, '14', 10192, 'AVEO - GOL SEDAN', 1, 'megane.jpg', '2016-05-07', '2016-05-08 04:32:49', '2016-05-08 04:32:49'),
(14, 32, '20160514152104', 'Aguascalientes', '2016-05-14', '3:00 PM', 'México', '2016-05-18', '3:00 AM', 1300, '4', 5200, 'EXPRESS VAN - URBAN - HI ACE', 1, 'imagenes-de-camionetas-blanca.jpg', '2016-05-14', '2016-05-14 20:21:04', '2016-05-14 20:21:04'),
(15, 33, '20160514153726', 'México', '2016-05-20', '3:00 PM', 'México', '2016-05-25', '3:00 PM', 1200, '5', 6000, 'ELANTRA', 2, 'Honda-Jazz-20151.jpg', '2016-05-14', '2016-05-14 20:37:26', '2016-05-14 20:37:26'),
(16, 34, '20160514160405', 'México', '2016-05-19', '3:00 PM', 'Monterrey', '2016-05-24', '2:00 PM', 600, '5', 3000, 'TIIDA', 1, 'mediano1.jpg', '2016-05-14', '2016-05-14 21:04:05', '2016-05-14 21:04:05'),
(17, 35, '20160514160557', 'Aguascalientes', '2016-05-20', '1:00 PM', 'Aguascalientes', '2016-05-26', '3:00 PM', 400, '6', 2400, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', '2016-05-14', '2016-05-14 21:05:57', '2016-05-14 21:05:57'),
(18, 36, '20160514164203', 'Aguascalientes', '2016-05-21', '3:00 PM', 'Aguascalientes', '2016-05-24', '2:00 PM', 450, '3', 1350, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-05-14', '2016-05-14 21:42:03', '2016-05-14 21:42:03'),
(19, 37, '20160515130927', 'Aguascalientes', '2016-05-15', '3:00 PM', 'Aguascalientes', '2016-05-17', '3:00 PM', 900, '2', 1800, 'ELANTRA', 1, 'Honda-Jazz-20151.jpg', '2016-05-15', '2016-05-15 18:09:27', '2016-05-15 18:09:27'),
(20, 38, '20160515131315', 'México', '2016-05-17', '1:02 PM', 'Aguascalientes', '2016-05-18', '3:00 PM', 700, '1', 700, 'TIIDA', 2, 'mediano1.jpg', '2016-05-15', '2016-05-15 18:13:15', '2016-05-15 18:13:15'),
(21, 39, '20160515131549', 'Aguascalientes', '2016-05-17', '3:02 PM', 'Aguascalientes', '2016-05-19', '5:00 PM', 1300, '2', 2600, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'camionetas_grandes.jpg', '2016-05-15', '2016-05-15 18:15:49', '2016-05-15 18:15:49'),
(22, 40, '20160515131721', 'Aguascalientes', '2016-05-17', '3:00 PM', 'Aguascalientes', '2016-05-20', '4:00 PM', 600, '3', 1800, 'TIIDA', 1, 'mediano1.jpg', '2016-05-15', '2016-05-15 18:17:21', '2016-05-15 18:17:21'),
(23, 41, '20160515131809', 'Aguascalientes', '2016-05-19', '3:02 PM', 'Aguascalientes', '2016-05-25', '4:00 PM', 728, '6', 4368, 'AVEO - GOL SEDAN', 1, 'megane.jpg', '2016-05-15', '2016-05-15 18:18:09', '2016-05-15 18:18:09'),
(24, 42, '20160515132013', 'Aguascalientes', '2016-05-18', '12:03 PM', 'México', '2016-05-20', '3:00 PM', 900, '2', 1800, 'ELANTRA', 1, 'Honda-Jazz-20151.jpg', '2016-05-15', '2016-05-15 18:20:13', '2016-05-15 18:20:13'),
(25, 43, '20160515132209', 'Aguascalientes', '2016-05-18', '4:03 PM', 'Aguascalientes', '2016-05-27', '3:00 PM', 900, '9', 8100, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 18:22:09', '2016-05-15 18:22:09'),
(26, 44, '20160515132339', 'Aguascalientes', '2016-05-19', '5:00 PM', 'Aguascalientes', '2016-05-26', '7:00 PM', 1300, '7', 9100, 'EXPRESS VAN - URBAN - HI ACE', 1, 'imagenes-de-camionetas-blanca.jpg', '2016-05-15', '2016-05-15 18:23:39', '2016-05-15 18:23:39'),
(27, 45, '20160515132516', 'México', '2016-05-19', '1:00 PM', 'Aguascalientes', '2016-05-25', '2:02 PM', 1100, '6', 6600, 'SIENA - TOWN & COUNTRY - ROUTAN', 1, 'camionetas_grandes.jpg', '2016-05-15', '2016-05-15 18:25:16', '2016-05-15 18:25:16'),
(28, 46, '20160515132745', 'México', '2016-05-18', '4:00 PM', 'Aguascalientes', '2016-05-20', '4:00 PM', 600, '2', 1200, 'TIIDA', 1, 'mediano1.jpg', '2016-05-15', '2016-05-15 18:27:45', '2016-05-15 18:27:45'),
(29, 47, '20160515133026', 'Aguascalientes', '2016-05-17', '4:00 PM', 'Aguascalientes', '2016-05-18', '4:00 PM', 450, '1', 450, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 18:30:26', '2016-05-15 18:30:26'),
(30, 48, '20160515133139', 'Aguascalientes', '2016-05-17', '12:00 PM', 'Aguascalientes', '2016-05-25', '4:00 PM', 400, '8', 3200, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', '2016-05-15', '2016-05-15 18:31:39', '2016-05-15 18:31:39'),
(31, 49, '20160515133351', 'Aguascalientes', '2016-05-17', '3:00 PM', 'Aguascalientes', '2016-05-20', '3:00 PM', 600, '3', 1800, 'TIIDA', 1, 'mediano1.jpg', '2016-05-15', '2016-05-15 18:33:51', '2016-05-15 18:33:51'),
(32, 50, '20160515133603', 'México', '2016-05-16', '3:00 PM', 'Aguascalientes', '2016-05-18', '3:00 PM', 1100, '2', 2200, 'SIENA - TOWN & COUNTRY - ROUTAN', 1, 'camionetas_grandes.jpg', '2016-05-15', '2016-05-15 18:36:03', '2016-05-15 18:36:03'),
(33, 51, '20160515133705', 'Aguascalientes', '2016-05-17', '3:01 PM', 'Aguascalientes', '2016-05-21', '3:00 PM', 1200, '4', 4800, 'ELANTRA', 2, 'Honda-Jazz-20151.jpg', '2016-05-15', '2016-05-15 18:37:05', '2016-05-15 18:37:05'),
(34, 52, '20160515133805', 'México', '2016-05-17', '4:00 PM', 'México', '2016-05-24', '12:00 AM', 600, '7', 4200, 'TIIDA', 1, 'mediano1.jpg', '2016-05-15', '2016-05-15 18:38:05', '2016-05-15 18:38:05'),
(35, 53, '20160515133844', 'México', '2016-05-17', '4:00 PM', 'México', '2016-05-24', '12:00 AM', 900, '7', 6300, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 18:38:44', '2016-05-15 18:38:44'),
(36, 54, '20160515134043', 'México', '2016-05-17', '4:00 PM', 'México', '2016-05-24', '12:00 AM', 500, '7', 3500, 'AVEO - VW GOL SEDAN', 2, 'mazda3-450px.jpg', '2016-05-15', '2016-05-15 18:40:43', '2016-05-15 18:40:43'),
(37, 55, '20160515140106', 'Aguascalientes', '2016-05-17', '3:00 PM', 'México', '2016-05-26', '4:00 PM', 900, '9', 8100, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 19:01:06', '2016-05-15 19:01:06'),
(38, 56, '20160515141058', 'Aguascalientes', '2016-05-17', '5:00 PM', 'Aguascalientes', '2016-05-28', '1:00 PM', 700, '11', 7700, 'VERSA', 1, 'grande1.jpg', '2016-05-15', '2016-05-15 19:10:58', '2016-05-15 19:10:58'),
(39, 57, '20160515142640', 'Aguascalientes', '2016-05-17', '3:00 PM', 'Aguascalientes', '2016-05-26', '3:00 PM', 700, '9', 6300, 'VERSA', 1, 'grande1.jpg', '2016-05-15', '2016-05-15 19:26:40', '2016-05-15 19:26:40'),
(40, 58, '20160515142847', 'Aguascalientes', '2016-05-17', '3:02 PM', 'Aguascalientes', '2016-05-27', '3:00 PM', 1100, '10', 11000, 'SIENA - TOWN & COUNTRY - ROUTAN', 1, 'camionetas_grandes.jpg', '2016-05-15', '2016-05-15 19:28:47', '2016-05-15 19:28:47'),
(41, 59, '20160515143016', 'Aguascalientes', '2016-05-17', '2:02 PM', 'Aguascalientes', '2016-05-25', '4:00 PM', 450, '8', 3600, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 19:30:16', '2016-05-15 19:30:16'),
(42, 60, '20160515143320', 'Aguascalientes', '2016-05-17', '3:00 PM', 'Aguascalientes', '2016-05-21', '3:00 PM', 1200, '4', 4800, 'ELANTRA', 2, 'Honda-Jazz-20151.jpg', '2016-05-15', '2016-05-15 19:33:20', '2016-05-15 19:33:20'),
(43, 61, '20160515143525', 'México', '2016-05-18', '4:00 PM', 'México', '2016-05-19', '2:01 PM', 700, '1', 700, 'TIIDA', 2, 'mediano1.jpg', '2016-05-15', '2016-05-15 19:35:25', '2016-05-15 19:35:25'),
(44, 62, '20160515143626', 'México', '2016-05-19', '12:00 AM', 'Aguascalientes', '2016-05-27', '3:00 PM', 900, '8', 7200, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 19:36:26', '2016-05-15 19:36:26'),
(45, 63, '20160515143757', 'Aguascalientes', '2016-05-19', '12:00 AM', 'Aguascalientes', '2016-05-28', '3:00 PM', 900, '9', 8100, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 19:37:57', '2016-05-15 19:37:57'),
(46, 64, '20160515143939', 'Aguascalientes', '2016-05-18', '3:00 PM', 'Aguascalientes', '2016-05-19', '4:00 PM', 900, '1', 900, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 19:39:39', '2016-05-15 19:39:39'),
(47, 65, '20160515144126', 'Aguascalientes', '2016-05-16', '3:00 PM', 'Aguascalientes', '2016-05-25', '3:00 PM', 450, '9', 4050, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-05-15', '2016-05-15 19:41:26', '2016-05-15 19:41:26'),
(48, 66, '20160515144607', 'Aguascalientes', '2016-05-17', '3:00 PM', 'Aguascalientes', '2016-05-19', '1:00 PM', 400, '2', 800, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', '2016-05-15', '2016-05-15 19:46:07', '2016-05-15 19:46:07'),
(49, 67, '20160515150349', 'Aguascalientes', '2016-05-17', '3:00 PM', 'Aguascalientes', '2016-05-19', '5:00 PM', 1500, '2', 3000, 'EXPRESS VAN - URBAN - HI ACE', 2, 'imagenes-de-camionetas-blanca.jpg', '2016-05-15', '2016-05-15 20:03:49', '2016-05-15 20:03:49'),
(50, 68, '20160515150759', 'Aguascalientes', '2016-05-18', '3:00 PM', 'Aguascalientes', '2016-05-27', '5:00 PM', 700, '9', 6300, 'VERSA', 1, 'grande1.jpg', '2016-05-15', '2016-05-15 20:07:59', '2016-05-15 20:07:59'),
(51, 69, '20160620103855', 'Aguascalientes', '2016-06-22', '4:00 PM', 'Aguascalientes', '2016-06-30', '5:00 PM', 1300, '8', 10400, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'camionetas_grandes.jpg', '2016-06-20', '2016-06-20 15:38:55', '2016-06-20 15:38:55'),
(52, 70, '20160620113648', 'Aguascalientes', '2016-06-22', '3:00 PM', 'México', '2016-06-25', '12:00 AM', 2200, '3', 6600, 'Minivan 2016', 1, '2016_Mazda6_EXT360_RojoBrillante_12.png', '2016-06-20', '2016-06-20 16:36:48', '2016-06-20 16:36:48'),
(53, 71, '20160620141057', 'Aguascalientes', '2016-06-20', '2:09 PM', 'Aguascalientes', '2016-06-29', '5:09 PM', 3200, '9', 28800, 'Nueva minivan 2016', 2, '8cfca1f19aef6e49641213e7a65d583e.png', '2016-06-20', '2016-06-20 19:10:57', '2016-06-20 19:10:57'),
(54, 72, '20160620141434', 'México', '2016-06-20', '2:12 PM', 'México', '2016-06-29', '4:12 PM', 800, '9', 7200, 'VERSA', 2, 'grande1.jpg', '2016-06-20', '2016-06-20 19:14:34', '2016-06-20 19:14:34'),
(55, 73, '20160620141619', 'Aguascalientes', '2016-06-22', '5:14 AM', 'Monterrey', '2016-06-29', '3:14 PM', 1300, '7', 9100, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'camionetas_grandes.jpg', '2016-06-20', '2016-06-20 19:16:19', '2016-06-20 19:16:19'),
(56, 74, '20160620150548', 'Aguascalientes', '2016-08-18', '3:00 PM', 'Aguascalientes', '2016-08-24', '3:00 PM', 1300, '6', 7800, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', '2016-06-20', '2016-06-20 20:05:48', '2016-06-20 20:05:48'),
(57, 75, '20160620150916', 'Aguascalientes', '2016-06-21', '3:10 AM', 'Aguascalientes', '2016-06-29', '3:08 PM', 1300, '8', 10400, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', '2016-06-20', '2016-06-20 20:09:16', '2016-06-20 20:09:16'),
(58, 76, '20160620153935', 'Aguascalientes', '2016-06-20', '3:36 PM', 'México', '2016-06-29', '3:36 PM', 1700, '9', 15300, 'EXPEDITION - SUBURBAN ', 1, 'Auto_ford_ecosport_mv_frente.gif', '2016-06-20', '2016-06-20 20:39:35', '2016-06-20 20:39:35'),
(59, 77, '20160620154048', 'Aguascalientes', '2016-06-20', '3:40 PM', 'Aguascalientes', '2016-06-30', '3:40 PM', 1300, '10', 13000, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', '2016-06-20', '2016-06-20 20:40:48', '2016-06-20 20:40:48'),
(60, 78, '20160620155423', 'México', '2016-06-30', '3:53 PM', 'México', '2016-07-04', '7:00 PM', 450, '4', 1800, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-06-20', '2016-06-20 20:54:23', '2016-06-20 20:54:23'),
(61, 79, '20160620155817', 'Aguascalientes', '2016-06-26', '5:00 PM', 'Aguascalientes', '2016-06-27', '3:56 PM', 1300, '1', 1300, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', '2016-06-20', '2016-06-20 20:58:17', '2016-06-20 20:58:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `gerente_id` int(11) NOT NULL,
  `oficina_id` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `gerente_id`, `oficina_id`, `nombre_sucursal`, `direccion1`, `direccion2`, `colonia`, `estado`, `municipio_delegacion`, `referencia`, `cp`, `created_at`, `updated_at`) VALUES
(40, 53, 6, 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', 'Sin referencias', '98863', '2016-04-21 06:12:10', '2016-05-02 22:52:10'),
(44, 54, 4, 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '', '889766', '2016-04-21 06:52:17', '2016-05-02 22:51:26'),
(118, 55, 3, 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', 'Referencias', '556665', '2016-04-25 22:00:55', '2016-04-28 03:39:46'),
(123, 1, 8, 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '', '565656', '2016-04-25 23:55:18', '2016-05-02 22:51:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE `tarifa` (
  `id` int(11) NOT NULL,
  `oficina_id` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tarifa_detalle` (
  `id` int(11) NOT NULL,
  `tarifa_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `cobertura_id` int(11) NOT NULL,
  `tipo_vehiculo_id` int(11) NOT NULL,
  `tarifa_por_dia` double DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifa_detalle`
--

INSERT INTO `tarifa_detalle` (`id`, `tarifa_id`, `grupo_id`, `cobertura_id`, `tipo_vehiculo_id`, `tarifa_por_dia`, `estatus`, `created_at`, `updated_at`) VALUES
(68, 26, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(69, 26, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(70, 26, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(71, 26, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(72, 26, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(73, 26, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(74, 26, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(75, 26, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(76, 26, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(77, 26, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(78, 26, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(79, 26, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(80, 26, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(81, 26, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(84, 27, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(85, 27, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(86, 27, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(87, 27, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(88, 27, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(89, 27, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(90, 27, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(91, 27, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(92, 27, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(93, 27, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(94, 27, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(95, 27, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(96, 27, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(97, 27, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(100, 28, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(101, 28, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(102, 28, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(103, 28, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(104, 28, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(105, 28, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(106, 28, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(107, 28, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(108, 28, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(109, 28, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(110, 28, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(111, 28, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(112, 28, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(113, 28, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(116, 29, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(117, 29, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(118, 29, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(119, 29, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(120, 29, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(121, 29, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(122, 29, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(123, 29, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(124, 29, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(125, 29, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(126, 29, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(127, 29, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(128, 29, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(129, 29, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(132, 30, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(133, 30, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(134, 30, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(135, 30, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(136, 30, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(137, 30, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(138, 30, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(139, 30, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(140, 30, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(141, 30, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(142, 30, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(143, 30, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(144, 30, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(145, 30, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(148, 31, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(149, 31, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(150, 31, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(151, 31, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(152, 31, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(153, 31, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(154, 31, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(155, 31, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(156, 31, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(157, 31, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(158, 31, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(159, 31, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(160, 31, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(161, 31, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(164, 32, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(165, 32, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(166, 32, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(167, 32, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(168, 32, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(169, 32, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(170, 32, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(171, 32, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(172, 32, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(173, 32, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(174, 32, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(175, 32, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(176, 32, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(177, 32, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(180, 33, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(181, 33, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(182, 33, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(183, 33, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(184, 33, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(185, 33, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(186, 33, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(187, 33, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(188, 33, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(189, 33, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(190, 33, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(191, 33, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(192, 33, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(193, 33, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(196, 34, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(197, 34, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(198, 34, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(199, 34, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(200, 34, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(201, 34, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(202, 34, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(203, 34, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(204, 34, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(205, 34, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(206, 34, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(207, 34, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(208, 34, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(209, 34, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(212, 35, 13, 3, 97, 1800, 1, '2016-04-28 21:01:48', '2016-04-28 21:01:48'),
(213, 35, 13, 1, 96, 1700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(214, 35, 18, 3, 95, 1500, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(215, 35, 18, 1, 94, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(216, 35, 22, 3, 93, 1300, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(217, 35, 22, 1, 92, 1100, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(218, 35, 12, 3, 89, 1200, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(219, 35, 12, 1, 88, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(220, 35, 18, 3, 86, 800, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(221, 35, 22, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(222, 35, 18, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(223, 35, 18, 1, 83, 450, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(224, 35, 13, 3, 82, 700, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(225, 35, 18, 1, 81, 600, 1, '2016-04-28 21:01:49', '2016-04-28 21:01:49'),
(229, 35, 12, 1, 98, 1500, 1, '2016-06-20 03:34:24', '2016-06-20 03:34:24'),
(230, 35, 12, 1, 99, 1600, 1, '2016-06-20 03:34:51', '2016-06-20 03:34:51'),
(231, 35, 13, 3, 100, 2000, 1, '2016-06-20 03:35:50', '2016-06-20 03:35:50'),
(232, 35, 13, 3, 101, 2100, 1, '2016-06-20 03:36:04', '2016-06-20 03:36:04'),
(233, 35, 18, 3, 102, 1000, 1, '2016-06-20 03:37:52', '2016-06-20 03:37:52'),
(234, 35, 18, 1, 103, 1200, 1, '2016-06-20 03:38:06', '2016-06-20 03:38:06'),
(235, 35, 22, 1, 104, 3000, 1, '2016-06-20 03:38:22', '2016-06-20 03:38:22'),
(236, 35, 22, 3, 105, 3200, 1, '2016-06-20 03:38:35', '2016-06-20 03:38:35'),
(237, 32, 12, 1, 98, 2000, 1, '2016-06-20 03:42:12', '2016-06-20 03:42:12'),
(239, 32, 13, 1, 100, 2200, 1, '2016-06-20 03:42:55', '2016-06-20 03:42:55'),
(240, 32, 13, 1, 101, 2300, 1, '2016-06-20 03:43:10', '2016-06-20 03:43:10'),
(241, 32, 18, 1, 102, 1600, 1, '2016-06-20 03:44:32', '2016-06-20 03:44:32'),
(242, 32, 18, 3, 103, 1700, 1, '2016-06-20 03:44:44', '2016-06-20 03:44:44'),
(243, 32, 22, 3, 104, 3000, 1, '2016-06-20 03:45:07', '2016-06-20 03:45:07'),
(244, 32, 22, 3, 99, 3200, 1, '2016-06-20 03:45:23', '2016-06-20 18:32:21'),
(257, 32, 22, 1, 105, 3200, 1, '2016-06-20 18:34:14', '2016-06-20 18:34:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_sucursal`
--

CREATE TABLE `telefono_sucursal` (
  `id` int(11) NOT NULL,
  `sucursal_id` int(11) NOT NULL,
  `tipo_tel_id` int(11) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tipo_tel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tipo_vehiculo` (
  `id` int(11) NOT NULL,
  `codigo_id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `transmision` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`id`, `codigo_id`, `descripcion`, `transmision`, `foto`, `estatus`, `created_at`, `updated_at`) VALUES
(75, 19, 'MARCH -  GOL HB ', 1, 'chicos.jpg', 1, '2016-04-28 09:55:39', '2016-04-28 10:01:29'),
(76, 19, 'MARCH -  GOL HB ', 2, 'chicos.jpg', 1, '2016-04-28 09:55:56', '2016-04-28 10:01:42'),
(77, 18, 'AVEO - VW GOL SEDAN', 1, 'mazda3-450px.jpg', 1, '2016-04-28 09:57:26', '2016-04-29 03:25:43'),
(81, 6, 'TIIDA', 1, 'mediano1.jpg', 1, '2016-04-28 10:03:44', '2016-04-28 10:03:44'),
(82, 6, 'TIIDA', 2, 'mediano1.jpg', 1, '2016-04-28 10:04:26', '2016-04-28 10:04:26'),
(83, 4, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', 1, '2016-04-28 10:09:01', '2016-04-29 03:29:04'),
(84, 4, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', 1, '2016-04-28 10:09:41', '2016-04-29 03:29:28'),
(85, 24, 'VERSA', 1, 'grande1.jpg', 1, '2016-04-28 10:10:57', '2016-04-28 10:10:57'),
(86, 24, 'VERSA', 2, 'grande1.jpg', 1, '2016-04-28 10:11:13', '2016-04-28 10:11:13'),
(88, 25, 'ELANTRA', 1, 'Honda-Jazz-20151.jpg', 1, '2016-04-28 10:12:38', '2016-04-29 03:36:08'),
(89, 24, 'ELANTRA', 2, 'Honda-Jazz-20151.jpg', 1, '2016-04-28 10:12:53', '2016-04-29 03:35:59'),
(90, 26, 'PICK UP CABINA SENCILLA', 1, 'camionetas1.jpg', 1, '2016-04-28 10:13:38', '2016-04-28 10:13:38'),
(91, 26, 'PICK UP CABINA SENCILLA', 2, 'camionetas1.jpg', 1, '2016-04-28 10:13:54', '2016-04-28 10:13:54'),
(92, 27, 'SIENA - TOWN & COUNTRY - ROUTAN', 1, 'minazul.png', 1, '2016-04-28 10:15:20', '2016-06-20 20:56:44'),
(93, 27, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', 1, '2016-04-28 10:15:50', '2016-06-20 20:56:31'),
(94, 28, 'EXPRESS VAN - URBAN - HI ACE', 1, 'imagenes-de-camionetas-blanca.jpg', 1, '2016-04-28 10:16:51', '2016-04-29 03:44:23'),
(95, 28, 'EXPRESS VAN - URBAN - HI ACE', 2, 'imagenes-de-camionetas-blanca.jpg', 1, '2016-04-28 10:17:10', '2016-04-29 03:44:10'),
(96, 29, 'EXPEDITION - SUBURBAN ', 1, 'Auto_ford_ecosport_mv_frente.gif', 1, '2016-04-28 10:17:52', '2016-06-20 03:12:32'),
(97, 29, 'EXPEDITION - SUBURBAN ', 2, 'Auto_ford_ecosport_mv_frente.gif', 1, '2016-04-28 10:18:08', '2016-06-20 03:12:15'),
(98, 27, 'Nueva minivan', 1, '8cfca1f19aef6e49641213e7a65d583e.png', 1, '2016-06-20 03:14:05', '2016-06-20 03:14:05'),
(99, 27, 'Nueva minivan 2016', 2, '8cfca1f19aef6e49641213e7a65d583e.png', 1, '2016-06-20 03:14:41', '2016-06-20 03:15:09'),
(100, 27, 'Minivan 2016', 1, '2016_Mazda6_EXT360_RojoBrillante_12.png', 1, '2016-06-20 03:17:09', '2016-06-20 03:17:09'),
(101, 27, 'Minivan 2016', 2, '2016_Mazda6_EXT360_RojoBrillante_12.png', 1, '2016-06-20 03:17:40', '2016-06-20 03:17:55'),
(102, 19, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', 1, '2016-06-20 03:22:24', '2016-06-20 03:22:24'),
(103, 19, 'Económico sencillo', 2, 'vehiculos-ecologicos-2011_1_596594.jpg', 1, '2016-06-20 03:23:06', '2016-06-20 03:23:06'),
(104, 29, 'Nueva van de lujo 2016', 1, '3_1_toyota_rav4_337.jpg', 1, '2016-06-20 03:30:11', '2016-06-20 03:30:11'),
(105, 29, 'Nueva van de lujo 2016', 2, '3_1_toyota_rav4_337.jpg', 1, '2016-06-20 03:30:33', '2016-06-20 03:30:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo_plaza`
--

CREATE TABLE `tipo_vehiculo_plaza` (
  `id` int(11) NOT NULL,
  `tipo_vehiculo_id` int(11) NOT NULL,
  `plaza_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_vehiculo_plaza`
--

INSERT INTO `tipo_vehiculo_plaza` (`id`, `tipo_vehiculo_id`, `plaza_id`, `created_at`, `updated_at`) VALUES
(1, 98, 30, '2016-06-20 03:14:06', '2016-06-20 03:14:06'),
(2, 98, 25, '2016-06-20 03:14:06', '2016-06-20 03:14:06'),
(3, 98, 1, '2016-06-20 03:14:06', '2016-06-20 03:14:06'),
(4, 99, 30, '2016-06-20 03:14:49', '2016-06-20 03:14:49'),
(5, 99, 25, '2016-06-20 03:14:53', '2016-06-20 03:14:53'),
(6, 99, 1, '2016-06-20 03:14:57', '2016-06-20 03:14:57'),
(7, 99, 31, '2016-06-20 03:15:00', '2016-06-20 03:15:00'),
(8, 100, 30, '2016-06-20 03:17:10', '2016-06-20 03:17:10'),
(9, 100, 25, '2016-06-20 03:17:10', '2016-06-20 03:17:10'),
(10, 100, 1, '2016-06-20 03:17:10', '2016-06-20 03:17:10'),
(11, 101, 30, '2016-06-20 03:17:41', '2016-06-20 03:17:41'),
(12, 101, 25, '2016-06-20 03:17:41', '2016-06-20 03:17:41'),
(13, 101, 1, '2016-06-20 03:17:41', '2016-06-20 03:17:41'),
(14, 101, 31, '2016-06-20 03:17:41', '2016-06-20 03:17:41'),
(15, 93, 30, '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(16, 93, 25, '2016-06-20 03:20:07', '2016-06-20 03:20:07'),
(17, 93, 1, '2016-06-20 03:20:10', '2016-06-20 03:20:10'),
(18, 102, 30, '2016-06-20 03:22:24', '2016-06-20 03:22:24'),
(19, 102, 25, '2016-06-20 03:22:24', '2016-06-20 03:22:24'),
(20, 102, 1, '2016-06-20 03:22:24', '2016-06-20 03:22:24'),
(21, 102, 31, '2016-06-20 03:22:24', '2016-06-20 03:22:24'),
(22, 103, 30, '2016-06-20 03:23:06', '2016-06-20 03:23:06'),
(23, 103, 25, '2016-06-20 03:23:06', '2016-06-20 03:23:06'),
(24, 103, 1, '2016-06-20 03:23:06', '2016-06-20 03:23:06'),
(25, 103, 31, '2016-06-20 03:23:07', '2016-06-20 03:23:07'),
(26, 97, 30, '2016-06-20 03:28:09', '2016-06-20 03:28:09'),
(27, 97, 25, '2016-06-20 03:28:13', '2016-06-20 03:28:13'),
(28, 96, 30, '2016-06-20 03:28:39', '2016-06-20 03:28:39'),
(29, 96, 25, '2016-06-20 03:28:42', '2016-06-20 03:28:42'),
(30, 96, 1, '2016-06-20 03:28:45', '2016-06-20 03:28:45'),
(31, 96, 31, '2016-06-20 03:28:49', '2016-06-20 03:28:49'),
(32, 97, 1, '2016-06-20 03:29:06', '2016-06-20 03:29:06'),
(33, 97, 31, '2016-06-20 03:29:12', '2016-06-20 03:29:12'),
(34, 104, 30, '2016-06-20 03:30:12', '2016-06-20 03:30:12'),
(35, 104, 25, '2016-06-20 03:30:12', '2016-06-20 03:30:12'),
(36, 105, 30, '2016-06-20 03:30:33', '2016-06-20 03:30:33'),
(37, 105, 25, '2016-06-20 03:30:33', '2016-06-20 03:30:33'),
(38, 86, 30, '2016-06-20 03:50:17', '2016-06-20 03:50:17'),
(39, 86, 25, '2016-06-20 03:50:20', '2016-06-20 03:50:20'),
(40, 86, 1, '2016-06-20 03:50:24', '2016-06-20 03:50:24'),
(41, 86, 31, '2016-06-20 03:50:27', '2016-06-20 03:50:27'),
(42, 85, 30, '2016-06-20 03:50:40', '2016-06-20 03:50:40'),
(43, 85, 25, '2016-06-20 03:50:44', '2016-06-20 03:50:44'),
(44, 85, 1, '2016-06-20 03:50:47', '2016-06-20 03:50:47'),
(45, 85, 31, '2016-06-20 03:50:50', '2016-06-20 03:50:50'),
(46, 84, 30, '2016-06-20 03:51:08', '2016-06-20 03:51:08'),
(47, 84, 25, '2016-06-20 03:51:12', '2016-06-20 03:51:12'),
(48, 84, 1, '2016-06-20 03:51:15', '2016-06-20 03:51:15'),
(49, 84, 31, '2016-06-20 03:51:19', '2016-06-20 03:51:19'),
(50, 83, 30, '2016-06-20 03:51:27', '2016-06-20 03:51:27'),
(51, 83, 25, '2016-06-20 03:51:30', '2016-06-20 03:51:30'),
(52, 83, 1, '2016-06-20 03:51:34', '2016-06-20 03:51:34'),
(53, 83, 31, '2016-06-20 03:51:37', '2016-06-20 03:51:37'),
(54, 76, 30, '2016-06-20 03:53:24', '2016-06-20 03:53:24'),
(55, 76, 25, '2016-06-20 03:53:27', '2016-06-20 03:53:27'),
(56, 76, 1, '2016-06-20 03:53:30', '2016-06-20 03:53:30'),
(57, 76, 31, '2016-06-20 03:53:33', '2016-06-20 03:53:33'),
(58, 75, 30, '2016-06-20 03:53:43', '2016-06-20 03:53:43'),
(59, 75, 25, '2016-06-20 03:53:46', '2016-06-20 03:53:46'),
(60, 75, 1, '2016-06-20 03:53:49', '2016-06-20 03:53:49'),
(61, 75, 31, '2016-06-20 03:53:53', '2016-06-20 03:53:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Angel99', '$2y$10$I3BClkWkkBQhk2KHq5UmIO1CS6.RhPZhA4CWjwJ.sa.vYM5ia5Emq', 'angeldarkkiller99@live.com', NULL, '2016-04-07 03:40:59', '2016-04-20 10:28:47'),
(2, 'Luis99', '$2y$10$.BEMnJsOGHmIKLl3vzkoc.pxoxUE0QXsa8lspbt7eOA9uSAILTqIG', 'luis_mh@outlook.es', 'XIXGM2nFTsuN0G55VqtNLmVJXurhj40RB1wpM0RncZ4CSHM58ZDDndXCqupK', '2016-04-07 03:42:24', '2016-06-20 18:00:40'),
(21, 'Yeins99', '$2y$10$S/5YbcL/L.20Drlaa8CSZ.GwPs6YQpqBDDtIQTg3AjBdari0wGp/C', 'ye@hotmail.com', 'AU1sGIPKuxQSd4vpfuHmV3tu67sQH9kq455rdg6idGO5DxIzdr4lQMxiWCuT', '2016-04-27 07:27:06', '2016-06-20 21:02:24'),
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
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sucursal_gerente1_idx` (`gerente_id`),
  ADD KEY `fk_sucursal_oficina1_idx` (`oficina_id`);

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
-- Indices de la tabla `tipo_vehiculo_plaza`
--
ALTER TABLE `tipo_vehiculo_plaza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tipo_vehiculo_plaza_tipo_vehiculo1_idx` (`tipo_vehiculo_id`),
  ADD KEY `fk_tipo_vehiculo_plaza_plaza1_idx` (`plaza_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT de la tabla `cobertura`
--
ALTER TABLE `cobertura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `codigo`
--
ALTER TABLE `codigo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `oficina`
--
ALTER TABLE `oficina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `plaza`
--
ALTER TABLE `plaza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `tarifa_detalle`
--
ALTER TABLE `tarifa_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;
--
-- AUTO_INCREMENT de la tabla `telefono_sucursal`
--
ALTER TABLE `telefono_sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT de la tabla `tipo_tel`
--
ALTER TABLE `tipo_tel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo_plaza`
--
ALTER TABLE `tipo_vehiculo_plaza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
  ADD CONSTRAINT `fk_sucursal_oficina1` FOREIGN KEY (`oficina_id`) REFERENCES `oficina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
