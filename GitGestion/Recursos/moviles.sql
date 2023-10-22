-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 07:24:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moviles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Cod_Pro` int(11) NOT NULL,
  `Nom_Pro` varchar(50) NOT NULL,
  `Mar_Pro` varchar(50) NOT NULL,
  `Gra_Alc_Pro` double NOT NULL,
  `Car_1_Pro` varchar(40) NOT NULL,
  `Car_2_Pro` varchar(40) NOT NULL,
  `Car_3_Pro` varchar(40) NOT NULL,
  `Ama_Pro` varchar(20) NOT NULL,
  `Cue_Pro` varchar(20) NOT NULL,
  `Pre_Pro` double NOT NULL,
  `Des_Pro` varchar(500) NOT NULL,
  `IBU` double NOT NULL,
  `Rut_Pro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Cod_Pro`, `Nom_Pro`, `Mar_Pro`, `Gra_Alc_Pro`, `Car_1_Pro`, `Car_2_Pro`, `Car_3_Pro`, `Ama_Pro`, `Cue_Pro`, `Pre_Pro`, `Des_Pro`, `IBU`, `Rut_Pro`) VALUES
(1, 'Pedro Ximenez', 'BlackBlock', 13, 'Chocolate', 'Copos Cebada', 'Magnum', 'Alto', 'Medio', 4.5, 'La Black Block de siempre añejada durante 2 años en barricas de PX. Una delicia para los sentidos.', 60, 'Recursos/Imagenes/Productos/PedroXimenez.png'),
(2, 'Palo Cortado', 'BlackBlock', 13, 'Cebada Asada', 'Avena', 'Malta Extra Palida', 'Alto', 'Medio', 4, 'Nuestra Black Block de siempre, madurada en barricas de Palo Cortado durante 2 años. Yummm!', 60, 'Recursos/Imagenes/Productos/Bourbon.png'),
(3, 'The Last Dark Dawn', 'BlackBlock', 15, 'Dextrina', 'Copos Trigo', 'Cebada Tostada', 'Alto', 'Alto', 3.85, 'Algo “grande” o “muy grande”, que destaca por su magnitud. Oscuridad, densidad, potencia, cremosidad, torrefacción…', 65, 'Recursos/Imagenes/Productos/TheLastDark.png'),
(4, 'Vanilla Black Velvet', 'BlackBlock', 10.3, 'Vainilla', 'Avena', 'Malta Extra Palida', 'Medio', 'Medio', 4.2, 'No queremos presumir demasiado… pero esto es un BIRROTE! La mezcla ha sido mágica y el resultado es sorprendente y no te dejará indiferente.', 40, 'Recursos/Imagenes/Productos/Vanilla.png'),
(5, 'Russian Imperial Stout', 'BlackBlock', 11.2, 'Chocolate', 'Copos Cebada', 'Malta Palida', 'Alto', 'Medio', 3.25, 'Buque insignia de la nave Pirata, nuestra Russian Imperial Stout de 11,2% es una cerveza con mucha presencia, mucho cuerpo, mucha densidad y absoluta oscuridad, potente y redonda, para los buenos amantes de las stout. Balanceada, bastante dulce y de ligero amargor final, resinoso y de licor.', 60, 'Recursos/Imagenes/Productos/Russian.png'),
(6, 'Black Country', 'BlackBlock', 4, 'Malta Cafe', 'Avena Dorada', 'Willamette', 'Bajo', 'Bajo', 2.75, 'Es tiempo de darle el poder a aquellos a quienes nunca se les debió arrebatar. Volverá a nuestras manos. No más élites, no más dirigentes corruptos, es nuestra hora. ¡Tened cuidado, nos habéis cabreado!', 20, 'Recursos/Imagenes/Productos/BlackCountry.png'),
(7, 'Cocobänger', 'Pöhjala', 12.5, 'Coco Cremoso', 'Ciruelas', 'Café Tostado', 'Alto', 'Medio', 5.8, 'Pöhjala Cocobänger es una cerveza estilo Imperial Stout elaborada con cremoso coco y café de Costa Rica. Cocobänger  presenta aromas a coco tostado, pasas y licor de café, en boca el coco está presente, seguido del café, ciruelas y moras.', 60, 'Recursos/Imagenes/Productos/CocoBanger.png'),
(8, 'Öö', 'Pöhjala', 10.5, 'Cacao', 'Café Expreso', 'Regaliz', 'Bajo', 'Alto', 4.6, 'Pöhjala Öö es una cerveza estilo baltic porter  con notas a café expreso, cacao, regaliz y cuero, el cuerpo amargo y sedoso está suavemente carbonatado con un lado salado de umami y una sequedad astringente que llena perfectamente el paladar.', 0, 'Recursos/Imagenes/Productos/Oo.png'),
(9, 'Pime Öö', 'Pöhjala', 13.6, 'Chocolate', 'Grosellas Negras', 'Nuez', 'Alto', 'Medio', 5.2, 'Pöhjala Forest Pime Öö es una cerveza estilo Imperial Stout en donde las grosellas negras y las ciruelas se perciben en boca seguidas de toques de jazmín y nuez, de carbonatación baja que ayuda a limpiar el paladar antes de que termine la sensación de un brownie de chocolate.', 60, 'Recursos/Imagenes/Productos/PrimeOo.png'),
(10, 'Must Kuld', 'Pöhjala', 7.8, 'Leche', 'Miel', 'Nuez', 'Bajo', 'Bajo', 3.5, 'Pöhjala Must Kuld es una cerveza estilo Porter elaborada con leche. miel y grosella. Must Kuld presenta aromas a chocolate y café.', 20, 'Recursos/Imagenes/Productos/MustKuld.png'),
(11, 'MILAFIÜ', 'PintalPina', 5.5, 'Miel Valtellina', 'Malta Cebada', 'Levadura', 'Bajo', 'Medio', 3.2, 'Cerveza fresca y refrescante, con una graduación alcohólica ligera que facilita su consumo en abundancia. Malta, miel, lúpulo y levadura. Una bebida delicada con notas de miel y heno cerrada por un elegante final especiado.', 15, 'Recursos/Imagenes/Productos/Milafiu.png'),
(12, 'WITELA', 'PintalPina', 4.8, 'Malta Trigo', 'Aven', 'Hibisco', 'Bajo', 'Medio', 3.2, 'Witela es un witbier aromatizado con flores de hibisco y cilantro. Cerveza fresca y saciante con tonos delicados y ligeramente picantes. El trigo y la avena le dan una opalescencia típica y una espuma persistente.', 15, 'Recursos/Imagenes/Productos/Witela.png'),
(13, 'SUMARTÌ', 'PintalPina', 6, 'Centeno Valtellina', 'Malta Cebada', 'Levadura', 'Bajo', 'Bajo', 3.9, 'Cerveza estilo Saison, espumosa y ligera. La nariz recuerda a los aromas especiados y al heno de primavera. El centeno Valtellina y la levadura saison desprenden un aroma afrutado y una nota especiada\r\ny ligeramente picante.', 22.5, 'Recursos/Imagenes/Productos/Sumati.png'),
(14, 'RÜGEN', 'PintalPina', 6.5, 'Malta Cebada', 'Azucar Confitada', 'Levadura', 'Bajo', 'Medio', 3.2, 'Rügen es una cerveza equilibrada, de color caoba, con aromas especiados y ligeramente tostados. Aroma a frutos rojos maduros y frutos secos, con notas de galletas y chocolate.', 25, 'Recursos/Imagenes/Productos/Rugen.png'),
(15, 'SBERLUC', 'PintalPina', 5.5, 'Lupulo', 'Malta Cebada', 'Levadura', 'Bajo', 'Bajo', 3.9, 'Cerveza Lager, típica FestBier alemana de color dorado y fina espuma blanca. La nariz recuerda a la corteza de pan y a la miel. En boca, la dulzura de la malta y el lúpulo refinado equilibran un buen contenido de alcohol, lo que invita a beber.', 18, 'Recursos/Imagenes/Productos/Sberluc.png'),
(16, 'CRASC', 'PintalPina', 4.5, 'Raíz Regaliz', 'Malta Cebada', 'Levadura', 'Bajo', 'Medio', 3.2, 'Crasc es una cerveza negra con un aspecto nocturno con un sombrero grueso de espuma crema. En nariz desprende aromas a café tostado y cereales tostados. Agradablemente complejo, aporta un delicado chocolate negro a la boca complementado con toques de chinotto y raíz de regaliz. ', 22, 'Recursos/Imagenes/Productos/Crasc.png'),
(17, 'NIGULA', 'PintalPina', 4.5, 'Lupulo', 'Malta Cebada', 'Levadura', 'Medio', 'Bajo', 3.8, 'Cerveza ligera de color dorado, con un importante lupulado que libera aromas cítricos y herbáceos, dándole un sabor único, pero \"sencillo\". El cuerpo esbelto, pero con carácter, y el ligero amargor que emerge claramente la convierten en una cerveza con una excelente bebibilidad.', 33, 'Recursos/Imagenes/Productos/Nigula.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`, `email`, `telefono`, `rol`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin'),
('dallin', 'dallin123', 'clopez6341@uta.edu.ec', '803536341', 'cliente'),
('dallin2', 'dallin123', 'clopez6341@uta.edu.ec', '8035363410', 'cliente'),
('sebastian', '1850876630', '465', 'uj', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Cod_Pro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Cod_Pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
