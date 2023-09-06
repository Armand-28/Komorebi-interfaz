-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2023 a las 17:34:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

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
(1, 'Refrigerados', '2023-09-01 12:19:32'),
(2, 'Snacks y pasabocas', '2023-09-01 12:19:43'),
(3, 'Cuidado Personal', '2023-09-01 12:19:50'),
(4, 'Aseo del hogar', '2023-09-01 12:19:57'),
(5, 'Granos', '2023-09-01 12:20:12'),
(6, 'Despensa', '2023-09-01 12:20:18'),
(7, 'Bebidas', '2023-09-01 12:20:26'),
(8, 'Promociones', '2023-09-01 13:35:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `email` varchar(155) NOT NULL,
  `numcel` varchar(155) NOT NULL,
  `genero` varchar(155) NOT NULL,
  `fecnac` varchar(155) NOT NULL,
  `user` varchar(155) NOT NULL,
  `pass` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `email`, `numcel`, `genero`, `fecnac`, `user`, `pass`) VALUES
(1, 'Juan Pablo Herrera', 'jpherrera63@misena.edu.co', '3133215141', 'Masculino', '2023-08-17', 'jpherrera', 'alejo123'),
(2, 'jhan35', 'jhan@gmail.com', '3215458887', 'Masculino', '2023-08-17', 'jhan', '123456789'),
(3, 'tatiana pechene', 'tatiana@gmail.com', '3210325698', 'Masculino', '2023-08-08', 'tatiana5', '123456789'),
(4, 'Jhan Franco Diaz Nuñez', 'jhanfrancoo123@gmail.com', '3225136051', 'Femenino', '2003-03-23', 'Jhan35', '3208836534'),
(6, 'juan', 'juan123@gmail.com', '3208836534', 'Masculino', '2000-03-28', 'juan23', '12345'),
(7, 'Jhan Franco diaz', 'jhanfrancoo123@gmail.com', '3225136051', 'Masculino', '2004-03-23', 'frann', '3208836534');

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
  `imagen` varchar(255) NOT NULL,
  `producto` varchar(250) NOT NULL,
  `existencia` int(11) NOT NULL,
  `minimo` varchar(50) NOT NULL,
  `venta` float NOT NULL,
  `compra` int(11) NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codigo`, `imagen`, `producto`, `existencia`, `minimo`, `venta`, `compra`, `unidad`, `id_categoria`, `fecha`) VALUES
(1, '01', 'arroz.jpg', 'Arroz Florhuila ', 24, '1 Und x 500 gr', 3400, 2800, 'Gr', 8, '2023-09-01 13:37:19'),
(2, '02', 'descarga (2).jpg', 'Coca cola', 24, '1 Und x1000 ml', 3200, 2400, 'Ml', 7, '2023-09-01 12:28:40'),
(3, '09', 'fabuloso.jpg', 'fabuloso', 6, '1 Und x1000 ml', 4556, 4566, 'Ml', 4, '2023-08-28 18:15:00'),
(4, '03', 'milo.jpg', 'galletas milo', 24, '1 Und x 450 gr', 2000, 1000, 'Gr', 2, '2023-08-28 18:14:41'),
(5, '05', 'javondove.jpg', 'Jabon Dove', 20, '1 Und x 250 gr', 3100, 2500, 'Gr', 3, '2023-08-28 18:14:46'),
(6, '06', 'detodito rojo.jpg', 'Detodito', 12, '1 Und x 80 gr', 2500, 1500, 'Gr', 2, '2023-08-28 18:14:51'),
(7, '08', 'carne.jpg', 'Carne res', 50, '1 Und x 500 gr', 12000, 10000, 'Gr', 1, '2023-08-28 18:14:56'),
(8, '10', 'club colombia.jpg', 'Cervesa Club ', 24, '6 Und x 330 ml', 16000, 14000, 'Ml', 7, '2023-09-01 12:28:30'),
(9, '11', 'javon protex.jpg', 'Jabon Protex', 12, '3 Und x 1300 gr', 5400, 4500, 'Gr', 3, '2023-08-28 18:08:05'),
(10, '12', 'agua cristal.jpg', 'Agua Cristal', 24, '1 Und x1000 ml', 1500, 1200, 'Ml', 7, '2023-09-01 12:28:13'),
(11, '13', 'gatorade naranja.jpg', 'gatorade', 12, '1 Und x1000 ml', 3200, 2600, 'Ml', 7, '2023-09-01 12:28:54'),
(12, '14', 'bretaña.jpg', 'Bretaña', 12, '1 Und x1000 ml', 3000, 2500, 'Ml', 7, '2023-09-01 12:27:43'),
(14, '15', 'sevenup.jpg', 'Seven Up', 24, '1 Und x1000 ml', 3800, 3200, 'Ml', 7, '2023-09-01 12:29:05'),
(15, '16', 'arveja.png', 'Arbeja', 12, '1 Und x 500 gr', 3400, 2800, 'Gr', 5, '2023-08-28 16:47:41'),
(17, '18', '04160-SAL-REFISAL-X-500-GR.jpg', 'Sal Refisal', 24, '1 Und x 500 gr', 4200, 3500, 'Lb', 6, '2023-09-01 12:34:53'),
(18, '19', 'colombiana.jpg', 'Colombiana', 15, '1 Und x1000 ml', 4200, 3400, 'Ml', 8, '2023-09-01 13:36:21'),
(19, '20', 'huevos.jpg', 'Huevos AA', 12, 'Panal x 30 Und', 16000, 13000, 'Gr', 8, '2023-09-01 13:40:58'),
(20, '21', 'papel.jpg', 'Papel Hiegienico', 24, 'Pack X12 Und', 15990, 14900, 'Kg', 8, '2023-09-01 13:42:58'),
(21, '22', 'aceite.jpg', 'Aceite Bon LIfe', 25, '1 Und x2000 ml', 18999, 15990, 'Ml', 8, '2023-09-01 13:44:41');

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
(13, 'cocacola', 'pepsico', 'Medellin-Col', '3225136098', 2147483647, 'pepsico@gmail.com', '2023-09-01 12:09:25');

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

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rolidrol`, `rol`, `rolidper`, `rolname`, `rolsurname`, `roladdres`, `rolemail`, `rolpass`, `rolnumper`) VALUES
(0, '', 0, '', '', '', '', '', '');

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
(5, 'Administrador', 'admin@softcodepm.com', '45354356', '$2y$05$Lu7WwzfDYDplQCiyfePEHu.qd171Bo7CAJHbqsqlYWldMITAVffu6', '2023-07-24 16:03:20', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
