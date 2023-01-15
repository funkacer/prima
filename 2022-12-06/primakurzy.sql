-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: primakurzy
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `prezdivka`
--

drop table if exists penize; drop table if exists ucet; drop table if exists `user`;

DROP TABLE IF EXISTS `prezdivka`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prezdivka` (
  `uzivatel_id` int unsigned NOT NULL,
  `nick` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prezdivka`
--

LOCK TABLES `prezdivka` WRITE;
/*!40000 ALTER TABLE `prezdivka` DISABLE KEYS */;
INSERT INTO `prezdivka` VALUES (1,'Bobek'),(2,'Kouzelnik'),(666,'Dabel');
/*!40000 ALTER TABLE `prezdivka` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uzivatel`
--

DROP TABLE IF EXISTS `uzivatel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uzivatel` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `prijmeni` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uzivatel`
--

LOCK TABLES `uzivatel` WRITE;
/*!40000 ALTER TABLE `uzivatel` DISABLE KEYS */;
INSERT INTO `uzivatel` VALUES (1,'Franta','Novak'),(2,'Karel','Svoboda'),(3,'Petr','Horak');
/*!40000 ALTER TABLE `uzivatel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zeme`
--

DROP TABLE IF EXISTS `zeme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zeme` (
  `nazev_cesky` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `mena` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `kontinent` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`nazev_cesky`),
  KEY `mena` (`mena`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zeme`
--

LOCK TABLES `zeme` WRITE;
/*!40000 ALTER TABLE `zeme` DISABLE KEYS */;
INSERT INTO `zeme` VALUES ('Afghánistán','AFN','Asie'),('Albánie','ALL','Evropa'),('Alžírsko','DZD','Afrika'),('Andorra','EUR','Evropa'),('Angola','AOA','Afrika'),('Antigua a Barbuda','XCD','Severní Amerika'),('Argentina','ARS','Jižní Amerika'),('Arménie','AMD','Asie'),('Austrálie','AUD','Austrálie a Oceánie'),('Ázerbájdžán','AZN','Asie'),('Bahamy','BSD','Severní Amerika'),('Bahrajn','BHD','Asie'),('Bangladéš','BDT','Asie'),('Barbados','BBD','Severní Amerika'),('Belgie','EUR','Evropa'),('Belize','BZD','Severní Amerika'),('Bělorusko','BYN','Evropa'),('Benin','XOF','Afrika'),('Bolívie','BOB','Jižní Amerika'),('Bosna a Hercegovina','BAM','Evropa'),('Botswana','BWP','Afrika'),('Brazílie','BRL','Jižní Amerika'),('Brunej','BND','Asie'),('Bulharsko','BGN','Evropa'),('Burkina Faso','XOF','Afrika'),('Burundi','BIF','Afrika'),('Čad','XAF','Afrika'),('Černá Hora','EUR','Evropa'),('Česko','CZK','Evropa'),('Čína','CNY','Asie'),('Dánsko','DKK','Evropa'),('Demokratická republika Kongo','CDF','Afrika'),('Dominika','XCD','Severní Amerika'),('Dominikánská republika','DOP','Severní Amerika'),('Džibutsko','DJF','Afrika'),('Egypt','EGP','Afrika'),('Ekvádor','USD','Jižní Amerika'),('Eritrea','ERN','Afrika'),('Estonsko','EUR','Evropa'),('Etiopie','ETB','Afrika'),('Fidži','FJD','Austrálie a Oceánie'),('Filipíny','PHP','Asie'),('Finsko','EUR','Evropa'),('Francie','EUR','Evropa'),('Gabon','XAF','Afrika'),('Gambie','GMD','Afrika'),('Ghana','GHS','Afrika'),('Grenada','XCD','Severní Amerika'),('Gruzie','GEL','Asie'),('Guatemala','GTQ','Severní Amerika'),('Guinea','GNF','Afrika'),('Guinea-Bissau','XOF','Afrika'),('Guyana','GYD','Jižní Amerika'),('Haiti','HTG','Severní Amerika'),('Honduras','HNL','Severní Amerika'),('Chile','CLP','Jižní Amerika'),('Chorvatsko','HRK','Evropa'),('Indie','INR','Asie'),('Indonésie','IDR','Asie'),('Irák','IQD','Asie'),('Írán','IRR','Asie'),('Irsko','EUR','Evropa'),('Island','ISK','Evropa'),('Itálie','EUR','Evropa'),('Izrael','ILS','Asie'),('Jamajka','JMD','Severní Amerika'),('Japonsko','JPY','Asie'),('Jemen','YER','Asie'),('Jihoafrická republika','ZAR','Afrika'),('Jižní Korea','KRW','Asie'),('Jižní Súdán','SSP','Afrika'),('Jordánsko','JOD','Asie'),('Kambodža','KHR','Asie'),('Kamerun','XAF','Afrika'),('Kanada','CAD','Severní Amerika'),('Kapverdy','CVE','Afrika'),('Katar','QAR','Asie'),('Kazachstán','KZT','Asie'),('Keňa','KES','Afrika'),('Kiribati','AUD','Austrálie a Oceánie'),('Kolumbie','COP','Jižní Amerika'),('Komory','KMF','Afrika'),('Kongo','XAF','Afrika'),('Kostarika','CRC','Severní Amerika'),('Kuvajt','KWD','Asie'),('Kypr','EUR','Asie'),('Kyrgyzstán','KGS','Asie'),('Laos','LAK','Asie'),('Libanon','LBP','Asie'),('Libérie','LRD','Afrika'),('Libye','LYD','Afrika'),('Lichtenštejnsko','CHF','Evropa'),('Litva','EUR','Evropa'),('Lotyšsko','EUR','Evropa'),('Lucembursko','EUR','Evropa'),('Madagaskar','MGA','Afrika'),('Maďarsko','HUF','Evropa'),('Makedonie','MKD','Evropa'),('Malajsie','MYR','Asie'),('Malawi','MWK','Afrika'),('Maledivy','MVR','Asie'),('Mali','XOF','Afrika'),('Malta','EUR','Evropa'),('Maroko','MAD','Afrika'),('Marshallovy ostrovy','USD','Austrálie a Oceánie'),('Mauricius','MUR','Afrika'),('Mauritánie','MRU','Afrika'),('Mexiko','MXN','Severní Amerika'),('Mikronésie','USD','Austrálie a Oceánie'),('Moldavsko','MDL','Evropa'),('Monako','EUR','Evropa'),('Mongolsko','MNT','Asie'),('Mosambik','MZN','Afrika'),('Myanmar','MMK','Asie'),('Nauru','AUD','Austrálie a Oceánie'),('Německo','EUR','Evropa'),('Nepál','NPR','Asie'),('Niger','XOF','Afrika'),('Nigérie','NGN','Afrika'),('Nikaragua','NIO','Severní Amerika'),('Nizozemsko','EUR','Evropa'),('Norsko','NOK','Evropa'),('Nový Zéland','NZD','Austrálie a Oceánie'),('Omán','OMR','Asie'),('Pákistán','PKR','Asie'),('Palau','USD','Austrálie a Oceánie'),('Papua-Nová Guinea','PGK','Austrálie a Oceánie'),('Paraguay','PYG','Jižní Amerika'),('Peru','PEN','Jižní Amerika'),('Pobřeží slonoviny','XOF','Afrika'),('Polsko','PLN','Evropa'),('Portugalsko','EUR','Evropa'),('Rakousko','EUR','Evropa'),('Rovníková Guinea','XAF','Afrika'),('Rumunsko','RON','Evropa'),('Rusko','RUB','Evropa'),('Rwanda','RWF','Afrika'),('Řecko','EUR','Evropa'),('Salvador','USD','Severní Amerika'),('Samoa','WST','Austrálie a Oceánie'),('San Marino','EUR','Evropa'),('Saúdská Arábie','SAR','Asie'),('Senegal','XOF','Afrika'),('Severní Korea','KPW','Asie'),('Seychely','SCR','Afrika'),('Sierra Leone','SLL','Afrika'),('Singapur','SGD','Asie'),('Slovensko','EUR','Evropa'),('Slovinsko','EUR','Evropa'),('Somálsko','SOS','Afrika'),('Spojené arabské emiráty','AED','Asie'),('Spojené království','GBP','Evropa'),('Spojené státy americké','USD','Severní Amerika'),('Srbsko','RSD','Evropa'),('Středoafrická republika','XAF','Afrika'),('Súdán','SDG','Afrika'),('Surinam','SRD','Jižní Amerika'),('Svatá Lucie','XCD','Severní Amerika'),('Svatý Kryštof a Nevis','XCD','Severní Amerika'),('Svatý Tomáš a Princův ostrov','STN','Afrika'),('Svatý Vincenc a Grenadiny','XCD','Severní Amerika'),('Svazijsko','SZL','Afrika'),('Sýrie','SYP','Asie'),('Šalamounovy ostrovy','SBD','Austrálie a Oceánie'),('Španělsko','EUR','Evropa'),('Šrí Lanka','LKR','Asie'),('Švédsko','SEK','Evropa'),('Švýcarsko','CHF','Evropa'),('Tádžikistán','TJS','Asie'),('Tanzanie','TZS','Afrika'),('Thajsko','THB','Asie'),('Togo','XOF','Afrika'),('Tonga','TOP','Austrálie a Oceánie'),('Trinidad a Tobago','TTD','Severní Amerika'),('Tunisko','TND','Afrika'),('Turecko','TRY','Asie'),('Turkmenistán','TMT','Asie'),('Tuvalu','AUD','Austrálie a Oceánie'),('Uganda','UGX','Afrika'),('Ukrajina','UAH','Evropa'),('Uruguay','UYU','Jižní Amerika'),('Uzbekistán','UZS','Asie'),('Vanuatu','VUV','Austrálie a Oceánie'),('Vatikán','EUR','Evropa'),('Venezuela','VEF','Jižní Amerika'),('Vietnam','VND','Asie'),('Východní Timor','USD','Asie'),('Zambie','ZMW','Afrika');
/*!40000 ALTER TABLE `zeme` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-29  9:55:31
