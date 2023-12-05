-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (arm64)
--
-- Host: 127.0.0.1    Database: andrino
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
  `tipo_donacion` varchar(45) DEFAULT NULL,
  `pasaporte` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `genero` varchar(5) DEFAULT NULL,
  `etnico` varchar(45) DEFAULT NULL,
  `prof` varchar(45) DEFAULT NULL,
  `comunidad` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `direccion` varchar(350) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `civil` varchar(45) DEFAULT NULL,
  `tiposangre` varchar(45) DEFAULT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `temp` varchar(45) DEFAULT NULL,
  `presion` varchar(45) DEFAULT NULL,
  `pulso` varchar(45) DEFAULT NULL,
  `hemoglobina` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `comentarios` varchar(400) DEFAULT NULL,
  `status` int DEFAULT '1',
  PRIMARY KEY (`iddonadores`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donadores`
--

LOCK TABLES `donadores` WRITE;
/*!40000 ALTER TABLE `donadores` DISABLE KEYS */;
INSERT INTO `donadores` VALUES (1,'Sangle Completa','34343434','Edwin Orellana','Femen','Garifuna','sdfsdf','sdfsdf','2004-01-13','Guatemalteco','2da Calle 9-22 Zona 2','44312776','Unido','B+','2323','23','23','23','23','2023-12-05 03:55:03','sdfsdfsdfsd',3),(2,'Aferesis','3434343434','Mengano Otoniel','Mascu','Mestizo','Programador','Edddd','2004-01-13','Guatemala','sdfsdfsdfsdfsd f sdf dsf sd fsd f','34343434','Casado','AB-','344','34','34','34','34','2023-12-05 03:57:31',NULL,1),(3,'Aferesis','3434343434','Otro donador','Femen','Xinca','dsfsdfsd','sdfsdf','1995-07-12','sddsfsd','sdfsdfsdfsd','33434','Casado','A-','34','34','34','34','34','2023-12-05 05:17:31','sfds dfs fs dfsf sdfs df sdfdsf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sd f sdf sdf s df sd',3);
/*!40000 ALTER TABLE `donadores` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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

-- Dump completed on 2023-12-05  0:15:01
