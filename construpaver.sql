-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: construpaver.cfcpvwksy2ah.sa-east-1.rds.amazonaws.com    Database: construpaver
-- ------------------------------------------------------
-- Server version	5.6.23-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portfolio` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `tit_imagem` varchar(255) NOT NULL,
  `tx_imagem` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (23,'Combina','O paver proporciona trabalhos com diferentes combina','IMG10016.jpg'),(24,'Piso drenante','Para uma melhor capta','20130118_162018.jpg'),(25,'Paver e Paisagismo','Combina','20140530_110315.jpg'),(26,'Ruas de condom','Pavimenta','20150220_105031.jpg'),(27,'','Paver colorido em ','20150220_105224.jpg'),(28,'Piso interno de Barrac','Servi','20130424_153746.jpg'),(29,'','Obra de paver compondo o ambiente da piscina.','20140806_105022.jpg'),(30,'Estacionamento de condom','','20150206_154128.jpg'),(31,'Cal','Cumprindo sempre as exig','20130914_160637.jpg'),(32,'Projetos diferenciados','Gostamos de trabalhos onde se exige um maior empenho de nossos colaboradores.','20121127_151548.jpg'),(33,'Piscina de Fibra','Cal','DSC05894.JPG'),(34,'Rampa em paver','Nesta obra foi usado o paver de 4cm em uma rampa bem ingrime, colado em argamassa.','DSC05054.JPG'),(35,'Bosque','Obra com o paver fazendo contorno em volta das arvores do bosque do restaurante da Unopar em Londrina.','20121029_103546.jpg'),(36,'Concregrama','Para ','DSC05081.JPG'),(37,'Pintura de vagas de estacionamento','Quando a op','20150206_085015.jpg'),(38,'Estacionamento','Piso usado aberto para ','20150206_092037.jpg'),(39,'Obras P','UPA Leste Oeste de Londrina','20150207_092259.jpg'),(40,'Marca','Piso Ossinho colocado aberto nas vagas de estacionamento e fechado no passeio dos pedestres.','20140710_143801.jpg');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `ativo` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'damasio_damasio@hotmail.com','a5d968b5f14708ab781e85b57cbbc0123530886f',1),(4,'contato@construpaver.com.br','7114e39581532dca8aad0901ac0b6fcddb34f226',1);
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

-- Dump completed on 2016-04-26 17:47:39
