-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2017 a las 19:40:06
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eclesial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diezmo`
--

CREATE TABLE `diezmo` (
  `id` int(11) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(150) DEFAULT NULL,
  `id_miembro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diezmo`
--

INSERT INTO `diezmo` (`id`, `monto`, `fecha`, `comentario`, `id_miembro`) VALUES
(1, '50', '2017-11-27', 'Entrego el primero diezmo', 1),
(2, '50', '2017-11-27', 'Entrego el primero diezmo', 1),
(3, '500', '2017-11-27', 'primer diezmo', 1),
(4, '80', '2017-11-20', '', 1),
(5, '100', '2017-11-22', 'Diezmo del mes de noviembre', 9),
(6, '500', '2017-11-30', 'Diezmo del mes de diciembre adelantado', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembro`
--

CREATE TABLE `miembro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fecha_nac` date NOT NULL,
  `celular` varchar(10) NOT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `estado` varchar(10) NOT NULL,
  `id_historia` int(11) DEFAULT NULL,
  `id_diezmo` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `miembro`
--

INSERT INTO `miembro` (`id`, `nombre`, `apellido`, `email`, `fecha_nac`, `celular`, `sexo`, `estado`, `id_historia`, `id_diezmo`, `id_usuario`) VALUES
(1, 'Abel', 'Perez', 'abel@gmail.com', '1995-05-08', '789485612', 'Masculino', 'inactivo', NULL, NULL, 1),
(2, 'user 2', 'apellido 2', 'usuario@.com', '2010-01-02', '123456', 'Masculino', 'activo', NULL, NULL, 1),
(3, 'Carlos', 'Costas', 'carlos@costas.com', '1990-04-12', '74185296', 'masculino', 'activo', NULL, NULL, 1),
(4, 'Juan', 'Carlos', 'juan@carlos.com', '1990-10-15', '74185978', 'Masculino', 'activo', NULL, NULL, 1),
(5, 'Mauricio', 'Osinaga', 'mauricio@osinaga.com', '1990-10-04', '78945612', 'Masculino', 'activo', NULL, NULL, 1),
(6, 'Martha', 'Rios', 'martha@rios.com', '1992-07-18', '79845874', 'Femenino', 'activo', NULL, NULL, 1),
(7, 'Julia', 'Montes', 'julia@montes.com', '1994-12-10', '78936925', 'Femenino', 'activo', NULL, NULL, 1),
(8, 'Alexander', 'Villarroel', 'alexvillarroel51@gmail.com', '2003-03-10', '78052995', 'Masculino', 'activo', NULL, NULL, 1),
(9, 'Roy', 'Villarroel', 'roy@gmail.com', '1994-06-04', '77640687', 'Masculino', 'activo', NULL, NULL, 1),
(10, 'Favio', 'Vargas', 'fvargas@hotmail.com', '1990-12-05', '78945612', 'Masculino', 'activo', NULL, NULL, 1),
(11, 'a', 'as', 'a', '0000-00-00', 'a', 'Masculino', 'activo', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`, `nombre`, `apellido`, `cargo`, `estado`) VALUES
(1, 'admin', '123456', 'Administrador', 'Administrador', 'Administrador', 'activo'),
(2, 'roy', '123456', 'Roy Favio', 'Villarroel Vargas', 'Lider', 'activo'),
(3, 'user', '123456', 'Nuevo', 'Usuario', 'lider', 'inactivo'),
(4, 'prueba', '123456', 'prueba', 'prueba 2', 'tesorera', 'inactivo'),
(5, 'h', 'h', 'h', 'h', 'pastor', 'activo'),
(6, 'juan', '123456', 'Juan', 'Perez', 'pastor', 'activo'),
(7, 'favio', '123456', 'favio', 'vargas', 'lider', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diezmo`
--
ALTER TABLE `diezmo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miembro`
--
ALTER TABLE `miembro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diezmo`
--
ALTER TABLE `diezmo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `miembro`
--
ALTER TABLE `miembro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
