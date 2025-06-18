-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2025 a las 20:44:01
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
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('jenissagbini_cache_1df52b5c9b30bc844adf951db5629bff', 'i:1;', 1749145476),
('jenissagbini_cache_1df52b5c9b30bc844adf951db5629bff:timer', 'i:1749145476;', 1749145476),
('jenissagbini_cache_861ce00ec5d1f3a4e6be8c1c5d736a7d', 'i:1;', 1749137980),
('jenissagbini_cache_861ce00ec5d1f3a4e6be8c1c5d736a7d:timer', 'i:1749137980;', 1749137980),
('jenissagbini_cache_geradillosarmiento@gmail.com|192.168.20.36', 'i:1;', 1749137980),
('jenissagbini_cache_geradillosarmiento@gmail.com|192.168.20.36:timer', 'i:1749137980;', 1749137980),
('jenissagbini_cache_visit_/_127.0.0.1', 'b:1;', 1749138247),
('jenissagbini_cache_visit_/_192.168.20.36', 'b:1;', 1749139965),
('jenissagbini_cache_visit_about_192.168.20.36', 'b:1;', 1749139968),
('jenissagbini_cache_visit_admin/business/all_192.168.20.36', 'b:1;', 1749140079),
('jenissagbini_cache_visit_admin/entrepreneurship/all_192.168.20.36', 'b:1;', 1749140078),
('jenissagbini_cache_visit_admin/jury/all_192.168.20.36', 'b:1;', 1749140079),
('jenissagbini_cache_visit_admin/notices/all_127.0.0.1', 'b:1;', 1749138253),
('jenissagbini_cache_visit_admin/notices/all_192.168.20.36', 'b:1;', 1749139375),
('jenissagbini_cache_visit_admin/software/all_192.168.20.36', 'b:1;', 1749140078),
('jenissagbini_cache_visit_admin/thesis/all_192.168.20.36', 'b:1;', 1749140079),
('jenissagbini_cache_visit_articles_192.168.20.36', 'b:1;', 1749140087),
('jenissagbini_cache_visit_contact_192.168.20.36', 'b:1;', 1749139846),
('jenissagbini_cache_visit_dashboard_192.168.20.36', 'b:1;', 1749139881),
('jenissagbini_cache_visit_login_192.168.20.36', 'b:1;', 1749139365),
('jenissagbini_cache_visit_projects_192.168.20.36', 'b:1;', 1749140077),
('jenissagbini_cache_visit_register_192.168.20.36', 'b:1;', 1749139726),
('jenissagbini_cache_visit_services_192.168.20.36', 'b:1;', 1749140090),
('jenissagbini_cache_visit_statistics_127.0.0.1', 'b:1;', 1749139424),
('jenissagbini_cache_visit_user/profile_192.168.20.36', 'b:1;', 1749139787);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
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
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2020_05_21_100000_create_teams_table', 1),
(5, '2020_05_21_200000_create_team_user_table', 1),
(6, '2022_08_19_174103_create_courses_table', 1),
(7, '2022_08_19_175551_create_contents_table', 1),
(8, '2022_08_23_221700_create_course_user_table', 1),
(9, '2022_09_04_052706_create_books_table', 1),
(10, '2022_09_24_135337_create_notices_table', 1),
(11, '2022_10_10_141143_create_entrepreneurships_table', 1),
(12, '2022_10_10_141220_create_software_table', 1),
(13, '2022_10_10_141258_create_businesses_table', 1),
(14, '2022_10_10_141356_create_theses_table', 1),
(15, '2022_10_10_141411_create_juries_table', 1),
(16, '2022_10_13_160524_create_published_articles_table', 1),
(17, '2022_10_18_144840_create_documents_table', 1),
(18, '2022_10_18_192148_create_abouts_table', 1),
(19, '2022_10_18_213021_create_other_articles_table', 1),
(20, '2025_04_15_160601_add_two_factor_columns_to_users_table', 1),
(21, '2025_04_15_160651_create_personal_access_tokens_table', 1),
(22, '2025_06_04_193024_create_permission_tables', 1),
(28, '2025_06_04_193806_create_visits_table', 2),
(29, '2025_06_06_001151_create_subjects_table', 2),
(30, '2025_06_06_001313_create_subject_user_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`, `team_id`) VALUES
(1, 'App\\Models\\User', 1, 0),
(1, 'App\\Models\\User', 6, 0);

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
(5, 'notices/image-1644036270.jpg', 'Conferencia internacional \"empresas 4.0\"', 'Cuenca, Ecuador.', '2020-07-22', '14:00', '<p><span style=\"color: rgb(5, 5, 5);\">El pasado 22 de julio de 2020, la Ingeniera Jenis del Carmen Sagbini Echávez dió la Conferencia \'Empresas 4.0\' en el Seminario Internacional de Innovación Real, Universidad del Azuay, Cuenca, Ecuador.</span></p>', NULL, '2022-02-05 09:44:30', '2022-02-05 09:44:30'),
(6, 'notices/image-1645019188.jpg', 'Diplomado \"Transformación Digital de Negocios\"', 'Valledupar', '2020-09-10', '14:00', '<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">El 10 de septiembre de 2020, en el auditorio Leandro Díaz de la Cámara de Comercio de Valledupar, la ingeniera Jenis del Carmen Sagbini Echávez </span><span style=\"color: rgb(0, 0, 0); letter-spacing: 0.1px;\">entregó los certificados del </span><span style=\"background-color: transparent; color: rgb(0, 0, 0); letter-spacing: 0.00714286em;\">diplomado de TRANSFORMACION DIGITAL DE NEGOCIOS a todos los  empresarios y trabajadores de empresas privadas y públicas de la ciudad, que culminaron satisfactoriamente la formación de dicha temática.</span></p><p><br></p>', 'null', '2022-02-05 09:46:36', '2022-02-16 18:46:28'),
(7, 'notices/image-1644036533.jpg', 'Reconocimiento', 'Valledupar', '2019-12-17', '20:00', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">El 17 de diciembre de 2019, la Universidad Francisco de Paula Santander sede Ocaña, durante el Encuentro de Egresados de Auditoría de Sistemas, dió reconocimiento a la ingeniera Jenis del Carmen Sagbini Echávez por sus logros de impacto internacional.&nbsp; </span></p>', NULL, '2022-02-05 09:48:53', '2022-02-05 09:48:53'),
(8, 'notices/image-1644036685.jpg', 'Taller “Habilidades Gerenciales para Ingenieros”', 'Valledupar', '2019-03-14', '08:01', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">El 14 de marzo de 2019, en la Universidad de Santander UDES de Valledupar, se llevó a cabo el Taller “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Habilidades Gerenciales para Ingenieros</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">” dirigido a egresados del programa de Ingeniería Industrial. </span></p>', 'null', '2022-02-05 09:50:47', '2022-02-05 09:51:25'),
(9, 'notices/image-1644036811.jpg', 'Curso “Uso de las TIC en Madres Comunitarias”', 'Valledupar', '2020-03-14', '14:00', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">El&nbsp; 14 de marzo de 2019, en las instalaciones del ICBF, se llevó a cabo la ceremonia de graduación de aquellas Madres Comunitarias que lograron los resultados de aprendizaje en el curso “</span><em style=\"background-color: transparent; color: rgb(0, 0, 0);\">Uso de las Tecnologías de la Información y la Comunicación TIC</em><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">”. &nbsp; </span></p>', NULL, '2022-02-05 09:53:31', '2022-02-05 09:53:31'),
(10, 'notices/image-1644036914.jpg', 'Premio a la “Mejor Ponencia”', 'Valledupar', '2018-10-18', '14:00', '<p><span style=\"color: rgb(28, 30, 33);\">SENA, 18 de Octubre de 2018. El proyecto EMPRENDIMIENTO DIGITAL \"SOMOS UNO\" reconocida como Mejor Ponencia en III Simposio de Investigación, Innovación y Desarrollo Tecnológico! Centro de Operación y Mantenimiento Minero COMM SENA Cesar, en el Centro de Convenciones Crispín Villazón de Armas. Proyecto presentado por Aldair Nuñez Florian y orientado por Jenis Sagbini Echávez.</span></p>', NULL, '2022-02-05 09:55:14', '2022-02-05 09:55:14'),
(11, 'notices/image-1679785074.jpeg', 'Diplomado de gestión y desarrollo en la tecnología', 'Valledupar - Colombia', '2023-03-15', '17:00', '<p>Durante el mes de marzo 2023, en la Cámara de Comercio de Valledupar, la ingeniera Jenis Sagbini enseñó los módulos ¨Introducción al Desarrollo Tecnológico¨ y ¨Procesos de Desarrollo Tecnológico¨ en el <strong>Diplomado de Gestión y Desarrollo de las Tecnologías.</strong> Esta formación fue dirigida a los empresarios, trabajadores, estudiantes universitarios, docentes universitarios y pequeños emprendedores como una contribución más al desarrollo del talento humano cesarense. Haciendo a la gente exitosa en un mundo cambiante!</p>', 'null', '2023-03-26 03:32:35', '2023-03-26 03:57:54'),
(12, 'notices/image-1679784934.jpeg', 'Diplomado en innovación empresarial', 'Valledupar', '2023-03-25', '08:00', '<p>El 25 de marzo de 2023,  la Ingeniera Jenis Sagbini enseñó el módulo&nbsp;¨El rol de las Tecnologías en la Innovación Empresarial¨ en el <strong>Diplomado en Innovación Empresarial.</strong> Esta formación fue dirigida a los empresarios, trabajadores, estudiantes universitarios, docentes universitarios y pequeños emprendedores como una contribución más al desarrollo del talento humano. Haciendo a la gente exitosa en un mundo cambiante!</p>', 'null', '2023-03-26 03:54:03', '2023-03-26 03:55:34'),
(13, 'notices/image-1706374170.jpg', 'MASTER CLASS \"Tendencias Tecnológicas Emergentes y su impacto en empresas de base tecnológicas\"', 'Valledupar', '2023-07-19', '16:00', '<p>A través del programa Versos 2.0, la ingeniera Jenis Sagbini desarrolló una Master Class titulada: \"Tendencias Tecnológicas Emergentes y su Impacto en Empresas de Base Tecnológicas\". La audiencia estuvo conformada por empresarios y emprendedores adscritos a la Cámara de Comercio de Valledupar. Fue un espacio de conocimiento de experiencias y reflexión para aumentar la productividad en empresas locales!</p>', NULL, '2024-01-27 21:49:30', '2024-01-27 21:49:30'),
(14, 'notices/image-1725318818.jpeg', 'Socialización del “Diplomado en Tecnología y Programación” ante los estudiantes beneficiados en Valledupar.', 'Valledupar, Cesar.', '2024-08-27', '10:00', '<p>La ingeniera <strong>Jenis Sagbini Echávez</strong> presentó el “<strong>Diplomado en Tecnología y Programación</strong>” a 100 estudiantes seleccionados de los colegios <strong>INSTPECAM, CASD y Alfonso López en Valledupar</strong>. Este diplomado es parte de un convenio interadministrativo <strong>entre la Gobernación del Cesar y la Universidad Popular del Cesar</strong>, con el objetivo de enseñar habilidades digitales como<strong> Programación WEB, Programación Móvil, Analítica de Datos y Seguridad Informática</strong>, ayudando a reducir la brecha digital en la región. En el evento participaron Álvaro Oñate, Director del Programa de Ingeniería de Sistemas, egresados del programa de Ingeniería de Sistemas, la Secretaria de Educación, Miguel Aroca, Asesor TIC del Departamento del Cesar, y rectores de los colegios.</p>', NULL, '2024-09-03 04:13:38', '2024-09-03 04:13:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `other_articles`
--

CREATE TABLE `other_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `other_articles`
--

INSERT INTO `other_articles` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
(2, 'LA REALIDAD AUMENTADA EN COMERCIALIZACIÓN DE  PRODUCTOS PARA EL HOGAR: CRECIMIENTO Y  TENDENCIAS EN COLOMBIA', 'La realidad aumentada tiene como objetivo integrar el mundo real con el mundo digital, representando \r\nobjetos del mundo real a través de modelos 3D que una vez trasladados al plano digital permiten una fácil \r\ninteracción entre ambos mundos. Esta tecnolo', 'others-article/other article-1662332123.pdf', '2022-09-05 03:55:23', '2022-09-05 03:55:23'),
(3, 'EMPRENDIMIENTO DIGITAL “SOMOS UNO”, PARA LA GESTIÓN DEL SEGUIMIENTO Y CONSOLIDACIÓN EN IGLESIAS CRISTIANAS.', 'A continuación se presenta un emprendimiento digital, que se elaboró desde la convocatoria de la Iteración IX de App.co\r\ny el MINTIC, basado en datos reales, tomados de un estudio de mercado realizado en la ciudad de Valledupar. Se inició\r\ncon el auge que', 'others-article/other article-1662332180.pdf', '2022-09-05 03:56:20', '2022-09-05 03:56:20'),
(4, 'La investigación aplicada en la sociedad de la información', 'La investigación básica, la investigación aplicada y su desarrollo \r\nexperimental, son opciones que son determinadas por el desarrollo \r\nsocio económico de un país. Los índices y las estadísticas son \r\ncoherentes. Pocos países de América latina disponen d', 'others-article/other article-1662332322.pdf', '2022-09-05 03:58:42', '2022-09-05 03:58:42'),
(5, 'MEMORIAS DEL SEGUNDO SIMPOSIO DE INVESTIGACIÓN, INNOVACIÓN, DESARROLLO TECNOLÓGICO', 'Los cambios en la forma de hacer las cosas \r\nhoy en día, reflejan la influencia que la \r\ninnovación y la tecnología ejercen sobre el \r\ndiario vivir de las personas en la tierra. Hoy, \r\nel hombre se ve con una mayor necesidad de \r\npreparación y cada vez, s', 'others-article/other article-1662332409.pdf', '2022-09-05 04:00:09', '2022-09-05 04:00:09');

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
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(23, 'edit articles', 'sanctum', '2022-01-04 18:28:29', '2022-01-04 18:28:29'),
(24, 'edit notices', 'sanctum', '2022-01-04 18:31:55', '2022-01-04 18:31:55'),
(25, 'view dashboard', 'sanctum', '2022-01-04 18:32:03', '2022-01-04 18:32:03'),
(26, 'create rol', 'sanctum', '2022-01-04 18:32:12', '2022-01-04 18:32:12'),
(27, 'edit rol', 'sanctum', '2022-01-04 18:32:21', '2022-01-04 20:03:40'),
(28, 'view notices', 'sanctum', '2022-01-04 18:32:33', '2022-01-04 18:32:33'),
(29, 'view services', 'sanctum', '2022-01-04 18:32:44', '2022-01-04 18:32:44'),
(30, 'view gallery', 'sanctum', '2022-01-04 18:32:53', '2022-01-04 18:32:53'),
(31, 'view user', 'sanctum', '2022-01-04 18:33:01', '2022-01-04 18:33:01'),
(32, 'view person', 'sanctum', '2022-01-04 18:33:12', '2022-01-04 18:33:12'),
(33, 'view rol', 'sanctum', '2022-01-04 18:33:22', '2022-01-04 20:03:47'),
(34, 'view permission', 'sanctum', '2022-01-04 18:33:33', '2022-01-04 18:33:33'),
(35, 'edit person', 'sanctum', '2022-01-04 18:33:45', '2022-01-04 18:33:45'),
(36, 'destroy person', 'sanctum', '2022-01-04 18:33:58', '2022-01-04 18:33:58'),
(37, 'create person', 'sanctum', '2022-01-04 18:34:07', '2022-01-04 18:34:07'),
(38, 'example', 'sanctum', '2022-01-04 19:11:12', '2022-01-04 19:11:12'),
(39, 'assign permissions', 'sanctum', '2022-01-04 20:02:26', '2022-01-04 20:02:26'),
(40, 'get permissions', 'sanctum', '2022-01-04 20:02:49', '2022-01-04 20:02:49'),
(41, 'destroy rol', 'sanctum', '2022-01-04 20:04:15', '2022-01-04 20:04:15'),
(42, 'assign roles', 'sanctum', '2022-01-05 07:25:27', '2022-01-05 07:25:27'),
(43, 'remove roles', 'sanctum', '2022-01-05 07:25:59', '2022-01-05 07:25:59'),
(44, 'view project', 'sanctum', '2022-02-03 15:18:41', '2022-02-03 15:18:41'),
(45, 'view articles', 'sanctum', '2022-02-03 15:19:56', '2022-02-03 15:19:56'),
(46, 'view about', 'sanctum', '2022-02-03 15:20:07', '2022-02-03 15:20:07');

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
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `team_id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'sanctum', NULL, NULL),
(2, NULL, 'user', 'sanctum', NULL, NULL),
(5, NULL, 'student', 'sanctum', NULL, NULL);

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
(25, 2),
(25, 5),
(26, 1),
(27, 1),
(28, 2),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(45, 2),
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
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('559I2pXeDcsBYJ0bMpHazxrUv1wFrjRw4hORd2sR', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiblZBbkRwTnh3NVhvRXVsNG50NFpyTHhaMnhnOTJnYWRJWGJzcjBmaCI7czo4OiJ2aXNpdF9pZCI7aToyNTtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vc3ViamVjdHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRMUk5kTjMwcmVVelh5L0Zzek13ZDcuVXprZmxRajRCYU5JZ3FXUmVER2szbm5lSHo4Q1dDSyI7fQ==', 1749600591),
('lyAzBGd9eMEQe4NayVUVzeDUkWPHnFnFqO75sBI9', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZ09pUzZsbmZaa2NmMVAySE14T2dBUTZaSE9lTktCY01KNFduMTF3cCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjg6InZpc2l0X2lkIjtpOjE1O3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vc3ViamVjdHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRMUk5kTjMwcmVVelh5L0Zzek13ZDcuVXprZmxRajRCYU5JZ3FXUmVER2szbm5lSHo4Q1dDSyI7fQ==', 1749503984);

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
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `description`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Ejemplo', 'Ejemplo', NULL, '2025-06-08 02:39:48', '2025-06-08 02:39:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject_user`
--

CREATE TABLE `subject_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
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
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Geiler Elias Radillo', 'geilerelias@gmail.com', '2022-02-01 21:51:25', '$2y$12$LRNdN30reUzXy/FszMwd7.UzkflQj4BaNIgqWReDGk3nneHz8CWCK', NULL, NULL, NULL, '6eZ3zCO9w1tdJS2tm4vZjPJoh5AG4IMzF4ZRmNb4d2jPC66uSbtNvQdGQw12', 1, NULL, '2022-01-28 06:10:57', '2025-06-05 18:28:03'),
(2, 'Ledis Sarmiento', 'ledisbersage@gmail.com', NULL, '$2y$10$6YpVCIhouQIsLhZNeE2my.E8lTdXEtMRqmSpUIkEVMM7hWzlbhjkW', NULL, NULL, NULL, 'sxwkcUYq6X8GSKk3aN1B1dJrkJbCOg4G8Y3z1uniRcughFdcHUM5pFQ0j34k', 2, NULL, '2022-01-30 06:16:53', '2022-01-30 06:17:18'),
(3, 'Usuario comun', 'user@mail.com', NULL, '$2y$10$Z3OiDDfwPyEuKHKQ60PlLuHlUItGDNIddv2Gx5dzjENjl2o5QMcKq', NULL, NULL, NULL, NULL, 3, NULL, '2022-01-30 06:20:34', '2022-01-30 06:25:03'),
(4, 'example', 'example@mail.com', NULL, '$2y$10$8WB1kdJUz/NrjNJ62WEYXOTOwAVUM8KADgYYgY.aCA/NmZ159TpLS', NULL, NULL, NULL, NULL, 4, NULL, '2022-01-30 06:25:39', '2022-01-30 06:27:09'),
(5, 'other user', 'otheruser@mail.com', NULL, '$2y$10$sGpywhfNyf/tEhZGg1kwjOtzNcQvrQtXtTy1PSpmrNuQkViKZc2PS', NULL, NULL, NULL, NULL, 5, NULL, '2022-01-30 06:28:12', '2022-01-30 06:28:16'),
(6, 'Jenis Sagbini', 'contacto@jenissagbini.com', '2022-02-01 22:58:14', '$2y$10$oFsOHaxcTtvENDQB4aVZgObdecwaCLbfvqbplQA0Q3es0JiYuTOl.', NULL, NULL, NULL, 'Xs0PDPy7NnbZoUlD3P0CLnaDb5GS2ZDNAag0fqMDO8ixrLsTvQGovWTihDSU', 6, NULL, '2022-02-01 22:57:47', '2022-02-05 16:42:59'),
(7, 'Juanchopolo', 'Juanchopolo@gmail.com', NULL, '$2y$10$yCk.aIe/2MPDE6tStr/dXOA68XtkR7WUQ.v.fHkyaG9jFJs69cVFO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-23 03:00:59', '2022-11-23 03:00:59'),
(8, 'anonymo', 'memate7381@amxyy.com', NULL, '$2y$10$CKaXEdAECHFeiBptoMmWTeJ0JBxr8EU0KXNzXFW8fdWAwY1ygkOQm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-23 02:39:49', '2024-08-23 02:39:49'),
(10, 'Geiler Radillo', 'geradillosarmiento@gmail.com', NULL, '$2y$12$axRqAozS4XtRBeElrqsGxOHA4dUbPMN1sfT3yjtLllqi1iMoeWVm.', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-05 20:39:46', '2025-06-05 20:39:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `url` varchar(255) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `visited_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `left_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `visits`
--

INSERT INTO `visits` (`id`, `ip_address`, `url`, `user_agent`, `visited_at`, `left_at`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-07 14:20:02', '2025-06-07 19:20:02', NULL, NULL),
(2, '127.0.0.1', 'statistics', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-07 14:21:13', '2025-06-07 19:21:13', NULL, NULL),
(3, '127.0.0.1', 'api/stats', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-07 14:21:15', '2025-06-07 19:21:15', NULL, NULL),
(4, '127.0.0.1', 'api/visitors', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-07 14:21:16', '2025-06-07 19:21:16', NULL, NULL),
(5, '127.0.0.1', 'diagnostic-db', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-07 14:33:12', '2025-06-07 19:33:12', NULL, NULL),
(6, '127.0.0.1', 'dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-07 21:47:59', '2025-06-08 02:47:59', NULL, NULL),
(7, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-08 02:06:36', '2025-06-08 07:06:36', NULL, NULL),
(8, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-08 02:14:13', '2025-06-08 07:14:13', NULL, NULL),
(9, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-08 02:15:58', '2025-06-08 07:15:58', NULL, NULL),
(10, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-08 02:34:08', '2025-06-08 07:34:08', NULL, NULL),
(11, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-08 05:18:05', '2025-06-08 10:18:05', NULL, NULL),
(12, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-09 17:26:41', '2025-06-09 22:26:41', NULL, NULL),
(13, '127.0.0.1', '/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-09 17:58:33', '2025-06-09 22:58:33', NULL, NULL),
(14, '127.0.0.1', 'admin/notices/all', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-09 17:58:46', '2025-06-09 22:58:46', NULL, NULL),
(15, '127.0.0.1', 'dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-09 21:19:44', '2025-06-10 02:19:44', NULL, NULL),
(16, '127.0.0.1', '/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-10 23:27:44', '2025-06-11 04:27:44', NULL, NULL),
(17, '127.0.0.1', 'admin/notices/all', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-10 23:28:14', '2025-06-11 04:28:14', NULL, NULL),
(18, '127.0.0.1', 'dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-10 23:28:22', '2025-06-11 04:28:22', NULL, NULL),
(19, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-10 23:56:26', '2025-06-11 04:56:26', NULL, NULL),
(20, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-11 00:08:49', '2025-06-11 05:08:49', NULL, NULL),
(21, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-11 00:08:54', '2025-06-11 05:08:54', NULL, NULL),
(22, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-11 00:09:21', '2025-06-11 05:09:21', NULL, NULL),
(23, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-11 00:09:30', '2025-06-11 05:09:30', NULL, NULL),
(24, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-11 00:09:32', '2025-06-11 05:09:32', NULL, NULL),
(25, '127.0.0.1', 'admin/subjects', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-11 00:09:51', '2025-06-11 05:09:51', NULL, NULL);

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
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

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
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`team_id`,`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  ADD KEY `model_has_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `model_has_permissions_team_foreign_key_index` (`team_id`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`team_id`,`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  ADD KEY `model_has_roles_role_id_foreign` (`role_id`),
  ADD KEY `model_has_roles_team_foreign_key_index` (`team_id`);

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
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_team_id_name_guard_name_unique` (`team_id`,`name`,`guard_name`),
  ADD KEY `roles_team_foreign_key_index` (`team_id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subject_user`
--
ALTER TABLE `subject_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_user_user_id_foreign` (`user_id`),
  ADD KEY `subject_user_subject_id_foreign` (`subject_id`),
  ADD KEY `subject_user_role_id_foreign` (`role_id`);

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
-- Indices de la tabla `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visits_ip_address_index` (`ip_address`),
  ADD KEY `visits_visited_at_index` (`visited_at`);

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
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subject_user`
--
ALTER TABLE `subject_user`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subject_user`
--
ALTER TABLE `subject_user`
  ADD CONSTRAINT `subject_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_user_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
