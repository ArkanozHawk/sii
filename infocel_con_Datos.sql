-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2018 a las 09:48:04
-- Versión del servidor: 5.7.18-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `infocel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `idEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `tamaño` varchar(20) DEFAULT NULL,
  `resolucion` varchar(20) DEFAULT NULL,
  `cam_primaria` varchar(20) DEFAULT NULL,
  `cam_secundaria` varchar(20) DEFAULT NULL,
  `tam_bat` varchar(20) DEFAULT NULL,
  `procesador` varchar(20) DEFAULT NULL,
  `memoria` varchar(20) DEFAULT NULL,
  `almacenamiento` varchar(20) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEquipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `idReview` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `review` longtext,
  PRIMARY KEY (`idReview`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idEquipo` (`idEquipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidoP` varchar(20) DEFAULT NULL,
  `apellidoM` varchar(20) DEFAULT NULL,
  `pass` varchar(20) NOT NULL,
  `permisos` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `about` text,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nickname`, `nombre`, `apellidoP`, `apellidoM`, `pass`, `permisos`, `email`, `about`) VALUES
(1, 'Arkanoz', 'Mayolo', 'Suaste', 'Estrada', 'digi3.0', NULL, NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
