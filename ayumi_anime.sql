-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: ayumi_anime
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `add_ons`
--

DROP TABLE IF EXISTS `add_ons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `add_ons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `is_available` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_ons`
--

LOCK TABLES `add_ons` WRITE;
/*!40000 ALTER TABLE `add_ons` DISABLE KEYS */;
INSERT INTO `add_ons` VALUES (19,'Add my parfume to the item',1,50,'yes'),(20,'A sexy note signed by me',1,25,'yes'),(21,'Add my parfume to the item',3,30,'yes');
/*!40000 ALTER TABLE `add_ons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `tmp_user_id` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_time` int(11) NOT NULL,
  `updated_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `tmp_user_id` (`tmp_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (1,'','0e3d2b349387e5f06faa82338836569b',1513435566,1513440252),(2,'','00c7873029304dd317454354e29cb776',1513443868,1513449030),(3,'','e66deca5241b6d7512298b20ddb8eb38',1513532950,1513556234),(4,'','7c9fbed3c8f5203913399bb1dace13ec',1513588083,1513596479),(5,'','9a86fa6476f9569293dee1f0b505ed86',1513600971,1513604196),(6,'','f5451fd9f5706b4451558ace6355b3f6',1513607543,1513609439),(7,'','89eb05c20b275b0acca8f909b1ac3492',1513609643,1513609643),(8,'','6802159cf30374b365fb1009f5204483',1513609712,1513609712),(9,'','c7c8d72ab36e59c89f1b356c9d805544',1513609750,1513609750),(10,'','dcb30b8d5eb937fb3085b2dc1e129992',1513609953,1513609953),(11,'','f7814d74a3f690489d1f26923e7b3cd9',1513711655,1513711687),(12,'','e3056470447284311200f86fad7470c5',1513713195,1513716169),(13,'','958698c9143713f751a44efea5dadab9',1513771432,1513771820),(14,'','d51262802ab195259355bed4f1a4a9c7',1513773506,1513774277),(15,'','903f62e5da515a4989b6dd367d02d034',1513778363,1513781700),(16,'','935436482966d7caa2ce22101089f52a',1513781878,1513781878),(17,'','401a9976a09db557a686a38ae880d14e',1513781962,1513781964),(18,'','45562ed68ca7fd0e777859a8e35bd823',1513782157,1513782161),(19,'','0a3a8a0e627196546013b587f719db35',1513782437,1513789248),(20,'','d47d84108e857a42266b566370b6c305',1513789720,1513790307),(21,'','d1fb92350b6efe7217ddc454cbf96eb6',1513791059,1513792637),(22,'','6670960393c5f462c0a698b6e58dc7a1',1513796070,1513796070),(23,'','81b5a40473ed504c1759168d7458173f',1513796341,1513796560),(24,'','d55cd668eb47894a9127b3f908f58182',1513796764,1513797391),(25,'','4d0f2a5135d0d02fa58687319d989ce8',1513797803,1513797803),(26,'','ba13c99e0c7fdd682e900942afa37b4b',1513799731,1513800334),(27,'','3d43854d47951163665bf3b11513704c',1513804241,1513804279),(28,'','b2eb00682f994485e8a13325e30d0a4c',1513807506,1513807506),(29,'','0613386e4c6b16b7ecca917594ae265c',1513807648,1513807648),(30,'','f323ea988ab498174bb96fd06c235c6d',1513807861,1513807861),(31,'','1121e01dd1e6203e8953d821c5b7bd57',1513807901,1513808736),(32,'','04c5b4ebf2e1c412d8c051c39c23c2a9',1513808906,1513808906),(33,'','7e58b21dd685879fbd8d9540c5fe3764',1513809994,1513809994),(34,'','64e91a35dc9a878599e774b858c2e057',1513850388,1513850388),(35,'','30f0f433871485f30c1de26143dc149a',1513850435,1513850717),(36,'','c26cac827e0b170cff1134492c8b15ad',1513851901,1513852487),(37,'','030bc2d5695ae08c418ef6b5275bf455',1513852838,1513852838),(38,'','197edfab37ab41d71311185544dd70a8',1513857945,1513858912),(39,'','e7695e173bcd4f34888b968e9282a813',1513859657,1513859686),(40,'','09e8c84c76a449dd74bbd4b3b2da2f1d',1513861031,1513861031),(41,'','c7da8658a3cbb21652ffd71c751f684d',1513861917,1513861917),(42,'','104bcb403816bd8a37fbac6c089016f9',1513866309,1513871191),(43,'','522b977dacc594d6809d670161cf3db9',1513877175,1513877175),(44,'','68fb1bbbb22446415e8ca16d3389b07f',1513887188,1513887188),(45,'','c135d4a9cc060039b79eba680c99eb7b',1513887780,1513887780),(46,'','d8b681f7f4082f8580e4c05506f5c58e',1513888526,1513888613),(47,'','8ad7e3d1b515901593c5c0e7a15c5e19',1513891154,1513891154),(48,'','a9999ac1e2ce453bbe41de1ab8f7d7f3',1513893201,1513896309),(49,'','0d43b72124e4d9e38b61ede77e82eb9e',1513899574,1513899574),(50,'','ef45aa624a9a1e23c55b6e725ff448ee',1513936851,1513936851),(51,'','5e8cfd04f298853559e01e24baf4c1ba',1513936879,1513944798),(52,'','ba95c5cab2e354ac8d2297646d90e9bb',1513944998,1513945119),(53,'','7af7f705dd2c864f398a2130cd8f13f4',1513945233,1513945495),(54,'','d839bd2771bc8483a0c8b9a7c16dd16e',1513946362,1513951472),(55,'','a03e26e4105f087264a68b2771f94c2a',1513950934,1514201056),(56,'','457dc22eaad3edbdbd54d56ad0cd0e6a',1514196052,1514196061),(57,'','c0a5bc26a4f8ac0fdf7ca9929083ff6c',1514275971,1514276751),(58,'','e7925a32d55d5fd85c5afeb1c4820dcb',1514284948,1514284948),(59,'','743e1db276dab123a1628423d35ce6b0',1514289851,1514289851),(60,'','c62b42971759f5b41e2e57bbd7895ad7',1514293059,1514293059);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart_element`
--

DROP TABLE IF EXISTS `cart_element`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart_element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(55) DEFAULT NULL,
  `model` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `cart_id` int(11) NOT NULL,
  `item_id` int(55) NOT NULL,
  `count` int(11) NOT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_id` (`cart_id`),
  CONSTRAINT `elem_to_cart` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart_element`
--

LOCK TABLES `cart_element` WRITE;
/*!40000 ALTER TABLE `cart_element` DISABLE KEYS */;
INSERT INTO `cart_element` VALUES (60,NULL,'dvizh\\shop\\models\\Product',3,2,1,300.00,'709d10d502c1422eb63a5e8be623d53e','[]',NULL),(61,NULL,'dvizh\\shop\\models\\Product',3,2,1,256.00,'63bdf9a210b36b7a3a6ca8c1a95aaeb0','{\"1\":\"1\"}',NULL),(62,NULL,'dvizh\\shop\\models\\Product',11,3,1,500.00,'3d529da254ac166022850ff371b00919','[]',NULL),(82,NULL,'dvizh\\shop\\models\\Product',17,4,1,300.00,'709d10d502c1422eb63a5e8be623d53e','[]',NULL),(91,NULL,'dvizh\\shop\\models\\Product',20,4,1,300.00,'709d10d502c1422eb63a5e8be623d53e','[]',NULL),(92,NULL,'dvizh\\shop\\models\\Product',20,3,4,500.00,'3d529da254ac166022850ff371b00919','[]',NULL),(93,NULL,'dvizh\\shop\\models\\Product',20,2,1,300.00,'709d10d502c1422eb63a5e8be623d53e','[]',NULL),(94,NULL,'dvizh\\shop\\models\\Product',20,1,1,100.00,'e566fe6501ce17e72cd7d7f569343475','[]',NULL),(95,NULL,'dvizh\\shop\\models\\Product',20,6,1,120.00,'6c95a33b9361a914d93967cc567a7310','[]',NULL),(96,NULL,'dvizh\\shop\\models\\Product',20,5,1,60.00,'280833f79a245c25d9c30dc9325b57be','[]',NULL),(98,NULL,'dvizh\\shop\\models\\Product',36,4,1,300.00,'709d10d502c1422eb63a5e8be623d53e','[]',NULL),(107,NULL,'dvizh\\shop\\models\\Product',43,3,1,500.00,'3d529da254ac166022850ff371b00919','[]',NULL),(113,NULL,'dvizh\\shop\\models\\Product',48,4,1,300.00,'b350bf7a43c81e34336093bf5103546a','{\"1\":\"2\",\"6\":\"\"}',NULL),(114,NULL,'dvizh\\shop\\models\\Product',48,4,1,300.00,'d6d5429254d30cd6680615d38cefa82d','{\"1\":\"2\",\"6\":\"8\"}',NULL),(146,NULL,'dvizh\\shop\\models\\Product',51,1,1,100.00,'e566fe6501ce17e72cd7d7f569343475','[]',NULL),(148,NULL,'dvizh\\shop\\models\\AddOns',51,20,1,25.00,'0b44f876eaae4a7c51e165d3bd01d3ef','[]',NULL),(149,NULL,'dvizh\\shop\\models\\AddOns',51,19,1,50.00,'7305e2a874b1b9284475e7c2e0ae63a5','[]',NULL),(152,NULL,'dvizh\\shop\\models\\Product',52,1,1,100.00,'e566fe6501ce17e72cd7d7f569343475','[]',NULL),(155,NULL,'dvizh\\shop\\models\\Product',52,3,1,500.00,'3d529da254ac166022850ff371b00919','[]',NULL),(167,NULL,'dvizh\\shop\\models\\Product',53,3,1,500.00,'3d529da254ac166022850ff371b00919','[]',NULL),(175,NULL,'common\\models\\Video',56,24,1,19.99,'c73e98f4502df5afe32cf555c34235f7','1',NULL);
/*!40000 ALTER TABLE `cart_element` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificate_certificate`
--

DROP TABLE IF EXISTS `certificate_certificate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificate_certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `date_elapsed` datetime DEFAULT NULL,
  `employment` varchar(55) NOT NULL,
  `status` varchar(255) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `target_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificate_certificate`
--

LOCK TABLES `certificate_certificate` WRITE;
/*!40000 ALTER TABLE `certificate_certificate` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificate_certificate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificate_certificate_to_item`
--

DROP TABLE IF EXISTS `certificate_certificate_to_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificate_certificate_to_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_id` int(11) NOT NULL,
  `target_model` varchar(500) NOT NULL,
  `target_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificate_certificate_to_item`
--

LOCK TABLES `certificate_certificate_to_item` WRITE;
/*!40000 ALTER TABLE `certificate_certificate_to_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificate_certificate_to_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificate_use`
--

DROP TABLE IF EXISTS `certificate_use`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificate_use` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `balance` decimal(12,2) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificate_use`
--

LOCK TABLES `certificate_use` WRITE;
/*!40000 ALTER TABLE `certificate_use` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificate_use` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `type` text COLLATE utf8_unicode_ci,
  `options` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `relation_model` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `fk_field_category_id` FOREIGN KEY (`category_id`) REFERENCES `field_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field`
--

LOCK TABLES `field` WRITE;
/*!40000 ALTER TABLE `field` DISABLE KEYS */;
INSERT INTO `field` VALUES (1,'Размер','razmer',NULL,'text',NULL,'','dvizh\\shop\\models\\Product'),(2,'Качество','kacestvo',NULL,'text',NULL,'','dvizh\\shop\\models\\Product'),(3,'Bra size','bra-size',NULL,'text',NULL,'','dvizh\\shop\\models\\Product'),(4,'Condition','condition',NULL,'text',NULL,'','dvizh\\shop\\models\\Product');
/*!40000 ALTER TABLE `field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_category`
--

DROP TABLE IF EXISTS `field_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_category`
--

LOCK TABLES `field_category` WRITE;
/*!40000 ALTER TABLE `field_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `field_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_value`
--

DROP TABLE IF EXISTS `field_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `numeric_value` int(11) DEFAULT NULL,
  `model_name` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `field_id` (`field_id`),
  KEY `variant_id` (`variant_id`),
  CONSTRAINT `fk_field_value_field_id` FOREIGN KEY (`field_id`) REFERENCES `field` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_value`
--

LOCK TABLES `field_value` WRITE;
/*!40000 ALTER TABLE `field_value` DISABLE KEYS */;
INSERT INTO `field_value` VALUES (1,1,1,1,'S',0,'dvizh\\shop\\models\\Product'),(2,1,1,2,'',0,'dvizh\\shop\\models\\Product'),(3,2,1,1,'5',5,'dvizh\\shop\\models\\Product'),(4,3,1,1,'22',22,'dvizh\\shop\\models\\Product'),(5,4,1,1,'Грязное',NULL,'dvizh\\shop\\models\\Product'),(6,2,1,2,'1',1,'dvizh\\shop\\models\\Product'),(7,3,1,2,'22A',22,'dvizh\\shop\\models\\Product'),(8,4,1,2,'Чистое',NULL,'dvizh\\shop\\models\\Product'),(9,1,1,3,'42',42,'dvizh\\shop\\models\\Product'),(10,2,1,3,'5',5,'dvizh\\shop\\models\\Product'),(11,3,1,3,'22C',22,'dvizh\\shop\\models\\Product'),(12,4,1,3,'Чисто',NULL,'dvizh\\shop\\models\\Product'),(13,2,1,4,'Супер',NULL,'dvizh\\shop\\models\\Product'),(14,4,1,4,'Грязные',NULL,'dvizh\\shop\\models\\Product'),(15,1,1,6,'30 см',30,'dvizh\\shop\\models\\Product'),(16,4,1,6,'Hot',NULL,'dvizh\\shop\\models\\Product');
/*!40000 ALTER TABLE `field_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_variant`
--

DROP TABLE IF EXISTS `field_variant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_variant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numeric_value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_field` (`field_id`),
  CONSTRAINT `fk_field_variant_field_id` FOREIGN KEY (`field_id`) REFERENCES `field` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_variant`
--

LOCK TABLES `field_variant` WRITE;
/*!40000 ALTER TABLE `field_variant` DISABLE KEYS */;
/*!40000 ALTER TABLE `field_variant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filter`
--

DROP TABLE IF EXISTS `filter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `relation_field_name` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_filter` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'no',
  `type` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `relation_field_value` text COLLATE utf8_unicode_ci COMMENT 'PHP serialize',
  `is_option` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filter`
--

LOCK TABLES `filter` WRITE;
/*!40000 ALTER TABLE `filter` DISABLE KEYS */;
INSERT INTO `filter` VALUES (1,'Материал','material',NULL,'','category_id','no','radio','a:1:{i:0;s:1:\"1\";}','yes'),(2,'Размер','razmer',NULL,'','category_id','yes','select','a:1:{i:0;s:1:\"1\";}','no'),(3,'Размер одежды','razmer-odezdy',NULL,'','category_id','no','select','a:1:{i:0;s:1:\"2\";}','no'),(4,'Размер одежды','razmer-odezdy-2',NULL,'','category_id','yes','select','a:1:{i:0;s:1:\"2\";}','no'),(6,'Автограф','avtograf',NULL,'','category_id','no','radio','a:1:{i:0;s:1:\"1\";}','yes');
/*!40000 ALTER TABLE `filter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filter_relation_value`
--

DROP TABLE IF EXISTS `filter_relation_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filter_relation_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filter_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filter_relation_value`
--

LOCK TABLES `filter_relation_value` WRITE;
/*!40000 ALTER TABLE `filter_relation_value` DISABLE KEYS */;
INSERT INTO `filter_relation_value` VALUES (1,3,2),(3,2,1),(5,1,1),(6,6,1);
/*!40000 ALTER TABLE `filter_relation_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filter_value`
--

DROP TABLE IF EXISTS `filter_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filter_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filter_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `variant_item` (`variant_id`,`item_id`),
  CONSTRAINT `fk_variant` FOREIGN KEY (`variant_id`) REFERENCES `filter_variant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filter_value`
--

LOCK TABLES `filter_value` WRITE;
/*!40000 ALTER TABLE `filter_value` DISABLE KEYS */;
INSERT INTO `filter_value` VALUES (2,2,3,2),(4,2,4,1),(6,2,3,1);
/*!40000 ALTER TABLE `filter_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filter_variant`
--

DROP TABLE IF EXISTS `filter_variant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filter_variant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filter_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numeric_value` int(11) NOT NULL,
  `latin_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_filter` (`filter_id`),
  CONSTRAINT `fk_filter` FOREIGN KEY (`filter_id`) REFERENCES `filter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filter_variant`
--

LOCK TABLES `filter_variant` WRITE;
/*!40000 ALTER TABLE `filter_variant` DISABLE KEYS */;
INSERT INTO `filter_variant` VALUES (1,1,'Кожа',0,'koza'),(2,1,'Дермантин',0,'dermantin'),(3,2,'40',40,'40'),(4,2,'42',42,'42'),(5,4,'M',0,'m'),(6,4,'L',0,'l'),(8,6,'Добавить автограф',0,'dobavit-avtograf');
/*!40000 ALTER TABLE `filter_variant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(20) NOT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `description` text,
  `gallery_id` varchar(150) DEFAULT NULL,
  `sort` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,NULL,NULL,'Products/Product1/b5dc58.jpg',1,NULL,'Product','9629c4488c-2',NULL,NULL,NULL),(5,NULL,NULL,'Products/Product2/7764f3.jpg',2,NULL,'Product','9ceeeef2b6-2',NULL,NULL,NULL),(6,NULL,NULL,'Modifications/Modification4/b165cd.jpg',4,NULL,'Modification','3198a30e45-2',NULL,NULL,NULL),(7,NULL,NULL,'Products/Product3/70289b.jpg',3,NULL,'Product','d2904c7a73-2',NULL,NULL,NULL),(8,NULL,NULL,'Products/Product4/a22b4b.jpg',4,NULL,'Product','86c20081a7-2',NULL,NULL,NULL),(9,NULL,NULL,'Products/Product5/801842.png',5,NULL,'Product','30384e6845-2',NULL,NULL,NULL),(10,NULL,NULL,'Products/Product6/156771.jpg',6,NULL,'Product','610f5b3ebc-2',NULL,NULL,NULL),(13,NULL,NULL,'Products/Product3/73528b.jpg',3,NULL,'Product','2c26176f47-2',NULL,NULL,NULL),(15,NULL,NULL,'Newss/News1/e0075f.jpg',1,NULL,'News','aa87426056-2',NULL,'picture',NULL),(18,NULL,NULL,'Sliders/Slider2/77775a.jpg',2,NULL,'Slider','bfde5c0909-2',NULL,NULL,NULL),(19,NULL,NULL,'Sliders/Slider1/7af554.jpg',1,NULL,'Slider','8f8b76f80d-2',NULL,NULL,NULL),(20,NULL,NULL,'TopVideoss/TopVideos8/0fdc56.jpg',8,NULL,'TopVideos','92b58b6d78-2',NULL,NULL,NULL),(21,NULL,NULL,'TopVideoss/TopVideos9/8af664.jpg',9,NULL,'TopVideos','ba234f93ff-2',NULL,NULL,NULL),(22,NULL,NULL,'TopVideoss/TopVideos10/60e17e.jpg',10,NULL,'TopVideos','675d619e6a-2',NULL,NULL,NULL),(23,NULL,NULL,'Photos/Photo1/7f1f5f.jpg',1,NULL,'Photo','80bac16691-2',NULL,NULL,NULL),(24,NULL,NULL,'Videos/Video24/03103a.jpg',24,NULL,'Video','5dd7cfc4c8-2',NULL,NULL,NULL),(25,NULL,NULL,'Videos/Video25/e28324.jpg',25,NULL,'Video','ad0e9a81dd-2',NULL,NULL,NULL);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1513432780),('m140209_132017_init',1513432784),('m140403_174025_create_account_table',1513432786),('m140504_113157_update_tables',1513432790),('m140504_130429_create_token_table',1513432792),('m140506_102106_rbac_init',1513432782),('m140618_045255_create_settings',1513432860),('m140622_111540_create_image_table',1513432842),('m140830_171933_fix_ip_field',1513432793),('m140830_172703_change_account_table_name',1513432793),('m141222_110026_update_ip_field',1513432794),('m141222_135246_alter_username_length',1513432795),('m150614_103145_update_social_account_table',1513432797),('m150623_212711_fix_username_notnull',1513432797),('m151126_091910_add_unique_index',1513432860),('m151218_234654_add_timezone_to_profile',1513432798),('m160506_062849_create_cart',1513432830),('m160513_051524_Mass',1513432824),('m160513_121415_Mass',1513432835),('m160518_123713_Mass',1513432844),('m160521_112619_Mass',1513432810),('m160613_134415_Mass',1513432841),('m160929_103127_add_last_login_at_to_user_table',1513432798),('m161110_050319_create_assigment_fields',1513432826),('m161110_050319_create_organization_fields',1513432826),('m161129_101511_promocode_to_item',1513432844),('m161212_124011_certificate_certificate',1513432848),('m161212_124011_certificate_certificate_to_item',1513432849),('m161212_124111_certificate_use',1513432849),('m170116_073411_altertable_promocode',1513432846),('m170116_073511_promocode_used',1513432846),('m170117_131738_altertable_promocode_type',1513432847),('m170118_075411_promocode_condition',1513432847),('m170118_075611_promocode_to_condition',1513432847),('m170303_071750_altertable_promocode_cumulative',1513432847),('m170311_230319_create_is_deleted_field',1513432827),('m170311_234119_create_element_name_field',1513432828),('m170317_090004_news',1513951159),('m170317_090025_slider',1513951159),('m170317_090234_page',1514301794),('m170418_170456_register_user',1513432799),('m170419_110711_model_name_field',1513432841),('m170425_115443_latin_value_field',1513432836),('m170425_150102_base_migration',1513432799),('m170426_105633_modif_type_field',1513432810),('m170426_174712_insert_user_role',1513432800),('m170603_130822_add_sku_fields',1513432811),('m170603_130826_add_barcode_fields',1513432813),('m170603_130911_modification_to_option_table',1513432813),('m170628_150322_is_option_field',1513432836),('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1513432782),('m171218_101337_create_top_videos_table',1513951160),('m171219_141119_create_photo_table',1513951160),('m171220_094604_add_like_column',1513951161),('m171220_131041_create_photo_category_table',1513951162),('m171221_101723_create_video_table',1514194049),('m171225_102723_add_date_column',1514198340),('m171226_085709_create_subscribe_table',1514282111),('m171226_094946_create_send_subscr_table',1514295120),('m230217_134711_altertable_promocode_used',1513432848),('m260519_000708_alter_cart_table',1513432831),('m270920_074737_add_column_comment_to_cart_element_table',1513432831),('m314315_215216_create_seo_table',1513432842);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `on_page` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Name Title','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><img src=\"http://ayumi-anime.webproject.com.ua/www/img/blog/bg.jpg\" alt=\"\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p><img src=\"http://ayumi-anime.webproject.com.ua/www/img/blog/bg2.jpg\" alt=\"\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,</p><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolo repellendus.</p>','name-title','2017-12-19',1,1,31);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `news_subscription` int(11) DEFAULT NULL,
  `same_address` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `promocode` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost` decimal(11,2) DEFAULT NULL,
  `base_cost` decimal(11,2) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `shipping_type_id` int(11) DEFAULT NULL,
  `delivery_time_date` date DEFAULT NULL,
  `delivery_time_hour` smallint(6) DEFAULT NULL,
  `delivery_time_min` smallint(6) DEFAULT NULL,
  `delivery_type` enum('fast','totime') COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_info` text COLLATE utf8_unicode_ci COMMENT 'PHP serialize',
  `comment` text COLLATE utf8_unicode_ci,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `seller_user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `payment` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `timestamp` int(11) DEFAULT NULL,
  `is_assigment` tinyint(1) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_order_payment` (`payment_type_id`),
  KEY `fk_order_shipping` (`shipping_type_id`),
  CONSTRAINT `fk_order_payment` FOREIGN KEY (`payment_type_id`) REFERENCES `order_payment_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_order_shipping` FOREIGN KEY (`shipping_type_id`) REFERENCES `order_shipping_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (5,'Alex','Skoromnui',NULL,'+380 564 864 864','alexskoromnui@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,300.00,300.00,4,2,NULL,NULL,NULL,NULL,'new',NULL,NULL,'12:10:32',NULL,NULL,'2017-12-20 00:00:00','no',1513771832,NULL,NULL,0),(6,'Alex','Skoromnui','Mr','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD1','bULEVARD1','Соединенные Штаты','Georgia','Одесса',NULL,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'12:16:29',NULL,NULL,'2017-12-20 00:00:00','no',1513772189,NULL,NULL,0),(7,'Alex','Skoromnui','0','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD1','bULEVARD1',NULL,'0','Одесса',60300,NULL,NULL,NULL,NULL,0.00,0.00,NULL,2,NULL,NULL,NULL,NULL,'new',NULL,NULL,'12:39:08',NULL,NULL,'2017-12-20 00:00:00','no',1513773548,NULL,NULL,0),(8,'Alex','Skoromnui','0','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD1','bULEVARD1',NULL,'0','Одесса',60300,NULL,NULL,NULL,NULL,0.00,0.00,4,2,NULL,NULL,NULL,NULL,'new',NULL,NULL,'12:40:43',NULL,NULL,'2017-12-20 00:00:00','no',1513773643,NULL,NULL,0),(9,'Alex','Skoromnui','1','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD1','bULEVARD1',NULL,'0','Одесса',60300,NULL,NULL,NULL,NULL,1000.00,1000.00,4,2,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:56:39',NULL,NULL,'2017-12-20 00:00:00','no',1513781799,NULL,NULL,0),(10,'Alex','Skoromnui','China','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD1','bULEVARD1',NULL,'Nevada','Одесса',60300,NULL,NULL,NULL,NULL,500.00,500.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'15:04:32',NULL,NULL,'2017-12-20 00:00:00','no',1513782272,NULL,NULL,0),(11,'Alex','Skoromnui','China','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD1','bULEVARD1',NULL,'Nevada','Одесса',60300,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'15:07:17',NULL,NULL,'2017-12-20 00:00:00','no',1513782437,NULL,NULL,0),(12,'Alex','Skoromnui','Mrs','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD2','bULEVARD3','USA','California','Одесса',60300,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'15:07:41',NULL,NULL,'2017-12-20 00:00:00','no',1513782461,NULL,NULL,0),(13,'Alex','Skoromnui','Ms','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD1','bULEVARD2','USA','Nevada','Одесса',60300,NULL,NULL,NULL,NULL,2100.00,2100.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'17:07:12',NULL,NULL,'2017-12-20 00:00:00','no',1513789632,NULL,NULL,0),(14,'Alex','Skoromnui','Ms','+380 564 864 864','','bULEVARD1','bULEVARD1','USA','Nevada','Одесса',60300,NULL,NULL,NULL,NULL,500.00,500.00,4,3,NULL,NULL,NULL,NULL,'new',NULL,NULL,'19:04:21',NULL,NULL,'2017-12-20 00:00:00','no',1513796661,NULL,NULL,0),(15,'Alex','Skoromnui','Ms','+380 564 864 864','alexskoromnui@gmail.com','bULEVARD1','bULEVARD2','USA','Nevada','Одесса',60300,NULL,NULL,NULL,NULL,300.00,300.00,4,NULL,NULL,NULL,NULL,NULL,'new',NULL,NULL,'19:17:14',NULL,NULL,'2017-12-20 00:00:00','no',1513797434,NULL,NULL,0),(16,'asds','asas','Mrs','+380 93 022 3020','alex@gmail.com','asfas','asfas','USA','Nevada','Село',63000,NULL,NULL,NULL,NULL,500.00,500.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:12:36',NULL,NULL,'2017-12-22 00:00:00','no',1513951956,NULL,NULL,0),(17,'asds','asas','Mrs','+380 93 022 3020','alex@gmail.com','asfas','asfas','USA','Nevada','Село',63000,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:13:22',NULL,NULL,'2017-12-22 00:00:00','no',1513952002,NULL,NULL,0),(18,'asds','asas','Mrs','+380 93 022 3020','alex@gmail.com','asfas','asfas','USA','Nevada','Село',63000,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:13:44',NULL,NULL,'2017-12-22 00:00:00','no',1513952024,NULL,NULL,0),(19,'asds','asas','Mrs','+380 93 022 3020','alex@gmail.com','asfas','asfas','USA','Nevada','Село',63000,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:14:21',NULL,NULL,'2017-12-22 00:00:00','no',1513952061,NULL,NULL,0),(20,'asds','asas','Mrs','+380 93 022 3020','alex@gmail.com','asfas','asfas','USA','Nevada','Село',63000,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:15:24',NULL,NULL,'2017-12-22 00:00:00','no',1513952124,NULL,NULL,0),(21,'asds','asas','Mrs','+380 93 022 3020','alex@gmail.com','asfas','asfas','USA','Nevada','Село',63000,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:15:34',NULL,NULL,'2017-12-22 00:00:00','no',1513952134,NULL,NULL,0),(22,'asds','asas','Mrs','+380 93 022 3020','alex@gmail.com','asfas','asfas','USA','Nevada','Село',63000,NULL,NULL,NULL,NULL,0.00,0.00,4,1,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:15:52',NULL,NULL,'2017-12-22 00:00:00','no',1513952152,NULL,NULL,0),(23,'asds','asas','Mrs','+380 93 022 3020','alex@gmail.com','asfas','asfas','USA','Nevada','Село',63000,NULL,NULL,NULL,NULL,500.00,500.00,4,NULL,NULL,NULL,NULL,NULL,'new',NULL,NULL,'14:22:27',NULL,NULL,'2017-12-22 00:00:00','no',1513952547,NULL,NULL,0);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_element`
--

DROP TABLE IF EXISTS `order_element`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `base_price` decimal(11,2) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `options` text COLLATE utf8_unicode_ci,
  `is_assigment` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_element_order` (`order_id`),
  CONSTRAINT `fk_element_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_element`
--

LOCK TABLES `order_element` WRITE;
/*!40000 ALTER TABLE `order_element` DISABLE KEYS */;
INSERT INTO `order_element` VALUES (1,'dvizh\\shop\\models\\Product',1,1,1,100.00,100.00,'','[]',NULL,0,'Nike'),(2,'dvizh\\shop\\models\\Product',2,2,1,256.00,256.00,'','{\"1\":\"1\"}',NULL,0,'Football'),(3,'dvizh\\shop\\models\\Product',3,2,1,300.00,300.00,'','[]',NULL,0,'Football'),(4,'dvizh\\shop\\models\\Product',5,4,1,300.00,300.00,'','[]',NULL,0,'Туфли'),(5,'dvizh\\shop\\models\\Product',9,3,2,500.00,500.00,'','[]',NULL,0,'Mida'),(6,'dvizh\\shop\\models\\Product',10,3,1,500.00,500.00,'','[]',NULL,0,'Mida'),(7,'dvizh\\shop\\models\\Product',13,4,7,300.00,300.00,'','[]',NULL,0,'Туфли'),(8,'dvizh\\shop\\models\\Product',14,3,1,500.00,500.00,'','[]',NULL,0,'Mida'),(9,'dvizh\\shop\\models\\Product',15,4,1,300.00,300.00,'','[]',NULL,0,'Туфли'),(10,'dvizh\\shop\\models\\Product',16,3,1,500.00,500.00,'','1',NULL,0,'Mida'),(11,'dvizh\\shop\\models\\Product',23,3,1,500.00,500.00,'','1',NULL,0,'Mida');
/*!40000 ALTER TABLE `order_element` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_field`
--

DROP TABLE IF EXISTS `order_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `required` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_field_type` (`type_id`),
  CONSTRAINT `fk_field_type` FOREIGN KEY (`type_id`) REFERENCES `order_field_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_field`
--

LOCK TABLES `order_field` WRITE;
/*!40000 ALTER TABLE `order_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_field_type`
--

DROP TABLE IF EXISTS `order_field_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_field_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `widget` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `have_variants` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_field_type`
--

LOCK TABLES `order_field_type` WRITE;
/*!40000 ALTER TABLE `order_field_type` DISABLE KEYS */;
INSERT INTO `order_field_type` VALUES (1,'Input','dvizh\\order\\widgets\\field_type\\Input','no'),(2,'Textarea','dvizh\\order\\widgets\\field_type\\Textarea','no'),(3,'Select','dvizh\\order\\widgets\\field_type\\Select','yes'),(4,'Checkbox','dvizh\\order\\widgets\\field_type\\Checkbox','yes');
/*!40000 ALTER TABLE `order_field_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_field_value`
--

DROP TABLE IF EXISTS `order_field_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_field_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `fk_field_order` (`order_id`),
  KEY `fk_value_field` (`field_id`),
  CONSTRAINT `fk_field_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_value_field` FOREIGN KEY (`field_id`) REFERENCES `order_field` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_field_value`
--

LOCK TABLES `order_field_value` WRITE;
/*!40000 ALTER TABLE `order_field_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_field_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_field_value_variant`
--

DROP TABLE IF EXISTS `order_field_value_variant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_field_value_variant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_variant_field` (`field_id`),
  CONSTRAINT `fk_variant_field` FOREIGN KEY (`field_id`) REFERENCES `order_field` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_field_value_variant`
--

LOCK TABLES `order_field_value_variant` WRITE;
/*!40000 ALTER TABLE `order_field_value_variant` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_field_value_variant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_payment`
--

DROP TABLE IF EXISTS `order_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_payment_order` (`order_id`),
  KEY `fk_payment_payment_type` (`payment_type_id`),
  CONSTRAINT `fk_payment_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_payment_payment_type` FOREIGN KEY (`payment_type_id`) REFERENCES `order_payment_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_payment`
--

LOCK TABLES `order_payment` WRITE;
/*!40000 ALTER TABLE `order_payment` DISABLE KEYS */;
INSERT INTO `order_payment` VALUES (1,1,1,NULL,'Order #1','127.0.0.1',100.00,'2017-12-16 14:48:58'),(2,3,4,NULL,'Order #3','127.0.0.1',300.00,'2017-12-17 23:55:56'),(3,4,4,NULL,'Order #4','127.0.0.1',0.00,'2017-12-18 00:12:33'),(4,5,4,NULL,'Order #5','127.0.0.1',300.00,'2017-12-20 12:10:33'),(5,6,4,NULL,'Order #6','127.0.0.1',0.00,'2017-12-20 12:16:30'),(6,8,4,NULL,'Order #8','127.0.0.1',0.00,'2017-12-20 12:40:43'),(7,9,4,NULL,'Order #9','127.0.0.1',1000.00,'2017-12-20 14:56:40'),(8,10,4,NULL,'Order #10','127.0.0.1',500.00,'2017-12-20 15:04:33'),(9,11,4,NULL,'Order #11','127.0.0.1',0.00,'2017-12-20 15:07:17'),(10,12,4,NULL,'Order #12','127.0.0.1',0.00,'2017-12-20 15:07:41'),(11,13,4,NULL,'Order #13','127.0.0.1',2100.00,'2017-12-20 17:07:12'),(12,14,4,NULL,'Order #14','127.0.0.1',500.00,'2017-12-20 19:04:22'),(13,15,4,NULL,'Order #15','127.0.0.1',300.00,'2017-12-20 19:17:15'),(14,16,4,NULL,'Order #16','127.0.0.1',500.00,'2017-12-22 14:12:37'),(15,17,4,NULL,'Order #17','127.0.0.1',0.00,'2017-12-22 14:13:22'),(16,18,4,NULL,'Order #18','127.0.0.1',0.00,'2017-12-22 14:13:44'),(17,19,4,NULL,'Order #19','127.0.0.1',0.00,'2017-12-22 14:14:21'),(18,20,4,NULL,'Order #20','127.0.0.1',0.00,'2017-12-22 14:15:25'),(19,21,4,NULL,'Order #21','127.0.0.1',0.00,'2017-12-22 14:15:34'),(20,22,4,NULL,'Order #22','127.0.0.1',0.00,'2017-12-22 14:15:52'),(21,23,4,NULL,'Order #23','127.0.0.1',500.00,'2017-12-22 14:22:27');
/*!40000 ALTER TABLE `order_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_payment_type`
--

DROP TABLE IF EXISTS `order_payment_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_payment_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `widget` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_payment_type`
--

LOCK TABLES `order_payment_type` WRITE;
/*!40000 ALTER TABLE `order_payment_type` DISABLE KEYS */;
INSERT INTO `order_payment_type` VALUES (1,'','Наличный расчет','',NULL),(2,'','Безналичный расчет','',NULL),(3,'','Онлайн','',NULL),(4,'','LiqPay','pistol88\\liqpay\\widgets\\PaymentForm',NULL);
/*!40000 ALTER TABLE `order_payment_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_shipping_type`
--

DROP TABLE IF EXISTS `order_shipping_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_shipping_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `cost` decimal(11,2) DEFAULT NULL,
  `free_cost_from` decimal(11,2) DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_shipping_type`
--

LOCK TABLES `order_shipping_type` WRITE;
/*!40000 ALTER TABLE `order_shipping_type` DISABLE KEYS */;
INSERT INTO `order_shipping_type` VALUES (1,'Самовывоз','',0.00,NULL,NULL),(2,'Доставка по России','',5.00,250.00,NULL),(3,'Доставка курьером по городу','',10.00,250.00,NULL);
/*!40000 ALTER TABLE `order_shipping_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `show_page` varchar(255) NOT NULL DEFAULT 'No',
  `slug` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'About me','1','asdasdad','	<section class=\"s-about-me\">\r\n		<div class=\"container\">\r\n			<div class=\"row\">\r\n				<div class=\"col-md-6 col-sm-6 col-xs-7\">\r\n					<div class=\"title-text\">\r\n						<h1 class=\"clearfix\">\r\n							<span class=\"ayumi\">AYUMI</span>\r\n							<span class=\"anime\">ANIME</span>\r\n						</h1>\r\n						<p>“I love to share my energy with you, to make you happy and enjoy my life! I love my every Fan and appreciate any Heart or Support!”</p>\r\n					</div>\r\n				</div>\r\n			</div>\r\n			<div class=\"about-me\">\r\n				<div class=\"col-md-8 col-sm-9\">\r\n					<div class=\"section-title\">\r\n						<h4>auymi anime</h4>\r\n						<h2>About me</h2>\r\n						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>\r\n						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>'),(2,'wqeq','0','wqeq','<h1>fgdfgasdaaaaaaaaaaaaaaaaaaaaaaaaaa</h1><h1><br></h1>');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (1,'Scarlett Knightley - Passionate Love Making After Being Away','2017-12-19',NULL,NULL);
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_category`
--

DROP TABLE IF EXISTS `photo_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_category`
--

LOCK TABLES `photo_category` WRITE;
/*!40000 ALTER TABLE `photo_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_to_photo_category`
--

DROP TABLE IF EXISTS `photo_to_photo_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_to_photo_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_to_photo_category`
--

LOCK TABLES `photo_to_photo_category` WRITE;
/*!40000 ALTER TABLE `photo_to_photo_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo_to_photo_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocode`
--

DROP TABLE IF EXISTS `promocode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `date_elapsed` datetime DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `type` enum('percent','quantum','cumulative') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'percent',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocode`
--

LOCK TABLES `promocode` WRITE;
/*!40000 ALTER TABLE `promocode` DISABLE KEYS */;
INSERT INTO `promocode` VALUES (1,'Черная пятница','','853B',50,1,NULL,5555,'percent');
/*!40000 ALTER TABLE `promocode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocode_condition`
--

DROP TABLE IF EXISTS `promocode_condition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocode_condition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sum_start` int(10) NOT NULL,
  `sum_stop` int(10) NOT NULL,
  `value` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocode_condition`
--

LOCK TABLES `promocode_condition` WRITE;
/*!40000 ALTER TABLE `promocode_condition` DISABLE KEYS */;
/*!40000 ALTER TABLE `promocode_condition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocode_to_condition`
--

DROP TABLE IF EXISTS `promocode_to_condition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocode_to_condition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promocode_id` int(11) NOT NULL,
  `condition_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocode_to_condition`
--

LOCK TABLES `promocode_to_condition` WRITE;
/*!40000 ALTER TABLE `promocode_to_condition` DISABLE KEYS */;
/*!40000 ALTER TABLE `promocode_to_condition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocode_to_item`
--

DROP TABLE IF EXISTS `promocode_to_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocode_to_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promocode_id` int(11) NOT NULL,
  `item_model` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocode_to_item`
--

LOCK TABLES `promocode_to_item` WRITE;
/*!40000 ALTER TABLE `promocode_to_item` DISABLE KEYS */;
INSERT INTO `promocode_to_item` VALUES (1,1,'dvizh\\shop\\models\\Category',1),(2,1,'dvizh\\shop\\models\\Category',2);
/*!40000 ALTER TABLE `promocode_to_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocode_use`
--

DROP TABLE IF EXISTS `promocode_use`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocode_use` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promocode_id` int(11) NOT NULL,
  `user_id` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_promocode` (`promocode_id`),
  CONSTRAINT `fk_promocode` FOREIGN KEY (`promocode_id`) REFERENCES `promocode` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocode_use`
--

LOCK TABLES `promocode_use` WRITE;
/*!40000 ALTER TABLE `promocode_use` DISABLE KEYS */;
/*!40000 ALTER TABLE `promocode_use` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocode_used`
--

DROP TABLE IF EXISTS `promocode_used`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocode_used` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promocode_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `user` int(11) DEFAULT NULL,
  `sum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocode_used`
--

LOCK TABLES `promocode_used` WRITE;
/*!40000 ALTER TABLE `promocode_used` DISABLE KEYS */;
/*!40000 ALTER TABLE `promocode_used` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rbac_auth_assignment`
--

DROP TABLE IF EXISTS `rbac_auth_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rbac_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `auth_assignment_user_id_idx` (`user_id`),
  CONSTRAINT `rbac_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `rbac_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rbac_auth_assignment`
--

LOCK TABLES `rbac_auth_assignment` WRITE;
/*!40000 ALTER TABLE `rbac_auth_assignment` DISABLE KEYS */;
INSERT INTO `rbac_auth_assignment` VALUES ('superadmin','1',1492519516);
/*!40000 ALTER TABLE `rbac_auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rbac_auth_item`
--

DROP TABLE IF EXISTS `rbac_auth_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rbac_auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `rbac_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `rbac_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rbac_auth_item`
--

LOCK TABLES `rbac_auth_item` WRITE;
/*!40000 ALTER TABLE `rbac_auth_item` DISABLE KEYS */;
INSERT INTO `rbac_auth_item` VALUES ('superadmin',1,'',NULL,'1492519500',1492519500,1492519500);
/*!40000 ALTER TABLE `rbac_auth_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rbac_auth_item_child`
--

DROP TABLE IF EXISTS `rbac_auth_item_child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rbac_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `rbac_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `rbac_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rbac_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `rbac_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rbac_auth_item_child`
--

LOCK TABLES `rbac_auth_item_child` WRITE;
/*!40000 ALTER TABLE `rbac_auth_item_child` DISABLE KEYS */;
/*!40000 ALTER TABLE `rbac_auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rbac_auth_rule`
--

DROP TABLE IF EXISTS `rbac_auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rbac_auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rbac_auth_rule`
--

LOCK TABLES `rbac_auth_rule` WRITE;
/*!40000 ALTER TABLE `rbac_auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `rbac_auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `send_subscr`
--

DROP TABLE IF EXISTS `send_subscr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `send_subscr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) NOT NULL,
  `subscriber_id` int(11) NOT NULL,
  `end` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `send_subscr`
--

LOCK TABLES `send_subscr` WRITE;
/*!40000 ALTER TABLE `send_subscr` DISABLE KEYS */;
/*!40000 ALTER TABLE `send_subscr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `h1` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(522) DEFAULT NULL,
  `text` text,
  `meta_index` varchar(255) DEFAULT NULL,
  `redirect_301` varchar(522) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo`
--

LOCK TABLES `seo` WRITE;
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
INSERT INTO `seo` VALUES (1,1,'dvizh\\shop\\models\\Category','','','','','','',''),(2,1,'dvizh\\shop\\models\\Product','','','','','','',''),(3,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,3,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,2,'dvizh\\shop\\models\\Category','','','','','','',''),(6,1,'dvizh\\shop\\models\\Producer','','','','','','',''),(7,2,'dvizh\\shop\\models\\Producer','','','','','','',''),(8,3,'dvizh\\shop\\models\\Producer','','','','','','',''),(9,2,'dvizh\\shop\\models\\Product','','','','','','',''),(10,4,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,3,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,5,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,6,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,5,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,6,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,5,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,5,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,7,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,3,'dvizh\\shop\\models\\Product','','','','','','',''),(26,4,'dvizh\\shop\\models\\Product','','','','','','',''),(27,5,'dvizh\\shop\\models\\Product','','','','','','',''),(28,6,'dvizh\\shop\\models\\Product','','','','','','',''),(29,7,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,5,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,7,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,8,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,5,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,6,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,7,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,7,'dvizh\\shop\\models\\Product','','','','','','',''),(38,1,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_custom`
--

DROP TABLE IF EXISTS `service_custom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_custom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `persent` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_custom`
--

LOCK TABLES `service_custom` WRITE;
/*!40000 ALTER TABLE `service_custom` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_custom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text,
  `active` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_unique_key_section` (`section`,`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_category`
--

DROP TABLE IF EXISTS `shop_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_category`
--

LOCK TABLES `shop_category` WRITE;
/*!40000 ALTER TABLE `shop_category` DISABLE KEYS */;
INSERT INTO `shop_category` VALUES (1,NULL,'Обувь',NULL,'obuv','',NULL,NULL),(2,NULL,'Еда',NULL,'odezda','',NULL,NULL);
/*!40000 ALTER TABLE `shop_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_incoming`
--

DROP TABLE IF EXISTS `shop_incoming`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_incoming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_incoming`
--

LOCK TABLES `shop_incoming` WRITE;
/*!40000 ALTER TABLE `shop_incoming` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop_incoming` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_outcoming`
--

DROP TABLE IF EXISTS `shop_outcoming`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_outcoming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_outcoming`
--

LOCK TABLES `shop_outcoming` WRITE;
/*!40000 ALTER TABLE `shop_outcoming` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop_outcoming` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_price`
--

DROP TABLE IF EXISTS `shop_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `price_old` decimal(11,2) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `available` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'yes',
  `type` char(1) COLLATE utf8_unicode_ci DEFAULT 'p',
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `fk_type` (`type_id`),
  CONSTRAINT `fk_type` FOREIGN KEY (`type_id`) REFERENCES `shop_price_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_price`
--

LOCK TABLES `shop_price` WRITE;
/*!40000 ALTER TABLE `shop_price` DISABLE KEYS */;
INSERT INTO `shop_price` VALUES (1,NULL,'Основная цена',100.00,NULL,NULL,NULL,1,1,'yes','p'),(5,NULL,'Основная цена',256.00,NULL,NULL,NULL,1,4,'yes','m'),(6,'','Основная цена',300.00,NULL,NULL,0,1,2,'yes','p'),(11,NULL,'Основная цена',500.00,NULL,NULL,NULL,1,3,'yes','p'),(12,NULL,'Основная цена',300.00,NULL,NULL,NULL,1,4,'yes','p'),(13,NULL,'Основная цена',60.00,NULL,NULL,NULL,1,5,'yes','p'),(14,NULL,'Основная цена',120.00,NULL,NULL,NULL,1,6,'yes','p'),(15,NULL,'Основная цена',24.00,NULL,NULL,NULL,1,5,'yes','m'),(16,NULL,'Основная цена',55.00,NULL,NULL,NULL,1,6,'yes','m'),(17,NULL,'Основная цена',96.00,NULL,NULL,NULL,1,7,'yes','m'),(18,NULL,'Основная цена',250.00,NULL,NULL,NULL,1,7,'yes','p');
/*!40000 ALTER TABLE `shop_price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_price_type`
--

DROP TABLE IF EXISTS `shop_price_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_price_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `condition` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_price_type`
--

LOCK TABLES `shop_price_type` WRITE;
/*!40000 ALTER TABLE `shop_price_type` DISABLE KEYS */;
INSERT INTO `shop_price_type` VALUES (1,'Основная цена',NULL,NULL),(2,'сТАРАЯ',NULL,NULL);
/*!40000 ALTER TABLE `shop_price_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_producer`
--

DROP TABLE IF EXISTS `shop_producer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_producer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `text` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_producer`
--

LOCK TABLES `shop_producer` WRITE;
/*!40000 ALTER TABLE `shop_producer` DISABLE KEYS */;
INSERT INTO `shop_producer` VALUES (1,NULL,'Nike',NULL,'','nike'),(2,NULL,'Adidas',NULL,'','adidas'),(3,NULL,'Lewis',NULL,'','lewis');
/*!40000 ALTER TABLE `shop_producer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_product`
--

DROP TABLE IF EXISTS `shop_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) DEFAULT NULL,
  `producer_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `related_products` text COLLATE utf8_unicode_ci COMMENT 'PHP serialize',
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `short_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_new` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'no',
  `is_popular` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'no',
  `is_promo` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'no',
  `images` text COLLATE utf8_unicode_ci,
  `available` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'yes',
  `sort` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `related_ids` text COLLATE utf8_unicode_ci,
  `sku` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barcode` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `producer_id` (`producer_id`),
  CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_producer` FOREIGN KEY (`producer_id`) REFERENCES `shop_producer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_product`
--

LOCK TABLES `shop_product` WRITE;
/*!40000 ALTER TABLE `shop_product` DISABLE KEYS */;
INSERT INTO `shop_product` VALUES (1,1,NULL,555,NULL,'Nike','Идентификатор','','','no','yes','no',NULL,'yes',NULL,'nike','a:1:{s:25:\"dvizh\\shop\\models\\Product\";a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"3\";}}','Артикул','Штрихкод'),(2,1,2,2515,NULL,'Football','','','','no','yes','no',NULL,'yes',NULL,'football','a:0:{}','',''),(3,1,NULL,2124,NULL,'Mida','','','','no','yes','no',NULL,'yes',NULL,'mida','a:0:{}','',''),(4,1,NULL,123,NULL,'Туфли','','','','no','yes','no',NULL,'yes',NULL,'tufli','a:0:{}','',''),(5,2,NULL,5123,NULL,'Маргарита','','','','no','yes','no',NULL,'yes',NULL,'margarita','a:0:{}','',''),(6,2,NULL,NULL,NULL,'Papperoni','','','','no','no','no',NULL,'yes',NULL,'papperoni','a:0:{}','',''),(7,NULL,NULL,24,NULL,'Духи в набор','','','','no','no','no',NULL,'yes',NULL,'duhi-v-nabor','a:0:{}','','');
/*!40000 ALTER TABLE `shop_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_product_modification`
--

DROP TABLE IF EXISTS `shop_product_modification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_product_modification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8_unicode_ci,
  `available` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'yes',
  `sort` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `filter_values` text COLLATE utf8_unicode_ci,
  `sku` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barcode` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product` (`product_id`),
  CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `shop_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_product_modification`
--

LOCK TABLES `shop_product_modification` WRITE;
/*!40000 ALTER TABLE `shop_product_modification` DISABLE KEYS */;
INSERT INTO `shop_product_modification` VALUES (4,NULL,2,' Кожа -','koza-2','',NULL,'yes',NULL,'2017-12-16 20:14:44','2017-12-16 20:14:44',NULL,'',''),(5,NULL,1,' Кожа -','koza','',NULL,'yes',NULL,'2017-12-20 23:09:40','2017-12-20 23:09:40',NULL,'',''),(6,NULL,1,' Дермантин -','dermantin','',NULL,'yes',NULL,'2017-12-20 23:10:19','2017-12-20 23:10:19',NULL,'',''),(7,NULL,1,' - Добавить автограф','dobavit-avtograf','',NULL,'yes',NULL,'2017-12-20 23:10:36','2017-12-20 23:10:36',NULL,'','');
/*!40000 ALTER TABLE `shop_product_modification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_product_modification_to_option`
--

DROP TABLE IF EXISTS `shop_product_modification_to_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_product_modification_to_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modification_id` int(10) DEFAULT NULL,
  `option_id` int(11) DEFAULT NULL,
  `variant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_product_modification_to_option`
--

LOCK TABLES `shop_product_modification_to_option` WRITE;
/*!40000 ALTER TABLE `shop_product_modification_to_option` DISABLE KEYS */;
INSERT INTO `shop_product_modification_to_option` VALUES (3,4,1,1),(4,4,5,NULL),(5,5,1,1),(6,5,6,NULL),(7,6,1,2),(8,6,6,NULL),(9,7,1,NULL),(10,7,6,8);
/*!40000 ALTER TABLE `shop_product_modification_to_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_product_to_category`
--

DROP TABLE IF EXISTS `shop_product_to_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_product_to_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cat_to_product` (`product_id`),
  KEY `fk_cat_to_product_2` (`category_id`),
  CONSTRAINT `fk_cat_to_product` FOREIGN KEY (`product_id`) REFERENCES `shop_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cat_to_product_2` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_product_to_category`
--

LOCK TABLES `shop_product_to_category` WRITE;
/*!40000 ALTER TABLE `shop_product_to_category` DISABLE KEYS */;
INSERT INTO `shop_product_to_category` VALUES (2,1,1),(4,2,1),(6,3,1),(8,4,1),(10,5,2),(12,6,2),(13,7,1);
/*!40000 ALTER TABLE `shop_product_to_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_stock`
--

DROP TABLE IF EXISTS `shop_stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_stock`
--

LOCK TABLES `shop_stock` WRITE;
/*!40000 ALTER TABLE `shop_stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop_stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_stock_to_product`
--

DROP TABLE IF EXISTS `shop_stock_to_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_stock_to_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_stock_to_product`
--

LOCK TABLES `shop_stock_to_product` WRITE;
/*!40000 ALTER TABLE `shop_stock_to_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop_stock_to_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_stock_to_user`
--

DROP TABLE IF EXISTS `shop_stock_to_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_stock_to_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_stock` (`stock_id`),
  CONSTRAINT `fk_stock` FOREIGN KEY (`stock_id`) REFERENCES `shop_stock` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_stock_to_user`
--

LOCK TABLES `shop_stock_to_user` WRITE;
/*!40000 ALTER TABLE `shop_stock_to_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop_stock_to_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `short_text` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (1,'AYUMI ANIME','Button','<p>“I love to share my energy with you, to make you happy and enjoy my life! I love my every Fan and appreciate any Heart or Support!”</p>',21),(2,'AYUMI ANIME','#','<p>“I love to share my energy with you, to make you happy and enjoy my life! I love my every Fan and appreciate any Heart or Support!”</p>',5);
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_account`
--

DROP TABLE IF EXISTS `social_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  UNIQUE KEY `account_unique_code` (`code`),
  KEY `fk_user_account` (`user_id`),
  CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_account`
--

LOCK TABLES `social_account` WRITE;
/*!40000 ALTER TABLE `social_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribe`
--

LOCK TABLES `subscribe` WRITE;
/*!40000 ALTER TABLE `subscribe` DISABLE KEYS */;
INSERT INTO `subscribe` VALUES (1,'myfirstwork121@gmail.com','1514284948'),(2,'max@gmail.com','1514295304');
/*!40000 ALTER TABLE `subscribe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `token`
--

DROP TABLE IF EXISTS `token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`),
  CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `token`
--

LOCK TABLES `token` WRITE;
/*!40000 ALTER TABLE `token` DISABLE KEYS */;
/*!40000 ALTER TABLE `token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top_videos`
--

DROP TABLE IF EXISTS `top_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top_videos`
--

LOCK TABLES `top_videos` WRITE;
/*!40000 ALTER TABLE `top_videos` DISABLE KEYS */;
INSERT INTO `top_videos` VALUES (8,1),(9,1),(10,1);
/*!40000 ALTER TABLE `top_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`),
  UNIQUE KEY `user_unique_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'administrator','administrator@localhost.lc','$2y$10$C5nrtr7JOXXz0CZ/5aymjOu3Vx3iTOm9HcqpPs3D7ZiCXoVOFKAn.','qI8YZpXSQF1dujgB0GH9361xDfcB8Qwl',1492070371,NULL,NULL,'127.0.0.1',1492070371,1492070371,0,1514301514);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `main_text` text,
  `video` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `like` int(11) NOT NULL DEFAULT '0',
  `unlike` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (24,'Scarlett Knightley - Passionate Love Making After Being Away','Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.','f5a94ee3d34e3a3618432c14955d9d9f.mp4',54,0,0,NULL,19.99,24.99,'2017-12-25'),(25,'Scarlett Knightley - Passionate Love Making After Being Away','Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.','a47f3bc035b0883665caffa818af8518.mp4',29,0,0,NULL,12,15,NULL);
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-26 18:01:02
