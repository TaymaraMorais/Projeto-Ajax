-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: loja_pets
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.33-MariaDB

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
-- Dumping data for table `doacoes`
--

LOCK TABLES `doacoes` WRITE;
/*!40000 ALTER TABLE `doacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `doacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `mensagem`
--

LOCK TABLES `mensagem` WRITE;
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
INSERT INTO `mensagem` VALUES (1,'Carlos Eduardo Leonel dos Sant','carloseduardoleonel17@gmail.com',82981829223,'FDgdfgfd'),(2,'Carlos Eduardo Leonel dos Sant','carloseduardoleonel17@gmail.com',82981829223,'FDgdfgfd'),(3,'Carlos Eduardo Leonel dos Sant','carloseduardoleonel17@gmail.com',82981829223,'FDgdfgfd'),(4,'Carlos Eduardo Leonel dos Sant','carloseduardoleonel17@gmail.com',82981829223,'FDgdfgfd'),(5,'Carlos Eduardo Leonel dos Sant','carloseduardoleo@outlook.com',82981829223,'nnnn'),(6,'Carlos Eduardo Leonel dos Sant','fgfdg@gmail.com',82981829223,'fgdf\r\n'),(7,'Carlos Eduardo Leonel dos Sant','fgfdg@gmail.com',82981829223,'fgdf\r\n'),(8,'Dudu','dfgd@gmail.com',82981829223,'gdgdfg'),(9,'Dudu','dfgd@gmail.com',82981829223,'gdgdfg'),(10,'Carlos Eduardo Leonel dos Sant','carloseduardoleonel17@gmail.com',82981829223,'bbbbbbbbb'),(11,'Carlos Eduardo Leonel dos Sant','carloseduardoleonel17@gmail.com',82981829223,'sdfgdf'),(12,'Carlos Eduardo Leonel dos Sant','carloseduardoleonel17@gmail.com',82981829223,'fdgd');
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pets`
--

LOCK TABLES `pets` WRITE;
/*!40000 ALTER TABLE `pets` DISABLE KEYS */;
INSERT INTO `pets` VALUES (1,'John','gato',8,'gato-filhote.jpg','Eh um gato massa','Lucas Mendinho',2,'Lucas Mendinho'),(2,'Cortez','cachorro',24,'beijo_lambida_cachorro.png','dfgdfgdf','Carlos Eduardo Leonel dos Santos',2,'Carlos Eduardo Leonel dos Santos'),(3,'Scooby','cachorro',8,'beijo_lambida_cachorro.png','sei la','Carlos Eduardo Leonel dos Santos',2,'Carlos Eduardo Leonel dos Santos'),(4,'Artista X','gato',8,'caixa.jpg','fdgdf','Carlos Eduardo Leonel dos Santos',2,'Carlos Eduardo Leonel dos Santos'),(5,'Drone','coelho',15,'papagaio-verdadeiro.jpg','Bicho foda','Felipe Alencar',2,'Felipe Alencar'),(6,'Outro animal','coelho',18,'golden-idoso.jpg','ffd','Carlos Eduardo Leonel dos Santos',2,'Carlos Eduardo Leonel dos Santos'),(7,'Cadu','gato',19,'gato-filhote.jpg','Krl ratinho','Carlos Eduardo Leonel dos Santos',2,'Carlos Eduardo Leonel dos Santos'),(8,'Carlos Eduardo Leonel dos Santos','cachorro',12,'beijo_lambida_cachorro.png','ggdfgfgdf','Carlos Eduardo Leonel dos Santos',2,'Carlos Eduardo Leonel dos Santos');
/*!40000 ALTER TABLE `pets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Carlos Eduardo Leonel dos Santos','13262620416','carloseduardoleonel17@gmail.com','cadu','123'),(2,'Lucas Mendinho','12921601443','lucasmendes@gmail.com','lucas','123'),(3,'Felipe Alencar','1234567','felipealencar@gmail.com','belo','123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'loja_pets'
--

--
-- Dumping routines for database 'loja_pets'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-04 14:17:55
