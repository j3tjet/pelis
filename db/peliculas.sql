-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 20:38:07
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
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `películas`
--

CREATE TABLE `películas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `portada` varchar(255) NOT NULL,
  `género` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `actores` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `películas`
--

INSERT INTO `películas` (`id`, `nombre`, `portada`, `género`, `sinopsis`, `director`, `actores`) VALUES
(1, 'El padrino', 'https://es.web.img3.acsta.net/c_310_420/pictures/18/06/12/12/12/0117051.jpg', 'Crimen', 'La historia de la familia Corleone, una de las cinco familias mafiosas que controlan la ciudad de Nueva York.', 'Francis Ford Coppola', 'Marlon Brando, Al Pacino, James Caan, Robert Duvall'),
(2, 'El señor de los anillos: La comunidad del anillo', 'https://es.wikipedia.org/wiki/El_Se%C3%B1or_de_los_Anillos:_La_comunidad_del_anillo#/media/File:The_Lord_of_the_Rings:_The_Fellowship_of_the_Ring_poster.jpg', 'Fantasía', 'La historia de Frodo Bolsón, un hobbit que debe destruir el Anillo Único, un poderoso artefacto maligno.', 'Peter Jackson', 'Elijah Wood, Ian McKellen, Viggo Mortensen, Orlando Bloom'),
(3, 'Pulp Fiction', 'https://es.wikipedia.org/wiki/Pulp_Fiction#/media/File:Pulp_Fiction_poster.jpg', 'Crimen', 'La historia de dos asesinos a sueldo, un boxeador, una banda de ladrones y una esposa adicta a la heroína.', 'Quentin Tarantino', 'John Travolta, Uma Thurman, Samuel L. Jackson, Bruce Willis'),
(4, 'Titanic', 'https://es.wikipedia.org/wiki/Titanic#/media/File:Titanic_(1997)_poster.jpg', 'Romance', 'La historia de Jack y Rose, dos jóvenes de diferentes clases sociales que se enamoran a bordo del Titanic, un trasatlántico que se hunde en su viaje inaugural.', 'James Cameron', 'Leonardo DiCaprio, Kate Winslet, Billy Zane, Kathy Bates'),
(5, 'Star Wars: Episodio IV - Una nueva esperanza', 'https://es.wikipedia.org/wiki/Star_Wars:_Episodio_IV_-_Una_nueva_esperanza#/media/File:Star_Wars_Episode_IV_-_A_New_Hope_poster.jpg', 'Fantasía', 'La historia de Luke Skywalker, un joven que se une a la Rebelión para luchar contra el Imperio Galáctico.', 'George Lucas', 'Mark Hamill, Harrison Ford, Carrie Fisher, Alec Guinness');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `películas`
--
ALTER TABLE `películas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `películas`
--
ALTER TABLE `películas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
