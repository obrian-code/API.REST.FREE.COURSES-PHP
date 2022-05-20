-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2022 a las 04:58:07
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `free_courses`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `coupon` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `idiom` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `days_public` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `coupon`, `days`, `url`, `idiom`, `category`, `url_img`, `rating`, `days_public`) VALUES
(1, 'ReactJS más Webpack más SASS | Crea un Proyecto 0 a Producción', 'Aprenderás ReactJS más Webpack más SASS, creando un proyecto 0 a producción', 'FREEFEB33', '2021-08-09', 'https://www.udemy.com/course/step-by-step-guide-to-machine-learning-course/?ranMID=39197&ranEAID=sIt9MIeGnaM&ranSiteID=sIt9MIeGnaM-iQ64yr7pp0dBCKpfI0q.jQ&LSNPUBID=sIt9MIeGnaM&utm_source=aff-campaign&', 'Español', 'Development', 'https://img-c.udemycdn.com/course/480x270/3738864_571d.jpg', 1, '2022-03-31'),
(10, 'Bash Scripting Basics', 'Automate Linux, Unix or Mac', 'FREEFEB32', '2021-08-09', 'https://www.udemy.com/course/step-by-step-guide-to-machine-learning-course/?ranMID=39197&ranEAID=sIt9MIeGnaM&ranSiteID=sIt9MIeGnaM-iQ64yr7pp0dBCKpfI0q.jQ&LSNPUBID=sIt9MIeGnaM&utm_source=aff-campaign&\'', 'English', 'Development ', 'https://img-c.udemycdn.com/course/480x270/1554180_150a_2.jpg', 0, '2022-03-31'),
(17, 'Modern PHP Web Development MySQL, GitHub and Heroku', 'Learn to develop data driven web applications using PHP and MySQL, manage them with GitHub and deploy to Heroku', 'PREEFEB32', '2021-08-09', 'https://www.udemy.com/course/step-by-step-guide-to-machine-learning-course/?ranMID=39197&ranEAID=sIt9MIeGnaM&ranSiteID=sIt9MIeGnaM-iQ64yr7pp0dBCKpfI0q.jQ&LSNPUBID=sIt9MIeGnaM&utm_source=aff-campaign&', 'English', 'Development', 'https://img-c.udemycdn.com/course/480x270/2503776_ecb8.jpg', 0, '2022-03-31'),
(18, 'C Sharp Console and Windows Forms Development with LINQ and ADO.NET', 'Learn to build a practical Data Driven Windows Forms Application using C Sharp, LINQ and SQL Server Express.', 'VREEFEB32', '2021-08-09', 'https://www.udemy.com/course/step-by-step-guide-to-machine-learning-course/?ranMID=39197&ranEAID=sIt9MIeGnaM&ranSiteID=sIt9MIeGnaM-iQ64yr7pp0dBCKpfI0q.jQ&LSNPUBID=sIt9MIeGnaM&utm_source=aff-campaign&', 'English', 'Development', 'https://img-c.udemycdn.com/course/480x270/2759996_44f6_2.jpg', 0, '2022-03-31'),
(22, 'Master Effects in Adobe After Effects', 'Harnes the power of effects in Adobe After Effects', 'FREEFEB32', '2021-08-09', 'https://www.udemy.com/course/step-by-step-guide-to-machine-learning-course/?ranMID=39197&ranEAID=sIt9MIeGnaM&ranSiteID=sIt9MIeGnaM-iQ64yr7pp0dBCKpfI0q.jQ&LSNPUBID=sIt9MIeGnaM&utm_source=aff-campaign&', 'English', 'Development', 'https://img-c.udemycdn.com/course/480x270/4183806_f492.jpg', 0, '2022-03-31'),
(23, 'Python Network Programming for Network Engineers (Python 3)', 'Program networks using Python version 3. Learn network programmability with this practical GNS3 and Cisco course', 'FREEFEB32', '2021-08-09', 'https://www.udemy.com/course/step-by-step-guide-to-machine-learning-course/?ranMID=39197&ranEAID=sIt9MIeGnaM&ranSiteID=sIt9MIeGnaM-iQ64yr7pp0dBCKpfI0q.jQ&LSNPUBID=sIt9MIeGnaM&utm_source=aff-campaign&', 'English', 'Development', 'https://img-c.udemycdn.com/course/480x270/1554180_150a_2.jpg', 0, '2022-03-31'),
(24, 'Complete CCNP ENARSI (300-410) Master Class', 'Get ready to crush your Cisco CCNP ENARSI (300- 410) exam! This course will help prepare you for your CCNP or CCIE certs', 'FREEFEB32', '2021-08-09', 'https://www.udemy.com/course/step-by-step-guide-to-machine-learning-course/?ranMID=39197&ranEAID=sIt9MIeGnaM&ranSiteID=sIt9MIeGnaM-iQ64yr7pp0dBCKpfI0q.jQ&LSNPUBID=sIt9MIeGnaM&utm_source=aff-campaign&', 'English', 'Development', 'https://img-c.udemycdn.com/course/480x270/4206756_7db7.jpg', 0, '2022-03-31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
