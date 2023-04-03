-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2023 a las 09:05:30
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myuca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `idC` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `fechaNac` date NOT NULL,
  `edad` int(100) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `facultad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`idC`, `nombres`, `apellidos`, `fechaNac`, `edad`, `titulo`, `email`, `facultad`) VALUES
(1, 'Eduard', 'Jiron', '2002-01-31', 21, 'Ingeniero En Sistemas', 'edjo@gmail.com', 'Facultad de Ciencia teconologí'),
(2, 'Eleaza', 'Cortez', '2003-05-15', 19, 'Marketing', 'eleaza@gmail.com', 'Facultad de Ciencia y economia'),
(3, 'Benjamín', 'Narváez', '2004-02-05', 19, 'Ingenieria en Redes y Telecomu', 'benja@gmail.com', 'Facultad de Ciencia tecnología'),
(4, 'Gabriel', 'Medina', '1990-02-12', 33, 'Física', 'gabo@gmail.com', 'Facultad de Ciencia tecnología'),
(5, 'Mergo', 'Salazar', '1980-06-23', 42, 'Biología', 'mermer@gmail.com', 'Facultad de Ciencia tecnología'),
(6, 'Juan', 'García', '1971-03-12', 52, 'Licenciado en Administración', 'juan.garcia@example.com', 'Facultad de Ciencias Económica'),
(7, 'María', 'Pérez', '1956-11-25', 67, 'Ingeniera en Sistemas', 'maria.perez@example.com', 'Facultad de Ingeniería'),
(8, 'Pedro', 'Rodríguez', '1991-05-09', 32, 'Licenciado en Derecho', 'pedro.rodriguez@example.com', 'Facultad de Ciencias Jurídicas'),
(9, 'Luisa', 'Gómez', '1942-07-22', 77, 'Licenciada en Psicología', 'luisa.gomez@example.com', 'Facultad de Ciencias Sociales'),
(10, 'José', 'Martínez', '1942-01-17', 81, 'Doctor en Medicina', 'jose.martinez@example.com', 'Facultad de Ciencias de la Sal'),
(11, 'Ana', 'Fernández', '1957-09-30', 66, 'Licenciada en Arquitectura', 'ana.fernandez@example.com', 'Facultad de Arquitectura y Dis');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`idC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
