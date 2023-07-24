-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-07-2023 a las 13:59:33
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
(37, 'TELEFONIA', '2023-05-30 23:25:42'),
(38, 'JUGUETERIA', '2023-05-30 23:25:51'),
(40, 'FERRETERIA', '2023-05-30 23:26:07'),
(41, 'MASCOTAS', '2023-05-30 23:27:07'),
(42, 'ALIMENTOS', '2023-07-01 22:40:49');

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
-- Estructura de tabla para la tabla `codbarra`
--

CREATE TABLE `codbarra` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `codbarra`
--

INSERT INTO `codbarra` (`id`, `id_producto`, `codigo`) VALUES
(1, 3, '023'),
(2, 4, '0101'),
(3, 8, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
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
  `compra` float NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codigo`, `producto`, `existencia`, `minimo`, `venta`, `compra`, `unidad`, `id_categoria`, `fecha`) VALUES
(3, '024', 'Televisor Samsung', 20, 10, 2000, 1500, 'PZA', 38, '2023-07-23 21:45:44'),
(8, '123', 'maiz', 54, 5, 5600, 4500, 'KG', 41, '2023-07-23 19:58:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordendeentregas`
--

CREATE TABLE `ordendeentregas` (
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
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `pagid` int(11) NOT NULL,
  `pagmetpago` varchar(255) NOT NULL,
  `pagvaltotal` varchar(255) NOT NULL
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
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
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
  `rfc` varchar(250) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `name`, `r_social`, `direccion`, `telefono`, `rfc`, `correo`, `fecha`) VALUES
(1, 'SABRITAS', 'PEPSICO S.A DE C.V', 'GUADALAJARA J', '2147483647', 'POMP010314IE7', 'lex@hotmail.com', '2023-05-30 23:44:13'),
(2, 'REFRESCOS', 'COCA S.A DE C.V', 'CDMX', '9911165670', 'POML0412272U7', 'campos12@gmail.com', '2023-07-01 22:35:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
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
(2, 'Ejemplo', 'example@gmail.com ', '8141137188', '$2y$05$2PLDl19.fsHtUZtEmmAT9u.dehxDPgi/FmcAtTeykiETGdSbpf5Km', '2023-05-30 17:02:15', 2),
(5, 'Administrador', 'admin@softcodepm.com ', '45354356', '$2y$05$rSGStdVtYXAeIMxNwVR1suYBn4LT7zwImjLKvEMTT7Rxx1kKlCA8W', '2023-07-02 00:46:41', 1),
(6, 'juan', 'juan23@gmail.com ', '3225136051', '$2y$05$.G.vhJb.jt13j5ku/b55NOluzH5xycda6vSZ4WSENGyb6psmY20jK', '2023-07-23 20:08:39', 2);

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
-- Indices de la tabla `codbarra`
--
ALTER TABLE `codbarra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`facid`),
  ADD KEY `facidper` (`facidper`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordendeentregas`
--
ALTER TABLE `ordendeentregas`
  ADD PRIMARY KEY (`ordid`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`pagid`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`tarifaiva1`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rolidper`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `codbarra`
--
ALTER TABLE `codbarra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `facid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `pagid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`facidper`) REFERENCES `roles` (`rolidper`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
