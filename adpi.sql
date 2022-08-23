-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2022 a las 17:43:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adpi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administador`
--

CREATE TABLE `administador` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Contraseña` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administador`
--

INSERT INTO `administador` (`ID`, `Nombre`, `Email`, `Contraseña`) VALUES
(1, 'David Marte', 'davidmartes123@gmail.com', 'martes2204');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID` int(11) NOT NULL,
  `Nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDproductos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID`, `Nombres`, `IDproductos`) VALUES
(1, 'Tarjetas Graficas', 1),
(2, 'Procesador', 2),
(3, 'Monitores', 3),
(4, 'Case', 4),
(5, 'Componentes', 5),
(6, 'Perifericos', 6),
(35, 'Componentes', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ProductoID` int(11) NOT NULL,
  `Nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Precio` double NOT NULL,
  `Imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CategoriaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ProductoID`, `Nombre`, `Precio`, `Imagen`, `CategoriaID`) VALUES
(1, 'Tarjeta De Video Nvidia Asus GT 730 GeForce 2GB GDDR5 GT730-', 9000, 'https://m.media-amazon.com/images/I/81EuVuU169L._AC_SL1500_.jpg', 1),
(2, 'Case Gamer GameMax Starlight', 12320, 'https://http2.mlstatic.com/D_NQ_NP_2X_894775-MCO48225835838_112021-F.webp', 4),
(6, 'Tarjeta De Video Nvidia PNY GTX 1650 4GB GeForce G', 35886, 'https://m.media-amazon.com/images/I/81waZwguzXL._AC_SL1500_.jpg', 1),
(7, 'Tarjeta Gráfica Nvidia GeForce RTX 3080 Ti 12GB Fo', 22654, 'https://m.media-amazon.com/images/I/81uam+7+BMS._AC_SL1500_.jpg', 1),
(8, 'Tarjeta Gráfica Gigabyte Nvidia RTX 3060 Ti 8GB', 16965, 'https://m.media-amazon.com/images/I/713wOinySDS._AC_SL1500_.jpg', 1),
(9, 'Tarjeta Gráfica MSI Nvidia GeForce RTX 3060 Ti 8GB', 39643, 'https://m.media-amazon.com/images/I/811tNjIvM6L._AC_SL1500_.jpg', 1),
(10, 'Monitor LG Gamer Full HD  IPS UltraGear ', 16065, 'https://www.lg.com/es/images/monitores/md07555872/gallery/32GQ850-01.jpg', 3),
(11, 'Cascos VSG Singularity 7.1  Gaming RGB', 5246, 'https://tiendastec.com.pe/wp-content/uploads/2021/01/Audifono-VSG-Kuiper.jpg', 6),
(12, 'Procesador Intel Celeron Dual Core G5905', 6871, 'https://m.media-amazon.com/images/I/519bgemhmRL._AC_.jpg', 2),
(13, 'Procesador Intel Pentium Gold Dual Core ', 8491, 'https://m.media-amazon.com/images/I/611kdY8GlvL._AC_SL1200_.jpg', 2),
(14, 'Procesador AMD Ryzen 5 4500 Six Core 3.6', 11547, 'https://images.pcel.com/1600/Hardware-Procesadores-Intel-BX80684I39100F-311636-tPuz6IiWozAGszwo.jpg', 2),
(15, 'Procesador Intel Core i3 9100 3.6GHz Qua', 11743, 'https://m.media-amazon.com/images/I/61aMmen0cFL._AC_SL1099_.jpg', 2),
(16, 'Procesador Intel Core i9  11900k 3.5GHz Octa Core', 24050, 'https://www.asus.com/media/global/gallery/21uhnwhy1qadp8rf_setting_xxx_0_90_end_1000.png', 2),
(17, 'Procesador Intel® Core™ i7‑9700E', 35551, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-117-559-02.jpg', 2),
(19, 'Rysen 5 3200g', 30000, 'https://m.media-amazon.com/images/I/71Wxed3-zrL._AC_SX679_.jpg', 2),
(50, 'Monitor Aoc 16 Lcd/led, 720p', 4000, '', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `PaypalDatos` text COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES
(3, '1234567890', '', '2022-08-19 18:42:39', 'sladeswain@gmail.com', '700.00', 'pendiente'),
(4, '1234567890', '', '2022-08-19 18:42:39', 'sladeswain@gmail.com', '700.00', 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administador`
--
ALTER TABLE `administador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `aea` (`IDproductos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ProductoID`),
  ADD KEY `CategoriaID` (`CategoriaID`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administador`
--
ALTER TABLE `administador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ProductoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `aea` FOREIGN KEY (`CategoriaID`) REFERENCES `categorias` (`IDproductos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
