-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para dashboard_adminlte
CREATE DATABASE IF NOT EXISTS `dashboard_adminlte` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dashboard_adminlte`;

-- Volcando estructura para tabla dashboard_adminlte.parametros
CREATE TABLE IF NOT EXISTS `parametros` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tabla_id` int DEFAULT NULL,
  `valor` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla dashboard_adminlte.parametros: ~0 rows (aproximadamente)

-- Volcando estructura para tabla dashboard_adminlte.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  `date_token` datetime DEFAULT NULL,
  `path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  `role` int NOT NULL DEFAULT '0',
  `role_id` int DEFAULT '0',
  `permisos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  `estatus` int NOT NULL DEFAULT '1',
  `band` int NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `dispositivo` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla dashboard_adminlte.users: ~3 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `telefono`, `token`, `date_token`, `path`, `role`, `role_id`, `permisos`, `estatus`, `band`, `created_at`, `updated_at`, `deleted_at`, `dispositivo`) VALUES
	(1, 'Yonathan Castillo r', 'leothan522@gmail.com', '$2y$10$Hx0iUXf01RZUqq0xBHyVueBg3FoiGpCEtSTZ8tU0rAK30RffBMiAC', '(0424) 338-66.00', NULL, NULL, NULL, 100, 0, NULL, 1, 1, '2023-08-12', NULL, NULL, 0),
	(2, 'Antonny Maluenga', 'gabrielmalu15@gmail.com', '$2y$10$XibWahOwcjxTdM.YWlhrTuA8gJZeyK7fLe9Ge5yrI5loizvfE2sea', '(0412) 199-56.47', NULL, NULL, NULL, 100, 0, NULL, 1, 1, '2023-08-28', NULL, NULL, 0),
	(3, 'Administrador', 'admin@adminlte.com', '$2y$10$5Fl3weju4a/JQi/x92lIMuXgXUr0dsxp6CIIikPNtNRyjDUlxj4ge', '(0424) 338-66.00', NULL, NULL, NULL, 99, 0, NULL, 0, 0, '2023-09-28', NULL, NULL, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
