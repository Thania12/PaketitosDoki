-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 06:49:42
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
-- Base de datos: `dokibase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(6) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Contraseña` text NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`Id_admin`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Telefono`) VALUES
(1, 'Luis', 'Guevara', 'Luis123@correo.com', 'Luis123', '1234567890'),
(2, 'Fernando', 'Gonzalez', 'Fernando123@correo.com', 'Fernando123', '2345678901'),
(3, 'Ana', 'González', 'AnaG123@correo.com', 'AnaG123', '7845123569'),
(4, 'Gabriela ', 'Guevara', 'GabrielaGG@correo.com', 'GabrielaGG123', '1245632104'),
(5, 'Eva', 'Hernández', 'EHernandez123@correo.com', 'EHernandez123', '1594872630'),
(6, 'Eduardo', 'López', 'EduardoL159@correo.com', 'Eduardo159', '3574215984'),
(7, 'Adail', 'Carranco', 'AdailC@correo.com', 'AdailC123', '1236987450'),
(8, 'Laura', 'Zermeño', 'LauraZ@correo.com', 'LauraZ123', '0258741369'),
(9, 'Denisse', 'Capetillo', 'DenisseC@correo.com', 'DenisseC123', '1763248590'),
(10, 'Israel', 'Castillo', 'IsraelC159@correo.com', 'IsraelC159', '3214567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_Cliente` int(6) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Edad` date NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contrasena` varchar(20) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Estado_Origen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_Cliente`, `Nombre`, `Apellido`, `Edad`, `Sexo`, `Correo`, `Contrasena`, `Telefono`, `Estado_Origen`) VALUES
(1, 'Jorge', 'Regalado', '1998-01-14', 'M', 'JorgeRegalado@correo.com', 'JorgeRegalado159', '123456780', 'Aguascalientes'),
(2, 'Alejandro', 'Sandoval', '1996-04-25', 'M', 'Alejandrosandoval@correo.com', 'AlejandroSandoval159', '1473692580', 'Baja California'),
(3, 'Gustavo', 'López', '1995-10-03', 'M', 'GustavoL@correo.com', 'GustavoL123', '1874698523', 'Baja California Sur'),
(4, 'Adolfo', 'Carrillo', '1996-04-08', 'M', 'AdolfoC@correo.com', 'AdolfoC123', '154874951', 'Campeche'),
(5, 'Andrea', 'Bernal', '1998-08-15', 'F', 'Andrea@correo.com', 'Andrea123', '169846651', 'Chiapas'),
(6, 'Karla', 'Veloz', '1998-09-23', 'F', 'KarlaV@correo.com', 'KarlaV123', '1236547899', 'Chihuahua'),
(7, 'Andrea', 'Ruiz', '1996-02-27', 'F', 'AndreaRuiz@correo.com', 'AndreaRuiz123', '123645987', 'Coahuila'),
(8, 'Diana', 'Perez', '1998-01-20', 'F', 'DianaP@correo.com', 'DianaP123', '15487261', 'Colima'),
(9, 'Noemí', 'Reyna', '1975-09-25', 'F', 'NoemíR@correo.com', 'NoemíR123', '1596235741', 'Durango'),
(10, 'Carlos', 'Alvarez', '1995-01-12', 'M', 'CarlosA@correo.com', 'CarlosA123', '198745302', 'Estado de México'),
(11, 'Alejandro', 'Rojo', '1996-06-30', 'M', 'AlejandroM@correo.com', 'AlejandroM123', '15482561', 'Guanajuato'),
(12, 'José', 'Torres', '1997-12-26', 'M', 'JTorres@correo.com', 'JTorres123', '1247536891', 'Guerrero'),
(13, 'Eduardo', 'González', '1960-03-15', 'M', 'GonzálezE@correo.com', 'GonzalezE132', '1519642863', 'Hidalgo'),
(14, 'Alicia', 'Hernandez', '1966-09-15', 'F', 'AliciaH@correo.com', 'AliciaH123', '1432587961', 'Jalisco'),
(15, 'Alexander', 'Anguiano', '1995-11-21', 'M', 'AlexanderA@correo.com', 'AlexanderA123', '1248963015', 'Michoacan'),
(16, 'Filiberto', 'Parra', '1982-07-26', 'M', 'FilibertoP@correo.com', 'FilibertoP123', '1427582645', 'Morelos'),
(17, 'Miguel', 'Andres', '1998-09-09', 'M', 'MiguelA@correo.com', 'MiguelA123', '1429874125', 'Nayarit'),
(18, 'Alejandro', 'Bojorquez', '1998-09-09', 'M', 'AlejandroB@correo.com', 'AlejandroB123', '1524452145', 'Nuevo León'),
(19, 'Oliver', 'Josue', '1959-06-12', 'M', 'OliverJ@correo.com', 'Oliver123', '1235648794', 'Oaxaca'),
(20, 'Bladimir', 'García', '1973-05-16', 'M', 'BladimirM@correo.com', 'BladimirM123', '2134715632', 'Puebla'),
(21, 'Angel', 'Donato', '2002-10-03', 'M', 'AngelD@correo.com', 'AngelD123', '1524715624', 'Querétaro'),
(22, 'Antonio', 'Espinosa', '1987-11-19', 'M', 'AntonioE@correo.com', 'AntonioE123', '197245862', 'Quintana Roo'),
(23, 'Jesús', 'Carrasco', '1987-10-26', 'M', 'JesusM@correo.com', 'JesusM123', '162457891', 'San Luis Potosí'),
(24, 'Erik', 'Tejada', '1999-04-21', 'M', 'ErikT@correo.com', 'ErikT123', '1987412456', 'Sinaloa'),
(25, 'Gabriel', 'Costilla', '1954-02-15', 'M', 'GabrielC@correo.com', 'GabrielC123', '2147114584', 'Sonora'),
(26, 'Jaime', 'Cruz', '1956-01-14', 'M', 'JaimeC@correo.com', 'JaimeC123', '1245741598', 'Tabasco'),
(27, 'Aide', 'Montiel', '1965-02-15', 'F', 'AideM@correo.com', 'AideM123', '1941417451', 'Tamaulipas'),
(28, 'Ulises', 'Galvan', '1993-05-07', 'M', 'UlisesG@correo.com', 'UlisesG123', '1598523574', 'Tlaxcala'),
(29, 'Isaí', 'Reyes', '1998-12-27', 'M', 'ReyesI@correo.com', 'ReyesI123', '123654124', 'Veracruz'),
(30, 'Jorge', 'Ruiz', '1975-08-25', 'M', 'JorgeR@correo.com', 'JorgeR123', '1201015472', 'Yucatán'),
(31, 'Juan Omar', 'Delgadillo', '0000-00-00', 'S', 'juan@correo.com', 'juan123', '2147483647', 'Estado De Mexico'),
(32, 'Juan', 'Rivera', '0000-00-00', 'S', 'juan1@correo.com', 'juan123', '0', 'Chihuahua'),
(33, 'Juan', 'Reyes', '0000-00-00', 'S', 'juan@correo.com', 'juan123', '355677', 'Coahuila de Zaragoza'),
(37, 'Rey', 'Lopez', '0000-00-00', 'S', 'rey@correo.com', 'rey123', '44928372', 'Baja California');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_viajes`
--

CREATE TABLE `mis_viajes` (
  `ID_MViajes` int(6) NOT NULL,
  `ID_NViaje` int(6) NOT NULL,
  `ID_NEnvio` int(6) NOT NULL,
  `Fecha_Envio` date NOT NULL,
  `modo` varchar(25) NOT NULL,
  `ID_Admin` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevo_envio`
--

CREATE TABLE `nuevo_envio` (
  `ID_NEnvio` int(6) NOT NULL,
  `Estado_Origen` text NOT NULL,
  `Estado_Destino` text NOT NULL,
  `Fecha_Envio` date NOT NULL,
  `Comentario` varchar(50) NOT NULL,
  `ID_Cliente` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuevo_envio`
--

INSERT INTO `nuevo_envio` (`ID_NEnvio`, `Estado_Origen`, `Estado_Destino`, `Fecha_Envio`, `Comentario`, `ID_Cliente`) VALUES
(1, 'Guanajuato', 'Aguascalientes', '2020-11-28', 'Fragil', 3),
(2, 'Zacatecas', 'Jalisco', '0000-00-00', 'Es una caja con zapatos', 2),
(3, 'Campeche', 'Sonora', '2020-11-10', 'Caja fragil', 11),
(4, 'Sonora', 'Nuevo Leon', '2020-11-17', 'Es una cama', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevo_viaje`
--

CREATE TABLE `nuevo_viaje` (
  `ID_NViaje` int(6) NOT NULL,
  `Estado_Origen` text NOT NULL,
  `Estado_Destino` text NOT NULL,
  `Fecha_Viaje` date NOT NULL,
  `ID_Viajero` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuevo_viaje`
--

INSERT INTO `nuevo_viaje` (`ID_NViaje`, `Estado_Origen`, `Estado_Destino`, `Fecha_Viaje`, `ID_Viajero`) VALUES
(1, 'Guanajuato', 'Campeche', '2020-11-17', 1),
(3, 'Zacatecas', 'Jalisco', '2020-11-17', 3),
(4, 'Sonora', 'Jalisco', '2020-11-17', 3),
(5, 'Michoacan', 'Veracruz', '2020-11-18', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajero`
--

CREATE TABLE `viajero` (
  `ID_Viajero` int(6) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `Fecha_registo` date NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `Calificacion` float NOT NULL DEFAULT 100,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contra` varchar(30) NOT NULL,
  `Edad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viajero`
--

INSERT INTO `viajero` (`ID_Viajero`, `Nombre`, `Apellido`, `Domicilio`, `Fecha_registo`, `RFC`, `Calificacion`, `Telefono`, `Correo`, `Contra`, `Edad`) VALUES
(1, 'Thania', 'Delgadillo', 'Zacatecas', '2020-09-11', 'DECA980821XDF', 100, '1001478412', 'thania@correo.com', 'thania123', '1998-08-21'),
(2, 'Juan', 'Barrios Fernandez', 'Chiapas', '2020-08-30', 'BAFJ701213B10', 100, '1024517412', 'JuanB@correo.com', 'JuanB123', '1970-12-13'),
(3, 'Francisco', 'Ortíz Pérez', 'Guanajuato', '2020-09-15', 'OIPF790205P26', 100, '1235471422', 'FranciscoO@correo.com', 'FranciscoO123', '1979-02-05'),
(4, 'Manuel', 'Martínez Hernández', 'Aguascalientes', '2020-08-25', 'MAHM671002NJA', 100, '362147589', 'ManuelM@correo.com', 'ManuelM123', '1967-01-02'),
(5, 'Manuel', 'Chávez González', 'Chiapas', '2020-10-10', 'CAGM6406181Y9', 100, '1254789556', 'ManuelC@correo.com', 'ManuelC123', '1964-06-18'),
(6, 'Felipe', 'Camago Llamas', 'Chihuahua', '2020-09-30', 'CALF750228LK7', 100, '1024589321', 'FelipeC@correo.com', 'FelipeC123', '1975-02-28'),
(7, 'Dolores', 'San Martín Dávalos', 'Sonora', '2020-09-23', 'SADD7808121G8', 100, '1204159632', 'DoloresS@correo.com', 'DoloresS123', '1978-08-12'),
(8, 'Mario', 'Sánchez Gómez', 'Sinaloa', '2020-11-07', 'SAGM690224FL0', 100, '1265321450', 'MarioS@correo.com', 'MarioS123', '1969-02-24'),
(9, 'Antonio', 'Jiménez Ponce', 'Veracruz', '2020-08-26', 'JIPA770808M40', 100, '2111140245', 'AntonioJ@correo.com', 'AntonioJ123', '1977-08-08'),
(10, 'Luz María', 'Fernández Juárez', 'Durango', '2020-09-15', 'FEJL800205K86', 100, '1245987412', 'LuzMF@correo.com', 'LuzMF123', '1980-02-05'),
(11, 'José Antonio', 'Camacho Hernández', 'Baja California', '2020-09-01', 'CAHA811218UL2', 100, '1598523651', 'JoséAC@correo.com', 'JoséAC123', '1987-12-18'),
(12, 'María Luisa', 'Ramirez Sánchez', 'Tlaxcala', '2020-08-02', 'RASL751115LM5', 100, '142579514', 'MaríaLR@correo.com', 'MariaLR123', '1975-11-12'),
(13, 'Mario', 'Sánchez De Los Cobos', 'Quintana Roo', '2020-09-11', 'SACM701110MT0', 100, '1532459874', 'MarioSD@correo.com', 'MarioSD123', '1970-11-10'),
(14, 'Juan', 'Del Valle Martínez', 'Oaxaca', '2020-11-01', 'VAMJ7910019G4', 100, '1594715214', 'JuanD@correo.com', 'JuanD123', '1979-10-01'),
(15, 'Roberto', 'O\'farrill Carballo', 'Guerrero', '2020-11-02', 'OACR861121B40', 100, '1426514780', 'RobertoOF@correo.com', 'RobertoOF123', '1986-11-21'),
(16, 'Rubén', 'D\'angelo Fargo', 'Campeche', '2020-11-13', 'DAFR710108128', 100, '1354715984', 'RubenDA@correo.com', 'RubenDA123', '1971-01-08'),
(17, 'Juan', 'Marquez', 'Hidalgo', '2020-09-20', 'MAJU620116BP7', 100, '1472354159', 'JuanM@correo.com', 'JuanM123', '1962-01-16'),
(18, 'Gerardo', 'Zafra', 'Morelos', '2020-10-01', 'ZAGE851115924', 100, '1427012415', 'GerardoZ@correo.com', 'GerardoZ123', '1985-11-15'),
(19, 'Juan José', 'Hernández Mendez', 'Nayarit', '2020-11-12', 'HEMJ8108112JA', 100, '1458741542', 'JuanJH@correo.com', 'JuanJH123', '1981-08-11'),
(20, 'María José', 'Álvarez Suárez', 'Nayarit', '2020-11-05', 'ALSM981001FCG', 100, '1245741591', 'MariaJA@correo.com', 'MariaJA123', '1998-10-07'),
(21, 'José Miguel', 'Cruz López', 'Aguascalientes', '2020-11-06', 'CULM981010FCD', 100, '1524784152', 'JoeCL@correo.com', 'JoeCL123', '1998-10-10'),
(22, 'Leticia', 'Ramirez Valencia', 'Estado de México', '2020-08-28', 'RAVL880818FDC', 100, '1245142154', 'LeticiaR@correo.com', 'LeticiaR123', '1988-08-18'),
(23, 'Demetrio', 'Fuentes Gomiz', 'Veracruz', '2020-10-12', 'FUGD830701TF8', 100, '246124517', 'DemetrioFG@correo.com', 'DemetrioFG123', '1983-07-01'),
(24, 'Georgina ', 'Gaviria Jimenez', 'Querétaro', '2020-09-04', 'GAJG890511RD3', 100, '1236215415', 'GeorginaG@correo.com', 'GeorginaG123', '1989-05-11'),
(25, 'Consepción', 'Peréz Fuentes', 'Estado de México', '2020-08-24', 'PEFC871010', 100, '1425141525', 'ConsepcionPF@correo.com', 'Consepcion123', '1987-10-10'),
(26, 'Berenice', 'Juarez Martinez', 'Guanajuato', '2020-08-29', 'JUMB800112GVF', 100, '1324151421', 'BereniceJ@correo.com', 'BereniceJ123', '1980-01-12'),
(27, 'Bertha', 'Gómez Quijano', 'Veracruz', '2020-09-14', 'GOQB890902G5H', 100, '195412412', 'BerthaG@correo.com', 'Bertha123', '1989-09-02'),
(28, 'Claudia', 'Martínez Juárez', 'San Luis Potosí', '2020-10-18', 'MAJC870716F5R', 100, '1598471521', 'ClaudiaM@correo.com', 'ClaudiaM123', '1987-07-16'),
(29, 'Norma', 'García Pedroza', 'Tabasco', '2020-11-10', 'GAPN940305FDC', 100, '1428412451', 'NormaG@correo.com', 'NormaG123', '1984-03-05'),
(30, 'Manuel', 'Vazquez Albarran', 'Tamaulipas', '2020-10-14', 'VEAM830224', 100, '1842154152', 'ManuelV@correo.com', 'ManuelV123', '1983-02-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indices de la tabla `mis_viajes`
--
ALTER TABLE `mis_viajes`
  ADD PRIMARY KEY (`ID_MViajes`),
  ADD KEY `ID_NViaje` (`ID_NViaje`),
  ADD KEY `ID_NEnvio` (`ID_NEnvio`),
  ADD KEY `ID_Admin` (`ID_Admin`);

--
-- Indices de la tabla `nuevo_envio`
--
ALTER TABLE `nuevo_envio`
  ADD PRIMARY KEY (`ID_NEnvio`),
  ADD KEY `ID_Cliente` (`ID_Cliente`);

--
-- Indices de la tabla `nuevo_viaje`
--
ALTER TABLE `nuevo_viaje`
  ADD PRIMARY KEY (`ID_NViaje`),
  ADD KEY `ID_Viajero` (`ID_Viajero`);

--
-- Indices de la tabla `viajero`
--
ALTER TABLE `viajero`
  ADD PRIMARY KEY (`ID_Viajero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_Cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `mis_viajes`
--
ALTER TABLE `mis_viajes`
  MODIFY `ID_MViajes` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nuevo_envio`
--
ALTER TABLE `nuevo_envio`
  MODIFY `ID_NEnvio` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nuevo_viaje`
--
ALTER TABLE `nuevo_viaje`
  MODIFY `ID_NViaje` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `viajero`
--
ALTER TABLE `viajero`
  MODIFY `ID_Viajero` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mis_viajes`
--
ALTER TABLE `mis_viajes`
  ADD CONSTRAINT `mis_viajes_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `admin` (`Id_admin`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mis_viajes_ibfk_2` FOREIGN KEY (`ID_NViaje`) REFERENCES `nuevo_viaje` (`ID_NViaje`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mis_viajes_ibfk_3` FOREIGN KEY (`ID_NEnvio`) REFERENCES `nuevo_envio` (`ID_NEnvio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `nuevo_envio`
--
ALTER TABLE `nuevo_envio`
  ADD CONSTRAINT `nuevo_envio_ibfk_1` FOREIGN KEY (`ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `nuevo_viaje`
--
ALTER TABLE `nuevo_viaje`
  ADD CONSTRAINT `nuevo_viaje_ibfk_1` FOREIGN KEY (`ID_Viajero`) REFERENCES `viajero` (`ID_Viajero`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
