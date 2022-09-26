-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2021 a las 03:21:46
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nunez_luis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(10) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `provincia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `eliminado` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `apellido`, `email`, `telefono`, `provincia`, `localidad`, `descripcion`, `fecha`, `eliminado`) VALUES
(40, 'Maxi', 'Luna', 'luna@hotmail.com', 23424, 'Corrientes', 'Corrientes', 'prueba de fecha', '22-06-2021 02:30:42', 'NO'),
(24, 'jorge', 'Sanchez', 'jorge@hotmail.com', 23424, 'capital', 'capital', 'prueba de fecha', '20-06-2021 02:02:11', 'NO'),
(25, 'Maxi', 'Luna', 'luna@hotmail.com', 242, 'Corrientes', 'Capital', 'de donde traen las guitarras?', '21-06-2021 15:25:01', 'NO'),
(39, 'Maxi', 'Luna', 'luna@hotmail.com', 2147483647, 'capital', 'capital', 'prueba de fecha', '21-06-2021 16:58:15', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(15) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `eliminado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `telefono`, `provincia`, `localidad`, `descripcion`, `fecha`, `eliminado`) VALUES
(1, 'Jorge', 'Gonzales', 'jorge@hotmail.com', 7676767, 'capital', 'capital', 'Quisiera saber sobre cuanto tiempo tarda el envio ', '', 'NO'),
(2, 'Jorge', 'Sachez', 'sanchez@hotmail.com', 4343553, 'Corrientes', 'Corrientes', 'que pasa con i guitarraaadadada', '', 'NO'),
(3, 'yesica', 'cardozo', 'yesica@hotmail.com', 424223432, 'Santa Fe', 'Capital', 'Buenas , hacen envio a Santa Fe?', '', 'NO'),
(4, 'yesica', 'cardozo', 'yesica@hotmail.com', 424223432, 'Santa Fe', 'Capital', 'Buenas , hacen envio a Santa Fe?', '', 'NO'),
(6, 'gise', 'silva', 'gise@hotmail.com', 567890, 'capital', 'capital', 'prueba de fecha', '', 'NO'),
(7, 'Brenda', 'Aquino', 'brenda@hotmail.com', 45678, 'Corrientes', 'Corrientes', 'prueba de fecha', '', 'NO'),
(8, 'Enrique', 'Perez', 'perez@hotmail.com', 45678, 'Corrientes', 'Corrientes', 'prueba de fecha', '', 'NO'),
(9, 'Raul', 'Gamboa', 'raul@gmial.com', 234567, 'Corrientes', 'Corrientes', 'prueba de fecha', '22-06-2021 02:20:22', 'NO'),
(10, 'Aurelio', 'Benitez', 'aurelio@hotmail.com', 56789, 'Corrientes', 'Corrientes', 'prueba de fecha', '22-06-2021 02:34:52', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_id` int(10) DEFAULT NULL,
  `precio_costo` double(255,0) NOT NULL,
  `precio_venta` double(255,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eliminado` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `categoria_id`, `precio_costo`, `precio_venta`, `stock`, `stock_min`, `imagen`, `eliminado`) VALUES
(7, 'Bajo ibanez 4 cuerdas color Rojo y buen sonido', 1, 19000, 29000, 18, 2, 'assets/img/productos/guitarra1.jpg', 'NO'),
(8, 'bajo yamaha 5 cuerdas', 1, 20000, 36000, 3, 2, 'assets/img/productos/bajo5.jpg', 'NO'),
(9, 'saxofon', 3, 4000, 16000, 0, 2, 'assets/img/productos/viento5.jpg', 'NO'),
(10, 'guitarra', 1, 20000, 125000, 0, 2, 'assets/img/productos/guitarra5.jpg', 'NO'),
(5, 'bateria yamaha', 2, 15000, 16000, 5, 2, 'assets/img/productos/bateria2.jpg', 'NO'),
(6, 'bateria pdp', 2, 10000, 39000, 4, 2, 'assets/img/productos/bateria3.jpg', 'NO'),
(11, 'bongo grande', 2, 89000, 129000, 7, 2, 'assets/img/productos/percusion2.jpg', 'NO'),
(12, 'guitarra', 1, 10000, 20000, 2, 2, 'assets/img/productos/guitarra6.jpg', 'NO'),
(13, 'tronpeta ', 3, 14000, 20000, 1, 2, 'assets/img/productos/viento11.jpg', 'NO'),
(15, 'Bajo de buen calidad y sonido', 4, 15000, 20000, 0, 5, 'assets/img/productos/bajo5.jpg', 'NO'),
(18, 'Guitarra de Bronco', 1, 40000, 60000, 20, 10, 'assets/img/productos/guitarra2.jpg', 'NO'),
(17, 'Guitarra de buena calidad importada', 1, 15000, 25000, 14, 10, 'assets/img/productos/bajo4.jpg', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `pass`, `perfil_id`, `baja`) VALUES
(30, 'Sergio', 'Gimenez', 'gimenez@gmail.com', 'SergioG', 'MTIzNDU=', 2, 'NO'),
(29, 'Roberto', 'Gomez', 'gomez@hotmail.com', 'gomez', 'MTIzNDU=', 2, 'NO'),
(28, 'Luis', 'Nuñez', 'luis_elpara@hotmail.com.ar', 'Luis', 'MTIzNDU=', 1, 'NO'),
(27, 'jorge', 'Sanchez', 'jorge@hotmail.com', 'jorge', 'MTIzNDU=', 2, 'NO'),
(26, 'Maxi', 'Luna', 'luna@hotmail.com', 'luna', 'MTIzNDU=', 2, 'NO'),
(31, 'yesica', 'Gimenez', 'yesica@hotmail.com', 'yesica', 'MTIzNDU=', 2, 'NO'),
(32, 'Au', 'Gam', 'gambo@hotmail.com', 'Au', 'MTIzNDU=', 2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `total_venta` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas_cabecera`
--

INSERT INTO `ventas_cabecera` (`id`, `fecha`, `usuario_id`, `total_venta`) VALUES
(18, '2021-06-11', 26, 72000.00),
(19, '2021-06-11', 26, 58000.00),
(20, '2021-06-14', 26, 88000.00),
(21, '2021-06-14', 27, 165000.00),
(22, '2021-06-14', 27, 48000.00),
(23, '2021-06-16', 26, 45000.00),
(24, '2021-06-17', 27, 45000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id` int(10) UNSIGNED NOT NULL,
  `venta_id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `precio` double(10,2) UNSIGNED NOT NULL,
  `total` double(10,2) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id`, `venta_id`, `producto_id`, `cantidad`, `precio`, `total`) VALUES
(14, 18, 8, 2, 36000.00, 72000.00),
(15, 19, 7, 2, 29000.00, 58000.00),
(16, 20, 6, 1, 39000.00, 39000.00),
(17, 20, 13, 1, 20000.00, 20000.00),
(18, 20, 7, 1, 29000.00, 29000.00),
(19, 21, 11, 1, 129000.00, 129000.00),
(20, 21, 12, 1, 20000.00, 20000.00),
(21, 21, 9, 1, 16000.00, 16000.00),
(22, 22, 9, 3, 16000.00, 48000.00),
(23, 23, 7, 1, 29000.00, 29000.00),
(24, 23, 5, 1, 16000.00, 16000.00),
(25, 24, 17, 1, 25000.00, 25000.00),
(26, 24, 14, 1, 20000.00, 20000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `categoria_id_2` (`categoria_id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
