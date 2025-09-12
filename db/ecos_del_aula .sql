-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2025 a las 06:24:22
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
-- Base de datos: `ecos del aula`
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
(1, '¿Cómo te sentís al comenzar la jornada escolar?'),
(2, '¿Con qué frecuencia te preocupan las tareas o exámenes?'),
(3, '¿Cómo describirías tu relación con tus compañeros de curso?'),
(4, '¿Qué tan cómodo/a te sentís hablando con docentes sobre tus dificultades?'),
(5, 'Cuando tenés muchas tareas o exámenes juntos, ¿qué hacés?'),
(6, '¿Cómo manejás los conflictos personales (con amigos, familia o pareja)?'),
(7, '¿Con qué frecuencia sentís cansancio o falta de energía durante la semana?'),
(8, '¿Cómo describirías tu confianza en vos mismo/a?'),
(9, '¿Qué tan seguido dedicás tiempo a actividades que disfrutes (deporte, arte, hobbies, etc)?'),
(10, '¿Cómo te sentís respecto al futuro (estudios, trabajo, proyectos personales)?');

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
(3, 12);

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
(1, 'Muy motivado/a y con energía.', 1),
(2, 'Normal, ni bien ni mal.', 2),
(3, 'Un poco cansado/a o desganado/a.', 3),
(4, 'Estresado/a o con ganas de no asistir.', 4),
(5, 'Casi nunca.', 1),
(6, 'A veces, pero lo manejo bien.', 2),
(7, 'Muy seguido, me cuesta organizarlas.', 3),
(8, 'Todo el tiempo, me genera ansiedad.', 4),
(9, 'Muy buena, tengo buenos amigos/as y me siento acompañado/a.', 1),
(10, 'Buena, aunque no tengo un grupo muy cercano.', 2),
(11, 'Regular, a veces me siento excluido/a.', 3),
(12, 'Mala, me siento aislado/a o con conflictos.', 4);

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
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `respuestastest`
--
ALTER TABLE `respuestastest`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pregunta_respuesta`
--
ALTER TABLE `pregunta_respuesta`
  ADD CONSTRAINT `pregunta_respuesta_ibfk_1` FOREIGN KEY (`id_respuesta`) REFERENCES `respuestastest` (`id_respuesta`),
  ADD CONSTRAINT `pregunta_respuesta_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntastest` (`id_pregunta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
