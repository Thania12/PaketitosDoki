-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 03:25:52
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
(13, 'Shalma Nayelli', 'Morales', '1998-04-17', 'Sexo', 'shalma@correo.com', '11a9806fc76e78c1bb0ef447a530e57b9edd52a35727b654b4f0660a051713261115d9a1509cebda0ba877379646c0d806f461297083e8ed87dc058d9bab95d8', '4498765643', 'Durango'),
(14, 'Brenda Guadalupe', 'Rendon', '1996-09-15', 'Sexo', 'brenda@correo.com', 'e8b60a8ef66173364c0d397c22e83aca0200fdc80c6c08caf2fcaf3562460e5e5d594f55ba3b4544e0e262bfc582f7a5961beeb306462930700fe0d94f42376e', '7766527828', 'Guerrero'),
(15, 'Emmanuel', 'Pinedo Reyes', '1995-07-18', 'Sexo', 'emmanuel@correo.com', 'fbf8ef39595824fb36401a02c588b0a9fe0dd4207a1226c3a56fd7106428d2c1b07bdb9e73088ce7ca01dce30d7d6871326bce7b5a496a8c4a6c3ecadf65e1b0', '7565767282', 'Guerrero'),
(16, 'Thania Lizbeth', 'Delgadilo', '1996-01-12', 'Sexo', 'thania@correo.com', 'dd91b066efa023a31fcb970d4c76c62c6817a4ccbaaa712767802a426df56d10c24b023b4993f41f167459b4d72c246c03477268fce496ccaf35228ccc86674c', '4484874224', 'Aguascalientes'),
(17, 'Jaqueline', 'Delgadillo', '2001-10-03', 'Sexo', 'jaqui@correo.com', 'd1f326a99f8083f90c141bfe41a1d9a982b17aac26ff2347ab3e8964efac7757e3df9945acc15b7812f771cee0ff1d401b7b6bb8ab0456fa34b9156225a90e22', '8786553772', 'Guanajuato'),
(18, 'Citalli Sarai', 'Villalobos Delgadillo', '1995-11-18', 'Sexo', 'sara@correo.com', 'e178d3c2105f4f8d9ee4ef183b4d5e2e36502285b940934b35e5b4c188dbbedfafe26fed6a26263e4ac8f8f076f67b31bdda22eed3f0a2f597cc4f664d59dc43', '4469876278', 'CDMX'),
(19, 'Jessica', 'Romero Esparza', '1996-11-23', 'Sexo', 'jessi@correo.com', '720a3e330cfa3d03cf5d6a4936d5bf90cb5a757b79ac1a61691ca458f0b78798fcd1321afe1cf13ece57ce8226e3f10ac8fe302ec0291a5f71413f0a1e981087', '4494357862', 'Aguascalientes'),
(20, 'Andrea Elizabeth', 'Hernandez Rodriguez', '1985-08-21', 'Sexo', 'andrea@correo.com', 'a71be7c534e52e708e98a9b37cefd82afe0a10070cc509477f452cce635b1b130bc81c07bb3f45528b7fb5a4b1cbd8f0a4f1087e0a3a00f32772a146912a24d9', '555679878', 'CDMX'),
(21, 'Fernando Ivan', 'Villalobos', '1992-05-16', 'Sexo', 'fer@correo.com', '549b4ae066e0f5e021bb26acc8c7adf148e6aa7e52c691a1e1237f6069c9305b5c3d029e65374a41678b2da10afeb7a0d214f0fb52796c1f4f318e5fb5de10b4', '558765434', 'Estado De Mexico'),
(22, 'Maria Nieves', 'Trinidad', '1986-01-18', 'Sexo', 'maria@correo.com', '6955664143f39383266d35e430aa5661d6eb20625c91967ed459c72ad7a1bc2e82c133f90783db6e640ac729d696bb6ef68e9cb109c1b12499097fb6e2f33e83', '4491436927', 'Aguascalientes'),
(23, 'Miguel Angel', 'Escobedo Morales', '1996-10-19', 'Sexo', 'miguel@correo.com', '69d02a6c3c9ea7ff711e454020a16a81f7ee438cd3334e0f9be3eb0338df2dff58a231963c681e736143eeb6c1d3280d5f053d9892ff33ff09d95cf8294c556f', '4487897867', 'Coahuila de Zaragoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misviajes`
--

CREATE TABLE `misviajes` (
  `ID_Viajes` int(6) NOT NULL,
  `NombreViajero` varchar(50) NOT NULL,
  `EstadoDestino` varchar(35) NOT NULL,
  `Fecha_entrega` date NOT NULL,
  `Estado` varchar(35) NOT NULL,
  `ID_NEnvio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `misviajes`
--

INSERT INTO `misviajes` (`ID_Viajes`, `NombreViajero`, `EstadoDestino`, `Fecha_entrega`, `Estado`, `ID_NEnvio`) VALUES
(4, 'Juan Omar Delgadillo', 'Yucatan', '2020-12-31', 'entregado', 43);

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
(40, 13, 'Coahuila de Zaragoza', 'Durango', '2020-12-24', 'Es una caja con comida', 150, 'https://www.gureakmarketing.com/images/blog/0036-mailing-postal-internacional.jpg', '{\"id\":\"PAYID-L7GET3Q3N39833571690391R\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"48A72956XM503872U\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"vendedorPrueba@correo.com\",\"first_name\":\"Vendedor\",\"last_name\":\"Prueba\",\"payer_id\":\"L58GTDLC7HWPC\",\"shipping_address\":{\"recipient_name\":\"Vendedor Prueba\",\"line1\":\"Calle Juarez 1\",\"line2\":\"Col. Cuauhtemoc\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"},\"phone\":\"9398943292\",\"country_code\":\"MX\",\"business_name\":\"John Doe\'s Test Store\"}},\"transactions\":[{\"amount\":{\"total\":\"150.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"150.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"UXRJ28EKL25AC\",\"email\":\"clientePrueba@correo.com\"},\"description\":\"Pago de envio:$ 150.00\",\"custom\":\"13#40\",\"soft_descriptor\":\"PAYPAL *CLIENTEPRUE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"Vendedor Prueba\",\"line1\":\"Calle Juarez 1\",\"line2\":\"Col. Cuauhtemoc\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"}},\"related_resources\":[{\"sale\":{\"id\":\"959442408B244033G\",\"state\":\"completed\",\"amount\":{\"total\":\"150.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"150.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"11.51\",\"currency\":\"MXN\"},\"parent_payment\":\"PAYID-L7GET3Q3N39833571690391R\",\"create_time\":\"2020-12-06T03:03:53Z\",\"update_time\":\"2020-12-06T03:03:53Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/959442408B244033G\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/959442408B244033G/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L7GET3Q3N39833571690391R\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *CLIENTEPRUE\"}}]}],\"create_time\":\"2020-12-06T03:03:10Z\",\"update_time\":\"2020-12-06T03:03:53Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L7GET3Q3N39833571690391R\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2020-12-05 21:03:02', 'shalma@correo.com', 'aprobado'),
(41, 14, 'Baja California Sur ', 'Jalisco', '2020-12-30', 'Es una bolsa con ropa', 200, 'https://www.gureakmarketing.com/images/blog/0036-mailing-postal-internacional.jpg', '{\"id\":\"PAYID-L7GEVZY1M57331558664103C\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"94766041RX686782V\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"vendedorPrueba@correo.com\",\"first_name\":\"Vendedor\",\"last_name\":\"Prueba\",\"payer_id\":\"L58GTDLC7HWPC\",\"shipping_address\":{\"recipient_name\":\"Vendedor Prueba\",\"line1\":\"Calle Juarez 1\",\"line2\":\"Col. Cuauhtemoc\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"},\"phone\":\"9398943292\",\"country_code\":\"MX\",\"business_name\":\"John Doe\'s Test Store\"}},\"transactions\":[{\"amount\":{\"total\":\"150.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"150.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"UXRJ28EKL25AC\",\"email\":\"clientePrueba@correo.com\"},\"description\":\"Pago de envio:$ 150.00\",\"custom\":\"14#41\",\"soft_descriptor\":\"PAYPAL *CLIENTEPRUE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"Vendedor Prueba\",\"line1\":\"Calle Juarez 1\",\"line2\":\"Col. Cuauhtemoc\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"}},\"related_resources\":[{\"sale\":{\"id\":\"9A487231HT469494L\",\"state\":\"completed\",\"amount\":{\"total\":\"150.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"150.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"11.51\",\"currency\":\"MXN\"},\"parent_payment\":\"PAYID-L7GEVZY1M57331558664103C\",\"create_time\":\"2020-12-06T03:07:49Z\",\"update_time\":\"2020-12-06T03:07:49Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/9A487231HT469494L\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/9A487231HT469494L/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L7GEVZY1M57331558664103C\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *CLIENTEPRUE\"}}]}],\"create_time\":\"2020-12-06T03:07:19Z\",\"update_time\":\"2020-12-06T03:07:49Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L7GEVZY1M57331558664103C\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2020-12-05 21:06:57', 'brenda@correo.com', 'aprobado'),
(43, 20, 'Baja California', 'Yucatan', '2020-12-31', 'Es un mueble grande', 250, 'https://www.gureakmarketing.com/images/blog/0036-mailing-postal-internacional.jpg', '{\"id\":\"PAYID-L7GVJQA5TS19342XS478520U\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"1L345395KD798245H\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"vendedorPrueba@correo.com\",\"first_name\":\"Vendedor\",\"last_name\":\"Prueba\",\"payer_id\":\"L58GTDLC7HWPC\",\"shipping_address\":{\"recipient_name\":\"Vendedor Prueba\",\"line1\":\"Calle Juarez 1\",\"line2\":\"Col. Cuauhtemoc\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"},\"phone\":\"9398943292\",\"country_code\":\"MX\",\"business_name\":\"John Doe\'s Test Store\"}},\"transactions\":[{\"amount\":{\"total\":\"250.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"250.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"UXRJ28EKL25AC\",\"email\":\"clientePrueba@correo.com\"},\"description\":\"Pago de envio:$ 250.00\",\"custom\":\"20#43\",\"soft_descriptor\":\"PAYPAL *CLIENTEPRUE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"Vendedor Prueba\",\"line1\":\"Calle Juarez 1\",\"line2\":\"Col. Cuauhtemoc\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"}},\"related_resources\":[{\"sale\":{\"id\":\"6D492758MB7712907\",\"state\":\"completed\",\"amount\":{\"total\":\"250.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"250.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"16.09\",\"currency\":\"MXN\"},\"parent_payment\":\"PAYID-L7GVJQA5TS19342XS478520U\",\"create_time\":\"2020-12-06T22:02:44Z\",\"update_time\":\"2020-12-06T22:02:44Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/6D492758MB7712907\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/6D492758MB7712907/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L7GVJQA5TS19342XS478520U\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *CLIENTEPRUE\"}}]}],\"create_time\":\"2020-12-06T22:01:36Z\",\"update_time\":\"2020-12-06T22:02:44Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L7GVJQA5TS19342XS478520U\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2020-12-06 16:01:25', 'andrea@correo.com', 'entregado'),
(44, 23, 'CDMX', 'Chihuahua', '2020-12-24', 'Es una vajilla de porcelana.', 200, 'https://www.gureakmarketing.com/images/blog/0036-mailing-postal-internacional.jpg', '{\"id\":\"PAYID-L7GYYHY4ME09646KX9027529\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"3D109583NF413345V\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"vendedorPrueba@correo.com\",\"first_name\":\"Vendedor\",\"last_name\":\"Prueba\",\"payer_id\":\"L58GTDLC7HWPC\",\"shipping_address\":{\"recipient_name\":\"Vendedor Prueba\",\"line1\":\"Calle Juarez 1\",\"line2\":\"Col. Cuauhtemoc\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"},\"phone\":\"9398943292\",\"country_code\":\"MX\",\"business_name\":\"John Doe\'s Test Store\"}},\"transactions\":[{\"amount\":{\"total\":\"200.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"200.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"UXRJ28EKL25AC\",\"email\":\"clientePrueba@correo.com\"},\"description\":\"Pago de envio:$ 200.00\",\"custom\":\"23#44\",\"soft_descriptor\":\"PAYPAL *CLIENTEPRUE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"Vendedor Prueba\",\"line1\":\"Calle Juarez 1\",\"line2\":\"Col. Cuauhtemoc\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"}},\"related_resources\":[{\"sale\":{\"id\":\"0SR39528HX701945N\",\"state\":\"completed\",\"amount\":{\"total\":\"200.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"200.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"13.80\",\"currency\":\"MXN\"},\"parent_payment\":\"PAYID-L7GYYHY4ME09646KX9027529\",\"create_time\":\"2020-12-07T01:58:57Z\",\"update_time\":\"2020-12-07T01:58:57Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/0SR39528HX701945N\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/0SR39528HX701945N/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L7GYYHY4ME09646KX9027529\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *CLIENTEPRUE\"}}]}],\"create_time\":\"2020-12-07T01:57:51Z\",\"update_time\":\"2020-12-07T01:58:57Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L7GYYHY4ME09646KX9027529\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2020-12-06 19:57:28', 'miguel@correo.com', 'aprobado');

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
(14, 9, 'CDMX', 'Campeche', '2020-12-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opiniones`
--

CREATE TABLE `opiniones` (
  `ID_opinion` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `comentario` varchar(500) COLLATE utf8_bin NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `opiniones`
--

INSERT INTO `opiniones` (`ID_opinion`, `Nombre`, `comentario`, `calificacion`) VALUES
(1, 'Mariana Rivera', 'Muy puntual.', 4),
(2, 'Selene Diaz', 'Fue muy rapida la entrega.', 4),
(3, 'Marcos Delgadillo', 'El envio se efectuo con exito. ', 5);

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
(9, 'Juan Omar', 'Delgadillo Cordova', 'Aguascalientes', '2020-11-30', 'DECA980821XDF', 100, '1001478412', 'omar@correo.com', '6c7de86145bdc2c0db0bba00d710541f3ac781a86b9841f93503903f12c4090c0486a4c62dbf7bcc7de9240373400752fa0555892b5c97b3fc7cca97ff1f1da9', '1985-11-09'),
(10, 'Juan', 'Barrios Fernandez', 'Chiapas', '2020-12-05', 'BAFJ701213B10', 100, '1001478412', 'JuanB@correo.com', 'ca4675e41f4d012bf27b3b3362e904958644436b1964f4d27e39556890017fa5bc3df1f1772a8fa7070d15ea960570938aa442d61f7600a1403d0ac880776583', '1998-09-21'),
(11, 'Francisco', 'Ortiz Perez', 'Guanajuato', '2020-12-05', 'OIPF790205P26', 100, '1235471422', 'FranciscoO@correo.com', 'd422b6fd974ac5a2477f52ac6fda542a18c3c4524bd65fa2ab5d6223dff9bff95e588c32c2afeeaa5d53d14284cf59a775c454e6f37ef551fc81c137d4bc3ed9', '1987-07-14'),
(12, 'Manuel', 'Chavez Gonzalez', 'Estado De Mexico', '2020-12-05', 'CAGM6406181Y9', 100, '1254789556', 'ManuelC@correo.com', '05b24c31046744063445278e6807eac5204c673c45f7245a5d4bb3b64a648dc824255bef2bd97d72e672a2c50dc71b9243837abe7dc8c29748b1549c77200662', '1967-07-13'),
(13, 'Felipe', 'Camago Llamas', 'Chiapas', '2020-12-05', 'CALF750228LK7', 100, '1024589321', 'FelipeC@correo.com', 'e3abb9a419caf493894e140da8bcfd771c78d31f9feb897425360aa7b94e763346fda7f41d05c179f4080e98f4fba07f84a3596284c3e25e031a5f238068f42a', '1965-07-09'),
(14, 'Dolores', 'San Martin Davalos', 'Coahuila de Zaragoza', '2020-12-05', 'SADD7808121G8', 100, '1204159632', 'DoloresS@correo.com', '87d38196e381885ba5c2fa579228056563c925b4fcdb841306fab04bed0b642e6dc10eb459d64bb868fbb28ff590c0528ae718de305bdc000b52bc432748fc81', '1997-09-12'),
(15, 'Manuel', 'Vazquez Albarran', 'Tamaulipas', '2020-12-06', 'VEAM830224', 100, '1842154152', 'ManuelV@correo.com', '6a81d77418209ca55a2d97040d6a6c57f611a7007937b7bb3d3e6cb2a0bb562121e832f63b6b5e464a0fef2d628c711fb99e0d97078a6299f3ce8f16d2dce5a9', '2020-12-24'),
(16, 'Claudia', 'Martinez Juarez', 'San Luis Potosi', '2020-12-06', 'MAJC870716F5R', 100, '1598471521', 'ClaudiaM@correo.com', 'f5c95d0881680b690ca5e466571272567eef1f4e53f68b36126353d6453b8fc5c5b7c5b75dcc443f863601348aa2226c75e0b54175c08db6787474dbc9949ac8', '1997-12-16'),
(17, 'Demetrio', 'Fuentes Gomiz', 'Estado De Mexico', '2020-12-06', 'RAVL880818FDC', 100, '1245142154', 'LeticiaR@correo.com', '64ccd4ee8cf4360704b65c634f9f3b1a91abbabf32b97b8a876d8318bf90baec0e5aa295c50b70e88d65592ea0087de52521846270d1e0e1b0f00f9408a744b2', '1996-07-08'),
(18, 'Gerardo', 'Zafra', 'Morelos', '2020-12-06', 'ZAGE851115924', 100, '1427012415', 'GerardoZ@correo.com', '159daaba26bac62d644c34a10df15832a0b7b98f24be30d6901af7a17f2a54ac2cdad4def1205e2c0d8b4d6bea2ba2c30e2ef24d67e4192f1205246f39a848c1', '1987-08-07');

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
  ADD PRIMARY KEY (`ID_Viajes`),
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
-- Indices de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`ID_opinion`);

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
  MODIFY `ID_Cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `misviajes`
--
ALTER TABLE `misviajes`
  MODIFY `ID_Viajes` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nuevoenvio`
--
ALTER TABLE `nuevoenvio`
  MODIFY `ID_NEnvio` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `nuevoviaje`
--
ALTER TABLE `nuevoviaje`
  MODIFY `ID_NViaje` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `ID_opinion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `viajero`
--
ALTER TABLE `viajero`
  MODIFY `ID_Viajero` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
