-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2010 a las 23:02:44
-- Versión del servidor: 5.0.67
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `asetrans`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anticipo`
--

CREATE TABLE IF NOT EXISTS `anticipo` (
  `Id` int(11) NOT NULL auto_increment,
  `Rut_Tra` varchar(12) NOT NULL,
  `Nombre_Tra` varchar(50) NOT NULL,
  `Camion` varchar(15) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `Ano` varchar(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Monto` varchar(20) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `anticipo`
--

INSERT INTO `anticipo` (`Id`, `Rut_Tra`, `Nombre_Tra`, `Camion`, `Mes`, `Ano`, `Fecha`, `Monto`) VALUES
(1, '79433071', 'Julio Espinosa', 'UP3298', '11', '2010', '2010-11-06', '60000'),
(2, '79433071', 'Julio Espinosa', 'UP3298', '11', '2010', '2010-11-06', '90000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_camiones`
--

CREATE TABLE IF NOT EXISTS `asignacion_camiones` (
  `Id` int(11) NOT NULL auto_increment,
  `Id_Camion` int(11) NOT NULL,
  `Id_Trabajador` int(11) NOT NULL,
  `Marca_Ca` varchar(50) NOT NULL,
  `Modelo_Ca` varchar(50) NOT NULL,
  `Nombre_Ca` varchar(50) NOT NULL,
  `Patente_Ca` varchar(10) NOT NULL,
  `Rut_Tra` varchar(12) NOT NULL,
  `Nombre_Tra` varchar(70) NOT NULL,
  `Fecha_Asignacion` date NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `asignacion_camiones`
--

INSERT INTO `asignacion_camiones` (`Id`, `Id_Camion`, `Id_Trabajador`, `Marca_Ca`, `Modelo_Ca`, `Nombre_Ca`, `Patente_Ca`, `Rut_Tra`, `Nombre_Tra`, `Fecha_Asignacion`, `Estado`, `Fecha_Modificacion`) VALUES
(6, 4, 1, 'Mercedez Benz', 'Actros', 'Asetrans 061', 'UP3298', '79433071', 'Julio Espinosa', '2010-09-19', 'ACTIVO', '2010-10-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones`
--

CREATE TABLE IF NOT EXISTS `camiones` (
  `Id` int(11) NOT NULL auto_increment,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `Ano` int(11) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Cabina` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Kilometraje` varchar(100) NOT NULL,
  `Tipo_Motor` varchar(100) NOT NULL,
  `Traccion` varchar(100) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Comentario` varchar(300) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Motivo` varchar(300) NOT NULL,
  `Eliminar_Usuario` varchar(50) NOT NULL,
  `Fecha_Salida` date NOT NULL,
  `Modificacion_Usuario` varchar(50) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  PRIMARY KEY  (`Id`),
  UNIQUE KEY `Traccion` (`Traccion`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `camiones`
--

INSERT INTO `camiones` (`Id`, `Marca`, `Modelo`, `Ano`, `Tipo`, `Cabina`, `Color`, `Kilometraje`, `Tipo_Motor`, `Traccion`, `Nombre`, `Comentario`, `Fecha_Ingreso`, `Estado`, `Motivo`, `Eliminar_Usuario`, `Fecha_Salida`, `Modificacion_Usuario`, `Fecha_Modificacion`) VALUES
(4, 'Mercedez Benz', 'Actros', 2006, 'Camion Carretero', 'Simple', 'Blanco', '1009988 Km.', 'Act23', 'UP3298', 'Asetrans 061', 'CamiÃ³n en buen estado... muy bien', '2010-09-19', 'ACTIVO', 'jsjsjsjs', 'SLEAL', '2010-09-19', 'SLEAL', '2010-09-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE IF NOT EXISTS `egresos` (
  `N_Boleta` varchar(20) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Dia` varchar(10) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `Ano` varchar(10) NOT NULL,
  `Razon` varchar(100) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Costo` varchar(20) NOT NULL,
  `Modificacion_Usuario` varchar(50) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  PRIMARY KEY  (`N_Boleta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`N_Boleta`, `Fecha_Ingreso`, `Dia`, `Mes`, `Ano`, `Razon`, `Descripcion`, `Costo`, `Modificacion_Usuario`, `Fecha_Modificacion`) VALUES
('1', '2010-10-13', '13', '10', '2010', 'Implementos Oficina', ' Se comprÃ³:\r\n- lapiz pasta\r\n- archivadores ', '10890', 'SLEAL', '2010-11-18'),
('3', '2010-11-06', '06', '11', '2010', 'Anticipo', 'Se le Dio Anticipo a Julio Espinosa', '90000', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos_iva`
--

CREATE TABLE IF NOT EXISTS `egresos_iva` (
  `N_Boleta` varchar(20) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Dia` varchar(10) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `Ano` varchar(10) NOT NULL,
  `Razon` varchar(100) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Valor_Neto` int(11) NOT NULL,
  `Iva` int(11) NOT NULL,
  `Valor_Iva` varchar(30) NOT NULL,
  `Costo` varchar(30) NOT NULL,
  `Modificacion_Usuario` varchar(30) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  PRIMARY KEY  (`N_Boleta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `egresos_iva`
--

INSERT INTO `egresos_iva` (`N_Boleta`, `Fecha_Ingreso`, `Dia`, `Mes`, `Ano`, `Razon`, `Descripcion`, `Valor_Neto`, `Iva`, `Valor_Iva`, `Costo`, `Modificacion_Usuario`, `Fecha_Modificacion`) VALUES
('009878', '2010-11-18', '17', '10', '2010', 'Neumaticos', ' Se comprÃ³ 1 neumatico delantero para el camion UP3298 ', 810000, 0, '190000', '1000000', 'SLEAL', '2010-11-18'),
('008976', '2010-11-18', '10', '11', '2010', 'Neumaticos', 'se', 96000, 0, '4000', '100000', '', '0000-00-00'),
('008678', '2010-11-18', '15', '09', '2010', 'Neumaticos', 'se', 100000, 0, '0', '100000', '', '0000-00-00'),
('01238', '2010-11-18', '15', '10', '2010', 'Neumaticos', 'se compraron neumaticos', 81000, 0, '19000', '100000', '', '0000-00-00'),
('097656', '2010-11-18', '18', '12', '2010', 'Neumaticos', 'lkjhgfd', 81000, 19, '19000', '100000', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `Id` int(11) NOT NULL auto_increment,
  `Rut_Empresa` varchar(20) NOT NULL,
  `Nombre_Empresa` varchar(300) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Nombre_Dueno` varchar(100) NOT NULL,
  `Direccion` varchar(300) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Fax` varchar(30) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Modificacion_Usuario` varchar(30) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  PRIMARY KEY  (`Id`),
  UNIQUE KEY `Rut_Empresa` (`Rut_Empresa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`Id`, `Rut_Empresa`, `Nombre_Empresa`, `Nombre_Dueno`, `Direccion`, `Telefono`, `Fax`, `Fecha_Ingreso`, `Modificacion_Usuario`, `Fecha_Modificacion`) VALUES
(1, '74284914', 'Camur', 'Claudio Alejandro MuÃ±oz Rozzi', 'Aserradero Km.13.5 Camino San Javier, ConstituciÃ³n', '071-673848', '071-673864', '2010-09-25', 'SLEAL', '2010-11-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fletes_ocacion`
--

CREATE TABLE IF NOT EXISTS `fletes_ocacion` (
  `Id` int(11) NOT NULL auto_increment,
  `Origen` varchar(200) NOT NULL,
  `Destino` varchar(200) NOT NULL,
  `Fecha` date NOT NULL,
  `Dia` varchar(10) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `Ano` varchar(10) NOT NULL,
  `Monto` varchar(100) NOT NULL,
  `Porcentaje` varchar(10) NOT NULL,
  `Valor_Por` varchar(100) NOT NULL,
  `Total` varchar(100) NOT NULL,
  `Patente_Ca` varchar(20) NOT NULL,
  `Nombre_Tra` varchar(200) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `fletes_ocacion`
--

INSERT INTO `fletes_ocacion` (`Id`, `Origen`, `Destino`, `Fecha`, `Dia`, `Mes`, `Ano`, `Monto`, `Porcentaje`, `Valor_Por`, `Total`, `Patente_Ca`, `Nombre_Tra`) VALUES
(1, 'El Perdigadero', 'Cancha Paula', '2010-09-27', '01', '09', '2010', '560000', '20', '120000', '440000', 'UP3298', 'Julio Espinosa'),
(2, 'Camur', 'Santa Emilia', '2010-09-27', '06', '10', '2010', '620000', '15', '93000', '527000', 'UP3298', 'Julio'),
(3, 'El Perdigadero', 'Aserradero Camur', '2010-09-28', '02', '03', '2010', '400000', '10', '40000', '360000', 'UP3298', 'Allan'),
(4, 'Chanco', 'Constitucion', '2010-10-18', '18', '05', '2010', '300000', '10', '30000', '270000', 'UP3298', 'Julio'),
(5, 'Rancagua', 'Constitucion', '2010-11-15', '09', '01', '2010', '350000', '10', '35000', '315000', 'UP3298', 'Julio'),
(6, 'Sta Rosa', 'Pelarco', '2010-11-15', '16', '02', '2010', '459000', '12', '55080', '403920', 'UP3298', 'Julio'),
(7, 'Chanco', 'Constitucion', '2010-11-15', '21', '12', '2010', '289000', '10', '28900', '260100', 'UP3298', 'Julio'),
(8, 'ViÃ±a del Rocio', 'Camur', '2010-11-15', '04', '11', '2010', '345000', '9', '31050', '313950', 'UP3298', 'Julio'),
(9, 'Lo Miranda', 'Rancagua', '2010-11-15', '14', '04', '2010', '200000', '5', '10000', '190000', 'UP3298', 'Julio'),
(10, 'Coltauco', 'Rancagua', '2010-11-15', '31', '06', '2010', '310000', '10', '31000', '279000', 'UP3298', 'Julio'),
(11, 'Tirallao', 'Camur', '2010-11-15', '19', '07', '2010', '450000', '15', '67500', '382500', 'UP3298', 'Julio'),
(12, 'Putu', 'Camur', '2010-11-15', '12', '08', '2010', '130000', '8', '10400', '119600', 'UP3298', 'Julio'),
(13, 'Coltauco', 'Santa Emilia', '2010-11-15', '04', '04', '2010', '450000', '25', '112500', '337500', 'UP3298', 'Julio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia`
--

CREATE TABLE IF NOT EXISTS `guia` (
  `Id` int(11) NOT NULL auto_increment,
  `N_Guia_pro` varchar(15) NOT NULL,
  `Empresa` varchar(40) NOT NULL,
  `Dia` varchar(10) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `Ano` varchar(10) NOT NULL,
  `Origen` varchar(100) NOT NULL,
  `Destino` varchar(100) NOT NULL,
  `Hora_llegada` time NOT NULL,
  `Hora_Despacho` time NOT NULL,
  `N_Despacho` int(11) NOT NULL,
  `Cantidad_m3` varchar(20) NOT NULL,
  `Detalle` varchar(200) NOT NULL,
  `Tarifa` varchar(100) NOT NULL,
  `Monto_Despacho` varchar(100) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Modificacion_Usuario` varchar(100) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  `Patente_Ca` varchar(12) NOT NULL,
  `Valor_Neto` varchar(10) NOT NULL,
  `Valor_Iva` varchar(10) NOT NULL,
  PRIMARY KEY  (`Id`),
  UNIQUE KEY `N_Guia_pro` (`N_Guia_pro`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcar la base de datos para la tabla `guia`
--

INSERT INTO `guia` (`Id`, `N_Guia_pro`, `Empresa`, `Dia`, `Mes`, `Ano`, `Origen`, `Destino`, `Hora_llegada`, `Hora_Despacho`, `N_Despacho`, `Cantidad_m3`, `Detalle`, `Tarifa`, `Monto_Despacho`, `Fecha_Ingreso`, `Modificacion_Usuario`, `Fecha_Modificacion`, `Patente_Ca`, `Valor_Neto`, `Valor_Iva`) VALUES
(5, '0071055', '74284914', '02', '03', '2010', 'El Perdigadero', 'Aserradero Camur', '16:00:00', '18:20:00', 145, '28.572', 'M3 Rollizo 3.30 largo', '7681', '219461', '2010-09-30', '', '0000-00-00', 'UP3298', '177764', '41697'),
(12, '0031225', 'Camur', '04', '10', '2010', 'El Perdigadero', 'Aserradero Camur', '15:00:00', '17:30:00', 10, '29', 'M3 Rollizo 3.30 largo', '7681', '222749', '2010-10-06', '', '0000-00-00', 'UP3298', '180427', '42322'),
(13, '0031394', 'Camur', '06', '10', '2010', 'El Perdigadero', 'Cancha Paula', '00:00:00', '00:00:00', 342, '29.089', 'M3 Rollizo 3.30 largo', '4200', '122174', '2010-10-06', '', '0000-00-00', 'UP3298', '98961', '23213');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia_camion`
--

CREATE TABLE IF NOT EXISTS `guia_camion` (
  `Id` int(11) NOT NULL auto_increment,
  `N_Guia_pro` varchar(100) NOT NULL,
  `Patente_Ca` varchar(30) NOT NULL,
  `Nombre_Ca` varchar(50) NOT NULL,
  `Rut_Tra` varchar(20) NOT NULL,
  `Nombre_Tra` varchar(50) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  PRIMARY KEY  (`Id`),
  UNIQUE KEY `N_Guia_pro` (`N_Guia_pro`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcar la base de datos para la tabla `guia_camion`
--

INSERT INTO `guia_camion` (`Id`, `N_Guia_pro`, `Patente_Ca`, `Nombre_Ca`, `Rut_Tra`, `Nombre_Tra`, `Fecha_Ingreso`) VALUES
(5, '0071055', 'UP3298', 'Asetrans 061', '79433071', 'Julio Espinosa', '2010-09-25'),
(12, '0031225', 'UP3298', 'Asetrans 061', '79433071', 'Julio Espinosa', '2010-10-06'),
(13, '0031394', 'UP3298', 'Asetrans 061', '79433071', 'Julio Espinosa', '2010-10-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantencion`
--

CREATE TABLE IF NOT EXISTS `mantencion` (
  `Id` int(11) NOT NULL auto_increment,
  `Patente_Ca` varchar(10) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Dia` varchar(10) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `Ano` varchar(10) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `mantencion`
--

INSERT INTO `mantencion` (`Id`, `Patente_Ca`, `Descripcion`, `Dia`, `Mes`, `Ano`, `Fecha_Ingreso`) VALUES
(1, 'UP3298', '   Se le realizÃ³ mantencion al camion de:\r\n- Aceite\r\n- Filtros de aceite\r\n- Motor', '07', '10', '2010', '2010-10-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `text` varchar(128) collate utf8_unicode_ci NOT NULL default '',
  `name` varchar(60) collate utf8_unicode_ci NOT NULL default '',
  `color` enum('yellow','blue','green') collate utf8_unicode_ci NOT NULL default 'yellow',
  `xyz` varchar(20) collate utf8_unicode_ci NOT NULL default '',
  `dt` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Volcar la base de datos para la tabla `notes`
--

INSERT INTO `notes` (`id`, `text`, `name`, `color`, `xyz`, `dt`) VALUES
(45, 'Prueba', 'willy', 'green', '213x0x2', '2010-11-19 22:32:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n_guia`
--

CREATE TABLE IF NOT EXISTS `n_guia` (
  `Id` int(11) NOT NULL auto_increment,
  `N_Guia` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `n_guia`
--

INSERT INTO `n_guia` (`Id`, `N_Guia`) VALUES
(1, '0071055'),
(2, '0031364'),
(3, '003225'),
(4, '009876');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n_operador`
--

CREATE TABLE IF NOT EXISTS `n_operador` (
  `Id` int(10) NOT NULL auto_increment,
  `Rut_Operador` varchar(9) NOT NULL,
  `Nombre_Operador` varchar(60) NOT NULL,
  `Direccion_Operador` varchar(300) NOT NULL,
  `Fono_Contacto` varchar(20) NOT NULL,
  `Fono_Contacto2` varchar(20) NOT NULL,
  `Dia` varchar(10) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `Ano` varchar(10) NOT NULL,
  `Cargo_Operador` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Licencia` varchar(30) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Turno_Operador` varchar(10) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Estado` varchar(12) NOT NULL,
  `Motivo` varchar(300) NOT NULL,
  `Eliminar_Usuario` varchar(50) NOT NULL,
  `Fecha_Salida` date NOT NULL,
  `Modificacion_Usuario` varchar(50) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  PRIMARY KEY  (`Id`),
  UNIQUE KEY `Rut_Operador` (`Rut_Operador`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcar la base de datos para la tabla `n_operador`
--

INSERT INTO `n_operador` (`Id`, `Rut_Operador`, `Nombre_Operador`, `Direccion_Operador`, `Fono_Contacto`, `Fono_Contacto2`, `Dia`, `Mes`, `Ano`, `Cargo_Operador`, `Licencia`, `Descripcion`, `Turno_Operador`, `Fecha_Ingreso`, `Estado`, `Motivo`, `Eliminar_Usuario`, `Fecha_Salida`, `Modificacion_Usuario`, `Fecha_Modificacion`) VALUES
(1, '79433071', 'Julio Espinosa', 'Zenteno 738, Pbl. Villa', '08-7220599', '072-357620', '30', '09', '1978', 'Chofer', 'Clase A5', 'Encargado camion', 'NOCTURNO', '2007-09-03', 'CONTRATADO', '', '', '0000-00-00', 'JLOP', '2010-11-12'),
(2, '127272409', 'Marcelo Chamorro', 'O''higgins # 157qwertyu', '09-8145599', '072-357609', '18', '10', '1980', 'Chofer', 'Clase A4', 'Encargado Camion', 'DIURNO', '2010-09-17', 'CONTRATADO', '', 'SLEAL', '0000-00-00', 'SLEAL', '2010-09-17'),
(23, '172117554', 'William Leal', 'Pbl. Rajcevich, Psje Salvador Boubi #1133', '88045017', '81377397', '12', '11', '1989', 'Informatico', 'No tiene', 'Administrativo', 'DIURNO', '2010-09-29', 'CONTRATADO', '', '', '0000-00-00', '', '0000-00-00'),
(19, '160901403', 'Jeanette Lopez', 'Pbl. Manso de Velasco #1235', '97655432', '072-357609', '12', '10', '1984', 'Secretaria', 'No tiene', 'Administrativo', 'DIURNO', '2010-09-10', 'CONTRATADO', '', 'SLEAL', '0000-00-00', 'SLEAL', '2010-09-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `petroleo`
--

CREATE TABLE IF NOT EXISTS `petroleo` (
  `Id` int(11) NOT NULL auto_increment,
  `N_Guia` varchar(11) NOT NULL,
  `Rut_Proveedor` varchar(12) NOT NULL,
  `Proveedor` varchar(60) NOT NULL,
  `Lugar` varchar(300) NOT NULL,
  `Nombre_Retira` varchar(100) NOT NULL,
  `Rut_Retira` varchar(12) NOT NULL,
  `Cantidad` varchar(10) NOT NULL,
  `Detalle` varchar(100) NOT NULL,
  `Valor_Unitario` int(11) NOT NULL,
  `Valor_Total` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Dia` int(11) NOT NULL,
  `Mes` int(11) NOT NULL,
  `Ano` int(11) NOT NULL,
  `Fecha_a_Pagar` date NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Fecha_Pago` date NOT NULL,
  `Modificacion_Usuario` varchar(50) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcar la base de datos para la tabla `petroleo`
--

INSERT INTO `petroleo` (`Id`, `N_Guia`, `Rut_Proveedor`, `Proveedor`, `Lugar`, `Nombre_Retira`, `Rut_Retira`, `Cantidad`, `Detalle`, `Valor_Unitario`, `Valor_Total`, `Fecha`, `Dia`, `Mes`, `Ano`, `Fecha_a_Pagar`, `Estado`, `Fecha_Pago`, `Modificacion_Usuario`, `Fecha_Modificacion`) VALUES
(7, '71055', '520048731', 'Comercial Don Rogelio E.I.R.L.', 'Pelluhue', 'Simon Leal', '155240849', '64.7', 'Credito', 510, 33000, '2010-10-10', 10, 1, 2010, '2010-10-01', 'PAGADO', '2010-11-08', '', '0000-00-00'),
(8, '0031364', '172117554', 'Egidio Rozzi Saguetti', 'Pelluhue', 'Sergio Leal', '155240849', '40', 'Credito', 510, 20400, '2010-10-27', 27, 10, 2010, '2010-09-30', 'PAGADO', '2010-11-08', '', '0000-00-00'),
(9, '003225', '172117554', 'Egidio Rozzi Saguetti', 'Pelluhue', 'William Leal', '155240849', '34', 'Credito', 500, 17000, '2010-10-14', 14, 11, 2010, '2010-10-30', 'PAGADO', '2010-11-15', '', '0000-00-00'),
(10, '003225', '172117554', 'Egidio Rozzi Saguetti', 'Pelluhue', 'William Leal', '155240849', '1', 'Credito', 21000, 21000, '2010-10-14', 0, 12, 0, '2010-10-30', 'PAGADO', '2010-11-15', '', '0000-00-00'),
(11, '009876', '172117554', 'Egidio Rozzi Saguetti', 'Pelluhue', 'William Leal', '155240849', '64.7', 'Credito', 510, 29000, '2010-10-18', 18, 6, 2010, '2010-10-30', 'PAGADO', '2010-11-15', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE IF NOT EXISTS `tarifa` (
  `Id` int(11) NOT NULL auto_increment,
  `Empresa` varchar(50) NOT NULL,
  `Origen` varchar(300) NOT NULL,
  `Destino` varchar(300) NOT NULL,
  `Calidad_Madera` varchar(100) NOT NULL,
  `Tarifa` varchar(100) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Modificacion_Usuario` varchar(30) NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`Id`, `Empresa`, `Origen`, `Destino`, `Calidad_Madera`, `Tarifa`, `Fecha_Ingreso`, `Estado`, `Modificacion_Usuario`, `Fecha_Modificacion`) VALUES
(1, 'Camur', 'El Perdigadero', 'Cancha Paula', 'Madera Fresca', '4200', '2010-09-25', 'ACTIVO', 'SLEAL', '2010-11-11'),
(2, 'Camur', 'El Perdigadero', 'Aserradero Camur', 'Madera Fresca', '7681', '2010-09-25', 'ACTIVO', 'SLEAL', '2010-10-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramos`
--

CREATE TABLE IF NOT EXISTS `tramos` (
  `Id` int(11) NOT NULL auto_increment,
  `Tramo` varchar(10) NOT NULL,
  `Valor` varchar(10) NOT NULL,
  `Desde` varchar(10) NOT NULL,
  `Hasta` varchar(10) NOT NULL,
  `Valor_Diario` varchar(10) NOT NULL,
  `Vigencia` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `tramos`
--

INSERT INTO `tramos` (`Id`, `Tramo`, `Valor`, `Desde`, `Hasta`, `Valor_Diario`, `Vigencia`) VALUES
(1, 'A', '6776', '0', '177212', '225.8', '2011-06-30'),
(2, 'B', '4902', '177212', '298028', '163.4', '2011-06-30'),
(3, 'C', '1549', '298028', '464823', '51.63', '2011-06-30'),
(4, 'D', '0', '464823', '3000000', '0', '2011-06-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL auto_increment,
  `Nick` varchar(20) NOT NULL,
  `Clave` varchar(10) NOT NULL,
  `Clave_Permiso` varchar(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Cargo` varchar(20) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nick`, `Clave`, `Clave_Permiso`, `Nombre`, `Cargo`) VALUES
(1, 'SLEAL', '98765', 'LEAL123', 'SIMON SERGIO LEAL ORELLANA', 'ADMINISTRADOR'),
(2, 'SERLEAL', '1234', 'SUPERVISOR', 'SERGIO DEL C. LEAL OSORES', 'SUPERVISOR'),
(3, 'JCORONA', '123456', '', 'JAVIERA CORONA BARROS', 'SECRETARIA'),
(4, 'JLOP', '234', 'Clave_Perm', 'Jeanette Lopez', 'Secretaria');
