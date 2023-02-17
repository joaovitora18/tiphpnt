-- MariaDB dump 10.19  Distrib 10.4.25-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ti93phpdb01
-- ------------------------------------------------------
-- Server version	10.4.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `status` enum('concluida','recusada','andamento') NOT NULL DEFAULT 'andamento',
  `dataex` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
INSERT INTO `reserva` VALUES (1,'Faustão','46598712165','asdf@gmail.com','0000-00-00','recusada',NULL),(2,'Fastão','46598712865','as9f@gmail.com','2023-12-15','recusada',NULL),(3,'Fastinho','46598712885','a89f@gmail.com','2023-12-14','recusada',NULL);
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbprodutos`
--

DROP TABLE IF EXISTS `tbprodutos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbprodutos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_produto` int(11) NOT NULL,
  `descri_produto` varchar(100) NOT NULL,
  `resumo_produto` varchar(1000) DEFAULT NULL,
  `valor_produto` decimal(9,2) DEFAULT NULL,
  `imagem_produto` varchar(50) DEFAULT NULL,
  `destaque_produto` enum('Sim','Não') NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `id_tipo_produto_fk` (`id_tipo_produto`),
  CONSTRAINT `id_tipo_produto_fk` FOREIGN KEY (`id_tipo_produto`) REFERENCES `tbtipos` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbprodutos`
--

LOCK TABLES `tbprodutos` WRITE;
/*!40000 ALTER TABLE `tbprodutos` DISABLE KEYS */;
INSERT INTO `tbprodutos` VALUES (11,8,'Pork Ribs Family','Costelinha Suína com Barbecue (congelada, refrigerada ou pronta para comer).\r\n1kg serve 2 a 3 pessoas',75.00,'costelatemp.png.jpg','Sim'),(12,8,'Pork Ribs','Costelinha Suína com Barbecue (Congelada, resfriada ou pronta entrega)\r\n500g serve 1 a 2 pessoas',40.00,'costelatemp.png.jpg','Não'),(13,9,'Chicken Lollipop ','Coxa de Frango com Dry Rub e Barbecue Congelada',40.00,'frango.png.jpg','Sim'),(14,9,'Chicken Thighs','Sobrecoxa desossada com Dry Rub e Barbecue Congelada',45.00,'sobrecoxa.png.jpg','Sim');
/*!40000 ALTER TABLE `tbprodutos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbtipos`
--

DROP TABLE IF EXISTS `tbtipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbtipos` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `sigla_tipo` varchar(3) NOT NULL,
  `rotulo_tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtipos`
--

LOCK TABLES `tbtipos` WRITE;
/*!40000 ALTER TABLE `tbtipos` DISABLE KEYS */;
INSERT INTO `tbtipos` VALUES (8,'por','porco'),(9,'fra','frango'),(10,'beb','bebidas');
/*!40000 ALTER TABLE `tbtipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbusuarios`
--

DROP TABLE IF EXISTS `tbusuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbusuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `login_usuario` varchar(30) NOT NULL,
  `senha_usuario` varchar(32) DEFAULT NULL,
  `nivel_usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `login_usuario_uniq` (`login_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbusuarios`
--

LOCK TABLES `tbusuarios` WRITE;
/*!40000 ALTER TABLE `tbusuarios` DISABLE KEYS */;
INSERT INTO `tbusuarios` VALUES (2,'Adriano','81dc9bdb52d04dc20036dbd8313ed055','supervisor'),(53,'Claudio','81dc9bdb52d04dc20036dbd8313ed055','supervisor'),(54,'joao','81dc9bdb52d04dc20036dbd8313ed055','supervisor'),(55,'joana','81dc9bdb52d04dc20036dbd8313ed055','comum');
/*!40000 ALTER TABLE `tbusuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `vw_tbprodutos`
--

DROP TABLE IF EXISTS `vw_tbprodutos`;
/*!50001 DROP VIEW IF EXISTS `vw_tbprodutos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vw_tbprodutos` (
  `id_produto` tinyint NOT NULL,
  `id_tipo_produto` tinyint NOT NULL,
  `sigla_tipo` tinyint NOT NULL,
  `rotulo_tipo` tinyint NOT NULL,
  `descri_produto` tinyint NOT NULL,
  `resumo_produto` tinyint NOT NULL,
  `valor_produto` tinyint NOT NULL,
  `imagem_produto` tinyint NOT NULL,
  `destaque_produto` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vw_tbprodutos`
--

/*!50001 DROP TABLE IF EXISTS `vw_tbprodutos`*/;
/*!50001 DROP VIEW IF EXISTS `vw_tbprodutos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_tbprodutos` AS select `p`.`id_produto` AS `id_produto`,`p`.`id_tipo_produto` AS `id_tipo_produto`,`t`.`sigla_tipo` AS `sigla_tipo`,`t`.`rotulo_tipo` AS `rotulo_tipo`,`p`.`descri_produto` AS `descri_produto`,`p`.`resumo_produto` AS `resumo_produto`,`p`.`valor_produto` AS `valor_produto`,`p`.`imagem_produto` AS `imagem_produto`,`p`.`destaque_produto` AS `destaque_produto` from (`tbprodutos` `p` join `tbtipos` `t`) where `p`.`id_tipo_produto` = `t`.`id_tipo` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-17 16:54:55
