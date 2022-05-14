-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2022 a las 17:56:44
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carbonicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_compra` int(4) NOT NULL,
  `id_usuario` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(2) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'bebidas'),
(2, 'bebidas alcoholicas'),
(3, 'Zumos\r\n'),
(4, 'Agua'),
(5, 'Lacteos'),
(6, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_carrito`
--

CREATE TABLE `linea_carrito` (
  `id_factura` int(2) NOT NULL,
  `id_producto` int(2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(3) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `foto`, `fecha`) VALUES
(1, 'Distribuciones Carbónicas inaugura página web', 'Distribuciones Carbónicas S.L abre hoy su primera página web.', 'carbonicas.jpg', '2022-04-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `unidades` int(3) NOT NULL,
  `precio` decimal(3,0) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `categoria_id` int(2) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `unidades`, `precio`, `descripcion`, `categoria_id`, `marca`, `foto`) VALUES
(1, 'Cocacola lata Normal', 1, '8', 'Coca-Cola normal lata pack 24', 1, 'cocacola', 'cocaNlata.jpg'),
(2, 'Monster Energy', 1, '9', 'Mosnter normal', 1, 'monster', 'monster.jpg'),
(3, 'Fanta Naranja', 1, '7', 'Fanta Naranja lata pack 24', 1, 'fanta', 'fanta.jpg'),
(4, 'Minute Maid melocotón', 1, '2', 'Minute Maid vidrio Naraja', 3, 'minute maid', 'minutemaid.jpg'),
(5, 'Etiqueta Negra', 1, '9', 'Botella de Whisky Johnnie Walker Etiqueta Negra 1L', 2, 'johnnie walker', 'wiskyN.jpg\r\n'),
(6, 'Coca Cola lata Light', 1, '8', 'Coca-Cola lata light pack 24 und.', 1, 'cocacola', 'cocaLlata.jpg'),
(7, 'Coca Cola lata Zero', 1, '8', 'Coca-Cola lata Zero pack 24 und.', 1, 'cocacola', 'cocaZlata.jpg'),
(8, 'Coca Cola lata Zero Zero', 1, '8', 'Coca-Cola lata Zero-Zero pack 24 und.', 1, 'cocacola', 'cocaZZlata.jpg\r\n'),
(9, 'Coca Cola 1L Normal', 1, '9', 'Coca-Cola litro normal pack 6 und.', 1, 'cocacola', 'cocaNlitro.jpg'),
(10, 'Coca Cola 1L Light', 1, '9', 'Coca-Cola 1L light pack 6 und.', 1, 'cocacola', 'cocaLlitro.jpg'),
(11, 'Carrizal ', 1, '8', 'Agua Carrizal II 1,5L', 4, 'carrizal', 'carrizal15L.jpg'),
(12, 'Queso asturiana', 1, '8', 'Queso Asturiana Clásico barra 3klg', 5, 'asturiana', 'queso3K.jpg\r\n'),
(13, 'Mantel Papel', 1, '8', 'Mantel de papel', 6, 'mantel', 'mantelP.jpg\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(2) NOT NULL,
  `user` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(16) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `clase` varchar(30) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `usuario_verificado` int(1) NOT NULL,
  `rol_usuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`, `nombre`, `apellido1`, `apellido2`, `email`, `clase`, `dni`, `direccion`, `usuario_verificado`, `rol_usuario`) VALUES
(1, 'africa', 'africa', 'africa', 'africa', 'africa', 'africa', 'africa', 'africa', 'africa', 1, 1),
(3, 'jose', 'test', 'Jose', 'Ortega', 'Lopez', 'jose@gmail.com', 'usuario', '999999p', 'melilla', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `linea_carrito`
--
ALTER TABLE `linea_carrito`
  ADD KEY `id_factura` (`id_factura`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_compra` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `linea_carrito`
--
ALTER TABLE `linea_carrito`
  ADD CONSTRAINT `linea_carrito_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `carrito` (`id_compra`) ON UPDATE CASCADE,
  ADD CONSTRAINT `linea_carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id_categoria`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
