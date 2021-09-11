-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2021 a las 10:57:55
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliariahuertas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `idPictureBanner` int(11) NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `idCompany` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `idPictureBanner`, `status`, `dateCreate`, `idCompany`) VALUES
(1, 47, '1', '2021-06-30 22:31:53', 1),
(2, 48, '1', '2021-06-30 23:23:03', 1),
(3, 49, '1', '2021-08-16 09:54:55', 1),
(4, 50, '1', '2021-08-16 09:54:55', 1),
(5, 84, '0', '2021-09-05 21:20:53', 1),
(6, 85, '0', '2021-09-05 21:32:23', 1),
(7, 86, '0', '2021-09-05 21:33:56', 1),
(8, 87, '0', '2021-09-05 21:37:03', 1),
(9, 91, '0', '2021-09-06 02:23:02', 1),
(10, 92, '0', '2021-09-06 02:23:02', 1),
(11, 93, '0', '2021-09-06 02:23:02', 1),
(12, 94, '0', '2021-09-06 02:23:02', 1),
(13, 95, '0', '2021-09-06 02:24:58', 1),
(14, 96, '0', '2021-09-06 02:24:58', 1),
(15, 97, '0', '2021-09-06 02:24:58', 1),
(16, 98, '0', '2021-09-06 02:24:58', 1),
(17, 99, '0', '2021-09-06 02:24:58', 1),
(18, 127, '0', '2021-09-11 06:59:51', 1),
(19, 128, '0', '2021-09-11 06:59:51', 1),
(20, 129, '0', '2021-09-11 06:59:51', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `benefit`
--

CREATE TABLE `benefit` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `icono` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `showMenu` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '0',
  `slug` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `showMenu`, `slug`, `dateCreate`, `status`) VALUES
(1, 'General', '1', 'general', '2021-06-26 12:59:20', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charge`
--

CREATE TABLE `charge` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `idProperty` int(11) NOT NULL,
  `typeDocument` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT '0=DNI;1=CARNET ESTRANJERIA',
  `numberDocument` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `firstSurname` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lastSurname` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` int(11) NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientreferred`
--

CREATE TABLE `clientreferred` (
  `id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idProperty` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `firstSurname` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lastSurname` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colorstyle`
--

CREATE TABLE `colorstyle` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nameFile` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rute` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `colorstyle`
--

INSERT INTO `colorstyle` (`id`, `name`, `nameFile`, `url`, `rute`, `dateCreate`, `status`) VALUES
(1, 'Falcon', 'falcon.css', 'public/web/css/theme-colors/falcon.css', 'public/web/css/theme-colors/falcon.css', '2021-06-27 13:54:22', '1'),
(2, 'Olivar', 'olivar.css', 'public/web/css/theme-colors/olivar.css', 'public/web/css/theme-colors/olivar.css', '2021-06-27 13:54:22', '1'),
(3, 'Planicie Sur', 'planicie-sur.css', 'public/web/css/theme-colors/planicie-sur.css', 'public/web/css/theme-colors/planicie-sur.css', '2021-06-27 13:54:22', '1'),
(4, 'El Palmar de Surco', 'el-palmar-de-surco.css', 'public/web/css/theme-colors/el-palmar-de-surco.css', 'public/web/css/theme-colors/el-palmar-de-surco.css', '2021-06-27 13:54:22', '1'),
(5, 'Mercado Santa Rosa', 'mercado-santa-rosa.css', 'public/web/css/theme-colors/mercado-santa-rosa.css', 'public/web/css/theme-colors/mercado-santa-rosa.css', '2021-06-27 13:54:22', '1'),
(6, 'Condominio Oasis', 'olivar.css', 'public/web/css/theme-colors/olivar.css', 'public/web/css/theme-colors/olivar.css', '2021-08-24 08:42:50', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `icon` int(11) NOT NULL,
  `logo` int(11) NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `instagram` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `tiktok` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `linkedin` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `youtube` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `office_latitud` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `office_longitud` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `office_address` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`id`, `name`, `icon`, `logo`, `phone`, `facebook`, `instagram`, `tiktok`, `linkedin`, `youtube`, `office_latitud`, `office_longitud`, `office_address`) VALUES
(1, 'Inmobiliaria Huertas', 46, 1, '+51 984 403 239', 'https://www.facebook.com/huertas.inmobiliaria', 'https://instagram.com/huertas.inmobiliaria?utm_medium=copy_link', 'https://vm.tiktok.com/ZMdogLs77/', 'https://www.linkedin.com/company/huertas-inmobiliaria', 'https://www.youtube.com/channel/UCaBE6aiTJxrOYdtO2AGi8RQ', '-12.69175', '-76.635918', 'Av. Marchand mz 21 lote 21. A media cuadra del Mercado Principal de Mala.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deluxe`
--

CREATE TABLE `deluxe` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `description` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `location` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cover_image` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `from` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `until` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `images_ready` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `condo_title` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `condo_description` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `youtube` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `youtube_image` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `form_image` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `deluxe`
--

INSERT INTO `deluxe` (`id`, `title`, `description`, `location`, `cover_image`, `from`, `until`, `images_ready`, `condo_title`, `condo_description`, `youtube`, `youtube_image`, `form_image`) VALUES
(1, 'deluxee', 'descripcion deluxe', 'Asia - Chocaya', '/storage/imagenes/xyN7aYLzw33zaHqKDUT9g3iofVR52ilTr9WhAdQC.jpg', '120 m²', '180 m²', '[{},{},{},{},{}]', 'APOLO CONDOMINIO', 'El mejor lugar para gozar del mejor clima todo el año, favorecida con temperaturas cálidas, siempre tendrás una excusa para disfrutar de una parrilla con la familia, o de todo lo que puedes hacer al aire libre. Reserva tu cita hoy y vive la experiencia junto a Huertas Inmobiliaria.', 'ererEREEEWw', '/storage/imagenes/zOPUYBmYbpyaGTTsmCFORvBXOnHRyvZIGyjINQBo.png', '/storage/imagenes/Rp8ENWCu3e4KNbscTiu4ySkrhoxAwhIpntuvPqGM.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rute` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nameRute` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `typepage` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `type`, `rute`, `nameRute`, `typepage`, `description`, `dateCreate`, `status`) VALUES
(1, 'EL PALMAR DEL SUR.png', 'png', 'public/web/images/proyect/EL PALMAR DEL SUR.png', 'public/web/images/proyect/', 'MYPAGE', 'Imagen de proyecto', '2021-06-26 13:33:05', '1'),
(6, 'bbb', 'any', '/public/storage/imagenes/iW9FWxjZRBS9qvHSddrg4qE47Kyc8yzXOfuwIdLV.png', '/public/storage/imagenes/', 'DELUXE', '', '2021-09-11 07:51:18', '0'),
(7, 'bbb', 'any', '/public/storage/imagenes/EphvO0JtRkFKTQnNkCR2zHPzBQgynQVCdMrUHJD1.png', '/public/storage/imagenes/', 'DELUXE', '', '2021-09-11 07:51:19', '0'),
(8, 'bbb', 'any', '/public/storage/imagenes/tUgAKUbP9vrSOiGsHHSyWc9409tgc64zlsPlRz3S.png', '/public/storage/imagenes/', 'DELUXE', '', '2021-09-11 07:51:19', '0'),
(9, 'bbb', 'any', '/public/storage/imagenes/JBlOeW55nNaxNNN1NqLe1QxcsYH6qq0abFqvgep9.png', '/public/storage/imagenes/', 'DELUXE', '', '2021-09-11 07:51:19', '0'),
(10, 'bbb', 'any', '/public/storage/imagenes/jaz3MDxJbOq3b2zHp9bDDZuJtVjVgtZuDWvpFyXj.png', '/public/storage/imagenes/', 'DELUXE', '', '2021-09-11 07:51:19', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `description` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `limit` int(10) NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `bannerForm` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id`, `title`, `description`, `images`, `limit`, `banner`, `bannerForm`) VALUES
(1, 'Lotización de terrenos', 'description', 'image.png', 1, '/storage/imagenes/hDVUy2CLSstfkkDwump6w83NBxfJRYOL3o4xDZTd.png', '/storage/imagenes/j95Q6EmoMx4BXFOadAGLfPfeZMhiOwhjH9sjb7pn.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `typepage` varchar(200) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `movil` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `message` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `inbox`
--

INSERT INTO `inbox` (`id`, `typepage`, `name`, `movil`, `lastname`, `email`, `message`) VALUES
(1, 'HOME', 'americo', '9994861', 'americo rojas', 'hola@hotmail.com', 'quiero un consulta de precio'),
(2, NULL, 'Condominio Oasis???????????', '555555555', 'DFDFDF', 'bysnark@live.com', 'GGGGGGGGGGGG'),
(3, NULL, 'Condominio Oasis???????????', '555555555', 'DFDFDF', 'bysnark@live.com', 'SDFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF'),
(4, NULL, 'Condominio Oasis???????????', '555555555', 'DFDFDF', 'bysnark@live.com', 'ddddddddddd'),
(5, NULL, 'Condominio Oasis???????????', '555555555', 'DFDFDF', 'bysnark@live.com', 'ddddddddddddddddddddddddd'),
(6, NULL, 'Condominio Oasis???????????', '555555555', 'DFDFDF', 'miguelkillki@gmail.com', 'ddddddddddddddddddddd'),
(7, NULL, 'Condominio Oasis???????????', '555555555', 'DFDFDF', 'miguelkillki@gmail.com', 'cfgdgfgfgfffffffffffffffffgggggggggggggggg'),
(8, NULL, 'Condominio Oasis???????????', '595555595', 'DFDFDF', 'abc@abc.com', 'dgdgdfg'),
(9, NULL, 'swee', '234324324', 'DFDFDF', 'bysnark@live.com', 'sdfsdfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novelties`
--

CREATE TABLE `novelties` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `idCoverImagen` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `resume` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `youtube` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `text` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `novelties`
--

INSERT INTO `novelties` (`id`, `idCategory`, `idCoverImagen`, `title`, `slug`, `resume`, `youtube`, `text`, `dateCreate`, `status`) VALUES
(1, 1, 71, 'Lanzamiento de nuestro Proyecto Apolo Condominio', 'lanzamiento-de-nuestro-proyecto-apolo-condominio', 'Huertas inmobiliaria el día 4 de agosto llevó acabo su primer evento de lanzamiento del proyecto “Apolo Condominio”, el cual congregó a más de 60 personas. Contamos con los siguientes beneficios: parques y jardines, título de propiedad, club house, vigilancia las 24 horas, área de desde 120m2 y zona de ejercicios.  Apolo Condominio está ubicado en la carretera Panamericana Sur Km. 92.5, Playa Chocaya Asia, Perú. ', '', 'Huertas inmobiliaria el día 4 de agosto llevó acabo su primer evento de lanzamiento del proyecto “Apolo Condominio”, el cual congregó a más de 60 personas. Contamos con los siguientes beneficios: parques y jardines, título de propiedad, club house, vigilancia las 24 horas, área de desde 120m2 y zona de ejercicios.  Apolo Condominio está ubicado en la carretera Panamericana Sur Km. 92.5, Playa Chocaya Asia, Perú. ', '2021-08-23 14:55:33', '1'),
(2, 1, 72, '¿Eres Cliente de Huertas Inmobiliaria?', 'eres-cliente-de-huertas-inmobiliaria', 'Aprovecha tu cupón de descuento de S/. 3,000 soles en la compra de tu LOTE en nuestro proyecto “El Condominio Oasis”. \r\nHuertas Inmobiliaria tiene el gusto de presentar su nuevo proyecto “El Condominio Oasis”, el cual cuenta con la mejor ubicación, donde podrás disfrutar de áreas verdes, zona comercial, gimnasio, juegos, club house   y seguridad permanente. \r\n\r\n Válido solo por el mes de agosto.\r\n', '', 'Aprovecha tu cupón de descuento de S/. 3,000 soles en la compra de tu LOTE en nuestro proyecto “El Condominio Oasis”. \r\nHuertas Inmobiliaria tiene el gusto de presentar su nuevo proyecto “El Condominio Oasis”, el cual cuenta con la mejor ubicación, donde podrás disfrutar de áreas verdes, zona comercial, gimnasio, juegos, club house   y seguridad permanente. \r\n\r\n Válido solo por el mes de agosto.\r\n', '2021-08-23 15:11:57', '1'),
(3, 1, 73, 'Reserva tu visita guía con nosotros', 'reserva-tu-visita-guía-con-nosotros', '¡Cada vez son más los clientes satisfechos que se unen a la familia Huertas Inmobiliaria! ¿Qué esperas para tomar la mejor decisión de inversión en nuestro Condominio Campestre El Olivar?  Reserva tu cita y aprovecha los precios de lanzamiento. \r\n¡Envíanos tu número de teléfono directamente al inbox! \r\nContáctenos al (01) 732-0806 / 984 403 329 / 926 403 239 o visita nuestras oficinas en Calle Luis Espejo 1097 Urb. Santa Catalina, La Victoria.\r\n', '', '¡Cada vez son más los clientes satisfechos que se unen a la familia Huertas Inmobiliaria! ¿Qué esperas para tomar la mejor decisión de inversión en nuestro Condominio Campestre El Olivar?  Reserva tu cita y aprovecha los precios de lanzamiento. \r\n¡Envíanos tu número de teléfono directamente al inbox! \r\nContáctenos al (01) 732-0806 / 984 403 329 / 926 403 239 o visita nuestras oficinas en Calle Luis Espejo 1097 Urb. Santa Catalina, La Victoria.\r\n', '2021-08-23 15:46:38', '1'),
(4, 1, 74, 'Huertas Inmobiliaria asociados de la CCL', 'huertas-inmobiliaria-asociados-de-la-ccl', 'Tenemos el agrado de poder compartir con nuestros clientes la presencia de HUERTAS INMOBILIARIA, dentro de la Cámara de Comercio de Lima como asociados.  Ahora podremos estar más cerca de ustedes informándolos de nuestras novedades, eventos y nuestros principales proyectos.', '', 'Tenemos el agrado de poder compartir con nuestros clientes la presencia de HUERTAS INMOBILIARIA, dentro de la Cámara de Comercio de Lima como asociados.  Ahora podremos estar más cerca de ustedes informándolos de nuestras novedades, eventos y nuestros principales proyectos.', '2021-08-23 15:48:23', '1'),
(5, 1, 75, 'Los beneficios de nuestro Proyecto OASIS CONDOMINIO', 'los-beneficios-de-nuestro-proyecto-oasis-condominio', '\r\nNuestro proyecto OASIS CONDOMINIO cuenta con la mejor ubicación donde podrás disfrutar de nuestras áreas verdes, zona comercial, gimnasio, juegos, club house y seguridad permanente . Asimismo, podrás contar con los siguientes beneficios:\r\n \r\nÁrea de lotes desde los 120 m² (Stock limitado).\r\nInicial: s/5,000 Precio desde total: s/19,999 (Precio único y al contado).\r\nZonas aledañas: Playa Huachama, Cerro Azul, Plaza de Cañete, Asia y Camisea.\r\nUbicación: Carretera Panamericana Sur Km. 152.\r\nDocumentación en regla.\r\n', '', '\r\nNuestro proyecto OASIS CONDOMINIO cuenta con la mejor ubicación donde podrás disfrutar de nuestras áreas verdes, zona comercial, gimnasio, juegos, club house y seguridad permanente . Asimismo, podrás contar con los siguientes beneficios:\r\n \r\nÁrea de lotes desde los 120 m² (Stock limitado).\r\nInicial: s/5,000 Precio desde total: s/19,999 (Precio único y al contado).\r\nZonas aledañas: Playa Huachama, Cerro Azul, Plaza de Cañete, Asia y Camisea.\r\nUbicación: Carretera Panamericana Sur Km. 152.\r\nDocumentación en regla.\r\n', '2021-08-23 15:52:47', '1'),
(6, 1, 76, 'Los beneficios de nuestro Proyecto CONDOMINIO CAMPESTRE EL OLIVAR ', 'los-beneficios-de-nuestro-proyecto-condominio-campestre-el-olivar ', 'Nuestro proyecto CONDOMINIO CAMPESTRE EL OLIVAR cuenta con la mejor ubicación donde podrás disfrutar de nuestras áreas verdes, ciclovía, zona de   parrilla, club house, gimnasio y seguridad permanente. Asimismo, podrás contar con los siguientes beneficios:\r\n \r\nÁrea de lotes desde los 200 m² (Stock limitado).\r\nPrecio desde: s/13,000.\r\nZonas aledañas: Cerro Azul, Plaza de Cañete, Asia y Camisea.\r\nUbicación: Carretera Panamericana Sur Km. 163.\r\n', '', 'Nuestro proyecto CONDOMINIO CAMPESTRE EL OLIVAR cuenta con la mejor ubicación donde podrás disfrutar de nuestras áreas verdes, ciclovía, zona de   parrilla, club house, gimnasio y seguridad permanente. Asimismo, podrás contar con los siguientes beneficios:\r\n \r\nÁrea de lotes desde los 200 m² (Stock limitado).\r\nPrecio desde: s/13,000.\r\nZonas aledañas: Cerro Azul, Plaza de Cañete, Asia y Camisea.\r\nUbicación: Carretera Panamericana Sur Km. 163.\r\n', '2021-08-23 15:56:51', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pageseo`
--

CREATE TABLE `pageseo` (
  `id` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `typePage` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pageseo`
--

INSERT INTO `pageseo` (`id`, `address`, `status`, `description`, `title`, `phone`, `typePage`, `image`) VALUES
(1, 'ffff', '1', 'description', 'Lotización de terrenos', '+51 992 693 050', 'HOME', 'page.jpg'),
(2, '', '1', 'Prueba para lista de servicios', 'LISTA DE PROYECTOS', '', 'PROYECT', ''),
(3, '', '1', 'gggggggggg', 'SERVICIOS', '', 'SERVICE', ''),
(4, '', '1', 'FFFFFFF', 'NOVEDADES', '', 'NOVELTIES', ''),
(5, '', '1', 'WEWQEQWEQW', 'NOSOTROS', '', 'US', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rute` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nameRute` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `picture`
--

INSERT INTO `picture` (`id`, `name`, `type`, `rute`, `nameRute`, `description`, `dateCreate`, `status`) VALUES
(1, 'EL PALMAR DEL SUR.png', 'png', 'public/web/images/proyect/EL PALMAR DEL SUR.png', 'public/web/images/proyect/', 'Imagen de proyecto', '2021-06-26 13:33:05', '1'),
(2, 'CONDOMINIO CAMPESTRE EL OLIVAR.png', 'png', 'public/web/images/proyect/CONDOMINIO CAMPESTRE EL OLIVAR.png', 'public/web/images/proyect/', 'Imagen de proyecto', '2021-06-27 18:21:40', '1'),
(3, 'CONDOMINIO FALCON.png', 'png', 'public/web/images/proyect/CONDOMINIO FALCON.png', 'public/web/images/proyect/', '', '2021-06-27 18:23:36', '1'),
(4, 'CONDOMINIO OASIS.png', 'png', 'public/web/images/proyect/CONDOMINIO OASIS.png', 'public/web/images/proyect/', '', '2021-06-27 18:23:36', '1'),
(5, 'MERCADO-SANTA ROSA.png', 'png', 'public/web/images/proyect/MERCADO-SANTA ROSA.png', 'public/web/images/proyect/', '', '2021-06-27 18:23:36', '1'),
(6, 'PLANICIE SUR.png', 'png', 'public/web/images/proyect/PLANICIE SUR.png', 'public/web/images/proyect/', '', '2021-06-27 18:23:36', '1'),
(7, 'PORTADA-palmar-de-surco.png', 'png', 'public/web/images/proyect-banner/PORTADA-palmar-de-surco.png', 'public/web/images/proyect-banner/', '', '2021-06-27 23:43:48', '1'),
(8, 'banner-olivar.png', 'png', 'public/web/images/banner/banner-olivar.png', 'public/web/images/banner/', 'ddddd', '2021-06-30 22:37:21', '1'),
(9, 'falcon-banner.png', 'png', 'public/web/images/banner/falcon-banner.png', 'public/web/images/banner/', 'dd', '2021-06-30 22:37:21', '1'),
(10, 'AREA.png', 'png', 'public/web/images/proyect-icon/AREA.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(11, 'CLUB-HOUSE.png', 'png', 'public/web/images/proyect-icon/CLUB-HOUSE.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(12, 'DOCUMENTACION-EN-REGLA.png', 'png', 'public/web/images/proyect-icon/DOCUMENTACION-EN-REGLA.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(13, 'EJERCICIOS.png', 'png', 'public/web/images/proyect-icon/EJERCICIOS.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(14, 'FINANCIAMIENTO.png', 'png', 'public/web/images/proyect-icon/FINANCIAMIENTO.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(15, 'PARQUES.png', 'png', 'public/web/images/proyect-icon/PARQUES.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(16, 'PARRILLA.png', 'png', 'public/web/images/proyect-icon/PARRILLA.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(17, 'PORTICO-1.png', 'png', 'public/web/images/proyect-icon/PORTICO-1.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(18, 'PROPIEDADES-INSCRITAS.png', 'png', 'public/web/images/proyect-icon/PROPIEDADES-INSCRITAS.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(19, 'SEGURIDAD-2.png', 'png', 'public/web/images/proyect-icon/SEGURIDAD-2.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(20, 'SERVICIOS-2.png', 'png', 'public/web/images/proyect-icon/SERVICIOS-2.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(21, 'UBICACION.png', 'png', 'public/web/images/proyect-icon/UBICACION.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(22, 'ZONA COMERCIAL.png', 'png', 'public/web/images/proyect-icon/ZONA COMERCIAL.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(23, '2-PISOS.png', 'png', 'public/web/images/proyect-icon/2-PISOS.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(24, '5-pisos.png', 'png', 'public/web/images/proyect-icon/5-pisos.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(25, 'AREA-1.png', 'png', 'public/web/images/proyect-icon/AREA-1.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(26, 'ASCENSOR.png', 'png', 'public/web/images/proyect-icon/ASCENSOR.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(27, 'ECOLOGICO.png', 'png', 'public/web/images/proyect-icon/ECOLOGICO.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(28, 'PATIO-DE-COMIDA.png', 'png', 'public/web/images/proyect-icon/PATIO-DE-COMIDA.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(29, 'PORTICO-2.png', 'png', 'public/web/images/proyect-icon/PORTICO-2.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(30, 'SEGURIDAD.png', 'png', 'public/web/images/proyect-icon/SEGURIDAD.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(31, 'SEGURIDAD-3.png', 'png', 'public/web/images/proyect-icon/SEGURIDAD-3.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(32, 'SERVICIOS-1.png', 'png', 'public/web/images/proyect-icon/SERVICIOS-1.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(33, 'URBANIZACION.png', 'png', 'public/web/images/proyect-icon/URBANIZACION.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(34, 'URBANIZACION-2.png', 'png', 'public/web/images/proyect-icon/URBANIZACION-2.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(35, 'zona-de-carga.png', 'png', 'public/web/images/proyect-icon/zona-de-carga.png', 'public/web/images/proyect-icon/', '', '2021-07-11 14:59:07', '1'),
(46, 'ICONO-HUERTAS.png', 'png', 'public/web/images/ICONO-HUERTAS.png', 'public/web/images/', '', '2021-08-04 19:56:19', '1'),
(51, 'PORTADA-condominio-falcon.png', 'png', 'public/web/images/proyect-banner/PORTADA-condominio-falcon.png', 'public/web/images/proyect-banner/', '', '2021-08-16 10:57:28', '1'),
(52, 'PORTADA-mercado-santa-rosa.png', 'png', 'public/web/images/proyect-banner/PORTADA-mercado-santa-rosa.png', 'public/web/images/proyect-banner/', '', '2021-08-16 10:57:28', '1'),
(53, 'PORTADA-PLANICIE.png', 'png', 'public/web/images/proyect-banner/PORTADA-PLANICIE.png', 'public/web/images/proyect-banner/', '', '2021-08-16 10:57:28', '1'),
(54, 'oasis-1.jpg', 'jpg', 'public/web/images/proyect-gallery/oasis-1.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(55, 'oasis-2.jpg', 'jpg', 'public/web/images/proyect-gallery/oasis-2.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(56, 'planicie-sur-1.jpg', 'jpg', 'public/web/images/proyect-gallery/planicie-sur-1.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(57, 'planicie-sur-2.jpg', 'jpg', 'public/web/images/proyect-gallery/planicie-sur-2.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(58, 'mercado-1.jpg', 'jpg', 'public/web/images/proyect-gallery/mercado-1.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(59, 'mercado-2.jpg', 'jpg', 'public/web/images/proyect-gallery/mercado-2.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(60, 'palmar-1.jpg', 'jpg', 'public/web/images/proyect-gallery/palmar-1.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(61, 'palmar-2.jpg', 'jpg', 'public/web/images/proyect-gallery/palmar-2.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(62, 'palmar-3.jpg', 'jpg', 'public/web/images/proyect-gallery/palmar-3.jpg', 'public/web/images/proyect-gallery/', '', '2021-08-16 10:57:28', '1'),
(63, 'olivar.png', 'png', 'public/web/images/proyect-banner/olivar.png', 'public/web/images/proyect-banner/', '', '2021-08-16 10:57:28', '1'),
(64, 'PORTADA-OASIS.png', 'png', 'public/web/images/proyect-banner/PORTADA-OASIS.png', 'public/web/images/proyect-banner/', '', '2021-08-16 10:57:28', '1'),
(65, 'OLIVAR.png', 'png', 'public/web/images/proyect-icon/OLIVAR.png', 'public/web/images/proyect-icon/', '', '2021-08-16 10:57:28', '1'),
(66, 'FALCON.png', 'png', 'public/web/images/proyect-icon/FALCON.png', 'public/web/images/proyect-icon/', '', '2021-08-16 10:57:28', '1'),
(67, 'OASIS.png', 'png', 'public/web/images/proyect-icon/OASIS.png', 'public/web/images/proyect-icon/', '', '2021-08-16 10:57:28', '1'),
(68, 'PLANICIE.png', 'png', 'public/web/images/proyect-icon/PLANICIE.png', 'public/web/images/proyect-icon/', '', '2021-08-16 10:57:28', '1'),
(69, 'MERCADO-SANTA-ROSA.png', 'png', 'public/web/images/proyect-icon/MERCADO-SANTA-ROSA.png', 'public/web/images/proyect-icon/', '', '2021-08-16 10:57:28', '1'),
(70, 'PALMAR-DEL-SUR.png', 'png', 'public/web/images/proyect-icon/PALMAR-DEL-SUR.png', 'public/web/images/proyect-icon/', '', '2021-08-16 10:57:28', '1'),
(71, 'lanzamiento-de-nuestro-proyecto-apolo-condominio.png', 'png', 'public/web/images/novelties/lanzamiento-de-nuestro-proyecto-apolo-condominio.png', 'public/web/images/novelties/', '', '2021-08-04 19:56:19', '1'),
(72, 'DESCUENTO.png', 'png', 'public/web/images/novelties/DESCUENTO.png', 'public/web/images/novelties/', '', '2021-08-04 19:56:19', '1'),
(73, 'VISITA-GUIADA.png', 'png', 'public/web/images/novelties/VISITA-GUIADA.png', 'public/web/images/novelties/', '', '2021-08-04 19:56:19', '1'),
(74, 'LA-CAMARA-Y-COMERCIO.png', 'png', 'public/web/images/novelties/LA-CAMARA-Y-COMERCIO.png', 'public/web/images/novelties/', '', '2021-08-04 19:56:19', '1'),
(75, 'BENEFICIOS-OASIS.png', 'png', 'public/web/images/novelties/BENEFICIOS-OASIS.png', 'public/web/images/novelties/', '', '2021-08-04 19:56:19', '1'),
(76, 'BENEFICIOS-OLIAR.png', 'png', 'public/web/images/novelties/BENEFICIOS-OLIAR.png', 'public/web/images/novelties/', '', '2021-08-04 19:56:19', '1'),
(77, 'bbb', 'any', '/public/storage/imagenes/UmNSOHZZTvlHersAVoh79NuEvd2OuDxKDdZoIJOa.png', '/public/storage/imagenes/', '', '2021-09-04 12:56:59', '0'),
(78, 'bbb', 'any', '/public/storage/imagenes/CRfEE4AdWpE1luRgqExRQo0mkkgYl0xQBOYRJsf5.png', '/public/storage/imagenes/', '', '2021-09-04 12:58:28', '0'),
(79, 'bbb', 'any', '/public/storage/imagenes/g3X20uxNim8aUn6j9L1otFOqilQbc56nTjSKv1Ov.png', '/public/storage/imagenes/', '', '2021-09-04 12:59:32', '0'),
(80, 'bbb', 'any', '/public/storage/imagenes/itzL47jRdO9gBJc1Gv9RBsbC2ZqCyLwVMDvvl76d.png', '/public/storage/imagenes/', '', '2021-09-04 12:59:32', '0'),
(81, 'bbb', 'any', '/public/storage/imagenes/PLpO6B0oHCDYwWK7y7sj1FA7DhLISSiiMmfLgiOM.png', '/public/storage/imagenes/', '', '2021-09-04 13:54:11', '0'),
(82, 'bbb', 'any', '/public/storage/imagenes/qurTMSXXrc3hM32CTkHsS582FhwDZEQzlxC2TOFJ.png', '/public/storage/imagenes/', '', '2021-09-04 13:54:11', '0'),
(83, 'bbb', 'any', '/public/storage/imagenes/ZpwcJCbxmZ9WWyTZvsjOkVcBxOFx5LminsWLC18A.png', '/public/storage/imagenes/', '', '2021-09-04 13:54:11', '0'),
(127, 'bbb', 'any', '/public/storage/imagenes/EhUoaTmBTm3aPXdhb3fpETNqsgyal0zuTAqMjZDq.png', '/public/storage/imagenes/', '', '2021-09-11 06:59:51', '0'),
(128, 'bbb', 'any', '/public/storage/imagenes/Xx2q8gozgoumxwj8E336WVSK7layax3GWXlUhRQt.png', '/public/storage/imagenes/', '', '2021-09-11 06:59:51', '0'),
(129, 'bbb', 'any', '/public/storage/imagenes/3HwwqhT9Jbram5aILYhKDJMXZ0WHRYyszFgx27PS.png', '/public/storage/imagenes/', '', '2021-09-11 06:59:51', '0'),
(130, 'bbb', 'any', '/public/storage/imagenes/MlF2dUh1Vha2325qadS0B1ETysxe4Td76XXEZd1R.png', '/public/storage/imagenes/', '', '2021-09-11 07:16:58', '0'),
(131, 'bbb', 'any', '/public/storage/imagenes/8MDapbooPy53vA8OXsIWvTRkTjqWybNJPD0TQq4j.png', '/public/storage/imagenes/', '', '2021-09-11 07:16:58', '0'),
(132, 'bbb', 'any', '/public/storage/imagenes/cxrveTuENXt1ocnajuQNPm24nFvgHzO1t5ofOdUk.png', '/public/storage/imagenes/', '', '2021-09-11 07:16:58', '0'),
(133, 'bbb', 'any', '/public/storage/imagenes/Oq6mUwoSz3BFisQIfGeMHIWS9Zxjwckd7vsrhiMU.png', '/public/storage/imagenes/', '', '2021-09-11 07:16:58', '0'),
(134, 'bbb', 'any', '/public/storage/imagenes/LBAz8evpnCsLvWfuda7lMcleYMg5RPPCUSg9zHDE.png', '/public/storage/imagenes/', '', '2021-09-11 07:23:40', '0'),
(135, 'bbb', 'any', '/public/storage/imagenes/pyYFW0PP3KSlbX6kQpRqGM3yDyP0wT8ar4xK3a3c.png', '/public/storage/imagenes/', '', '2021-09-11 07:23:40', '0'),
(136, 'bbb', 'any', '/public/storage/imagenes/wG43Uo2LFZiWrlN8I3Oxm1R4SxHCq0kOrQfmWN18.png', '/public/storage/imagenes/', '', '2021-09-11 07:23:40', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `description` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `youtube` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idPictureCover` int(11) NOT NULL,
  `initialFeeSoles` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `initialFeeDollars` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `spotPriceSoles` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cashPriceDollars` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `monthlyFees` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idNovelty` int(11) NOT NULL,
  `latitude` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `longitude` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `officeAddress` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `projectAddress` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1',
  `idColor` int(11) NOT NULL,
  `idPictureCoverPage` int(11) DEFAULT NULL,
  `idIconMap` int(11) DEFAULT NULL,
  `province` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `imagetop` varchar(200) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `imagebot` varchar(200) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `property`
--

INSERT INTO `property` (`id`, `idCategory`, `idUser`, `name`, `slug`, `description`, `youtube`, `idPictureCover`, `initialFeeSoles`, `initialFeeDollars`, `spotPriceSoles`, `cashPriceDollars`, `monthlyFees`, `idNovelty`, `latitude`, `longitude`, `officeAddress`, `projectAddress`, `phone`, `dateCreate`, `status`, `idColor`, `idPictureCoverPage`, `idIconMap`, `province`, `imagetop`, `imagebot`) VALUES
(1, 1, 1, 'Condominio Campestre El Olivar', 'condominio-campestre-el-olivar', 'vvVivir en un ambiente tranquilo y con increíbles oportunidades para disfrutar en familia es una\r\nde las mejores cosas que se puede invertir y tener: ciclovías, parques temáticos, canchas deportivas, área de ejercicio, club house y mucho más. Todo esto lo encuentras en nuestro Condominio Campestre El Olivar.', 'aprXPqp4D7A', 2, '1500', '650', '300000', '120000', '36', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-26 13:33:02', '1', 2, 63, 65, 'Cañeteee', '/storage/imagenes/KeSRW4nvojRsIE3hwYBohhc5o64KwzSNBTQo4mdi.png', '/storage/imagenes/kYJ8QwKjxSKs83w4m6AzLswy9YmNJRHPKaYj65wI.jpg'),
(2, 1, 1, 'Condominio Falcon', 'condominio-falcon', 'Un lugar moderno y seguro, ubicado en San Juan de Lurigancho, uno de los distritos con mayor desarrollo comercial y social. Si te inquieta la seguridad, Condominio Falcon posee un pórtico de ingreso y cerco que rodea todo el perímetro, te invitamos a conocer más sobre nuestro proyecto y darte la oportunidad de construir tu hogar con nosotros.', 'bQpYV3WZ47I', 3, '1500', '650', '300000', '120000', '36', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros) ffff', '987654321', '2021-06-26 20:16:47', '1', 1, 51, 66, 'Lima', '/storage/imagenes/ONpQxb7vFeV1TnzLVcDBktg1hwXv78Kc8VYnuNZC.png', '/storage/imagenes/QGm7hGPBCV9KP0r9VlbiFCvyJ9WZigBsec2vzQ9S.jpg'),
(3, 1, 1, 'Condominio Oasis', 'condominio-oasis', 'Nuestro Oasis Condominio tiene todo lo que buscas de una gran oportunidad de invertir en el mejor lugar.\r\nEl proyecto cuenta con una excelente ubicación cerca de la ciudad de Cañete, donde podrás vivir en armonía con la naturaleza y el mar.\r\nUn proyecto seguro y rentable ¿Qué esperas para cumplir el sueño de la casa propia?', 'OrxWcQB4ueg', 4, '1500', '650', '300000', '150000', '40', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-26 20:16:47', '1', 6, 64, 67, 'Cusco', '/storage/imagenes/OldMHC73YTBvleDOZSsy4Fa2gCr2pw9vb2DlNbdD.png', '/storage/imagenes/a5VEANbfoMMJKyGFfL2T2gLSJGg2lJfq60KKnc8L.jpg'),
(6, 1, 1, 'Planicie Sur', 'planicie-sur', 'Este es el momento indicado. Planicie Sur de Cañete, es el lugar ideal para construir ese hogar que anhelas, respirar aire puro y disfrutar de la tranquilidad y naturaleza. Contamos con lotes ecológicos a precios de súper oferta ¿Qué esperas para cumplir tus sueños?', 'OrxWcQB4ueg', 6, '1500', '650', '300000', '120000', '45', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-26 20:35:05', '1', 3, 53, 68, 'Cañete', '/storage/imagenes/RahqUp6UVzlIR4yORfE4e68eqXGD81m6UlDCN62S.png', '/storage/imagenes/1F5zauG1mW2hhRjOs6hQeooWxq8l8iAIe684xhD5.jpg'),
(7, 1, 1, 'Mega Mercado Santa Rosa', 'mega-mercado-santa-rosa', 'Diseñado con un estilo totalmente innovador y sorprendente, nuestro mega mercado reúne la más completa oferta comercial del sector, acorde a las preferencias del público de su zona de influencia.\r\nEn el Mega Mercado Santa Rosa podrás encontrar la más amplia gama de ofertas y afines. Cuenta con la mayor cantidad de espacios abiertos y áreas verdes, siguiendo las últimas tendencias mundiales en diseño, arquitectura y construcción.', 'OrxWcQB4ueg', 5, '1500', '650', '350000', '150000', '55', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-26 20:36:52', '1', 5, 52, 69, 'Arequipa', '/storage/imagenes/tL2XGLBadzaO1f0AneQdPHCQDmo5bSkMwkT2bCKZ.png', '/storage/imagenes/OLBjC4mL68lSCmmKaGkOPhY7M8zZXmykrkyZCieR.jpg'),
(8, 1, 1, 'El Palmar de Surco', 'el-palmar-de-surco', 'Tu nuevo departamento te espera, El Palmar de Surco ubicado a un paso de la base aérea Las Palmas. Vivirás rodeado de parques, supermercados, colegios, hospitales y más.', 'EszBkjtG7wA', 1, '1500', '650', '350000', '150000', '55', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-27 11:46:30', '1', 4, 7, 70, 'Cañete', '/storage/imagenes/8dtlVM0HOsxMkVm0mlymZHfvwq5mxyPr6azPm3ze.png', '/storage/imagenes/OCKiJLsNygpHdB5evppAEU65iwcWIa0U46LeeCuN.jpg'),
(9, 1, 1, 'Condominio Apolo', 'condominio-apolo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'EszBkjtG7wA', 1, '1500', '650', '350000', '150000', '55', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-27 11:48:57', '1', 0, 7, 0, 'Amazonas', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propertybenefits`
--

CREATE TABLE `propertybenefits` (
  `id` int(11) NOT NULL,
  `idProperty` int(11) NOT NULL,
  `idBenefit` int(11) NOT NULL,
  `idPicture` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `number_order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `propertybenefits`
--

INSERT INTO `propertybenefits` (`id`, `idProperty`, `idBenefit`, `idPicture`, `name`, `number_order`) VALUES
(1, 1, 1, 21, 'Ubicación (Cañete)', 1),
(2, 1, 1, 14, 'Financiamiento Directo', 2),
(3, 1, 1, 10, 'Metraje (Desde 200 m²)', 3),
(4, 1, 1, 20, 'Servicios básicos', 4),
(5, 1, 1, 17, 'Pórtico de ingreso', 5),
(6, 1, 1, 11, 'Club House', 6),
(7, 1, 1, 16, 'Zona de parrillas', 7),
(8, 1, 1, 13, 'Zona de ejercicios', 8),
(9, 1, 1, 15, 'Parques y jardines', 9),
(10, 2, 1, 21, 'Ubicación (San Juan de Lurigancho)', 1),
(11, 2, 1, 14, 'Financiamiento Directo', 2),
(12, 2, 1, 25, 'Metraje (Desde 90 m²)', 3),
(13, 2, 1, 32, 'Servicios básicos', 4),
(14, 2, 1, 29, 'Pórtico de ingreso', 5),
(15, 2, 1, 30, 'Seguridad y vigilancia', 6),
(16, 2, 1, 12, 'Documentación en regla', 7),
(17, 2, 1, 18, 'Propiedades inscritas', 8),
(18, 2, 1, 22, 'Zona comercial', 9),
(19, 3, 1, 21, 'Ubicación (Cañete)', 1),
(20, 3, 1, 14, 'Financiamiento Directo', 2),
(21, 3, 1, 10, 'Metraje (Desde 300 m²)', 3),
(22, 3, 1, 20, 'Servicios básicos', 4),
(23, 3, 1, 17, 'Pórtico de ingreso', 5),
(24, 3, 1, 19, 'Seguridad y vigilancia', 6),
(25, 3, 1, 12, 'Documentación en regla', 7),
(26, 3, 1, 18, 'Propiedades inscritas', 8),
(27, 3, 1, 22, 'Zona comercial', 9),
(28, 6, 1, 21, 'Ubicación (Cañete)', 1),
(29, 6, 1, 14, 'Financiamiento Directo', 2),
(30, 6, 1, 25, 'Metraje (Desde 200 m²)', 3),
(31, 6, 1, 27, 'Ecológico', 4),
(32, 6, 1, 29, 'Pórtico de ingreso', 5),
(33, 6, 1, 33, 'Plan de urbanización', 6),
(34, 6, 1, 32, 'Servicios básicos', 7),
(35, 6, 1, 12, 'Documentación en regla', 8),
(36, 6, 1, 18, 'Propiedades inscritas', 9),
(37, 7, 1, 21, 'Ubicación (Chancay)', 1),
(38, 7, 1, 25, 'Metraje (Desde 9 m²)', 2),
(39, 7, 1, 20, 'Servicios básicos', 3),
(40, 7, 1, 12, 'Documentación en regla', 4),
(41, 7, 1, 18, 'Propiedades inscritas', 5),
(42, 7, 1, 23, '2 niveles (pisos)', 6),
(43, 7, 1, 28, 'Patio de comidas', 7),
(44, 7, 1, 31, 'Seguridad y vigilancia', 8),
(45, 7, 1, 35, 'Zona de carga', 9),
(46, 8, 1, 21, 'Ubicación (Santiago de Surco)', 1),
(47, 8, 1, 10, 'Metraje (Desde 60 m²)', 2),
(48, 8, 1, 26, 'Ascensor', 3),
(49, 8, 1, 12, 'Documentación en regla', 4),
(50, 8, 1, 18, 'Propiedades inscritas', 5),
(51, 8, 1, 24, '5 niveles (pisos)', 6),
(52, 8, 1, 27, 'Ecológico', 7),
(53, 8, 1, 34, 'Zona urbanizada', 8),
(54, 8, 1, 19, 'Seguridad y vigilancia', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propertygallery`
--

CREATE TABLE `propertygallery` (
  `id` int(11) NOT NULL,
  `idProperty` int(11) NOT NULL,
  `idPicture` int(11) NOT NULL,
  `number_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `propertygallery`
--

INSERT INTO `propertygallery` (`id`, `idProperty`, `idPicture`, `number_order`) VALUES
(1, 2, 41, 1),
(2, 2, 42, 2),
(3, 2, 43, 3),
(4, 2, 44, 4),
(5, 2, 45, 5),
(6, 1, 36, 1),
(7, 1, 37, 2),
(8, 1, 38, 3),
(9, 1, 39, 4),
(10, 1, 40, 5),
(11, 3, 54, 1),
(12, 3, 55, 2),
(13, 6, 56, 1),
(14, 6, 57, 2),
(15, 7, 58, 1),
(16, 7, 59, 2),
(17, 8, 60, 1),
(18, 8, 61, 2),
(19, 8, 62, 3),
(20, 12, 79, NULL),
(21, 12, 80, NULL),
(22, 12, 81, NULL),
(23, 12, 82, NULL),
(24, 12, 83, NULL),
(25, 1, 88, NULL),
(26, 1, 89, NULL),
(27, 1, 90, NULL),
(28, 1, 100, NULL),
(29, 1, 101, NULL),
(30, 1, 102, NULL),
(31, 1, 103, NULL),
(32, 1, 104, NULL),
(33, 1, 105, NULL),
(34, 1, 106, NULL),
(35, 1, 107, NULL),
(36, 1, 108, NULL),
(37, 1, 109, NULL),
(38, 1, 110, NULL),
(39, 1, 111, NULL),
(40, 1, 112, NULL),
(41, 1, 113, NULL),
(42, 1, 114, NULL),
(43, 1, 115, NULL),
(44, 1, 116, NULL),
(45, 1, 117, NULL),
(46, 1, 118, NULL),
(47, 1, 119, NULL),
(48, 1, 120, NULL),
(49, 1, 121, NULL),
(50, 1, 122, NULL),
(51, 1, 123, NULL),
(52, 1, 124, NULL),
(53, 1, 125, NULL),
(54, 1, 126, NULL),
(55, 1, 130, NULL),
(56, 1, 131, NULL),
(57, 1, 132, NULL),
(58, 1, 133, NULL),
(59, 2, 134, NULL),
(60, 2, 135, NULL),
(61, 2, 136, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propertyteam`
--

CREATE TABLE `propertyteam` (
  `id` int(11) NOT NULL,
  `idProperty` int(11) NOT NULL,
  `idCharge` int(11) NOT NULL,
  `idTeam` int(11) NOT NULL,
  `teamOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `description` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`) VALUES
(1, 'Lotización de terrenos', 'Gestionamos tus proyectos inmobiliarios, encargándonos de la planificación, ejecución y control de estos. Contamos con un experimentado equipo de profesionales y herramientas tecnológicas de punta, los cuales en conjunto podrán garantizarte la ejecución efectiva de tus proyectos, su incremento de valor en el mercado y su venta o alquiler efectivo.', '/storage/imagenes/6LhPwUqnIvcIB9jXIS5Cqvv3T6g0ZjZp06BChLPD.jpg'),
(2, 'Gerencia de proyectos', 'Ponemos a tu disposición un experimentado equipo, el cual se encargará de lotizar y valorizar tu terreno, brindándote resultados exactos para que puedas y asesorándote en la creación de tu oferta.', '/storage/imagenes/wM0ivkuVRV59JxS3G0yhR9yGi0RdDyrhyNoHK8DD.jpg'),
(3, 'Corretaje inmobiliario', 'Asesoramos a nuestros clientes que deseen comprar o vender una propiedad con el fin de satisfacer sus necesidades, contamos con un área especializada en recoger y procesar información diaria de los inmuebles en oferta, esto permite atender requerimientos a la medida y a su vez analizamos el mercado a través de nuestro sistema de levantamiento de información diaria, permitiéndonos definir el precio comercial de su propiedad.', '/storage/imagenes/BDciAc9Faav5dTufqALHUPXSUti6LZ6SxoF2aJiX.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `firstSurname` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lastSurname` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idPicture` int(11) NOT NULL,
  `dateCreate` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us`
--

CREATE TABLE `us` (
  `id` int(11) NOT NULL,
  `longitude` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `latitude` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `description` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `trust_year` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `trust_dev` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `trust_benefits` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `trust_areas` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contact_mission` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contact_mission_img` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contact_vision` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contact_vision_img` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `us`
--

INSERT INTO `us` (`id`, `longitude`, `latitude`, `description`, `trust_year`, `trust_dev`, `trust_benefits`, `trust_areas`, `contact_mission`, `contact_mission_img`, `contact_vision`, `contact_vision_img`) VALUES
(1, '23432432433', '23432432433', 'Somos una empresa 100% peruana, caracterizados por nuestro profesionalismo y compromiso a la hora de encontrar las mejores oportunidades del sector inmobiliario. Para que encuentres el inmueble que buscas o vendas, tu propiedad al mejor valor.', '+ 20', '+ 20', '+ 21 mil', '+ 2 millones', 'Encontrar las mejores oportunidades del sector inmobiliario para ofertarlas. De manera oportuna mediante los diversos sistemas tecnológicos, de construcción que existen en el mercado. Garantizando una comunicación efectiva.', '/storage/imagenes/C3KdoQC5gxv74hXJJ1tivzobdWeCnB12UbBzALw0.png', 'Nuestra meta es posicionarnos como la inmobiliaria líder que garantice los proyectos en la oferta y demanda dentro del país, generando grandes oportunidades de desarrollo y empleo.', '/storage/imagenes/9ARcK5a5b8RlRHZdNM9BXBrAj3vAtzktbHoBrQQy.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `firstSurname` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lastSurname` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `user` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `sal` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `dateRegister` datetime DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `firstSurname`, `lastSurname`, `user`, `password`, `sal`, `dateRegister`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'dfed97a36b3829b39ac0b15c519e5d8f', NULL, '2021-06-16 23:28:15', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `charge`
--
ALTER TABLE `charge`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientreferred`
--
ALTER TABLE `clientreferred`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colorstyle`
--
ALTER TABLE `colorstyle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deluxe`
--
ALTER TABLE `deluxe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novelties`
--
ALTER TABLE `novelties`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pageseo`
--
ALTER TABLE `pageseo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propertybenefits`
--
ALTER TABLE `propertybenefits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propertygallery`
--
ALTER TABLE `propertygallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propertyteam`
--
ALTER TABLE `propertyteam`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `benefit`
--
ALTER TABLE `benefit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `charge`
--
ALTER TABLE `charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientreferred`
--
ALTER TABLE `clientreferred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colorstyle`
--
ALTER TABLE `colorstyle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `deluxe`
--
ALTER TABLE `deluxe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `novelties`
--
ALTER TABLE `novelties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pageseo`
--
ALTER TABLE `pageseo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT de la tabla `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `propertybenefits`
--
ALTER TABLE `propertybenefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `propertygallery`
--
ALTER TABLE `propertygallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `propertyteam`
--
ALTER TABLE `propertyteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `us`
--
ALTER TABLE `us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
