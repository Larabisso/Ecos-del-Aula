-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2025 a las 06:18:32
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecos-del-aula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntastest`
--

CREATE TABLE `preguntastest` (
  `id_pregunta` int(11) NOT NULL,
  `preguntas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntastest`
--

INSERT INTO `preguntastest` (`id_pregunta`, `preguntas`) VALUES
(1, '¿Cuánto te sentís ansioso/a al rendir o al estudiar para un examen?\r\n'),
(2, '¿Cuánto te sentís ansioso/a al rendir o al estudiar para un examen?\r\n'),
(3, '¿Qué tan nervioso/a te sentís frente a un docente en general?\r\n'),
(4, '¿Contás con recursos para resolver trabajos prácticos?\r\n'),
(5, '¿Cómo te sentís al participar en clase?\r\n'),
(6, '¿Cómo vivís el momento de recibir tus notas?\r\n'),
(7, '¿Qué nivel de motivación tenés hacia la escuela?\r\n'),
(8, '¿Cómo describís tu forma de relacionarte en la escuela?\r\n'),
(9, '¿Tu familia está al tanto de cómo vas en la escuela?\r\n'),
(10, '¿Sentís que tenés alguien de confianza en la escuela?\r\n'),
(11, '¿Cómo es tu experiencia de convivencia con compañeros/as?\r\n'),
(12, '¿Lográs tener descanso y equilibrio entre estudio y ocio?\r\n'),
(13, '¿Sentís dolores físicos por tensión o estrés escolar?\r\n'),
(14, '¿Qué influye más en tus faltas a la escuela?\r\n'),
(15, '¿Cómo describirías tu energía durante la jornada escolar?\r\n'),
(16, '¿Qué tan seguido postergás tus tareas escolares?\r\n'),
(17, '¿Qué sentís al avisar a tu familia sobre una mala calificación?\r\n'),
(18, '¿Qué tanto pensás en la escuela cuando estás en otro ámbito?\r\n'),
(19, '¿Tenés actividades sociales fuera del ámbito escolar?\r\n'),
(20, '¿Qué tanto sentís presión por las expectativas familiares?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_respuesta`
--

CREATE TABLE `pregunta_respuesta` (
  `id_pregunta` int(11) NOT NULL,
  `id_respuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pregunta_respuesta`
--

INSERT INTO `pregunta_respuesta` (`id_pregunta`, `id_respuesta`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(6, 21),
(6, 22),
(6, 23),
(6, 24),
(7, 25),
(7, 26),
(7, 27),
(7, 28),
(8, 29),
(8, 30),
(8, 31),
(8, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestastest`
--

CREATE TABLE `respuestastest` (
  `id_respuesta` int(11) NOT NULL,
  `respuesta` text NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `respuestastest`
--

INSERT INTO `respuestastest` (`id_respuesta`, `respuesta`, `puntaje`) VALUES
(1, 'Nada ansioso/a.', 0),
(2, 'Poco ansioso/a.', 1),
(3, 'Ansioso/a en la mayoría de las evaluaciones.', 2),
(4, 'Muy ansioso/a, me paraliza.', 3),
(5, 'Lo disfruto y me organizo bien.', 0),
(6, 'A veces me genera tensión.', 1),
(7, 'Me estresa bastante, sobre todo en grupo.', 2),
(8, 'Me resulta muy difícil y me sobrepasa.', 3),
(9, 'Tranquilo/a, me siento seguro/a.', 0),
(10, 'Algo nervioso/a, pero lo manejo.', 1),
(11, 'Nervioso/a casi siempre', 2),
(12, 'Muy nervioso/a, me cuesta interactuar', 3),
(13, 'Siempre tengo lo que necesito.', 0),
(14, 'A veces me falta organización o recursos.', 1),
(15, 'Me cuesta encontrar estrategias o apoyo.', 2),
(16, 'No tengo recursos ni herramientas claras.', 3),
(17, 'Cómodo/a, participo seguido.', 0),
(18, 'Un poco inseguro/a, pero participo a veces.', 1),
(19, 'Me da vergüenza y casi no participo.', 2),
(20, 'Me genera mucha ansiedad, no participo.', 3),
(21, 'Con tranquilidad.', 0),
(22, 'Con un poco de nervios', 1),
(23, 'Con bastante ansiedad.', 2),
(24, 'Con mucho miedo o malestar.', 3),
(25, 'Muy motivado/a.', 0),
(26, 'Medianamente motivado/a.', 1),
(27, 'Poco motivado/a.', 2),
(28, 'Nada motivado/a.', 3),
(29, 'Extrovertido/a, hago vínculos fácilmente', 0),
(30, 'Sociable en algunos grupos.', 1),
(31, 'Reservado/a, me cuesta vincularme.', 2),
(32, 'Muy aislado/a, sin vínculos.', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_resultados`
--

CREATE TABLE `respuestas_resultados` (
  `id_respuesta_resultado` int(11) NOT NULL,
  `id_resultado` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_respuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id_resultado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `puntaje_total` int(11) NOT NULL,
  `id_respuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `preguntastest`
--
ALTER TABLE `preguntastest`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `pregunta_respuesta`
--
ALTER TABLE `pregunta_respuesta`
  ADD KEY `id_pregunta` (`id_pregunta`,`id_respuesta`),
  ADD KEY `id_respuesta` (`id_respuesta`);

--
-- Indices de la tabla `respuestastest`
--
ALTER TABLE `respuestastest`
  ADD PRIMARY KEY (`id_respuesta`);

--
-- Indices de la tabla `respuestas_resultados`
--
ALTER TABLE `respuestas_resultados`
  ADD PRIMARY KEY (`id_respuesta_resultado`),
  ADD KEY `id_resultado` (`id_resultado`,`id_pregunta`,`id_respuesta`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_respuesta` (`id_respuesta`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `respuesta` (`id_respuesta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntastest`
--
ALTER TABLE `preguntastest`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `respuestastest`
--
ALTER TABLE `respuestastest`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `respuestas_resultados`
--
ALTER TABLE `respuestas_resultados`
  MODIFY `id_respuesta_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pregunta_respuesta`
--
ALTER TABLE `pregunta_respuesta`
  ADD CONSTRAINT `pregunta_respuesta_ibfk_1` FOREIGN KEY (`id_respuesta`) REFERENCES `respuestastest` (`id_respuesta`),
  ADD CONSTRAINT `pregunta_respuesta_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntastest` (`id_pregunta`);

--
-- Filtros para la tabla `respuestas_resultados`
--
ALTER TABLE `respuestas_resultados`
  ADD CONSTRAINT `respuestas_resultados_ibfk_1` FOREIGN KEY (`id_resultado`) REFERENCES `resultados` (`id_resultado`),
  ADD CONSTRAINT `respuestas_resultados_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntastest` (`id_pregunta`),
  ADD CONSTRAINT `respuestas_resultados_ibfk_3` FOREIGN KEY (`id_respuesta`) REFERENCES `respuestastest` (`id_respuesta`);

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`id_respuesta`) REFERENCES `respuestastest` (`id_respuesta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
