-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2012 a las 01:36:51
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `cod_cont` int(11) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `cod_cont` (`cod_cont`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`codigo`, `nombre`, `cod_cont`) VALUES
(1, 'Colombia', 1),
(2, 'Bolivia', 1),
(3, 'Venezuela', 1),
(4, 'Ecuador', 1),
(5, 'Peru', 1),
(6, 'Inglaterra', 2),
(7, 'Francia', 2),
(8, 'Italia', 2),
(9, 'España', 2),
(15, 'Egipto', 3),
(16, 'Libia', 3),
(17, 'Sudafrica', 3),
(18, 'Nigeria', 3),
(19, 'Marruecos', 3),
(20, 'China', 4),
(21, 'Japon', 4),
(22, 'India', 4),
(23, 'Korea del sur', 4),
(24, 'Korea del norte', 4),
(25, 'Alemania', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pais`
--
ALTER TABLE `pais`
  ADD CONSTRAINT `pais_ibfk_1` FOREIGN KEY (`cod_cont`) REFERENCES `continente` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
