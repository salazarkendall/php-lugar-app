-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 21-09-2019 a las 01:58:33
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `IglesiaElLugar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activo`
--

CREATE TABLE `activo` (
  `id_activo` int(5) NOT NULL,
  `id_ministerio` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `id_miembro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `activo`
--

INSERT INTO `activo` (`id_activo`, `id_ministerio`, `nombre`, `cantidad`, `descripcion`, `estado`, `id_miembro`) VALUES
(1, 1, 'Pantalla', 1, 'Pantalla del club', 'Prestado a El Camino', '116820936'),
(2, 4, 'Parrilla', 1, 'Parrilla de gas que está donde Alonso', 'En uso', '116820936');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `id_anuncio` int(5) NOT NULL,
  `id_miembro` varchar(20) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `anuncio` varchar(500) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id_anuncio`, `id_miembro`, `titulo`, `anuncio`, `imagen`) VALUES
(3, '19020533', 'Venta de tarjetas para el día de la madre', 'Se venderán el domingo 10 después de la iglesia. Aproveche!', ''),
(4, '010203', 'Pintaremos la iglesia', 'Los viernes de este mes estaremos pintando la iglesia', ''),
(5, '010203', 'Mande sus pedidos de oración', 'Recuerde que puede hacerlo vía WhatsApp o dejando un mensaje al buzón que está en la puerta de la oficina', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deuda`
--

CREATE TABLE `deuda` (
  `id_deuda` int(3) NOT NULL,
  `acreedor` varchar(100) NOT NULL,
  `tasa_interes` decimal(5,2) NOT NULL,
  `monto_inicial` float NOT NULL,
  `saldo` float NOT NULL,
  `moneda` varchar(15) NOT NULL,
  `fecha_primer_pago` date NOT NULL,
  `tiempo_deuda` int(3) NOT NULL,
  `id_miembro` varchar(20) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `deuda`
--

INSERT INTO `deuda` (`id_deuda`, `acreedor`, `tasa_interes`, `monto_inicial`, `saldo`, `moneda`, `fecha_primer_pago`, `tiempo_deuda`, `id_miembro`, `estado`) VALUES
(1, 'Préstamo BCR', '9.25', 100000, 0, 'colones', '2018-07-01', 60, '116820936', 'Cancelada'),
(2, 'Crédito BN', '10.15', 250000, 227000, 'colones', '2019-07-06', 60, '116820936', 'En progreso'),
(3, 'Hipoteca del local - BN', '9.25', 10000000, 9938000, 'colones', '2019-08-05', 60, '116820936', 'En progreso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(5) NOT NULL,
  `id_ministerio` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `id_ministerio`, `nombre`, `descripcion`, `fecha`, `imagen`) VALUES
(1, 1, 'Día de picnic', 'Se traen las familias a la iglesia y se les predica el evangelio', '2019-07-27', ''),
(2, 3, 'Día de la familia', 'Hacer una tarde vaquera en la iglesia y predicar el evangelio', '2019-07-21', ''),
(5, 3, 'Cafecito con Vivi', 'cafecito para compartir', '2019-08-03', ''),
(6, 2, 'Reunión de planeamiento', 'Nos reuniremos a discutir temas de evangelismo y discipulado, así como a presentar a los nuevos maestros.', '2019-08-16', ''),
(7, 1, 'Lanzamiento', 'Lanzamiento del nuevo programa Talent Zone donde se ...', '2019-09-07', ''),
(8, 1, 'Fiesta de niños - Navidad', 'Fiesta anual de navidad', '2019-12-12', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE `gasto` (
  `id_gasto` int(11) NOT NULL,
  `id_miembro` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `monto` float NOT NULL,
  `moneda` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gasto`
--

INSERT INTO `gasto` (`id_gasto`, `id_miembro`, `nombre`, `monto`, `moneda`, `fecha`, `comentario`) VALUES
(1, '116820936', 'Luz - julio', 23000, 'colones', '2019-07-26', 'Se nos recomendó cambiar a luces LED'),
(2, '116820936', 'Agua - Julio', 40000, 'colones', '2019-08-21', 'Hay que revisar el medidor'),
(3, '116820936', 'Teléfono + Internet - Julio', 30000, 'colones', '2019-08-21', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interesado`
--

CREATE TABLE `interesado` (
  `ID` int(3) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `mensaje` varchar(500) NOT NULL,
  `leido` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `interesado`
--

INSERT INTO `interesado` (`ID`, `nombre`, `email`, `telefono`, `mensaje`, `leido`) VALUES
(7, 'Anyo', 'anyo@gmail.com', '818181818', 'Hola, estoy interesada.', ''),
(9, 'Elizabeth Vargas', 'eli@algo.com', '8888-9999', 'Hola, estoy interesada', ''),
(10, 'Glen Mora', 'glen@hotmail.com', '8888-9999', 'Iba a esta iglesia hace mucho tiempo. Me gustaría volver.', ''),
(11, 'Pablo Soto', 'psoto@gmail.com', '8989-8989', 'Hola, estoy interesado', ''),
(12, 'Hudson Taylor', 'htaylor@missions.com', '8989-8989', 'Hola, quisiera más información del grupo de matrimonios.', '1'),
(13, 'Abel Loría', 'abelloria@gmail.com', '8978-8978', 'Buenos días. Ahorita paso por una situación difícil, me gustaría contactar al pastor.', '0'),
(14, 'Ludger', 'l@igle.com', '89898989', 'Hola, quiero volver.', '1'),
(15, 'Pedro Aguilar Molina', 'leonardoaguil@hotmail.com', '87512416', 'Hola', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(5) NOT NULL,
  `id_miembro` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` date DEFAULT NULL,
  `link_pdf` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `id_miembro`, `nombre`, `fecha`, `link_pdf`) VALUES
(1, '116820936', 'El corazón de Dios', '2019-07-01', 'http://localhost:8888/MAMP/index.php?language=Spanish&page=phpinfo'),
(2, '', 'Jeremías: Un breve resumen', '2019-07-18', 'a'),
(3, '', 'Habacuc', '2019-07-18', 'b'),
(6, '116820936', 'Lucas 21:2-60', '2019-07-18', 'vvbbg'),
(7, '', 'Venta de copos', '0000-00-00', ''),
(8, '010203', 'Lucas 21:6-18', '2019-07-19', 'a'),
(9, '116820936', 'Jeremías: Un breve resumen', '2019-07-07', 'sas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ministerio`
--

CREATE TABLE `ministerio` (
  `id_ministerio` int(2) NOT NULL,
  `id_director` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ministerio`
--

INSERT INTO `ministerio` (`id_ministerio`, `id_director`, `nombre`, `descripcion`) VALUES
(1, '010203', 'Club de Niños', 'Ministerio de niños de la Iglesia'),
(2, '010203', 'Escuela Dominical', 'Ministerio encargado de coordinar cada aspecto de escuela dominical'),
(3, '19020533', 'Mujeres', 'Ministerio de mujeres de la iglesia'),
(4, '010203', 'Hombres', 'Hombres de la iglesia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofrenda`
--

CREATE TABLE `ofrenda` (
  `id_ofrenda` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `monto` float NOT NULL,
  `moneda` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `id_miembro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ofrenda`
--

INSERT INTO `ofrenda` (`id_ofrenda`, `nombre`, `monto`, `moneda`, `fecha`, `id_miembro`) VALUES
(1, '31-Julio', 230000, 'colones', '2019-07-31', '116820936'),
(2, '21-Junio', 100000, 'colones', '2019-06-21', '116820936'),
(6, 'Ofrenda Misionera - Julio', 300000, 'colones', '2019-07-28', '116820936'),
(7, '1-Agosto', 300000, 'colones', '2019-08-01', '116820936');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(5) NOT NULL,
  `id_deuda` int(5) NOT NULL,
  `id_miembro` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `monto_total` float NOT NULL,
  `abono_principal` float NOT NULL,
  `moneda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `id_deuda`, `id_miembro`, `fecha`, `monto_total`, `abono_principal`, `moneda`) VALUES
(1, 1, '116820936', '2019-07-29', 4000, 1500, 'colones'),
(2, 2, '116820936', '2019-07-31', 23000, 18000, 'colones'),
(3, 3, '116820936', '2019-08-01', 60000, 48000, 'colones'),
(4, 3, '116820936', '2019-08-31', 10000, 2000, 'colones'),
(5, 1, '116820936', '2019-08-22', 100000, 96000, 'colones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permiso` int(2) NOT NULL,
  `descripción` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permiso`, `descripción`) VALUES
(1, 'administrador'),
(2, 'miembro regular'),
(3, 'visita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` varchar(20) NOT NULL,
  `id_permiso` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `genero` varchar(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono1` varchar(20) NOT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `direccion` varchar(500) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contrasena` varchar(50) NOT NULL,
  `comentario_adicional` varchar(100) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `id_permiso`, `nombre`, `apellido1`, `apellido2`, `genero`, `fecha_nacimiento`, `telefono1`, `telefono2`, `direccion`, `email`, `contrasena`, `comentario_adicional`, `estado`) VALUES
('010203', 2, 'Alonso', 'Angulo', 'Lizano', 'M', '1978-01-01', '88889999', '', 'San Francisco', 'alonso@iglesiaellugar.com', 'ellugar123', 'comentario', 'activo'),
('111222', 3, 'Gerson', 'Venegas', 'Chacón', 'M', '1990-07-04', '87512416', '', 'San Sebastian', 'ger@hotmail.com', '1234', '', 'inactivo'),
('116820936', 1, 'Leonardo', 'Aguilar', 'Molina', 'M', '1997-08-03', '87512416', '22272003', 'San Sebastián', 'leonardoaguil@hotmail.com', '1234', 'comentario', 'activo'),
('19020533', 2, 'Marcela', 'Molina', 'Morera', 'F', '1975-02-24', '83701742', '', 'San Sebastian', 'marcelamolina02@gmail.com', '1234', 'Volvió a la iglesia', 'activo'),
('909090', 2, 'Vivian', 'Aguilar', '', 'F', '2019-05-02', '88887777', '', 'San Francisco', 'vivi@hotmail.com', 'ellugar123', '', 'activo'),
('invitado', 1, 'Predicador', 'Invitado', '-', 'M', '1900-01-01', '11112222', NULL, 'Indefinida', NULL, 'adbhafagvfavghdabhsjbadvf', 'Usada para registrar predicadores invitados', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_ministerio`
--

CREATE TABLE `reporte_ministerio` (
  `id_reporte_ministerio` int(5) NOT NULL,
  `id_ministerio` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `reporte` varchar(5000) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reporte_ministerio`
--

INSERT INTO `reporte_ministerio` (`id_reporte_ministerio`, `id_ministerio`, `nombre`, `reporte`, `imagen`) VALUES
(1, 2, 'Mayo - Junio', 'a', ''),
(2, 3, 'Reporte Agosto', 'a', ''),
(3, 1, 'Reporte Junio - Agosto ', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activo`
--
ALTER TABLE `activo`
  ADD PRIMARY KEY (`id_activo`);

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id_anuncio`);

--
-- Indices de la tabla `deuda`
--
ALTER TABLE `deuda`
  ADD PRIMARY KEY (`id_deuda`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD PRIMARY KEY (`id_gasto`);

--
-- Indices de la tabla `interesado`
--
ALTER TABLE `interesado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `ministerio`
--
ALTER TABLE `ministerio`
  ADD PRIMARY KEY (`id_ministerio`);

--
-- Indices de la tabla `ofrenda`
--
ALTER TABLE `ofrenda`
  ADD PRIMARY KEY (`id_ofrenda`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `reporte_ministerio`
--
ALTER TABLE `reporte_ministerio`
  ADD PRIMARY KEY (`id_reporte_ministerio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activo`
--
ALTER TABLE `activo`
  MODIFY `id_activo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id_anuncio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `deuda`
--
ALTER TABLE `deuda`
  MODIFY `id_deuda` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `gasto`
--
ALTER TABLE `gasto`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `interesado`
--
ALTER TABLE `interesado`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ministerio`
--
ALTER TABLE `ministerio`
  MODIFY `id_ministerio` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ofrenda`
--
ALTER TABLE `ofrenda`
  MODIFY `id_ofrenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permiso` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `reporte_ministerio`
--
ALTER TABLE `reporte_ministerio`
  MODIFY `id_reporte_ministerio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;