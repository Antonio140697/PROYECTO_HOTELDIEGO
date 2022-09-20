-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2022 a las 04:55:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hoteldiegob_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientesreg`
--

CREATE TABLE `clientesreg` (
  `id` int(100) NOT NULL,
  `txtNomcliente` varchar(100) NOT NULL,
  `txApcliente` varchar(100) NOT NULL,
  `txtTelcliente` int(15) NOT NULL,
  `txtCorreocliente` varchar(100) NOT NULL,
  `txtNomusuario` varchar(100) NOT NULL,
  `txtcontra` varchar(50) NOT NULL,
  `txtTipoUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientesreg`
--

INSERT INTO `clientesreg` (`id`, `txtNomcliente`, `txApcliente`, `txtTelcliente`, `txtCorreocliente`, `txtNomusuario`, `txtcontra`, `txtTipoUsuario`) VALUES
(1, '', '', 0, '', 'jose', '12345', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientesreg`
--
ALTER TABLE `clientesreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientesreg`
--
ALTER TABLE `clientesreg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
