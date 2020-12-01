-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 07:59:57
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dokibase3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `IdAministrador` int(6) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Apellido` varchar(35) NOT NULL,
  `Correo` varchar(35) NOT NULL,
  `Contrasena` varchar(20) NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`IdAministrador`, `Nombre`, `Apellido`, `Correo`, `Contrasena`, `Telefono`) VALUES
(1, 'Fernando', 'González', 'Fernando123@correo.com', 'Feernandp123', '1598741254');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_Cliente` int(6) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Apellido` varchar(35) NOT NULL,
  `Edad` date NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contra` varchar(150) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Estado_Origen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_Cliente`, `Nombre`, `Apellido`, `Edad`, `Sexo`, `Correo`, `Contra`, `Telefono`, `Estado_Origen`) VALUES
(7, 'Francisco', 'Escobedo', '1997-10-14', 'Sexo', 'francisco@correo.com', '$2y$10$Ua4777u8DArdG', '4489765425', 'Aguascalientes'),
(8, 'Lizbeth', 'Delgadillo', '1996-01-12', 'Sexo', 'liz@correo.com', '$2y$10$ascjTCSZvvH3D', '4494874242', 'Aguascalientes'),
(9, 'prueba', 'p', '1996-01-12', 'Sexo', 'p@correo.com', '$2y$10$bzjFQ/yDgZy9r', '12345', 'Guanajuato'),
(10, 'Mariana', 'Sanchez', '1998-11-17', 'Sexo', 'mariana@correo.com', '$2y$10$0vi1fz.vIMrr1', '5577889933', 'Estado De Mexico'),
(12, 'Joana', 'Berenice', '1997-10-12', 'Sexo', 'joana@correo.com', '88ec7a88c27522410b69a7928975f17aaa22d9b226d43e8545703d1fbfaffdeef7173bca96cf3113a5afbb32a771e59db857493bddbfb5ac2297f993f33ac046', '4673848492', 'CDMX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misviajes`
--

CREATE TABLE `misviajes` (
  `IdMisViajes` int(6) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `EstadoOrigen` varchar(35) NOT NULL,
  `EstadoDestino` varchar(35) NOT NULL,
  `FechaEnvio` date NOT NULL,
  `Comentario` varchar(35) NOT NULL,
  `Modo` varchar(35) NOT NULL,
  `PrecioFinal` int(11) NOT NULL,
  `ID_NEnvio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevoenvio`
--

CREATE TABLE `nuevoenvio` (
  `ID_NEnvio` int(6) NOT NULL,
  `ID_Cliente` int(6) NOT NULL,
  `Estado_Origen` varchar(35) NOT NULL,
  `Estado_Destino` varchar(20) NOT NULL,
  `Fecha_Envio` date NOT NULL,
  `Comentario` varchar(35) NOT NULL,
  `Precio_final` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL DEFAULT 'https://www.gureakmarketing.com/images/blog/0036-mailing-postal-internacional.jpg',
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuevoenvio`
--

INSERT INTO `nuevoenvio` (`ID_NEnvio`, `ID_Cliente`, `Estado_Origen`, `Estado_Destino`, `Fecha_Envio`, `Comentario`, `Precio_final`, `imagen`, `PaypalDatos`, `Fecha`, `Correo`, `Estado`) VALUES
(5, 12, 'Campeche', 'Campeche', '2020-12-09', 'e', 150, 'https://www.gureakmarketing.com/images/blog/0036-mailing-postal-internacional.jpg', 'AASHJDHJHJD612334', '2020-12-01 00:39:58', 'correo@correo.com', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevoviaje`
--

CREATE TABLE `nuevoviaje` (
  `ID_NViaje` int(6) NOT NULL,
  `ID_Viajero` int(6) NOT NULL,
  `Estado_Origen` varchar(35) NOT NULL,
  `Estado_Destino` varchar(35) NOT NULL,
  `Fecha_Viaje` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuevoviaje`
--

INSERT INTO `nuevoviaje` (`ID_NViaje`, `ID_Viajero`, `Estado_Origen`, `Estado_Destino`, `Fecha_Viaje`) VALUES
(12, 1, 'Guanajuato', 'Chiapas', '2020-11-25'),
(14, 9, 'CDMX', 'Campeche', '2020-12-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajero`
--

CREATE TABLE `viajero` (
  `ID_Viajero` int(6) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Apellido` varchar(35) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `Fecha_registro` date NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `Calificacion` float NOT NULL DEFAULT 100,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contra` varchar(150) NOT NULL,
  `Edad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viajero`
--

INSERT INTO `viajero` (`ID_Viajero`, `Nombre`, `Apellido`, `Domicilio`, `Fecha_registro`, `RFC`, `Calificacion`, `Telefono`, `Correo`, `Contra`, `Edad`) VALUES
(1, 'Juan', 'Delgadillo', 'Aguascalientes', '2020-11-11', 'JJDEESS112', 100, '4497896578', 'juan@correo.com', 'juan123', '2020-11-19'),
(9, 'Juan Omar', 'Delgadillo Cordova', 'Aguascalientes', '2020-11-30', 'DECA980821XDF', 100, '1001478412', 'omar@correo.com', '6c7de86145bdc2c0db0bba00d710541f3ac781a86b9841f93503903f12c4090c0486a4c62dbf7bcc7de9240373400752fa0555892b5c97b3fc7cca97ff1f1da9', '1985-11-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`IdAministrador`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indices de la tabla `misviajes`
--
ALTER TABLE `misviajes`
  ADD PRIMARY KEY (`IdMisViajes`),
  ADD UNIQUE KEY `IdNuevoEnvio` (`ID_NEnvio`);

--
-- Indices de la tabla `nuevoenvio`
--
ALTER TABLE `nuevoenvio`
  ADD PRIMARY KEY (`ID_NEnvio`),
  ADD UNIQUE KEY `IdCliente` (`ID_Cliente`);

--
-- Indices de la tabla `nuevoviaje`
--
ALTER TABLE `nuevoviaje`
  ADD PRIMARY KEY (`ID_NViaje`),
  ADD UNIQUE KEY `IdViajero` (`ID_Viajero`);

--
-- Indices de la tabla `viajero`
--
ALTER TABLE `viajero`
  ADD PRIMARY KEY (`ID_Viajero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `IdAministrador` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_Cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `misviajes`
--
ALTER TABLE `misviajes`
  MODIFY `IdMisViajes` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nuevoenvio`
--
ALTER TABLE `nuevoenvio`
  MODIFY `ID_NEnvio` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `nuevoviaje`
--
ALTER TABLE `nuevoviaje`
  MODIFY `ID_NViaje` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `viajero`
--
ALTER TABLE `viajero`
  MODIFY `ID_Viajero` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `misviajes`
--
ALTER TABLE `misviajes`
  ADD CONSTRAINT `envio-viajes` FOREIGN KEY (`ID_NEnvio`) REFERENCES `nuevoenvio` (`ID_NEnvio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nuevoenvio`
--
ALTER TABLE `nuevoenvio`
  ADD CONSTRAINT `clente-envio` FOREIGN KEY (`ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nuevoviaje`
--
ALTER TABLE `nuevoviaje`
  ADD CONSTRAINT `viajero-viaje` FOREIGN KEY (`ID_Viajero`) REFERENCES `viajero` (`ID_Viajero`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
