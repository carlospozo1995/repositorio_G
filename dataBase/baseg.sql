-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cg
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `menu_categoria`
--

DROP TABLE IF EXISTS `menu_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_menu` varchar(100) DEFAULT NULL,
  `icon_item` varchar(100) DEFAULT NULL,
  `father_id` int(11) DEFAULT NULL,
  `level_product` varchar(50) DEFAULT NULL,
  `nombre_level` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_categoria`
--

LOCK TABLES `menu_categoria` WRITE;
/*!40000 ALTER TABLE `menu_categoria` DISABLE KEYS */;
INSERT INTO `menu_categoria` VALUES (1,'ELECTRODOMÉSTICOS','electrodomesticos.png',NULL,NULL,NULL),(2,'Climatización',NULL,1,NULL,NULL),(3,'Aires acondicionados',NULL,2,'level3',NULL),(4,'Ventiladores',NULL,2,'level3',NULL),(5,'Cocina',NULL,1,NULL,NULL),(6,'Cocinas a gas',NULL,5,'level3',NULL),(7,'Hornos',NULL,5,'level3',NULL),(8,'Lavado',NULL,1,NULL,NULL),(9,'Lavadoras',NULL,8,'level3',NULL),(10,'Refrigeración',NULL,1,NULL,NULL),(11,'Congeladores',NULL,10,'level3',NULL),(12,'Refrigeradoras',NULL,10,'level3',NULL),(13,'AUDIO Y VIDEO','entretenimiento.png',NULL,NULL,NULL),(14,'Audio y sonido',NULL,13,NULL,NULL),(15,'Equipos de sonido',NULL,14,'level3',NULL),(16,'Parlantes portátiles',NULL,14,'level3',NULL),(17,'Audífonos',NULL,14,'level3',NULL),(18,'Micrófonos',NULL,14,'level3',NULL),(19,'Barras de sonido',NULL,14,'level3',NULL),(20,'TV y video',NULL,13,NULL,NULL),(21,'Televisores',NULL,20,'level3',NULL),(22,'Soportes de pared',NULL,20,'level3',NULL),(23,'Antenas prepago',NULL,20,'level3',NULL),(24,'TECNOLOGÍA','computer.png',NULL,NULL,NULL),(25,'Computadoras',NULL,24,NULL,NULL),(26,'Laptos',NULL,25,'level3',NULL),(27,'Impresoras',NULL,25,'level3',NULL),(28,'Accesorios',NULL,25,'level3','Computadoras-'),(29,'Tablets',NULL,25,'level3',NULL),(30,'Teléfonos',NULL,24,NULL,NULL),(31,'Smartphones',NULL,30,'level3',NULL),(32,'Accesorios',NULL,30,'level3','Teléfonos-'),(33,'Proyectores',NULL,24,'level3',NULL),(34,'Smartwatch',NULL,24,'level3',NULL),(35,'ELECTROMENORES','electromenores.png',NULL,NULL,NULL),(36,'Ayudantes de cocina',NULL,35,NULL,NULL),(37,'Arroceras',NULL,36,'level3',NULL),(38,'Ollas eléctricas',NULL,36,'level3',NULL),(39,'Exprimidores',NULL,36,'level3',NULL),(40,'Licuadoras',NULL,36,'level3',NULL),(41,'Microondas',NULL,36,'level3',NULL),(42,'Batidoras',NULL,36,'level3',NULL),(43,'Sanducheras',NULL,36,'level3',NULL),(44,'Freidoras de aire',NULL,36,'level3',NULL),(45,'Dispensadores de agua',NULL,36,'level3',NULL),(46,'Cafeteras',NULL,36,'level3',NULL),(47,'Ayudantes del hogar',NULL,35,NULL,NULL),(48,'Aspiradoras',NULL,47,'level3',NULL),(49,'Planchas de ropa',NULL,47,'level3',NULL),(50,'MOVILIDAD','motorbike.png',NULL,NULL,NULL),(51,'Motos',NULL,50,NULL,NULL),(52,'Todos los modelos',NULL,51,'level3','Motos-'),(53,'Scooter',NULL,50,NULL,NULL),(54,'Todos los modelos',NULL,53,'level3','Scooter-'),(55,'Bicicletas',NULL,50,NULL,NULL),(56,'Montañas',NULL,55,'level3','Bicicletas-'),(57,'BMX',NULL,55,'level3','Bicicletas-'),(58,'Infantiles',NULL,55,'level3','Bicicletas-'),(59,'Accesorios',NULL,50,NULL,NULL),(60,'Cascos',NULL,59,'level3',NULL),(61,'Accesorios de motos',NULL,59,'level3',NULL),(62,'CUIDADO PERSONAL','aseo.png',NULL,NULL,NULL),(63,'Planchas y rizadores',NULL,62,'level3',NULL),(64,'Afeitadoras y cortadoras de pelo',NULL,62,'level3',NULL),(65,'Secadoras de pelo',NULL,62,'level3',NULL),(66,'HOGAR','hogar.png',NULL,NULL,NULL),(67,'Cocina',NULL,66,NULL,NULL),(68,'Ollas y sartenes',NULL,67,'level3',NULL),(69,'Utensillos',NULL,67,'level3',NULL),(70,'Recipientes',NULL,67,'level3',NULL),(71,'Limpieza',NULL,66,NULL,NULL),(72,'Hidrolavadoras',NULL,71,'level3',NULL),(73,'Accesorios',NULL,71,'level3','Hidrolavadoras-'),(74,'Dormitorio',NULL,66,NULL,NULL),(75,'Colchones',NULL,74,'level3',NULL),(76,'Bases de colchones',NULL,74,'level3',NULL),(77,'Almohadas',NULL,74,'level3',NULL),(78,'Camas y sofacamas',NULL,74,'level3',NULL),(79,'Organización',NULL,66,NULL,NULL),(80,'De escritorio',NULL,79,'level3','Organización'),(81,'De cocina',NULL,79,'level3','Organización'),(82,'De baño',NULL,79,'level3','Organización');
/*!40000 ALTER TABLE `menu_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `codproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `imagen` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`codproducto`),
  KEY `menu_id_products_fk_idx` (`id_categoria`),
  CONSTRAINT `menu_id_products_fk` FOREIGN KEY (`id_categoria`) REFERENCES `menu_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Laptop IdeaPad 3-15IML | Platinum Grey','Tecnología que transforma tu mundo con Lenovo.',1129.14,'Samsung','img_46752661707b98ce3341bd312cf55c6a.png',26,1),(2,'Colchón Continental de Lujo Tradicional | 2 Plazas.','Ten un descanso confortable con nuestra línea de colchones pensada para ti.',465.61,'Chaide','img_831971380a3304b28e666400b0d1f633.png',75,1),(3,'Colchón Continental de Lujo Tradicional | 2 Plazas.','Ten un descanso confortable con nuestra línea de colchones pensada para ti.',247.00,'Chaide','img_aa51bbccf1c84ad5c3b55461cf68179f.png',75,1),(4,'Laptop_ph317-55-73qw| Negro','Un estilo de laptop perfecto que se adapta perfectamente a ti, con una apariencia que dice: ”Que comience la partida, estoy listo”.',2150.00,'Acer','img_81ce37edbf2e0c52ba62f339684df835.png',26,1),(5,'Rizador de cabello CI63N1','Crea hermosas ondas y rizos de apariencia natural en poco tiempo. Remington.',58.00,'Remington','img_dce9cba038d2dc22f041d8cf8d8f7e8b.png',63,1),(6,'Proyector Láser SP-LSP9TPAXPA','Crea tu propio cine en casa EN LASER 4K.',5999.35,'Samsung','img_8220c6acb857b354f747bfa05d099d3a.png',33,1),(7,'Extractor de jugo HE-3391 | Negro','Disfruta de una buena salud con jugos recién exprimidos desde la comodidad de tu hogar',77.00,'Home Elements','img_2353bcd6bf9b01dbe25e66c3ee36917c.png',39,1),(8,'Casco Integral PIR MX-199 | Negro Talla M','Protección, diseño y seguridad para ti.',35.00,'Pirel','img_5b0fd37fab1f5382d995d2486be65bbc.png',61,1),(9,'Moto Deportiva 6 I 250 | Negro 2022','Encuentra todas nuestras opciones de movilidad versátiles y seguras. Marca Shineray',2155.00,'Shineray','img_deb7499396d4a6a6e88af9aaffc2ea3b.png',52,1),(10,'Audifonos BUDS 2 | Blanco','Audífonos que ofrecen excelente calidad. Marca Samsung.',149.00,'Samsung','img_ab8398adbafe503dc0d1456aef136b51.png',32,1),(11,'Televisor Qled QN65Q65BAPXPA 65\" | UHD 4K','Pasa horas de entretenimiento viendo tu contenido favorito, con una resolución excelente. Marca Samsung.',1541.71,'Samsung','img_46bb627316a8e76c3d83a0242934a3ba.png',21,1),(12,'Ventilador pedestal negro | Negro','Refresca tu día a día',51.00,'Home Elements','img_0de135ba205a2d6df39d6161ad69aa01.png',4,1),(13,'Televisor Smart 65UP7700PSB 65\"| UHD 4K','Pasa horas de entretenimiento viendo tu contenido favorito, con una resolución excelente. Marca LG.',1074.93,'LG','img_6d1c85d4675c332cdd7934540f31844a.png',21,1),(14,'Televisor Led GL50C2000NHS 50\" |UHD 4K','Pasa horas de entretenimiento viendo tu contenido favorito, con una resolución excelente. Marca Global,',519.00,'Global','img_b5117e8a235a3b15df1393c9f95bce84.png',21,1),(15,'Cocina a gas Alcalá Spazio Plus','Cocinas con la mejor calidad y diseño excepcional pensadas para mejorar tu día a día. Marca Indurama.',389.01,'Indurama','img_db2c8cc99ec4e1ae01ae6cffc7ff88ad.png',6,1);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol_user`
--

DROP TABLE IF EXISTS `rol_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol_user` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol_user`
--

LOCK TABLES `rol_user` WRITE;
/*!40000 ALTER TABLE `rol_user` DISABLE KEYS */;
INSERT INTO `rol_user` VALUES (1,'Administrador'),(2,'Supervisor');
/*!40000 ALTER TABLE `rol_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `rol_user` int(11) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_user`),
  KEY `fk_user_fk_rol_idx` (`rol_user`),
  CONSTRAINT `fk_user_fk_rol` FOREIGN KEY (`rol_user`) REFERENCES `rol_user` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Carlos','Pozo','carlos@gmail.com','Administrador','041175c2d193297c89889ca3ebb47c68',1,1),(2,'Freddy','Magallanes','freddy@freddy.com','Fred','48f6fcc05b7393f8b581e0a66402f994',2,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-08 18:34:17
