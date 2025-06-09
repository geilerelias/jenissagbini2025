-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2025 a las 21:01:22
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
-- Base de datos: `jenissa1_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `name`, `title`, `content`, `icon`, `created_at`, `updated_at`) VALUES
(6, 'about/image-1706375013.jpg', 'YO', 'YO', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Nací en Valledupar,&nbsp; al norte de Colombia. Soy amante de la Tecnología, el Emprendimiento, el Marketing y la Investigación.&nbsp; </span></p><p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Estas tres disciplinas se complementan debido a que para hacer proyectos viables comercialmente, se hace necesario tener una base tecnológica. </span></p>', 'mdi-account-circle', '2022-02-05 17:35:22', '2024-01-27 22:03:33'),
(7, 'about/image-1706374618.jpg', 'ESTUDIOS', 'ESTUDIOS', '<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Como amante de la Tecnología, estudié Ingeniería de Sistemas en la Fundación Universitaria San Martín.&nbsp; Me titulé como:</span></p><ul><li class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">“Especialista en Gerencia de Mercadeo” en la Universidad Jorge Tadeo de Bogotá; </span></li><li class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">“Especialista en Auditoría de Sistemas” en la Universidad Francisco de Paula Santander (Ocaña),&nbsp;</span></li><li class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">“Magíster en Marketing y Dirección Comercial” en el Instituto Eurothecnology en España y</span></li><li class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">“Magíster en Gobierno de Tecnologías de la Información“ en la Universidad Francisco de Paula Santaner (Ocaña). </span></li></ul><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\"><span class=\"ql-cursor\">﻿﻿﻿﻿</span>Adicional a ello, adelanté muchos cursos de perfeccionamiento relacionados con la Gerencia Comercial,&nbsp; el Marketing, Elaboración de Proyectos y Transformación Digital de Negocios.</span></p><p><br></p><p><br></p>', 'mdi-school', '2022-02-05 18:06:57', '2024-01-27 21:56:58'),
(8, 'about/image-1644067210.jpg', 'EXPERIENCIA PROFESIONAL/ACADÉMICA', 'EXPERIENCIA PROFESIONAL/ACADÉMICA', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Trabajé como Analista de Sistemas en la mayor multinacional de mi ciudad CICOLAC y posteriormente, ingresé a mi mayor &nbsp; “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Escuela Empresarial</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">” que fue COCA COLA FEMSA, en donde durante 16 años ocupé varias posiciones como: Analista de Sistemas, Analista de Logística, Jefe de Refrigeración, Jefe de Recursos Humanos y Jefe de Mercadeo. Como amante del emprendimiento y del Marketing, volqué mi energía en tres grandes proyectos empresariales: “Humus del Cesar S.A.S.”, “Practika Boutique” y “Hostal Valledupar”.&nbsp; Con el pasar del tiempo, mientras emprendía, inicié mi carrera de tutora en la Fundación Universitaria San Martín, y fue allí donde entendí, que “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">formar a otros</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">” a través de la entrega de experiencias y conocimientos, era lo que realmente me gustaba.&nbsp; Actualmente soy Docente y Coordinadora de los Postgrados de la Facultad de Ingeniería y Tecnológicas de la Universidad Popular del Cesar. También soy Instructora de Seguimiento Etapa Productiva en el Servicio Nacional de Aprendizaje SENA. En ambas instituciones apoyo en la formación y desarrollo&nbsp; proyectos de investigación en el interior de mis semilleros SISE y SICOMUNICA, que son potencialmente documentados y presentados en Congresos a nivel nacional e Internacional. </span></p>', 'mdi-account-tie', '2022-02-05 18:17:46', '2022-02-05 18:20:10'),
(9, 'about/image-1706375028.', 'PERFECCIONAMIENTO', 'PERFECCIONAMIENTO', '<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Mi formación es constante y continua, de allí, que cada año adelanto cursos de perfeccionamiento de forma autodidacta a través de instituciones educativas. Los últimos cursos y talleres realizados están relacionados con la Investigación y elaboración de proyectos. Algunos son: “Transformación Digital de Negocios”, “Curso de Marca Personal” (MINTIC), “Emprendimientos Digitales” (MINTIC), “Fortalecimiento de las Competencias Didácticas Docentes para la Formación&nbsp; por Proyectos” (SENA), “Estructuración de Proyectos de Investigación”&nbsp; (SENA), “Programa de Fortalecimiento de las Capacidades para la Formulación de Proyectos de Investigación” (SENA), “Diplomado en Docencia Universitaria” (Uni-Andina), “Diplomado en Desarrollo de Gerencia Comercial”(Uni-Sabana), “Diplomado en&nbsp; Gerencia Facilitadora” (Uni-Sabana).</span></p><p><br></p><p><br></p>', 'mdi-poll', '2022-02-05 18:17:58', '2024-01-27 22:03:48'),
(10, 'about/image-1644067456.jpg', 'PREMIOS & MÉRITOS', 'PREMIOS & MÉRITOS', '<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Mientras estudiaba Ingeniería de Sistemas, recibí el premio de “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Primer Puesto en la&nbsp; Ronda Preparatoria V Olimpiadas Colombianas de Matemáticas Universitarias</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">”, evento organizado por la Universidad Antonio Nariño y dirigido a todos los Estudiantes Universitarios de Colombia.&nbsp;&nbsp;</span></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">En la Fundación Universitaria San Martín, recibí la mención de “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Estudiante Distinguido</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">” por obtener el mejor promedio académico durante toda la carrera de pre-grado.</span></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Mientras trabajaba en COCA COLA FEMSA, recibí el premio “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">El Mejor Empleado 2007</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">” por obtener los mejores resultados de gestión en la Jefatura de Refrigeración. Igualmente&nbsp; recibí un reconocimiento por “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Sobresaliente Desempeño como Evaluador Auditor de Sistema de Calidad 2008</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">”, proyecto al cual apoyé.</span></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Cuando trabajé como tutora en la Fundación Universitaria San Martín, recibí el reconocimiento como “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Docente con Mayor Puntaje de Evaluación de Estudiantes de Ingeniería de Sistemas</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">”&nbsp;&nbsp;</span></p>', 'mdi-card-account-details-star', '2022-02-05 18:18:00', '2022-02-05 18:24:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `entity` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrepreneurships`
--

CREATE TABLE `entrepreneurships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juries`
--

CREATE TABLE `juries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `entity` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `people` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2021_07_09_225703_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `links` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notices`
--

INSERT INTO `notices` (`id`, `image`, `title`, `city`, `date`, `time`, `description`, `links`, `created_at`, `updated_at`) VALUES
(5, 'notices/image-1644036270.jpg', 'CONFERENCIA INTERNACIONAL  ¨EMPRESAS 4.0¨', 'Cuenca, Ecuador.', '2020-07-22', '14:00', '<p><span style=\"color: rgb(5, 5, 5);\">El pasado 22 de julio de 2020, la Ingeniera Jenis del Carmen Sagbini Echávez dió la Conferencia \'Empresas 4.0\' en el Seminario Internacional de Innovación Real, Universidad del Azuay, Cuenca, Ecuador.</span></p>', NULL, '2022-02-05 09:44:30', '2022-02-05 09:44:30'),
(6, 'notices/image-1645019188.jpg', 'DIPLOMADO ¨TRANSFORMACIÓN DIGITAL DE NEGOCIOS¨', 'Valledupar', '2020-09-10', '14:00', '<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">El 10 de septiembre de 2020, en el auditorio Leandro Díaz de la Cámara de Comercio de Valledupar, la ingeniera Jenis del Carmen Sagbini Echávez </span><span style=\"color: rgb(0, 0, 0); letter-spacing: 0.1px;\">entregó los certificados del </span><span style=\"background-color: transparent; color: rgb(0, 0, 0); letter-spacing: 0.00714286em;\">diplomado de TRANSFORMACION DIGITAL DE NEGOCIOS a todos los  empresarios y trabajadores de empresas privadas y públicas de la ciudad, que culminaron satisfactoriamente la formación de dicha temática.</span></p><p><br></p>', 'null', '2022-02-05 09:46:36', '2022-02-16 18:46:28'),
(7, 'notices/image-1644036533.jpg', 'RECONOCIMIENTO', 'Valledupar', '2019-12-17', '20:00', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">El 17 de diciembre de 2019, la Universidad Francisco de Paula Santander sede Ocaña, durante el Encuentro de Egresados de Auditoría de Sistemas, dió reconocimiento a la ingeniera Jenis del Carmen Sagbini Echávez por sus logros de impacto internacional.&nbsp; </span></p>', NULL, '2022-02-05 09:48:53', '2022-02-05 09:48:53'),
(8, 'notices/image-1644036685.jpg', 'TALLER “HABILIDADES GERENCIALES PARA INGENIEROS”', 'Valledupar', '2019-03-14', '08:01', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">El 14 de marzo de 2019, en la Universidad de Santander UDES de Valledupar, se llevó a cabo el Taller “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Habilidades Gerenciales para Ingenieros</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">” dirigido a egresados del programa de Ingeniería Industrial. </span></p>', 'null', '2022-02-05 09:50:47', '2022-02-05 09:51:25'),
(9, 'notices/image-1644036811.jpg', 'CURSO “USO DE LAS TIC EN MADRES COMUNITARIAS”', 'Valledupar', '2020-03-14', '14:00', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">El&nbsp; 14 de marzo de 2019, en las instalaciones del ICBF, se llevó a cabo la ceremonia de graduación de aquellas Madres Comunitarias que lograron los resultados de aprendizaje en el curso “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Uso de las Tecnologías de la Información y la Comunicación TIC</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">”. &nbsp; </span></p>', NULL, '2022-02-05 09:53:31', '2022-02-05 09:53:31'),
(10, 'notices/image-1644036914.jpg', 'PREMIO A LA “MEJOR PONENCIA”', 'Valledupar', '2018-10-18', '14:00', '<p><span style=\"color: rgb(28, 30, 33);\">SENA, 18 de Octubre de 2018. El proyecto EMPRENDIMIENTO DIGITAL \"SOMOS UNO\" reconocida como Mejor Ponencia en III Simposio de Investigación, Innovación y Desarrollo Tecnológico! Centro de Operación y Mantenimiento Minero COMM SENA Cesar, en el Centro de Convenciones Crispín Villazón de Armas. Proyecto presentado por Aldair Nuñez Florian y orientado por Jenis Sagbini Echávez.</span></p>', NULL, '2022-02-05 09:55:14', '2022-02-05 09:55:14'),
(11, 'notices/image-1679785074.jpeg', 'Diplomado de gestión y desarrollo en la tecnología', 'Valledupar - Colombia', '2023-03-15', '17:00', '<p>Durante el mes de marzo 2023, en la Cámara de Comercio de Valledupar, la ingeniera Jenis Sagbini enseñó los módulos ¨Introducción al Desarrollo Tecnológico¨ y ¨Procesos de Desarrollo Tecnológico¨ en el <strong>Diplomado de Gestión y Desarrollo de las Tecnologías.</strong> Esta formación fue dirigida a los empresarios, trabajadores, estudiantes universitarios, docentes universitarios y pequeños emprendedores como una contribución más al desarrollo del talento humano cesarense. Haciendo a la gente exitosa en un mundo cambiante!</p>', 'null', '2023-03-26 03:32:35', '2023-03-26 03:57:54'),
(12, 'notices/image-1679784934.jpeg', 'DIPLOMADO EN INNOVACION EMPRESARIAL', 'Valledupar', '2023-03-25', '08:00', '<p>El 25 de marzo de 2023,  la Ingeniera Jenis Sagbini enseñó el módulo&nbsp;¨El rol de las Tecnologías en la Innovación Empresarial¨ en el <strong>Diplomado en Innovación Empresarial.</strong> Esta formación fue dirigida a los empresarios, trabajadores, estudiantes universitarios, docentes universitarios y pequeños emprendedores como una contribución más al desarrollo del talento humano. Haciendo a la gente exitosa en un mundo cambiante!</p>', 'null', '2023-03-26 03:54:03', '2023-03-26 03:55:34'),
(13, 'notices/image-1706374170.jpg', 'MASTER CLASS \"Tendencias Tecnológicas Emergentes y su impacto en empresas de base tecnológicas\"', 'Valledupar', '2023-07-19', '16:00', '<p>A través del programa Versos 2.0, la ingeniera Jenis Sagbini desarrolló una Master Class titulada: \"Tendencias Tecnológicas Emergentes y su Impacto en Empresas de Base Tecnológicas\". La audiencia estuvo conformada por empresarios y emprendedores adscritos a la Cámara de Comercio de Valledupar. Fue un espacio de conocimiento de experiencias y reflexión para aumentar la productividad en empresas locales!</p>', NULL, '2024-01-27 21:49:30', '2024-01-27 21:49:30'),
(14, 'notices/image-1725318818.jpeg', 'Socialización del “Diplomado en Tecnología y Programación” ante los estudiantes beneficiados en Valledupar.', 'Valledupar, Cesar.', '2024-08-27', '10:00', '<p>La ingeniera <strong>Jenis Sagbini Echávez</strong> presentó el “<strong>Diplomado en Tecnología y Programación</strong>” a 100 estudiantes seleccionados de los colegios <strong>INSTPECAM, CASD y Alfonso López en Valledupar</strong>. Este diplomado es parte de un convenio interadministrativo <strong>entre la Gobernación del Cesar y la Universidad Popular del Cesar</strong>, con el objetivo de enseñar habilidades digitales como<strong> Programación WEB, Programación Móvil, Analítica de Datos y Seguridad Informática</strong>, ayudando a reducir la brecha digital en la región. En el evento participaron Álvaro Oñate, Director del Programa de Ingeniería de Sistemas, egresados del programa de Ingeniería de Sistemas, la Secretaria de Educación, Miguel Aroca, Asesor TIC del Departamento del Cesar, y rectores de los colegios.</p>', NULL, '2024-09-03 04:13:38', '2024-09-03 04:13:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `other_articles`
--

CREATE TABLE `other_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `other_articles`
--

INSERT INTO `other_articles` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
(2, 'LA REALIDAD AUMENTADA EN COMERCIALIZACIÓN DE  PRODUCTOS PARA EL HOGAR: CRECIMIENTO Y  TENDENCIAS EN COLOMBIA', 'La realidad aumentada tiene como objetivo integrar el mundo real con el mundo digital, representando \r\nobjetos del mundo real a través de modelos 3D que una vez trasladados al plano digital permiten una fácil \r\ninteracción entre ambos mundos. Esta tecnología ha surgido como uno de los mayores avances dentro de la \r\nllamada revolución industrial 4.0 que no es más que la digitalización de las industrias para optimizar sus procesos \r\ny ha permitido obtener grandes aportes y beneficios en el camino a la digitalización de las diferentes empresas a \r\ntravés de uso de entornos virtuales o de realidad aumentada para brindar información, conocimiento y mejor \r\nexperiencia de interacción a clientes e interesados. En la presente investigación se hace un estudio sobre lo que ha \r\nrepresentado la realidad aumentada, su tendencia y relación con respecto al marketing de productos para el hogar\r\nen Colombia. La metodología utilizada fue de tipo exploratorio acompañado de tres etapas de investigación. Como \r\nresultado se obtuvieron indicadores donde se resalta el incremento del uso de la tecnología, especialmente los \r\nteléfonos inteligentes, para la compra de productos para el hogar determinando la necesidad creciente en las \r\ndecisiones de los consumidores.', 'others-article/other article-1662332123.pdf', '2022-09-05 03:55:23', '2022-09-05 03:55:23'),
(3, 'EMPRENDIMIENTO DIGITAL “SOMOS UNO”, PARA LA GESTIÓN DEL SEGUIMIENTO Y CONSOLIDACIÓN EN IGLESIAS CRISTIANAS.', 'A continuación se presenta un emprendimiento digital, que se elaboró desde la convocatoria de la Iteración IX de App.co\r\ny el MINTIC, basado en datos reales, tomados de un estudio de mercado realizado en la ciudad de Valledupar. Se inició\r\ncon el auge que presenta la iglesia cristiana en Colombia, el uso de tecnología por parte de estas organizaciones y la\r\nidentificación de los problemas presentados al momento de tener control y acceso a la información. Se utilizó la\r\nmetodología de Descubrimiento de Negocios planteada por App.co donde se realizó entrevista a 30 iglesias en la ciudad\r\nde Valledupar para validar la hipótesis que inicialmente fue planteada, dada la problemática encontrada.\r\nConsecutivamente se validaron las diferentes hipótesis generadas y se inició el desarrollo de una propuesta de valor\r\nenfocada en penetrar el mercado local con proyecciones a nivel nacional. Como resultado de la investigación, se obtiene\r\nla plataforma web “Somos Uno”, que ha sido dada a conocer a cada iglesia que fue entrevistada, siendo adquirida por dos\r\niglesias cristianas. Los resultados fueron satisfactorios y de gran impacto social.', 'others-article/other article-1662332180.pdf', '2022-09-05 03:56:20', '2022-09-05 03:56:20'),
(4, 'La investigación aplicada en la sociedad de la información', 'La investigación básica, la investigación aplicada y su desarrollo \r\nexperimental, son opciones que son determinadas por el desarrollo \r\nsocio económico de un país. Los índices y las estadísticas son \r\ncoherentes. Pocos países de América latina disponen de los científicos \r\ny los recursos para hacer investigación básica, pero sí de académicos \r\ne investigadores para hacer las dos últimas actividades técnico \r\ncientíficas de la citada taxonomía.', 'others-article/other article-1662332322.pdf', '2022-09-05 03:58:42', '2022-09-05 03:58:42'),
(5, 'MEMORIAS DEL SEGUNDO SIMPOSIO DE INVESTIGACIÓN, INNOVACIÓN, DESARROLLO TECNOLÓGICO', 'Los cambios en la forma de hacer las cosas \r\nhoy en día, reflejan la influencia que la \r\ninnovación y la tecnología ejercen sobre el \r\ndiario vivir de las personas en la tierra. Hoy, \r\nel hombre se ve con una mayor necesidad de \r\npreparación y cada vez, será mayor la \r\nexigencia que el mercado laboral tendrá. \r\nQuienes se preparan para laborar y \r\nemprender, deberán ser conscientes de esos \r\ncambios y serán protagonistas de su \r\nformación para enfrentar el quehacer en una \r\ncompetencia fuerte y completamente \r\ntecnológica.', 'others-article/other article-1662332409.pdf', '2022-09-05 04:00:09', '2022-09-05 04:00:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('geilerelias@gmail.com', '$2y$10$zIY7JJNTfOVWScMWy4ZIpujv2aVe5IcIHBCRUg5LcVv74upbE2fwK', '2022-02-01 21:58:13'),
('geilerelias@gmail.com', '$2y$10$zIY7JJNTfOVWScMWy4ZIpujv2aVe5IcIHBCRUg5LcVv74upbE2fwK', '2022-02-01 21:58:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(23, 'edit articles', 'sanctum', '2022-01-04 13:28:29', '2022-01-04 13:28:29'),
(24, 'edit notices', 'sanctum', '2022-01-04 13:31:55', '2022-01-04 13:31:55'),
(25, 'view dashboard', 'sanctum', '2022-01-04 13:32:03', '2022-01-04 13:32:03'),
(26, 'create rol', 'sanctum', '2022-01-04 13:32:12', '2022-01-04 13:32:12'),
(27, 'edit rol', 'sanctum', '2022-01-04 13:32:21', '2022-01-04 15:03:40'),
(28, 'view notices', 'sanctum', '2022-01-04 13:32:33', '2022-01-04 13:32:33'),
(29, 'view services', 'sanctum', '2022-01-04 13:32:44', '2022-01-04 13:32:44'),
(30, 'view gallery', 'sanctum', '2022-01-04 13:32:53', '2022-01-04 13:32:53'),
(31, 'view user', 'sanctum', '2022-01-04 13:33:01', '2022-01-04 13:33:01'),
(32, 'view person', 'sanctum', '2022-01-04 13:33:12', '2022-01-04 13:33:12'),
(33, 'view rol', 'sanctum', '2022-01-04 13:33:22', '2022-01-04 15:03:47'),
(34, 'view permission', 'sanctum', '2022-01-04 13:33:33', '2022-01-04 13:33:33'),
(35, 'edit person', 'sanctum', '2022-01-04 13:33:45', '2022-01-04 13:33:45'),
(36, 'destroy person', 'sanctum', '2022-01-04 13:33:58', '2022-01-04 13:33:58'),
(37, 'create person', 'sanctum', '2022-01-04 13:34:07', '2022-01-04 13:34:07'),
(38, 'example', 'sanctum', '2022-01-04 14:11:12', '2022-01-04 14:11:12'),
(39, 'assign permissions', 'sanctum', '2022-01-04 15:02:26', '2022-01-04 15:02:26'),
(40, 'get permissions', 'sanctum', '2022-01-04 15:02:49', '2022-01-04 15:02:49'),
(41, 'destroy rol', 'sanctum', '2022-01-04 15:04:15', '2022-01-04 15:04:15'),
(42, 'assign roles', 'sanctum', '2022-01-05 02:25:27', '2022-01-05 02:25:27'),
(43, 'remove roles', 'sanctum', '2022-01-05 02:25:59', '2022-01-05 02:25:59'),
(44, 'view project', 'sanctum', '2022-02-03 10:18:41', '2022-02-03 10:18:41'),
(45, 'view articles', 'sanctum', '2022-02-03 10:19:56', '2022-02-03 10:19:56'),
(46, 'view about', 'sanctum', '2022-02-03 10:20:07', '2022-02-03 10:20:07'),
(23, 'edit articles', 'sanctum', '2022-01-04 13:28:29', '2022-01-04 13:28:29'),
(24, 'edit notices', 'sanctum', '2022-01-04 13:31:55', '2022-01-04 13:31:55'),
(25, 'view dashboard', 'sanctum', '2022-01-04 13:32:03', '2022-01-04 13:32:03'),
(26, 'create rol', 'sanctum', '2022-01-04 13:32:12', '2022-01-04 13:32:12'),
(27, 'edit rol', 'sanctum', '2022-01-04 13:32:21', '2022-01-04 15:03:40'),
(28, 'view notices', 'sanctum', '2022-01-04 13:32:33', '2022-01-04 13:32:33'),
(29, 'view services', 'sanctum', '2022-01-04 13:32:44', '2022-01-04 13:32:44'),
(30, 'view gallery', 'sanctum', '2022-01-04 13:32:53', '2022-01-04 13:32:53'),
(31, 'view user', 'sanctum', '2022-01-04 13:33:01', '2022-01-04 13:33:01'),
(32, 'view person', 'sanctum', '2022-01-04 13:33:12', '2022-01-04 13:33:12'),
(33, 'view rol', 'sanctum', '2022-01-04 13:33:22', '2022-01-04 15:03:47'),
(34, 'view permission', 'sanctum', '2022-01-04 13:33:33', '2022-01-04 13:33:33'),
(35, 'edit person', 'sanctum', '2022-01-04 13:33:45', '2022-01-04 13:33:45'),
(36, 'destroy person', 'sanctum', '2022-01-04 13:33:58', '2022-01-04 13:33:58'),
(37, 'create person', 'sanctum', '2022-01-04 13:34:07', '2022-01-04 13:34:07'),
(38, 'example', 'sanctum', '2022-01-04 14:11:12', '2022-01-04 14:11:12'),
(39, 'assign permissions', 'sanctum', '2022-01-04 15:02:26', '2022-01-04 15:02:26'),
(40, 'get permissions', 'sanctum', '2022-01-04 15:02:49', '2022-01-04 15:02:49'),
(41, 'destroy rol', 'sanctum', '2022-01-04 15:04:15', '2022-01-04 15:04:15'),
(42, 'assign roles', 'sanctum', '2022-01-05 02:25:27', '2022-01-05 02:25:27'),
(43, 'remove roles', 'sanctum', '2022-01-05 02:25:59', '2022-01-05 02:25:59'),
(44, 'view project', 'sanctum', '2022-02-03 10:18:41', '2022-02-03 10:18:41'),
(45, 'view articles', 'sanctum', '2022-02-03 10:19:56', '2022-02-03 10:19:56'),
(46, 'view about', 'sanctum', '2022-02-03 10:20:07', '2022-02-03 10:20:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `published_articles`
--

CREATE TABLE `published_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `year` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `ed` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `published_articles`
--

INSERT INTO `published_articles` (`id`, `title`, `description`, `year`, `country`, `isbn`, `ed`, `link`, `file`, `created_at`, `updated_at`) VALUES
(1, 'INNOVACIÓN Y ECOSISTEMA EMPRENDEDOR: Construyendo una sociedad emprendedora', 'El Congreso Internacional de Emprendimiento, organizado por AFIDE, en su cuarta\r\nedición, ha contado con la colaboración estratégica de la Universidad de la República de\r\nUruguay y su programa Emprenur. Este Congreso Internacional sobre “Innovación y\r\nEcosistema Emprendedor: Construyendo una sociedad emprendedora” pretende\r\nadentrarse y reflexionar en nuevas perspectivas, tanto desde el punto de vista teórico,\r\nmetodológico, como práctico y auspiciado por las diferentes disciplinas que le asisten:\r\neconomía, sociología, psicología, antropología, ingeniería, etc. En ello hemos centrado\r\nnuestros esfuerzos.', '2016-04', 'Uruguay', '978-8408-317-7', '1.ª edición: Santiago de Compostela, de 2017', NULL, 'published-articles/article-1662929916.pdf', '2022-09-12 01:58:36', '2022-09-12 01:58:36'),
(3, '\"Modelo de seguridad de la información bajo los principios de Gobierno TI para el sector industrial manufacturero.¨', 'En el presente artículo se propone un modelo de seguridad de la información bajo los principios de Gobierto TI para el sector industrial manufacturero. La investigación inició con un análisis de los estándares requeridos para poder alinear la tecnología de la información al direccionamiento estratégico de la empresa; verificando de esta manera, los esquemas más aplicables para la estructuración del modelo. Posteriormente, se utilizó una metodología de tipo cuantitativo con un alcance descriptivo, que permitió definir el modelo con el objetivo de garantizar la confidencialidad, integridad y disponibilidad de la información. El modelo fue validado satisfactoriamente por expertos del tema garantizando su aplicabilidad.', '2023-12', 'Colombia', 'ISSN: 2011-642X - E-ISSN: 2389-864X', 'Revista Ingenio', 'https://revistas.ufps.edu.co/index.php/ingenio/article/view/3808/5204', 'published-articles/article-1706388250.pdf', '2024-01-28 01:44:10', '2024-01-28 01:44:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'sanctum', NULL, NULL),
(2, 'user', 'sanctum', NULL, NULL),
(5, 'student', 'sanctum', NULL, NULL),
(1, 'admin', 'sanctum', NULL, NULL),
(2, 'user', 'sanctum', NULL, NULL),
(5, 'student', 'sanctum', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4XbxyZyrsWpbdWPgNIp12iqOODu9nOZKpYfxAd6S', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVc3RDNRd3E1eGh4dmJyZldKRXB6U3RzTGE3cFNIcTNyTmZsTmQ5ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748570585),
('82xQMVbcE1HT5lut5srapnnE58c1tIVLizAM8u7q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1V1WWE4QnpCa3FYOExaOFRSWVF1R21zUG5ld2E4Y1BkYWZabUZnTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748736467),
('9vbLKLr76UQn3xvM9N2mzI6Q5dsfJuuqk2A0YJb1', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVExZRWU4VThROWgzRFRXeUtHRFA1RktKT0RLUmtqTDd4Y1U3cnpXYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkWGVtdktZdVlQTzVmWGMvR0tJSWhNdXczaE1scWovOWgydHd6QmM3bjlXRmxjWkVKdXYwQXEiO3M6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJFhlbXZLWXVZUE81ZlhjL0dLSUloTXV3M2hNbHFqLzloMnR3ekJjN245V0ZsY1pFSnV2MEFxIjt9', 1748838031),
('awna8UvcElpCLrhW4lYUFC7izJjzLBthz0v2TIeK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMGRpaWZNTFVwandZR29qODNobkg1WWI4S2ljMldWSzdtWGtHRkw1SiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749062734),
('D6HGtXlUOt33a83ycdAa39rYTixSTC82XTAylMy5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFFnMllad0ZyNkpRSWV1b0NETGE3Mm5YbEZUaDdlZTNKOTk1aHlsUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748684943),
('ebupOTjjDAsGhCYsiHZTTXsoF2I18purbCPrb612', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQURtOThJeHlnS0E3Rm5tQzZmWEtwSXpFUDYzTTRpNkpaNDBiOTlxeCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJFhlbXZLWXVZUE81ZlhjL0dLSUloTXV3M2hNbHFqLzloMnR3ekJjN245V0ZsY1pFSnV2MEFxIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NoZWNrLWF1dGgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748875161),
('eHh4kHUTEzFWjGaEyVfmY9cgVQouFhF616LkbbOW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2hlaUtQa3ZVbkFLa2tCNW9RVzBZTDZZV2FTQ0xUMnZSNG5sbWJVUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749054465),
('f3znAq86IthnCQU7kQFxibBHiMjbkmNAqXSgzVwi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFB2M1h1dE93U3JNbFZiQVBCeHJsN1JjUHE3YzhLdUlsQkgxeFNseiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9zdG9yYWdlL25vdGljZXMvaW1hZ2UtMTY0NTAxOTE4OC5qcGciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748823484),
('FTdsd0gv47mB0DGfxm08iwUv3LN4uIj5g46M2F6I', NULL, '192.168.20.20', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2VQRTR1S09ScWIwdWliMlliMFpPaU9RdHRXa2Y4SHcydEt5RkRRaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xOTIuMTY4LjIwLjIwOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748965948),
('idSnoH1OQYPRbJAPiRD0JGWoRtt6JJW5e9m0KRm3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmp1SEU5R09VUXJQYXlmTUxBQmVxRzk3RTBiSnV2c3dlRm9FdzdObyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748974944),
('NXLNm6ieLbmIUew5FJPxVpuatj60zpmDTQ3WQ3Vm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWlhadFdIQzI2aEtuR1dPTDJMYWlMTHJiOHJ3WGRrMEViSkx0dlJPSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748992477),
('qJ16VNF2kgkl6h7b0UxM8Qje6rezk4iRUcmOS3Ag', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2xKVlJPZEhDQVhIeW1rejVZVXlXbGFXWUZDWEJqc0V4M3RncG80OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748464335),
('SY3W6jqgGrlbtLcw7N11oFOq5lVfNrrqq8Gxl6Ez', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia01xQXo0TVNlNHBMcFo3OWRuT3RxYmhISWdGUkpjQkhlUFhZNjdDaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748560677),
('x1d8SVbXQAVOa1TXe5Edi1URGjpeRAwltcEDcG0t', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMVRuMkRrZnhkSlV1MGdZWGdXMktKQXo3TzdteWxWTjVCTzJuRFIwQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zZXJ2aWNlcyI7fX0=', 1748965630),
('YhZQGW0rtm3k8qnjypnC5sLIwe8tTvFG3Tpamx1a', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUVl6ZmwwYmo2a0R1SjVMdlFid1lONVNuUzFTUTBBaHpFMzBub3NaTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748992476),
('YjEzC8lf8yPlJhLb35req7FTMKlmK0GjjTFfxMVl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNlJCRWNSZGhKNGFuQzQyQmxZN2tpM0d0TEpkM2huQXNudEp2Y1RvZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748832869),
('YpF9mxGtFnrUy6kXURSNDajk2CLXSJiSKNzIvrcv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQlpuY1RyVFZWa2V0dXBEa2NlWnBWMFhzdFNXUXR5UGJCRGZOOEc2UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748734405);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `entity` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Geiler\'s Team', 1, '2022-01-28 06:10:58', '2022-01-28 06:10:58'),
(2, 2, 'Ledis\'s Team', 1, '2022-01-30 06:16:53', '2022-01-30 06:16:53'),
(3, 3, 'Usuario\'s Team', 1, '2022-01-30 06:20:34', '2022-01-30 06:20:34'),
(4, 4, 'example\'s Team', 1, '2022-01-30 06:25:39', '2022-01-30 06:25:39'),
(5, 5, 'other\'s Team', 1, '2022-01-30 06:28:12', '2022-01-30 06:28:12'),
(6, 6, 'Jenis\'s Team', 1, '2022-02-01 22:57:47', '2022-02-01 22:57:47'),
(7, 7, 'Juanchopolo\'s Team', 1, '2022-11-23 03:00:59', '2022-11-23 03:00:59'),
(8, 8, 'anonymo\'s Team', 1, '2024-08-23 02:39:49', '2024-08-23 02:39:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `theses`
--

CREATE TABLE `theses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `entity` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `people` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Geiler Elias Radillo', 'geilerelias@gmail.com', '2022-02-01 21:51:25', '$2y$10$hbKeAU3Igey74jGsSd.7BeUhUP5r7NfwGTI8FDyZDbJlPecuvlZfm', NULL, NULL, 'qjb0YNHWCGA9Jn8IoRFzDTmj9kWEJnp4GI5Qu6QmGUVYwDC7LhaJ3cojtTVw', 1, NULL, '2022-01-28 06:10:57', '2022-02-01 21:51:25'),
(2, 'Ledis Sarmiento', 'ledisbersage@gmail.com', NULL, '$2y$10$6YpVCIhouQIsLhZNeE2my.E8lTdXEtMRqmSpUIkEVMM7hWzlbhjkW', NULL, NULL, 'sxwkcUYq6X8GSKk3aN1B1dJrkJbCOg4G8Y3z1uniRcughFdcHUM5pFQ0j34k', 2, NULL, '2022-01-30 06:16:53', '2022-01-30 06:17:18'),
(3, 'Usuario comun', 'user@mail.com', NULL, '$2y$10$Z3OiDDfwPyEuKHKQ60PlLuHlUItGDNIddv2Gx5dzjENjl2o5QMcKq', NULL, NULL, NULL, 3, NULL, '2022-01-30 06:20:34', '2022-01-30 06:25:03'),
(4, 'example', 'example@mail.com', NULL, '$2y$10$8WB1kdJUz/NrjNJ62WEYXOTOwAVUM8KADgYYgY.aCA/NmZ159TpLS', NULL, NULL, NULL, 4, NULL, '2022-01-30 06:25:39', '2022-01-30 06:27:09'),
(5, 'other user', 'otheruser@mail.com', NULL, '$2y$10$sGpywhfNyf/tEhZGg1kwjOtzNcQvrQtXtTy1PSpmrNuQkViKZc2PS', NULL, NULL, NULL, 5, NULL, '2022-01-30 06:28:12', '2022-01-30 06:28:16'),
(6, 'Jenis Sagbini', 'contacto@jenissagbini.com', '2022-02-01 22:58:14', '$2y$10$oFsOHaxcTtvENDQB4aVZgObdecwaCLbfvqbplQA0Q3es0JiYuTOl.', NULL, NULL, 'Xs0PDPy7NnbZoUlD3P0CLnaDb5GS2ZDNAag0fqMDO8ixrLsTvQGovWTihDSU', 6, NULL, '2022-02-01 22:57:47', '2022-02-05 16:42:59'),
(7, 'Juanchopolo', 'Juanchopolo@gmail.com', NULL, '$2y$10$yCk.aIe/2MPDE6tStr/dXOA68XtkR7WUQ.v.fHkyaG9jFJs69cVFO', NULL, NULL, NULL, NULL, NULL, '2022-11-23 03:00:59', '2022-11-23 03:00:59'),
(8, 'anonymo', 'memate7381@amxyy.com', NULL, '$2y$10$CKaXEdAECHFeiBptoMmWTeJ0JBxr8EU0KXNzXFW8fdWAwY1ygkOQm', NULL, NULL, NULL, NULL, NULL, '2024-08-23 02:39:49', '2024-08-23 02:39:49'),
(9, 'Geiler Elias Radillo Sarmiento', 'geilerelias@mail.com', NULL, '$2y$12$XemvKYuYPO5fXc/GKIIhMuw3hMlqj/9h2twzBc7n9WFlcZEJuv0Aq', NULL, NULL, 'aLlTniKhIReoGcIgFxj0Eb4XlJjlN0f3BOr5nsbavRXk149M5mUSS6EYoffk', NULL, NULL, '2025-05-27 22:19:47', '2025-05-27 22:19:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_course_id_foreign` (`course_id`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_user_user_id_foreign` (`user_id`),
  ADD KEY `course_user_course_id_foreign` (`course_id`);

--
-- Indices de la tabla `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrepreneurships`
--
ALTER TABLE `entrepreneurships`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `juries`
--
ALTER TABLE `juries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `other_articles`
--
ALTER TABLE `other_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `published_articles`
--
ALTER TABLE `published_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indices de la tabla `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indices de la tabla `theses`
--
ALTER TABLE `theses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entrepreneurships`
--
ALTER TABLE `entrepreneurships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `juries`
--
ALTER TABLE `juries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `other_articles`
--
ALTER TABLE `other_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `published_articles`
--
ALTER TABLE `published_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `theses`
--
ALTER TABLE `theses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Filtros para la tabla `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
