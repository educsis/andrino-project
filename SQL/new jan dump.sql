-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (arm64)
--
-- Host: localhost    Database: andrino
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `donadores`
--

DROP TABLE IF EXISTS `donadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donadores` (
  `iddonadores` int NOT NULL AUTO_INCREMENT,
  `tipo_donacion` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasaporte` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genero` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etnico` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prof` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comunidad` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nacionalidad` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiposangre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peso` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presion` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pulso` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hemoglobina` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `comentarios` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  PRIMARY KEY (`iddonadores`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donadores`
--

LOCK TABLES `donadores` WRITE;
/*!40000 ALTER TABLE `donadores` DISABLE KEYS */;
INSERT INTO `donadores` VALUES (1,'Sangle Completa','45345345345','sdfgdfsdf','Mascu','Mestizo','sdfsdf','sdfsdfsd','2024-01-22','sdfsdfsdf','sdfsdfsdfsdf','3434-4433','Soltero','A-','23','23','23','23','23','2024-01-21 22:47:20','werwerwer',4),(2,'Aferesis','345345345345345','edwin orellana','Femen','Mestizo','sdfsdfsdf','sdfsdfsdf','1967-03-04','sdfsdfsdf','sdfsdfsdfsdf','4431-2776','Casado','B+','34','34','34','34','34','2024-01-21 23:26:57',NULL,1);
/*!40000 ALTER TABLE `donadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fecha_diferido`
--

DROP TABLE IF EXISTS `fecha_diferido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fecha_diferido` (
  `id` int NOT NULL,
  `id_usuario` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fecha_diferido`
--

LOCK TABLES `fecha_diferido` WRITE;
/*!40000 ALTER TABLE `fecha_diferido` DISABLE KEYS */;
INSERT INTO `fecha_diferido` VALUES (0,1,'2024-05-04');
/*!40000 ALTER TABLE `fecha_diferido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flebotomia`
--

DROP TABLE IF EXISTS `flebotomia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `flebotomia` (
  `id` int NOT NULL,
  `id_usuario` int DEFAULT NULL,
  `horainicio` varchar(45) DEFAULT NULL,
  `horafin` varchar(45) DEFAULT NULL,
  `brazo` varchar(45) DEFAULT NULL,
  `cantidad` decimal(2,0) DEFAULT NULL,
  `tipobolsa` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flebotomia`
--

LOCK TABLES `flebotomia` WRITE;
/*!40000 ALTER TABLE `flebotomia` DISABLE KEYS */;
/*!40000 ALTER TABLE `flebotomia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idusuarios` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `status` int DEFAULT '1',
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Edwin Orellana','admin','educsis@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-21 17:55:00
