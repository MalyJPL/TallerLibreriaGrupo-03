-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-04-2020 a las 16:34:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuenta_suenos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaEdad`
--

CREATE TABLE `categoriaEdad` (
  `idCategoriaEdad` int(11) NOT NULL,
  `edad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoriaEdad`
--

INSERT INTO `categoriaEdad` (`idCategoriaEdad`, `edad`, `idEstado`) VALUES
(1, '0-2 años', 1),
(2, '3-6 años', 1),
(3, '6-8 años', 1),
(4, '8-12 años', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaTema`
--

CREATE TABLE `categoriaTema` (
  `idCategoriaTema` int(11) NOT NULL,
  `tema` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoriaTema`
--

INSERT INTO `categoriaTema` (`idCategoriaTema`, `tema`, `idEstado`) VALUES
(1, 'Fantasia', 1),
(2, 'Imaginacion', 1),
(3, 'Pensamiento logico', 1),
(4, 'Social y valores', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estado`) VALUES
(1, 'Activo/Existente'),
(2, 'Inactivo/Inexistente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `producto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCategoriaEdad` int(11) NOT NULL,
  `idCategoriaTema` int(11) NOT NULL,
  `idRegistro` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `producto`, `nombre`, `autor`, `precio`, `descripcion`, `imagen`, `idCategoriaEdad`, `idCategoriaTema`, `idRegistro`, `idEstado`) VALUES
(1, 'Cuento infantil con ejercicios practicos', 'Los sonidos de la noche', 'Javier Sobrind/ Emilio urberuaga', '$49.000', 'En los sonidos de la noche de Javier Sobrind, encontrarás\ncomo en una situación todos mostraron cooperar, ningún animal fue indiferente a cada sonido y todos aportaron y colaboraron. La importancia de la solidaridad, del trabajo en \nequipo, de pensar en el bienestar de los demás y no sólo en el propio, es reflejado en este tierno cuento que mostrará a los niños la más hermosa y sencilla esencia de la vida.    \nEl hábito de la lectura es algo natural, sólo basta con dedicar el tiempo necesario para que este se vuelva parte de la rutina y así ir introduciendo pequeñas sesiones de lectura\ndiarias. Es importante saber que la lectura genera grandes beneficios en los niños y niñas; enriquece su vocabulario, ayuda a organizar de mejor manera sus mensajes, mejora sus \nhabilidades comunicativas, aumenta su concentración y creatividad, eleva su coeficiente intelectual y su capacidad de socializar fortaleciendo sus vínculos y relaciones personales.  \nEN ESTA CAJA ENCONTRARÁS\nGuía de lectura.\nGuía para llevar a cabo la actividad sugerida.\n1 lámina con dos monedas con la palabra si.\n1 lámina con dos monedas con la palabra no.\n2 Pitillos.\n1 lista de preguntas para saber ¿Cómo cuidar un niño?\nNECESITARÁS ADEMÁS: Tijeras. Pegante.', 'files/los-sonidos-de-la-noche.jpg', 1, 3, 1, 1),
(2, 'Cuento infantil', 'El Principito', 'Antoine De Saint-Exupéry', '$35.000', 'El Principito habita un pequeñísimo asteroide, que comparte con una flor caprichosa y tres volcanes. \nPero tiene problemas con la flor y empieza a experimentar la soledad. Hasta que decide abandonar el planeta en busca de un amigo. Buscando esa amistad recorre varios planetas, \nhabitados sucesivamente por un rey, un vanidoso, un borracho, un hombre de negocios, un farolero, un geógrafo. El concepto de seriedad que tienen estas personas mayores lo deja \nperplejo y confuso.', 'files/el_principito.png', 2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idRegistro` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idTipoAdmin` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idRegistro`, `nombre`, `apellido`, `correo`, `direccion`, `telefono`, `idTipoAdmin`, `idEstado`) VALUES
(1, 'Hector', 'Herrera', 'hector@gmail.com', 'Cra.5 #34-12', '3125442367', 1, 1),
(2, 'Juana', 'Lopez', 'juana@gmail.com', 'Calle. 65 #84-56', '3005487367', 2, 1),
(3, 'Oscar', 'Mendoza', 'oscar@gmail.com', 'Av.30 #12-96', '3045994262', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoAdmin`
--

CREATE TABLE `tipoAdmin` (
  `idTipoAdmin` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoAdmin`
--

INSERT INTO `tipoAdmin` (`idTipoAdmin`, `tipo`) VALUES
(1, 'Super administrador'),
(2, 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoriaEdad`
--
ALTER TABLE `categoriaEdad`
  ADD PRIMARY KEY (`idCategoriaEdad`),
  ADD KEY `fk_estadoCategoriaEdad` (`idEstado`);

--
-- Indices de la tabla `categoriaTema`
--
ALTER TABLE `categoriaTema`
  ADD PRIMARY KEY (`idCategoriaTema`),
  ADD KEY `fk_estadoCategoriaTema` (`idEstado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `fk_estadoProducto` (`idEstado`),
  ADD KEY `fk_adminProducto` (`idRegistro`),
  ADD KEY `fk_EdadLibro` (`idCategoriaEdad`),
  ADD KEY `fk_TemaLibro` (`idCategoriaTema`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `fk_estadoRegistro` (`idEstado`),
  ADD KEY `fk_RolAdmin` (`idTipoAdmin`);

--
-- Indices de la tabla `tipoAdmin`
--
ALTER TABLE `tipoAdmin`
  ADD PRIMARY KEY (`idTipoAdmin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoriaEdad`
--
ALTER TABLE `categoriaEdad`
  MODIFY `idCategoriaEdad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoriaTema`
--
ALTER TABLE `categoriaTema`
  MODIFY `idCategoriaTema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipoAdmin`
--
ALTER TABLE `tipoAdmin`
  MODIFY `idTipoAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoriaEdad`
--
ALTER TABLE `categoriaEdad`
  ADD CONSTRAINT `fk_estadoCategoriaEdad` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categoriaTema`
--
ALTER TABLE `categoriaTema`
  ADD CONSTRAINT `fk_estadoCategoriaTema` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_EdadLibro` FOREIGN KEY (`idCategoriaEdad`) REFERENCES `categoriaEdad` (`idCategoriaEdad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_TemaLibro` FOREIGN KEY (`idCategoriaTema`) REFERENCES `categoriaTema` (`idCategoriaTema`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_adminProducto` FOREIGN KEY (`idRegistro`) REFERENCES `registro` (`idRegistro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_estadoProducto` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_RolAdmin` FOREIGN KEY (`idTipoAdmin`) REFERENCES `tipoAdmin` (`idTipoAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_estadoRegistro` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
