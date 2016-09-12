-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2016 a las 18:29:42
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
(79, 'Luis', 'Aguilar', 'miemail@outlook.es', '7778886655', ' 5673-98788', 'No se que comentar.', '2016-06-20 20:58:17', '2016-06-20 20:58:17'),
(80, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-20 22:20:26', '2016-06-20 22:20:26'),
(81, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-20 23:20:52', '2016-06-20 23:20:52'),
(82, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-20 23:37:26', '2016-06-20 23:37:26'),
(83, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 01:35:28', '2016-06-30 01:35:28'),
(84, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 01:44:42', '2016-06-30 01:44:42'),
(85, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-30 03:37:45', '2016-06-30 03:37:45'),
(86, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 16:31:31', '2016-06-30 16:31:31'),
(87, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-30 21:12:26', '2016-06-30 21:12:26'),
(88, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-30 21:13:30', '2016-06-30 21:13:30'),
(89, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 21:28:29', '2016-06-30 21:28:29'),
(90, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-30 21:30:00', '2016-06-30 21:30:00'),
(91, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-30 21:34:55', '2016-06-30 21:34:55'),
(92, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 21:38:42', '2016-06-30 21:38:42'),
(93, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 21:39:49', '2016-06-30 21:39:49'),
(94, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 21:53:41', '2016-06-30 21:53:41'),
(95, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 22:04:55', '2016-06-30 22:04:55'),
(96, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-30 22:52:21', '2016-06-30 22:52:21'),
(97, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-06-30 23:41:43', '2016-06-30 23:41:43'),
(98, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-06-30 23:45:47', '2016-06-30 23:45:47'),
(99, 'Luis ', 'Sanchez', 'luis_@hotmail.com', '8887776655', '123-23213', 'Comentarios de prueba', '2016-06-30 23:47:25', '2016-06-30 23:47:25'),
(100, 'Jose', 'Garfias', 'Jose@gmail.com', '7778889966', '92982983', 'No se que comentar', '2016-06-30 23:50:20', '2016-06-30 23:50:20'),
(101, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 18:05:02', '2016-07-01 18:05:02'),
(102, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 18:06:34', '2016-07-01 18:06:34'),
(103, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 18:08:04', '2016-07-01 18:08:04'),
(104, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 18:10:05', '2016-07-01 18:10:05'),
(105, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 18:10:47', '2016-07-01 18:10:47'),
(106, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 18:13:05', '2016-07-01 18:13:05'),
(107, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 18:28:35', '2016-07-01 18:28:35'),
(108, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 18:30:35', '2016-07-01 18:30:35'),
(109, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 18:33:26', '2016-07-01 18:33:26'),
(110, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 18:34:22', '2016-07-01 18:34:22'),
(111, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', '', '2016-07-01 18:35:44', '2016-07-01 18:35:44'),
(112, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', '', '2016-07-01 18:37:32', '2016-07-01 18:37:32'),
(113, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 18:40:24', '2016-07-01 18:40:24'),
(114, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', '', '2016-07-01 18:53:22', '2016-07-01 18:53:22'),
(115, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 18:54:58', '2016-07-01 18:54:58'),
(116, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 18:56:36', '2016-07-01 18:56:36'),
(117, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', '', '2016-07-01 18:59:07', '2016-07-01 18:59:07'),
(118, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 19:04:04', '2016-07-01 19:04:04'),
(119, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', '', '2016-07-01 19:06:57', '2016-07-01 19:06:57'),
(120, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 19:10:40', '2016-07-01 19:10:40'),
(121, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 19:13:22', '2016-07-01 19:13:22'),
(122, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', '', '2016-07-01 19:18:26', '2016-07-01 19:18:26'),
(123, 'xxx', 'xxx', 'xxx@live.com', '77799898890', '23-23232', '', '2016-07-01 19:21:48', '2016-07-01 19:21:48'),
(124, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-01 19:25:04', '2016-07-01 19:25:04'),
(125, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', '', '2016-07-01 19:27:31', '2016-07-01 19:27:31'),
(126, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-07-01 19:32:22', '2016-07-01 19:32:22'),
(127, 'Luis', 'Mondragon Herrera', 'luis@live.com', '7776665544', '233-232-323', '', '2016-07-01 19:34:17', '2016-07-01 19:34:17'),
(128, 'xxx', 'xxx', 'angeldarkkiller99@live.com', '77799898890', '23-23232', '', '2016-07-01 19:35:10', '2016-07-01 19:35:10'),
(129, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-07-01 19:42:09', '2016-07-01 19:42:09'),
(130, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-07-23 20:02:09', '2016-07-23 20:02:09'),
(131, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-07-24 01:32:04', '2016-07-24 01:32:04'),
(132, 'xxx', 'xxx', 'angeldarkkiller99@live.com', '77799898890', '23-23232', '', '2016-07-24 01:33:06', '2016-07-24 01:33:06'),
(133, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-24 01:33:40', '2016-07-24 01:33:40'),
(134, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-07-24 16:49:49', '2016-07-24 16:49:49'),
(135, 'aaa', 'aaa', 'aaa@live.com', '888776655', '9823-98723', '', '2016-07-24 16:51:23', '2016-07-24 16:51:23'),
(136, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-07-24 16:52:34', '2016-07-24 16:52:34'),
(137, 'xxx', 'xxx', 'angeldarkkiller99@live.com', '77799898890', '23-23232', '', '2016-07-24 16:54:45', '2016-07-24 16:54:45'),
(138, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-09 22:21:41', '2016-08-09 22:21:41'),
(139, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-09 22:22:29', '2016-08-09 22:22:29'),
(140, 'xxx', 'xxx', 'angeldarkkiller99@live.com', '77799898890', '23-23232', 'Chido!', '2016-08-09 23:18:15', '2016-08-09 23:18:15'),
(141, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', 'No tengo nada mejor que comentar.!', '2016-08-09 23:25:58', '2016-08-09 23:25:58'),
(142, 'xxx', 'xxx', 'angeldarkkiller99@live.com', '77799898890', '23-23232', '', '2016-08-09 23:30:43', '2016-08-09 23:30:43'),
(143, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-09 23:34:15', '2016-08-09 23:34:15'),
(144, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Estos son mis comentarios de ejemplo.!', '2016-08-09 23:36:33', '2016-08-09 23:36:33'),
(145, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-09 23:43:42', '2016-08-09 23:43:42'),
(146, 'Luis Angel', 'Mondragón', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Mis comentarios.!', '2016-08-10 00:46:09', '2016-08-10 00:46:09'),
(147, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 04:23:38', '2016-08-10 04:23:38'),
(148, 'Luis Angel', 'Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 04:45:11', '2016-08-10 04:45:11'),
(149, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 04:55:39', '2016-08-10 04:55:39'),
(150, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 04:58:06', '2016-08-10 04:58:06'),
(151, 'Lui Angel', 'Mondragon Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Mis comentarios de prueba.', '2016-08-10 05:02:22', '2016-08-10 05:02:22'),
(152, 'Lui Angel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Comentarios de ejemplo.!', '2016-08-10 05:03:57', '2016-08-10 05:03:57'),
(153, 'Luis', 'Mondragón', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 05:08:49', '2016-08-10 05:08:49'),
(154, 'Luis Angel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Comentarios.!', '2016-08-10 06:27:42', '2016-08-10 06:27:42'),
(155, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 19:10:27', '2016-08-10 19:10:27'),
(156, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 19:36:12', '2016-08-10 19:36:12'),
(157, 'Luis Angel', 'Mondragon', 'luis_mh@outlook.es', '888776655', '9823-98723', 'comentarios', '2016-08-10 19:58:23', '2016-08-10 19:58:23'),
(158, 'Luis Angel', 'Mondragon Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Sin comentarios', '2016-08-10 20:11:29', '2016-08-10 20:11:29'),
(159, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 20:16:18', '2016-08-10 20:16:18'),
(160, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 20:17:26', '2016-08-10 20:17:26'),
(161, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 20:18:38', '2016-08-10 20:18:38'),
(162, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-10 20:32:53', '2016-08-10 20:32:53'),
(163, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 00:10:22', '2016-08-27 00:10:22'),
(164, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 00:12:06', '2016-08-27 00:12:06'),
(165, 'Luis Ángel', 'Mondragón', 'luis_mh@outlook.es', '888776655', '9823-98723', 'sofá - café - rubí', '2016-08-27 00:36:35', '2016-08-27 00:36:35'),
(166, 'Angel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'ruví, café', '2016-08-27 00:40:31', '2016-08-27 00:40:31'),
(167, 'Rubí', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 00:44:13', '2016-08-27 00:44:13'),
(168, 'Lizbét', 'No se', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 00:49:42', '2016-08-27 00:49:42'),
(169, 'Luis Ángel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Rubí es un buen lenguaje de programación', '2016-08-27 16:04:00', '2016-08-27 16:04:00'),
(170, 'Luis Ángel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Rubí es un buen lenguaje de programación', '2016-08-27 16:04:12', '2016-08-27 16:04:12'),
(171, 'Luis Ángel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 17:31:26', '2016-08-27 17:31:26'),
(172, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 17:38:47', '2016-08-27 17:38:47'),
(173, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 17:42:19', '2016-08-27 17:42:19'),
(174, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 17:51:23', '2016-08-27 17:51:23'),
(175, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 18:02:15', '2016-08-27 18:02:15'),
(176, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 18:10:01', '2016-08-27 18:10:01'),
(177, 'Luis Ángel', 'Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 19:11:50', '2016-08-27 19:11:50'),
(178, 'Luis Ángel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'Rubí es un lenguaje de programación facil', '2016-08-27 19:20:01', '2016-08-27 19:20:01'),
(179, 'Luis Angel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-08-27 19:24:38', '2016-08-27 19:24:38'),
(180, 'Luis Ángel', 'Mondragón', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 00:39:58', '2016-09-09 00:39:58'),
(181, 'Luis Angel', 'Mondragón', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 15:56:56', '2016-09-09 15:56:56'),
(182, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 15:57:50', '2016-09-09 15:57:50'),
(183, 'Luis Angel', 'Mondragon', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 16:01:41', '2016-09-09 16:01:41'),
(184, 'Luis Angel ', 'Mondragon Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 16:14:39', '2016-09-09 16:14:39'),
(185, 'Luis Angel', 'Mondragón Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', 'mis comentarios', '2016-09-09 16:19:47', '2016-09-09 16:19:47'),
(186, 'Luis Angel', 'Mondragon', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 16:23:44', '2016-09-09 16:23:44'),
(187, 'Luis', 'Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 16:26:09', '2016-09-09 16:26:09'),
(188, 'Luis ', 'Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 16:30:10', '2016-09-09 16:30:10'),
(189, 'Luis Angel', 'Herrera', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 16:33:57', '2016-09-09 16:33:57'),
(190, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 19:17:11', '2016-09-09 19:17:11'),
(191, 'aaa', 'aaa', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-09 19:18:13', '2016-09-09 19:18:13'),
(192, 'Luis Angel', 'Mondragon', 'luis_mh@outlook.es', '888776655', '9823-98723', '', '2016-09-10 20:07:30', '2016-09-10 20:07:30');

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
(43, 'uuux--', 'uuuux--', 1, '2016-05-03 22:33:41', '2016-07-23 17:42:43');

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
('prueba@gmail.com', '1c535d5f95dbb951e1f50ba3e68243907ab95f12', '2016-07-01 00:24:20'),
('roberto@proyectoweb.com', '89c815f076b26880372ce578af267ae29e96bacc', '2016-07-01 15:41:33'),
('angeldarkkiller99@live.com', '96b91e8c5d6f3e3584b80183a74c435cc99adb80', '2016-07-01 15:53:27'),
('luis_mh@outlook.es', '7fb9058cbc0c3c4939c34602c0c019cd65c178b1', '2016-07-01 18:29:48');

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
(31, 'Plaza 4', 1, '2016-05-02 22:51:52', '2016-05-02 22:51:52'),
(32, 'Esta es la plaza de mexico', 1, '2016-06-20 22:09:59', '2016-06-20 22:09:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `num_reserva` varchar(100) DEFAULT NULL,
  `lugar_entrega` varchar(100) DEFAULT NULL,
  `direccion1_e` varchar(100) DEFAULT NULL,
  `direccion2_e` varchar(100) DEFAULT NULL,
  `colonia_e` varchar(100) DEFAULT NULL,
  `estado_e` varchar(100) DEFAULT NULL,
  `municipio_e` varchar(100) DEFAULT NULL,
  `cp_e` varchar(100) DEFAULT NULL,
  `referencias_e` varchar(100) DEFAULT NULL,
  `telefono1_e` varchar(100) DEFAULT NULL,
  `telefono2_e` varchar(100) DEFAULT NULL,
  `telefono3_e` varchar(100) DEFAULT NULL,
  `telefono4_e` varchar(100) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `hora_entrega` varchar(50) NOT NULL,
  `lugar_devolucion` varchar(100) DEFAULT NULL,
  `direccion1_d` varchar(100) DEFAULT NULL,
  `direccion2_d` varchar(100) DEFAULT NULL,
  `colonia_d` varchar(100) DEFAULT NULL,
  `estado_d` varchar(100) DEFAULT NULL,
  `municipio_d` varchar(100) DEFAULT NULL,
  `cp_d` varchar(100) DEFAULT NULL,
  `referencias_d` varchar(100) DEFAULT NULL,
  `telefono1_d` varchar(100) DEFAULT NULL,
  `telefono2_d` varchar(100) DEFAULT NULL,
  `telefono3_d` varchar(100) DEFAULT NULL,
  `telefono4_d` varchar(100) DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `hora_devolucion` varchar(50) NOT NULL,
  `tarifa_por_dia` double DEFAULT NULL,
  `dias` varchar(50) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `vehiculo` varchar(50) NOT NULL,
  `transmision` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `diamas` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `cliente_id`, `num_reserva`, `lugar_entrega`, `direccion1_e`, `direccion2_e`, `colonia_e`, `estado_e`, `municipio_e`, `cp_e`, `referencias_e`, `telefono1_e`, `telefono2_e`, `telefono3_e`, `telefono4_e`, `fecha_entrega`, `hora_entrega`, `lugar_devolucion`, `direccion1_d`, `direccion2_d`, `colonia_d`, `estado_d`, `municipio_d`, `cp_d`, `referencias_d`, `telefono1_d`, `telefono2_d`, `telefono3_d`, `telefono4_d`, `fecha_devolucion`, `hora_devolucion`, `tarifa_por_dia`, `dias`, `total`, `vehiculo`, `transmision`, `foto`, `fecha`, `diamas`, `created_at`, `updated_at`) VALUES
(78, 96, '20160630175221', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-06-30', '5:51 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', '', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-02', '5:51 PM', 450, '2', 900, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-06-30', 0, '2016-06-30 22:52:21', '2016-06-30 22:52:21'),
(79, 97, '20160630184143', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-05', '8:40 AM', 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', '98863', 'Sin referencias', 'Oficina:  666778854', 'Fijo:  33445567', ' ', ' ', '2016-07-07', '9:00 PM', 3000, '2', 6000, 'Nueva van de lujo 2016', 1, '3_1_toyota_rav4_337.jpg', '2016-06-30', 0, '2016-06-30 23:41:43', '2016-06-30 23:41:43'),
(80, 98, '20160630184547', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-06-30', '8:44 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-06', '6:44 PM', 1300, '6', 7800, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', '2016-06-30', 0, '2016-06-30 23:45:47', '2016-06-30 23:45:47'),
(81, 99, '20160630184725', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-05', '6:46 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-07-06', '6:46 PM', 2200, '1', 2200, 'Minivan 2016', 1, '2016_Mazda6_EXT360_RojoBrillante_12.png', '2016-06-30', 0, '2016-06-30 23:47:25', '2016-06-30 23:47:25'),
(82, 100, '20160630185020', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-07', '6:47 PM', 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', '98863', 'Sin referencias', 'Oficina:  666778854', 'Fijo:  33445567', ' ', ' ', '2016-07-13', '10:47 PM', 800, '6', 4800, 'VERSA', 2, 'grande1.jpg', '2016-06-30', 0, '2016-06-30 23:50:20', '2016-06-30 23:50:20'),
(83, 101, '20160701130502', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-02', '1:04 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-13', '1:06 PM', 1700, '11', 18700, 'EXPEDITION - SUBURBAN ', 1, 'Auto_ford_ecosport_mv_frente.gif', '2016-07-01', 0, '2016-07-01 18:05:02', '2016-07-01 18:05:02'),
(84, 102, '20160701130634', 'Aguascalientes', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', '2016-07-01', '1:06 PM', 'México', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', '2016-07-02', '1:06 PM', 3000, '1', 3000, 'Nueva van de lujo 2016', 1, '3_1_toyota_rav4_337.jpg', '2016-07-01', 0, '2016-07-01 18:06:34', '2016-07-01 18:06:34'),
(85, 103, '20160701130804', 'Aguascalientes', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', '2016-07-01', '1:06 PM', 'México', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', '2016-07-02', '1:06 PM', 1600, '1', 1600, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-07-01', 0, '2016-07-01 18:08:04', '2016-07-01 18:08:04'),
(86, 104, '20160701131005', 'Aguascalientes', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', '2016-07-01', '1:08 PM', 'México', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', '2016-07-02', '1:08 PM', 2200, '1', 2200, 'Minivan 2016', 1, '2016_Mazda6_EXT360_RojoBrillante_12.png', '2016-07-01', 0, '2016-07-01 18:10:05', '2016-07-01 18:10:05'),
(87, 105, '20160701131047', 'Aguascalientes', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', '2016-07-01', '1:10 PM', 'México', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', '2016-07-04', '1:10 PM', 450, '3', 1350, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-07-01', 0, '2016-07-01 18:10:47', '2016-07-01 18:10:47'),
(88, 106, '20160701131305', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-12', '1:12 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-13', '4:12 AM', 1600, '1', 1600, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-07-01', 0, '2016-07-01 18:13:05', '2016-07-01 18:13:05'),
(89, 107, '20160701132835', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-01', '2:28 PM', 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', '98863', 'Sin referencias', 'Oficina:  666778854', 'Fijo:  33445567', ' ', ' ', '2016-07-04', '1:28 PM', 3200, '3', 9600, 'Nueva minivan 2016', 2, '8cfca1f19aef6e49641213e7a65d583e.png', '2016-07-01', 0, '2016-07-01 18:28:35', '2016-07-01 18:28:35'),
(90, 108, '20160701133035', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-04', '3:30 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-08-09', '1:30 PM', 1300, '36', 46800, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', '2016-07-01', 0, '2016-07-01 18:30:35', '2016-07-01 18:30:35'),
(91, 109, '20160701133326', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-02', '1:32 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-06', '1:32 PM', 1600, '4', 6400, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-07-01', 0, '2016-07-01 18:33:26', '2016-07-01 18:33:26'),
(92, 110, '20160701133422', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-12', '1:34 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-13', '1:34 PM', 1600, '1', 1600, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-07-01', 0, '2016-07-01 18:34:22', '2016-07-01 18:34:22'),
(93, 111, '20160701133544', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-03', '1:35 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-07-12', '1:35 PM', 800, '9', 7200, 'VERSA', 2, 'grande1.jpg', '2016-07-01', 0, '2016-07-01 18:35:44', '2016-07-01 18:35:44'),
(94, 112, '20160701133732', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-04', '2:37 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-06', '1:37 PM', 2000, '2', 4000, 'Nueva minivan', 1, '8cfca1f19aef6e49641213e7a65d583e.png', '2016-07-01', 0, '2016-07-01 18:37:32', '2016-07-01 18:37:32'),
(95, 113, '20160701134024', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-01', '1:40 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-04', '1:40 PM', 3200, '3', 9600, 'Nueva minivan 2016', 2, '8cfca1f19aef6e49641213e7a65d583e.png', '2016-07-01', 0, '2016-07-01 18:40:24', '2016-07-01 18:40:24'),
(96, 114, '20160701135322', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-01', '1:52 PM', 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', '98863', 'Sin referencias', 'Oficina:  666778854', 'Fijo:  33445567', ' ', ' ', '2016-07-04', '1:52 PM', 2300, '3', 6900, 'Minivan 2016', 2, '2016_Mazda6_EXT360_RojoBrillante_12.png', '2016-07-01', 0, '2016-07-01 18:53:22', '2016-07-01 18:53:22'),
(97, 115, '20160701135459', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-03', '1:54 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-05', '5:54 PM', 1700, '2', 3400, 'EXPEDITION - SUBURBAN ', 1, 'Auto_ford_ecosport_mv_frente.gif', '2016-07-01', 0, '2016-07-01 18:54:59', '2016-07-01 18:54:59'),
(98, 116, '20160701135636', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-04', '1:56 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-05', '1:56 PM', 1600, '1', 1600, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-07-01', 0, '2016-07-01 18:56:36', '2016-07-01 18:56:36'),
(99, 117, '20160701135907', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-05', '2:00 PM', 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', '98863', 'Sin referencias', 'Oficina:  666778854', 'Fijo:  33445567', ' ', ' ', '2016-07-08', '4:00 PM', 1300, '3', 3900, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', '2016-07-01', 0, '2016-07-01 18:59:07', '2016-07-01 18:59:07'),
(100, 118, '20160701140405', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-01', '2:03 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-03', '2:03 PM', 1800, '2', 3600, 'EXPEDITION - SUBURBAN ', 2, 'Auto_ford_ecosport_mv_frente.gif', '2016-07-01', 0, '2016-07-01 19:04:05', '2016-07-01 19:04:05'),
(101, 119, '20160701140657', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-01', '2:06 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-07-04', '2:06 PM', 700, '3', 2100, 'VERSA', 1, 'grande1.jpg', '2016-07-01', 0, '2016-07-01 19:06:57', '2016-07-01 19:06:57'),
(102, 120, '20160701141040', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-14', '2:10 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-16', '2:10 PM', 3000, '2', 6000, 'Nueva van de lujo 2016', 1, '3_1_toyota_rav4_337.jpg', '2016-07-01', 0, '2016-07-01 19:10:40', '2016-07-01 19:10:40'),
(103, 121, '20160701141322', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-05', '2:12 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-06', '2:12 PM', 800, '1', 800, 'VERSA', 2, 'grande1.jpg', '2016-07-01', 0, '2016-07-01 19:13:22', '2016-07-01 19:13:22'),
(104, 122, '20160701141826', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-13', '2:18 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-16', '5:18 PM', 900, '3', 2700, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-07-01', 0, '2016-07-01 19:18:26', '2016-07-01 19:18:26'),
(105, 123, '20160701142149', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-19', '2:21 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-22', '2:21 PM', 900, '3', 2700, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-07-01', 0, '2016-07-01 19:21:49', '2016-07-01 19:21:49'),
(106, 124, '20160701142504', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-07', '2:24 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-10', '2:24 PM', 450, '3', 1350, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-07-01', 0, '2016-07-01 19:25:04', '2016-07-01 19:25:04'),
(107, 125, '20160701142731', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-06', '4:26 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-08', '2:26 PM', 1800, '2', 3600, 'EXPEDITION - SUBURBAN ', 2, 'Auto_ford_ecosport_mv_frente.gif', '2016-07-01', 0, '2016-07-01 19:27:31', '2016-07-01 19:27:31'),
(108, 126, '20160701143222', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-05', '5:31 PM', 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', '98863', 'Sin referencias', 'Oficina:  666778854', 'Fijo:  33445567', ' ', ' ', '2016-07-12', '5:31 PM', 450, '7', 3150, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-07-01', 0, '2016-07-01 19:32:22', '2016-07-01 19:32:22'),
(109, 127, '20160701143417', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-05', '3:33 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-07-08', '2:33 PM', 800, '3', 2400, 'VERSA', 2, 'grande1.jpg', '2016-07-01', 0, '2016-07-01 19:34:17', '2016-07-01 19:34:17'),
(110, 128, '20160701143510', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-13', '2:34 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-15', '2:34 PM', 2200, '2', 4400, 'Minivan 2016', 1, '2016_Mazda6_EXT360_RojoBrillante_12.png', '2016-07-01', 0, '2016-07-01 19:35:10', '2016-07-01 19:35:10'),
(111, 129, '20160701144210', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-01', '4:00 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-06', '2:41 PM', 3200, '5', 16000, 'Nueva minivan 2016', 2, '8cfca1f19aef6e49641213e7a65d583e.png', '2016-07-01', 0, '2016-07-01 19:42:10', '2016-07-01 19:42:10'),
(112, 130, '20160723150209', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-25', '3:01 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-27', '3:01 PM', 1300, '2', 2600, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', '2016-07-23', 0, '2016-07-23 20:02:09', '2016-07-23 20:02:09'),
(113, 131, '20160723203204', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-26', '8:23 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-29', '8:23 PM', 900, '3', 2700, 'Nueva van de lujo 2016', 1, '3_1_toyota_rav4_337.jpg', '2016-07-23', 0, '2016-07-24 01:32:04', '2016-07-24 01:32:04'),
(114, 132, '20160723203306', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-26', '8:32 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-28', '8:32 PM', 3200, '2', 6400, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-07-23', 0, '2016-07-24 01:33:06', '2016-07-24 01:33:06'),
(115, 133, '20160723203340', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-28', '8:33 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-07-30', '8:33 PM', 2300, '2', 4600, 'VERSA', 1, 'grande1.jpg', '2016-07-23', 0, '2016-07-24 01:33:40', '2016-07-24 01:33:40'),
(116, 134, '20160724114949', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-16', '1:40 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-19', '2:00 PM', 1500, '3', 4500, 'MARCH -  GOL HB ', 1, 'chicos.jpg', '2016-07-24', 0, '2016-07-24 16:49:49', '2016-07-24 16:49:49'),
(117, 135, '20160724115123', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-26', '12:50 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-07-27', '11:50 AM', 2200, '1', 2200, 'VERSA', 2, 'grande1.jpg', '2016-07-24', 0, '2016-07-24 16:51:23', '2016-07-24 16:51:23'),
(118, 136, '20160724115234', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-27', '11:52 AM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-07-28', '11:52 AM', 2200, '1', 2200, 'VERSA', 2, 'grande1.jpg', '2016-07-24', 0, '2016-07-24 16:52:34', '2016-07-24 16:52:34'),
(119, 137, '20160724115445', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-10', '11:52 AM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-18', '11:52 AM', 900, '8', 7200, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-07-24', 0, '2016-07-24 16:54:45', '2016-07-24 16:54:45'),
(120, 138, '20160809172141', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '6:20 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '6:20 PM', 450, '1', 450, 'Económico sencillo', 2, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-08-09', 0, '2016-08-09 22:21:41', '2016-08-09 22:21:41'),
(121, 139, '20160809172229', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '6:22 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-16', '5:22 PM', 700, '4', 2800, 'VERSA', 1, 'grande1.jpg', '2016-08-09', 0, '2016-08-09 22:22:29', '2016-08-09 22:22:29'),
(122, 140, '20160809181815', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '7:17 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-17', '8:17 PM', 700, '4', 2800, 'VERSA', 1, 'grande1.jpg', '2016-08-09', 0, '2016-08-09 23:18:15', '2016-08-09 23:18:15'),
(123, 141, '20160809182558', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-12', '8:24 PM', 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', '98863', 'Sin referencias', 'Oficina:  666778854', 'Fijo:  33445567', ' ', ' ', '2016-08-15', '6:24 PM', 900, '3', 2700, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-08-09', 0, '2016-08-09 23:25:58', '2016-08-09 23:25:58'),
(124, 142, '20160809183043', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '8:29 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-15', '6:29 PM', 1100, '3', 3300, 'EXPEDITION - SUBURBAN ', 1, 'Auto_ford_ecosport_mv_frente.gif', '2016-08-09', 0, '2016-08-09 23:30:43', '2016-08-09 23:30:43'),
(125, 143, '20160809183415', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '6:33 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-15', '6:33 PM', 700, '3', 2100, 'VERSA', 1, 'grande1.jpg', '2016-08-09', 0, '2016-08-09 23:34:15', '2016-08-09 23:34:15'),
(126, 144, '20160809183633', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-16', '6:35 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-18', '6:35 PM', 600, '2', 1200, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-08-09', 0, '2016-08-09 23:36:33', '2016-08-09 23:36:33'),
(127, 145, '20160809184342', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '6:43 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-13', '6:43 PM', 900, '1', 900, 'VERSA', 2, 'grande1.jpg', '2016-08-09', 0, '2016-08-09 23:43:42', '2016-08-09 23:43:42'),
(128, 146, '20160809194609', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-11', '7:45 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-13', '7:45 PM', 1500, '2', 3000, 'MARCH -  GOL HB ', 1, 'chicos.jpg', '2016-08-09', 0, '2016-08-10 00:46:09', '2016-08-10 00:46:09'),
(129, 147, '20160809232339', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '12:22 AM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-08-14', '1:22 AM', 1100, '2', 2200, 'EXPEDITION - SUBURBAN ', 1, 'Auto_ford_ecosport_mv_frente.gif', '2016-08-09', 0, '2016-08-10 04:23:39', '2016-08-10 04:23:39'),
(130, 148, '20160809234511', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-11', '11:44 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-16', '1:44 PM', 700, '5', 3500, 'VERSA', 1, 'grande1.jpg', '2016-08-09', 0, '2016-08-10 04:45:11', '2016-08-10 04:45:11'),
(131, 149, '20160809235539', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-11', '11:55 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-18', '11:55 PM', 1100, '7', 7700, 'EXPEDITION - SUBURBAN ', 1, 'Auto_ford_ecosport_mv_frente.gif', '2016-08-09', 0, '2016-08-10 04:55:39', '2016-08-10 04:55:39'),
(132, 150, '20160809235806', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-12', '11:57 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-08-15', '11:57 PM', 450, '3', 1350, 'Económico sencillo', 2, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-08-09', 0, '2016-08-10 04:58:06', '2016-08-10 04:58:06'),
(133, 151, '20160810000222', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '1:00 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-15', '2:00 PM', 900, '2', 1800, 'VERSA', 2, 'grande1.jpg', '2016-08-10', 0, '2016-08-10 05:02:22', '2016-08-10 05:02:22'),
(134, 152, '20160810000357', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '3:00 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-15', '1:00 PM', 700, '2', 1400, 'VERSA', 1, 'grande1.jpg', '2016-08-10', 0, '2016-08-10 05:03:57', '2016-08-10 05:03:57'),
(135, 153, '20160810000849', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-13', '12:07 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-08-17', '1:07 AM', 1500, '4', 6000, 'MARCH -  GOL HB ', 1, 'chicos.jpg', '2016-08-10', 0, '2016-08-10 05:08:49', '2016-08-10 05:08:49'),
(136, 154, '20160810012743', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', '', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '2:26 PM', 'Toluca', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', '98863', 'Sin referencias', 'Oficina:  666778854', 'Fijo:  33445567', ' ', ' ', '2016-08-16', '2:26 AM', 1100, '3', 3300, 'EXPEDITION - SUBURBAN ', 1, 'Auto_ford_ecosport_mv_frente.gif', '2016-08-10', 0, '2016-08-10 06:27:43', '2016-08-10 06:27:43'),
(137, 155, '20160810141027', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '3:09 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-15', '2:09 PM', 700, '2', 1400, 'VERSA', 1, 'grande1.jpg', '2016-08-10', 0, '2016-08-10 19:10:27', '2016-08-10 19:10:27'),
(138, 156, '20160810143612', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '2:35 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-17', '2:35 PM', 1100, '5', 5500, 'EXPEDITION - SUBURBAN ', 1, '253_Avanza_4.jpg', '2016-08-10', 0, '2016-08-10 19:36:12', '2016-08-10 19:36:12'),
(139, 157, '20160810145823', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '3:57 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-16', '3:57 PM', 1800, '3', 5400, 'MARCH -  GOL HB ', 2, 'chicos.jpg', '2016-08-10', 0, '2016-08-10 19:58:23', '2016-08-10 19:58:23'),
(140, 158, '20160810151129', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '3:10 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-16', '3:10 PM', 700, '3', 2100, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-08-10', 0, '2016-08-10 20:11:29', '2016-08-10 20:11:29'),
(141, 159, '20160810151618', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '4:15 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-15', '3:15 PM', 700, '3', 2100, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-08-10', 0, '2016-08-10 20:16:18', '2016-08-10 20:16:18'),
(142, 160, '20160810151726', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '3:17 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-08-19', '3:17 PM', 900, '6', 5400, 'JETTA CLASICO', 2, '4f1f93e49a97f.jpg', '2016-08-10', 0, '2016-08-10 20:17:26', '2016-08-10 20:17:26'),
(143, 161, '20160810151838', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-12', '3:18 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-13', '4:18 PM', 700, '1', 700, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-08-10', 0, '2016-08-10 20:18:38', '2016-08-10 20:18:38'),
(144, 162, '20160810153253', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-13', '3:32 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-08-16', '3:32 PM', 1100, '3', 3300, 'EXPEDITION - SUBURBAN ', 1, '3_1_toyota_rav4_337.jpg', '2016-08-10', 0, '2016-08-10 20:32:53', '2016-08-10 20:32:53'),
(145, 163, '20160826191022', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '7:09 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-30', '7:09 PM', 700, '1', 700, 'VERSA', 1, 'grande1.jpg', '2016-08-26', 0, '2016-08-27 00:10:22', '2016-08-27 00:10:22'),
(146, 164, '20160826191206', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-27', '8:11 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '8:11 PM', 900, '2', 1800, 'VERSA', 2, 'grande1.jpg', '2016-08-26', 0, '2016-08-27 00:12:06', '2016-08-27 00:12:06'),
(147, 165, '20160826193635', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-28', '7:35 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '7:35 PM', 600, '1', 600, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-08-26', 0, '2016-08-27 00:36:35', '2016-08-27 00:36:35'),
(148, 166, '20160826194031', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '7:39 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-30', '7:39 PM', 1500, '1', 1500, 'MARCH -  GOL HB ', 1, 'chicos.jpg', '2016-08-26', 0, '2016-08-27 00:40:31', '2016-08-27 00:40:31'),
(149, 167, '20160826194413', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-28', '8:43 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-08-30', '7:43 PM', 900, '2', 1800, 'VERSA', 2, 'grande1.jpg', '2016-08-26', 0, '2016-08-27 00:44:13', '2016-08-27 00:44:13'),
(150, 168, '20160826194942', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '8:48 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-30', '7:48 PM', 1800, '1', 1800, 'MARCH -  GOL HB ', 2, 'chicos.jpg', '2016-08-26', 0, '2016-08-27 00:49:42', '2016-08-27 00:49:42'),
(151, 169, '20160827110400', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-30', '12:02 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-31', '11:02 AM', 1100, '1', 1100, 'EXPEDITION - SUBURBAN ', 1, '3_1_toyota_rav4_337.jpg', '2016-08-27', 0, '2016-08-27 16:04:00', '2016-08-27 16:04:00'),
(152, 170, '20160827110412', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-30', '12:02 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-31', '11:02 AM', 1100, '1', 1100, 'EXPEDITION - SUBURBAN ', 1, '3_1_toyota_rav4_337.jpg', '2016-08-27', 0, '2016-08-27 16:04:12', '2016-08-27 16:04:12'),
(153, 171, '20160827123127', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '12:30 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-30', '1:30 PM', 700, '1', 700, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-08-27', 0, '2016-08-27 17:31:27', '2016-08-27 17:31:27'),
(154, 172, '20160827123847', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextél:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-28', '12:38 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextél:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-30', '1:38 PM', 450, '2', 900, 'Económico sencillo', 2, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-08-27', 0, '2016-08-27 17:38:47', '2016-08-27 17:38:47'),
(155, 173, '20160827124219', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-29', '2:41 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextél:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-31', '12:41 PM', 700, '2', 1400, 'VERSA', 1, 'grande1.jpg', '2016-08-27', 0, '2016-08-27 17:42:19', '2016-08-27 17:42:19'),
(156, 174, '20160827125123', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-29', '1:50 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-30', '12:50 PM', 1100, '1', 1100, 'EXPEDITION - SUBURBAN ', 1, '3_1_toyota_rav4_337.jpg', '2016-08-27', 0, '2016-08-27 17:51:23', '2016-08-27 17:51:23'),
(157, 175, '20160827130215', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '2:01 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-30', '2:01 PM', 1100, '1', 1100, 'EXPEDITION - SUBURBAN ', 1, '3_1_toyota_rav4_337.jpg', '2016-08-27', 0, '2016-08-27 18:02:15', '2016-08-27 18:02:15'),
(158, 176, '20160827131001', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-28', '1:09 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '2:09 PM', 700, '1', 700, 'VERSA', 1, 'grande1.jpg', '2016-08-27', 0, '2016-08-27 18:10:01', '2016-08-27 18:10:01'),
(159, 177, '20160827141150', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '3:11 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-30', '3:11 PM', 900, '1', 900, 'VERSA', 2, 'grande1.jpg', '2016-08-27', 0, '2016-08-27 19:11:50', '2016-08-27 19:11:50'),
(160, 178, '20160827142001', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-29', '3:18 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-31', '3:18 PM', 700, '2', 1400, 'VERSA', 1, 'grande1.jpg', '2016-08-27', 0, '2016-08-27 19:20:01', '2016-08-27 19:20:01'),
(161, 179, '20160827142438', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-08-28', '3:23 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-08-30', '4:23 PM', 1100, '2', 2200, 'EXPEDITION - SUBURBAN ', 1, '3_1_toyota_rav4_337.jpg', '2016-08-27', 0, '2016-08-27 19:24:38', '2016-08-27 19:24:38'),
(162, 180, '20160908194000', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-09', '10:00 AM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-11', '5:00 PM', 900, '2', 1800, 'VERSA', 2, 'grande1.jpg', '2016-09-08', 0, '2016-09-09 00:40:00', '2016-09-09 00:40:00'),
(163, 181, '20160909105656', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-10', '11:00 AM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-09-13', '3:00 PM', 700, '3', 2100, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-09-09', 1, '2016-09-09 15:56:56', '2016-09-09 15:56:56'),
(164, 182, '20160909105750', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-11', '2:57 PM', 'Monterrey', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Delegacion', '889766', '', 'Nextel:  2223334455', 'Oficina:  666778899', 'Fijo:  1110009988', ' ', '2016-09-12', '3:57 PM', 700, '1', 700, 'VERSA', 1, 'grande1.jpg', '2016-09-09', 0, '2016-09-09 15:57:50', '2016-09-09 15:57:50'),
(165, 183, '20160909110141', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-11', '10:00 AM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-12', '2:00 PM', 1800, '1', 1800, 'MARCH -  GOL HB ', 2, 'chicos.jpg', '2016-09-09', 1, '2016-09-09 16:01:41', '2016-09-09 16:01:41'),
(166, 184, '20160909111439', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-11', '3:20 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-14', '6:30 PM', 700, '3', 2100, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-09-09', 1, '2016-09-09 16:14:39', '2016-09-09 16:14:39'),
(167, 185, '20160909111947', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-13', '5:20 AM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-15', '9:00 AM', 700, '2', 1400, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-09-09', 1, '2016-09-09 16:19:47', '2016-09-09 16:19:47'),
(168, 186, '20160909112344', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-13', '8:22 AM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-14', '2:00 PM', 1500, '1', 1500, 'MARCH -  GOL HB ', 1, 'chicos.jpg', '2016-09-09', 1, '2016-09-09 16:23:44', '2016-09-09 16:23:44'),
(169, 187, '20160909112609', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-15', '3:00 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-19', '11:25 AM', 700, '4', 2800, 'JETTA CLASICO', 1, '4f1f93e49a97f.jpg', '2016-09-09', 0, '2016-09-09 16:26:09', '2016-09-09 16:26:09'),
(170, 188, '20160909113010', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-12', '11:30 AM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-15', '2:00 PM', 600, '3', 1800, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', '2016-09-09', 0, '2016-09-09 16:30:10', '2016-09-09 16:30:10'),
(171, 189, '20160909113358', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-11', '3:00 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-13', '5:00 PM', 1500, '2', 3000, 'MARCH -  GOL HB ', 1, 'chicos.jpg', '2016-09-09', 0, '2016-09-09 16:33:58', '2016-09-09 16:33:58'),
(172, 190, '20160909141712', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-11', '2:16 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-13', '4:16 PM', 1500, '2', 3000, 'MARCH -  GOL HB ', 1, 'chicos.jpg', '2016-09-09', 0, '2016-09-09 19:17:12', '2016-09-09 19:17:12');
INSERT INTO `reserva` (`id`, `cliente_id`, `num_reserva`, `lugar_entrega`, `direccion1_e`, `direccion2_e`, `colonia_e`, `estado_e`, `municipio_e`, `cp_e`, `referencias_e`, `telefono1_e`, `telefono2_e`, `telefono3_e`, `telefono4_e`, `fecha_entrega`, `hora_entrega`, `lugar_devolucion`, `direccion1_d`, `direccion2_d`, `colonia_d`, `estado_d`, `municipio_d`, `cp_d`, `referencias_d`, `telefono1_d`, `telefono2_d`, `telefono3_d`, `telefono4_d`, `fecha_devolucion`, `hora_devolucion`, `tarifa_por_dia`, `dias`, `total`, `vehiculo`, `transmision`, `foto`, `fecha`, `diamas`, `created_at`, `updated_at`) VALUES
(173, 191, '20160909141813', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-11', '3:17 PM', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-12', '2:17 PM', 1800, '1', 1800, 'MARCH -  GOL HB ', 2, 'chicos.jpg', '2016-09-09', 0, '2016-09-09 19:18:13', '2016-09-09 19:18:13'),
(174, 192, '20160910150730', 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', '565656', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', 'Nextel:  9992332', 'Oficina:  4554544', 'Fijo:  5000054', ' ', '2016-09-13', '4:06 PM', 'México', 'Dirección 1', 'Dirección 2', 'Colonia', 'Estado', 'Municipio', '556665', 'Referencias', 'Oficina:  9906542', ' ', ' ', ' ', '2016-09-15', '4:06 PM', 1500, '2', 3000, 'MARCH -  GOL HB ', 1, 'chicos.jpg', '2016-09-10', 0, '2016-09-10 20:07:30', '2016-09-10 20:07:30');

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

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `cliente_id`, `reserva_id`, `fecha`, `hora`, `created_at`, `updated_at`) VALUES
(12, 192, 174, '2016-09-10', 3, '2016-09-10 20:07:30', '2016-09-10 20:07:30');

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
(123, 1, 8, 'Aguascalientes', 'Direccion 1', '', 'Colonia', 'Estado', 'Municipio', 'A 2 Km. del aeropuerto de Aguascalientes. Junto al Hotel Hampton Inn', '565656', '2016-04-25 23:55:18', '2016-08-10 19:09:36');

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
(31, 8, '2016-04-28', '2016-05-31', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(32, 8, '2016-06-01', '2016-07-31', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(33, 8, '2016-08-01', '2016-09-30', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(34, 8, '2016-10-01', '2016-11-30', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(35, 8, '2016-12-01', '2017-01-01', 1, '2016-04-28 21:01:47', '2016-04-28 21:01:47'),
(36, 3, '2016-04-28', '2016-05-31', 1, '2016-07-24 16:02:17', '2016-07-24 16:03:41'),
(37, 3, '2016-06-01', '2016-07-31', 1, '2016-07-24 16:04:46', '2016-07-24 16:06:25'),
(38, 3, '2016-08-01', '2016-09-30', 1, '2016-07-24 16:07:44', '2016-07-24 16:08:41'),
(39, 3, '2016-10-01', '2016-11-30', 1, '2016-07-24 16:09:14', '2016-07-24 16:09:38'),
(40, 3, '2016-12-01', '2017-01-01', 1, '2016-07-24 16:10:06', '2016-07-24 16:10:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa_detalle`
--

CREATE TABLE `tarifa_detalle` (
  `id` int(11) NOT NULL,
  `tarifa_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `codigo_id` int(11) NOT NULL,
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

INSERT INTO `tarifa_detalle` (`id`, `tarifa_id`, `grupo_id`, `codigo_id`, `cobertura_id`, `tipo_vehiculo_id`, `tarifa_por_dia`, `estatus`, `created_at`, `updated_at`) VALUES
(148, 31, 13, 6, 3, 81, 1800, 1, '2016-04-28 21:01:48', '2016-07-24 01:08:01'),
(149, 31, 13, 25, 1, 88, 1700, 1, '2016-04-28 21:01:49', '2016-07-24 01:09:30'),
(150, 31, 18, 4, 3, 84, 1500, 1, '2016-04-28 21:01:49', '2016-07-24 01:07:50'),
(151, 31, 18, 19, 1, 103, 1300, 1, '2016-04-28 21:01:49', '2016-07-24 01:09:15'),
(152, 31, 22, 4, 3, 83, 1300, 1, '2016-04-28 21:01:49', '2016-07-24 01:07:41'),
(153, 31, 22, 19, 1, 102, 1100, 1, '2016-04-28 21:01:49', '2016-07-24 01:09:07'),
(155, 31, 12, 19, 1, 76, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:08:55'),
(157, 31, 22, 19, 1, 75, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:08:40'),
(158, 31, 18, 24, 3, 86, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:06:38'),
(159, 31, 18, 18, 1, 77, 450, 1, '2016-04-28 21:01:49', '2016-07-24 01:08:30'),
(160, 31, 13, 24, 3, 85, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:06:21'),
(161, 31, 18, 6, 1, 82, 600, 1, '2016-04-28 21:01:49', '2016-07-24 01:08:14'),
(164, 32, 13, 19, 3, 76, 1800, 1, '2016-04-28 21:01:48', '2016-07-24 01:12:41'),
(166, 32, 18, 19, 3, 75, 1500, 1, '2016-04-28 21:01:49', '2016-07-24 01:12:32'),
(168, 32, 22, 18, 3, 77, 1300, 1, '2016-04-28 21:01:49', '2016-07-24 01:12:23'),
(169, 32, 22, 29, 1, 105, 1100, 1, '2016-04-28 21:01:49', '2016-07-24 01:14:52'),
(170, 32, 12, 6, 3, 82, 1200, 1, '2016-04-28 21:01:49', '2016-07-24 01:12:10'),
(171, 32, 12, 29, 1, 104, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:14:41'),
(172, 32, 18, 6, 3, 81, 800, 1, '2016-04-28 21:01:49', '2016-07-24 01:12:02'),
(173, 32, 22, 29, 1, 97, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:14:28'),
(174, 32, 18, 4, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:11:53'),
(175, 32, 18, 29, 1, 96, 450, 1, '2016-04-28 21:01:49', '2016-07-24 01:13:52'),
(176, 32, 13, 4, 3, 83, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:11:43'),
(177, 32, 18, 25, 1, 89, 600, 1, '2016-04-28 21:01:49', '2016-07-24 01:13:32'),
(180, 33, 13, 19, 3, 76, 1800, 1, '2016-04-28 21:01:48', '2016-07-24 01:17:07'),
(182, 33, 18, 19, 3, 75, 1500, 1, '2016-04-28 21:01:49', '2016-07-24 01:17:00'),
(184, 33, 22, 18, 3, 77, 1300, 1, '2016-04-28 21:01:49', '2016-07-24 01:16:50'),
(185, 33, 22, 29, 1, 96, 1100, 1, '2016-04-28 21:01:49', '2016-07-24 01:17:49'),
(186, 33, 12, 6, 3, 82, 1200, 1, '2016-04-28 21:01:49', '2016-07-24 01:16:38'),
(187, 33, 12, 24, 1, 86, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:17:38'),
(188, 33, 18, 6, 3, 81, 800, 1, '2016-04-28 21:01:49', '2016-07-24 01:16:24'),
(189, 33, 22, 24, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:17:32'),
(190, 33, 18, 4, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:16:14'),
(191, 33, 18, 19, 1, 103, 450, 1, '2016-04-28 21:01:49', '2016-07-24 01:17:22'),
(192, 33, 13, 4, 3, 83, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:16:08'),
(193, 33, 18, 19, 1, 102, 600, 1, '2016-04-28 21:01:49', '2016-07-24 01:17:16'),
(196, 34, 13, 19, 3, 76, 1800, 1, '2016-04-28 21:01:48', '2016-07-24 01:19:19'),
(197, 34, 13, 29, 1, 104, 1700, 1, '2016-04-28 21:01:49', '2016-07-24 01:20:51'),
(198, 34, 18, 19, 3, 75, 1500, 1, '2016-04-28 21:01:49', '2016-07-24 01:19:12'),
(199, 34, 18, 29, 1, 97, 1300, 1, '2016-04-28 21:01:49', '2016-07-24 01:20:35'),
(200, 34, 22, 18, 3, 77, 1300, 1, '2016-04-28 21:01:49', '2016-07-24 01:19:05'),
(201, 34, 22, 29, 1, 96, 1100, 1, '2016-04-28 21:01:49', '2016-07-24 01:20:28'),
(202, 34, 12, 6, 3, 82, 1200, 1, '2016-04-28 21:01:49', '2016-07-24 01:18:55'),
(203, 34, 12, 24, 1, 86, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:20:15'),
(204, 34, 18, 6, 3, 81, 800, 1, '2016-04-28 21:01:49', '2016-07-24 01:18:49'),
(205, 34, 22, 24, 1, 85, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:20:01'),
(206, 34, 18, 4, 3, 84, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:18:40'),
(207, 34, 18, 19, 1, 103, 450, 1, '2016-04-28 21:01:49', '2016-07-24 01:19:37'),
(208, 34, 13, 4, 3, 83, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:18:35'),
(209, 34, 18, 19, 1, 102, 600, 1, '2016-04-28 21:01:49', '2016-07-24 01:19:29'),
(212, 35, 13, 24, 3, 86, 1800, 1, '2016-04-28 21:01:48', '2016-07-24 01:23:14'),
(214, 35, 18, 24, 3, 85, 1500, 1, '2016-04-28 21:01:49', '2016-07-24 01:23:06'),
(216, 35, 22, 19, 3, 103, 1300, 1, '2016-04-28 21:01:49', '2016-07-24 01:22:52'),
(218, 35, 12, 19, 3, 102, 1200, 1, '2016-04-28 21:01:49', '2016-07-24 01:22:43'),
(220, 35, 18, 19, 3, 76, 800, 1, '2016-04-28 21:01:49', '2016-07-24 01:22:35'),
(222, 35, 18, 19, 3, 75, 900, 1, '2016-04-28 21:01:49', '2016-07-24 01:22:26'),
(224, 35, 13, 18, 3, 77, 700, 1, '2016-04-28 21:01:49', '2016-07-24 01:22:17'),
(229, 35, 12, 29, 1, 105, 1500, 1, '2016-06-20 03:34:24', '2016-07-24 01:23:47'),
(230, 35, 12, 29, 1, 104, 1600, 1, '2016-06-20 03:34:51', '2016-07-24 01:23:40'),
(231, 35, 13, 6, 3, 82, 2000, 1, '2016-06-20 03:35:50', '2016-07-24 01:22:08'),
(232, 35, 13, 6, 3, 81, 2100, 1, '2016-06-20 03:36:04', '2016-07-24 01:22:00'),
(233, 35, 18, 4, 3, 84, 1000, 1, '2016-06-20 03:37:52', '2016-07-24 01:21:52'),
(234, 35, 18, 29, 1, 97, 1200, 1, '2016-06-20 03:38:06', '2016-07-24 01:23:33'),
(235, 35, 22, 29, 1, 96, 3000, 1, '2016-06-20 03:38:22', '2016-07-24 01:23:26'),
(236, 35, 22, 4, 3, 83, 3200, 1, '2016-06-20 03:38:35', '2016-07-24 01:21:46'),
(237, 32, 12, 25, 1, 88, 2000, 1, '2016-06-20 03:42:12', '2016-07-24 01:13:26'),
(239, 32, 13, 24, 1, 86, 2200, 1, '2016-06-20 03:42:55', '2016-07-24 01:13:14'),
(240, 32, 13, 24, 1, 85, 2300, 1, '2016-06-20 03:43:10', '2016-07-24 01:13:08'),
(241, 32, 18, 19, 1, 103, 1600, 1, '2016-06-20 03:44:32', '2016-07-24 01:12:58'),
(243, 32, 22, 28, 3, 95, 3000, 1, '2016-06-20 03:45:07', '2016-07-24 01:10:45'),
(244, 32, 22, 28, 3, 94, 3200, 1, '2016-06-20 03:45:23', '2016-07-24 01:10:36'),
(257, 32, 22, 19, 1, 102, 3200, 1, '2016-06-20 18:34:14', '2016-07-24 01:12:50'),
(599, 36, 22, 4, 3, 83, 1300, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(600, 36, 18, 19, 1, 103, 1300, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(601, 36, 13, 6, 3, 81, 1800, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(602, 36, 18, 4, 3, 84, 1500, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(603, 36, 22, 19, 1, 102, 1100, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(604, 36, 13, 25, 1, 88, 1700, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(605, 36, 12, 19, 1, 76, 900, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(606, 36, 22, 19, 1, 75, 700, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(607, 36, 18, 24, 3, 86, 900, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(608, 36, 18, 18, 1, 77, 450, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(609, 36, 13, 24, 3, 85, 700, 1, '2016-07-24 16:02:18', '2016-07-24 16:02:18'),
(610, 36, 18, 6, 1, 82, 600, 1, '2016-07-24 16:02:19', '2016-07-24 16:02:19'),
(611, 37, 13, 19, 3, 76, 1800, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(612, 37, 18, 19, 3, 75, 1500, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(613, 37, 12, 29, 1, 104, 900, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(614, 37, 12, 6, 3, 82, 1200, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(615, 37, 22, 18, 3, 77, 1300, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(616, 37, 22, 29, 1, 105, 1100, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(617, 37, 18, 6, 3, 81, 800, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(618, 37, 18, 29, 1, 96, 450, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(619, 37, 18, 4, 3, 84, 900, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(620, 37, 13, 4, 3, 83, 700, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(621, 37, 22, 29, 1, 97, 700, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(622, 37, 18, 25, 1, 89, 600, 1, '2016-07-24 16:04:47', '2016-07-24 16:04:47'),
(623, 37, 12, 25, 1, 88, 2000, 1, '2016-07-24 16:04:48', '2016-07-24 16:04:48'),
(624, 37, 13, 24, 1, 86, 2200, 1, '2016-07-24 16:04:48', '2016-07-24 16:04:48'),
(625, 37, 18, 19, 1, 103, 1600, 1, '2016-07-24 16:04:48', '2016-07-24 16:04:48'),
(626, 37, 13, 24, 1, 85, 2300, 1, '2016-07-24 16:04:48', '2016-07-24 16:04:48'),
(627, 37, 22, 28, 3, 95, 3000, 1, '2016-07-24 16:04:48', '2016-07-24 16:04:48'),
(628, 37, 22, 28, 3, 94, 3200, 1, '2016-07-24 16:04:48', '2016-07-24 16:04:48'),
(629, 37, 22, 19, 1, 102, 3200, 1, '2016-07-24 16:04:48', '2016-07-24 16:04:48'),
(630, 38, 13, 19, 3, 76, 1800, 1, '2016-07-24 16:07:45', '2016-07-24 16:07:45'),
(631, 38, 22, 18, 3, 77, 1300, 1, '2016-07-24 16:07:45', '2016-07-24 16:07:45'),
(632, 38, 18, 19, 3, 75, 1500, 1, '2016-07-24 16:07:45', '2016-07-24 16:07:45'),
(633, 38, 22, 29, 1, 96, 1100, 1, '2016-07-24 16:07:45', '2016-07-24 16:07:45'),
(634, 38, 12, 6, 3, 82, 1200, 1, '2016-07-24 16:07:45', '2016-07-24 16:07:45'),
(635, 38, 12, 24, 1, 86, 900, 1, '2016-07-24 16:07:45', '2016-07-24 16:07:45'),
(636, 38, 22, 24, 1, 85, 700, 1, '2016-07-24 16:07:45', '2016-07-24 16:07:45'),
(637, 38, 18, 4, 3, 84, 900, 1, '2016-07-24 16:07:45', '2016-07-24 16:07:45'),
(638, 38, 18, 6, 3, 81, 800, 1, '2016-07-24 16:07:46', '2016-07-24 16:07:46'),
(639, 38, 18, 19, 1, 103, 450, 1, '2016-07-24 16:07:46', '2016-07-24 16:07:46'),
(640, 38, 13, 4, 3, 83, 700, 1, '2016-07-24 16:07:46', '2016-07-24 16:07:46'),
(641, 38, 18, 19, 1, 102, 600, 1, '2016-07-24 16:07:46', '2016-07-24 16:07:46'),
(642, 39, 22, 29, 1, 96, 1100, 1, '2016-07-24 16:09:15', '2016-07-24 16:09:15'),
(643, 39, 13, 29, 1, 104, 1700, 1, '2016-07-24 16:09:15', '2016-07-24 16:09:15'),
(644, 39, 18, 29, 1, 97, 1300, 1, '2016-07-24 16:09:15', '2016-07-24 16:09:15'),
(645, 39, 13, 19, 3, 76, 1800, 1, '2016-07-24 16:09:15', '2016-07-24 16:09:15'),
(646, 39, 22, 18, 3, 77, 1300, 1, '2016-07-24 16:09:15', '2016-07-24 16:09:15'),
(647, 39, 18, 19, 3, 75, 1500, 1, '2016-07-24 16:09:15', '2016-07-24 16:09:15'),
(648, 39, 12, 6, 3, 82, 1200, 1, '2016-07-24 16:09:15', '2016-07-24 16:09:15'),
(649, 39, 12, 24, 1, 86, 900, 1, '2016-07-24 16:09:15', '2016-07-24 16:09:15'),
(650, 39, 18, 6, 3, 81, 800, 1, '2016-07-24 16:09:16', '2016-07-24 16:09:16'),
(651, 39, 18, 19, 1, 103, 450, 1, '2016-07-24 16:09:16', '2016-07-24 16:09:16'),
(652, 39, 18, 4, 3, 84, 900, 1, '2016-07-24 16:09:16', '2016-07-24 16:09:16'),
(653, 39, 22, 24, 1, 85, 700, 1, '2016-07-24 16:09:16', '2016-07-24 16:09:16'),
(654, 39, 13, 4, 3, 83, 700, 1, '2016-07-24 16:09:16', '2016-07-24 16:09:16'),
(655, 39, 18, 19, 1, 102, 600, 1, '2016-07-24 16:09:16', '2016-07-24 16:09:16'),
(656, 40, 13, 24, 3, 86, 1800, 1, '2016-07-24 16:10:06', '2016-07-24 16:10:06'),
(657, 40, 12, 19, 3, 102, 1200, 1, '2016-07-24 16:10:06', '2016-07-24 16:10:06'),
(658, 40, 18, 19, 3, 76, 800, 1, '2016-07-24 16:10:06', '2016-07-24 16:10:06'),
(659, 40, 18, 19, 3, 75, 900, 1, '2016-07-24 16:10:06', '2016-07-24 16:10:06'),
(660, 40, 18, 24, 3, 85, 1500, 1, '2016-07-24 16:10:06', '2016-07-24 16:10:06'),
(661, 40, 22, 19, 3, 103, 1300, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(662, 40, 12, 29, 1, 105, 1500, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(663, 40, 13, 18, 3, 77, 700, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(664, 40, 13, 6, 3, 81, 2100, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(665, 40, 18, 4, 3, 84, 1000, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(666, 40, 13, 6, 3, 82, 2000, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(667, 40, 12, 29, 1, 104, 1600, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(668, 40, 18, 29, 1, 97, 1200, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(669, 40, 22, 4, 3, 83, 3200, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07'),
(670, 40, 22, 29, 1, 96, 3000, 1, '2016-07-24 16:10:07', '2016-07-24 16:10:07');

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
(120, 118, 5, '9906542', '2016-04-25 23:47:42', '2016-04-25 23:47:42'),
(127, 123, 11, '5000054', '2016-04-25 23:55:19', '2016-04-25 23:55:49'),
(128, 123, 1, '9992332', '2016-04-25 23:55:19', '2016-04-25 23:55:49'),
(129, 123, 5, '4554544', '2016-04-25 23:55:49', '2016-04-25 23:55:49'),
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
(1, 'Nextel', 1, '2016-04-14 05:00:00', '2016-08-27 17:48:50'),
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
(89, 25, 'ELANTRA', 2, 'Honda-Jazz-20151.jpg', 1, '2016-04-28 10:12:53', '2016-07-23 21:20:24'),
(90, 26, 'PICK UP CABINA SENCILLA', 1, 'camionetas1.jpg', 1, '2016-04-28 10:13:38', '2016-04-28 10:13:38'),
(91, 26, 'PICK UP CABINA SENCILLA', 2, 'camionetas1.jpg', 1, '2016-04-28 10:13:54', '2016-04-28 10:13:54'),
(92, 27, 'SIENA - TOWN & COUNTRY - ROUTAN', 1, 'minazul.png', 1, '2016-04-28 10:15:20', '2016-06-20 20:56:44'),
(93, 27, 'SIENA - TOWN & COUNTRY - ROUTAN', 2, 'minazul.png', 1, '2016-04-28 10:15:50', '2016-06-20 20:56:31'),
(94, 28, 'EXPRESS VAN - URBAN - HI ACE', 1, 'imagenes-de-camionetas-blanca.jpg', 1, '2016-04-28 10:16:51', '2016-04-29 03:44:23'),
(95, 28, 'EXPRESS VAN - URBAN - HI ACE', 2, 'imagenes-de-camionetas-blanca.jpg', 1, '2016-04-28 10:17:10', '2016-04-29 03:44:10'),
(96, 29, 'EXPEDITION - SUBURBAN ', 1, '3_1_toyota_rav4_337.jpg', 1, '2016-04-28 10:17:52', '2016-08-10 20:31:59'),
(97, 29, 'EXPEDITION - SUBURBAN ', 2, '3_1_toyota_rav4_337.jpg', 1, '2016-04-28 10:18:08', '2016-08-10 20:31:45'),
(98, 27, 'Nueva minivan', 1, '8cfca1f19aef6e49641213e7a65d583e.png', 1, '2016-06-20 03:14:05', '2016-06-20 03:14:05'),
(99, 27, 'Nueva minivan 2016', 2, '8cfca1f19aef6e49641213e7a65d583e.png', 1, '2016-06-20 03:14:41', '2016-06-20 03:15:09'),
(100, 27, 'Minivan 2016', 1, '2016_Mazda6_EXT360_RojoBrillante_12.png', 1, '2016-06-20 03:17:09', '2016-06-20 03:17:09'),
(101, 27, 'Minivan 2016', 2, '2016_Mazda6_EXT360_RojoBrillante_12.png', 1, '2016-06-20 03:17:40', '2016-06-20 03:17:55'),
(102, 19, 'Economico sencillo', 1, 'vehiculos-ecologicos-2011_1_596594.jpg', 1, '2016-06-20 03:22:24', '2016-06-20 03:22:24'),
(103, 19, 'Económico sencillo', 2, 'vehiculos-ecologicos-2011_1_596594.jpg', 1, '2016-06-20 03:23:06', '2016-06-20 03:23:06'),
(104, 29, 'Nueva van de lujo 2016', 1, '253_Avanza_4.jpg', 1, '2016-06-20 03:30:11', '2016-08-10 19:26:52'),
(105, 29, 'Nueva van de lujo 2016', 2, '253_Avanza_4.jpg', 1, '2016-06-20 03:30:33', '2016-08-10 19:26:38');

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
(2, 'Luis99', '$2y$10$.BEMnJsOGHmIKLl3vzkoc.pxoxUE0QXsa8lspbt7eOA9uSAILTqIG', 'luis_mh@outlook.es', 'J56MCBdabwv2gUpyXYRtHl61MdoafXzVhMXaSgbnLVs1MA7wwioOWTkRQG3a', '2016-04-07 03:42:24', '2016-09-09 19:59:52'),
(21, 'Robert99', '$2y$10$cud5dI5rSICwjsAizbTGoOLPcCU8tAt7DcW1vaJp2NOIhRqaRJKJm', 'roberto@proyectoweb.com', 'AU1sGIPKuxQSd4vpfuHmV3tu67sQH9kq455rdg6idGO5DxIzdr4lQMxiWCuT', '2016-04-27 07:27:06', '2016-07-01 15:41:22'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `tarifa_detalle`
--
ALTER TABLE `tarifa_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=671;
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
