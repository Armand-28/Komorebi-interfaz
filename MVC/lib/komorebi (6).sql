-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2023 a las 18:18:08
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
(1, 'Refrigerados', '2023-08-28 12:25:33'),
(2, 'Snacks y Pasabocas', '2023-08-28 12:25:57'),
(3, 'Cuidado Personal', '2023-08-28 12:26:17'),
(4, 'Aseo del hogar', '2023-08-28 12:26:28'),
(5, 'Granos', '2023-08-28 12:26:41'),
(6, 'Bebidas', '2023-08-28 12:27:01');

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
(6, 'juan', 'juan123@gmail.com', '3208836534', 'Masculino', '2000-03-28', 'juan23', '12345');

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
(1, '01', 'arroz.jpg', 'Arroz Florhuila', 24, '1 Und x 500 gr', 3400, 2800, 'Gr', 5, '2023-08-28 18:01:13'),
(2, '02', 'descarga (2).jpg', 'Coca cola', 24, '1 Und x1000 ml', 3200, 2400, 'Ml', 6, '2023-08-28 18:15:03'),
(3, '09', 'fabuloso.jpg', 'fabuloso', 6, '1 Und x1000 ml', 4556, 4566, 'Ml', 4, '2023-08-28 18:15:00'),
(4, '03', 'milo.jpg', 'galletas milo', 24, '1 Und x 450 gr', 2000, 1000, 'Gr', 2, '2023-08-28 18:14:41'),
(5, '05', 'javondove.jpg', 'Jabon Dove', 20, '1 Und x 250 gr', 3100, 2500, 'Gr', 3, '2023-08-28 18:14:46'),
(6, '06', 'detodito rojo.jpg', 'Detodito', 12, '1 Und x 80 gr', 2500, 1500, 'Gr', 2, '2023-08-28 18:14:51'),
(7, '08', 'carne.jpg', 'Carne res', 50, '1 Und x 500 gr', 12000, 10000, 'Gr', 1, '2023-08-28 18:14:56'),
(8, '10', 'club colombia.jpg', 'Cervesa Club ', 24, '6 Und x 330 ml', 16000, 14000, 'Ml', 6, '2023-08-28 18:14:26'),
(9, '11', 'javon protex.jpg', 'Jabon Protex', 12, '3 Und x 1300 gr', 5400, 4500, 'Gr', 3, '2023-08-28 18:08:05'),
(10, '12', 'agua cristal.jpg', 'Agua Cristal', 24, '1 Und x1000 ml', 1500, 1200, 'Ml', 6, '2023-08-28 18:14:03'),
(11, '13', 'gatorade naranja.jpg', 'gatorade', 12, '1 Und x1000 ml', 3200, 2600, 'Ml', 6, '2023-08-28 13:21:51'),
(12, '14', 'bretaña.jpg', 'Bretaña', 12, '1 Und x1000 ml', 3000, 2500, 'Ml', 6, '2023-08-28 15:07:04'),
(14, '15', 'sevenup.jpg', 'Seven Up', 24, '1 Und x1000 ml', 3800, 3200, 'Ml', 6, '2023-08-28 15:53:02');

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
(10, 'juan', 'SOCIEDAD CON ACCIONES ', 'Bogota-col', '31258697', 258, 'arrozdiana23@gmail.com', '2023-07-26 14:47:06'),
(12, 'cocacola', 'pepsico', 'Bogota-Col', '3534345445', 2147483647, 'pepsico@gmail.com', '2023-08-25 15:00:10');

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
(5, 'Administrador', 'admin@softcodepm.com', '45354356', '$2y$05$Lu7WwzfDYDplQCiyfePEHu.qd171Bo7CAJHbqsqlYWldMITAVffu6', '2023-07-24 16:03:20', 1),
(6, 'juan', 'juan23@gmail.com', '3225136051', '$2y$05$zwn2qLkw9NMkpSdr8lzgs.fdn1Y8RfPyLSgr4.sq3W.qh/wDuZ6Ca', '2023-07-24 14:40:12', 2),
(7, 'Jhan Franco Diaz', 'jhanfrancoo123@gmail.com', '3225136051', '$2y$05$RBpzmF4Hj3XEJ0xweTd9uOrg8kbpyHYc4ppTkg61ifnivOgox478i', '2023-08-28 13:54:32', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `facid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
