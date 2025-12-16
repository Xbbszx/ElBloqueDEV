-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.17 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.14.0.7165
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para foropayos
CREATE DATABASE IF NOT EXISTS `foropayos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `foropayos`;

-- Volcando estructura para tabla foropayos.post
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `fecha_publicacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `info` text,
  KEY `Índice 1` (`id_post`),
  KEY `FK__usuarios` (`id_usuario`),
  CONSTRAINT `FK__usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla foropayos.post: ~0 rows (aproximadamente)
INSERT INTO `post` (`id_post`, `id_usuario`, `fecha_publicacion`, `info`) VALUES
	(2, 6, '2025-04-12 23:00:00', 'callate puto paruano de glovo'),
	(5, 6, '2025-12-16 11:45:51', 'cerda de mierda\r\n'),
	(7, 6, '2025-12-16 15:47:39', 'poya\r\n');

-- Volcando estructura para tabla foropayos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contra` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `seguidores` int(11) NOT NULL DEFAULT '0',
  `seguidos` int(11) NOT NULL DEFAULT '0',
  KEY `Índice 1` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla foropayos.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`id_user`, `usuario`, `correo`, `contra`, `seguidores`, `seguidos`) VALUES
	(5, 'adri', 'adri@gmail.com', '$2y$10$gaus6AGWDd7ZZ6F8Wzf0DOOmD/bXtCDvJtKhUf/JNi83YWisTAe6m', 1000215, 454521),
	(6, 'payo', 'payo@gmail.com', '$2y$10$NGmIj39EzmeFDtc5iGepbuBEbFjKuko0MvXm/8Qac8WBB7FVTMHgm', 0, 0),
	(7, 'test', 'test@gmail.com', '$2y$10$FmzZ2HzUFw/zfWZZCqtnd.KWyeXDbSrY6cdPBwrROCPiN173K1w8u', 0, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
