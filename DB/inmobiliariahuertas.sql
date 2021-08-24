-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-08-2021 a las 05:32:43
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

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
(4, 50, '1', '2021-08-16 09:54:55', 1);

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
(5, 'Mercado Santa Rosa', 'mercado-santa-rosa.css', 'public/web/css/theme-colors/mercado-santa-rosa.css', 'public/web/css/theme-colors/mercado-santa-rosa.css', '2021-06-27 13:54:22', '1');

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
  `office_latitud` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `office_longitud` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `office_address` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`id`, `name`, `icon`, `logo`, `phone`, `facebook`, `instagram`, `tiktok`, `linkedin`, `office_latitud`, `office_longitud`, `office_address`) VALUES
(1, 'Inmobiliaria Huertas', 46, 1, '+51 984 403 239', 'https://www.facebook.com/huertas.inmobiliaria', 'https://instagram.com/huertas.inmobiliaria?utm_medium=copy_link', 'https://vm.tiktok.com/ZMdogLs77/', 'https://www.linkedin.com/company/huertas-inmobiliaria', '-12.69175', '-76.635918', 'Av. Marchand mz 21 lote 21. A media cuadra del Mercado Principal de Mala.');

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
  `typePage` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pageseo`
--

INSERT INTO `pageseo` (`id`, `address`, `status`, `description`, `title`, `phone`, `typePage`) VALUES
(1, 'ffff', '1', 'Esto es una descripcion de prueba para posicionamiento SEO', 'Inmobiliaria Huertas - Lo mejor en ofertas inmobiliarias', '+51 992 693 050', 'HOME'),
(2, '', '1', 'Prueba para lista de servicios', 'LISTA DE PROYECTOS', '', 'PROYECT'),
(3, '', '1', 'gggggggggg', 'SERVICIOS', '', 'SERVICE'),
(4, '', '1', 'FFFFFFF', 'NOVEDADES', '', 'NOVELTIES'),
(5, '', '1', 'WEWQEQWEQW', 'NOSOTROS', '', 'US');

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
(36, 'g1.png', 'png', 'public/web/images/proyect-gallery/g1.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(37, 'g2.png', 'png', 'public/web/images/proyect-gallery/g2.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(38, 'g3.png', 'png', 'public/web/images/proyect-gallery/g3.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(39, 'g4.png', 'png', 'public/web/images/proyect-gallery/g4.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(40, 'g5.png', 'png', 'public/web/images/proyect-gallery/g5.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(41, 'IMG-1.png', 'png', 'public/web/images/proyect-gallery/IMG-1.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(42, 'IMG-2.png', 'png', 'public/web/images/proyect-gallery/IMG-2.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(43, 'IMG-3.png', 'png', 'public/web/images/proyect-gallery/IMG-3.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(44, 'IMG-4.png', 'png', 'public/web/images/proyect-gallery/IMG-4.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(45, 'IMG-5.png', 'png', 'public/web/images/proyect-gallery/IMG-5.png', 'public/web/images/proyect-gallery/', '', '2021-07-12 22:13:16', '1'),
(46, 'ICONO-HUERTAS.png', 'png', 'public/web/images/ICONO-HUERTAS.png', 'public/web/images/', '', '2021-08-04 19:56:19', '1'),
(47, '1-BANNER.png', 'png', 'public/web/images/banner/1-BANNER.png', 'public/web/images/banner/', '', '2021-08-16 09:51:31', '1'),
(48, '2-BANNER.png', 'png', 'public/web/images/banner/2-BANNER.png', 'public/web/images/banner/', '', '2021-08-16 09:51:31', '1'),
(49, '3-BANNER.png', 'png', 'public/web/images/banner/3-BANNER.png', 'public/web/images/banner/', '', '2021-08-16 09:51:31', '1'),
(50, '4-BANNER.png', 'png', 'public/web/images/banner/4-BANNER.png', 'public/web/images/banner/', '', '2021-08-16 09:51:31', '1'),
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
(76, 'BENEFICIOS-OLIAR.png', 'png', 'public/web/images/novelties/BENEFICIOS-OLIAR.png', 'public/web/images/novelties/', '', '2021-08-04 19:56:19', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
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
  `idPictureCoverPage` int(11) NOT NULL,
  `idIconMap` int(11) NOT NULL,
  `province` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `property`
--

INSERT INTO `property` (`id`, `idCategory`, `idUser`, `name`, `slug`, `description`, `youtube`, `idPictureCover`, `initialFeeSoles`, `initialFeeDollars`, `spotPriceSoles`, `cashPriceDollars`, `monthlyFees`, `idNovelty`, `latitude`, `longitude`, `officeAddress`, `projectAddress`, `phone`, `dateCreate`, `status`, `idColor`, `idPictureCoverPage`, `idIconMap`, `province`) VALUES
(1, 1, 1, 'Condominio Campestre El Olivar', 'condominio-campestre-el-olivar', 'Vivir en un ambiente tranquilo y con increíbles oportunidades para disfrutar en familia es una\r\nde las mejores cosas que se puede invertir y tener: ciclovías, parques temáticos, canchas deportivas, área de ejercicio, club house y mucho más. Todo esto lo encuentras en nuestro Condominio Campestre El Olivar.', 'aprXPqp4D7A', 2, '1500', '650', '300000', '120000', '36', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-26 13:33:02', '1', 2, 63, 65, 'Cañete'),
(2, 1, 1, 'Condominio Falcon', 'condominio-falcon', 'Un lugar moderno y seguro, ubicado en San Juan de Lurigancho, uno de los distritos con mayor desarrollo comercial y social. Si te inquieta la seguridad, Condominio Falcon posee un pórtico de ingreso y cerco que rodea todo el perímetro, te invitamos a conocer más sobre nuestro proyecto y darte la oportunidad de construir tu hogar con nosotros.', 'bQpYV3WZ47I', 3, '1500', '650', '300000', '120000', '36', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros) ffff', '987654321', '2021-06-26 20:16:47', '1', 1, 51, 66, 'Lima'),
(3, 1, 1, 'Condominio Oasis', 'condominio-oasis', 'Nuestro Oasis Condominio tiene todo lo que buscas de una gran oportunidad de invertir en el mejor lugar.\r\nEl proyecto cuenta con una excelente ubicación cerca de la ciudad de Cañete, donde podrás vivir en armonía con la naturaleza y el mar.\r\nUn proyecto seguro y rentable ¿Qué esperas para cumplir el sueño de la casa propia?', 'OrxWcQB4ueg', 4, '1500', '650', '300000', '150000', '40', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-26 20:16:47', '1', 0, 64, 67, 'Cusco'),
(6, 1, 1, 'Planicie Sur', 'planicie-sur', 'Este es el momento indicado. Planicie Sur de Cañete, es el lugar ideal para construir ese hogar que anhelas, respirar aire puro y disfrutar de la tranquilidad y naturaleza. Contamos con lotes ecológicos a precios de súper oferta ¿Qué esperas para cumplir tus sueños?', 'OrxWcQB4ueg', 6, '1500', '650', '300000', '120000', '45', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-26 20:35:05', '1', 3, 53, 68, 'Cañete'),
(7, 1, 1, 'Mega Mercado Santa Rosa', 'mega-mercado-santa-rosa', 'Diseñado con un estilo totalmente innovador y sorprendente, nuestro mega mercado reúne la más completa oferta comercial del sector, acorde a las preferencias del público de su zona de influencia.\r\nEn el Mega Mercado Santa Rosa podrás encontrar la más amplia gama de ofertas y afines. Cuenta con la mayor cantidad de espacios abiertos y áreas verdes, siguiendo las últimas tendencias mundiales en diseño, arquitectura y construcción.', 'OrxWcQB4ueg', 5, '1500', '650', '350000', '150000', '55', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-26 20:36:52', '1', 5, 52, 69, 'Arequipa'),
(8, 1, 1, 'El Palmar de Surco', 'el-palmar-de-surco', 'Tu nuevo departamento te espera, El Palmar de Surco ubicado a un paso de la base aérea Las Palmas. Vivirás rodeado de parques, supermercados, colegios, hospitales y más.', 'EszBkjtG7wA', 1, '1500', '650', '350000', '150000', '55', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-27 11:46:30', '1', 4, 7, 70, 'Cañete'),
(9, 1, 1, 'Condominio Apolo', 'condominio-apolo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'EszBkjtG7wA', 1, '1500', '650', '350000', '150000', '55', 1, '-12.0476351', '-76.9237588', 'Calle Luis Espejo 1097, Cercado de Lima 15034', 'Av. Camino real con Av. Tres (A 100 metros)', '987654321', '2021-06-27 11:48:57', '1', 0, 7, 0, 'Amazonas');

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
  `number_order` int(11) NOT NULL
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
(19, 8, 62, 3);

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
(1, 'Taylor', 'Alisson', 'Swift', 'Swift', 'taylorswift', '123456', NULL, '2021-06-16 23:28:15', 1);

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
-- Indices de la tabla `team`
--
ALTER TABLE `team`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `propertybenefits`
--
ALTER TABLE `propertybenefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `propertygallery`
--
ALTER TABLE `propertygallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `propertyteam`
--
ALTER TABLE `propertyteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
