-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220626.78b2c1f4eb
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2022 a las 00:40:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zetaventas1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(10) NOT NULL,
  `nom_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nom_admin`, `email_admin`, `contrasena`, `activo`) VALUES
(1020406080, 'Pedro Arboleda', 'pedroarbol@gmail.com', '10bax20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienteproducto`
--

CREATE TABLE `clienteproducto` (
  `id_venta` int(11) NOT NULL,
  `id_producto1` int(10) NOT NULL,
  `id_cliente1` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `valor_venta` double NOT NULL,
  `total_venta` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clienteproducto`
--

INSERT INTO `clienteproducto` (`id_venta`, `id_producto1`, `id_cliente1`, `cantidad`, `valor_venta`, `total_venta`) VALUES
(3, 2, 1, 3, 5399000, 16197000),
(4, 2, 2, 1, 5399000, 5399000),
(5, 5, 1, 1, 1499900, 1499900),
(6, 4, 2, 10, 44500, 445000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) NOT NULL,
  `nom_cliente` varchar(100) NOT NULL,
  `telefono` bigint(13) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nom_cliente`, `telefono`, `email_cliente`, `direccion`, `activo`) VALUES
(1, 'Elena Velazquez', 6045204080, 'elenita@gmail.com', 'calle 40 # 50-20', 1),
(2, 'Andres Estrada Velez', 3003448020, 'andrevelez@gmail.com', 'carrera 9A #51', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL,
  `nom_pro` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `valor_compra` double NOT NULL,
  `valor_venta` double NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_administrador1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nom_pro`, `referencia`, `stock`, `valor_compra`, `valor_venta`, `activo`, `foto`, `id_administrador1`) VALUES
(1, 'AirPods Max', 'ABD1140', 10, 1700000, 2499000, 1, 'img1/img20.jpg', 1020406080),
(2, 'Hp Pavilion Gaming', 'FXT-12901', 23, 4000000, 5399000, 1, 'img1/img21.jpg', 1020406080),
(3, 'Razer Deathadder Elite', 'DFX0001', 9, 95000, 194000, 1, 'img1/img22.jpeg', 1020406080),
(4, 'Logitech K120', 'GYHYG6554', 20, 20000, 44500, 1, 'img1/img25.jpg', 1020406080),
(5, 'Bosse Home 500', 'JHJSU98123', 17, 850000, 1499900, 1, 'img1/img24.jpg', 1020406080);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(10) NOT NULL,
  `nom_cliente` varchar(100) NOT NULL,
  `cantidad_prod` int(10) NOT NULL,
  `valor_total_productos` double NOT NULL,
  `id_cliente2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `nom_cliente`, `cantidad_prod`, `valor_total_productos`, `id_cliente2`) VALUES
(4, 'Elena Velazquez', 4, 17696900, 1),
(5, 'Andres Estrada Velez', 11, 5844000, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `clienteproducto`
--
ALTER TABLE `clienteproducto`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente1` (`id_cliente1`),
  ADD KEY `id_producto1` (`id_producto1`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_administrador1` (`id_administrador1`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`),
  ADD KEY `id_cliente2` (`id_cliente2`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clienteproducto`
--
ALTER TABLE `clienteproducto`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clienteproducto`
--
ALTER TABLE `clienteproducto`
  ADD CONSTRAINT `clienteproducto_ibfk_1` FOREIGN KEY (`id_cliente1`) REFERENCES `clientes` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clienteproducto_ibfk_2` FOREIGN KEY (`id_producto1`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_administrador1`) REFERENCES `administrador` (`id_admin`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente2`) REFERENCES `clientes` (`id_cliente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



