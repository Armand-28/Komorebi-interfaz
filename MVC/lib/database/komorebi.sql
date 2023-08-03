-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-07-2023 a las 17:58:25
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `komorebi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'Refrigerados', '2023-07-24 13:06:33'),
(2, 'Snacks y pasabocas', '2023-07-24 13:07:03'),
(3, 'Cuidado personal', '2023-07-24 13:07:22'),
(4, 'Aseo del hogar', '2023-07-24 13:07:38'),
(5, 'Granos', '2023-07-24 13:07:55'),
(6, 'Bebidas', '2023-07-24 13:09:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `telefono`, `correo`, `direccion`, `fecha`) VALUES
(1, 'Ernesto Castillo', '9911165670', 'example@gmail.com', 'Merida YUcatan MX', '2023-05-31 00:32:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `facid` int(11) NOT NULL,
  `facidper` int(11) NOT NULL,
  `facname` varchar(255) NOT NULL,
  `facsurname` varchar(255) NOT NULL,
  `facnameprod` varchar(255) NOT NULL,
  `facnumprod` varchar(255) NOT NULL,
  `facvaltotfac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `producto` varchar(250) NOT NULL,
  `existencia` int(11) NOT NULL,
  `minimo` int(11) NOT NULL,
  `venta` float NOT NULL,
  `compra` int(11) NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codigo`, `producto`, `existencia`, `minimo`, `venta`, `compra`, `unidad`, `id_categoria`, `fecha`) VALUES
(16, '233', 'arepa', 2321312, 321312, 21132100, 0, '', 3, '2023-07-04 05:00:00'),
(18, '3123', 'cccc', 23423, 423423, 23, 25, 'gr', 4, '2023-07-06 05:00:00'),
(19, '2133', 'maiz', 24, 24, 32, 21, 'libra', 5, '2023-07-12 05:00:00'),
(20, '233', 'frijol', 312, 312, 23, 23, 'gr', 5, '2023-06-29 05:00:00'),
(21, '99999999', 'azuar', 12424, 234234, 3423, 432432, 'gr', 3, '2023-07-05 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordendeentrega`
--

CREATE TABLE `ordendeentrega` (
  `ordid` int(11) NOT NULL,
  `ordprod` varchar(255) NOT NULL,
  `ordUdM` varchar(255) NOT NULL,
  `ordcantprod` varchar(255) NOT NULL,
  `ordvalpag` float NOT NULL,
  `ordestpag` varchar(255) NOT NULL,
  `ordnamecli` varchar(255) NOT NULL,
  `ordsurnamecli` varchar(255) NOT NULL,
  `ordnumcel` varchar(255) NOT NULL,
  `ordaddrescli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `tarifaiva1` double NOT NULL,
  `tarifaiva2` double NOT NULL,
  `tarifaiva3` double NOT NULL,
  `fecexp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `pedid` int(11) NOT NULL,
  `pedimg` blob NOT NULL,
  `pednameprod` varchar(255) NOT NULL,
  `pedcant` varchar(255) NOT NULL,
  `pedvaltotal` varchar(255) NOT NULL,
  `pedcantprod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `r_social` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `nit` int(50) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `name`, `r_social`, `direccion`, `telefono`, `nit`, `correo`, `fecha`) VALUES
(1, 'Pepsi', 'PEPSICO S.A DE C.V', 'Bogota-Col', '2147483647', 0, 'pepsico@gmail.com', '2023-07-24 13:16:18'),
(3, 'Margarita', 'pepsico', 'Bogota Col', '123165135', 0, 'margarita232@gmail.com', '2023-07-24 13:15:36'),
(5, 'komorebi', 'dsa', 'dsbkfsd', '2132313', 0, 'labsflsab@gmail.com', '2023-07-26 13:28:40'),
(6, 'komorebi', 'dsa', 'dgsdgfd', '2132313', 0, 'labsflsab@gmail.com', '2023-07-26 13:29:19'),
(7, 'zuuuuu', 'dsa', 'dsbkfsd', '2132313', 2147483647, 'labsflsab@gmail.com', '2023-07-26 14:42:55'),
(8, 'sasasasasas', 'dsa', 'das', '651646', 231654, 'labsflsab@gmail.com', '2023-07-26 13:37:18'),
(9, 'bbbb', 'SOCIEDAD CON ACCIONES ', 'Bogota-col', '321321321321', 55646, 'arrozdiana23@gmail.com', '2023-07-26 14:44:07'),
(10, 'juan', 'SOCIEDAD CON ACCIONES ', 'Bogota-col', '31258697', 258, 'arrozdiana23@gmail.com', '2023-07-26 14:47:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rolidrol` int(11) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `rolidper` int(11) NOT NULL,
  `rolname` varchar(255) NOT NULL,
  `rolsurname` varchar(255) NOT NULL,
  `roladdres` varchar(255) NOT NULL,
  `rolemail` varchar(255) NOT NULL,
  `rolpass` varchar(50) NOT NULL,
  `rolnumper` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `correo`, `telefono`, `password`, `fecha`, `id_rol`) VALUES
(5, 'Administrador', 'admin@softcodepm.com', '45354356', '$2y$05$Lu7WwzfDYDplQCiyfePEHu.qd171Bo7CAJHbqsqlYWldMITAVffu6', '2023-07-24 16:03:20', 1),
(6, 'juan', 'juan23@gmail.com', '3225136051', '$2y$05$zwn2qLkw9NMkpSdr8lzgs.fdn1Y8RfPyLSgr4.sq3W.qh/wDuZ6Ca', '2023-07-24 14:40:12', 2),
(7, 'Jhan Franco Diaz', 'jhanfrancoo123@gmail.com ', '3225136051', '$2y$05$POYzRzQhY8JYw0lrsOp08uZUzHLjNTkPXssJkRlYRcDYOxQ1ZPC8u', '2023-07-24 13:25:12', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userxrol`
--

CREATE TABLE `userxrol` (
  `rol_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `total` float NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `pago` float NOT NULL,
  `cambio` float NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`facid`),
  ADD KEY `facidper` (`facidper`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordendeentrega`
--
ALTER TABLE `ordendeentrega`
  ADD PRIMARY KEY (`ordid`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`tarifaiva1`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`pedid`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rolidper`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userxrol`
--
ALTER TABLE `userxrol`
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `facid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `pedid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`facidper`) REFERENCES `rol` (`rolidper`);

--
-- Filtros para la tabla `userxrol`
--
ALTER TABLE `userxrol`
  ADD CONSTRAINT `userxrol_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rolidper`),
  ADD CONSTRAINT `userxrol_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
